<?php
/**
 * Archive Portfolio Item Template
 *
 * @package Adroa
 * @subpackage Template
 * @since 0.1.0
 * @author Thiago Senna <thiago@thremes.com.br>
 * @copyright Copyright (c) 2012, Thiago Senna
 * @link http://thremes.com.br/themes/adroa
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

/* Set up some default variables to use in the portfolio_item. */
$portfolio_item_columns = apply_atomic( 'archive_portfolio_item_columns', 2 );
$portfolio_item_iterator = 0;

get_header(); // Loads the header.php template. ?>

<?php get_template_part( 'loop-meta' ); // Loads the loop-meta.php template. ?>

<?php get_template_part( 'menu', 'portfolio' ); // Loads the menu-portfolio.php template. ?>

<?php do_atomic( 'before_content' ); // adroa_before_content ?>

<div id="content">

    <?php do_atomic( 'open_content' ); // adroa_open_content ?>

    <div class="hfeed">

        <?php if ( have_posts() ) : ?>

        <div class="portfolio_item">

            <?php while ( have_posts() ) : the_post(); ?>

            <?php if ( $portfolio_item_columns > 0 && $portfolio_item_iterator % $portfolio_item_columns == 0 ) echo '<div class="portfolio_item-row">'; ?>

            <div class="portfolio_item-item col-<?php echo esc_attr( $portfolio_item_columns ); ?>">

                <div class="portfolio_item-icon">
                    <?php get_the_image( array( 'meta_key' => 'Medium', 'size' => 'medium', 'image_scan' => true ) ); ?>
                </div>
                <div class="portfolio_item-caption">
                    <?php the_title(); ?>
                </div>
                <div class="portfolio_item-meta">
                    <?php echo apply_atomic_shortcode( 'portfolio_item_meta', __( '[entry-terms taxonomy="portfolio"]', 'adroa' ) ); ?>
                </div>

            </div>

            <?php if ( $portfolio_item_columns > 0 && ++$portfolio_item_iterator % $portfolio_item_columns == 0 ) echo '</div>'; ?>

            <?php endwhile; ?>

            <?php if ( $portfolio_item_columns > 0 && $portfolio_item_iterator % $portfolio_item_columns !== 0 ) echo '</div>'; ?>

        </div><!-- .portfolio_item -->

        <?php else : ?>

        <?php get_template_part( 'loop-error' ); // Loads the loop-error.php template. ?>

        <?php endif; ?>

    </div><!-- .hfeed -->

    <?php do_atomic( 'close_content' ); // adroa_close_content ?>

    <?php get_template_part( 'loop-nav' ); // Loads the loop-nav.php template. ?>

</div><!-- #content -->

<?php do_atomic( 'after_content' ); // adroa_after_content ?>

<?php get_footer(); // Loads the footer.php template. ?>