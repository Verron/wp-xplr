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
import { BlockControls, InspectorControls, useBlockProps } from '@wordpress/block-editor';

import { Flex, FlexBlock, TextControl, TextareaControl, Button } from '@wordpress/components';

import { edit, file } from '@wordpress/icons';

import { useState } from '@wordpress/element';

/**
 * Lets webpack process CSS, SASS or SCSS files referenced in JavaScript files.
 * Those files can contain any CSS code that gets applied to the editor.
 *
 * @see https://www.npmjs.com/package/@wordpress/scripts#using-css
 */
import './editor.scss';
import { PanelBody } from '@wordpress/components';
import { ToggleControl } from '@wordpress/components';
import { ToolbarGroup } from '@wordpress/components';
import { ToolbarButton } from '@wordpress/components';

/**
 * The edit function describes the structure of your block in the context of the
 * editor. This represents what the editor will render when the block is used.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-edit-save/#edit
 *
 * @return {Element} Element to render.
 */
export default function Edit({attributes, setAttributes, isSelected}) {
	const blockProps = useBlockProps();

	const { description, source, link, price } = attributes;

	const [isEditing, setIsEditing] = useState(false);

	return (
		<div { ...useBlockProps() }>
			<InspectorControls>
				<PanelBody>
					<ToggleControl
						label={ __('Edit', 'example-two')}
						checked={ isEditing }
						onChange={ (value) => setIsEditing(value)}
					></ToggleControl>
				</PanelBody>
			</InspectorControls>
			<BlockControls>
				<ToolbarGroup>
					<ToolbarButton
						icon={ isEditing ? file : 'edit'}
						label={ __('Edit', 'example-two')}
						onClick={() => setIsEditing(!isEditing)}
					></ToolbarButton>
				</ToolbarGroup>
			</BlockControls>
			{ isEditing ? (
					<>
						<Flex>
							<FlexBlock>
								<TextareaControl label={ __('Affiliate Description', 'example-two')} value={description} onChange={(value) => setAttributes({'description': value})}/>
							</FlexBlock>
						</Flex>
						<Flex>
							<FlexBlock>
								<TextControl label={ __( 'Affiliate Source', 'example-two')} value={source} onChange={(value) => setAttributes({'source': value})}/>
							</FlexBlock>
							<FlexBlock>
								<TextControl label={ __( 'Affiliate Link', 'example-two')} value={link} onChange={(value) => setAttributes({'link': value})}/>
							</FlexBlock>
						</Flex>
						<Flex>
							<FlexBlock>
								<TextControl label={ __('Affiliate Price', 'example-two')} value={price} onChange={(value) => setAttributes({'price': value})}/>
							</FlexBlock>
						</Flex>
						<Flex>
							<FlexBlock style={{ textAlign: 'right' }}>
								<Button icon={file} variant="primary" onClick={() => setIsEditing(false)}/>
							</FlexBlock>
						</Flex>
					</>
				) : (
					<>
						{
							isSelected && <Flex>
								<FlexBlock style={{ textAlign: 'right'}}>
									<Button icon={edit} variant="primary" onClick={() => setIsEditing(true)} />
								</FlexBlock>
							</Flex>
						}
						<Flex>
							<FlexBlock>
								<p>{ description }</p>
							</FlexBlock>
						</Flex>

						<Flex>
							<FlexBlock>
								<Button>{ price } @ { source }</Button>
							</FlexBlock>
						</Flex>
					</>
				)
			}
		</div>
	);
}
