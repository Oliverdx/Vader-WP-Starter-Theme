<form role="search" method="get" id="searchform" class="search-form" action="<?php echo home_url( '/' ); ?>">
    <input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search for…', 'placeholder' ); ?>" value="<?php echo get_search_query() ?>" name="s" />
    <input type="submit" class="search-submit" value="Buscar" />
</form>