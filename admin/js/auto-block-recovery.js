/**
 * Auto Block Recovery
 * Automatically attempts to recover blocks when the editor loads
 */

( function() {
	'use strict';

	// Check if we're in migration mode
	const urlParams = new URLSearchParams( window.location.search );
	const isMigrationMode = urlParams.get( 'adaire_auto_migrate' ) === '1';

	// Wait for the editor to be ready
	const unsubscribe = wp.data.subscribe( function() {
		// Get the block editor store
		const editor = wp.data.select( 'core/block-editor' );
		const dispatch = wp.data.dispatch( 'core/block-editor' );
		
		if ( ! editor ) {
			return;
		}

		// Check if editor is fully initialized
		const blocks = editor.getBlocks();
		if ( ! blocks || blocks.length === 0 ) {
			return;
		}

		// Unsubscribe once we've checked
		unsubscribe();

		// Small delay to ensure editor is fully loaded
		setTimeout( function() {
			attemptAutoRecovery( isMigrationMode );
		}, 500 );
	} );

	/**
	 * Attempt automatic block recovery
	 */
	function attemptAutoRecovery( isMigrationMode ) {
		const editor = wp.data.select( 'core/block-editor' );
		const dispatch = wp.data.dispatch( 'core/block-editor' );
		const coreEditor = wp.data.dispatch( 'core/editor' );
		
		if ( ! editor || ! dispatch ) {
			if ( isMigrationMode ) {
				notifyMigrationComplete( false, 0, 'Editor not ready' );
			}
			return;
		}

		const blocks = editor.getBlocks();
		let recoveredCount = 0;

		blocks.forEach( function( block ) {
			// Check if block is invalid
			if ( ! block.isValid && block.clientId ) {
				try {
					// Attempt to recover the block
					dispatch.replaceBlocks(
						block.clientId,
						wp.blocks.createBlock(
							block.name,
							block.attributes,
							block.innerBlocks
						)
					);
					recoveredCount++;
					
					console.log( '[Adaire Blocks] Auto-recovered block:', block.name );
				} catch ( error ) {
					console.error( '[Adaire Blocks] Failed to auto-recover block:', block.name, error );
				}
			}
		} );

		if ( recoveredCount > 0 ) {
			// Save the post after recovery
			if ( isMigrationMode && coreEditor ) {
				console.log( '[Adaire Blocks Migration] Saving post after recovery...' );
				
				// Wait a moment for blocks to settle, then save
				setTimeout( function() {
					coreEditor.savePost();
					
					// Wait for save to complete
					const saveUnsubscribe = wp.data.subscribe( function() {
						const isSaving = wp.data.select( 'core/editor' ).isSavingPost();
						const didSave = wp.data.select( 'core/editor' ).didPostSaveRequestSucceed();
						
						if ( ! isSaving && didSave ) {
							saveUnsubscribe();
							console.log( '[Adaire Blocks Migration] Post saved successfully' );
							notifyMigrationComplete( true, recoveredCount );
						}
					} );
					
					// Timeout fallback
					setTimeout( function() {
						saveUnsubscribe();
						notifyMigrationComplete( true, recoveredCount );
					}, 5000 );
				}, 1000 );
			} else {
				// Normal mode - show a notice
				wp.data.dispatch( 'core/notices' ).createNotice(
					'success',
					`Adaire Blocks: Automatically recovered ${recoveredCount} block(s).`,
					{
						type: 'snackbar',
						isDismissible: true,
					}
				);
			}
		} else {
			// No blocks recovered
			if ( isMigrationMode ) {
				notifyMigrationComplete( true, 0 );
			}
		}
	}

	/**
	 * Notify parent window that migration is complete
	 */
	function notifyMigrationComplete( success, blocksRecovered, error ) {
		if ( window.parent && window.parent !== window ) {
			window.parent.postMessage( {
				type: 'adaire_migration_complete',
				success: success,
				blocksRecovered: blocksRecovered,
				error: error || null
			}, '*' );
		}
	}

} )();

