<!DOCTYPE html>
<html lang="en">
<head>
    <base href="<?= URL ?>">
    <meta charset="UTF-8">
    <title>فروشگاه اینترنتی دیجی کالا</title>
    <script src="public/js/jquery-3.0.0.min.js"></script>
    <script src="public/js/jquery.flipTimer.js"></script>
    <link href="public/css/flipTimer.css" rel="stylesheet">
</head>
<body style="margin: 0;background: #CCC">
<style>
    @font-face {
        font-family: 'yekan';
        src: url('public/fonts/yekan.ttf') format('truetype'),
        url('public/fonts/yekan.eot?#iefix') format('embedded-opentype')
    }

    div, span, p, a, li, ul {
        text-align: right;
        direction: rtl
    }

    a {
        text-decoration: none
    }

    .yekan {
        font-family: yekan, serif
    }

    .fontsm {
        font-size: 10.3pt
    }

    .fontmd {
        font-size: 11.3pt
    }

    .fontlg {
        font-size: 12.3pt
    }

    header {
        background-color: #FFF
    }

    .header {
        width: 1200px;
        height: 100px;
        margin: 0 auto;
        padding-top: 15px
    }

    .header_right {
        width: 720px;
        float: right;
        height: 100px
    }

    .header_right_top {
        height: 40px;
    }

    .header_right_top .lock {
        width: 20px;
        height: 20px;
        background: url(public/images/lock.png);
        display: block;
        float: right
    }

    .header_right_top .login {
        float: right;
        margin-right: 10px
    }

    .header_right_top .sign_up {
        width: 20px;
        height: 20px;
        background: url(public/images/signup.png);
        display: block;
        float: right;
        margin-right: 20px
    }

    .header_right_top .register {
        float: right;
        margin-right: 10px
    }

    .header_right_bottom {
        height: 50px
    }

    .basket_top {
        width: 190px;
        height: 40px;
        float: right
    }

    .basket_top_right {
        width: 54px;
        height: 100%;
        background: #43C851 url(public/images/basket.png) no-repeat center;
        float: right
    }

    .basket_top_left {
        width: 96px;
        height: 100%;
        background: #38A844;
        float: right;
        padding: 0 20px;
        line-height: 35px
    }

    .search_top span {
        width: 42px;
        height: 36px;
        background: url(public/images/search.png) no-repeat center #CCC;
        display: block;
        position: absolute;
        left: -35px;
        top: 2px;
        border-radius: 5px 0 0 5px
    }

    .search_top input {
        width: 480px;
        height: 32px;
        margin-top: 2px;
        border: 1px solid #EEE;
        padding-right: 10px;
        color: #686664;
        border-radius: 0 5px 5px 0;
        font-family: yekan, serif
    }

    .search_top {
        width: 500px;
        height: 40px;
        float: right;
        margin-right: 20px;
        position: relative
    }

    .header_left {
        float: left
    }
</style>
<header>
    <div class="header">
        <div class="header_right">
            <div class="header_right_top">
                <span class="lock"></span>
                <a class="login fontsm" href="/login">
                    فروشگاه اینترنتی دیجی کالا، وارد شوید
                </a>
                <span class="sign_up"></span>
                <a class="register fontsm" href="/register">
                    ثبت نام کنید
                </a>
            </div>
            <div class="header_right_bottom">
                <div class="basket_top">
                    <div class="basket_top_right"></div>
                    <div class="basket_top_left">
                        <span class="yekan fontsm" style="color: #FFF">سبد خرید</span>
                        <span class="fontsm"
                              style="width:25px;height: 25px;background:#EEE;text-align: center;display: block;float: left;margin-top: 7px;border-radius: 100%;line-height: 25px">0</span>
                    </div>
                </div>
                <div class="search_top">
                    <input type="text" placeholder="محصول، دسته یا برند مورد نظر خود را سرچ کنید...">
                    <span></span>
                </div>
            </div>
        </div>
        <div class="header_left">
            <a href="index/index">
                <img src="public/images/logo.png">
            </a>
        </div>
    </div>
</header>
<style>
    nav {
        width: 100%;
        height: 40px;
        background: #F7F8FA;
        border-top: 1px solid #ECF3F3;
        box-shadow: 0 2px 3px #AAA
    }

    .menu_top {
        box-shadow: 1px 3px 4px #CCC;
        -webkit-box-shadow: 1px 3px 4px #CCC;
        -moz-box-shadow: 1px 3px 4px #CCC
    }

    ul {
        margin: 0
    }

    li {
        list-style: none
    }

    .menu_top {
        width: 1200px;
        height: 40px;
        margin: auto
    }

    .menu_top > ul {
        position: relative;
        padding: 0;
        z-index: 2;
    }

    .menu_top > ul > li {
        float: right;
        height: 40px;
        border-radius: 5px
    }

    .menu_top > ul > li a {
        padding: 0 10px;
        height: 40px;
        display: block;
        line-height: 36px;
        font-size: 11pt
    }

    .menu_top > ul > li > ul {
        position: absolute;
        right: 0;
        background-color: #FFF;
        width: 1200px;
        padding: 0;
        box-shadow: 0 2px 3px #AAA;
        display: none
    }

    .menu_top > ul > li > ul > li {
        float: right
    }

    .menu_top > ul > li > ul > li > a {
        padding: 5px 10px;
        display: block
    }

    .menu_down_icon {
        background: url(public/images/down.png) no-repeat;
        display: block;
        float: left;
        height: 4px;
        margin-right: 5px;
        margin-top: 17px;
        width: 7px
    }

    .top_menu3_col {
        width: 299px;
        height: 100%;
        float: right;
        border-left: 1px solid #EEE
    }

    .top_menu3_col_ul li {
        padding-right: 15px;
    }

    .top_menu3_col_ul li:first-child {
        padding-right: 5px;
        color: #6D95C6
    }

    .submenu3 {
        width: 1200px;
        height: 300px;
        background: #FFF;
        border-top: 1px solid #EEE;
        position: absolute;
        right: 0;
        display: none;
        z-index: 2
    }

    .active_menu {
        background: #FFF;
        box-shadow: 0 -1px 3px #EEE
    }

    .active_menu > a {

    }

    .menu_top a {
        cursor: pointer
    }
</style>
<nav>
    <div class="menu_top">
        <ul>
            <li data-time="1" class="active_menu">
                <a class="yekan">
                    کالای دیجیتال
                    <span class="menu_down_icon"></span>
                </a>
                <ul>
                    <li data-time="3">
                        <a class="yekan fontsm">
                            موبایل
                        </a>
                        <div class="submenu3">
                            <div class="top_menu3_col">
                                <ul style="padding-right: 10px" class="top_menu3_col_ul">
                                    <li class="yekan fontsm">گوشی موبایل</li>
                                    <li class="yekan fontsm">Apple</li>
                                    <li class="yekan fontsm">Samsung</li>
                                </ul>
                            </div>
                            <div class="top_menu3_col"></div>
                            <div class="top_menu3_col"></div>
                            <div class="top_menu3_col"></div>
                            <img src="public/images/mobile.png" width="379" height="335"
                                 style="position: absolute;left: 2px;bottom: 2px">
                        </div>
                    </li>
                    <li data-time="4">
                        <a class="yekan fontsm">
                            تبلت و کتابخوان
                        </a>
                        <div class="submenu3">
                            <div class="top_menu3_col">
                                <ul style="padding-right: 10px" class="top_menu3_col_ul">
                                    <li class="yekan fontsm">گوشی موبایل</li>
                                    <li class="yekan fontsm">Apple</li>
                                    <li class="yekan fontsm">Samsung</li>
                                </ul>
                            </div>
                            <div class="top_menu3_col"></div>
                            <div class="top_menu3_col"></div>
                            <div class="top_menu3_col"></div>
                            <img src="public/images/tablet-ebook-reader.png" width="379" height="335"
                                 style="position: absolute;left: 2px;bottom: 2px">
                        </div>
                    </li>
                    <li data-time="5">
                        <a class="yekan fontsm">
                            لب تاب
                        </a>
                    </li>
                </ul>
            </li>
            <li data-time="2">
                <a class="yekan">
                    لوازم خانگی
                    <span class="menu_down_icon"></span>
                </a>
                <ul>
                    <li data-time="6">
                        <a class="yekan fontsm">
                            صوتی و تصویری
                        </a>
                        <div class="submenu3">
                            <div class="top_menu3_col">
                                <ul style="padding-right: 10px" class="top_menu3_col_ul">
                                    <li class="yekan fontsm">تلویزیون</li>
                                    <li class="yekan fontsm">کوچکتر از 32 اینچ</li>
                                    <li class="yekan fontsm">بین 32 تا 42 اینچ</li>
                                </ul>
                            </div>
                            <div class="top_menu3_col"></div>
                            <div class="top_menu3_col"></div>
                            <div class="top_menu3_col"></div>
                            <img src="public/images/video-audio-entertainment.png" width="379" height="335"
                                 style="position: absolute;left: 2px;bottom: 2px">
                        </div>
                    </li>
                    <li data-time="7">
                        <a class="yekan fontsm">
                            لوازم خانگی برقی
                        </a>
                    </li>
                </ul>
            </li>
            <li data-time="3" class="active_menu">
                <a class="yekan">
                    پوشاک
                    <span class="menu_down_icon"></span>
                </a>
                <ul>
                    <li data-time="3">
                        <a class="yekan fontsm">
                            موبایل
                        </a>
                        <div class="submenu3">
                            <div class="top_menu3_col">
                                <ul style="padding-right: 10px" class="top_menu3_col_ul">
                                    <li class="yekan fontsm">گوشی موبایل</li>
                                    <li class="yekan fontsm">Apple</li>
                                    <li class="yekan fontsm">Samsung</li>
                                </ul>
                            </div>
                            <div class="top_menu3_col"></div>
                            <div class="top_menu3_col"></div>
                            <div class="top_menu3_col"></div>
                            <img src="public/images/mobile.png" width="379" height="335"
                                 style="position: absolute;left: 2px;bottom: 2px">
                        </div>
                    </li>
                    <li data-time="4">
                        <a class="yekan fontsm">
                            تبلت و کتابخوان
                        </a>
                        <div class="submenu3">
                            <div class="top_menu3_col">
                                <ul style="padding-right: 10px" class="top_menu3_col_ul">
                                    <li class="yekan fontsm">گوشی موبایل</li>
                                    <li class="yekan fontsm">Apple</li>
                                    <li class="yekan fontsm">Samsung</li>
                                </ul>
                            </div>
                            <div class="top_menu3_col"></div>
                            <div class="top_menu3_col"></div>
                            <div class="top_menu3_col"></div>
                            <img src="public/images/tablet-ebook-reader.png" width="379" height="335"
                                 style="position: absolute;left: 2px;bottom: 2px">
                        </div>
                    </li>
                    <li data-time="5">
                        <a class="yekan fontsm">
                            لب تاب
                        </a>
                    </li>
                </ul>
            </li>
            <li data-time="4" class="active_menu">
                <a class="yekan">
                    خانه و آشپزخانه
                    <span class="menu_down_icon"></span>
                </a>
                <ul>
                    <li data-time="3">
                        <a class="yekan fontsm">
                            موبایل
                        </a>
                        <div class="submenu3">
                            <div class="top_menu3_col">
                                <ul style="padding-right: 10px" class="top_menu3_col_ul">
                                    <li class="yekan fontsm">گوشی موبایل</li>
                                    <li class="yekan fontsm">Apple</li>
                                    <li class="yekan fontsm">Samsung</li>
                                </ul>
                            </div>
                            <div class="top_menu3_col"></div>
                            <div class="top_menu3_col"></div>
                            <div class="top_menu3_col"></div>
                            <img src="public/images/mobile.png" width="379" height="335"
                                 style="position: absolute;left: 2px;bottom: 2px">
                        </div>
                    </li>
                    <li data-time="4">
                        <a class="yekan fontsm">
                            تبلت و کتابخوان
                        </a>
                        <div class="submenu3">
                            <div class="top_menu3_col">
                                <ul style="padding-right: 10px" class="top_menu3_col_ul">
                                    <li class="yekan fontsm">گوشی موبایل</li>
                                    <li class="yekan fontsm">Apple</li>
                                    <li class="yekan fontsm">Samsung</li>
                                </ul>
                            </div>
                            <div class="top_menu3_col"></div>
                            <div class="top_menu3_col"></div>
                            <div class="top_menu3_col"></div>
                            <img src="public/images/tablet-ebook-reader.png" width="379" height="335"
                                 style="position: absolute;left: 2px;bottom: 2px">
                        </div>
                    </li>
                    <li data-time="5">
                        <a class="yekan fontsm">
                            لب تاب
                        </a>
                    </li>
                </ul>
            </li>
            <li data-time="5" class="active_menu">
                <a class="yekan">
                    مادر و کودک
                    <span class="menu_down_icon"></span>
                </a>
                <ul>
                    <li data-time="3">
                        <a class="yekan fontsm">
                            موبایل
                        </a>
                        <div class="submenu3">
                            <div class="top_menu3_col">
                                <ul style="padding-right: 10px" class="top_menu3_col_ul">
                                    <li class="yekan fontsm">گوشی موبایل</li>
                                    <li class="yekan fontsm">Apple</li>
                                    <li class="yekan fontsm">Samsung</li>
                                </ul>
                            </div>
                            <div class="top_menu3_col"></div>
                            <div class="top_menu3_col"></div>
                            <div class="top_menu3_col"></div>
                            <img src="public/images/mobile.png" width="379" height="335"
                                 style="position: absolute;left: 2px;bottom: 2px">
                        </div>
                    </li>
                    <li data-time="4">
                        <a class="yekan fontsm">
                            تبلت و کتابخوان
                        </a>
                        <div class="submenu3">
                            <div class="top_menu3_col">
                                <ul style="padding-right: 10px" class="top_menu3_col_ul">
                                    <li class="yekan fontsm">گوشی موبایل</li>
                                    <li class="yekan fontsm">Apple</li>
                                    <li class="yekan fontsm">Samsung</li>
                                </ul>
                            </div>
                            <div class="top_menu3_col"></div>
                            <div class="top_menu3_col"></div>
                            <div class="top_menu3_col"></div>
                            <img src="public/images/tablet-ebook-reader.png" width="379" height="335"
                                 style="position: absolute;left: 2px;bottom: 2px">
                        </div>
                    </li>
                    <li data-time="5">
                        <a class="yekan fontsm">
                            لب تاب
                        </a>
                    </li>
                </ul>
            </li>
            <li data-time="6" class="active_menu">
                <a class="yekan">
                    سوپرمارکتی
                    <span class="menu_down_icon"></span>
                </a>
                <ul>
                    <li data-time="3">
                        <a class="yekan fontsm">
                            موبایل
                        </a>
                        <div class="submenu3">
                            <div class="top_menu3_col">
                                <ul style="padding-right: 10px" class="top_menu3_col_ul">
                                    <li class="yekan fontsm">گوشی موبایل</li>
                                    <li class="yekan fontsm">Apple</li>
                                    <li class="yekan fontsm">Samsung</li>
                                </ul>
                            </div>
                            <div class="top_menu3_col"></div>
                            <div class="top_menu3_col"></div>
                            <div class="top_menu3_col"></div>
                            <img src="public/images/mobile.png" width="379" height="335"
                                 style="position: absolute;left: 2px;bottom: 2px">
                        </div>
                    </li>
                    <li data-time="4">
                        <a class="yekan fontsm">
                            تبلت و کتابخوان
                        </a>
                        <div class="submenu3">
                            <div class="top_menu3_col">
                                <ul style="padding-right: 10px" class="top_menu3_col_ul">
                                    <li class="yekan fontsm">گوشی موبایل</li>
                                    <li class="yekan fontsm">Apple</li>
                                    <li class="yekan fontsm">Samsung</li>
                                </ul>
                            </div>
                            <div class="top_menu3_col"></div>
                            <div class="top_menu3_col"></div>
                            <div class="top_menu3_col"></div>
                            <img src="public/images/tablet-ebook-reader.png" width="379" height="335"
                                 style="position: absolute;left: 2px;bottom: 2px">
                        </div>
                    </li>
                    <li data-time="5">
                        <a class="yekan fontsm">
                            لب تاب
                        </a>
                    </li>
                </ul>
            </li>
            <li data-time="7" class="active_menu">
                <a class="yekan">
                    لوازم صنعتی
                    <span class="menu_down_icon"></span>
                </a>
                <ul>
                    <li data-time="3">
                        <a class="yekan fontsm">
                            موبایل
                        </a>
                        <div class="submenu3">
                            <div class="top_menu3_col">
                                <ul style="padding-right: 10px" class="top_menu3_col_ul">
                                    <li class="yekan fontsm">گوشی موبایل</li>
                                    <li class="yekan fontsm">Apple</li>
                                    <li class="yekan fontsm">Samsung</li>
                                </ul>
                            </div>
                            <div class="top_menu3_col"></div>
                            <div class="top_menu3_col"></div>
                            <div class="top_menu3_col"></div>
                            <img src="public/images/mobile.png" width="379" height="335"
                                 style="position: absolute;left: 2px;bottom: 2px">
                        </div>
                    </li>
                    <li data-time="4">
                        <a class="yekan fontsm">
                            تبلت و کتابخوان
                        </a>
                        <div class="submenu3">
                            <div class="top_menu3_col">
                                <ul style="padding-right: 10px" class="top_menu3_col_ul">
                                    <li class="yekan fontsm">گوشی موبایل</li>
                                    <li class="yekan fontsm">Apple</li>
                                    <li class="yekan fontsm">Samsung</li>
                                </ul>
                            </div>
                            <div class="top_menu3_col"></div>
                            <div class="top_menu3_col"></div>
                            <div class="top_menu3_col"></div>
                            <img src="public/images/tablet-ebook-reader.png" width="379" height="335"
                                 style="position: absolute;left: 2px;bottom: 2px">
                        </div>
                    </li>
                    <li data-time="5">
                        <a class="yekan fontsm">
                            لب تاب
                        </a>
                    </li>
                </ul>
            </li>
            <li data-time="8" class="active_menu">
                <a class="yekan">
                    ماشین آلات
                    <span class="menu_down_icon"></span>
                </a>
                <ul>
                    <li data-time="3">
                        <a class="yekan fontsm">
                            موبایل
                        </a>
                        <div class="submenu3">
                            <div class="top_menu3_col">
                                <ul style="padding-right: 10px" class="top_menu3_col_ul">
                                    <li class="yekan fontsm">گوشی موبایل</li>
                                    <li class="yekan fontsm">Apple</li>
                                    <li class="yekan fontsm">Samsung</li>
                                </ul>
                            </div>
                            <div class="top_menu3_col"></div>
                            <div class="top_menu3_col"></div>
                            <div class="top_menu3_col"></div>
                            <img src="public/images/mobile.png" width="379" height="335"
                                 style="position: absolute;left: 2px;bottom: 2px">
                        </div>
                    </li>
                    <li data-time="4">
                        <a class="yekan fontsm">
                            تبلت و کتابخوان
                        </a>
                        <div class="submenu3">
                            <div class="top_menu3_col">
                                <ul style="padding-right: 10px" class="top_menu3_col_ul">
                                    <li class="yekan fontsm">گوشی موبایل</li>
                                    <li class="yekan fontsm">Apple</li>
                                    <li class="yekan fontsm">Samsung</li>
                                </ul>
                            </div>
                            <div class="top_menu3_col"></div>
                            <div class="top_menu3_col"></div>
                            <div class="top_menu3_col"></div>
                            <img src="public/images/tablet-ebook-reader.png" width="379" height="335"
                                 style="position: absolute;left: 2px;bottom: 2px">
                        </div>
                    </li>
                    <li data-time="5">
                        <a class="yekan fontsm">
                            لب تاب
                        </a>
                    </li>
                </ul>
            </li>
            <li data-time="9" class="active_menu">
                <a class="yekan">
                    زیبایی و سلامت
                    <span class="menu_down_icon"></span>
                </a>
                <ul>
                    <li data-time="3">
                        <a class="yekan fontsm">
                            موبایل
                        </a>
                        <div class="submenu3">
                            <div class="top_menu3_col">
                                <ul style="padding-right: 10px" class="top_menu3_col_ul">
                                    <li class="yekan fontsm">گوشی موبایل</li>
                                    <li class="yekan fontsm">Apple</li>
                                    <li class="yekan fontsm">Samsung</li>
                                </ul>
                            </div>
                            <div class="top_menu3_col"></div>
                            <div class="top_menu3_col"></div>
                            <div class="top_menu3_col"></div>
                            <img src="public/images/mobile.png" width="379" height="335"
                                 style="position: absolute;left: 2px;bottom: 2px">
                        </div>
                    </li>
                    <li data-time="4">
                        <a class="yekan fontsm">
                            تبلت و کتابخوان
                        </a>
                        <div class="submenu3">
                            <div class="top_menu3_col">
                                <ul style="padding-right: 10px" class="top_menu3_col_ul">
                                    <li class="yekan fontsm">گوشی موبایل</li>
                                    <li class="yekan fontsm">Apple</li>
                                    <li class="yekan fontsm">Samsung</li>
                                </ul>
                            </div>
                            <div class="top_menu3_col"></div>
                            <div class="top_menu3_col"></div>
                            <div class="top_menu3_col"></div>
                            <img src="public/images/tablet-ebook-reader.png" width="379" height="335"
                                 style="position: absolute;left: 2px;bottom: 2px">
                        </div>
                    </li>
                    <li data-time="5">
                        <a class="yekan fontsm">
                            لب تاب
                        </a>
                    </li>
                </ul>
            </li>
            <li data-time="10" class="active_menu">
                <a class="yekan">
                    کتاب، لوازم التحریر و هنر
                    <span class="menu_down_icon"></span>
                </a>
                <ul>
                    <li data-time="3">
                        <a class="yekan fontsm">
                            موبایل
                        </a>
                        <div class="submenu3">
                            <div class="top_menu3_col">
                                <ul style="padding-right: 10px" class="top_menu3_col_ul">
                                    <li class="yekan fontsm">گوشی موبایل</li>
                                    <li class="yekan fontsm">Apple</li>
                                    <li class="yekan fontsm">Samsung</li>
                                </ul>
                            </div>
                            <div class="top_menu3_col"></div>
                            <div class="top_menu3_col"></div>
                            <div class="top_menu3_col"></div>
                            <img src="public/images/mobile.png" width="379" height="335"
                                 style="position: absolute;left: 2px;bottom: 2px">
                        </div>
                    </li>
                    <li data-time="4">
                        <a class="yekan fontsm">
                            تبلت و کتابخوان
                        </a>
                        <div class="submenu3">
                            <div class="top_menu3_col">
                                <ul style="padding-right: 10px" class="top_menu3_col_ul">
                                    <li class="yekan fontsm">گوشی موبایل</li>
                                    <li class="yekan fontsm">Apple</li>
                                    <li class="yekan fontsm">Samsung</li>
                                </ul>
                            </div>
                            <div class="top_menu3_col"></div>
                            <div class="top_menu3_col"></div>
                            <div class="top_menu3_col"></div>
                            <img src="public/images/tablet-ebook-reader.png" width="379" height="335"
                                 style="position: absolute;left: 2px;bottom: 2px">
                        </div>
                    </li>
                    <li data-time="5">
                        <a class="yekan fontsm">
                            لب تاب
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</nav>
