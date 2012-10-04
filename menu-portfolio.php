<?php
/**
 * Portfolio Menu Template
 *
 * Displays the Portfolio Menu.
 *
 * @package Adroa
 * @subpackage Template
 * @since 0.1.0
 * @author Thiago Senna <thiago@thremes.com.br>
 * @copyright Copyright (c) 2012, Thiago Senna
 * @link http://thremes.com.br/themes/adroa
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

$show_all_class = is_post_type_archive( 'portfolio_item' ) ? 'class="current-cat"' : '';
?>

<?php do_atomic( 'before_menu_portfolio' ); // adroa_before_menu_portfolio ?>

<nav id="menu-portfolio" class="menu-container">

	<?php do_atomic( 'open_menu_portfolio' ); // adroa_open_menu_portfolio ?>

	<ul id="menu-portfolio-items">

        <li <?php echo $show_all_class; ?>>
            <a href="<?php echo get_post_type_archive_link( 'portfolio_item' ); ?>"><?php echo __( 'Show All', 'adroa' ) ?></a>
        </li>

		<?php wp_list_categories( 'taxonomy=portfolio&show_option_all=&title_li=' ); ?>

	</ul><!-- #menu-portfolio-items -->

	<?php do_atomic( 'close_menu_portfolio' ); // adroa_close_menu_portfolio ?>

</nav><!-- #menu-portfolio .menu-container -->

<?php do_atomic( 'after_menu_portfolio' ); // adroa_after_menu_portfolio ?>