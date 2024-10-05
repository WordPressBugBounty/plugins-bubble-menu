<?php
/**
 * Page Name: Support
 *
 */

use BubbleMenu\Admin\SupportForm;
use BubbleMenu\WOWP_Plugin;

defined( 'ABSPATH' ) || exit;
?>

    <div class="wpie-block-tool is-white">

        <p>
			<?php
			esc_html_e( 'To get your support related question answered in the fastest timing, please send a message via the form below or write to us via', 'bubble-menu' );
			echo ' <a href="' . esc_url( WOWP_Plugin::info( 'support' ) ) . '">' . esc_html__( 'support page', 'bubble-menu' ) . '</a>';
			?>
        </p>

        <p>
			<?php esc_html_e( 'Also, you can send us your ideas and suggestions for improving the plugin.', 'bubble-menu' ); ?>
        </p>

		<?php SupportForm::init(); ?>

    </div>
<?php
