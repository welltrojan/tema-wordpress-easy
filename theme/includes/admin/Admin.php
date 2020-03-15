<?php

class Admin
{
	public function __construct()
	{
		add_action('login_footer', array($this, 'footer'));
		add_filter("upload_mimes", array($this, 'cc_mime_types'));
	}


	public static function footer() {
		?>
			<style>
				.login h1 a {
					background-image: url('<?php the_field('logotipo', 'options') ?>');
				}
			</style>
		<?php 
	}
		
	function cc_mime_types($mimes) {
		$mimes['svg'] = 'image/svg+xml';
		return $mimes;
	}

}

new Admin();