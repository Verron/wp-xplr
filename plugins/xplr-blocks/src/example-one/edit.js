/**
 * Retrieves the translation of text.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/packages/packages-i18n/
 */
import { __ } from '@wordpress/i18n';

/**
 * React hook that is used to mark the block wrapper element.
 * It provides all the necessary props like the class name.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/packages/packages-block-editor/#useblockprops
 */
import { useBlockProps, useInnerBlocksProps } from '@wordpress/block-editor';

/**
 * Lets webpack process CSS, SASS or SCSS files referenced in JavaScript files.
 * Those files can contain any CSS code that gets applied to the editor.
 *
 * @see https://www.npmjs.com/package/@wordpress/scripts#using-css
 */
import './editor.scss';

import { Flex, FlexBlock } from '@wordpress/components';

/**
 * The edit function describes the structure of your block in the context of the
 * editor. This represents what the editor will render when the block is used.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-edit-save/#edit
 *
 * @return {Element} Element to render.
 */
export default function Edit() {
	const blockProps = useBlockProps();
	const innerBlockProps = useInnerBlocksProps(blockProps, {
		template: [
			[ 'core/heading', { placeholder: __( 'Title', 'example-one' ), level: 2 } ],
			[ 'core/paragraph', { placeholder: __( 'Content', 'example-one' ) } ],
			[ 'core/image', { placeholder: __( 'Image', 'example-one' ) }],
		]
	});

	return (
		<div { ...useBlockProps() }>
			<Flex>
				<FlexBlock>
					<div { ...innerBlockProps }></div>
				</FlexBlock>
			</Flex>
		</div>
	);
}
