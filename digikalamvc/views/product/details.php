<script src="public/public/js/jquery.elevatezoom.js"></script>
<style>
    .details {
        float: right;
        margin-top: 5px;
        width: 100%;
        background: #FFF;
        box-shadow: 0 1px 3px #EEE
    }

    .details .right {
        width: 450px;
        float: right
    }

    .details .share {
        float: right;
        width: 100%;
        padding: 20px 0
    }

    .details .share .social {
        background: url(public/images/slices.png) no-repeat scroll -213px -187px;
        width: 20px;
        height: 20px;
        display: block;
        float: left;
        margin-left: 6px
    }

    .details .share .addtofavorites {
        background: url(public/images/slices.png) no-repeat scroll -160px -187px;
        width: 20px;
        height: 20px;
        display: block;
        float: left;
        margin-left: 6px
    }

    .details .share .social {
        background: url(public/images/slices.png) no-repeat scroll -213px -187px;
        width: 20px;
        height: 20px;
        display: block;
        float: left;
        margin-left: 6px
    }

    .details .share .addtofavorites {
        background: url(public/images/slices.png) no-repeat scroll -160px -187px;
        width: 20px;
        height: 20px;
        display: block;
        float: left;
        margin-left: 6px
    }

    .details .gallery {
        float: right;
        width: 100%
    }

    .details .gallery ul {
        float: right;
        width: 100%;
        padding: 0;
        margin-top: 20px
    }

    .details .gallery ul li {
        float: right;
        width: 80px;
        height: 71px;
        border: 1px solid #EEE;
        margin-right: 6px;
        text-align: center;
        padding-top: 10px;
        border-radius: 5px
    }

    .details .gallery .se_noghteh {
        background: url(public/images/slices.png) no-repeat scroll -562px -28px;
        width: 35px;
        height: 17px;
        display: block;
        margin-top: 20px;
        margin-right: 23px
    }
</style>
<div class="details">
    <div class="right">
        <div class="share">
            <i class="social"></i>
            <i class="addtofavorites"></i>
        </div>
        <div class="gallery">
            <img class="zoomproduct" src="public/images/product5.jpg" data-zoom-image="public/images/product5.jpg">
            <script>
                $('.zoomproduct').elevateZoom({
                    'zoomWindowOffetx': -800,
                    'scrollZoom': true,
                    'easing': true,
                    'easingDuration': 5000,
                    'zoomwWindowWidth': 400,
                    'lensFadeIn': true,
                    'zoomWindowFadeIn': true,
                    'tint': true,
                    'lensShape': 'round',
                    'tintColour': 'yellow'
                })
            </script>
            <ul>
                <li>
                    <span class="se_noghteh"></span>
                </li>
                <li data-main-image="public/images/product.jpg">
                    <img src="public/images/product5_1.jpg">
                </li>
                <li data-main-image="public/images/product.jpg">
                    <img src="public/images/product5_2.jpg">
                </li>
                <li data-main-image="public/images/product.jpg">
                    <img src="public/images/product5_3.jpg">
                </li>
                <li data-main-image="public/images/product.jpg">
                    <img src="public/images/product5_4.jpg">
                </li>
            </ul>
        </div>
    </div>
    <style>
        .details .left {
            width: 700px;
            float: left;
            padding: 20px 0
        }

        .details .left .title {
            font-family: yekan, serif;
            font-size: 13pt;
            background: #EEE;
            border-radius: 4px;
            padding: 8px;
            margin-top: -10px
        }

        .gray {
            width: 55px;
            height: 9px;
            background: url(public/images/stars.png) repeat scroll 0 - 9 px;
            margin: 0 auto;
            position: relative
        }

        .red {
            width: 50%;
            height: 9px;
            background: url(public/images/stars.png) repeat;
            margin: 0 auto;
            position: absolute;
            left: 0;
            top: 0
        }

        .stars {
            float: left;
            margin-left: 12px
        }

        .rate {
            float: left;
            font-size: 9.5pt;
            font-family: yekan, serif;
        }

        .details .left .right {
            width: 415px;
            float: right
        }

        .details .left .right h4 {
            font-size: 9.8pt;
            font-family: yekan, serif;
        }

        .details .left .left {
            width: 300px;
            float: left
        }

        .details .colors {
            padding: 0;
            float: right;
            margin-bottom: 13px;
            width: 100%
        }

        .details .colors li {
            width: 46px;
            height: 28px;
            float: right;
            margin-left: 6px;
            border: 1px solid #CCC;
            background: #EEE;
            border-radius: 5px;
            font-size: 9pt;
            font-family: yekan, serif;
            padding-right: 32px;
            position: relative;
            cursor: pointer
        }

        .details .colors li .circle {
            width: 17px;
            height: 17px;
            border-radius: 50%;
            display: block;
            position: absolute;
            right: 6px;
            top: 5px
        }

        .details .colors li .rang {
            position: absolute;
            right: 36px;
            top: 3px;
            font-family: yekan, serif;
            font-size: 10pt
        }

        .details .colors li .circle.active::after {
            content: "";
            width: 10px;
            height: 10px;
            position: absolute;
            right: 4px;
            top: 4px;
            background: url(public/images/slices.png) no-repeat scroll -169px -83px;
            display: block
        }
    </style>
    <div class="left">
        <div class="title">گوشی سامسونگ مدل xyz
            <div class="stars text_center">
                <div class="star">
                    <div class="gray">
                        <div class="red"></div>
                    </div>
                </div>
                <span class="rate">
                    4 رای از 85 رای
                </span>
            </div>
        </div>
        <style>
            .select_list {
                width: 390px;
                height: 37px;
                border: 1px solid #CCC;
                background: #EEE;
                position: relative;
                text-align: center;
                border-radius: 5px 5px 5px 5px;
                cursor: pointer
            }

            .select_list::before {
                content: "";
                width: 23px;
                height: 23px;
                display: block;
                position: absolute;
                right: 3px;
                top: 9px;
                background: url(public/images/slices.png) no-repeat scroll -138px -79px;
                border-radius: 5px 5px 0 0
            }

            .select_list::after {
                content: "";
                width: 22px;
                height: 17px;
                display: block;
                position: absolute;
                left: 3px;
                top: 13px;
                background: url(public/images/slices.png) no-repeat scroll -31px -461px;
                border-radius: 0 0 5px 5px
            }

            .select_list span {
                font-size: 9.7pt;
                line-height: 36px
            }

            .select_list ul {
                padding: 0;
                box-shadow: 0 2px 2px #CACACA;
                border-radius: 5px;
                display: none;
                background: #FFF
            }

            .select_list ul:hover {
                background: #F9F9F9;
                border-radius: 5px
            }

            .select_list ul li {
                font-family: yekan, serif;
                font-size: 10pt;
                padding: 2px 5px;
                padding-right: 10px;
                padding-bottom: 10px
            }

            .select_list ul li:hover {
                background: #EEE;
                border: 1px solid #CCC;
                border-radius: 5px
            }
        </style>
        <h4>انتخاب گارانتی</h4>
        <div class="select_list">
            <span class="yekan zemanat_title">18 ماه گارانتی هما تلکام</span>
            <ul>
                <li>گارانتی شماره 1</li>
                <li>گارانتی شماره 2</li>
                <li>گارانتی شماره 3</li>
            </ul>
        </div>
        <style>
            .price {
                float: right;
                width: 100%;
                margin-top: 50px
            }

            .price .discount {
                width: 135px;
                height: 22px;
                display: block;
                float: left;
                margin-left: 60%;
                font-family: yekan, serif;
                font-size: 9pt
            }

            .discount_right {
                width: 50px;
                height: 120%;
                float: right;
                display: block;
                background: red;
                color: #FFF;
                border-radius: 0 5px 5px 0;
                text-align: center;
                line-height: 26px
            }

            .discount_left {
                width: 85px;
                height: 120%;
                float: right;
                display: block;
                background: #FF5484;
                color: #FFF;
                border-radius: 5px 0 0 5px;
                text-align: center;
                line-height: 26px
            }
        </style>
        <div class="price">
            <span class="yekan" style="font-size: 9pt">قیمت:</span>
            <span class="yekan" style="font-size: 11pt;text-decoration: line-through">100,000</span>
            <span class="yekan" style="font-size: 9pt">تومان</span>
            <span class="discount">
                        <span class="discount_right">تخفیف</span>
                        <span class="discount_left">256 هزار تومان</span>
                    </span>
        </div>
        <style>
            .price_for_you {
                float: right;
                width: 100%;
                margin-top: 30px
            }

            .compare {
                float: right;
                width: 100%;
                margin-top: 30px
            }

            .compare_btn {
                width: 155px;
                height: 40px;
                background: #CCC;
                border-radius: 4px;
                float: right;
                display: block;
                font-size: 12.4pt;
                color: #FFF;
                text-align: center;
                box-shadow: 0 2px 3px rgba(0, 0, 0, .15)
            }

            .addtocart_btn {
                width: 210px;
                height: 40px;
                background: green;
                border-radius: 4px;
                overflow: hidden;
                float: right;
                display: block;
                margin-right: 7px;
                font-size: 12.4pt;
                color: #FFF;
                text-align: center;
                box-shadow: 0 2px 3px rgba(0, 0, 0, .15)
            }

            .addtocart_btn i {
                width: 53px;
                height: 100%;
                display: block;
                float: right;
                background: #2ED017 url(public/images/slices.png) no-repeat scroll -145px -412px
            }

            .horizontal_row {
                background: #CCC;
                float: right;
                height: 1px;
                margin: 15px;
                width: 86%
            }
        </style>
        <div class="price_for_you">
            <span class="yekan" style="font-size: 12.5pt">قیمت برای شما</span>
            <span class="yekan" style="font-size: 13.5pt;color: #0F0">90,000</span>
            <span class="yekan" style="font-size: 9pt">تومان</span>
        </div>
        <div class="compare">
            <span class="yekan compare_btn">مقایسه کن</span>
            <span class="yekan addtocart_btn">
                        <i></i>
                        افزودن به سبد
                    </span>
        </div>
        <div class="left"></div>
        <div class="horizontal_row"></div>
    </div>
    <style>
        .services-feature {
            width: 695px;
            background: #FFF;
            height: 76px;
            box-shadow: 0 5px 3px rgba(0, 0, 0, .2);
            border-radius: 4px;
            margin: 7px 0;
            overflow: hidden;
            float: left
        }

        .services-feature ul {
            padding: 0;
            height: 100%;

        }

        .services-feature ul li {
            width: 140px;
            float: right;
            height: 100%
        }

        .services-feature ul li a {
            display: block;
            font-size: 10pt;
            height: 100%;
            line-height: 72px;
            padding: 0 10px
        }

        .services-feature ul li a i {
            width: 24px;
            height: 24px;
            display: inline-block;
            background: url(public/images/slices.png) no-repeat
        }
    </style>
    <div class="services-feature">
        <ul>
            <li>
                <a class="yekan">
                    <i style="background-position: -210px -473px"></i>
                    7 روز ضمانت بازگشت
                </a>
            </li>
            <li>
                <a class="yekan">
                    <i style="background-position: -263px -473px"></i>
                    پرداخت در محل
                </a>
            </li>
            <li>
                <a class="yekan">
                    <i style="background-position: -158px -473px"></i>
                    ضمانت اصل بودن کالا
                </a>
            </li>
            <li>
                <a class="yekan">
                    <i style="background-position: -320px -473px;width: 30px"></i>
                    تحویل اکسپرس
                </a>
            </li>
            <li>
                <a class="yekan">
                    <i style="background-position: -103px -473px"></i>
                    تضمین بهترین قیمت
                </a>
            </li>
        </ul>
    </div>
</div>
</div>
<script>
    $('.select_list').click(function () {
        var ul_tag = $('ul', this);
        ul_tag.slideToggle(200);
    });
    $('.select_list ul li').click(function () {
        var txt = $(this).text();
        $('.select_list .zemanat_title').text(txt);
    });
    $('.colors li').click(function () {
        $('.circle', this).addClass('active');
        $('.circle').removeClass('active');
    });
</script>
