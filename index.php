<?php get_header(); ?>
<main>
	<div class="news">
		<div class="news-top">
			<div class="news-top-title">
				<h2>NEWS</h2>
			</div>
		</div>
		<div class="news-subtitle">
			<div class="news-subtitle-left">
				<a href="javascript:void(0)" id="news-sub">ニュースリリース</a>
			</div>
			<div class="news-subtitle-right">
				<a href="javascript:void(0)" id="ir-sub">IRニュース</a>
			</div>
		</div>
		<div class="news-box">
			<div class="news-contents" id="news-contents">
				<ul>
					<?php
 $infoPosts = get_posts('numberposts=3&category=17');
 foreach($infoPosts as $post): 
?>
					<li class="news-list">
						<p><?php the_time('Y-m-d'); ?>
<span class="news-green"><?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->cat_name; } ?></span></p>
						<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					</li>
<?php endforeach; ?>
					
				</ul>
			</div>
			<div class="ir-contents" id="ir-contents">
				<ul>
					<li class="news-list">
						<p>2020.04.08<span class="news-yellow">IRニュース</span></p>
						<a href="">新型コロナウイルス感染拡大の対応として当社社員の在宅勤務期間を延長いたします</a>
					</li>
					<li class="news-list">
						<p>2020.03.27<span class="news-pink">適正開示</span></p>
						<a href="">新型コロナウイルス感染拡大防止として当社スタッフ社員の在宅勤務を開始いたします</a>
					</li>
					<li class="news-list">
						<p>2020.03.27<span class="news-yellow">IRニュース</span></p>
						<a href="">新型コロナウイルス感染拡大防止として当社スタッフ社員の在宅勤務を開始いたします</a>
					</li>
					<li class="news-list"> 
						<p>2020.03.27<span class="news-green">決算</span></p>
						<a href="">新型コロナウイルス感染拡大防止として当社スタッフ社員の在宅勤務を開始いたします</a>
					</li>
				</ul>
			</div>
		</div>
		<div class="news-bottom">
			<a href="" class="news-btn">一覧を見る</a>
		</div>
	</div>
	<div class="service">
		<div class="service-title">
			<h2>SERVICE</h2>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-12 col-md-6">
					<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/image/IMG_8.jpeg" alt="" height="" width="">
				</div>
				<div class="service-1-right col-12 col-md-6">
					<div class="service-1-right-title">
						<h3>ホームページ制作</h3>
					</div>
					<div class="service-1-right-content">
						<p>LPページ、コーポレートサイト等のwebサイト制作のほか、<br class="br-1" 
						>WordPressを採用したCMSカスタマイズも行っています。</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="service-2-left order-2 order-md-1 col-12 col-md-6">
					<div class="service-2-left-title">
						<h3>SNSマーケティング</h3>
					</div>
					<div class="service-2-left-content">
						<p>LPページ、コーポレートサイト等のwebサイト制作のほか、<br class="br-1"
						>WordPressを採用したCMSカスタマイズも行っています。</p>
					</div>
				</div>
				<div class="order-1 order-md-2 col-12 col-md-6">
					<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/image/IMG_9.jpeg" alt="">
				</div>
			</div>
		</div>
	</div>
	<div class="about">
		<div class="about-title">
			<h2>ABOUT</h2>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-12 col-md-6">
					<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/image/IMG_10.jpeg" alt="">
				</div>
				<div class="about-1-right col-12 col-md-6">
					<div class="about-1-right-title">
						<h3>ABOUT US</h3>
					</div>
					<div class="about-1-right-content">
						<p>私たちSBS株式会社はホームページ制作とSNSマーケティングを軸にstep by stepで<br class="br-1" 
							>お客様と共に成長し続けるサービスを提供します</p>
						<a href="" class="about-btn">詳しくはコチラ</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="recruit">
		<div class="recruit-title">
			<h2>RECRUIT</h2>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="recruit-left order-2 order-md-1 col-12 col-md-6">
					<div class="recruit-left-title">
						<h3>採用情報</h3>
					</div>
					<div class="recruit-left-content">
						<p>現在、個人により依存する社会に変化しています。<br class="br-1" 
							>企業だけではなく個人も共に成長できる環境がここにはあります。</p>
						<a href="" class="recruit-btn">詳しくはコチラ</a>
					</div>
				</div>
				<div class="order-1 order-md-2 col-12 col-md-6">
					<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/image/IMG_11.jpeg" alt="">
				</div>
			</div>
		</div>
	</div>
</main>
<?php get_footer(); ?>  