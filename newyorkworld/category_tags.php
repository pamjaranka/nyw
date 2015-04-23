<?php
$post_id = get_the_id();
$categories = get_the_category();
$separator = ', ';
$output = '';
if($categories){
	foreach($categories as $category) {
		$category_id = $category->term_id;
		if ($category_id != 3) {
			$output .= '<a href="'.get_category_link( $category->term_id ).'" title="' . esc_attr( sprintf( __( "View all posts in %s" ), $category->name ) ) . '">'.$category->cat_name.'</a>'.$separator;
		}
	}
	echo '<span>Categories: ';
	echo trim($output, $separator);
	echo '</span>';
}

$posttags = get_the_tags();
$output_tag = '';
if ($posttags) {
	if($categories){
		echo '<span class="separator-line"></span>';
	}
	foreach($posttags as $tag) {
		$output_tag .= '<a href="'.get_tag_link( $tag->term_id ).'" title="' . esc_attr( sprintf( __( "View all tags in %s" ), $tag->name ) ) . '">'.$tag->name.'</a>'.$separator;
  }
	echo '<span>Location: ';
	echo trim($output_tag, $separator);
	echo '</span>';
}
?>