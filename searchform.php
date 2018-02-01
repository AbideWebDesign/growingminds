<?php
/**
 * Template for displaying search forms in Growing Minds
 *
 * @package WordPress
 * @subpackage growingminds
 * @since Growing Minds 1.0
 */
?>
<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<div class="form-group form-group-lg">
		<input class="form-control" type="text" class="field" name="s" id="s" placeholder="<?php esc_attr_e( 'Search', 'growingminds' ); ?>" />
	</div>
</form>