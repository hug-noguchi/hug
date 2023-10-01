<!doctype html>
<html>
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# website: http://ogp.me/ns/websaite#">
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KH58X2H');</script>
<!-- End Google Tag Manager -->
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<meta name="format-detection" content="telephone=no">
<meta property="og:url" content="https://www.hug-inc.co.jp/" />
<meta property="og:type" content="website" />
<meta property="og:title" content="株式会社HUG" />
<meta property="og:description" content="株式会社HUGのビジョンは ”インターネットを通じて人と人をつなぎ社会に新しい価値を創造する”
HUGに関わる全ての人たちが未来に向かってHAPPYを実現するために、日々成長進化し続ける会社です。" />
<meta property="og:site_name" content="株式会社HUG" />
<meta property="og:image" content="https://www.hug-inc.co.jp/images/hero_pc.jpg" />
<meta name="robots" content="noindex,nofollow" />
<title>株式会社HUG -WORK-</title>
<meta name="description" content="株式会社HUGのビジョンは ”インターネットを通じて人と人をつなぎ社会に新しい価値を創造する”
HUGに関わる全ての人たちが未来に向かってHAPPYを実現するために、日々成長進化し続ける会社です。">
<meta name="keywords" content="株式会社HUG,HUG Corporation,web制作">
<meta name="thumbnail" content="https://www.hug-inc.co.jp/images/hero_pc.jpg" />

<!-- Global site tag (gtag.js) - Google Ads: 681893819 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-681893819"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-681893819');
</script>

<!--
<PageMap>
    <DataObject type="thumbnail">
        <Attribute name="src" value="https://www.hug-inc.co.jp/images/hero_pc.jpg" />
        <Attribute name="width" value="100" />
        <Attribute name="height" value="130" />
    </DataObject>
</PageMap>
-->

<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon" href="<?php bloginfo('template_directory'); ?>/images/apple-touch-icon.png" sizes="180x180">
<link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/images/android-touch-icon.png" sizes="192x192">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/styles/reset.css" media="all">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/styles/work.css" media="all">
</head>

<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KH58X2H"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
  <header>
		<h1><img src="<?php bloginfo('template_directory'); ?>/images/logo.svg" alt="株式会社HUG"></h1>
	</header>

	<main>
		<section>
			<h2>WORK</h2>
			<div class="work">
				<?php if(have_posts()): while (have_posts()):the_post(); ?>
					<div id="post-<?php the_ID(); ?>" <?php post_class( 'work_box' ); ?>>
						<?php if( has_post_thumbnail() ): ?>
						<?php else: ?>
						<div>
							<?php echo the_content(); ?>
						</div>
						<?php endif; ?>
					</div>
				<?php endwhile; endif; ?>
			</div>
		</section>
	</main>

	<!--ページネーション-->
	<?php
		if (function_exists("pagination")) {
			pagination($additional_loop->max_num_pages);
		}
	?>

	<footer>
		<div class="ft_nav">
			<ul>
				<li><a href="/company/">会社概要</a></li>
				<li><a href="/privacy-policy/">プライバシーポリシー</a></li>
			</ul>
		</div>
		<small>Copyright HUG Inc. All rights reserved.</small>
	</footer>

</body>
</html>
