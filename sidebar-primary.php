<?php
/**
 * Primary Sidebar Template
 *
 * Displays widgets for the Primary dynamic sidebar if any have been added to the sidebar through the 
 * widgets screen in the admin by the user.  Otherwise, nothing is displayed.
 *
 * @package Adroa
 * @subpackage Template
 * @since 0.1.0
 * @author Thiago Senna <thiago@thremes.com.br>
 * @copyright Copyright (c) 2012, Thiago Senna
 * @link http://thremes.com.br/themes/adroa
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

if ( is_active_sidebar( 'primary' ) ) : ?>

	<?php do_atomic( 'before_sidebar_primary' ); // adroa_before_sidebar_primary ?>

	<div id="sidebar-primary" class="sidebar">

		<?php do_atomic( 'open_sidebar_primary' ); // adroa_open_sidebar_primary ?>

		<?php dynamic_sidebar( 'primary' ); ?>

		<?php do_atomic( 'close_sidebar_primary' ); // adroa_close_sidebar_primary ?>

	</div><!-- #sidebar-primary .aside -->

	<?php do_atomic( 'after_sidebar_primary' ); // adroa_after_sidebar_primary ?>

<?php endif; ?>