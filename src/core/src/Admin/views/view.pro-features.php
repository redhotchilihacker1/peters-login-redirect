<?php

if (defined('LOGINWP_DETACH_LIBSODIUM')) return;

$utm_campaign = isset($pro_features_campaign) ? $pro_features_campaign : 'do_more_with_pro';

$pro_features = [
	[
		'icon'   => 'dashicons-admin-users',
		'title'  => esc_html__('Redirect after the first login', 'peters-login-redirect'),
		'desc'   => esc_html__('Give first-time users a separate destination with LoginWP Pro.', 'peters-login-redirect'),
		'button' => esc_html__('Unlock first-login redirects', 'peters-login-redirect'),
	],
	[
		'icon'   => 'dashicons-cart',
		'title'  => esc_html__('WooCommerce redirect rules', 'peters-login-redirect'),
		'desc'   => esc_html__('Add WooCommerce-specific conditions to your redirects with LoginWP Pro.', 'peters-login-redirect'),
		'button' => esc_html__('Unlock WooCommerce rules', 'peters-login-redirect'),
	],
	[
		'icon'   => 'dashicons-undo',
		'title'  => esc_html__('Return to the previous page', 'peters-login-redirect'),
		'desc'   => esc_html__('Send users back to the page they visited before logging in with LoginWP Pro.', 'peters-login-redirect'),
		'button' => esc_html__('Unlock previous-page redirects', 'peters-login-redirect'),
	],
	[
		'icon'   => 'dashicons-id-alt',
		'title'  => esc_html__('Redirect by membership level', 'peters-login-redirect'),
		'desc'   => esc_html__('Set level-based redirects using supported membership integrations in LoginWP Pro.', 'peters-login-redirect'),
		'button' => esc_html__('Unlock membership rules', 'peters-login-redirect'),
	],
];

$pro_features_url = add_query_arg(
	['utm_source' => 'wp_dashboard', 'utm_medium' => 'upgrade', 'utm_campaign' => $utm_campaign],
	'https://loginwp.com/pricing/'
);
?>
<style>
	.loginwp-pro-features { margin: 25px 0 10px; padding-top: 15px; border-top: 1px solid #c3c4c7; }
	.loginwp-pro-features > h3 { margin: 0 0 15px; }
	.loginwp-pro-features-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(190px, 1fr)); gap: 15px; }
	.loginwp-pro-feature { position: relative; display: flex; flex-direction: column; box-sizing: border-box; padding: 18px; background: #fff; border: 1px solid #dcdcde; border-top: 3px solid #3C50FF; border-radius: 4px; }
	.loginwp-pro-feature .dashicons { width: 32px; height: 32px; font-size: 32px; color: #3C50FF; margin-bottom: 15px; }
	.loginwp-pro-feature-badge { position: absolute; top: 10px; right: 10px; padding: 1px 8px; font-size: 11px; font-weight: 600; color: #50575e; background: #f0f0f1; border-radius: 3px; }
	.loginwp-pro-feature h4 { margin: 0 0 8px; font-size: 14px; }
	.loginwp-pro-feature p { margin: 0 0 15px; color: #50575e; }
	.loginwp-pro-feature .button { margin-top: auto; text-align: center; background: #3C50FF !important; border-color: #3C50FF !important; color: #fff !important; }
	.loginwp-pro-feature .button:hover, .loginwp-pro-feature .button:focus { background: #2a3ad6 !important; border-color: #2a3ad6 !important; color: #fff !important; }
</style>
<div class="loginwp-pro-features">
	<h3><?= esc_html__('Do More with Pro', 'peters-login-redirect') ?></h3>
	<div class="loginwp-pro-features-grid">
		<?php foreach ($pro_features as $feature) : ?>
			<div class="loginwp-pro-feature">
				<span class="loginwp-pro-feature-badge"><?= esc_html__('PRO', 'peters-login-redirect') ?></span>
				<span class="dashicons <?= esc_attr($feature['icon']) ?>" aria-hidden="true"></span>
				<h4><?= $feature['title'] ?></h4>
				<p><?= $feature['desc'] ?></p>
				<a class="button" href="<?= esc_url($pro_features_url) ?>" target="_blank" rel="noopener"><?= $feature['button'] ?></a>
			</div>
		<?php endforeach; ?>
	</div>
</div>
