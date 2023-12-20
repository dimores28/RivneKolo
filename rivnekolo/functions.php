<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

add_action( 'wp_enqueue_scripts', function() {
		wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.min.css');

		// отменяем зарегистрированный jQuery
		wp_deregister_script('jquery-core');
		wp_deregister_script('jquery');

		// регистрируем
		wp_register_script( 'jquery-core', 'https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js?_v=20230612142449', false, null, true );
		wp_register_script( 'jquery', false, array('jquery-core'), null, true );

		// подключаем
		wp_enqueue_script( 'jquery' );

		wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/js/app.min.js', array('jquery'), 'null', true );
});

add_theme_support('post-thumbnails');
add_theme_support( 'title-tag' );
add_theme_support('custom-logo');

/**
 * Настройка SMTP
 *
 * @param PHPMailer $phpmailer объект мэилера
 */

 function mihdan_send_smtp_email( PHPMailer $phpmailer ) {
	$phpmailer->isSMTP();
	$phpmailer->Host       = 'mail.adm.tools';
	$phpmailer->SMTPAuth   = true;
	$phpmailer->Port       = 465;
	$phpmailer->Username   = 'kolobokrivne@rivnekolo.com';
	$phpmailer->Password   = 'Hy58vXP2e8';
	$phpmailer->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
	$phpmailer->From       = 'info@tivacleaners.com';
	$phpmailer->FromName   = 'Tivacleaners site';

}

// add_action( 'phpmailer_init', 'mihdan_send_smtp_email' );

add_filter( 'wp_mail_content_type', 'true_content_type' );

function true_content_type( $content_type ) {
    return 'text/html';
}


add_action('init', function() {

    register_post_type( 'Contacts', [
        'label'  => 'Contacts',
        'labels' => [
            'name'               => 'Контакти', // основное название для типа записи
            'singular_name'      => 'Контакт', // название для одной записи этого типа
            'add_new'            => 'Додати контакти', // для добавления новой записи
            'add_new_item'       => 'Adding Contact', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Редагувати контакт', // для редактирования типа записи
            'new_item'           => 'Новий контакт', // текст новой записи
            'view_item'          => 'Watch the Contact', // для просмотра записи этого типа.
            'search_items'       => 'Search for a Contact', // для поиска по этим типам записи
            'not_found'          => 'Contact not found', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Not found in cart', // если не было найдено в корзине
            'menu_name'          => 'Контакти', // название меню
        ],
        'public'              => false,
        'show_ui'             => true, // зависит от public
        'menu_icon'           => 'dashicons-groups',
        'supports'            => [ 'title'],  

    ] );

    register_post_type( 'Instagram', [
        'label'  => 'Instagram',
        'labels' => [
            'name'               => 'Instagram', // основное название для типа записи
            'singular_name'      => 'Інстаграм пост', // название для одной записи этого типа
            'add_new'            => 'Додати пост', // для добавления новой записи
            'add_new_item'       => 'Додавання посту', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Додати один пост', // для редактирования типа записи
            'new_item'           => 'New addition', // текст новой записи
            'view_item'          => 'Watch add-on', // для просмотра записи этого типа.
            'search_items'       => 'Found Review', // для поиска по этим типам записи
            'not_found'          => 'Not found', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Not found in cart', // если не было найдено в корзине
            'menu_name'          => 'Інстаграм', // название меню
        ],
        'public'              => false,
        'show_ui'             => true, // зависит от public
        'menu_icon'           => 'dashicons-instagram',
        'supports'            => [ 'title'],  // 'title','editor','author','thumbnail','excerpt','trackbacks',
    ] );

    register_post_type( 'Products', [
        'label'  => 'Products',
        'labels' => [
            'name'               => 'Продукти', // основное название для типа записи
            'singular_name'      => 'Продукт', // название для одной записи этого типа
            'add_new'            => 'Додати продукт', // для добавления новой записи
            'add_new_item'       => 'Додавання продукту', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Add-on Editing', // для редактирования типа записи
            'new_item'           => 'New addition', // текст новой записи
            'view_item'          => 'Watch add-on', // для просмотра записи этого типа.
            'search_items'       => 'Пошук продукту', // для поиска по этим типам записи
            'not_found'          => 'Not found', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Not found in cart', // если не было найдено в корзине
            'menu_name'          => 'Продукти', // название меню
        ],
        'public'              => false,
        'show_ui'             => true, // зависит от public
        'menu_icon'           => 'dashicons-products',
        'supports'            => [ 'title', 'thumbnail'],
    ] );

});

function getContacts() {
    $args = array(
        'post_type' => 'Contacts',
        'orderby'   => 'date',
        'order'     => 'ASC',
        'numberposts' => 1,
    );

    $contacts = [];

    foreach(get_posts($args) as $post) {
        $con = get_fields($post->ID);

        $contacts[] = $con;
    }

    return $contacts[0];
}

function getInstagram() {
    $args = array(
        'post_type' => 'Instagram',
        'orderby'   => 'date',
        'order'     => 'ASC',
        'numberposts' => -1,
    );

    $reviews = [];

    foreach(get_posts($args) as $post) {
        $review = get_fields($post->ID);
        $review['title'] = $post->post_title;
        $review['img'] = get_the_post_thumbnail_url($post->ID, 'thumbnail');

        $reviews[] = $review;
    }

    return $reviews;
}

function getProducts() {
    $args = array(
        'post_type' => 'Products',
        'orderby'   => 'date',
        'order'     => 'ASC',
        'numberposts' => 4,
    );

    $products = [];

    foreach(get_posts($args) as $post) {
        $prod = get_fields($post->ID);
        $prod['ID'] = $post->ID;
        $prod['title'] = $post->post_title;
        $prod['img'] = get_the_post_thumbnail_url($post->ID, 'thumbnail');

        $products[] = $prod;
    }

    return $products;
}

function getProductsAll() {
    $args = array(
        'post_type' => 'Products',
        'orderby'   => 'date',
        'order'     => 'ASC',
        'numberposts' => -1,
    );

    $products = [];

    foreach(get_posts($args) as $post) {
        $prod = get_fields($post->ID);
        $prod['ID'] = $post->ID;
        $prod['title'] = $post->post_title;
        $prod['img'] = get_the_post_thumbnail_url($post->ID, 'thumbnail');

        $products[] = $prod;
    }

    return $products;
}

function getProductsById($id) {
    $postId = [];
	$postId[0] = $id;

    $args = array(
        'post_type' => 'Products',
        'include'     => $postId,
    );

    $products = [];

    foreach(get_posts($args) as $post) {
        $prod = get_fields($post->ID);
        $prod['ID'] = $post->ID;
        $prod['title'] = $post->post_title;
        $prod['img'] = get_the_post_thumbnail_url($post->ID, 'thumbnail');

        $products[] = $prod;
    }

    return $products;
}

add_action('wp_ajax_get_post'       , 'get_post_callback');
add_action('wp_ajax_nopriv_get_post', 'get_post_callback');

function get_post_callback() {
    $id_p = $_POST['post_id'];

    echo json_encode(getProductsById($id_p));
    wp_die();
}

add_action('wp_ajax_get_products'       , 'get_products_callback');
add_action('wp_ajax_nopriv_get_products', 'get_products_callback');

function get_products_callback() {
    $content = '';
    $count = 1;
    $url = get_template_directory_uri();

    foreach(getProductsAll() as $prod) {
        if($count > 4) {
            if($prod["prod_template"] == 5){
                $spot = ($count %2 != 0) ? 1 : 3;
                $content.= 
                '
                <div class="assortment__item bagels" data-watch-threshold="1" data-watch  data-popup="#popup" data-poduct-id="'.$prod["ID"].'">
                    <div class="assortment__image-wrap">
                    <img src="'.$prod["img"].'" class="assortment__product" width="622" height="651" alt="product img" />
                    <img src="'.$prod["picture_1"].'" class="assortment__bagels assortment__bagels_1" width="153" height="102" alt="Bagels" />
                    <img src="'.$prod["picture_2"].'" class="assortment__bagels assortment__bagels_2" width="202" height="200" alt="Bagels" />
                    <img src="'.$prod["picture_3"].'" class="assortment__bagels assortment__bagels_3" width="202" height="200" alt="Bagels" />
                    <img src="'.$prod["picture_4"].'" class="assortment__bagels assortment__bagels_4" width="153" height="102" alt="Bagels" />
                    <img src="'.$prod["picture_5"].'" class="assortment__bagels assortment__bagels_5" width="202" height="200" alt="Bagels" />
                    </div>
                    <div class="assortment__info assortment__info_'.$spot.'">
                    <img src="'.$url.'/assets/img/products/spot1.svg" class="assortment__info-bg" width="381" height="378"
                        alt="background img" />
                    <h3 class="assortment__info-title">'.$prod["title"].'</h3>
                    <div class="assortment__info-weight">
                        <span>'.$prod["prod_weight"].'</span>
                    </div>
                    <div class="assortment__info-price">'.$prod["prod_price"].'</div>
                    </div>
                </div>
                ';      

            }
            else {
                $content.= 
                '
                <div class="assortment__item nuts" data-watch-threshold="1" data-watch  data-popup="#popup" data-poduct-id="'.$prod["ID"].'">
                    <div class="assortment__image-wrap">
                    <img src="'.$prod["img"].'" class="assortment__product" width="706" height="618" alt="product img" />
                    <img src="'.$prod["picture_1"].'" class="assortment__nuts assortment__nuts_1" width="167" height="131" alt="Nuts" />
                    <img src="'.$prod["picture_2"].'" class="assortment__nuts assortment__nuts_2" width="190" height="146" alt="Nuts" />
                    <img src="'.$prod["picture_3"].'" class="assortment__nuts assortment__nuts_3" width="207" height="213" alt="Nuts" />
                    <img src="'.$prod["picture_4"].'" class="assortment__nuts assortment__nuts_4" width="198" height="165" alt="Nuts" />
                    </div>
                    <div class="assortment__info assortment__info_4">
                    <img src="'.$url.'/assets/img/products/spot4.svg" class="assortment__info-bg" width="456" height="403" alt="background img" />
                    <p class="assortment__info-desc">'.$prod["product_subtitle"].'</p>
                    <h3 class="assortment__info-title">'.$prod["title"].'</h3>
                    <div class="assortment__info-weight">
                        <span>'.$prod["prod_weight"].'</span>
                    </div>
                    <div class="assortment__info-price">'.$prod["prod_price"].'</div>
                    </div>
                </div>
                ';
            }
        }

        $count++;
    }

    echo $content;
    wp_die();
}


//======================SVG===========================================//
add_filter( 'upload_mimes', 'svg_upload_allow' );

# Добавляет SVG в список разрешенных для загрузки файлов.
function svg_upload_allow( $mimes ) {
	$mimes['svg']  = 'image/svg+xml';

	return $mimes;
}

add_filter( 'wp_check_filetype_and_ext', 'fix_svg_mime_type', 10, 5 );

# Исправление MIME типа для SVG файлов.
function fix_svg_mime_type( $data, $file, $filename, $mimes, $real_mime = '' ){

	// WP 5.1 +
	if( version_compare( $GLOBALS['wp_version'], '5.1.0', '>=' ) ){
		$dosvg = in_array( $real_mime, [ 'image/svg', 'image/svg+xml' ] );
	}
	else {
		$dosvg = ( '.svg' === strtolower( substr( $filename, -4 ) ) );
	}

	// mime тип был обнулен, поправим его
	// а также проверим право пользователя
	if( $dosvg ){

		// разрешим
		if( current_user_can('manage_options') ){

			$data['ext']  = 'svg';
			$data['type'] = 'image/svg+xml';
		}
		// запретим
		else {
			$data['ext']  = false;
			$data['type'] = false;
		}

	}

	return $data;
}

add_filter( "jpeg_quality", function( $quality ){
	return 100;
} );

add_filter( 'big_image_size_threshold', '__return_false' );