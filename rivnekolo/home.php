<?php
/*
Template Name: Home
*/
?>

<?php get_header();?> 
<?php $contacts = getContacts(); ?>
<main class="page" style="padding-top: 50px">
			<section class="hero">
				<div class="hero__bg-animate">
					<div class="ticker-bg">
						<div class="ticker-bg__content first-line">
							<div class="ticker-bg__row">
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_1.svg" alt="ticker-bg" />
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_1.svg" alt="ticker-bg" />
							</div>
							<div class="ticker-bg__row">
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_1.svg" alt="ticker-bg" />
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_1.svg" alt="ticker-bg" />
							</div>
						</div>
						<div class="ticker-bg__content second-line">
							<div class="ticker-bg__row ticker-bg__row-reverse">
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_2.svg" alt="ticker-bg" />
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_2.svg" alt="ticker-bg" />
							</div>
							<div class="ticker-bg__row ticker-bg__row-reverse">
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_2.svg" alt="ticker-bg" />
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_2.svg" alt="ticker-bg" />
							</div>
						</div>
						<div class="ticker-bg__content thrid-line">
							<div class="ticker-bg__row">
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_3.svg" alt="ticker-bg" />
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_3.svg" alt="ticker-bg" />
							</div>
							<div class="ticker-bg__row">
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_3.svg" alt="ticker-bg" />
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_3.svg" alt="ticker-bg" />
							</div>
						</div>

						<div class="ticker-bg__content fourth-line">
							<div class="ticker-bg__row ticker-bg__row-reverse">
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_2.svg" alt="ticker-bg" />
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_2.svg" alt="ticker-bg" />
							</div>
							<div class="ticker-bg__row ticker-bg__row-reverse">
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_2.svg" alt="ticker-bg" />
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_2.svg" alt="ticker-bg" />
							</div>
						</div>
					</div>
				</div>
				<img class="mobile-bg mobile-bg__1" src="<?php bloginfo('template_url'); ?>/assets/img/hero/stick-bagel-1.svg" alt="background" />
				<img class="mobile-bg mobile-bg__2" src="<?php bloginfo('template_url'); ?>/assets/img/hero/glazed-bagel.svg" alt="background" />
				<img class="mobile-bg mobile-bg__3" src="<?php bloginfo('template_url'); ?>/assets/img/hero/stick-bagel.svg" alt="background" />
				<img class="mobile-bg mobile-bg__4" src="<?php bloginfo('template_url'); ?>/assets/img/hero/bagel.svg" alt="background" />
				<img class="mobile-bg mobile-bg__5" src="<?php bloginfo('template_url'); ?>/assets/img/hero/cake.svg" alt="background" />

				<div class="hero__container">
					<div class="hero__logo">
						<picture><source srcset="<?php bloginfo('template_url'); ?>/assets/img/logo.webp" type="image/webp"><img class="hero__logo-img" src="<?php bloginfo('template_url'); ?>/assets/img/logo.png" alt="logo" /></picture>
					</div>
					<div class="hero__wraper">
						<div class="hero__paralax">
							<div class="hero__paralax-wrap">
								<img class="stick-bagel-1 parallax-image" src="<?php bloginfo('template_url'); ?>/assets/img/hero/stick-bagel-1.svg" alt="stick-bagel" />
								<img class="stick-bagel parallax-image" src="<?php bloginfo('template_url'); ?>/assets/img/hero/stick-bagel.svg" alt="stick-bagel" />
								<img class="bagel parallax-image" src="<?php bloginfo('template_url'); ?>/assets/img/hero/bagel.svg" alt="stick-bagel" />
								<img class="glazed-bagel parallax-image" src="<?php bloginfo('template_url'); ?>/assets/img/hero/glazed-bagel.svg" alt="stick-bagel" />
								<img class="cake parallax-image" src="<?php bloginfo('template_url'); ?>/assets/img/hero/cake.svg" alt="stick-bagel" />
								<img class="poppy-bagel parallax-image" src="<?php bloginfo('template_url'); ?>/assets/img/hero/poppy-bagel.svg" alt="stick-bagel" />
							</div>
						</div>
						<div class="hero__content">
							<h2 class="hero__heading heading">
								Ми зібрали найкраще <br />з кращого
							</h2>
							<p class="hero__text body_3">
								додали <span>ВЕЛИКУ</span> порцію позитивних емоцій, все це бережно
								руцями зліпили та вийшло Rivne Kolo
							</p>
							<picture><source srcset="<?php bloginfo('template_url'); ?>/assets/img/hero/hero_person.webp" type="image/webp"><img class="hero__sticker-logo" src="<?php bloginfo('template_url'); ?>/assets/img/hero/hero_person.png" alt="sticker-logo" /></picture>
							<picture><source srcset="<?php bloginfo('template_url'); ?>/assets/img/hero/hero_sticker.webp" type="image/webp"><img class="hero__sticker" src="<?php bloginfo('template_url'); ?>/assets/img/hero/hero_sticker.png" alt="" /></picture>
						</div>
					</div>
				</div>
			</section>
			<section class="products">
				<div class="products__container">
					<h2 class="products__heading heading">
						<span class="heading__span-1">Лінійка <br> велика,<i> але</i></span>
						<span class="heading__span-2"><i>але</i> ще не повна</span>
					</h2>

					<div class="products__assortment assortment">
					<?php $count = 1; ?>
					<?php foreach(getProducts() as $prod) {?>
						<?php if($prod["prod_template"] == 5) {?>
							<div class="assortment__item bagels" data-watch-threshold="1" data-watch data-popup="#popup" data-poduct-id="<?php echo $prod["ID"];?>">
								<div class="assortment__image-wrap">
								<img src="<?php echo $prod["img"];?>" class="assortment__product" width="622" height="651" alt="product img" />
								<img src="<?php echo $prod["picture_1"];?>" class="assortment__bagels assortment__bagels_1" width="153" height="102" alt="Bagels" />
								<img src="<?php echo $prod["picture_2"];?>" class="assortment__bagels assortment__bagels_2" width="202" height="200" alt="Bagels" />
								<img src="<?php echo $prod["picture_3"];?>" class="assortment__bagels assortment__bagels_3" width="202" height="200" alt="Bagels" />
								<img src="<?php echo $prod["picture_4"];?>" class="assortment__bagels assortment__bagels_4" width="153" height="102" alt="Bagels" />
								<img src="<?php echo $prod["picture_5"];?>" class="assortment__bagels assortment__bagels_5" width="202" height="200" alt="Bagels" />
								</div>
								<?php if($count % 2 != 0) {?>
									<div class="assortment__info assortment__info_1">
										<img src="<?php bloginfo('template_url'); ?>/assets/img/products/spot1.svg" class="assortment__info-bg" width="381" height="378" alt="background img" />
										<h3 class="assortment__info-title"><?php echo $prod["title"];?></h3>
										<div class="assortment__info-weight">
											<span><?php echo $prod["prod_weight"];?></span>
										</div>
										<div class="assortment__info-price"><?php echo $prod["prod_price"];?></div>
									</div>
								<?php } else {?>
									<div class="assortment__info assortment__info_2">
										<img src="<?php bloginfo('template_url'); ?>/assets/img/products/spot2.svg" class="assortment__info-bg" width="381" height="378" alt="background img" />
										<h3 class="assortment__info-title"><?php echo $prod["title"];?></h3>
										<div class="assortment__info-weight">
											<span><?php echo $prod["prod_weight"];?></span>
										</div>
										<div class="assortment__info-price"><?php echo $prod["prod_price"];?></div>
									</div>       
								<?php }?>

							</div>
						<?php } else {?>
							<div class="assortment__item nuts" data-watch-threshold="1" data-watch data-popup="#popup" data-poduct-id="<?php echo $prod["ID"];?>">
								<div class="assortment__image-wrap">
								<img src="<?php echo $prod["img"];?>" class="assortment__product" width="706" height="618" alt="product img" />
								<img src="<?php echo $prod["picture_1"];?>" class="assortment__nuts assortment__nuts_1" width="167" height="131" alt="Nuts" />
								<img src="<?php echo $prod["picture_2"];?>" class="assortment__nuts assortment__nuts_2" width="190" height="146" alt="Nuts" />
								<img src="<?php echo $prod["picture_3"];?>" class="assortment__nuts assortment__nuts_3" width="207" height="213" alt="Nuts" />
								<img src="<?php echo $prod["picture_4"];?>" class="assortment__nuts assortment__nuts_4" width="198" height="165" alt="Nuts" />
								</div>
								<div class="assortment__info assortment__info_4">
									<img src="<?php bloginfo('template_url'); ?>/assets/img/products/spot4.svg" class="assortment__info-bg" width="456" height="403" alt="background img" />
									<p class="assortment__info-desc"><?php echo $prod["product_subtitle"];?></p>
									<h3 class="assortment__info-title"><?php echo $prod["title"];?></h3>
									<div class="assortment__info-weight">
										<span><?php echo $prod["prod_weight"];?></span>
									</div>
									<div class="assortment__info-price"><?php echo $prod["prod_price"];?></div>
								</div>
							</div>
						<?php } $count++;?>
					<?php }?>
					</div>

					<div class="products__assortment assortment all-assortment">

					</div>

					<div class="products-show-all">
						<button class="btn products-show-btn" data-showed="0">
							<strong></strong>
							<span>
								Подивитись ще
							</span>
							<mark><i></i></mark>
						</button>
					</div>
				</div>
			</section>
			<section class="social">
				<div class="social__container">
					<div class="social__content">
						<div class="social__text">
							<h2 class="social__heading">
								кожного дня ми вигадуємо і тестуємо щось новеньке
							</h2>
							<div class="social__message message">
								<p>тож слідкуй за нами, щоб бути в курсі</p>
							</div>
						</div>
						<div class="social__lincks">
							<div class="social-card social-card_inst" data-watch-threshold="1" data-watch>
								<a href="<?php echo $contacts["instagram"] ?>" class="social-card__link">
									<svg width="182" height="182" viewBox="0 0 182 182" fill="none" xmlns="http://www.w3.org/2000/svg">
										<rect x="7.62549" y="7.62524" width="166" height="166" rx="36" class="inst-rect" stroke-width="15" />
										<circle cx="90.6255" cy="90.6252" r="33.3804" class="inst-circle" stroke-width="15" />
										<circle cx="140.245" cy="41.0057" r="8.11957" class="inst-dot" />
									</svg>
									<span> Instagram </span>
								</a>
								<div class="glow-wrap">
									<i class="glow"></i>
								</div>
							</div>
							<div class="social-card social-card_fb" data-watch-threshold="1" data-watch>
								<a href="<?php echo $contacts["facebook"] ?>" class="social-card__link">
									<svg width="167" height="167" viewBox="0 0 167 167" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M137.003 0.987061L31.1382 0.987061C14.3874 0.987061 0.986816 14.5552 0.986816 31.1384L0.986816 136.836C0.986816 153.586 14.5549 166.987 31.1382 166.987H50.5691V106.517H32.6457L35.6609 76.3655H50.7366L50.7366 61.1223C50.7366 40.1838 67.6548 23.4331 88.4258 23.4331L111.039 23.4331V53.5844H88.4258C84.2381 53.5844 80.8879 56.9346 80.8879 61.1223V76.3655H111.039L108.024 106.517H80.7204L80.7204 166.987H136.835C153.586 166.987 166.987 153.419 166.987 136.836V31.1384C166.987 14.3877 153.419 0.987061 136.835 0.987061H137.003Z" class="fb-path" />
									</svg>
									<span> facebook </span>
								</a>
								<div class="glow-wrap">
									<i class="glow"></i>
								</div>
							</div>
							<img src="<?php bloginfo('template_url'); ?>/assets/img/social/hand.svg" class="social__hand" width="233" height="242" alt="hand" />
							<img src="<?php bloginfo('template_url'); ?>/assets/img/social/shadow.svg" class="social__shadow" width="150" height="14" alt="shadow" />
						</div>
					</div>
				</div>
				<div class="social__bg">
					<div class="ticker-bg">
						<div class="ticker-bg__content first-line">
							<div class="ticker-bg__row">
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_1.svg" alt="ticker-bg" />
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_1.svg" alt="ticker-bg" />
							</div>
							<div class="ticker-bg__row">
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_1.svg" alt="ticker-bg" />
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_1.svg" alt="ticker-bg" />
							</div>
						</div>
						<div class="ticker-bg__content second-line">
							<div class="ticker-bg__row ticker-bg__row-reverse">
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_2.svg" alt="ticker-bg" />
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_2.svg" alt="ticker-bg" />
							</div>
							<div class="ticker-bg__row ticker-bg__row-reverse">
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_2.svg" alt="ticker-bg" />
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_2.svg" alt="ticker-bg" />
							</div>
						</div>
						<div class="ticker-bg__content thrid-line">
							<div class="ticker-bg__row">
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_3.svg" alt="ticker-bg" />
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_3.svg" alt="ticker-bg" />
							</div>
							<div class="ticker-bg__row">
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_3.svg" alt="ticker-bg" />
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_3.svg" alt="ticker-bg" />
							</div>
						</div>

						<div class="ticker-bg__content fourth-line">
							<div class="ticker-bg__row ticker-bg__row-reverse">
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_2.svg" alt="ticker-bg" />
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_2.svg" alt="ticker-bg" />
							</div>
							<div class="ticker-bg__row ticker-bg__row-reverse">
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_2.svg" alt="ticker-bg" />
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_2.svg" alt="ticker-bg" />
							</div>
						</div>
					</div>
					<div class="ticker-bg">
						<div class="ticker-bg__content first-line">
							<div class="ticker-bg__row">
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_1.svg" alt="ticker-bg" />
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_1.svg" alt="ticker-bg" />
							</div>
							<div class="ticker-bg__row">
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_1.svg" alt="ticker-bg" />
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_1.svg" alt="ticker-bg" />
							</div>
						</div>
						<div class="ticker-bg__content second-line">
							<div class="ticker-bg__row ticker-bg__row-reverse">
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_2.svg" alt="ticker-bg" />
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_2.svg" alt="ticker-bg" />
							</div>
							<div class="ticker-bg__row ticker-bg__row-reverse">
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_2.svg" alt="ticker-bg" />
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_2.svg" alt="ticker-bg" />
							</div>
						</div>
						<div class="ticker-bg__content thrid-line">
							<div class="ticker-bg__row">
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_3.svg" alt="ticker-bg" />
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_3.svg" alt="ticker-bg" />
							</div>
							<div class="ticker-bg__row">
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_3.svg" alt="ticker-bg" />
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_3.svg" alt="ticker-bg" />
							</div>
						</div>

						<div class="ticker-bg__content fourth-line">
							<div class="ticker-bg__row ticker-bg__row-reverse">
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_2.svg" alt="ticker-bg" />
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_2.svg" alt="ticker-bg" />
							</div>
							<div class="ticker-bg__row ticker-bg__row-reverse">
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_2.svg" alt="ticker-bg" />
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_2.svg" alt="ticker-bg" />
							</div>
						</div>
					</div>

				</div>
			</section>
			<section class="madein">
				<div class="madein__container">
					<h2 class="madein__heading heading">
						<span>ЯК ВИ ВЖЕ ЗДОГАДАЛИСЬ</span>
						<span>НАШЕ RIVNE KOLO З МІСТА РІВНЕ</span>
					</h2>

					<div class="madein__block">
						<div class="madein__text paragraph">
							<p>
								Миле містечко з характерною для продукту емоцією та настроєм
							</p>

							<p>
								Саме в такій доброзичливій, дружній та креативній атмосфері народилося наше виробництво
							</p>
						</div>
						<div class="madein__illustration">
							<picture><source srcset="<?php bloginfo('template_url'); ?>/assets/img/madein/city.webp" type="image/webp"><img src="<?php bloginfo('template_url'); ?>/assets/img/madein/city.png" class="madein__img" width="753" height="1012" alt="illustration"></picture>
							<picture><source srcset="<?php bloginfo('template_url'); ?>/assets/img/madein/madein.webp" type="image/webp"><img src="<?php bloginfo('template_url'); ?>/assets/img/madein/madein.png" class="madein__sticker" width="393" height="229" alt="made in"></picture>
						</div>
					</div>
				</div>

				<div class="madein__slider-wrap">
					<div class="madein__slider swiper">
						<div class="madein__wrapper swiper-wrapper">
							<div class="madein__slide swiper-slide">
								<picture><source srcset="<?php bloginfo('template_url'); ?>/assets/img/madein/slide1.webp" type="image/webp"><img src="<?php bloginfo('template_url'); ?>/assets/img/madein/slide1.jpg" width="680" height="820" alt="slide images"></picture>
							</div>
							<div class="madein__slide swiper-slide">
								<picture><source srcset="<?php bloginfo('template_url'); ?>/assets/img/madein/slide2.webp" type="image/webp"><img src="<?php bloginfo('template_url'); ?>/assets/img/madein/slide2.jpg" width="680" height="820" alt="slide images"></picture>
							</div>
							<div class="madein__slide swiper-slide">
								<picture><source srcset="<?php bloginfo('template_url'); ?>/assets/img/madein/slide3.webp" type="image/webp"><img src="<?php bloginfo('template_url'); ?>/assets/img/madein/slide3.jpg" width="680" height="820" alt="slide images"></picture>
							</div>
							<div class="madein__slide swiper-slide">
								<picture><source srcset="<?php bloginfo('template_url'); ?>/assets/img/madein/slide4.webp" type="image/webp"><img src="<?php bloginfo('template_url'); ?>/assets/img/madein/slide4.jpg" width="680" height="820" alt="slide images"></picture>
							</div>
							<div class="madein__slide swiper-slide">
								<picture><source srcset="<?php bloginfo('template_url'); ?>/assets/img/madein/slide5.webp" type="image/webp"><img src="<?php bloginfo('template_url'); ?>/assets/img/madein/slide5.jpg" width="680" height="820" alt="slide images"></picture>
							</div>
							<div class="madein__slide swiper-slide">
								<picture><source srcset="<?php bloginfo('template_url'); ?>/assets/img/madein/slide6.webp" type="image/webp"><img src="<?php bloginfo('template_url'); ?>/assets/img/madein/slide6.jpg" width="680" height="820" alt="slide images"></picture>
							</div>
							<div class="madein__slide swiper-slide">
								<picture><source srcset="<?php bloginfo('template_url'); ?>/assets/img/madein/slide7.webp" type="image/webp"><img src="<?php bloginfo('template_url'); ?>/assets/img/madein/slide7.jpg" width="680" height="820" alt="slide images"></picture>
							</div>
							<div class="madein__slide swiper-slide">
								<picture><source srcset="<?php bloginfo('template_url'); ?>/assets/img/madein/slide8.webp" type="image/webp"><img src="<?php bloginfo('template_url'); ?>/assets/img/madein/slide8.jpg" width="680" height="820" alt="slide images"></picture>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="about">
				<div class="about__container">
					<div class="about__bg-animate">
						<div class="ticker-bg">
							<div class="ticker-bg__content first-line">
								<div class="ticker-bg__row">
									<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_1.svg" alt="ticker-bg" />
									<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_1.svg" alt="ticker-bg" />
								</div>
								<div class="ticker-bg__row">
									<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_1.svg" alt="ticker-bg" />
									<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_1.svg" alt="ticker-bg" />
								</div>
							</div>
							<div class="ticker-bg__content second-line">
								<div class="ticker-bg__row ticker-bg__row-reverse">
									<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_2.svg" alt="ticker-bg" />
									<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_2.svg" alt="ticker-bg" />
								</div>
								<div class="ticker-bg__row ticker-bg__row-reverse">
									<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_2.svg" alt="ticker-bg" />
									<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_2.svg" alt="ticker-bg" />
								</div>
							</div>
							<div class="ticker-bg__content thrid-line">
								<div class="ticker-bg__row">
									<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_3.svg" alt="ticker-bg" />
									<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_3.svg" alt="ticker-bg" />
								</div>
								<div class="ticker-bg__row">
									<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_3.svg" alt="ticker-bg" />
									<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_3.svg" alt="ticker-bg" />
								</div>
							</div>

							<div class="ticker-bg__content fourth-line">
								<div class="ticker-bg__row ticker-bg__row-reverse">
									<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_2.svg" alt="ticker-bg" />
									<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_2.svg" alt="ticker-bg" />
								</div>
								<div class="ticker-bg__row ticker-bg__row-reverse">
									<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_2.svg" alt="ticker-bg" />
									<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_2.svg" alt="ticker-bg" />
								</div>
							</div>
						</div>
						<div class="ticker-bg">
							<div class="ticker-bg__content first-line">
								<div class="ticker-bg__row">
									<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_1.svg" alt="ticker-bg" />
									<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_1.svg" alt="ticker-bg" />
								</div>
								<div class="ticker-bg__row">
									<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_1.svg" alt="ticker-bg" />
									<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_1.svg" alt="ticker-bg" />
								</div>
							</div>
							<div class="ticker-bg__content second-line">
								<div class="ticker-bg__row ticker-bg__row-reverse">
									<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_2.svg" alt="ticker-bg" />
									<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_2.svg" alt="ticker-bg" />
								</div>
								<div class="ticker-bg__row ticker-bg__row-reverse">
									<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_2.svg" alt="ticker-bg" />
									<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_2.svg" alt="ticker-bg" />
								</div>
							</div>
							<div class="ticker-bg__content thrid-line">
								<div class="ticker-bg__row">
									<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_3.svg" alt="ticker-bg" />
									<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_3.svg" alt="ticker-bg" />
								</div>
								<div class="ticker-bg__row">
									<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_3.svg" alt="ticker-bg" />
									<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_3.svg" alt="ticker-bg" />
								</div>
							</div>

							<div class="ticker-bg__content fourth-line">
								<div class="ticker-bg__row ticker-bg__row-reverse">
									<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_2.svg" alt="ticker-bg" />
									<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_2.svg" alt="ticker-bg" />
								</div>
								<div class="ticker-bg__row ticker-bg__row-reverse">
									<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_2.svg" alt="ticker-bg" />
									<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_2.svg" alt="ticker-bg" />
								</div>
							</div>
						</div>

						<div class="ticker-bg">
							<div class="ticker-bg__content first-line">
								<div class="ticker-bg__row">
									<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_1.svg" alt="ticker-bg" />
									<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_1.svg" alt="ticker-bg" />
								</div>
								<div class="ticker-bg__row">
									<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_1.svg" alt="ticker-bg" />
									<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_1.svg" alt="ticker-bg" />
								</div>
							</div>
							<div class="ticker-bg__content second-line">
								<div class="ticker-bg__row ticker-bg__row-reverse">
									<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_2.svg" alt="ticker-bg" />
									<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_2.svg" alt="ticker-bg" />
								</div>
								<div class="ticker-bg__row ticker-bg__row-reverse">
									<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_2.svg" alt="ticker-bg" />
									<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_2.svg" alt="ticker-bg" />
								</div>
							</div>
							<div class="ticker-bg__content thrid-line">
								<div class="ticker-bg__row">
									<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_3.svg" alt="ticker-bg" />
									<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_3.svg" alt="ticker-bg" />
								</div>
								<div class="ticker-bg__row">
									<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_3.svg" alt="ticker-bg" />
									<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_3.svg" alt="ticker-bg" />
								</div>
							</div>

							<div class="ticker-bg__content fourth-line">
								<div class="ticker-bg__row ticker-bg__row-reverse">
									<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_2.svg" alt="ticker-bg" />
									<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_2.svg" alt="ticker-bg" />
								</div>
								<div class="ticker-bg__row ticker-bg__row-reverse">
									<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_2.svg" alt="ticker-bg" />
									<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_2.svg" alt="ticker-bg" />
								</div>
							</div>
						</div>
						<div class="ticker-bg">
							<div class="ticker-bg__content first-line">
								<div class="ticker-bg__row">
									<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_1.svg" alt="ticker-bg" />
									<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_1.svg" alt="ticker-bg" />
								</div>
								<div class="ticker-bg__row">
									<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_1.svg" alt="ticker-bg" />
									<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_1.svg" alt="ticker-bg" />
								</div>
							</div>
							<div class="ticker-bg__content second-line">
								<div class="ticker-bg__row ticker-bg__row-reverse">
									<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_2.svg" alt="ticker-bg" />
									<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_2.svg" alt="ticker-bg" />
								</div>
								<div class="ticker-bg__row ticker-bg__row-reverse">
									<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_2.svg" alt="ticker-bg" />
									<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_2.svg" alt="ticker-bg" />
								</div>
							</div>
							<div class="ticker-bg__content thrid-line">
								<div class="ticker-bg__row">
									<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_3.svg" alt="ticker-bg" />
									<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_3.svg" alt="ticker-bg" />
								</div>
								<div class="ticker-bg__row">
									<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_3.svg" alt="ticker-bg" />
									<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_3.svg" alt="ticker-bg" />
								</div>
							</div>

							<div class="ticker-bg__content fourth-line">
								<div class="ticker-bg__row ticker-bg__row-reverse">
									<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_2.svg" alt="ticker-bg" />
									<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_2.svg" alt="ticker-bg" />
								</div>
								<div class="ticker-bg__row ticker-bg__row-reverse">
									<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_2.svg" alt="ticker-bg" />
									<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_2.svg" alt="ticker-bg" />
								</div>
							</div>
						</div>

						<div class="ticker-bg">
							<div class="ticker-bg__content first-line">
								<div class="ticker-bg__row">
									<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_1.svg" alt="ticker-bg" />
									<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_1.svg" alt="ticker-bg" />
								</div>
								<div class="ticker-bg__row">
									<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_1.svg" alt="ticker-bg" />
									<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_1.svg" alt="ticker-bg" />
								</div>
							</div>
							<div class="ticker-bg__content second-line">
								<div class="ticker-bg__row ticker-bg__row-reverse">
									<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_2.svg" alt="ticker-bg" />
									<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_2.svg" alt="ticker-bg" />
								</div>
								<div class="ticker-bg__row ticker-bg__row-reverse">
									<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_2.svg" alt="ticker-bg" />
									<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_2.svg" alt="ticker-bg" />
								</div>
							</div>
							<div class="ticker-bg__content thrid-line">
								<div class="ticker-bg__row">
									<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_3.svg" alt="ticker-bg" />
									<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_3.svg" alt="ticker-bg" />
								</div>
								<div class="ticker-bg__row">
									<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_3.svg" alt="ticker-bg" />
									<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_3.svg" alt="ticker-bg" />
								</div>
							</div>

							<div class="ticker-bg__content fourth-line">
								<div class="ticker-bg__row ticker-bg__row-reverse">
									<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_2.svg" alt="ticker-bg" />
									<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_2.svg" alt="ticker-bg" />
								</div>
								<div class="ticker-bg__row ticker-bg__row-reverse">
									<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_2.svg" alt="ticker-bg" />
									<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_2.svg" alt="ticker-bg" />
								</div>
							</div>
						</div>
						<div class="ticker-bg">
							<div class="ticker-bg__content first-line">
								<div class="ticker-bg__row">
									<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_1.svg" alt="ticker-bg" />
									<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_1.svg" alt="ticker-bg" />
								</div>
								<div class="ticker-bg__row">
									<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_1.svg" alt="ticker-bg" />
									<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_1.svg" alt="ticker-bg" />
								</div>
							</div>
							<div class="ticker-bg__content second-line">
								<div class="ticker-bg__row ticker-bg__row-reverse">
									<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_2.svg" alt="ticker-bg" />
									<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_2.svg" alt="ticker-bg" />
								</div>
								<div class="ticker-bg__row ticker-bg__row-reverse">
									<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_2.svg" alt="ticker-bg" />
									<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_2.svg" alt="ticker-bg" />
								</div>
							</div>
							<div class="ticker-bg__content thrid-line">
								<div class="ticker-bg__row">
									<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_3.svg" alt="ticker-bg" />
									<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_3.svg" alt="ticker-bg" />
								</div>
								<div class="ticker-bg__row">
									<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_3.svg" alt="ticker-bg" />
									<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_3.svg" alt="ticker-bg" />
								</div>
							</div>

							<div class="ticker-bg__content fourth-line">
								<div class="ticker-bg__row ticker-bg__row-reverse">
									<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_2.svg" alt="ticker-bg" />
									<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_2.svg" alt="ticker-bg" />
								</div>
								<div class="ticker-bg__row ticker-bg__row-reverse">
									<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_2.svg" alt="ticker-bg" />
									<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_2.svg" alt="ticker-bg" />
								</div>
							</div>
						</div>

						<div class="ticker-bg">
							<div class="ticker-bg__content first-line">
								<div class="ticker-bg__row">
									<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_1.svg" alt="ticker-bg" />
									<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_1.svg" alt="ticker-bg" />
								</div>
								<div class="ticker-bg__row">
									<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_1.svg" alt="ticker-bg" />
									<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_1.svg" alt="ticker-bg" />
								</div>
							</div>
							<div class="ticker-bg__content second-line">
								<div class="ticker-bg__row ticker-bg__row-reverse">
									<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_2.svg" alt="ticker-bg" />
									<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_2.svg" alt="ticker-bg" />
								</div>
								<div class="ticker-bg__row ticker-bg__row-reverse">
									<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_2.svg" alt="ticker-bg" />
									<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_2.svg" alt="ticker-bg" />
								</div>
							</div>
							<div class="ticker-bg__content thrid-line">
								<div class="ticker-bg__row">
									<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_3.svg" alt="ticker-bg" />
									<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_3.svg" alt="ticker-bg" />
								</div>
								<div class="ticker-bg__row">
									<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_3.svg" alt="ticker-bg" />
									<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_3.svg" alt="ticker-bg" />
								</div>
							</div>

							<div class="ticker-bg__content fourth-line">
								<div class="ticker-bg__row ticker-bg__row-reverse">
									<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_2.svg" alt="ticker-bg" />
									<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_2.svg" alt="ticker-bg" />
								</div>
								<div class="ticker-bg__row ticker-bg__row-reverse">
									<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_2.svg" alt="ticker-bg" />
									<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_2.svg" alt="ticker-bg" />
								</div>
							</div>
						</div>
						<div class="ticker-bg">
							<div class="ticker-bg__content first-line">
								<div class="ticker-bg__row">
									<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_1.svg" alt="ticker-bg" />
									<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_1.svg" alt="ticker-bg" />
								</div>
								<div class="ticker-bg__row">
									<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_1.svg" alt="ticker-bg" />
									<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_1.svg" alt="ticker-bg" />
								</div>
							</div>
							<div class="ticker-bg__content second-line">
								<div class="ticker-bg__row ticker-bg__row-reverse">
									<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_2.svg" alt="ticker-bg" />
									<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_2.svg" alt="ticker-bg" />
								</div>
								<div class="ticker-bg__row ticker-bg__row-reverse">
									<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_2.svg" alt="ticker-bg" />
									<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_2.svg" alt="ticker-bg" />
								</div>
							</div>
							<div class="ticker-bg__content thrid-line">
								<div class="ticker-bg__row">
									<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_3.svg" alt="ticker-bg" />
									<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_3.svg" alt="ticker-bg" />
								</div>
								<div class="ticker-bg__row">
									<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_3.svg" alt="ticker-bg" />
									<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_3.svg" alt="ticker-bg" />
								</div>
							</div>

							<div class="ticker-bg__content fourth-line">
								<div class="ticker-bg__row ticker-bg__row-reverse">
									<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_2.svg" alt="ticker-bg" />
									<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_2.svg" alt="ticker-bg" />
								</div>
								<div class="ticker-bg__row ticker-bg__row-reverse">
									<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_2.svg" alt="ticker-bg" />
									<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_2.svg" alt="ticker-bg" />
								</div>
							</div>
						</div>

						<div class="ticker-bg">
							<div class="ticker-bg__content first-line">
								<div class="ticker-bg__row">
									<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_1.svg" alt="ticker-bg" />
									<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_1.svg" alt="ticker-bg" />
								</div>
								<div class="ticker-bg__row">
									<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_1.svg" alt="ticker-bg" />
									<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_1.svg" alt="ticker-bg" />
								</div>
							</div>
							<div class="ticker-bg__content second-line">
								<div class="ticker-bg__row ticker-bg__row-reverse">
									<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_2.svg" alt="ticker-bg" />
									<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_2.svg" alt="ticker-bg" />
								</div>
								<div class="ticker-bg__row ticker-bg__row-reverse">
									<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_2.svg" alt="ticker-bg" />
									<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_2.svg" alt="ticker-bg" />
								</div>
							</div>
							<div class="ticker-bg__content thrid-line">
								<div class="ticker-bg__row">
									<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_3.svg" alt="ticker-bg" />
									<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_3.svg" alt="ticker-bg" />
								</div>
								<div class="ticker-bg__row">
									<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_3.svg" alt="ticker-bg" />
									<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_3.svg" alt="ticker-bg" />
								</div>
							</div>

							<div class="ticker-bg__content fourth-line">
								<div class="ticker-bg__row ticker-bg__row-reverse">
									<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_2.svg" alt="ticker-bg" />
									<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_2.svg" alt="ticker-bg" />
								</div>
								<div class="ticker-bg__row ticker-bg__row-reverse">
									<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_2.svg" alt="ticker-bg" />
									<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_2.svg" alt="ticker-bg" />
								</div>
							</div>
						</div>

					</div>

					<div class="about__content">
						<div class="about__scene about__scene_1 scene-text">
							<p class="row_1">нашою основною</p>
							<p class="row_2">
								<span>фішкою
									<img src="<?php bloginfo('template_url'); ?>/assets/img/about/chip.svg" width="56" height="70" alt="Chip" /></span>
								є комфортні
							</p>
							<p class="row_3">відносини</p>
						</div>

						<div class="about__scene about__scene_2 scene-text">
							<p class="row_1">саме такі умови<i> ми</i></p>
							<p class="row_2"><i>ми</i> пропонуємо</p>
							<p class="row_3">кожному хто <i>хоче</i></p>
							<p class="row_4">
								<i>хоче</i>
								з нами дружити
								<span><img src="<?php bloginfo('template_url'); ?>/assets/img/about/hands.svg" width="79" height="75" alt="hands" /></span>,
							</p>
							<p class="row_8">розвиватися <i>та</i></p>
							<p class="row_6">
								<i>та</i>
								зростати
								<span><img src="<?php bloginfo('template_url'); ?>/assets/img/about/rocket.svg" width="97" height="84" alt="rocket" /></span>
							</p>
						</div>

						<div class="about__scene about__scene_5">
							<p class="scene-text row_1">
								тому співпраця <br />
								для нас це:
							</p>

							<div class="advanteges">
								<div class="advanteges__item advanteges__item_1">
									<picture><source srcset="<?php bloginfo('template_url'); ?>/assets/img/about/atv1.webp" type="image/webp"><img src="<?php bloginfo('template_url'); ?>/assets/img/about/atv1.png" width="287" height="300" class="advanteges__img" alt="advanteges" /></picture>
									<p class="advanteges__desc body_7">
										довіра, прозорість та позитивна комунікаця
									</p>
								</div>
								<div class="advanteges__item advanteges__item_2">
									<p class="advanteges__desc body_7">
										постійний асортимент та високий об’єм виробництва
									</p>
									<picture><source srcset="<?php bloginfo('template_url'); ?>/assets/img/about/atv2.webp" type="image/webp"><img src="<?php bloginfo('template_url'); ?>/assets/img/about/atv2.png" width="251" height="251" class="advanteges__img" alt="advanteges" /></picture>
								</div>
								<div class="advanteges__item advanteges__item_3">
									<picture><source srcset="<?php bloginfo('template_url'); ?>/assets/img/about/atv3.webp" type="image/webp"><img src="<?php bloginfo('template_url'); ?>/assets/img/about/atv3.png" width="299" height="232" class="advanteges__img" alt="advanteges" /></picture>
									<p class="advanteges__desc body_7">
										власна логістика, швидка доставка
									</p>
								</div>
								<div class="advanteges__item advanteges__item_4">
									<picture><source srcset="<?php bloginfo('template_url'); ?>/assets/img/about/atv4.webp" type="image/webp"><img src="<?php bloginfo('template_url'); ?>/assets/img/about/atv4.png" width="277" height="228" class="advanteges__img" alt="advanteges" /></picture>
									<p class="advanteges__desc body_7">власний креативний R&D відділ</p>
								</div>
								<div class="advanteges__item advanteges__item_5">
									<picture><source srcset="<?php bloginfo('template_url'); ?>/assets/img/about/atv5.webp" type="image/webp"><img src="<?php bloginfo('template_url'); ?>/assets/img/about/atv5.png" width="288" height="235" class="advanteges__img" alt="advanteges" /></picture>
									<p class="advanteges__desc body_7">
										маркетингова та digital підтримка
									</p>
								</div>
							</div>
						</div>

						<div class="about__scene about__scene_3 scene-text">
							<p class="row_1">Тому якщо тебе <i>все</i></p>
							<p class="row_2"><i>все</i> влаштовує,</p>
							<p class="row_3">скоріше качай</p>
							<p class="row_4">нашу презентацію</p>
							<div class="row_5">
								<button class="btn about__download-btn">
									<strong></strong>
									<span>
										<i></i>
										Завантажити pdf
									</span>
									<mark><i></i></mark>
								</button>
							</div>
						</div>

						<div class="about__scene about__scene_4 scene-text">
							<p class="row_1">
								телефонуй
								<span>
									<img src="<?php bloginfo('template_url'); ?>/assets/img/about/phone.svg" width="79" height="85" alt="phone" />
								</span>
								<i>та</i>
							</p>
							<p class="row_2"><i>та </i>замовляй <b>НАШУ</b></p>
							<p class="row_3"><b>НАШУ </b>КРУТУ продукцію з</p>
							<p class="row_4" style="white-space: pre-line">найприємні&shy;шими</p>
							<p class="row_6">емоціями</p>
						</div>
					</div>

					<div class="about__bagel" data-da=".about,768,0">
						<!-- <picture><source srcset="<?php bloginfo('template_url'); ?>/assets/img/about/frame.webp" type="image/webp"><img src="<?php bloginfo('template_url'); ?>/assets/img/about/frame.png" alt="bagel" /></picture> -->
						<div class="about__bagel-sprite"></div>
					</div>
				</div>
			</section>
			<section class="feedback">
				<div class="feedback__wrap">
					<div class="feedback__container">
						<div class="form__success">
							<p class="form__success-msg">Дякуємо! ваша заявка прийнята</p>
							<picture><source srcset="<?php bloginfo('template_url'); ?>/assets/img/feedback/ok_mark.webp" type="image/webp"><img class="form__success-mark" src="<?php bloginfo('template_url'); ?>/assets/img/feedback/ok_mark.png" alt="ok-mark" /></picture>
						</div>
						<picture><source srcset="<?php bloginfo('template_url'); ?>/assets/img/feedback/message.webp" type="image/webp"><img class="img__sticker img__sticker-1" src="<?php bloginfo('template_url'); ?>/assets/img/feedback/message.png" alt="message-mark" /></picture>
						<picture><source srcset="<?php bloginfo('template_url'); ?>/assets/img/feedback/question.webp" type="image/webp"><img class="img__sticker img__sticker-2" src="<?php bloginfo('template_url'); ?>/assets/img/feedback/question.png" alt="question-mark" /></picture>
						<h2 class="feedback__heading title">
							залишились питання? <br class="line-break" />ми маємо відповіді
						</h2>
						<form class="feedback__form form" id="form-feedback">
							<div class="form__wrap">
								<div class="form__loader">
									<span class="loader"></span>
								</div>

								<label class="form__lable label-name" for="userName">
									<span class="form__placeholder">Ваше ім’я</span>
									<input class="form__input" name="yourName" type="text" aria-label="your name" id="userName" />
								</label>
								<label class="form__lable label-email" for="userEmail">
									<span class="form__placeholder">Email</span>
									<input class="form__input" name="yourEmail" type="email" aria-label="your email" id="userEmail" />
								</label>
								<label class="form__lable label-phone" for="userPhone">
									<span class="form__placeholder">Номер телефону</span>
									<input class="form__input" name="yourPhone" type="text" aria-label="your phone" id="userPhone" />
								</label>
								<label class="form__lable label-textarea" for="userMessage">
									<span class="form__placeholder">Повідомлення</span>
									<textarea class="form__textarea" name="yourMessage" aria-label="your message" id="userMessage"></textarea>
								</label>
							</div>
							<div class="popup__alert"></div>
							<button type="submit" class="btn button form__btn">
								<strong></strong>
								<span>Відправити</span>
								<mark><i></i></mark>
							</button>
						</form>
					</div>
				</div>

				<div class="feedback__ticker">
					<div class="ticker__container">
						<div class="marquee">
							<div class="marquee__row">
								<p class="marquee__item marquee__text color">Смачно бо інакше</p>
								<p class="marquee__item marquee__text outline">Смачно бо інакше</p>
							</div>
							<div class="marquee__row">
								<p class="marquee__item marquee__text color">Смачно бо інакше</p>
								<p class="marquee__item marquee__text outline">Смачно бо інакше</p>
							</div>
						</div>
						<div class="marquee">
							<div class="marquee__row marquee__row-reverse">
								<p class="marquee__item marquee__text color">
									Завжди хрумтить бо свіже
								</p>
								<p class="marquee__item marquee__text outline">
									Завжди хрумтить бо свіже
								</p>
							</div>
							<div class="marquee__row marquee__row-reverse">
								<p class="marquee__item marquee__text color">
									Завжди хрумтить бо свіже
								</p>
								<p class="marquee__item marquee__text outline">
									Завжди хрумтить бо свіже
								</p>
							</div>
						</div>
						<div class="marquee">
							<div class="marquee__row">
								<p class="marquee__item marquee__text color">Свіже бо стараємось</p>
								<p class="marquee__item marquee__text outline">Свіже бо стараємось</p>
							</div>
							<div class="marquee__row">
								<p class="marquee__item marquee__text color">Свіже бо стараємось</p>
								<p class="marquee__item marquee__text outline">Свіже бо стараємось</p>
							</div>
						</div>
					</div>
				</div>
			</section>


			<section class="cooperation-offer-insta">
				<div class="cooperation-offer-insta__bg-nimate">
					<div class="ticker-bg">
						<div class="ticker-bg__content first-line">
							<div class="ticker-bg__row">
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_1.svg" alt="ticker-bg" />
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_1.svg" alt="ticker-bg" />
							</div>
							<div class="ticker-bg__row">
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_1.svg" alt="ticker-bg" />
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_1.svg" alt="ticker-bg" />
							</div>
						</div>
						<div class="ticker-bg__content second-line">
							<div class="ticker-bg__row ticker-bg__row-reverse">
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_2.svg" alt="ticker-bg" />
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_2.svg" alt="ticker-bg" />
							</div>
							<div class="ticker-bg__row ticker-bg__row-reverse">
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_2.svg" alt="ticker-bg" />
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_2.svg" alt="ticker-bg" />
							</div>
						</div>
						<div class="ticker-bg__content thrid-line">
							<div class="ticker-bg__row">
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_3.svg" alt="ticker-bg" />
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_3.svg" alt="ticker-bg" />
							</div>
							<div class="ticker-bg__row">
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_3.svg" alt="ticker-bg" />
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_3.svg" alt="ticker-bg" />
							</div>
						</div>

						<div class="ticker-bg__content fourth-line">
							<div class="ticker-bg__row ticker-bg__row-reverse">
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_2.svg" alt="ticker-bg" />
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_2.svg" alt="ticker-bg" />
							</div>
							<div class="ticker-bg__row ticker-bg__row-reverse">
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_2.svg" alt="ticker-bg" />
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_2.svg" alt="ticker-bg" />
							</div>
						</div>
					</div>

					<div class="ticker-bg">
						<div class="ticker-bg__content first-line">
							<div class="ticker-bg__row">
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_1.svg" alt="ticker-bg" />
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_1.svg" alt="ticker-bg" />
							</div>
							<div class="ticker-bg__row">
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_1.svg" alt="ticker-bg" />
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_1.svg" alt="ticker-bg" />
							</div>
						</div>
						<div class="ticker-bg__content second-line">
							<div class="ticker-bg__row ticker-bg__row-reverse">
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_2.svg" alt="ticker-bg" />
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_2.svg" alt="ticker-bg" />
							</div>
							<div class="ticker-bg__row ticker-bg__row-reverse">
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_2.svg" alt="ticker-bg" />
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_2.svg" alt="ticker-bg" />
							</div>
						</div>
						<div class="ticker-bg__content thrid-line">
							<div class="ticker-bg__row">
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_3.svg" alt="ticker-bg" />
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_3.svg" alt="ticker-bg" />
							</div>
							<div class="ticker-bg__row">
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_3.svg" alt="ticker-bg" />
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_3.svg" alt="ticker-bg" />
							</div>
						</div>

						<div class="ticker-bg__content fourth-line">
							<div class="ticker-bg__row ticker-bg__row-reverse">
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_2.svg" alt="ticker-bg" />
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_2.svg" alt="ticker-bg" />
							</div>
							<div class="ticker-bg__row ticker-bg__row-reverse">
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_2.svg" alt="ticker-bg" />
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_2.svg" alt="ticker-bg" />
							</div>
						</div>
					</div>

					<div class="ticker-bg">
						<div class="ticker-bg__content first-line">
							<div class="ticker-bg__row">
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_1.svg" alt="ticker-bg" />
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_1.svg" alt="ticker-bg" />
							</div>
							<div class="ticker-bg__row">
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_1.svg" alt="ticker-bg" />
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_1.svg" alt="ticker-bg" />
							</div>
						</div>
						<div class="ticker-bg__content second-line">
							<div class="ticker-bg__row ticker-bg__row-reverse">
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_2.svg" alt="ticker-bg" />
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_2.svg" alt="ticker-bg" />
							</div>
							<div class="ticker-bg__row ticker-bg__row-reverse">
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_2.svg" alt="ticker-bg" />
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_2.svg" alt="ticker-bg" />
							</div>
						</div>
						<div class="ticker-bg__content thrid-line">
							<div class="ticker-bg__row">
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_3.svg" alt="ticker-bg" />
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_3.svg" alt="ticker-bg" />
							</div>
							<div class="ticker-bg__row">
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_3.svg" alt="ticker-bg" />
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_3.svg" alt="ticker-bg" />
							</div>
						</div>

						<div class="ticker-bg__content fourth-line">
							<div class="ticker-bg__row ticker-bg__row-reverse">
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_2.svg" alt="ticker-bg" />
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_2.svg" alt="ticker-bg" />
							</div>
							<div class="ticker-bg__row ticker-bg__row-reverse">
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_2.svg" alt="ticker-bg" />
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_2.svg" alt="ticker-bg" />
							</div>
						</div>
					</div>

					<div class="ticker-bg">
						<div class="ticker-bg__content first-line">
							<div class="ticker-bg__row">
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_1.svg" alt="ticker-bg" />
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_1.svg" alt="ticker-bg" />
							</div>
							<div class="ticker-bg__row">
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_1.svg" alt="ticker-bg" />
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_1.svg" alt="ticker-bg" />
							</div>
						</div>
						<div class="ticker-bg__content second-line">
							<div class="ticker-bg__row ticker-bg__row-reverse">
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_2.svg" alt="ticker-bg" />
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_2.svg" alt="ticker-bg" />
							</div>
							<div class="ticker-bg__row ticker-bg__row-reverse">
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_2.svg" alt="ticker-bg" />
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_2.svg" alt="ticker-bg" />
							</div>
						</div>
						<div class="ticker-bg__content thrid-line">
							<div class="ticker-bg__row">
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_3.svg" alt="ticker-bg" />
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_3.svg" alt="ticker-bg" />
							</div>
							<div class="ticker-bg__row">
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_3.svg" alt="ticker-bg" />
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_3.svg" alt="ticker-bg" />
							</div>
						</div>

						<div class="ticker-bg__content fourth-line">
							<div class="ticker-bg__row ticker-bg__row-reverse">
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_2.svg" alt="ticker-bg" />
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_2.svg" alt="ticker-bg" />
							</div>
							<div class="ticker-bg__row ticker-bg__row-reverse">
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_2.svg" alt="ticker-bg" />
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_2.svg" alt="ticker-bg" />
							</div>
						</div>
					</div>

					<div class="ticker-bg">
						<div class="ticker-bg__content first-line">
							<div class="ticker-bg__row">
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_1.svg" alt="ticker-bg" />
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_1.svg" alt="ticker-bg" />
							</div>
							<div class="ticker-bg__row">
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_1.svg" alt="ticker-bg" />
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_1.svg" alt="ticker-bg" />
							</div>
						</div>
						<div class="ticker-bg__content second-line">
							<div class="ticker-bg__row ticker-bg__row-reverse">
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_2.svg" alt="ticker-bg" />
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_2.svg" alt="ticker-bg" />
							</div>
							<div class="ticker-bg__row ticker-bg__row-reverse">
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_2.svg" alt="ticker-bg" />
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_2.svg" alt="ticker-bg" />
							</div>
						</div>
						<div class="ticker-bg__content thrid-line">
							<div class="ticker-bg__row">
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_3.svg" alt="ticker-bg" />
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_3.svg" alt="ticker-bg" />
							</div>
							<div class="ticker-bg__row">
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_3.svg" alt="ticker-bg" />
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_3.svg" alt="ticker-bg" />
							</div>
						</div>

						<div class="ticker-bg__content fourth-line">
							<div class="ticker-bg__row ticker-bg__row-reverse">
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_2.svg" alt="ticker-bg" />
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_2.svg" alt="ticker-bg" />
							</div>
							<div class="ticker-bg__row ticker-bg__row-reverse">
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_2.svg" alt="ticker-bg" />
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_2.svg" alt="ticker-bg" />
							</div>
						</div>
					</div>

					<div class="ticker-bg">
						<div class="ticker-bg__content first-line">
							<div class="ticker-bg__row">
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_1.svg" alt="ticker-bg" />
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_1.svg" alt="ticker-bg" />
							</div>
							<div class="ticker-bg__row">
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_1.svg" alt="ticker-bg" />
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_1.svg" alt="ticker-bg" />
							</div>
						</div>
						<div class="ticker-bg__content second-line">
							<div class="ticker-bg__row ticker-bg__row-reverse">
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_2.svg" alt="ticker-bg" />
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_2.svg" alt="ticker-bg" />
							</div>
							<div class="ticker-bg__row ticker-bg__row-reverse">
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_2.svg" alt="ticker-bg" />
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_2.svg" alt="ticker-bg" />
							</div>
						</div>
						<div class="ticker-bg__content thrid-line">
							<div class="ticker-bg__row">
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_3.svg" alt="ticker-bg" />
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_3.svg" alt="ticker-bg" />
							</div>
							<div class="ticker-bg__row">
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_3.svg" alt="ticker-bg" />
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_3.svg" alt="ticker-bg" />
							</div>
						</div>

						<div class="ticker-bg__content fourth-line">
							<div class="ticker-bg__row ticker-bg__row-reverse">
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_2.svg" alt="ticker-bg" />
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_2.svg" alt="ticker-bg" />
							</div>
							<div class="ticker-bg__row ticker-bg__row-reverse">
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_2.svg" alt="ticker-bg" />
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_2.svg" alt="ticker-bg" />
							</div>
						</div>
					</div>

				</div>
				<section class="cooperation">
					<div class="cooperation__container">
						<div class="cooperation__content">
							<h3 class="cooperation__heading heading_1">
								Ми завжди в активному пошуку нових партнерів
							</h3>
							<p class="cooperation__text body_3">
								Аби спільно розвивати бренд "Рівне Коло". Ми готові до співпраці
								незалежно від твого місцезнаходження.<br class="line-break" />
								А також запропонуємо найкращі умови.
							</p>
						</div>
						<div class="cooperation__img">
							<picture><source srcset="<?php bloginfo('template_url'); ?>/assets/img/cooperation/cooperation_img.webp" type="image/webp"><img src="<?php bloginfo('template_url'); ?>/assets/img/cooperation/cooperation_img.png" alt="logo-sticker" /></picture>
						</div>
					</div>
				</section>
				<section class="offer">
					<div class="offer__container">
						<h2 class="offer__heading heading">ми пропонуємо</h2>
						<div class="offer__slider">
							<div class="offer__wrapper" id="carousel">
								<div class="offer__slide">
									<div class="offer__slide-img offer__slide-img_pink">
										<svg width="414" height="500" viewBox="0 0 414 500" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M273.889 493.972C381.559 464.598 439.035 331.529 402.266 196.755C365.497 61.9809 248.406 -23.4628 140.737 5.91145C33.0678 35.2857 -24.4082 168.354 12.3607 303.128C49.1297 437.903 166.22 523.346 273.889 493.972Z" class="svg-bg" />
											<path d="M350.096 413.53C328.687 443.037 300.254 463.292 267.869 472.13C172.464 498.152 67.6749 419.692 34.277 297.236C23.7576 258.662 21.2487 218.504 27.041 181.118C32.5692 145.388 45.5181 112.685 64.4882 86.5495C85.8967 57.0425 114.33 36.7872 146.715 27.9492C242.12 1.92803 346.909 80.3876 380.307 202.844C390.826 241.418 393.335 281.576 387.543 318.961C382.015 354.692 369.066 387.395 350.096 413.53Z" stroke="#1D1D1B" stroke-width="6" stroke-miterlimit="10" />
											<path d="M216.346 102.35C213.353 101.532 210.325 100.748 207.296 100" stroke="#1D1D1B" stroke-width="6" stroke-miterlimit="10" />
											<path d="M266.513 121.664C296.883 135.185 321.61 144.542 342.384 166.092C342.384 166.092 313.168 233.97 307.323 246.998C301.478 260.035 294.735 270.379 294.735 272.623C294.735 274.868 289.348 309.481 287.543 317.122C285.747 324.771 278.555 356.233 274.515 359.833C270.465 363.424 284.4 402.535 284.4 411.972C284.4 421.409 280.351 427.703 280.351 427.703C280.351 427.703 200.342 384.102 172.023 373.759C143.705 363.424 78.0798 337.35 78.0798 337.35L79.8755 323.416C79.8755 323.416 90.2101 318.477 91.5657 317.579C92.9125 316.673 102.798 298.697 104.145 292.852C105.501 287.007 118.529 255.097 118.529 255.097C118.529 255.097 118.08 242.958 119.884 227.227C121.68 211.488 138.758 87.4297 138.758 87.4297C138.758 87.4297 153.08 89.1638 172.332 92.6321" stroke="#1D1D1B" stroke-width="6" stroke-miterlimit="10" />
											<path d="M138.758 87.4297C156.398 120.247 190.448 127.324 205.624 131.03C220.8 134.736 254.84 143.504 278.441 151.593C302.041 159.683 331.821 166.092 342.384 166.092" stroke="#1D1D1B" stroke-width="6" stroke-miterlimit="10" />
											<path d="M290.395 210.599C281.284 221.585 272.983 233.231 265.562 245.423C261.442 252.192 257.534 260.687 261.266 267.676C263.846 272.518 269.779 275.775 270.078 281.259C270.492 288.9 259.84 292.694 258.097 300.141C257.199 303.979 258.881 307.879 259.876 311.699C262.631 322.28 259.752 334.164 252.455 342.315" stroke="#1D1D1B" stroke-width="6" stroke-miterlimit="10" />
											<path d="M131.469 242.034L158.59 146.329" stroke="#1D1D1B" stroke-width="6" stroke-miterlimit="10" />
											<path d="M255.351 382.597C239.7 365.81 228.784 344.648 224.189 322.157" stroke="#1D1D1B" stroke-width="6" stroke-miterlimit="10" />
											<path d="M264.699 356.646L251.997 359.243" stroke="#1D1D1B" stroke-width="6" stroke-miterlimit="10" />
											<path d="M115.641 283.319C121.636 281.188 125.078 273.706 122.789 267.764" stroke="#1D1D1B" stroke-width="6" stroke-miterlimit="10" />
											<path d="M316.531 180.625C303.775 190.053 288.643 196.224 272.93 198.398C266.222 199.322 258.661 199.287 253.617 194.771C249.893 191.435 248.318 186.197 248.335 181.197C248.353 176.197 249.77 171.312 251.178 166.514" stroke="#1D1D1B" stroke-width="6" stroke-miterlimit="10" />
											<path d="M213.485 132.984C214.937 129.384 215.738 125.458 215.738 121.338C215.738 115.986 214.391 110.942 212.015 106.532C206.733 96.7782 196.416 90.1497 184.55 90.1497C171.768 90.1497 160.791 97.8346 155.976 108.847" stroke="#1D1D1B" stroke-width="6" stroke-miterlimit="10" />
											<path d="M194.374 128.169C195.729 126.232 196.522 123.882 196.522 121.338C196.522 114.727 191.161 109.366 184.55 109.366C178.423 109.366 173.379 113.97 172.675 119.912" stroke="#1D1D1B" stroke-width="6" stroke-miterlimit="10" />
											<path d="M267.657 148.064C266.724 145.299 265.43 142.703 263.81 140.352C263.766 140.291 263.731 140.229 263.687 140.167C258.053 132.06 248.678 126.761 238.062 126.761C230.395 126.761 223.37 129.525 217.948 134.12" stroke="#1D1D1B" stroke-width="6" stroke-miterlimit="10" />
											<path d="M212.015 106.532C217.728 99.824 226.24 95.5723 235.738 95.5723C252.965 95.5723 266.927 109.534 266.927 126.761C266.927 131.461 265.888 135.916 264.022 139.912C263.951 140.062 263.881 140.203 263.81 140.352C262.868 142.306 261.715 144.146 260.404 145.845" stroke="#1D1D1B" stroke-width="6" stroke-miterlimit="10" />
											<path d="M247.472 128.195C247.631 127.438 247.71 126.655 247.71 125.854C247.71 119.252 242.349 113.891 235.738 113.891C229.127 113.891 223.775 119.252 223.775 125.854C223.775 127.262 224.022 128.618 224.471 129.877" stroke="#1D1D1B" stroke-width="6" stroke-miterlimit="10" />
											<path d="M263.687 140.167C263.802 140.079 263.907 139.991 264.022 139.921C269.189 136.127 275.554 133.891 282.446 133.891C298.432 133.891 311.619 145.933 313.414 161.444" stroke="#1D1D1B" stroke-width="6" stroke-miterlimit="10" />
										</svg>
									</div>
									<div class="offer__slide-content">
										<h4 class="offer__slide-title title_2">PRIVATE LABEL</h4>
										<p class="offer__slide-text body_4">
											Власний R&D центр: створення унікальних смаків та рецептур під
											замовлення
										</p>
									</div>
								</div>
								<div class="offer__slide">
									<div class="offer__slide-img offer__slide-img_blue">
										<svg width="588" height="500" viewBox="0 0 588 500" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path class="svg-bg" d="M321.267 500.051C290.559 500.051 259.597 495.871 229.243 487.622C153.889 467.156 89.3951 423.725 47.6339 365.324C26.9558 336.407 12.9274 305.334 5.93345 272.976C-1.40461 238.988 -0.615201 205.162 8.27144 172.43C22.3403 120.638 55.2858 76.7615 103.555 45.5469C149.739 15.6886 206.015 -0.10083 266.288 -0.10083C296.996 -0.10083 327.958 4.07933 358.322 12.3283C433.676 32.7939 498.17 76.2251 539.931 134.626C560.609 163.543 574.638 194.616 581.632 226.974C588.97 260.962 588.181 294.788 579.294 327.521C565.225 379.312 532.28 423.189 484.01 454.403C437.826 484.262 381.551 500.051 321.277 500.051H321.267Z" />
											<path d="M554.707 320.801C586.681 203.036 495.705 75.8309 351.506 36.6801C207.308 -2.4707 64.492 61.2585 32.5181 179.023C0.544242 296.788 91.5202 423.993 235.719 463.144C379.917 502.295 522.733 438.566 554.707 320.801Z" stroke="#1D1D1B" stroke-width="6" stroke-miterlimit="10" />
											<path d="M349.455 137.571L332.603 140.365" stroke="#1D1D1B" stroke-width="6" stroke-miterlimit="10" />
											<path d="M360.204 135.79L393.23 130.304L493.22 195.041L481.206 228.28L437.309 235.759V235.77L424.749 237.905L409.526 240.506L396.651 242.693V242.703L381.732 245.243L368.544 247.49L353.939 249.98L340.427 252.288L326.145 254.717L312.299 257.085L298.352 259.464L284.152 261.883L270.558 264.201L255.983 266.68L242.765 268.938L227.805 271.488L182.522 279.211L111.216 213.361L98.9998 179.15L323.686 141.853" stroke="#1D1D1B" stroke-width="6" stroke-miterlimit="10" />
											<path d="M174.981 249.312L209.87 397.774" stroke="#1D1D1B" stroke-width="6" stroke-miterlimit="10" />
											<path d="M115.346 217.177L151.338 334.201L209.87 397.774L432.755 350.486L475.912 229.181" stroke="#1D1D1B" stroke-width="6" stroke-miterlimit="10" />
											<path d="M392.745 321.154L381.621 312.996" stroke="#1D1D1B" stroke-width="6" stroke-miterlimit="10" />
											<path d="M409.759 333.624L400.943 327.156" stroke="#1D1D1B" stroke-width="6" stroke-miterlimit="10" />
											<path d="M348.899 299.838L335.123 302.237H335.113" stroke="#1D1D1B" stroke-width="6" stroke-miterlimit="10" />
											<path d="M298.595 308.594L284.283 311.083" stroke="#1D1D1B" stroke-width="6" stroke-miterlimit="10" />
											<path d="M248.271 317.338L233.281 319.95" stroke="#1D1D1B" stroke-width="6" stroke-miterlimit="10" />
											<path d="M273.422 312.966L258.807 315.506" stroke="#1D1D1B" stroke-width="6" stroke-miterlimit="10" />
											<path d="M323.746 304.221L309.718 306.66" stroke="#1D1D1B" stroke-width="6" stroke-miterlimit="10" />
											<path d="M360.487 297.824L360.852 297.763L372.319 306.174" stroke="#1D1D1B" stroke-width="6" stroke-miterlimit="10" />
											<path d="M393.221 130.304L376.874 214.879" stroke="#1D1D1B" stroke-width="6" stroke-miterlimit="10" />
											<path d="M242.764 268.938C242.795 269.079 242.815 269.221 242.835 269.363L252.947 358.675C253.412 362.835 250.416 366.6 246.257 367.065C245.963 367.106 245.669 367.116 245.386 367.116C241.58 367.116 238.291 364.262 237.856 360.385L227.805 271.488" stroke="#1D1D1B" stroke-width="6" stroke-miterlimit="10" />
											<path d="M270.558 264.201C270.609 264.464 270.639 264.737 270.659 265.011L275.831 354.636C276.064 358.705 272.967 362.187 268.898 362.42C268.756 362.43 268.605 362.43 268.463 362.43C264.586 362.43 261.337 359.403 261.115 355.486L255.983 266.681" stroke="#1D1D1B" stroke-width="6" stroke-miterlimit="10" />
											<path d="M298.352 259.464C298.423 259.838 298.463 260.233 298.463 260.638L298.706 350.577C298.716 354.525 295.518 357.743 291.56 357.753H291.54C287.603 357.753 284.394 354.555 284.384 350.608L284.151 261.883" stroke="#1D1D1B" stroke-width="6" stroke-miterlimit="10" />
											<path d="M326.145 254.717C326.236 255.213 326.267 255.729 326.236 256.245L321.55 346.488C321.358 350.193 318.291 353.067 314.627 353.067C314.505 353.067 314.384 353.067 314.263 353.057C310.427 352.855 307.491 349.596 307.684 345.77L312.299 257.085" stroke="#1D1D1B" stroke-width="6" stroke-miterlimit="10" />
											<path d="M354 251.822L344.374 342.369C344.01 345.82 341.095 348.381 337.704 348.381C337.461 348.381 337.218 348.371 336.985 348.341C333.291 347.956 330.609 344.646 331.004 340.952L340.427 252.288L353.939 249.98C354.04 250.567 354.07 251.195 354 251.822Z" stroke="#1D1D1B" stroke-width="6" stroke-miterlimit="10" />
											<path d="M381.732 245.243C381.854 245.922 381.854 246.64 381.742 247.359L367.188 338.219C366.682 341.418 363.908 343.695 360.771 343.695C360.427 343.695 360.083 343.675 359.738 343.614C356.186 343.047 353.777 339.707 354.344 336.164L368.544 247.49" stroke="#1D1D1B" stroke-width="6" stroke-miterlimit="10" />
											<path d="M409.526 240.507C409.657 241.276 409.647 242.075 409.475 242.875L389.991 334.039C389.354 336.994 386.752 339.019 383.848 339.019C383.412 339.019 382.967 338.968 382.522 338.877C379.131 338.148 376.965 334.808 377.684 331.407L396.651 242.693" stroke="#1D1D1B" stroke-width="6" stroke-miterlimit="10" />
											<path d="M437.309 235.76C437.461 236.6 437.43 237.48 437.198 238.351L412.775 329.828C412.056 332.541 409.597 334.332 406.914 334.332C406.398 334.332 405.872 334.262 405.345 334.13C402.107 333.26 400.184 329.93 401.044 326.691L424.748 237.905" stroke="#1D1D1B" stroke-width="6" stroke-miterlimit="10" />
											<path d="M333.645 222.258L337.147 171.367C337.38 168.017 340.295 165.496 343.625 165.729C346.975 165.962 349.495 168.857 349.273 172.207L345.963 220.152" stroke="#1D1D1B" stroke-width="6" stroke-miterlimit="10" />
											<path d="M309.607 226.357L310.862 176.377C310.953 172.936 313.787 170.203 317.238 170.314C320.669 170.395 323.382 173.25 323.291 176.681L322.097 224.221" stroke="#1D1D1B" stroke-width="6" stroke-miterlimit="10" />
											<path d="M285.487 230.466L284.586 181.387C284.525 177.875 287.319 174.98 290.831 174.909C294.323 174.859 297.248 177.642 297.309 181.154L298.169 228.3" stroke="#1D1D1B" stroke-width="6" stroke-miterlimit="10" />
											<path d="M261.287 234.596L258.322 186.418C258.099 182.824 260.832 179.748 264.415 179.525C268.018 179.302 271.085 182.035 271.307 185.618L274.192 232.389" stroke="#1D1D1B" stroke-width="6" stroke-miterlimit="10" />
											<path d="M237.005 238.735L232.066 191.448C231.692 187.794 234.343 184.525 237.997 184.14C241.651 183.766 244.92 186.418 245.295 190.071L250.143 236.499" stroke="#1D1D1B" stroke-width="6" stroke-miterlimit="10" />
											<path d="M212.644 242.885L205.832 196.488C205.285 192.784 207.856 189.322 211.56 188.776C215.285 188.229 218.726 190.8 219.273 194.515L226.044 240.608" stroke="#1D1D1B" stroke-width="6" stroke-miterlimit="10" />
											<path d="M188.21 247.055L179.597 201.539C178.888 197.774 181.368 194.14 185.133 193.432C188.888 192.713 192.532 195.193 193.24 198.958L201.894 244.717" stroke="#1D1D1B" stroke-width="6" stroke-miterlimit="10" />
											<path d="M177.694 248.847L174.981 249.312L160.072 235.547L153.382 206.59C152.502 202.774 154.88 198.968 158.696 198.088C162.502 197.207 166.307 199.586 167.188 203.391L177.694 248.847Z" stroke="#1D1D1B" stroke-width="6" stroke-miterlimit="10" />
											<path d="M234.678 81.8728L215.903 159.747" stroke="#1D1D1B" stroke-width="6" stroke-miterlimit="10" />
											<path d="M307.674 245.243L329.263 140.638" stroke="#1D1D1B" stroke-width="6" stroke-linecap="round" stroke-linejoin="round" />
											<path d="M327.866 143.634C326.894 143.634 325.923 143.361 325.062 142.784L236.135 83.3607C233.807 81.8121 233.19 78.6643 234.738 76.3364C236.287 74.0084 239.435 73.391 241.763 74.9396L330.69 134.363C333.018 135.911 333.635 139.059 332.087 141.387C331.115 142.844 329.506 143.634 327.876 143.634H327.866Z" stroke="#1D1D1B" stroke-width="6" stroke-miterlimit="10" />
											<path d="M293.777 148.189L277.846 111.225" stroke="#1D1D1B" stroke-width="6" stroke-miterlimit="10" />
											<path d="M270.478 94.1298L264.526 80.3342" stroke="#1D1D1B" stroke-width="6" stroke-miterlimit="10" />
											<path d="M383.15 231.458L356.631 137.561" stroke="#1D1D1B" stroke-width="6" stroke-linecap="round" stroke-linejoin="round" />
											<path d="M355.275 140.476C354.334 140.476 353.382 140.203 352.542 139.646L265.943 81.7817C263.676 80.2736 263.068 77.2068 264.587 74.9497C266.095 72.6825 269.161 72.0853 271.419 73.5934L358.018 131.458C360.285 132.966 360.892 136.033 359.374 138.29C358.423 139.707 356.864 140.476 355.275 140.476Z" stroke="#1D1D1B" stroke-width="6" stroke-miterlimit="10" />
											<path d="M493.23 195.041L174.991 249.312L99.0095 179.15" stroke="#1D1D1B" stroke-width="6" stroke-miterlimit="10" />
										</svg>
									</div>
									<div class="offer__slide-content">
										<h4 class="offer__slide-title title_2">RETAIL</h4>
										<p class="offer__slide-text body_4">
											Налагоджена логістика в усі обласні центри України, а також
											маркетингова підтримка
										</p>
									</div>
								</div>
								<div class="offer__slide">
									<div class="offer__slide-img offer__slide-img_grean">
										<svg width="478" height="500" viewBox="0 0 478 500" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M405.467 384.455C498.436 268.702 498.837 114.657 406.363 40.3856C313.889 -33.8855 163.559 -0.257398 70.5904 115.496C-22.3779 231.249 -22.7789 385.295 69.6947 459.566C162.168 533.837 312.499 500.209 405.467 384.455Z" class="svg-bg" />
											<path d="M186.548 474.869C147.802 474.869 112.634 463.062 84.8249 440.721C2.88673 374.916 4.95602 235.805 89.4317 130.637C116.042 97.5093 149.02 70.2902 184.787 51.9288C218.973 34.382 255.181 25.1123 289.497 25.1123C328.243 25.1123 363.411 36.9194 391.22 59.2602C473.149 125.075 471.08 264.176 386.604 369.354C359.993 402.481 327.016 429.7 291.248 448.062C257.063 465.609 220.855 474.878 186.538 474.878L186.548 474.869Z" stroke="#1D1D1B" stroke-width="6" stroke-miterlimit="10" stroke-linejoin="round" />
											<path d="M272.934 201.386C272.934 223.38 260.836 242.023 244.067 248.53C239.947 250.131 235.546 250.993 230.977 250.993C207.812 250.993 189.029 228.783 189.029 201.386C189.029 173.989 207.812 151.789 230.977 151.789C237.184 151.789 243.074 153.38 248.374 156.245C262.868 164.054 272.934 181.33 272.934 201.386Z" stroke="#1D1D1B" stroke-width="6" stroke-miterlimit="10" stroke-linejoin="round" />
											<path d="M272.934 201.386C272.934 223.38 260.836 242.022 244.067 248.53C227.428 242.172 215.434 224.213 215.434 203.062C215.434 180.131 229.535 160.955 248.374 156.245C262.868 164.054 272.934 181.329 272.934 201.386Z" stroke="#1D1D1B" stroke-width="6" stroke-miterlimit="10" stroke-linejoin="round" />
											<path d="M351.567 201.386C351.567 218.895 348.598 235.599 343.224 250.824C321.707 313.942 232.053 438.895 232.053 438.895C232.053 438.895 177.325 332.407 146.838 267.266C145.499 264.401 144.207 261.62 142.971 258.933C135.611 241.611 131.473 222.069 131.473 201.386C131.473 130.019 180.743 72.1631 241.52 72.1631C302.297 72.1631 351.567 130.019 351.567 201.386Z" stroke="#1D1D1B" stroke-width="6" stroke-miterlimit="10" stroke-linejoin="round" />
											<path d="M241.52 72.1631H260.593C321.37 72.1631 370.64 130.019 370.64 201.386C370.64 218.895 367.671 235.599 362.297 250.824C340.78 313.942 253.57 432.687 253.57 432.687L232.053 438.895" stroke="#1D1D1B" stroke-width="6" stroke-miterlimit="10" stroke-linejoin="round" />
										</svg>
									</div>
									<div class="offer__slide-content">
										<h4 class="offer__slide-title title_2">DISTRIBUTION</h4>
										<p class="offer__slide-text body_4">
											Будь-які об’єми поставок та гарантія стабільності поставок товару
										</p>
									</div>
								</div>
							</div>

							<!-- If we need navigation buttons -->
							<div class="button-prev" id="prevButton"></div>
							<div class="button-next" id="nextButton"></div>
						</div>
					</div>
				</section>

				<section class="instagram">
					<div class="instagram__header">
						<h2 class="instagram__heading heading">а Що по новинах?</h2>
					</div>
					<div class="instagram__slider swiper">
						<div class="instagram__wrapper swiper-wrapper">
							<?php foreach(getInstagram() as $inst) {?>
								<div class="instagram__slide swiper-slide slide">
									<div class="slide__head">
										<div class="slide__head-wrap">
											<img class="slide__logo" src="<?php bloginfo('template_url'); ?>/assets/img/instagram/logo.svg" alt="logo" />
											<h5 class="slide__heading title_5"><?php echo $inst["title"];?></h5>
											<p class="slide__data date"><?php echo $inst["public_date"];?></p>
										</div>

										<a href="<?php echo $inst["post_link"];?>">
											<img class="slide__icon" src="<?php bloginfo('template_url'); ?>/assets/img/instagram/icon.svg" alt="instagram" />
										</a>
									</div>
									<div class="slide__img">
										<a href="<?php echo $inst["post_link"];?>">
											<img src="<?php echo $inst["post_image"];?>" alt="post image" />
										</a>
									</div>
								</div>
							<?php }?>

						</div>
					</div>
				</section>
			</section>
		</main>
<?php get_footer();?>