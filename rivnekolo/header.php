<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <title><?php echo wp_get_document_title(); ?></title>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="format-detection" content="telephone=no">
    
	<?php wp_head(); ?>

	<link rel="shortcut icon" href="favicon.ico">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css?_v=20231213131031">
	<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js?_v=20231213131031"></script>
</head>

<body>
	<div class="wrapper">
		<button class="popup__close" data-close="popup">
			<!-- <picture><source srcset="img/close.webp" type="image/webp"><img src="img/close.png" alt="" /></picture> -->
			<!-- <svg
          xmlns="http://www.w3.org/2000/svg"
          width="40"
          height="40"
          fill="none"
          viewBox="0 0 40 40"
        >
          <circle cx="20" cy="20" r="20" fill="#000" />
          <path
            stroke="#59FAFF"
            stroke-width="6"
            d="m27.428 27.439-15.03-15.03m15.03.152-15.03 15.03"
          />
        </svg> -->
		</button>

		<header class="header">
			<div class="header__container">
				<div class="header__menu menu">
					<button type="button" class="menu__icon icon-menu"><span></span></button>

					<nav class="menu__body">
						<ul class="menu__list">
							<li class="menu__item hov-rotate_1">
								<a href="#" class="menu__link" data-goto-header data-goto=".about">про бренд</a>
							</li>
							<li class="menu__item hov-rotate_2">
								<a href="#" class="menu__link" data-goto-header data-goto=".products">асортимент</a>
							</li>
							<li class="menu__item hov-rotate_3">
								<a href="#" class="menu__link" data-goto-header data-goto=".instagram">новини</a>
							</li>
							<li class="menu__item hov-rotate_4">
								<a href="#" data-goto-header data-goto=".footer" class="menu__link">контакти</a>
							</li>
						</ul>
					</nav>

				</div>
				<div class="header__lang" id=" header__lang" data-da=".header__menu, 768, 3">
					<ul id="lang" class="lang">
						<li class="lang__menu-item">
							<button class="lang__menu-link active" href="#">UA</button>
						</li>
						<li class="lang__menu-item">
							<button class="lang__menu-link" href="#">EN</button>
						</li>
						<li class="lang__menu-item">
							<button class="lang__menu-link" href="#">PL</button>
						</li>
						<li class="lang__menu-item">
							<button class="lang__menu-link" href="#">DE</button>
						</li>
					</ul>
				</div>
			</div>
		</header>