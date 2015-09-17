<?php
/**
 * Hooks linking WooCommerce functionality into Sensei
 */

/**
 * show the WooCommerce course filter links above the courses
 * @since 1.9.0
 */
add_filter( 'sensei_archive_course_filter_by_options', array( 'Sensei_WC', 'add_course_archive_wc_filter_links' ) );

/**
 * filter the queries for paid and free course based on the users selection.
 * @since 1.9.0
 */
add_filter('pre_get_posts', array( 'Sensei_WC', 'course_archive_wc_filter_free'));
add_filter('pre_get_posts', array( 'Sensei_WC', 'course_archive_wc_filter_paid'));
