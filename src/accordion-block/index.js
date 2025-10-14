import './editor.scss';
import './style.scss';
import './edit';
import './save';

import { registerBlockType } from '@wordpress/blocks';
import { useBlockProps, RichText } from '@wordpress/block-editor';
import Edit from './edit';
import Save from './save';
import metadata from './block.json';

registerBlockType(metadata.name, {
	edit: Edit,
	save: Save,
});

