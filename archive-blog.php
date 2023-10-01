
<!doctype html>
<html id="blog">
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
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
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
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/styles/style.css" media="all">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KH58X2H"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    <header>
        <div class="header_in">
            <h1>
                <a href="/">
                    <img src="<?php bloginfo('template_directory'); ?>/images/logo_01.svg" alt="株式会社HUG HUG Corporation">
                </a>
            </h1>
            <div id="nav-toggle" class="sp">
              <div>
                <span></span>
                <span></span>
                <span></span>
              </div>
            </div>
            <div id="menu">
              <ul>
                <li class="pc"><a href="/">Home</a></li>
                <li class="menu0"><a href="/#menu_01">Philosophy</a></li>
                <li class="menu1"><a href="/#menu_02">About Us</a></li>
                <li class="menu2"><a href="/#menu_03">Service</a></li>
                <li class="menu3"><a href="/#menu_04">Company Profile</a></li>
                <li class="menu_blog"><a href="/#menu_blog">HUG’s Blog</a></li>
                <li class="menu_sns"><a href="/#menu_sns">HUG’s Sns</a></li>
                <li class="menu4"><a href="/#menu_05">Contact</a></li>
              </ul>
          </div>
        </div>
    </header>
	<article class="box_02">
		<ul id="breadcrumb">
			<li><a href="/">ホーム</a>&nbsp;&gt;&nbsp;</li>
			<?php if (is_post_type_archive('blog')): ?>
			<li>ブログ一覧</li>
			<?php endif; ?>
			<?php if(!is_home() && is_single()): ?>
			<li><a href="/blog/">ブログ一覧</a>&nbsp;&gt;&nbsp;</li>
			<li><?php the_title_attribute(); ?></li>
			<?php endif; ?>
		</ul>
		<section>
			<h2>ブログ一覧</h2>
			<table>
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<tr>
					<th>
						<time><?php the_time('Y.m.d'); ?></time>
					</th>
					<td id="post-<?php the_ID(); ?>">
						<?php
							$days = 7; //Newを表示させたい期間の日数
							$today = date_i18n('U');
							$entry = get_the_time('U');
							$kiji = date('U',($today - $entry)) / 86400 ;
							if( $days > $kiji ){
							echo '<span>NEW</span>';
							}
						?>
						<a style="display: inline-block;" href="<?php the_permalink(); ?>"><?php the_title_attribute(); ?></a>
					</td>
				</tr>
					<?php endwhile; endif; ?>
			</table>
			<!--ページネーション-->
<?php
//Pagenation 
if (function_exists("pagination")) {
	pagination($additional_loop->max_num_pages);
}
?>
		</section>
</article>

<footer>
        <small>Copyright HUG Inc. All rights reserved.</small>
    </footer>
    <?php wp_footer(); ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/script/jquery.inview.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/script/script.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/script/instafeed.min.js"></script>

    <script type="text/javascript">
    var feed = new Instafeed({
        clientId: 'a3ea06fd2b404a31af98bf2f7922a0d1',
        get: 'user', 
        userId: '13125949894',
        accessToken:'13125949894.a3ea06f.89651888af9b48018f49040e7c213436',
        links: true,
        limit: 6,
        resolution:'thumbnail', 
        template: '<a href="{{link}}" target="_blank"><img src={{image}} alt={{caption}}></a>' // 
    });
    feed.run();
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.1/animate.min.css" />
