import { registerBlockType } from '@wordpress/blocks';
import './style.scss';
import Edit from './edit';
import save from './save';
import metadata from './block.json';

// Import icon directly
import IconBoxIcon from '../icons/icon-box';

registerBlockType(metadata.name, {
    edit: Edit,
    save,
    icon: IconBoxIcon,
});
