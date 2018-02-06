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
<div class="social-wrap">
	<div class="fb-page" data-href="https://www.facebook.com/oregonaitc/" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/oregonaitc/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/oregonaitc/">Oregon Agriculture in the Classroom</a></blockquote></div>
</div>