<?php
/**
 * Gutenberg Editor Styles
 */
function kl_block_editor_styles() {
  $version = filemtime( get_stylesheet_directory() . '/editor.css' );

  wp_enqueue_style(
    'editor-css',
    get_stylesheet_directory_uri() . '/editor.css',
    [],
    $version
	);

	$version = filemtime(get_stylesheet_directory() . '/src/styles/styles.css');
	wp_enqueue_style('regular-styles', get_stylesheet_directory_uri() . '/src/styles/styles.css', [], $version);
  //wp_enqueue_script('feather-icons', 'https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.28.0/feather.min.js');
}
add_action('enqueue_block_editor_assets', 'kl_block_editor_styles');
?>
