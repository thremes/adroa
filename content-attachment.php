<?php
/**
 * Attachment Content Template
 *
 * Template used to show the post content of the attachment post type.
 *
 * @package Adroa
 * @subpackage Template
 * @since 0.1.0
 * @author Thiago Senna <thiago@thremes.com.br>
 * @copyright Copyright (c) 2012, Thiago Senna
 * @link http://thremes.com.br/themes/adroa
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

do_atomic( 'before_entry' ); // adroa_before_entry ?>

<article id="post-<?php the_ID(); ?>" class="<?php hybrid_entry_class(); ?>">

	<?php do_atomic( 'open_entry' ); // adroa_open_entry ?>

	<?php if ( is_singular() ) { ?>

		<header class="entry-header">
			<?php echo apply_atomic_shortcode( 'entry_title', '[entry-title]' ); ?>
		</header><!-- .entry-header -->

		<div class="entry-content">
			<?php hybrid_attachment(); // Function for handling non-image attachments. ?>
			<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'adroa' ) ); ?>
			<?php wp_link_pages( array( 'before' => '<p class="page-links">' . __( 'Pages:', 'adroa' ), 'after' => '</p>' ) ); ?>
		</div><!-- .entry-content -->

		<footer class="entry-footer">
			<?php echo apply_atomic_shortcode( 'entry_meta', '<div class="entry-meta">' . __( 'Published on [entry-published] [entry-edit-link before="| "]', 'adroa' ) . '</div>' ); ?>
		</footer><!-- .entry-footer -->

	<?php } else { ?>

		<?php if ( current_theme_supports( 'get-the-image' ) ) get_the_image( array( 'meta_key' => 'Thumbnail', 'size' => 'thumbnail' ) ); ?>

		<header class="entry-header">
			<?php echo apply_atomic_shortcode( 'entry_title', '[entry-title]' ); ?>
		</header><!-- .entry-header -->

		<div class="entry-summary">
			<?php the_excerpt(); ?>
			<?php wp_link_pages( array( 'before' => '<p class="page-links">' . __( 'Pages:', 'adroa' ), 'after' => '</p>' ) ); ?>
		</div><!-- .entry-summary -->

	<?php } ?>

	<?php do_atomic( 'close_entry' ); // adroa_close_entry ?>

</article><!-- .hentry -->

<?php do_atomic( 'after_entry' ); // adroa_after_entry ?>