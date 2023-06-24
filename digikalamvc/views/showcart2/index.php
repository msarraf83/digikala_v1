<link href="public/js/bootstrap.css" rel="stylesheet">
<link href="public/js/bootstrap-select.css" rel="stylesheet">
<script src="public/js/bootstrap.min.js"></script>
<script src="public/js/bootstrap-select.js"></script>
<script src="public/js/city.js"></script>
<script src="public/js/mahale.js"></script>
<style>
    .main {
        width: 1200px;
        margin: 10px auto;
        border-radius: 5px;
        overflow: hidden;
        background: #FFF;
        padding: 6px;
        font-family: yekan, serif
    }

    .main::after {
        content: "";
        clear: both;
        display: block
    }
</style>
<div class="main">
    <style>
        .order_steps {
            padding-left: 10px;
            padding-right: 200px;
            padding-top: 53px;
            height: 100px
        }

        .order_steps .dashed {
            float: right;
            margin-top: 0;
            margin-left: -23px
        }

        .order_steps .dashed span {
            width: 11px;
            height: 2px;
            background: #00BFD6;
            display: block;
            float: right;
            margin-left: 3px;
        }

        .order_steps ul {

        }

        .order_steps ul li {
            position: relative;
            width: 180px;
            display: block;
            float: right;
            height: 1px
        }

        .order_steps ul li .circle {
            width: 20px;
            height: 20px;
            display: block;
            border: 2px solid #CCC;
            border-radius: 100%;
            position: absolute;
            top: -11px;
            right: 33px
        }

        .order_steps ul li.active .circle {

            border: 2px solid #FFF04D;
            border-radius: 100%;
            position: absolute;
            background: #00BFD6 url(public/images/slices.png) no-repeat -809px -474px
        }

        .order_steps ul li .line {
            width: 128px;
            height: 2px;
            display: block;
            background: #CCC no-repeat 0 0;
            position: absolute;
            right: 71px;
            top: 0
        }

        .order_steps ul li.active .line {
            background: #00BFD6
        }

        .order_steps ul li .title {
            font-size: 11.7pt;
            color: #AAA;
            position: absolute;
            top: 26px;
            right: -3px;
            width: 146px
        }

        .order_steps ul li.active .title {
            color: #00bfd6
        }
    </style>
    <div class="order_steps">
        <div class="dashed">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
        <ul>
            <li class="active">
                <span class="circle"></span>
                <span class="line"></span>
                <span class="title">ورود به کلیک سایت</span>
            </li>
            <li>
                <span class="circle"></span>
                <span class="line"></span>
                <span class="title">اطلاعات ارسال سفارش</span>
            </li>
            <li>
                <span class="circle"></span>
                <span class="line"></span>
                <span class="title">بازبینی سفارش</span>
            </li>
            <li>
                <span class="circle"></span>
                <span class="line"></span>
                <span class="title">اطلاعات پرداخت</span>
            </li>
        </ul>
        <div class="dashed">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <style>
        .btn_gray {
            width: 170px;
            height: 37px;
            display: block;
            background: #939697;
            border-radius: 5px;
            box-shadow: 1px 1px 3px #CCC;
            text-align: center;
            color: #FFF;
            font-family: yekan, serif;
            font-size: 11pt;
            line-height: 34px;
            margin-top: -51.5px;
            margin-right: 856px;
            position: absolute;
            top: 332.5px;
            left: 143px;
            cursor: pointer
        }

        .head {
            float: right;
            margin-top: 10px
        }

        .head h4 {
            float: right;
            padding-right: 20px;
            width: 100%;
            font-size: 12.4pt;
            font-weight: normal
        }

        .head .btn_gray {
            float: left;
            margin-top: 20px;
            margin-left: 39px
        }

        .content {
            float: right;
            margin-top: 20px;
            width: 100%
        }

        .content table {
            margin-top: 10px;
            width: 100%
        }

        table tr:first-child td {
            border-top: 1px solid #EEE
        }

        table tr:first-child td:first-child {
            border-right: 1px solid #EEE
        }

        table td {
            border-left: 1px solid #EEE;
            border-bottom: 1px solid #EEE;
            padding: 5px
        }

        table .circle {
            width: 15px;
            height: 15px;
            border: 1px solid #CCC;
            border-radius: 100%;
            position: relative;
            display: block;
            margin: auto
        }

        .girandeh {
            font-size: 11pt
        }

        .edit {
            background: #A9B1E8 !important
        }

        .edit i {
            background: url(public/images/slices.png) no-repeat -812px -446px;
            width: 19px;
            height: 19px;
            display: block;
            margin: auto
        }

        .remove {
            background: #F89D9F !important
        }

        .remove i {
            background: url(public/images/slices.png) no-repeat -813px -510px;
            width: 19px;
            height: 19px;
            display: block;
            margin: auto

        }

        .content table {
            border-radius: 5px;
            overflow: hidden
        }

        .content table table {
            width: 100%;
            height: 140px
        }

        table.active .circle {
            background: #515FF8 no-repeat 0 0;
            border: none;
            position: relative
        }

        table.active tr:first-child td:first-child {
            background: #EDFDED no-repeat 0 0
        }

        table.active .circle::after {
            content: "";
            display: block;
            width: 5px;
            height: 5px;
            border-radius: 100%;
            background: #FFF no-repeat 0 0;
            position: absolute;
            top: 5px;
            right: 5px
        }

        .content table.active .triangle {
            width: 0;
            height: 0;
            border-style: solid;
            border-width: 0 42px 42px 0;
            border-color: transparent #35BF07 transparent transparent;
            position: absolute;
            top: 0;
            right: 0
        }
    </style>
    <div class="head">
        <h4>انتخاب آدرس</h4>
        <span class="btn_gray">افزودن آدرس جدید</span>
    </div>
    <div class="content">
        <table cellspacing="0" class="active">
            <tr>
                <td style="width: 60px;position: relative" rowspan="3">
                    <span class="triangle"></span>
                    <span class="circle"></span>
                </td>
                <td class="girandeh" colspan="3">کلیک سایت</td>
                <td style="width: 60px;padding: 0" rowspan="3">
                    <table cellspacing="0" style="width: 100%;height: 140px">
                        <tr>
                            <td class="edit" style="border: 0">
                                <i></i>
                            </td>
                        </tr>
                        <tr>
                            <td class="remove" style="border: 0">
                                <i></i>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr>
                <td style="width: 200px;font-size: 10pt">استان: تهران</td>
                <td rowspan="2" style="font-size: 10.5pt;color:#858889">خیابان قزوین، دوراهی قپان، جنب پمپ بنزین، کوچه
                    شهید
                    بهمن نوروزی، بن بست قدمی، پلاک 7،
                    طبقه 2
                    <br/>
                    کد پستی: 1234567890
                </td>
                <td style="width: 200px;font-size: 10.5pt">شماره تماس اضطراری: 1234567890</td>
            </tr>
            <tr>
                <td style="width: 200px;font-size: 10pt">شهر: تهران</td>
                <td style="width: 200px;font-size: 10.5pt">شماره تماس ثابت: 1234567890</td>
            </tr>
        </table>
    </div>
    <div class="head" style="margin-top: 30px">
        <h4>انتخاب شیوه ارسال</h4>
    </div>
    <div class="send_types">
        <style>
            .send_types {
                margin-top: 30px;
                float: right;
                width: 100%
            }

            .send_types table {
                width: 100%;
                margin-top: 10px
            }
        </style>
        <table cellspacing="0" class="active" style="border-radius: 5px;overflow: hidden">
            <tr>
                <td style="width: 60px;position: relative">
                    <span class="circle"></span>
                </td>
                <td style="width: 980px">
                    <img style="float: right;margin-top: 8px" src="public/images/post_48_icon.png">
                    <div style="float: right;margin-right: 10px">
                        <p style="font-size: 12pt;margin: 1px 0">پست پیشتاز (هزینه ارسال: طبق تعرفه پست)</p>
                        <p style="font-size: 10pt;margin: 1px 0;color: #9799AD">زمان تقریبی تحویل سفارش بر اساس محدوده
                            جغرافیایی: 48 - 72 ساعت</p>
                    </div>
                </td>
                <td>
                    <p style="margin: 1px 0;font-size: 10pt;text-align: center">هزینه ارسال</p>
                    <p style="margin: 1px 0;font-size: 12pt;color: green;text-align: center">46,000 تومان</p>
                </td>
            </tr>
        </table>
        <table cellspacing="0" class="active" style="border-radius: 5px;overflow: hidden">
            <tr>
                <td style="width: 60px;position: relative">
                    <span class="circle"></span>
                </td>
                <td style="width: 980px">
                    <img style="float: right;margin-top: 8px" src="public/images/post_48_icon.png">
                    <div style="float: right;margin-right: 10px">
                        <p style="font-size: 12pt;margin: 1px 0">پست پیشتاز (هزینه ارسال: طبق تعرفه پست)</p>
                        <p style="font-size: 10pt;margin: 1px 0;color: #9799AD">زمان تقریبی تحویل سفارش بر اساس محدوده
                            جغرافیایی: 48 - 72 ساعت</p>
                    </div>
                </td>
                <td>
                    <p style="margin: 1px 0;font-size: 10pt;text-align: center">هزینه ارسال</p>
                    <p style="margin: 1px 0;font-size: 12pt;color: green;text-align: center">46,000 تومان</p>
                </td>
            </tr>
        </table>
        <div style="margin-top: 15px;float: right;width: 100%">
            <span class="btn_green" style="float: left">ذخیره و مرحله بعد</span>
        </div>
    </div>
</div>
<style>
    footer {
        height: 300px;
        float: right;
        margin-top: 40px;
        width: 100%
    }

    .footer_top {
        background: #6D717A none repeat 0 0;
        height: 45px
    }

    .footer_bottom {
        height: 255px;
        background: #F7F8FA none repeat 0 0
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
        background: url(public/images/slices.png) no-repeat 0 0;
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
            background: #208DE6 no-repeat 0 0;
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
            background: url(public/images/slices.png) no-repeat 0 0
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
    var timer = {}
    $('.menu_top li').hover(function () {
        var tag = $(this)
        var timerAttr = tag.attr('data-time')
        clearTimeout(timer[timerAttr])
        timer[timerAttr] = setTimeout(function () {
            $('> ul', tag).fadeIn(0)
            tag.addClass('active-menu')
            $('> .submenu3', tag).fadeIn(0)
        }, 500)
    }, function () {
        var tag = $(this)
        var timerAttr = tag.attr('data-time')
        clearTimeout(timer[timerAttr])
        timer[timerAttr] = setTimeout(function () {
            $('> ul', tag).fadeOut(0)
            tag.removeClass('active-menu')
            $('> .submenu3', tag).fadeOut(0)
        }, 600)
    })
</script>
<style>
    .add_address {
        width: 900px;
        height: 584px;
        position: fixed;
        background: #FFF;
        right: 0;
        left: 0;
        margin: auto;
        top: 21px;
        z-index: 6;
        border-radius: 5px;
        display: none
    }

    .dark {
        width: 100%;
        position: fixed;
        background: rgba(0, 0, 0, .3);
        top: 0;
        left: 0;
        height: 100%;
        z-index: 5;
        display: none
    }

    .add_address h4 {
        font-family: yekan, serif;
        font-size: 11pt;
        background: #EEE;
        padding: 8px;
        margin: 10px;
        border-radius: 5px;
        position: relative;
        border: 1px solid #e4eae2;
        box-shadow: 0 2px 3px rgba(0, 0, 0, .2)
    }

    .add_address .close {
        width: 28px;
        height: 28px;
        background: url(public/images/slices.png) no-repeat -134px -122px;
        position: absolute;
        left: 4px;
        top: 4px;
        border-radius: 100%;
        border: 1px solid #F7F8FA;
        cursor: pointer;
        box-shadow: 0 2px 3px rgba(0, 0, 0, .2)
    }

    .row {
        float: right;
        width: 95%;
        padding: 12px 20px;
        font-family: yekan, serif
    }

    .row .right {
        float: right;
        width: 200px;
        margin-top: 6px
    }

    .row .right .title {
        font-size: 10.5pt
    }

    .row .left {
        float: right
    }

    .row .left input {
        width: 260px;
        height: 28px;
        border: 1px solid #EEE;
        position: relative;
        top: 3px;
        border-radius: 5px;
        box-shadow: 0 1px 2px rgba(0, 0, 0, .1)
    }

    .row .left textarea {
        height: 120px;
        border: 1px solid #EEE;
        position: relative;
        top: 3px;
        width: 260px;
        border-radius: 5px;
        box-shadow: 0 1px 2px rgba(0, 0, 0, .1)
    }

    .btn_green {
        width: 170px;
        height: 37px;
        display: block;
        background: #36BE2B;
        border-radius: 5px;
        box-shadow: 1px 1px 3px #CCC;
        text-align: center;
        color: #FFF;
        font-family: yekan, serif;
        font-size: 11pt;
        line-height: 34px;
        margin-right: 185px;
        margin-top: -61px
    }
</style>
<div class="add_address">
    <h4>افزودن آدرس جدید
        <span class="close"></span>
    </h4>
    <div class="row">
        <div class="right">
            <span class="title">نام و نام خانوادگی تحویل گیرنده:</span>
        </div>
        <div class="left">
            <input>
        </div>
    </div>
    <div class="row">
        <div class="right">
            <span class="title">شماره همراه:</span>
        </div>
        <div class="left">
            <input>
        </div>
    </div>
    <div class="row">
        <div class="right">
            <span class="title">شماره ثابت</span>
        </div>
        <div class="left">
            <input>
        </div>
    </div>
    <div class="row">
        <div class="right">
            <span class="title">استان/شهر:</span>
        </div>
        <div class="left">
            <style>
                .filter-option .pull-left {
                    text-align: right !important;
                }
            </style>
        </div>
        <select onchange="ostan(this)" class="selectpicker show-thick" data-live-search="true">
            <option data-val="41" value="آذربایجان شرقی">آذربایجان شرقی</option>
            <option data-val="44" value="آذربایجان غربی">آذربایجان غربی</option>
            <option data-val="45" value="اردبیل">اردبیل</option>
            <option data-val="31" value="اصفهان">اصفهان</option>
            <option data-val="26" value="البرز">البرز</option>
            <option data-val="84" value="ایلام">ایلام</option>
            <option data-val="77" value="بوشهر">بوشهر</option>
            <option data-val="21" value="تهران">تهران</option>
            <option data-val="38" value="چهار محال بختیاری">چهار محال بختیاری</option>
            <option data-val="56" value="خراسان جنوبی">خراسان جنوبی</option>
            <option data-val="51" value="خراسان رضوی">خراسان رضوی</option>
            <option data-val="58" value="خراسان شمالی">خراسان شمالی</option>
            <option data-val="61" value="خوزستان">خوزستان</option>
            <option data-val="24" value="زنجان">زنجان</option>
            <option data-val="23" value="سمنان">سمنان</option>
            <option data-val="54" value="سیستان و بلوچستان">سیستان و بلوچستان</option>
            <option data-val="71" value="فارس">فارس</option>
            <option data-val="28" value="قزوین">قزوین</option>
            <option value="قم" data-val="25">قم</option>
            <option value="کردستان" data-val="87">کردستان</option>
            <option value="کرمان" data-val="34">کرمان</option>
            <option value="کرمانشاه" data-val="83">کرمانشاه</option>
            <option value="کهکیلویه و بویراحمد" data-val="74">کهکیلویه و بویراحمد</option>
            <option value="گلستان" data-val="17">گلستان</option>
            <option value="گیلان" data-val="13">گیلان</option>
            <option value="لرستان" data-val="66">لرستان</option>
            <option value="مازندران" data-val="15">مازندران</option>
            <option value="مرکزی" data-val="86">مرکزی</option>
            <option value="هرمزگان" data-val="76">هرمزگان</option>
            <option value="همدان" data-val="81">همدان</option>
            <option value="یزد" data-val="35">یزد</option>
        </select>
        <span class="shahr">
                <select onchange="shahr(this)" class="selectpicker">
                  <option value="">شهر مرکز استان خود را انتخاب کنید؟</option>
                </select>
            </span>
    </div>
</div>
<div class="row">
    <div class="right">
        <span class="title">محله:</span>
    </div>
    <span class="mahale">
            <select onchange="mahale(this)">
<option>محله خود را انتخاب کنید؟</option>
            </select>
        </span>
</div>
<div class="row">
    <div class="right">
        <span class="title">آدرس پستی:</span>
    </div>
    <div class="left">
        <textarea></textarea>
    </div>
</div>
<div class="row">
    <div class="right">
        <span class="title">کد پستی:</span>
    </div>
    <div class="left">
        <input>
    </div>
</div>
<div class="row">
    <div class="right">
        <span class="title"></span>
    </div>
    <div class="left" style="text-align: left;width: 100%">
        <span class="btn_green" style="float: left">ذخیره اطلاعات و بازگشت</span>
    </div>
</div>
</div>
<div class="dark"></div>
<script>
    $('.close').click(function () {
        $('.add_address').fadeOut(200)
        $('.dark').fadeOut(200)
    })
    $('.btn_gray').click(function () {
        $('.add_address').fadeIn(200)
        $('.dark').fadeIn(200)
    })
    $('.selectpicker').selectpicker()
</script>
</body>
</html>