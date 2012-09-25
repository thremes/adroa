<?php
/**
 * Attachment Template
 *
 * This is the default attachment template.  It is used when visiting the singular view of a post attachment 
 * page (images, videos, audio, etc.).
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

			<?php if ( have_posts() ) : ?>

				<?php while ( have_posts() ) : the_post(); ?>

					<?php do_atomic( 'before_entry' ); // adroa_before_entry ?>

					<article id="post-<?php the_ID(); ?>" class="<?php hybrid_entry_class(); ?>">

						<?php do_atomic( 'open_entry' ); // adroa_open_entry ?>

						<header class="entry-header">
							<?php echo apply_atomic_shortcode( 'entry_title', the_title( '<h1 class="entry-title">', '</h1>', false ) ); ?>
							<?php echo apply_atomic_shortcode( 'byline', '<div class="byline">' . sprintf( __( 'Sizes: %s', 'adroa' ), adroa_get_image_size_links() ) . '</div>' ); ?>
						</header><!-- .entry-header -->

						<div class="entry-content">

							<?php if ( has_excerpt() ) {
								$src = wp_get_attachment_image_src( get_the_ID(), 'full' );
								echo do_shortcode( sprintf( '[caption align="aligncenter" width="%1$s"]%3$s %2$s[/caption]', esc_attr( $src[1] ), get_the_excerpt(), wp_get_attachment_image( get_the_ID(), 'full', false ) ) );
							} else {
								echo wp_get_attachment_image( get_the_ID(), 'full', false, array( 'class' => 'aligncenter' ) );
							} ?>

							<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'adroa' ) ); ?>
							<?php wp_link_pages( array( 'before' => '<p class="page-links">' . __( 'Pages:', 'adroa' ), 'after' => '</p>' ) ); ?>

						</div><!-- .entry-content -->

						<?php do_atomic( 'close_entry' ); // adroa_close_entry ?>

					</article><!-- .hentry -->

					<?php do_atomic( 'after_entry' ); // adroa_after_entry ?>

					<div class="attachment-meta">

						<?php adroa_image_info(); ?>

						<?php $gallery = do_shortcode( sprintf( '[gallery id="%1$s" exclude="%2$s" columns="5" numberposts="10" orderby="rand"]', $post->post_parent, get_the_ID() ) ); ?>

						<?php if ( !empty( $gallery ) ) { ?>
							<div class="image-gallery">
								<h3><?php _e( 'Gallery', 'adroa' ); ?></h3>
								<?php echo $gallery; ?>
							</div>
						<?php } ?>

					</div><!-- .attachment-meta -->

					<?php do_atomic( 'after_singular' ); // adroa_after_singular ?>

					<?php comments_template( '/comments.php', true ); // Loads the comments.php template. ?>

				<?php endwhile; ?>

			<?php endif; ?>

		</div><!-- .hfeed -->

		<?php do_atomic( 'close_content' ); // adroa_close_content ?>

	</div><!-- #content -->

	<?php do_atomic( 'after_content' ); // adroa_after_content ?>

<?php get_footer(); // Loads the footer.php template. ?>