<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package thecodebytes
 */

if (! is_active_sidebar('sidebar-1')) {
    return;
}
?>
<aside id="sidebar-left" class="widget-area">
	<?php dynamic_sidebar('sidebar-2'); ?>
</aside><!-- #sidebar-left -->

<aside id="sidebar-right" class="widget-area">
	<?php dynamic_sidebar('sidebar-1'); ?>
</aside><!-- #sidebar-right -->
