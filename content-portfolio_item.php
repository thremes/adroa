<?php
/**
 * Portfolio Item Content Template
 *
 * Template used to show portfolio item content.
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

	<header class="entry-header">
		<?php echo apply_atomic_shortcode( 'entry_title', the_title( '<h1 class="entry-title">', '</h1>', false ) ); ?>
	</header><!-- .entry-header -->

    <?php if ( current_theme_supports( 'get-the-image' ) ) get_the_image( array( 'meta_key' => 'Large', 'size' => 'large' ) ); ?>

	<div class="entry-content">
		<?php the_content(); ?>
	</div><!-- .entry-content -->

    <header class="entry-footer">
        <?php echo apply_atomic_shortcode( 'entry_meta', '<div class="entry-meta">' . __( '[entry-terms taxonomy="portfolio" before="Published in "] [entry-edit-link before=" | "]', 'adroa' ) . '</div>' ); ?>
    </header><!-- .entry-header -->

	<?php do_atomic( 'close_entry' ); // adroa_close_entry ?>

</article><!-- .hentry -->

<?php do_atomic( 'after_entry' ); // adroa_after_entry ?>