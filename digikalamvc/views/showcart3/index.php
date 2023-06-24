<style>
    .main {
        width: 1200px;
        margin: 10px auto;
        border-radius: 5px;
        background: #FFF;
        padding: 5px
    }

    .main::after {
        content: "";
        clear: both;
        display: block
    }

    .head {
        float: right;
        margin-top: 36px;
        width: 100%
    }

    .head h4 {
        font-size: 11pt;
        font-family: yekan, serif;
        margin-top: 5px;
        padding-right: 10px;
        float: right
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
        line-height: 34px
    }

    .head .btn_green {
        float: left;
        margin-top: 8px;
        margin-left: 5px
    }

    .content table {
        width: 100%;
        font-family: yekan, serif;
        font-size: 11pt;
        margin-top: 10px;
        float: right
    }

    .content table tr td {
        border-left: 1px solid #EEE;
        padding: 3px;
        border-radius: 5px;
        border-bottom: 1px solid #EEE
    }

    .content table tr td:not(:first-child) {
        text-align: center
    }

    .content table tr td:first-child {
        border-right: 1px solid #EEE
    }

    .content table tr:first-child {
        background: #F7F9FA no-repeat 0 0
    }

    .content table tr:first-child td {
        text-align: center
    }

    .content table .right {
        float: right
    }

    .content table .left {
        float: right;
        margin-right: 10px;
        margin-top: 23px
    }

    .content table .left p {
        margin: 2px 0
    }

    .content table .right img {
        max-width: 135px;
        max-height: 135px;
        border-radius: 5px;
        border: 1px dotted #CCC;
        margin-top: 7px;
        box-shadow: 0 1px 2px rgba(0, 0, 0, .1);
        margin-left: 10px;

    }
</style>
<div class="main">
    <style>
        .order_steps {
            padding-left: 10px;
            padding-right: 200px;
            padding-top: 53px;
            height: 100px;
            font-family: yekan, serif
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
            <li class="active">
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
    <div class="head">
        <h4>سبد خرید شما در دیجی کالا</h4>
        <span class="btn_green">ادامه خرید</span>
    </div>
    <style>
        .select_list {
            width: 100px;
            height: 37px;
            border: 1px solid #CCC;
            background: #EEE;
            position: relative;
            text-align: center;
            border-radius: 5px;
            cursor: pointer;
            margin: auto
        }

        .select_list::after {
            content: "";
            width: 20px;
            height: 20px;
            display: block;
            position: absolute;
            left: 5px;
            top: 10px;
            background: url(public/images/slices.png) no-repeat -31px -461px;
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
            background: #FFF;
            border: none
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

        .content table {
            box-shadow: 0 1px 2px rgba(0, 0, 0, .1);
            background: #FFFAFE
        }

        .content table .price {
            font-size: 12pt
        }

        .content table .tooman {
            font-size: 10pt
        }

        .content table .remove_td {
            background: #FF829F
        }

        .content table .remove_icon {
            width: 15px;
            height: 15px;
            display: block;
            background: url(public/images/slices.png) no-repeat -813px -510px;
            margin-left: -10px
        }
    </style>
    <div class="content">
        <table cellspacing="0">
            <tr>
                <td>شرح محصول</td>
                <td>تعداد</td>
                <td>قیمت واحد</td>
                <td style="border-left: 0">قیمت کل</td>
                <td></td>
            </tr>
            <tr>
                <td>
                    <div class="right">
                        <img src="public/images/schwan-903-steering-wheel-lock.jpg">
                    </div>
                    <div class="left">
                        <p>قفل فرمان مدل xyz</p>
                        <p>قرمز</p>
                        <p>گارانتی یک ساله کلیک سایت</p>
                    </div>
                </td>
                <td>
                    <div class="select_list">
                        <span class="yekan zemanat_title"></span>
                        <ul>
                            <li>1</li>
                            <li>2</li>
                            <li>3</li>
                            <li>4</li>
                        </ul>
                    </div>
                </td>
                <td>
                    <span class="price">10,000</span>
                    <span class="tooman">تومان</span>
                </td>
                <td>
                    <span class="price">10,000</span>
                    <span class="tooman">تومان</span>
                </td>
                <td class="remove_td">
                    <i class=remove_icon></i>
                </td>
            </tr>
        </table>
    </div>
    <style>
        .final_price {
            width: 600px;
            float: left;
            font-family: yekan, serif;
            margin-top: 50px;
            border: 1px solid #573ACE;
            box-shadow: 0 1px 2px rgba(0, 0, 0, .1);
            border-radius: 5px;
            padding: 10px;
            background: rgba(252, 255, 238, 0.72);
            height: 178px
        }

        .total_price, .send_price, .discount_price {
            border-bottom: greenyellow;
            float: right;
            padding: 6px 2px;
            width: 100%;
            margin-bottom: 10px
        }

        .total_price1 {
            float: right;
            font-size: 10pt
        }

        .total_price2 {
            float: right;
            color: #66585B;
            font-size: 12pt;
            margin-right: 416px
        }

        .total_price3 {
            float: right;
            color: #66585B;
            font-size: 9pt;
            margin-right: 10px;
            margin-top: 3px
        }

        .total_price {
            float: right;
            padding: 5px 0;
            width: 100%;
            border: 1px dashed #EEE;
            box-shadow: 0 1px 2px rgba(0, 0, 0, .1);
            border-radius: 5px
        }

        .send_price {
            float: right;
            padding: 5px 0;
            width: 100%;
            border: 1px dashed #EEE;
            box-shadow: 0 1px 2px rgba(0, 0, 0, .1);
            border-radius: 5px
        }

        .discount_price {
            float: right;
            padding: 5px 0;
            width: 100%;
            background: #FFDFDF;
            border: 1px dashed #EEE;
            box-shadow: 0 1px 2px rgba(0, 0, 0, .1);
            border-radius: 5px
        }

        .pardakht_price {
            float: right;
            padding: 5px 0;
            width: 100%;
            background: #ACEE8A;
            border: 1px dashed #EEE;
            box-shadow: 0 1px 2px rgba(0, 0, 0, .1);
            border-radius: 5px
        }

        .discount_price span {
            color: #f66769;
            background: #FAEEEF;
            border-radius: 5px;
            border: 1px dashed #EEE;
            box-shadow: 0 1px 2px rgba(0, 0, 0, .1)
        }

        .pardakht_price span {
            color: green;
            background: #D8FFBF;
            border-radius: 5px;
            border: 1px dashed #EEE;
            box-shadow: 0 1px 2px rgba(0, 0, 0, .1)
        }

        .btn {
            float: left;
            width: 100%;
            margin-top: 50px
        }

        .btn .btn_green {
            float: left
        }
    </style>
    <div class="final_price">
        <div class="total_price" style="position: relative">
            <span class="total_price1"
                  style="color: #000;position: absolute;left:509px;top: 8px">جمع کل خرید شما:</span>
            <span class="total_price2" style="margin-right: 508px">11،000</span>
            <span class="total_price3">تومان</span>
        </div>
        <div class="send_price">
            <span class="total_price1">هزینه ارسال، بسته بندی و بیمه:</span>
            <span class="total_price2" style="margin-right: 350px">11،000</span>
            <span class="total_price3">تومان</span>
        </div>
        <div class="discount_price">
            <span class="total_price1">جمع کل مبلغ تخفیف:</span>
            <span class="total_price2" style="margin-right: 406px">11،000</span>
            <span class="total_price3">تومان</span>
        </div>
        <div class="pardakht_price">
            <span class="total_price1">مبلغ قابل پرداخت:</span>
            <span class="total_price2">11،000</span>
            <span class="total_price3">تومان</span>
        </div>
    </div>
    <div class="head">
        <h4>اطلاعات ارسال سفارش</h4>
    </div>
    <style>
        .review_send_info {
            width: 100%;
            margin-top: 30px;
            float: right;
            font-family: yekan, serif;
            font-size: 11pt
        }

        .review_send_info td {
            border-right: 1px solid #EEE;
            border-bottom: 1px solid #EEE;
            padding: 5px
        }

        .review_send_info tr:first-child td {
            border-top: 1px solid #EEE
        }

        .review_send_info tr td:last-child {
            border-left: 1px solid #EEE
        }

        .review_send_info i {
            width: 29px;
            height: 29px;
            background: url(public/images/slices.png) no-repeat 0 0;
            display: block
        }
    </style>
    <table class="review_send_info" cellspacing="0">
        <tr>
            <td>
                <i style="background-position: -810px -205px"></i>
            </td>
            <td>این سفارش به محمد جعفر بلاغی به آدرس خیابان قزوین، دوراهی قهان، جنب پمپ بنزین، کوچه شهید بهمن نوروزی، بن
                بست قدمی، پلاک 7، طبقه 2 و شماره تماس 09396562210 تحویل می گردد
            </td>
        </tr>
        <tr>
            <td>
                <i style="background-position: -806px -250px"></i>
            </td>
            <td>این سفارش از طریق پست پیشتاز(هزینه ارسال: طبق تعرفه پست) با هزینه 46،000 تومان به شما تحویل داده خواهد
                شد.
            </td>
        </tr>
    </table>
    <div class="btn">
        <span class="btn_green">ادامه خرید</span>
    </div>
</div>
<script>
    $('.select_list').click(function () {
        var ul_tag = $('ul', this)
        ul_tag.slideToggle(200)
    })
    $('.select_list ul li').click(function () {
        var txt = $(this).text()
        $('.select_list .zemanat_title').text(txt)
    })
</script>
