<?php
/**
 * Search Template
 *
 * The search template is loaded when a visitor uses the search form to search for something
 * on the site.
 *
 * @package Adroa
 * @subpackage Template
 * @since 0.1.0
 * @author Thiago Senna <thiago@thremes.com.br>
 * @copyright Copyright (c) 2012, Thiago Senna
 * @link http://thremes.com.br/themes/adroa
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

get_header(); // Loads the header.php template. ?>

	<?php do_atomic( 'before_content' ); // adroa_before_content ?>

	<div id="content">

		<?php do_atomic( 'open_content' ); // adroa_open_content ?>

		<div class="hfeed">

			<?php get_template_part( 'loop-meta' ); // Loads the loop-meta.php template. ?>

			<?php if ( have_posts() ) : ?>

				<?php while ( have_posts() ) : the_post(); ?>

					<?php do_atomic( 'before_entry' ); // adroa_before_entry ?>

					<article id="post-<?php the_ID(); ?>" class="<?php hybrid_entry_class(); ?>">

						<?php do_atomic( 'open_entry' ); // adroa_open_entry ?>

						<header class="entry-header">
							<?php echo apply_atomic_shortcode( 'entry_title', '[entry-title]' ); ?>
						</header><!-- .entry-header -->

						<div class="entry-summary">
							<?php the_excerpt(); ?>
						</div><!-- .entry-summary -->

						<footer class="entry-footer">
							<?php echo apply_atomic_shortcode( 'entry_meta', '<div class="entry-meta">' . sprintf( __( '[entry-published] &mdash; <code>%s</code>', 'adroa' ), get_permalink() ) . '</div>' ); ?>
						</footer><!-- .entry-footer -->

						<?php do_atomic( 'close_entry' ); // adroa_close_entry ?>

					</article><!-- .hentry -->

					<?php do_atomic( 'after_entry' ); // adroa_after_entry ?>

				<?php endwhile; ?>

			<?php else : ?>

				<?php get_template_part( 'loop-error' ); // Loads the loop-error.php template. ?>

			<?php endif; ?>

		</div><!-- .hfeed -->

		<?php do_atomic( 'close_content' ); // adroa_close_content ?>

		<?php get_template_part( 'loop-nav' ); // Loads the loop-nav.php template. ?>

	</div><!-- #content -->

	<?php do_atomic( 'after_content' ); // adroa_after_content ?>

<?php get_footer(); // Loads the footer.php template. ?>