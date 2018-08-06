<?php get_header(); ?>

<div id="wrap">
	<!-- メインビジュアル -->
	<div id="carousel1" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carousel1" data-slide-to="0" class="active"></li>
			<li data-target="#carousel1" data-slide-to="1"></li>
			<li data-target="#carousel1" data-slide-to="2"></li>
			<!--<li data-target="#carousel1" data-slide-to="3"></li>-->
			<!--
	<li data-target="#carousel1" data-slide-to="4"></li>
-->
		</ol>
		<div class="carousel-inner" role="listbox">
			<!--<div class="item active"><a href="https://www.home-arrange.jp/event/20413.html"><img src="<?php echo get_template_directory_uri(); ?>/page_image/top/slide/slide_sunpromarche.jpg" alt="First slide image" class="center-block"></a></div>
      <div class="item active"><a href="https://www.home-arrange.jp/event/21277.html" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/page_image/top/slide/slideEvent_sp20170520.jpg" alt="サンプロマルシェ" class="center-block"></a></div>-->

			<!--<div class="item"><a href="/event/21604.html"><img src="<?php echo get_template_directory_uri(); ?>/page_image/top/slide/slide5.jpg" alt="First slide image" class="center-block"></a></div>-->


			<div class="item active"><a href="/raiten"><img src="<?php echo get_template_directory_uri(); ?>/page_image/top/slide/slide1.jpg" alt="無料相談会" class="center-block"></a>
			</div>

			<!--<div class="item"><a href="/event/21575.html"><img src="<?php echo get_template_directory_uri(); ?>/page_image/top/slide/slide201710_s.jpg" alt="サンプロマルシェ" class="center-block"></a></div>-->
			<div class="item"><a href="/company/nagano"><img src="<?php echo get_template_directory_uri(); ?>/page_image/top/slide/slide2.jpg" alt="First slide image" class="center-block"></a>
			</div>
			<!--		<div class="item"><a href="/event/21439.html"><img src="<?php echo get_template_directory_uri(); ?>/page_image/top/slide/slideEvent_sp20170819-20.jpg" alt="First slide image" class="center-block"></a></div>
-->
			<div class="item"><a href="/award"><img src="<?php echo get_template_directory_uri(); ?>/page_image/top/slide/slide3.jpg" alt="First slide image" class="center-block"></a>
			</div>

		</div>
	</div>
	<!-- /メインビジュアル -->



	<!--<div style="width:90%; margin:0 auto 1rem auto;">
<a href="https://www.home-arrange.jp/lp"><img src="<?php bloginfo('template_url'); ?>/page_image/lp_02/lp_bnr_rollout.jpg"　width="710" height="180" alt="住宅博2017" class="img-responsive" /></a>
</div>-->




	<!--<div id="oshirase" style="border:double 5px #F00;padding:10px;margin:15px;line-height:1.6em;font-size:12px;text-align:left;">
<strong>【メールサーバー不具合についてのお詫びとお願い】</strong><br />
停電の影響で、弊社のメールサーバーが一時的にメール受信できない状態となっていました。<br />
メール送信していただいたお客様には、大変ご迷惑をおかけしました。<br />
誠に恐れ入りますが、２月２６日（日）にホームページからお問い合わせいただいたお客様、また、弊社にメール送信していただいたお客様には、再度お問い合わせ頂きますようにお願い申しあげます。<br />
ご迷惑をおかけして誠に申し訳ございません。<br />
</div>-->

	<!--<div class="container-fluid"><a href="https://www.home-arrange.jp/event/21135.html"><img src="<?php echo get_template_directory_uri(); ?>/page_image/top/bnr_soudankai_rollout.png" width="608" alt="住まいのリフォーム相談会" class="img-responsive"></a></div>-->

	<!-- トップバナー -->
	<div id="top_nav" class="container-fluid">
		<div class="row"><a href="<?php bloginfo('url'); ?>/raiten" class="col-xs-6 left"><img src="<?php echo get_template_directory_uri(); ?>/page_image/top/top_nav/top_bnr_raiten.png" width="297" height="135" alt="来店予約" class="img-responsive"></a><a href="<?php bloginfo('url'); ?>/book" class="col-xs-6 right"><img src="<?php echo get_template_directory_uri(); ?>/page_image/top/top_nav/top_bnr_shiryo.png" width="297" height="135" alt="まずは資料請求" class="img-responsive"></a>
		</div>
	</div>
	<!-- /トップバナー -->
	<!-- 電話 -->
	<?php tel_banner(); ?>
	<!-- /電話 -->

	<!-- 新着情報 -->
	<article id="top_info" class="container-fluid">
		<h2><img src="<?php echo get_template_directory_uri(); ?>/page_image/top/news/t_tit_new.gif" width="608" height="33" alt="新着情報" class="img-responsive"></h2>
		<ul>
			<?php $args = array(
    'numberposts' => 3, //表示する記事の数
    'post_type' => 'whatsnew', //投稿タイプ名
    // 条件を追加する場合はここに追記
  );
  $customPosts = get_posts($args);
  if($customPosts) : foreach($customPosts as $post) : setup_postdata( $post );
  ?>
			<li>
					<?php if(post_custom('whatsnew_link')): ?>
					<a href="<?php echo post_custom('whatsnew_link'); ?>">
						<?php endif; ?>
						<?php if(post_custom('whatsnew_newicon')){
 	echo '<img src="/wp-content/themes/sp2/page_image/top/new_icon.png" class="w_new" width="30" height="16">';
} ?><span class="text">
						<?php the_time('Y/m/d'); ?>

						<?php echo get_post_meta($post->ID, 'whatsnew_text', true); ?>
						<?php if(post_custom('whatsnew_link')): ?>
					</a>
					<?php endif; ?>
				</span>
			</li>
			<?php endforeach; ?>
			<?php else : //記事が無い場合 ?>
			<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/none.css"/>
			<?php endif;
  wp_reset_postdata(); //クエリのリセット ?>
		</ul>
	</article>
	<!-- /新着情報 -->
	<!-- 大規模リフォーム・リノベーション施工事例 -->
	<?php $args = array(
			'post_type' => 'special', /* 投稿タイプ */
			'paged' => $paged,
			'posts_per_page' => 4 /* 件数表示 */
			); ?>
	<?php query_posts( $args ); ?>
	<?php if (have_posts()) : ?>
	<? $i = 0;
$x = 0; ?>
	<article id="top_ogata" class="container-fluid">
		<h2><img src="<?php echo get_template_directory_uri(); ?>/page_image/top/ogata/t_tit_ogata.gif" width="608" height="33" alt="大型リフォーム・リノベーション施工事例" class="img-responsive"> </h2>
		<ul class="row">
			<?php while( have_posts() ) : the_post(); ?>
			<li class="col-xs-6"><a href="<?php the_permalink(); ?>"> <span class="pic"><?php if(post_custom('special_t_image')){echo gr_get_image( 'special_t_image', array( 'width' => 215,'class'=>'img-responsive' ) );}
	else { echo gr_get_image( 'special_image', array( 'width' => 215,'class'=>'img-responsive' ) );}?>
	<? if(post_custom('special_newicon')){
 	echo '<img src="/wp-content/themes/reform/images/top/new.png" class="new" />';
} ?></span> <span class="txt"><?php the_title();?></span></a>
			</li>
			<?php $i++; ?>
			<?php endwhile; ?>
			<?php endif; ?>
			<?php wp_reset_query(); ?>
		</ul>
		<a href="<?php bloginfo('url'); ?>/special" class="more">さらに大規模リフォーム施工事例を見る</a>
	</article>
	<!-- /大規模リフォーム・リノベーション施工事例 -->




	<section id="top_seko" class="container-fluid">
		<h2><img src="<?php echo get_template_directory_uri(); ?>/page_image/top/seko/t_tit_seko.gif" width="608" height="33" alt="施工事例" class="img-responsive"></h2>
		<?php echo do_shortcode('[seko_archive kensu=4]'); ?>
	</section>

	<section class="container-fluid">
	<?php sekobottom_link(); ?>
	</section>

	<aside id="top_access" class="container-fluid">
		<h1><img src="<?php echo get_template_directory_uri(); ?>/page_image/top/tenpo/t_tit_tenpo.gif" width="690" height="39" alt="店舗紹介" class="img-responsive"></h1>
		<div class="box tenpo1"><a href="/company/hon"><img src="<?php echo get_template_directory_uri(); ?>/page_image/top/tenpo/t_tenpo1.png" width="690" height="166" class="img-responsive"></a>
		</div>
		<div class="box tenpo2"><a href="/company/matsumoto"><img src="<?php echo get_template_directory_uri(); ?>/page_image/top/tenpo/t_tenpo2.png" width="690" height="166" class="img-responsive"></a>
		</div>
		<div class="box tenpo3"><a href="/company/nagano"><img src="<?php echo get_template_directory_uri(); ?>/page_image/top/tenpo/t_tenpo3.png" width="690" height="166" class="img-responsive"></a>

		</div>
	</aside>

	<section class="link">
		<h1><img src="<?php echo get_template_directory_uri(); ?>/page_image/top/t_tit_link.png" width="690" height="39" alt="リンク" class="img-responsive"></h1>
		<ul>
			<li><a href="/blog"><img src="<?php echo get_template_directory_uri(); ?>/page_image/top/side_staffblog.png" width="690" height="39" alt="staffblog" class="img-responsive"></a></li>
			<li><a href="https://www.instagram.com/sunpro_reform/" target="_blank" ><img src="<?php echo get_template_directory_uri(); ?>/page_image/top/side_insta_reform.png" width="690" height="39" alt="reform" class="img-responsive"></a></li>
			<li><a href="https://www.instagram.com/sunpro_funtolive/" target="_blank" ><img src="<?php echo get_template_directory_uri(); ?>/page_image/top/side_insta_funtolive.png" width="690" height="39" alt="staffblog" class="img-responsive"></a></li>
		</ul>
	</section>

	<?php tel_banner(); ?>

	<?php go_top(); ?>
	<?php bottom_link(); ?>

	<!-- 採用リンク -->
	<div class="saiyo_link">
		<p><a href="https://sunpro36.co.jp/recruit/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/page_image/top/bnr_recruit.png" class="recruit_img"></a></p>
		<!-- <p><a href="https://job.mynavi.jp/19/pc/search/corp222885/outline.html" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/page_image/top/bnr_mynavi.png" class="mynavi_img"></a></p> -->
	</div>
	<?php get_footer(); ?>
