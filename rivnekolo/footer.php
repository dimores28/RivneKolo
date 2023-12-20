<?php $contacts = getContacts(); ?>
<footer class="footer">
			<div class="footer__container">
				<div class="footer__content">
					<a href="/" class="footer__logo">
						<picture><source srcset="<?php bloginfo('template_url'); ?>/assets/img/logo.webp" type="image/webp"><img src="<?php bloginfo('template_url'); ?>/assets/img/logo.png" width="368" height="368" alt="logo"></picture>
					</a>

					<div class="footer__contacts">
						<h3 class="footer__heading">
							Контакти
						</h3>
						<div class="footer__phones">
							<a href="tel:<?php echo $contacts["phone_number_1"] ?>" class="footer__linck">
								<?php echo $contacts["phone_number_1"] ?>
							</a>
							<br>
							<a href="tel:<?php echo $contacts["phone_number_2"] ?>" class="footer__linck">
								<?php echo $contacts["phone_number_1"] ?>
							</a>
							<br>
							<a href="mailto:<?php echo $contacts["email"] ?>" class="footer__linck">
								<?php echo $contacts["email"] ?>
							</a>
						</div>
						<a href="<?php echo $contacts["google_maps"] ?>" class="footer__linck footer__linck_addr" target="_blank">
							<?php echo $contacts["addres"] ?>
						</a>
					</div>
				</div>

				<div class="footer__copyright">
					© Rivne Kolo <br>
					All Rights Reserved <a href="#">privacy policy</a>
				</div>
			</div>
			<a href="#" class="scroll-up" data-goto-header data-goto=".hero">
				<span>
					<svg class="scroll-arrow" width="68" height="68" viewBox="0 0 68 68" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M33.9634 61.1752V6.86481" stroke="black" stroke-width="13" stroke-miterlimit="10" stroke-linecap="round" />
						<path d="M61.0002 32.6978L33.9636 6.86481L6.91016 32.6978" stroke="black" stroke-width="13" stroke-linecap="round" stroke-linejoin="round" />
					</svg>
				</span>
			</a>
		</footer> <!-- Стилі для body -->
		<style>
			.locking body {
				overflow: hidden;
				touch-action: none;
				overscroll-behavior: none;
			}

			.loading body {
				opacity: 0;
				visibility: hidden;
			}

			.loaded body {
				transition: opacity 0.5s ease 0s;
				opacity: 1;
				visibility: visible;
			}
		</style>
		<div id="fls-preloader">
			<!-- Стилі для прелоадера -->
			<style>
				* {
					padding: 0px;
					margin: 0px;
					border: 0px;
				}

				*,
				*:before,
				*:after {
					box-sizing: border-box;
				}

				html {
					overflow: hidden;
					touch-action: none;
					overscroll-behavior: none;
				}

				/* Головний блок */
				.fls-preloader {
					pointer-events: none;
					z-index: -1;
					position: fixed;
					width: 100%;
					height: 100%;
					top: 0;
					left: 0;
					display: flex;
					justify-content: center;
					align-items: center;
					background-color: #ffdf00;
					transition: all 0.5s ease;
				}

				/* Блок з елементами */
				.fls-preloader__body {
					padding: 0.93rem;
					/* max-width: 31.25rem; */
					display: flex;
					flex-direction: column;
				}

				/* Блок з лічильником */
				.fls-preloader__counter {
					width: 540px;
					height: 540px;
					background: url(<?php bloginfo('template_url'); ?>/assets/img/preloader/sprites.png) center no-repeat;
					background-size: cover;
					background-position-y: 100%;
					position: relative;
					animation: play 3s steps(10);
				}

				.fls-preloader__gif {
					position: absolute;
					top: 50%;
					left: 50%;
					transform: translate(-50%, -50%);
					width: 290px;
					height: 290px;
				}

				@media (max-width: 1440px) {
					.fls-preloader__counter {
						width: 480px;
						height: 480px;
					}

					.fls-preloader__gif {
						width: 250px;
						height: 250px;
					}
				}

				@media (max-width: 1080px) {
					.fls-preloader__counter {
						width: 440px;
						height: 440px;
					}

					.fls-preloader__gif {
						width: 230px;
						height: 230px;
					}
				}

				@media (max-width: 767px) {
					.fls-preloader__counter {
						width: 400px;
						height: 400px;
					}

					.fls-preloader__gif {
						width: 200px;
						height: 200px;
					}
				}

				@media (max-width: 480px) {
					.fls-preloader__counter {
						width: 300px;
						height: 300px;
					}

					.fls-preloader__gif {
						width: 160px;
						height: 160px;
					}
				}

				@keyframes play {
					0% {
						background-position-y: 0%;
					}

					100% {
						background-position-y: 100%;
					}
				}

				.fls-preloader__bg {
					position: absolute;
					top: 0;
					left: 0;
					width: 100%;
					height: 100vh;
					z-index: -1;
				}

				.ticker-bg {
					position: relative;
					width: 100%;
					height: 100%;
					display: -webkit-box;
					display: -ms-flexbox;
					display: flex;
					-webkit-box-orient: vertical;
					-webkit-box-direction: normal;
					-ms-flex-direction: column;
					flex-direction: column;
				}

				.ticker-bg__content {
					display: -webkit-box;
					display: -ms-flexbox;
					display: flex;
				}

				.ticker-bg__row {
					display: -webkit-box;
					display: -ms-flexbox;
					display: flex;
					-webkit-box-orient: horizontal;
					-webkit-box-direction: normal;
					-ms-flex-direction: row;
					flex-direction: row;
					-ms-flex-wrap: nowrap;
					flex-wrap: nowrap;
					max-height: 200px;
					white-space: nowrap;
					-webkit-animation: ticker 20s infinite linear;
					animation: ticker 20s infinite linear;
					padding: 6px 0;
				}

				.ticker-bg__row-reverse {
					animation-direction: reverse;
				}

				.ticker-bg__item {
					max-height: 177px;
				}

				.ticker-bg__content-mobile {
					display: none;
				}

				@-webkit-keyframes ticker {
					100% {
						-webkit-transform: translateX(-100%);
						transform: translateX(-100%);
					}
				}

				@keyframes ticker {
					100% {
						-webkit-transform: translateX(-100%);
						transform: translateX(-100%);
					}
				}

				@media (max-width: 1920px) {
					.ticker-bg__item {
						max-height: 165px;
					}
				}

				@media (max-width: 1650px) {
					.ticker-bg__item {
						max-height: 150px;
					}
				}

				@media (max-width: 1470px) {
					.ticker-bg__item {
						max-height: 125px;
					}
				}

				@media (max-width:767px) {
					.ticker-bg__item {
						max-height: 82px;
					}

					.ticker-bg__row {
						padding: 5px 0;
					}
				}

				@media (max-width: 480px) {

					.ticker-bg__row {
						padding: 3px 0;
					}

					.ticker-bg__content-mobile {
						display: flex;
					}
				}
			</style>
			<!-- Скріпт прелоадера -->
			<script>
				function preloader() {
					const preloaderImages = document.querySelector('[data-preloader]') ? document.querySelectorAll('[data-preloader] img') : document.querySelectorAll('img');
					const preloaderContainer = document.querySelector('#fls-preloader');
					if (preloaderImages.length) {
						const preloaderTemplate = `
				<div class="fls-preloader">
					<div class="fls-preloader__body">
						<div class="fls-preloader__counter"></div>
						<img src="<?php bloginfo('template_url'); ?>/assets/img/preloader/kolo.gif" class="fls-preloader__gif" alt="">
					</div>
					<div class="fls-preloader__bg">
						<div class="ticker-bg">
							<div class="ticker-bg__content">
							<div class="ticker-bg__row">
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_1.svg" alt="ticker-bg" />
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_1.svg" alt="ticker-bg" />
							</div>
							<div class="ticker-bg__row">
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_1.svg" alt="ticker-bg" />
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_1.svg" alt="ticker-bg" />
							</div>
							</div>
							<div class="ticker-bg__content">
							<div class="ticker-bg__row ticker-bg__row-reverse">
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_2.svg" alt="ticker-bg" />
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_2.svg" alt="ticker-bg" />
							</div>
							<div class="ticker-bg__row ticker-bg__row-reverse">
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_2.svg" alt="ticker-bg" />
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_2.svg" alt="ticker-bg" />
							</div>
							</div>
							<div class="ticker-bg__content">
							<div class="ticker-bg__row">
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_3.svg" alt="ticker-bg" />
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_3.svg" alt="ticker-bg" />
							</div>
							<div class="ticker-bg__row">
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_3.svg" alt="ticker-bg" />
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_3.svg" alt="ticker-bg" />
							</div>
							</div>
							<div class="ticker-bg__content">
								<div class="ticker-bg__row ticker-bg__row-reverse">
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_1.svg" alt="ticker-bg" />
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_1.svg" alt="ticker-bg" />
								</div>
								<div class="ticker-bg__row ticker-bg__row-reverse">
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_1.svg" alt="ticker-bg" />
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_1.svg" alt="ticker-bg" />
								</div>
							</div>
							<div class="ticker-bg__content">
								<div class="ticker-bg__row">
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_2.svg" alt="ticker-bg" />
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_2.svg" alt="ticker-bg" />
								</div>
								<div class="ticker-bg__row">
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_2.svg" alt="ticker-bg" />
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_2.svg" alt="ticker-bg" />
								</div>
							</div>
							<div class="ticker-bg__content">
								<div class="ticker-bg__row ticker-bg__row-reverse">
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_3.svg" alt="ticker-bg" />
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_3.svg" alt="ticker-bg" />
								</div>
								<div class="ticker-bg__row ticker-bg__row-reverse">
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_3.svg" alt="ticker-bg" />
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_3.svg" alt="ticker-bg" />
								</div>
							</div>
							<div class="ticker-bg__content ticker-bg__content-mobile">
								<div class="ticker-bg__row">
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_3.svg" alt="ticker-bg" />
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_3.svg" alt="ticker-bg" />
								</div>
								<div class="ticker-bg__row">
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_3.svg" alt="ticker-bg" />
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_3.svg" alt="ticker-bg" />
								</div>
							</div>
							<div class="ticker-bg__content ticker-bg__content-mobile">
								<div class="ticker-bg__row ticker-bg__row-reverse">
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_3.svg" alt="ticker-bg" />
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_3.svg" alt="ticker-bg" />
								</div>
								<div class="ticker-bg__row ticker-bg__row-reverse">
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_3.svg" alt="ticker-bg" />
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_3.svg" alt="ticker-bg" />
								</div>
							</div>
							<div class="ticker-bg__content ticker-bg__content-mobile">
								<div class="ticker-bg__row">
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_3.svg" alt="ticker-bg" />
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_3.svg" alt="ticker-bg" />
								</div>
								<div class="ticker-bg__row">
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_3.svg" alt="ticker-bg" />
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_3.svg" alt="ticker-bg" />
								</div>
							</div>
							<div class="ticker-bg__content ticker-bg__content-mobile">
								<div class="ticker-bg__row ticker-bg__row-reverse">
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_3.svg" alt="ticker-bg" />
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_3.svg" alt="ticker-bg" />
								</div>
								<div class="ticker-bg__row ticker-bg__row-reverse">
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_3.svg" alt="ticker-bg" />
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_3.svg" alt="ticker-bg" />
								</div>
							</div>
							<div class="ticker-bg__content ticker-bg__content-mobile">
								<div class="ticker-bg__row">
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_3.svg" alt="ticker-bg" />
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_3.svg" alt="ticker-bg" />
								</div>
								<div class="ticker-bg__row">
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_3.svg" alt="ticker-bg" />
								<img class="ticker-bg__item" src="<?php bloginfo('template_url'); ?>/assets/img/ticker/back_hero_3.svg" alt="ticker-bg" />
								</div>
							</div>
						</div>
					</div>
				</div>
					`;
						document.querySelector('html').insertAdjacentHTML("beforeend", preloaderTemplate);

						const
							preloader = document.querySelector('.fls-preloader'),
							showPecentLoad = document.querySelector('.fls-preloader__counter'),
							showLineLoad = document.querySelector('.fls-preloader__line span'),
							htmlDocument = document.documentElement;

						let imagesLoadedCount = counter = progress = 0;

						htmlDocument.classList.add('loading');
						htmlDocument.classList.add('locking');

						preloaderImages.forEach(preloaderImage => {
							const imgClone = document.createElement('img');
							if (imgClone) {
								imgClone.onload = imageLoaded;
								imgClone.onerror = imageLoaded;
								preloaderImage.dataset.src ? imgClone.src = preloaderImage.dataset.src : imgClone.src = preloaderImage.src;
							}
						});

						function setValueProgress(progress) {
							if (progress % 10) {
								// showPecentLoad.style.backgroundPositionY = `${progress}%`;
								// console.log(`${progress}%`);
							}
						}
						showPecentLoad ? setValueProgress(progress) : null;

						function imageLoaded() {
							imagesLoadedCount++;
							progress = Math.round((100 / preloaderImages.length) * imagesLoadedCount);
							const intervalId = setInterval(() => {
								counter >= progress ? clearInterval(intervalId) : setValueProgress(++counter);
								counter >= 100 ? addLoadedClass() : null;
							}, 3650); //10
						}

						function addLoadedClass() {
							htmlDocument.classList.add('loaded');
							htmlDocument.classList.remove('locking');
							htmlDocument.classList.remove('loading');
							setInterval(() => {
								preloader.remove();
								preloaderContainer.remove();
							}, 50);
						}
					} else {
						preloaderContainer.remove();
					}
				}
				preloader();
			</script>
		</div>
	</div>
	<div id="popup" aria-hidden="true" class="popup">
		<div class="popup__wrapper">
			<div class="popup__content">
				<div class="popup__container">
					<button class="popup__close" data-close="popup" style="opacity: 0">
						<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="none" viewBox="0 0 40 40">
							<circle cx="20" cy="20" r="20" fill="#000" />
							<path stroke="#59FAFF" stroke-width="6" d="m27.428 27.439-15.03-15.03m15.03.152-15.03 15.03" />
						</svg>
					</button>
					<div class="product _watcher-view-popup">
					</div>
					<div class="product__info">
						<h3 class="product__info-title heading_3"></h3>

						<p class="product__info-text body_5">
						</p>

						<div class="product__info-wrap">
							<div class="product__info-price price_2">
								<span></span>
							</div>
							<div class="product__info-weight weight_2">
								<span></span>
							</div>
						</div>
						<div class="product__info-order">
							<div class="order">
								<strong></strong>
								<div class="order__wrap">
									<h3 class="order__title">Замовити</h3>
									<form class="order-form" id="popup-form">
										<div class="form__loader">
											<span class="loader"></span>
										</div>
										<div class="form__success">
											<p class="form__success-msg">
												Дякуємо! ваша заявка прийнята
											</p>
											<picture><source srcset="<?php bloginfo('template_url'); ?>/assets/img/feedback/ok_mark.webp" type="image/webp"><img class="form__success-mark" src="<?php bloginfo('template_url'); ?>/assets/img/feedback/ok_mark.png" alt="ok-mark" /></picture>
										</div>
										<div class="order-form__wrap">
											<label class="order-form__lable name-lable" for="popupUserName">
												<span class="order-form__placeholder">Ваше ім’я</span>
												<input class="order-form__input" name="yourName" type="text" aria-label="your name" id="popupUserName" />
											</label>

											<label class="order-form__lable phone-lable" for="popupUserPhone">
												<span class="order-form__placeholder">Номер телефону</span>
												<input class="order-form__input" name="yourPhone" type="text" aria-label="your phone" id="popupUserPhone" />
											</label>
										</div>
										<div class="order-form__wrap">
											<label class="order-form__lable amount-lable" for="">
												<input type="number" class="order-form__amount" name="amount" min="1" max="1000" placeholder="0" required/>
											</label>

											<button type="submit" class="btn button order-form__btn">
												<strong></strong>
												<span>Відправити</span>
												<mark><i></i></mark>
											</button>
										</div>
										<div class="popup__alert" style="margin: 0 0 10px 0;"></div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="popup__products">
					<section class="products">
						<div class="products__container">

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

						</div>
					</section>
				</div>
			</div>
		</div>
	</div>
	<?php wp_footer();?>
	<script>
		jQuery(function($){
			$('.products-show-btn').on('click', function() {
				$.ajax({
					url: "/wp-admin/admin-ajax.php",
					type: "GET",
					data: "action=get_products",
					success: function (response) {
						// console.log('AJAX response :', response);
						$('.all-assortment').html(response);
						initLoadPopup();
					}
				});
			});

			function initLoadPopup() {
				$('.assortment__item').on('click', function() {
					const postId = $(this).attr('data-poduct-id');

					$.ajax({
						url: "/wp-admin/admin-ajax.php",
						type: "POST",
						data: "action=get_post&post_id="+ postId,
						success: function (response) {
							// console.log('AJAX response : ',JSON.parse(response));
							const product = JSON.parse(response);

							$('#popup .product__info-title span').text(product[0].title);
							$('#popup .product__info-price span').text(product[0].prod_price);
							$('#popup .product__info-weight span').text(product[0].prod_weight);
							$('#popup .product__info-text').text(product[0].prod_desc);

							if(product[0].prod_template == 5) {
								let content = 
								`
								<div class="product__image-wrap assortment__image-wrap">
									<img src="${product[0].img}" class="assortment__product" width="622" height="651" alt="product img" />
									<img src="${product[0].picture_1}" class="assortment__bagels assortment__bagels_1" width="153" height="102" alt="Bagels" />
									<img src="${product[0].picture_2}" class="assortment__bagels assortment__bagels_2" width="202" height="200" alt="Bagels" />
									<img src="${product[0].picture_3}" class="assortment__bagels assortment__bagels_3" width="202" height="200" alt="Bagels" />
									<img src="${product[0].picture_4}" class="assortment__bagels assortment__bagels_4" width="153" height="102" alt="Bagels" />
									<img src="${product[0].picture_5}" class="assortment__bagels assortment__bagels_5" width="202" height="200" alt="Bagels" />
								</div>
								`;
								$('#popup .product').html(content);
								$('#popup .product').removeClass('nuts').addClass('bagels');
								
							} else {
								let content = 
								`
								<div class="product__image-wrap assortment__image-wrap">
									<img src="${product[0].img}" class="assortment__product" width="706" height="618" alt="product img" />
									<img src="${product[0].picture_1}" class="assortment__nuts assortment__nuts_1" width="167" height="131" alt="Nuts" />
									<img src="${product[0].picture_2}" class="assortment__nuts assortment__nuts_2" width="190" height="146" alt="Nuts" />
									<img src="${product[0].picture_3}" class="assortment__nuts assortment__nuts_3" width="207" height="213" alt="Nuts" />
									<img src="${product[0].picture_4}" class="assortment__nuts assortment__nuts_4" width="198" height="165" alt="Nuts" />
									
								</div>
								`;
								$('#popup .product').html(content);
								$('#popup .product').removeClass('bagels').addClass('nuts');
							}


						}
					});
				});
			}

			initLoadPopup();
		});

	</script>
</body>

</html>