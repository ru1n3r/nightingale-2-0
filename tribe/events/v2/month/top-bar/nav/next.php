<?php
/**
 * View: Top Bar Navigation Next Template
 *
 * Override this template in your own theme by creating a file at:
 * [your-theme]/tribe/events/v2/month/top-bar/nav/next.php
 *
 * See more documentation about our views templating system.
 *
 * @link {INSERT_ARTCILE_LINK_HERE}
 *
 * @var string $next_url The URL to the next page, if any, or an empty string.
 *
 * @version 5.0.1
 *
 */
?>
<li class="tribe-events-c-top-bar__nav-list-item nhsuk-pagination-item--next">
	<a
		href="<?php echo esc_url( $next_url ); ?>"
		aria-label="<?php esc_attr_e( 'Next month', 'the-events-calendar' ); ?>"
		title="<?php esc_attr_e( 'Next month', 'the-events-calendar' ); ?>"
		data-js="tribe-events-view-link"
        rel="next"
	>
        <span class="nhsuk-pagination__title"><?php echo $next_label; ?></span>
        <svg class="nhsuk-icon nhsuk-icon__arrow-right" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true">
            <path d="M19.6 11.66l-2.73-3A.51.51 0 0 0 16 9v2H5a1 1 0 0 0 0 2h11v2a.5.5 0 0 0 .32.46.39.39 0 0 0 .18 0 .52.52 0 0 0 .37-.16l2.73-3a.5.5 0 0 0 0-.64z"></path>
        </svg>
	</a>
</li>
