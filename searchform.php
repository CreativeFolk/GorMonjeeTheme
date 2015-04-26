<form role="search" method="get" class="search-form clearfix row" action="<?php echo home_url( '/' ); ?>">
<div class="form-group has-feedback col-xs-12 col-md-6 col-lg-3 pull-right">
	<label for="s" class="control-label sr-only">

		<span class="sr-only"><?php echo _x( 'Search for:', 'label' ) ?></span>

  </label>
		<input type="search" 
          class="search-field form-control" 
          placeholder="<?php echo esc_attr_x( 'Search …', 'placeholder' ) ?>" 
          value="<?php echo get_search_query() ?>" 
          name="s"
          id="s"
          title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" 
    />
    <span class="glyphicon glyphicon-search form-control-feedback"></span>
  	<input type="submit" class="search-submit sr-only" value="Search" />
</div>
</form>