<?php 
	
$taxonomy = 'category';

$args = array(
	'orderby' => 'name',
	'order' => 'ASC',
);

$terms = get_terms($taxonomy, $args);

if (is_category()) {
	$cat_object = get_queried_object();
}

?>
<div class="box-sidebar">
	<div class="search-form">
		<form action="/" method="get">
			<div class="form-group form-group-lg">
				<input class="form-control" type="text" name="s" id="search" value="<?php the_search_query(); ?>" placeholder="Search" />
			</div>
		</form>
	</div>
	<div class="categories-wrap">
		<ul>
		<?php foreach($terms as $term): ?>
			<li <?php if(isset($cat_object)): if($cat_object->slug == $term->slug): echo "class='active'"; endif; endif; ?>><a href="<?php echo esc_url(get_term_link($term)); ?>"><?php echo $term->name; ?></a></li>
		<?php endforeach; ?>
		</ul>
	</div>
</div>