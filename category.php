<?php get_header(); ?>
<?php $category = get_queried_object();
$parentID       = $category->parent;
$parentSlug     = $category->slug;
if ( $parentID > 0 ) {
  get_template_part( 'template-parts/page', 'all' );
}
if ( $parentID == 0 && $parentSlug != 'aktsii' ) {
  get_template_part( 'template-parts/category', 'all' );
}
if ( $parentSlug == 'aktsii' ) {
  get_template_part( 'template-parts/category', 'aktsii' );
}
?>

<?php get_footer(); ?>