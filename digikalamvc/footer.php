<style>
    footer {
        height: 300px;
        float: right;
        margin-top: 40px;
        width: 100%
    }

    .footer_top {
        background: #6D717A none repeat;
        height: 45px
    }

    .footer_bottom {
        height: 255px;
        background: #F7F8FA none repeat;
    }

    .footer .main {
        width: 1200px;
        height: 100%;
        margin: auto
    }

    .footer_top span {
        color: #FFF;
    }

    .footer_top i {
        width: 17px;
        height: 17px;
        background: url(public/images/slices.png);
        display: inline-block
    }

    .footer_top ul {
        padding: 0;
        float: left;
        height: 100%
    }

    .footer_top li {
        float: right;
        height: 100%;
        margin-left: 15px
    }

    .footer_top a {
        color: #FFF;
        line-height: 42px
    }
</style>
<footer>
    <div class="footer_top">
        <div class="main">
            <span class="yekan fontlg">7 روز هفته، 24ساعته پاسخگوی شما هستیم</span>
            <ul>
                <li>
                    <a class="yeckan">021-999999
                        <i style="background-position: -397px -420px"></i>
                    </a>
                </li>
                <li>
                    <a class="yeckan">سوالات متداول
                        <i style="background-position: -358px -420px"></i>
                    </a>
                </li>
                <li>
                    <a class="yeckan">support@clicksite.ir
                        <i style="background-position: -321px -420px"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <style>
        .footer_bottom .right {
            width: 220px;
            height: 100%;
            float: right
        }

        .footer_bottom .center {
            width: 220px;
            height: 100%;
            float: right
        }

        .footer_bottom .left {
            width: 220px;
            height: 100%;
            float: left
        }

        .footer_bottom ul li {
            font-family: yekan, serif;
            font-size: 11.3pt;
            line-height: 58px
        }

        .footer_bottom .title {
            font-size: 14pt
        }

        .footer_bottom .email input {
            width: 430px;
            height: 38px;
            border: 1px solid #CCC;
            font-family: yekan, serif
        }

        .footer_bottom .email .btn {
            background: #208DE6 no-repeat;
            display: block;
            float: left;
            height: 38px;
            margin-left: 28px;
            margin-top: 2px;
            width: 110px;
            box-shadow: 0 2px 3px rgba(0, 0, 0, .2);
            text-align: center;
            color: #FFF;
            font-family: yekan, serif;
            line-height: 32px;
            font-size: 10pt;
            border-radius: 5px
        }

        .footer .social {
            float: left;
            margin-top: 26px;
            width: 100%
        }

        .footer .social img {
            float: left;
            margin-left: 4px
        }

        .social_button {
            width: 28px;
            height: 28px;
            display: block;
            float: right;
            background: url(public/images/slices.png)
        }
    </style>
    <div class="footer_bottom">
        <div class="main">
            <div class="right">
                <ul>
                    <li>
                        <a class="title">راهنمای خرید از دیجی کالا</a>
                    </li>
                    <li>
                        <a>ثبت سفارش</a>
                    </li>
                    <li>
                        <a>رویه های ارسال سفارش</a>
                    </li>
                    <li>
                        <a>شیوه های پرداخت</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="center">
            <ul>
                <li>
                    <a class="title">راهنمای خرید مشتریان</a>
                </li>
                <li>
                    <a>ثبت سفارش</a>
                </li>
                <li>
                    <a>رویه های ارسال سفارش</a>
                </li>
                <li>
                    <a>شیوه های پرداخت</a>
                </li>
            </ul>
        </div>
        <div class="left">
            <p class="title yekan">اولین نفری که مطلع می شود، باشید!</p>
            <div class="email">
                <input type="text">
                <span class="btn">تایید ایمیل</span>
            </div>
            <div class="social">
                <a>
                    <img src="public/images/android_app_bg.png">
                </a>
                <a>
                    <img src="public/images/ios_app_bg.png">
                </a>
            </div>
            <span class="social_button" style="background-position: -577px -621px"></span>
            <span class="social_button" style="background-position: -453px -621px"></span>
            <span class="social_button" style="background-position: -577px -621px"></span>
        </div>
    </div>
</footer>
<script>
    var timer = {};
    $('.menu_top li').hover(function () {
        var tag = $(this);
        var timerAttr = tag.attr('data-time');
        clearTimeout(timer[timerAttr]);
        timer[timerAttr] = setTimeout(function () {
            $('> ul', tag).fadeIn(0);
            tag.addClass('active-menu');
            $(' > .submenu3', tag).fadeIn(0);
        }, 500);
    }, function () {
        var tag = $(this);
        var timerAttr = tag.attr('data-time');
        clearTimeout(timer[timerAttr]);
        timer[timerAttr] = setTimeout(function () {
            $('> ul', tag).fadeOut(0);
            tag.removeClass('active-menu');
            $('> .submenu3', tag).fadeOut(0);
        }, 600);
    });
</script>
</body>
</html>