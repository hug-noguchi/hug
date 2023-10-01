<!doctype html>
<html>
<!-- <head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<meta name="format-detection" content="telephone=no">
<meta name="robots" content="noindex,nofollow" />
<title>株式会社HUG - WORK -</title>
<meta name="description" content="株式会社HUGはこう考えます。
相手を大事にするからいい「人」が生まれる。そしてそこに新しい「人」が集まって
良い会社になっていく。">
<meta name="keywords" content="株式会社HUG,HUG Corporation,web制作">
Global site tag (gtag.js) - Google Analytics
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-139148070-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-139148070-1');
</script> -->
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
<title>株式会社HUG</title>
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
  <header>
		<h1><img src="<?php bloginfo('template_directory'); ?>/images/logo.svg" alt="株式会社HUG"></h1>
	</header>

	<main>
		<section id="news">
			<div class="box">
				<div id="content">

					<div class="news_box">
						<?php if(have_posts()): while (have_posts()):the_post(); ?>
							<div class="content">

								<div class="content_box">
									<div id="post-<?php the_ID(); ?>" <?php post_class( 'module-Article_Item' ); ?>>
										<a href="<?php the_permalink(); ?>">
											<div style="width: calc(31.3% - 4px);">
												<?php if( has_post_thumbnail() ): ?>
													<?php the_post_thumbnail( 'archive_thumbnail' ); ?>
												<?php else: ?>
													<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/eff-sorila.jpg" alt="news02" />
													<p><?php the_title(); ?></p>
												<?php endif; ?>
											</div>
										</a>
									</div>
								</div>

							</div>
						<?php endwhile; endif; ?>
					</div>

				</div>

			</div>
		</section>
		<!-- <section>
			<h2>WORK</h2>
			<div>
				<ul>
					<li>
						<a href="https://eff-sorila.com/" rel="nofollow" target="_blank">
							<div>
								<img src="<?php echo get_template_directory_uri(); ?>/images/eff-sorila.jpg" alt="WEBリスクマネジメント専門メディアサイト">
							</div>
							<p>
								WEBリスクマネジメント専門メディアサイト
							</p>
						</a>
					</li>

					<li>
						<a href="https://ev.ray.co.jp/" rel="nofollow" target="_blank">
							<div>
								<img src="<?php echo get_template_directory_uri(); ?>/images/ray.png" alt="株式会社レイ">
							</div>
							<p>
								株式会社レイ
							</p>
						</a>
					</li>

					<li>
						<a href="http://www.fmworld.net/product/phone/f-02l/lightroom/" rel="nofollow" target="_blank">
							<div>
								<img src="<?php echo get_template_directory_uri(); ?>/images/fmworld.png" alt="スマホアプリ紹介LP">
							</div>
							<p>
								スマホアプリ紹介LP
							</p>
						</a>
					</li>

					<li>
						<a href="https://otokucon.net/" rel="nofollow" target="_blank">
							<div>
								<img src="<?php echo get_template_directory_uri(); ?>/images/otokucon_lp.png" alt="結婚式キャンペーン応募LP">
							</div>
							<p>
								結婚式キャンペーン応募LP
							</p>
						</a>
					</li>

					<li>
						<a href="https://xn--t8j597j6jd.net/" rel="nofollow" target="_blank">
							<div>
								<img src="<?php echo get_template_directory_uri(); ?>/images/otokucon.png" alt="結婚オウンドメディア">
							</div>
							<p>
								結婚オウンドメディア
							</p>
						</a>
					</li>

					<li>
						<a href="https://www.kitakoi.info/" rel="nofollow" target="_blank">
							<div>
								<img src="<?php echo get_template_directory_uri(); ?>/images/kitakoi.png" alt="北海道結婚オウンドメディア">
							</div>
							<p>
								北海道結婚オウンドメディア
							</p>
						</a>
					</li>

					<li>
						<a href="https://rody.co.jp/ad/hs/real/rodygift/index.html" rel="nofollow" target="_blank">
							<div>
								<img src="<?php echo get_template_directory_uri(); ?>/images/rody.png" alt="ギフト購入LP">
							</div>
							<p>
								ギフト購入LP
							</p>
						</a>
					</li>

					<li>
						<a href="https://xn--u9jth2e374lifu8u3a.com/" rel="nofollow" target="_blank">
							<div>
								<img src="<?php echo get_template_directory_uri(); ?>/images/ehonn.png" alt="絵本口コミサイト">
							</div>
							<p>
								絵本口コミサイト
							</p>
						</a>
					</li>

					<li>
						<a href="https://xn--lck4c8046ax4c.com/" rel="nofollow" target="_blank">
							<div>
								<img src="<?php echo get_template_directory_uri(); ?>/images/kani.png" alt="カニ通販サイト">
							</div>
							<p>
								カニ通販サイト
							</p>
						</a>
					</li>
				</ul>
			</div>
		</section> -->
	</main>

	<ul class="Pagination">
		<!-- <li class="Pagination-Item">
			<a class="Pagination-Item-Link" href="/work/">
				<svg xmlns="http://www.w3.org/2000/svg" class="Pagination-Item-Link-Icon" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
				<path stroke-linecap="round" stroke-linejoin="round" d="M11 19l-7-7 7-7m8 14l-7-7 7-7" />
			</svg>
			</a>
		</li> -->
		<li class="Pagination-Item">
			<a class="Pagination-Item-Link isActive" href="/work/"><span>1</span></a>
		</li>
		<li class="Pagination-Item">
			<a class="Pagination-Item-Link" href="/work2/"><span>2</span></a>
		</li>
		<li class="Pagination-Item">
			<a class="Pagination-Item-Link" href="/work2/">
				<svg xmlns="http://www.w3.org/2000/svg" class="Pagination-Item-Link-Icon" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
				<path stroke-linecap="round" stroke-linejoin="round" d="M13 5l7 7-7 7M5 5l7 7-7 7" />
			</svg>
			</a>
		</li>
	</ul>

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
