<?php include_once('../includes/header.php'); ?>

<?php include_once('../includes/nav.php'); ?>

<?php require_once('../products/db/products.php'); ?>

<div class="page-container drawer-page-content" id="PageContainer">
    <?php if ( isset($_GET['product'])) : ?>
    <?php
        $id = (int) $_GET['product'];
        $single = json_decode(find($id), true);
        // echo $_GET['product'];
    ?>

    <main class="main-content js-focus-hidden" id="MainContent" role="main" tabindex="-1">


        <div id="shopify-section-product-template" class="shopify-section">
            <div class="product-template__container page-width" id="ProductSection-product-template"
                data-section-id="product-template" data-section-type="product" data-enable-history-state="true"
                data-ajax-enabled="true">


                <div class="grid product-single">
                    <div class="grid__item product-single__media-group medium-up--one-half"
                        data-product-single-media-group="">






                        <div id="FeaturedMedia-product-template-11448214978710-wrapper"
                            class="product-single__media-wrapper js" data-product-single-media-wrapper=""
                            data-media-id="product-template-11448214978710" tabindex="-1">


                            <style>
                            #FeaturedMedia-product-template-11448214978710 {
                                max-width: 549.0px;
                                max-height: 423px;
                            }

                            #FeaturedMedia-product-template-11448214978710-wrapper {
                                max-width: 549.0px;
                            }
                            </style>

                            <div id="ImageZoom-product-template-11448214978710"
                                style="padding-top: 77.0492%; position: relative; overflow: hidden;"
                                class="product-single__media product-single__media--has-thumbnails js-zoom-enabled"
                                data-image-zoom-wrapper="" data-zoom="<?php echo $single['featured_image'] ?>">
                                <img id="FeaturedMedia-product-template-11448214978710"
                                    class="feature-row__image product-featured-media lazyautosizes lazyloaded"
                                    data-widths="[180, 360, 540, 720, 900, 1080, 1296, 1512, 1728, 2048]"
                                    data-aspectratio="1.297872340425532" data-sizes="auto" data-image-zoom=""
                                    alt="<?php echo $single['title'] ?>"
                                    onload="window.performance.mark('debut:product:image_visible');"
                                    data-srcset="<?php echo $single['featured_image'] ?> 2048w" sizes="530px"
                                    srcset="<?php echo $single['featured_image'] ?> 2048w">
                                <img role="presentation" data-image-zoom-target="true" class="zoomImg"
                                    src="<?php echo $single['featured_image'] ?>"
                                    style="width: 549px; height: 423px; position: absolute; max-width: none; max-height: none; opacity: 1; border: none; left: -17.9066px; top: -1.80147px;">
                            </div>

                        </div>

                        <div id="FeaturedMedia-product-template-11448215011478-wrapper"
                            class="product-single__media-wrapper js hide" data-product-single-media-wrapper=""
                            data-media-id="product-template-11448215011478" tabindex="-1">


                            <style>
                            #FeaturedMedia-product-template-11448215011478 {
                                max-width: 550.0px;
                                max-height: 428px;
                            }

                            #FeaturedMedia-product-template-11448215011478-wrapper {
                                max-width: 550.0px;
                            }
                            </style>

                            <div id="ImageZoom-product-template-11448215011478"
                                style="padding-top: 77.8182%; position: relative; overflow: hidden;"
                                class="product-single__media product-single__media--has-thumbnails js-zoom-enabled"
                                data-image-zoom-wrapper="" data-zoom="<?php echo $single['featured_image'] ?>">
                                <img id="FeaturedMedia-product-template-11448215011478"
                                    class="feature-row__image product-featured-media lazypreload lazyautosizes lazyloaded"
                                    data-widths="[180, 360, 540, 720, 900, 1080, 1296, 1512, 1728, 2048]"
                                    data-aspectratio="1.2850467289719627" data-sizes="auto" data-image-zoom=""
                                    alt="<?php echo $single['title'] ?>"
                                    data-srcset="<?php echo $single['featured_image'] ?> 2048w" sizes="560px"
                                    srcset="<?php echo $single['featured_image'] ?> 2048w">
                                <img role="presentation" data-image-zoom-target="true" class="zoomImg"
                                    src="<?php echo $single['featured_image'] ?>"
                                    style="width: 550px; height: 428px; position: absolute; max-width: none; max-height: none; opacity: 0; border: none; left: 0px; top: 0px;">
                            </div>

                        </div>

                        <div id="FeaturedMedia-product-template-11448215044246-wrapper"
                            class="product-single__media-wrapper js hide" data-product-single-media-wrapper=""
                            data-media-id="product-template-11448215044246" tabindex="-1">


                            <style>
                            #FeaturedMedia-product-template-11448215044246 {
                                max-width: 549.0px;
                                max-height: 425px;
                            }

                            #FeaturedMedia-product-template-11448215044246-wrapper {
                                max-width: 549.0px;
                            }
                            </style>

                            <div id="ImageZoom-product-template-11448215044246"
                                style="padding-top: 77.4135%; position: relative; overflow: hidden;"
                                class="product-single__media product-single__media--has-thumbnails js-zoom-enabled"
                                data-image-zoom-wrapper=""
                                data-zoom="//cdn.shopify.com/s/files/1/0498/7122/4982/products/434b3605-fdff-4412-8482-21a366fa8892_2000x_c0c32338-db11-4558-beee-9e65a7afb51f_1024x1024@2x.png?v=1601418400">
                                <img id="FeaturedMedia-product-template-11448215044246"
                                    class="feature-row__image product-featured-media lazypreload lazyautosizes lazyloaded"
                                    data-widths="[180, 360, 540, 720, 900, 1080, 1296, 1512, 1728, 2048]"
                                    data-aspectratio="1.291764705882353" data-sizes="auto" data-image-zoom=""
                                    alt="<?php echo $single['title'] ?>"
                                    data-srcset="<?php echo $single['featured_image'] ?> 2048w" sizes="560px"
                                    srcset="<?php echo $single['featured_image'] ?> 2048w">
                                <img role="presentation" data-image-zoom-target="true" class="zoomImg"
                                    src="//cdn.shopify.com/s/files/1/0498/7122/4982/products/434b3605-fdff-4412-8482-21a366fa8892_2000x_c0c32338-db11-4558-beee-9e65a7afb51f_1024x1024@2x.png?v=1601418400"
                                    style="width: 549px; height: 425px; position: absolute; max-width: none; max-height: none; opacity: 0; border: none; left: 0px; top: 0px;">
                            </div>

                        </div>


                        <div id="FeaturedMedia-product-template-11448215077014-wrapper"
                            class="product-single__media-wrapper js hide" data-product-single-media-wrapper=""
                            data-media-id="product-template-11448215077014" tabindex="-1">


                            <style>
                            #FeaturedMedia-product-template-11448215077014 {
                                max-width: 706.0738255033556px;
                                max-height: 530px;
                            }

                            #FeaturedMedia-product-template-11448215077014-wrapper {
                                max-width: 706.0738255033556px;
                            }
                            </style>

                            <div id="ImageZoom-product-template-11448215077014"
                                style="padding-top: 75.063%; position: relative; overflow: hidden;"
                                class="product-single__media product-single__media--has-thumbnails js-zoom-enabled"
                                data-image-zoom-wrapper="" data-zoom="<?php echo $single['featured_image']; ?>">
                                <img id="FeaturedMedia-product-template-11448215077014"
                                    class="feature-row__image product-featured-media lazypreload lazyautosizes lazyloaded"
                                    data-widths="[180, 360, 540, 720, 900, 1080, 1296, 1512, 1728, 2048]"
                                    data-aspectratio="1.332214765100671" data-sizes="auto" data-image-zoom=""
                                    alt="<?php echo $single['title']; ?>"
                                    data-srcset="<?php echo $single['featured_image']; ?> 2048w" sizes="560px"
                                    srcset="<?php echo $single['featured_image']; ?> 2048w">
                                <img role="presentation" data-image-zoom-target="true" class="zoomImg"
                                    src="<?php echo $single['featured_image']; ?>"
                                    style="width: 794px; height: 596px; position: absolute; max-width: none; max-height: none; opacity: 0; border: none; left: 0px; top: 0px;">
                            </div>

                        </div>

                        <noscript>

                            <img src="//cdn.shopify.com/s/files/1/0498/7122/4982/products/daa4afa0-89e8-4f21-82ec-24cae6a0ef6c_2000x_6cdd0abc-bde9-469c-baed-e5ec1674852d_530x@2x.png?v=1601418400"
                                alt="<?php echo $single['title'] ?>" id="FeaturedMedia-product-template"
                                class="product-featured-media" style="max-width: 530px;">
                        </noscript>





                        <div data-thumbnail-slider="">
                            <div class="thumbnails-wrapper thumbnails-slider--active">

                                <button type="button"
                                    class="btn btn--link medium-up--hide thumbnails-slider__btn thumbnails-slider__prev thumbnails-slider__prev--product-template">
                                    <svg aria-hidden="true" focusable="false" role="presentation"
                                        class="icon icon-chevron-left" viewBox="0 0 7 11">
                                        <path
                                            d="M5.5.037a1.5 1.5 0 0 1 1.06 2.56l-2.94 2.94 2.94 2.94a1.5 1.5 0 0 1-2.12 2.12l-4-4a1.5 1.5 0 0 1 0-2.12l4-4A1.5 1.5 0 0 1 5.5.037z"
                                            fill="#fff" class="layer"></path>
                                    </svg>
                                    <span class="icon__fallback-text">Previous slide</span>
                                </button>
                                <?php if ( count($single['images']) > 0) : ?>
                                <ul
                                    class="grid grid--uniform product-single__thumbnails product-single__thumbnails-product-template">
                                    <?php foreach ($single['images'] as $image) : ?>
                                    <li class="grid__item medium-up--one-quarter product-single__thumbnails-item js">
                                        <a href="<?php echo $image ?>"
                                            class="text-link product-single__thumbnail product-single__thumbnail--product-template active-thumb"
                                            data-thumbnail-id="13905402200116"
                                            data-zoom="<?php echo $image ?>"
                                            aria-current="true">
                                            <img class="product-single__thumbnail-image"
                                                src="<?php echo $image ?>"
                                                alt="<?php echo $single['title'] ?>">
                                        </a>
                                    </li>
                                    <?php endforeach; ?>
                                </ul>
                                <?php endif; ?>

                                <button type="button"
                                    class="btn btn--link medium-up--hide thumbnails-slider__btn thumbnails-slider__next thumbnails-slider__next--product-template">
                                    <svg aria-hidden="true" focusable="false" role="presentation"
                                        class="icon icon-chevron-right" viewBox="0 0 7 11">
                                        <path
                                            d="M1.5 11A1.5 1.5 0 0 1 .44 8.44L3.38 5.5.44 2.56A1.5 1.5 0 0 1 2.56.44l4 4a1.5 1.5 0 0 1 0 2.12l-4 4A1.5 1.5 0 0 1 1.5 11z"
                                            fill="#fff"></path>
                                    </svg>
                                    <span class="icon__fallback-text">Next slide</span>
                                </button>

                            </div>
                        </div>
                    </div>

                    <div class="grid__item medium-up--one-half">
                        <div class="product-single__meta">

                            <h1 class="product-single__title"><?php echo $single['title']; ?></h1>
                            <script>
                            window.performance.mark('debut:product:title_visible');
                            </script>

                            <div class="product__price">

                                <dl class="price
        
                        price--on-sale 
                        " data-price="">


                                    <div class="price__pricing-group">
                                        <div class="price__regular">
                                            <dt>
                                                <span class="visually-hidden visually-hidden--inline">Regular
                                                    price</span>
                                            </dt>
                                            <dd>
                                                <span class="price-item price-item--regular" data-regular-price="">
                                                    <span
                                                        class="money notranslate"><?php echo $single['price']; ?></span>
                                                </span>
                                            </dd>
                                        </div>
                                        <div class="price__sale">
                                            <dt>
                                                <span class="visually-hidden visually-hidden--inline">Sale price</span>
                                            </dt>
                                            <dd>
                                                <span class="price-item price-item--sale" data-sale-price="">
                                                    <span
                                                        class="money notranslate"><?php echo $single['sale_price']; ?></span>
                                                </span>
                                            </dd>
                                            <dt>
                                                <span class="visually-hidden visually-hidden--inline">Regular
                                                    price</span>
                                            </dt>
                                            <dd>
                                                <s class="price-item price-item--regular" data-regular-price="">
                                                    <span
                                                        class="money notranslate"><?php echo $single['price']; ?></span>
                                                </s>
                                            </dd>
                                        </div>
                                        <div class="price__badges">
                                            <span class="price__badge price__badge--sale" aria-hidden="true">
                                                <span>Sale</span>
                                            </span>
                                            <span class="price__badge price__badge--sold-out">
                                                <span>Sold out</span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="price__unit">
                                        <dt>
                                            <span class="visually-hidden visually-hidden--inline">Unit price</span>
                                        </dt>
                                        <dd class="price-unit-price"><span data-unit-price=""></span><span
                                                aria-hidden="true">/</span><span
                                                class="visually-hidden">per&nbsp;</span><span
                                                data-unit-price-base-unit=""></span></dd>
                                    </div>
                                </dl>

                            </div>
                            <div class="product__policies rte" data-product-policies="">

                            </div>

                            <div id="vitals-countdown-holder" style="display: none;">
                                <span><img class="li-before" alt=""
                                        src="https://appsolve.io/asset/apps/vitals/img/countdown/timer.svg"><span
                                        id="ubundle_countdown_message">Sale ending in</span>
                                </span>
                                <div id="ubundle_discount_countdown">-1:-1:-1</div>
                            </div>
                            <form method="post" action="/cart/add" id="product_form_4438538518580"
                                accept-charset="UTF-8"
                                class="product-form product-form-product-template product-form--payment-button-no-variants"
                                enctype="multipart/form-data" novalidate="novalidate" data-product-form="">
                                <input type="hidden" name="form_type" value="product"><input type="hidden" name="utf8"
                                    value="✓">


                                <select name="id" id="ProductSelect-product-template"
                                    class="product-form__variants no-js">

                                    <option value="31581998776372" selected="selected">
                                        Default Title
                                    </option>

                                </select>



                                <div class="product-form__error-message-wrapper product-form__error-message-wrapper--hidden product-form__error-message-wrapper--has-payment-button"
                                    data-error-message-wrapper="" role="alert">
                                    <span class="visually-hidden">Error </span>
                                    <svg aria-hidden="true" focusable="false" role="presentation"
                                        class="icon icon-error" viewBox="0 0 14 14">
                                        <g fill="none" fill-rule="evenodd">
                                            <path d="M7 0a7 7 0 0 1 7 7 7 7 0 1 1-7-7z"></path>
                                            <path class="icon-error__symbol"
                                                d="M6.328 8.396l-.252-5.4h1.836l-.24 5.4H6.328zM6.04 10.16c0-.528.432-.972.96-.972s.972.444.972.972c0 .516-.444.96-.972.96a.97.97 0 0 1-.96-.96z"
                                                fill-rule="nonzero"></path>
                                        </g>
                                    </svg>
                                    <span class="product-form__error-message" data-error-message="">Quantity must be 1
                                        or more</span>
                                </div>

                                <div class="product-form__controls-group product-form__controls-group--submit">
                                    <div
                                        class="product-form__item product-form__item--submit product-form__item--payment-button product-form__item--no-variants">
                                        <button type="submit" name="add" aria-label="Add to cart"
                                            class="btn product-form__cart-submit btn--secondary-accent"
                                            data-add-to-cart="">
                                            <span data-add-to-cart-text="">

                                                Add to cart

                                            </span>
                                            <span class="hide" data-loader="">
                                                <svg aria-hidden="true" focusable="false" role="presentation"
                                                    class="icon icon-spinner" viewBox="0 0 20 20">
                                                    <path
                                                        d="M7.229 1.173a9.25 9.25 0 1 0 11.655 11.412 1.25 1.25 0 1 0-2.4-.698 6.75 6.75 0 1 1-8.506-8.329 1.25 1.25 0 1 0-.75-2.385z"
                                                        fill="#919EAB"></path>
                                                </svg>
                                            </span>
                                        </button>

                                        <div data-shopify="payment-button" class="shopify-payment-button">
                                            <div>
                                                <div>
                                                    <div>
                                                        <div class="shopify-cleanslate">
                                                            <div id="shopify-svg-symbols" class="VoW3UuJKYxZJHMpUkDNUv"
                                                                aria-hidden="true"><svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    xmlnsXlink="http://www.w3.org/1999/xlink"
                                                                    focusable="false">
                                                                    <defs>
                                                                        <symbol id="shopify-svg__warning"
                                                                            viewBox="0 0 16 14">
                                                                            <path
                                                                                d="M5.925 2.344c1.146-1.889 3.002-1.893 4.149 0l4.994 8.235c1.146 1.889.288 3.421-1.916 3.421h-10.305c-2.204 0-3.063-1.529-1.916-3.421l4.994-8.235zm1.075 1.656v5h2v-5h-2zm0 6v2h2v-2h-2z">
                                                                            </path>
                                                                        </symbol>
                                                                        <symbol id="shopify-svg__loading"
                                                                            viewBox="0 0 32 32">
                                                                            <path
                                                                                d="M32 16c0 8.837-7.163 16-16 16S0 24.837 0 16 7.163 0 16 0v2C8.268 2 2 8.268 2 16s6.268 14 14 14 14-6.268 14-14h2z">
                                                                            </path>
                                                                        </symbol>
                                                                        <symbol id="shopify-svg__error"
                                                                            viewBox="0 0 18 18">
                                                                            <path
                                                                                d="M9 18c5 0 9-4 9-9s-4-9-9-9-9 4-9 9 4 9 9 9z"
                                                                                style="fill: rgb(255, 62, 62);"></path>
                                                                            <path d="M8 4h2v6H8z"
                                                                                style="fill: rgb(255, 255, 255);">
                                                                            </path>
                                                                            <rect x="7.8" y="12" width="2.5"
                                                                                height="2.5" rx="1.3"
                                                                                style="fill: rgb(255, 255, 255);">
                                                                            </rect>
                                                                        </symbol>
                                                                        <symbol id="shopify-svg__close-circle"
                                                                            viewBox="0 0 16 16">
                                                                            <circle cx="8" cy="8" r="8"></circle>
                                                                            <path d="M10.5 5.5l-5 5M5.5 5.5l5 5"
                                                                                stroke="#FFF" stroke-width="1.5"
                                                                                stroke-linecap="square"></path>
                                                                        </symbol>
                                                                        <symbol id="shopify-svg__close"
                                                                            viewBox="0 0 20 20">
                                                                            <path
                                                                                d="M17.1 4.3l-1.4-1.4-5.7 5.7-5.7-5.7-1.4 1.4 5.7 5.7-5.7 5.7 1.4 1.4 5.7-5.7 5.7 5.7 1.4-1.4-5.7-5.7z">
                                                                            </path>
                                                                        </symbol>
                                                                        <symbol id="shopify-svg__arrow-right"
                                                                            viewBox="0 0 16 16">
                                                                            <path
                                                                                d="M16 8.1l-8.1 8.1-1.1-1.1L13 8.9H0V7.3h13L6.8 1.1 7.9 0 16 8.1z">
                                                                            </path>
                                                                        </symbol>
                                                                        <symbol
                                                                            id="shopify-svg__payments-google-pay-light"
                                                                            viewBox="0 0 41 17">
                                                                            <path
                                                                                d="M19.526 2.635v4.083h2.518c.6 0 1.096-.202 1.488-.605.403-.402.605-.882.605-1.437 0-.544-.202-1.018-.605-1.422-.392-.413-.888-.62-1.488-.62h-2.518zm0 5.52v4.736h-1.504V1.198h3.99c1.013 0 1.873.337 2.582 1.012.72.675 1.08 1.497 1.08 2.466 0 .991-.36 1.819-1.08 2.482-.697.665-1.559.996-2.583.996h-2.485v.001zM27.194 10.442c0 .392.166.718.499.98.332.26.722.391 1.168.391.633 0 1.196-.234 1.692-.701.497-.469.744-1.019.744-1.65-.469-.37-1.123-.555-1.962-.555-.61 0-1.12.148-1.528.442-.409.294-.613.657-.613 1.093m1.946-5.815c1.112 0 1.989.297 2.633.89.642.594.964 1.408.964 2.442v4.932h-1.439v-1.11h-.065c-.622.914-1.45 1.372-2.486 1.372-.882 0-1.621-.262-2.215-.784-.594-.523-.891-1.176-.891-1.96 0-.828.313-1.486.94-1.976s1.463-.735 2.51-.735c.892 0 1.629.163 2.206.49v-.344c0-.522-.207-.966-.621-1.33a2.132 2.132 0 0 0-1.455-.547c-.84 0-1.504.353-1.995 1.062l-1.324-.834c.73-1.045 1.81-1.568 3.238-1.568M40.993 4.889l-5.02 11.53H34.42l1.864-4.034-3.302-7.496h1.635l2.387 5.749h.032l2.322-5.75z"
                                                                                style="fill: rgb(255, 255, 255);">
                                                                            </path>
                                                                            <path
                                                                                d="M13.448 7.134c0-.473-.04-.93-.116-1.366H6.988v2.588h3.634a3.11 3.11 0 0 1-1.344 2.042v1.68h2.169c1.27-1.17 2.001-2.9 2.001-4.944"
                                                                                style="fill: rgb(66, 133, 244);"></path>
                                                                            <path
                                                                                d="M6.988 13.7c1.816 0 3.344-.595 4.459-1.621l-2.169-1.681c-.603.406-1.38.643-2.29.643-1.754 0-3.244-1.182-3.776-2.774H.978v1.731a6.728 6.728 0 0 0 6.01 3.703"
                                                                                style="fill: rgb(52, 168, 83);"></path>
                                                                            <path
                                                                                d="M3.212 8.267a4.034 4.034 0 0 1 0-2.572V3.964H.978A6.678 6.678 0 0 0 .261 6.98c0 1.085.26 2.11.717 3.017l2.234-1.731z"
                                                                                style="fill: rgb(251, 188, 5);"></path>
                                                                            <path
                                                                                d="M6.988 2.921c.992 0 1.88.34 2.58 1.008v.001l1.92-1.918C10.324.928 8.804.262 6.989.262a6.728 6.728 0 0 0-6.01 3.702l2.234 1.731c.532-1.592 2.022-2.774 3.776-2.774"
                                                                                style="fill: rgb(234, 67, 53);"></path>
                                                                        </symbol>
                                                                        <symbol
                                                                            id="shopify-svg__payments-google-pay-dark"
                                                                            viewBox="0 0 41 17">
                                                                            <path
                                                                                d="M19.526 2.635v4.083h2.518c.6 0 1.096-.202 1.488-.605.403-.402.605-.882.605-1.437 0-.544-.202-1.018-.605-1.422-.392-.413-.888-.62-1.488-.62h-2.518zm0 5.52v4.736h-1.504V1.198h3.99c1.013 0 1.873.337 2.582 1.012.72.675 1.08 1.497 1.08 2.466 0 .991-.36 1.819-1.08 2.482-.697.665-1.559.996-2.583.996h-2.485v.001zM27.194 10.442c0 .392.166.718.499.98.332.26.722.391 1.168.391.633 0 1.196-.234 1.692-.701.497-.469.744-1.019.744-1.65-.469-.37-1.123-.555-1.962-.555-.61 0-1.12.148-1.528.442-.409.294-.613.657-.613 1.093m1.946-5.815c1.112 0 1.989.297 2.633.89.642.594.964 1.408.964 2.442v4.932h-1.439v-1.11h-.065c-.622.914-1.45 1.372-2.486 1.372-.882 0-1.621-.262-2.215-.784-.594-.523-.891-1.176-.891-1.96 0-.828.313-1.486.94-1.976s1.463-.735 2.51-.735c.892 0 1.629.163 2.206.49v-.344c0-.522-.207-.966-.621-1.33a2.132 2.132 0 0 0-1.455-.547c-.84 0-1.504.353-1.995 1.062l-1.324-.834c.73-1.045 1.81-1.568 3.238-1.568M40.993 4.889l-5.02 11.53H34.42l1.864-4.034-3.302-7.496h1.635l2.387 5.749h.032l2.322-5.75z"
                                                                                style="fill: rgba(0, 0, 0, 0.55);">
                                                                            </path>
                                                                            <path
                                                                                d="M13.448 7.134c0-.473-.04-.93-.116-1.366H6.988v2.588h3.634a3.11 3.11 0 0 1-1.344 2.042v1.68h2.169c1.27-1.17 2.001-2.9 2.001-4.944"
                                                                                style="fill: rgb(66, 133, 244);"></path>
                                                                            <path
                                                                                d="M6.988 13.7c1.816 0 3.344-.595 4.459-1.621l-2.169-1.681c-.603.406-1.38.643-2.29.643-1.754 0-3.244-1.182-3.776-2.774H.978v1.731a6.728 6.728 0 0 0 6.01 3.703"
                                                                                style="fill: rgb(52, 168, 83);"></path>
                                                                            <path
                                                                                d="M3.212 8.267a4.034 4.034 0 0 1 0-2.572V3.964H.978A6.678 6.678 0 0 0 .261 6.98c0 1.085.26 2.11.717 3.017l2.234-1.731z"
                                                                                style="fill: rgb(251, 188, 5);"></path>
                                                                            <path
                                                                                d="M6.988 2.921c.992 0 1.88.34 2.58 1.008v.001l1.92-1.918C10.324.928 8.804.262 6.989.262a6.728 6.728 0 0 0-6.01 3.702l2.234 1.731c.532-1.592 2.022-2.774 3.776-2.774"
                                                                                style="fill: rgb(234, 67, 53);"></path>
                                                                        </symbol>
                                                                        <symbol id="shopify-svg__payments-amazon-pay"
                                                                            viewBox="0 0 102 20">
                                                                            <path
                                                                                d="M75.19 1.786c-.994 0-1.933.326-2.815.98v5.94c.896.683 1.82 1.023 2.774 1.023 1.932 0 2.899-1.32 2.899-3.96 0-2.655-.953-3.983-2.858-3.983zm-2.962-.277A5.885 5.885 0 0 1 73.93.444a4.926 4.926 0 0 1 1.85-.362c.672 0 1.282.127 1.827.383a3.763 3.763 0 0 1 1.387 1.108c.378.482.669 1.068.872 1.757.203.689.305 1.466.305 2.332 0 .88-.109 1.675-.326 2.385-.217.71-.522 1.314-.914 1.81a4.137 4.137 0 0 1-1.429 1.16 4.165 4.165 0 0 1-1.87.416c-1.26 0-2.346-.419-3.256-1.256v4.983c0 .284-.14.426-.42.426h-1.24c-.28 0-.42-.142-.42-.426V.827c0-.284.14-.426.42-.426h.925c.28 0 .441.142.483.426l.105.682zm13.194 8.37a4.21 4.21 0 0 0 1.45-.277 5.463 5.463 0 0 0 1.45-.81V6.62c-.35-.085-.719-.152-1.104-.202a8.8 8.8 0 0 0-1.124-.075c-1.583 0-2.374.617-2.374 1.853 0 .54.147.955.441 1.246.294.29.715.437 1.261.437zm-2.458-7.625l-.158.053a.561.561 0 0 1-.179.033c-.182 0-.273-.128-.273-.384V1.38c0-.199.028-.337.084-.415.056-.078.169-.153.337-.224.448-.199 1-.359 1.66-.48.657-.12 1.316-.18 1.974-.18 1.33 0 2.311.277 2.942.83.63.554.945 1.413.945 2.577v7.284c0 .284-.14.426-.42.426h-.903c-.267 0-.42-.135-.463-.405l-.105-.702a5.74 5.74 0 0 1-1.67 1.022 4.908 4.908 0 0 1-1.817.362c-1.009 0-1.807-.288-2.395-.863-.589-.575-.883-1.345-.883-2.31 0-1.037.364-1.864 1.092-2.481.73-.618 1.71-.927 2.942-.927.784 0 1.667.12 2.647.362V3.852c0-.767-.168-1.307-.504-1.619-.336-.313-.925-.469-1.764-.469-.982 0-2.01.163-3.09.49zm14.16 10.84c-.379.98-.816 1.683-1.314 2.109-.496.426-1.144.639-1.943.639-.448 0-.847-.05-1.197-.15a.606.606 0 0 1-.336-.202c-.07-.093-.105-.237-.105-.437V14.5c0-.27.105-.405.315-.405.07 0 .175.014.315.043.14.028.33.043.567.043.532 0 .946-.128 1.24-.384.294-.255.56-.724.798-1.406l.4-1.086-4.056-10.137c-.098-.241-.146-.411-.146-.511 0-.17.097-.256.294-.256h1.26c.224 0 .378.036.463.106.083.072.167.228.251.47l2.942 8.263L99.708.976c.084-.24.168-.397.252-.469.084-.07.238-.106.462-.106h1.177c.196 0 .294.086.294.256 0 .1-.05.27-.147.51l-4.622 11.927M40.15 15.47c-3.761 2.814-9.216 4.31-13.912 4.31-6.583 0-12.51-2.466-16.996-6.572-.352-.322-.038-.763.385-.513 4.84 2.855 10.825 4.574 17.006 4.574 4.17 0 8.753-.877 12.971-2.691.636-.273 1.17.425.547.891"
                                                                                style="fill: rgb(51, 62, 72);"></path>
                                                                            <path
                                                                                d="M41.717 13.657c-.482-.624-3.181-.296-4.394-.148-.368.044-.425-.281-.093-.517 2.153-1.533 5.682-1.09 6.092-.577.413.518-.108 4.104-2.127 5.816-.31.263-.605.122-.468-.225.455-1.15 1.471-3.724.99-4.349M37.429 2.06V.57A.365.365 0 0 1 37.8.193l6.59-.001c.21 0 .38.155.38.376v1.278c-.003.214-.18.494-.496.938L40.86 7.722c1.267-.03 2.607.163 3.757.818.26.148.33.367.35.582v1.59c0 .218-.237.472-.485.34-2.028-1.077-4.718-1.194-6.96.013-.23.124-.47-.126-.47-.345V9.209c0-.242.005-.656.246-1.024l3.953-5.75H37.81a.369.369 0 0 1-.38-.375M13.4 11.365h-2.005a.38.38 0 0 1-.358-.343L11.038.595a.38.38 0 0 1 .387-.375h1.866a.38.38 0 0 1 .365.35v1.36h.037C14.18.615 15.096 0 16.331 0c1.253 0 2.039.614 2.6 1.93C19.418.615 20.521 0 21.7 0c.842 0 1.758.351 2.32 1.141.635.878.505 2.15.505 3.27l-.002 6.58a.38.38 0 0 1-.387.374h-2.001a.378.378 0 0 1-.36-.374V5.463c0-.438.037-1.535-.056-1.952-.15-.703-.6-.9-1.179-.9-.486 0-.991.33-1.197.855-.206.527-.188 1.405-.188 1.997v5.527a.38.38 0 0 1-.386.375h-2.002a.379.379 0 0 1-.36-.374l-.001-5.528c0-1.163.186-2.874-1.235-2.874-1.44 0-1.384 1.668-1.384 2.874l-.001 5.527a.38.38 0 0 1-.387.375m37.059-9.236c-1.478 0-1.571 2.04-1.571 3.312 0 1.273-.02 3.993 1.552 3.993 1.554 0 1.628-2.194 1.628-3.532 0-.877-.038-1.93-.3-2.764-.224-.724-.673-1.01-1.31-1.01zM50.439 0c2.975 0 4.584 2.59 4.584 5.88 0 3.181-1.777 5.705-4.584 5.705-2.918 0-4.508-2.59-4.508-5.814C45.93 2.523 47.539 0 50.439 0zm8.441 11.365h-1.997a.379.379 0 0 1-.36-.374L56.52.561a.381.381 0 0 1 .386-.34L58.764.22c.175.009.32.13.356.291v1.595h.038C59.72.68 60.505 0 61.89 0c.898 0 1.778.329 2.339 1.229.524.834.524 2.237.524 3.247v6.561a.382.382 0 0 1-.385.328H62.36a.38.38 0 0 1-.357-.328V5.376c0-1.141.13-2.809-1.253-2.809-.487 0-.936.33-1.16.834-.281.636-.319 1.272-.319 1.975v5.614a.386.386 0 0 1-.39.375m-24.684.075a.41.41 0 0 1-.473.047c-.665-.56-.785-.82-1.149-1.354-1.1 1.136-1.879 1.477-3.304 1.477-1.687 0-3-1.055-3-3.166 0-1.65.882-2.77 2.138-3.32 1.087-.484 2.606-.572 3.769-.704v-.264c0-.484.037-1.055-.245-1.473-.243-.374-.712-.528-1.124-.528-.765 0-1.444.397-1.611 1.22-.035.183-.167.364-.348.374l-1.943-.214c-.164-.037-.346-.17-.299-.425C27.055.721 29.183 0 31.09 0c.975 0 2.25.263 3.018 1.011.975.924.881 2.155.881 3.497v3.165c0 .952.39 1.37.757 1.882.128.185.156.405-.007.54-.409.348-1.136.988-1.537 1.35l-.005-.005zm-2.02-4.953v-.44c-1.45 0-2.98.314-2.98 2.045 0 .88.45 1.473 1.218 1.473.562 0 1.069-.352 1.387-.923.394-.704.376-1.363.376-2.155zM7.926 11.44a.41.41 0 0 1-.473.047c-.667-.56-.786-.82-1.15-1.354C5.204 11.27 4.425 11.61 3 11.61c-1.688 0-3-1.055-3-3.166 0-1.65.88-2.77 2.137-3.32 1.087-.484 2.606-.572 3.768-.704v-.264c0-.484.038-1.055-.243-1.473-.244-.374-.713-.528-1.125-.528-.764 0-1.444.397-1.61 1.22-.036.183-.168.364-.35.374l-1.94-.214c-.165-.037-.347-.17-.3-.425C.783.721 2.911 0 4.818 0c.975 0 2.25.263 3.018 1.011.975.924.882 2.155.882 3.497v3.165c0 .952.39 1.37.756 1.882.128.185.157.405-.006.54a78.47 78.47 0 0 0-1.537 1.35l-.005-.005zm-2.02-4.953v-.44c-1.45 0-2.982.314-2.982 2.045 0 .88.45 1.473 1.219 1.473.562 0 1.069-.352 1.387-.923.394-.704.375-1.363.375-2.155z"
                                                                                style="fill: rgb(51, 62, 72);"></path>
                                                                        </symbol>
                                                                        <symbol
                                                                            id="shopify-svg__payments-apple-pay-dark"
                                                                            viewBox="0 0 43 19">
                                                                            <path
                                                                                d="M6.948 1.409C7.934.147 9.305.147 9.305.147s.193 1.18-.771 2.316c-1.05 1.2-2.228.993-2.228.993s-.236-.93.642-2.047zM3.82 3.663c-1.735 0-3.6 1.51-3.6 4.363 0 2.916 2.186 6.555 3.943 6.555.6 0 1.543-.6 2.485-.6.922 0 1.607.559 2.464.559 1.907 0 3.322-3.826 3.322-3.826s-2.015-.744-2.015-2.936c0-1.944 1.629-2.73 1.629-2.73s-.836-1.447-2.936-1.447c-1.22 0-2.164.661-2.656.661-.622.021-1.5-.6-2.636-.6zM19.64 1.426c2.453 0 4.188 1.788 4.188 4.396 0 2.608-1.755 4.417-4.248 4.417h-2.932v4.564h-1.974V1.426h4.966zm-2.992 7.067h2.473c1.695 0 2.693-.967 2.693-2.65 0-1.683-.978-2.671-2.693-2.671h-2.473v5.321zm7.559 3.429c0-1.767 1.296-2.777 3.65-2.945l2.572-.147v-.78c0-1.156-.738-1.787-1.994-1.787-1.037 0-1.795.568-1.955 1.43h-1.775c.06-1.788 1.656-3.092 3.79-3.092 2.333 0 3.829 1.304 3.829 3.281v6.9h-1.815v-1.684h-.04c-.519 1.094-1.715 1.788-3.012 1.788-1.934.021-3.25-1.178-3.25-2.965zm6.222-.905v-.778l-2.313.168c-1.297.084-1.975.59-1.975 1.494 0 .862.718 1.409 1.815 1.409 1.396-.021 2.473-.968 2.473-2.293zm3.969 7.383v-1.64c.14.041.438.041.598.041.897 0 1.416-.4 1.735-1.472l.14-.526L33.4 4.707h2.054l2.453 8.224h.04L40.4 4.707h1.994l-3.57 10.538c-.818 2.419-1.715 3.197-3.67 3.197-.14.02-.598-.021-.757-.042z"
                                                                                style="fill: rgb(0, 0, 0);"></path>
                                                                        </symbol>
                                                                        <symbol
                                                                            id="shopify-svg__payments-apple-pay-light"
                                                                            viewBox="0 0 43 19">
                                                                            <path
                                                                                d="M6.948 1.409C7.934.147 9.305.147 9.305.147s.193 1.18-.771 2.316c-1.05 1.2-2.228.993-2.228.993s-.236-.93.642-2.047zM3.82 3.663c-1.735 0-3.6 1.51-3.6 4.363 0 2.916 2.186 6.555 3.943 6.555.6 0 1.543-.6 2.485-.6.922 0 1.607.559 2.464.559 1.907 0 3.322-3.826 3.322-3.826s-2.015-.744-2.015-2.936c0-1.944 1.629-2.73 1.629-2.73s-.836-1.447-2.936-1.447c-1.22 0-2.164.661-2.656.661-.622.021-1.5-.6-2.636-.6zM19.64 1.426c2.453 0 4.188 1.788 4.188 4.396 0 2.608-1.755 4.417-4.248 4.417h-2.932v4.564h-1.974V1.426h4.966zm-2.992 7.067h2.473c1.695 0 2.693-.967 2.693-2.65 0-1.683-.978-2.671-2.693-2.671h-2.473v5.321zm7.559 3.429c0-1.767 1.296-2.777 3.65-2.945l2.572-.147v-.78c0-1.156-.738-1.787-1.994-1.787-1.037 0-1.795.568-1.955 1.43h-1.775c.06-1.788 1.656-3.092 3.79-3.092 2.333 0 3.829 1.304 3.829 3.281v6.9h-1.815v-1.684h-.04c-.519 1.094-1.715 1.788-3.012 1.788-1.934.021-3.25-1.178-3.25-2.965zm6.222-.905v-.778l-2.313.168c-1.297.084-1.975.59-1.975 1.494 0 .862.718 1.409 1.815 1.409 1.396-.021 2.473-.968 2.473-2.293zm3.969 7.383v-1.64c.14.041.438.041.598.041.897 0 1.416-.4 1.735-1.472l.14-.526L33.4 4.707h2.054l2.453 8.224h.04L40.4 4.707h1.994l-3.57 10.538c-.818 2.419-1.715 3.197-3.67 3.197-.14.02-.598-.021-.757-.042z"
                                                                                style="fill: rgb(255, 255, 255);">
                                                                            </path>
                                                                        </symbol>
                                                                        <symbol id="shopify-svg__payments-paypal"
                                                                            viewBox="0 0 67 19">
                                                                            <path
                                                                                d="M8.44.57H3.29a.718.718 0 0 0-.707.61L.502 14.517c-.041.263.16.5.425.5h2.458a.718.718 0 0 0 .707-.61l.561-3.597a.717.717 0 0 1 .706-.611h1.63c3.391 0 5.349-1.658 5.86-4.944.23-1.437.01-2.566-.657-3.357C11.461 1.029 10.162.57 8.44.57zm.594 4.87C8.752 7.308 7.34 7.308 5.976 7.308h-.777l.545-3.485a.43.43 0 0 1 .424-.366h.356c.93 0 1.807 0 2.26.535.27.32.353.794.25 1.45zm14.796-.06h-2.466a.43.43 0 0 0-.424.367l-.109.696-.172-.252c-.534-.783-1.724-1.044-2.912-1.044-2.725 0-5.052 2.084-5.505 5.008-.235 1.46.1 2.854.919 3.827.75.894 1.826 1.267 3.105 1.267 2.195 0 3.412-1.426 3.412-1.426l-.11.692a.432.432 0 0 0 .424.502h2.22a.718.718 0 0 0 .707-.61l1.333-8.526a.43.43 0 0 0-.423-.5zm-3.437 4.849c-.238 1.422-1.356 2.378-2.782 2.378-.716 0-1.288-.232-1.655-.672-.365-.436-.503-1.058-.387-1.75.222-1.41 1.359-2.397 2.763-2.397.7 0 1.269.235 1.644.678.375.448.524 1.073.417 1.763zM36.96 5.38h-2.478a.716.716 0 0 0-.592.318l-3.417 5.085-1.448-4.887a.719.719 0 0 0-.687-.515h-2.435a.433.433 0 0 0-.407.573l2.73 8.09-2.567 3.66a.434.434 0 0 0 .35.684h2.475a.712.712 0 0 0 .588-.31l8.24-12.016a.434.434 0 0 0-.352-.681z"
                                                                                style="fill: rgb(37, 59, 128);"></path>
                                                                            <path
                                                                                d="M45.163.57h-5.15a.717.717 0 0 0-.706.61l-2.082 13.337a.43.43 0 0 0 .423.5h2.642a.502.502 0 0 0 .494-.427l.591-3.78a.717.717 0 0 1 .706-.611h1.63c3.392 0 5.348-1.658 5.86-4.944.231-1.437.009-2.566-.657-3.357C48.183 1.029 46.886.57 45.163.57zm.593 4.87c-.28 1.867-1.692 1.867-3.057 1.867h-.777l.546-3.485a.429.429 0 0 1 .423-.366h.356c.93 0 1.807 0 2.26.535.27.32.353.794.25 1.45zm14.795-.06h-2.464a.428.428 0 0 0-.423.367l-.109.696-.173-.252c-.534-.783-1.723-1.044-2.911-1.044-2.724 0-5.05 2.084-5.504 5.008-.235 1.46.099 2.854.918 3.827.753.894 1.826 1.267 3.105 1.267 2.195 0 3.413-1.426 3.413-1.426l-.11.692a.432.432 0 0 0 .424.502h2.22a.717.717 0 0 0 .707-.61l1.333-8.526a.433.433 0 0 0-.426-.5zm-3.436 4.849c-.237 1.422-1.356 2.378-2.782 2.378-.714 0-1.288-.232-1.655-.672-.365-.436-.502-1.058-.387-1.75.223-1.41 1.359-2.397 2.763-2.397.7 0 1.269.235 1.644.678.377.448.526 1.073.417 1.763zM63.458.935l-2.113 13.582a.43.43 0 0 0 .423.5h2.124a.716.716 0 0 0 .707-.61L66.683 1.07a.432.432 0 0 0-.423-.5h-2.379c-.21 0-.39.156-.423.366z"
                                                                                style="fill: rgb(23, 155, 215);"></path>
                                                                        </symbol>
                                                                        <symbol
                                                                            id="shopify-svg__payments-shopify-pay-dark"
                                                                            viewBox="134 256 410 1">
                                                                            <path
                                                                                d="M241.22,242.74c-3.07-6.44-8.89-10.6-17.66-10.6a17.58,17.58,0,0,0-13.81,7.1l-.32.39V214.39a.55.55,0,0,0-.55-.55h-12.4a.55.55,0,0,0-.54.55v72.4a.54.54,0,0,0,.54.54h13.28a.55.55,0,0,0,.55-.54V255.92c0-6,4-10.25,10.4-10.25,7,0,8.77,5.76,8.77,11.63v29.49a.54.54,0,0,0,.54.54h13.25a.55.55,0,0,0,.55-.54V255.54c0-1.07,0-2.12-.14-3.14A27.63,27.63,0,0,0,241.22,242.74Z"
                                                                                style="fill: white;"></path>
                                                                            <path
                                                                                d="M174.91,253.47s-6.76-1.59-9.25-2.23-6.84-2-6.84-5.29,3.51-4.34,7.07-4.34,7.52.86,7.83,4.81a.57.57,0,0,0,.57.52l13.09-.05a.56.56,0,0,0,.56-.6c-.81-12.64-11.9-17.16-22.13-17.16-12.13,0-21,8-21,16.82,0,6.44,1.82,12.48,16.13,16.68,2.51.73,5.92,1.68,8.9,2.51,3.58,1,5.51,2.51,5.51,4.89,0,2.76-4,4.68-7.93,4.68-5.69,0-9.73-2.11-10.06-5.9a.57.57,0,0,0-.57-.5l-13.06.06a.57.57,0,0,0-.57.59c.6,11.93,12.12,18.36,22.86,18.36,16,0,23.23-9,23.23-17.43C189.27,265.93,188.36,256.91,174.91,253.47Z"
                                                                                style="fill: white;"></path>
                                                                            <path
                                                                                d="M343.31,232.12c-6.65,0-12.22,3.68-15.81,8.12v-7.6a.54.54,0,0,0-.53-.54H314.55a.54.54,0,0,0-.54.54v71a.54.54,0,0,0,.54.53h13.29a.53.53,0,0,0,.53-.53V280.3h.2c2.11,3.22,7.88,7.08,15.42,7.08,14.18,0,26-11.76,26-27.65C370,244.48,358.24,232.12,343.31,232.12Zm-1.23,41.73a14.09,14.09,0,1,1,13.74-14.12A13.9,13.9,0,0,1,342.08,273.85Z"
                                                                                style="fill: white;"></path>
                                                                            <path
                                                                                d="M274.68,229c-12.39,0-18.57,4.21-23.53,7.58l-.15.1a1.23,1.23,0,0,0-.37,1.63l4.9,8.44a1.24,1.24,0,0,0,.87.6,1.21,1.21,0,0,0,1-.27l.39-.32c2.55-2.14,6.64-5,16.54-5.78,5.51-.44,10.27,1,13.78,4.28,3.86,3.56,6.17,9.31,6.17,15.38,0,11.17-6.58,18.19-17.15,18.33-8.71-.05-14.56-4.59-14.56-11.3,0-3.56,1.61-5.88,4.75-8.2a1.22,1.22,0,0,0,.37-1.56l-4.4-8.32a1.29,1.29,0,0,0-.77-.62,1.24,1.24,0,0,0-1,.13c-4.94,2.93-11,8.29-10.67,18.59.4,13.11,11.3,23.12,25.47,23.53l.71,0H278c16.84-.55,29-13.05,29-30C307,245.66,295.66,229,274.68,229Z"
                                                                                style="fill: white;"></path>
                                                                            <path
                                                                                d="M342.08,245.68a14.09,14.09,0,1,0,13.74,14.05A13.84,13.84,0,0,0,342.08,245.68Z"
                                                                                style="fill: rgb(90, 49, 244);"></path>
                                                                            <rect x="383.23" y="214.02" width="141.73"
                                                                                height="90.42" rx="14.17"
                                                                                style="fill: white;"></rect>
                                                                            <path
                                                                                d="M439.07,246.62c0,9.67-6.77,16.57-16.23,16.57h-8.92a.75.75,0,0,0-.75.75v12.7a.75.75,0,0,1-.75.75h-6.28a.76.76,0,0,1-.75-.75V230.81a.75.75,0,0,1,.75-.75h16.7C432.3,230.06,439.07,237,439.07,246.62Zm-7.78,0c0-5.54-3.79-9.6-8.93-9.6h-8.44a.76.76,0,0,0-.75.75v17.71a.75.75,0,0,0,.75.74h8.44C427.5,256.22,431.29,252.17,431.29,246.62Z"
                                                                                style="fill: rgb(90, 49, 244);"></path>
                                                                            <path
                                                                                d="M440.92,268.6a8.91,8.91,0,0,1,3.72-7.64c2.44-1.83,6.22-2.78,11.83-3l5.95-.2V256c0-3.51-2.36-5-6.15-5s-6.18,1.34-6.74,3.53a.72.72,0,0,1-.72.52h-5.87a.74.74,0,0,1-.75-.85c.88-5.2,5.18-9.15,14.35-9.15,9.74,0,13.25,4.53,13.25,13.18v18.38a.75.75,0,0,1-.75.76h-5.93a.75.75,0,0,1-.75-.76v-1.37a.56.56,0,0,0-1-.39c-1.77,1.93-4.65,3.33-9.24,3.33C445.39,278.2,440.92,274.68,440.92,268.6Zm21.5-4v-1.42l-7.7.4c-4.06.21-6.43,1.9-6.43,4.74,0,2.57,2.17,4,5.95,4C459.38,272.32,462.42,269.54,462.42,264.61Z"
                                                                                style="fill: rgb(90, 49, 244);"></path>
                                                                            <path
                                                                                d="M475.75,291.27v-5.35a.76.76,0,0,1,.9-.75,14.84,14.84,0,0,0,2.75.26,7.11,7.11,0,0,0,7.17-5.07l.39-1.23a.74.74,0,0,0,0-.51l-12.34-31.7a.76.76,0,0,1,.71-1h6a.77.77,0,0,1,.71.49l8.38,22.36a.77.77,0,0,0,1.44,0l7.27-22.3a.75.75,0,0,1,.72-.52H506a.76.76,0,0,1,.71,1l-13.2,35.21c-3,8.18-8.25,10.28-14,10.28a11.17,11.17,0,0,1-3.21-.39A.77.77,0,0,1,475.75,291.27Z"
                                                                                style="fill: rgb(90, 49, 244);"></path>
                                                                        </symbol>
                                                                        <symbol
                                                                            id="shopify-svg__payments-shopify-pay-light"
                                                                            viewBox="134 256 410 1">
                                                                            <path
                                                                                d="M241.22,242.74c-3.07-6.44-8.89-10.6-17.66-10.6a17.58,17.58,0,0,0-13.81,7.1l-.32.39V214.39a.55.55,0,0,0-.55-.55h-12.4a.55.55,0,0,0-.54.55v72.4a.54.54,0,0,0,.54.54h13.28a.55.55,0,0,0,.55-.54V255.92c0-6,4-10.25,10.4-10.25,7,0,8.77,5.76,8.77,11.63v29.49a.54.54,0,0,0,.54.54h13.25a.55.55,0,0,0,.55-.54V255.54c0-1.07,0-2.12-.14-3.14A27.63,27.63,0,0,0,241.22,242.74Z"
                                                                                style="fill: white;"></path>
                                                                            <path
                                                                                d="M174.91,253.47s-6.76-1.59-9.25-2.23-6.84-2-6.84-5.29,3.51-4.34,7.07-4.34,7.52.86,7.83,4.81a.57.57,0,0,0,.57.52l13.09-.05a.56.56,0,0,0,.56-.6c-.81-12.64-11.9-17.16-22.13-17.16-12.13,0-21,8-21,16.82,0,6.44,1.82,12.48,16.13,16.68,2.51.73,5.92,1.68,8.9,2.51,3.58,1,5.51,2.51,5.51,4.89,0,2.76-4,4.68-7.93,4.68-5.69,0-9.73-2.11-10.06-5.9a.57.57,0,0,0-.57-.5l-13.06.06a.57.57,0,0,0-.57.59c.6,11.93,12.12,18.36,22.86,18.36,16,0,23.23-9,23.23-17.43C189.27,265.93,188.36,256.91,174.91,253.47Z"
                                                                                style="fill: white;"></path>
                                                                            <path
                                                                                d="M343.31,232.12c-6.65,0-12.22,3.68-15.81,8.12v-7.6a.54.54,0,0,0-.53-.54H314.55a.54.54,0,0,0-.54.54v71a.54.54,0,0,0,.54.53h13.29a.53.53,0,0,0,.53-.53V280.3h.2c2.11,3.22,7.88,7.08,15.42,7.08,14.18,0,26-11.76,26-27.65C370,244.48,358.24,232.12,343.31,232.12Zm-1.23,41.73a14.09,14.09,0,1,1,13.74-14.12A13.9,13.9,0,0,1,342.08,273.85Z"
                                                                                style="fill: white;"></path>
                                                                            <path
                                                                                d="M274.68,229c-12.39,0-18.57,4.21-23.53,7.58l-.15.1a1.23,1.23,0,0,0-.37,1.63l4.9,8.44a1.24,1.24,0,0,0,.87.6,1.21,1.21,0,0,0,1-.27l.39-.32c2.55-2.14,6.64-5,16.54-5.78,5.51-.44,10.27,1,13.78,4.28,3.86,3.56,6.17,9.31,6.17,15.38,0,11.17-6.58,18.19-17.15,18.33-8.71-.05-14.56-4.59-14.56-11.3,0-3.56,1.61-5.88,4.75-8.2a1.22,1.22,0,0,0,.37-1.56l-4.4-8.32a1.29,1.29,0,0,0-.77-.62,1.24,1.24,0,0,0-1,.13c-4.94,2.93-11,8.29-10.67,18.59.4,13.11,11.3,23.12,25.47,23.53l.71,0H278c16.84-.55,29-13.05,29-30C307,245.66,295.66,229,274.68,229Z"
                                                                                style="fill: white;"></path>
                                                                            <path
                                                                                d="M342.08,245.68a14.09,14.09,0,1,0,13.74,14.05A13.84,13.84,0,0,0,342.08,245.68Z"
                                                                                style="fill: rgb(90, 49, 244);"></path>
                                                                            <rect x="383.23" y="214.02" width="141.73"
                                                                                height="90.42" rx="14.17"
                                                                                style="fill: white;"></rect>
                                                                            <path
                                                                                d="M439.07,246.62c0,9.67-6.77,16.57-16.23,16.57h-8.92a.75.75,0,0,0-.75.75v12.7a.75.75,0,0,1-.75.75h-6.28a.76.76,0,0,1-.75-.75V230.81a.75.75,0,0,1,.75-.75h16.7C432.3,230.06,439.07,237,439.07,246.62Zm-7.78,0c0-5.54-3.79-9.6-8.93-9.6h-8.44a.76.76,0,0,0-.75.75v17.71a.75.75,0,0,0,.75.74h8.44C427.5,256.22,431.29,252.17,431.29,246.62Z"
                                                                                style="fill: rgb(90, 49, 244);"></path>
                                                                            <path
                                                                                d="M440.92,268.6a8.91,8.91,0,0,1,3.72-7.64c2.44-1.83,6.22-2.78,11.83-3l5.95-.2V256c0-3.51-2.36-5-6.15-5s-6.18,1.34-6.74,3.53a.72.72,0,0,1-.72.52h-5.87a.74.74,0,0,1-.75-.85c.88-5.2,5.18-9.15,14.35-9.15,9.74,0,13.25,4.53,13.25,13.18v18.38a.75.75,0,0,1-.75.76h-5.93a.75.75,0,0,1-.75-.76v-1.37a.56.56,0,0,0-1-.39c-1.77,1.93-4.65,3.33-9.24,3.33C445.39,278.2,440.92,274.68,440.92,268.6Zm21.5-4v-1.42l-7.7.4c-4.06.21-6.43,1.9-6.43,4.74,0,2.57,2.17,4,5.95,4C459.38,272.32,462.42,269.54,462.42,264.61Z"
                                                                                style="fill: rgb(90, 49, 244);"></path>
                                                                            <path
                                                                                d="M475.75,291.27v-5.35a.76.76,0,0,1,.9-.75,14.84,14.84,0,0,0,2.75.26,7.11,7.11,0,0,0,7.17-5.07l.39-1.23a.74.74,0,0,0,0-.51l-12.34-31.7a.76.76,0,0,1,.71-1h6a.77.77,0,0,1,.71.49l8.38,22.36a.77.77,0,0,0,1.44,0l7.27-22.3a.75.75,0,0,1,.72-.52H506a.76.76,0,0,1,.71,1l-13.2,35.21c-3,8.18-8.25,10.28-14,10.28a11.17,11.17,0,0,1-3.21-.39A.77.77,0,0,1,475.75,291.27Z"
                                                                                style="fill: rgb(90, 49, 244);"></path>
                                                                        </symbol>
                                                                    </defs>
                                                                </svg></div>
                                                        </div>
                                                        <div data-testid="upstream-button"
                                                            class="shopify-payment-button__button shopify-payment-button__button--branded _2ogcW-Q9I-rgsSkNbRiJzA">
                                                            <div class="shopify-cleanslate">
                                                                <div role="button" tabindex="0"
                                                                    class="_1LP9NPTft85QosIXd3_zOV _3G6VJhJYno-AX3-X38f1TA _2EiMjnumZ6FVtlC7RViKtj _3DL4HVlgeOhG7Paj6K8DqS"
                                                                    data-testid="PayPalInContext-button"><span
                                                                        class="_11GJAaBiShTVGYuXppoYvE">Buy now with
                                                                        PayPal</span><span aria-hidden="true">Buy with
                                                                    </span><span class="bp01pMHFBVS3SyhYtJKk"><svg
                                                                            preserveAspectRatio="xMidYMid"
                                                                            class="h7yAG5cgdBp_GhZjXmVIA"
                                                                            style="height: 18px; width: 63.4737px;">
                                                                            <use
                                                                                xlink:href="#shopify-svg__payments-paypal">
                                                                            </use>
                                                                        </svg></span><span aria-hidden="true"></span>
                                                                </div>
                                                            </div>
                                                        </div><button
                                                            class="shopify-payment-button__more-options _2ogcW-Q9I-rgsSkNbRiJzA"
                                                            type="button" data-testid="sheet-open-button">More payment
                                                            options</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </form>
                        </div>
                        <p class="visually-hidden" data-product-status="" aria-live="polite" role="status"></p>
                        <p class="visually-hidden" data-loader-status="" aria-live="assertive" role="alert"
                            aria-hidden="true">Adding product to your cart</p>

                        <?php echo $single['description']; ?>
                    </div>
                </div>
            </div>

        </div>
    </main>

    <?php endif; ?>

    <?php include_once('../includes/footer.php'); ?>
</div>

<?php include_once('../includes/modals.php'); ?>