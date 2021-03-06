<?php
$section    = isset( $_GET['section'] ) ? $_GET['section'] : 'dashboard'; // wpcs csrf ok.
$plugin_url = forminator_plugin_url();
$nonce      = wp_create_nonce( 'forminator_save_payments_settings' );
?>

<div class="sui-box" data-nav="payments" style="<?php echo esc_attr( 'payments' !== $section ? 'display: none;' : '' ); ?>">

	<div class="sui-box-header">

		<h2 class="sui-box-title"><?php esc_html_e( 'Payments', Forminator::DOMAIN ); ?></h2>

		<span
			class="sui-tag sui-tag-beta sui-tooltip sui-tooltip-top sui-tooltip-constrained"
			style="margin-left: 10px; padding-top: 0; padding-bottom: 0; font-size: 9px; line-height: 12px;"
			data-tooltip="<?php esc_html_e( 'Payments are a beta feature. Be sure to test it before collecting live payments. If you notice any issues, please contact support.', Forminator::DOMAIN ); ?>"
		>
			<?php esc_html_e( 'BETA', Forminator::DOMAIN ); ?>
		</span>

	</div>

	<form class="forminator-settings-save" action="">

		<div class="sui-box-body">

			<?php if ( class_exists( 'Forminator_Gateway_Stripe' ) ) : ?>
				<div id="sui-box-stripe" class="sui-box-settings-row">
					<?php $this->template( 'settings/payments/section-stripe' ); ?>
				</div>
			<?php endif; ?>

			<div id="sui-box-paypal" class="sui-box-settings-row">
				<?php $this->template( 'settings/payments/section-paypal' ); ?>
			</div>

		</div>

		<div class="sui-box-footer">

			<div class="sui-actions-right">

				<button
					class="sui-button sui-button-blue wpmudev-action-done"
					data-title="<?php esc_attr_e( "Payments settings", Forminator::DOMAIN ); ?>"
					data-action="payments_settings"
					data-nonce="<?php echo esc_attr( $nonce ); ?>"
				>
					<span class="sui-loading-text"><?php esc_html_e( 'Save Settings', Forminator::DOMAIN ); ?></span>
					<i class="sui-icon-loader sui-loading" aria-hidden="true"></i>
				</button>

			</div>

		</div>

	</form>

</div>
