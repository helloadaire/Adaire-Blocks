import { registerBlockType } from '@wordpress/blocks';
import './style.scss';
import Edit from './edit';
import save from './save';
import metadata from './block.json';
import VideoCarouselIcon from '../icons/video-carousel';

// Merge metadata and override icon with our React component so it renders in the inserter
registerBlockType(metadata.name, {
	...metadata,
	icon: VideoCarouselIcon,
	edit: Edit,
	save,
});

