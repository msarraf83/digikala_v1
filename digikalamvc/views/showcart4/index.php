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

    .main {
        font-family: yekan, serif
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
            <li class="active">
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
        <h4>کد تخفیف</h4>
        <span class="btn_green">ادامه خرید</span>
    </div>
    <style>
        .discount_code {
            width: 100%;
            float: right;
            margin-top: 20px;
            font-size: 10.7pt;
            border: 1px solid #EEE
        }

        .discount_code input {
            width: 180px;
            height: 27px;
            border: 1px solid #EEE
        }

        .discount_code td {
            padding: 8px
        }

        .btn_blue {
            width: 170px;
            height: 37px;
            display: block;
            background: #00BFD6;
            border-radius: 5px;
            box-shadow: 1px 1px 3px #CCC;
            text-align: center;
            color: #FFF;
            font-family: yekan, serif;
            font-size: 11pt;
            line-height: 34px;
            margin-right: 183px
        }

        .head .btn_green {
            float: left;
            margin-left: 5px;
            margin-top: 8px
        }
    </style>
    <table cellspacing="0" class="discount_code">
        <tr>
            <td>کد تخفیف دیجی کالا را دارم. اگر مایل هستیداز کد دیجی کالا استفاده کنید، کافیست کد آن را وارد کرده و با
                انتخاب دکمه ثبت مبلغ آن از هزینه قابل پرداخت شما کسر می شود.
            </td>
            <td>
                <input type="text">
            </td>
            <td>
                <span class="btn_blue">ثبت کد تخفیف</span>
            </td>
        </tr>
    </table>
    <div class="head">
        <h4>کارت هدیه</h4>
    </div>
    <table cellspacing="0" class="discount_code">
        <tr>
            <td>کد تخفیف دیجی کالا را دارم. اگر مایل هستیداز کد دیجی کالا استفاده کنید، کافیست کد آن را وارد کرده و با
                انتخاب دکمه ثبت مبلغ آن از هزینه قابل پرداخت شما کسر می شود.
            </td>
            <td>
                <input type="text">
            </td>
            <td>
                <span class="btn_blue">ثبت کد هدیه</span>
            </td>
        </tr>
    </table>
    <table cellspacing="0" class="discount_code">
        <tr style="background: #DDFED8">
            <td style="width: 1000px">مبلغ کل قابل پرداخت:</td>
            <td>190،000 هزار تومان</td>
        </tr>
    </table>
    <div class="head">
        <h4>شیوه پرداخت</h4>
    </div>
    <style>
        .pardakht_type {
            float: right;
            width: 100%;
            margin-top: 20px
        }

        .pardakht_type tr:first-child td {
            border-top: 1px solid #EEE
        }

        .pardakht_type tr:first-child td:first-child {
            border-right: 1px solid #EEE
        }

        .pardakht_type td {
            border-left: 1px solid #EEE;
            border-bottom: 1px solid #EEE;
            padding: 5px
        }

        .pardakht_type .circle {
            width: 15px;
            height: 15px;
            border: 1px solid #CCC;
            border-radius: 100%;
            position: relative;
            display: block;
            margin: auto
        }

        .circle.active {
            background: #515FF8 no-repeat 0 0;
            border: none;
            position: relative
        }

        .circle.active tr:first-child td:first-child {
            background: #EDFDED no-repeat 0 0
        }

        .circle.active::after {
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
    </style>
    <table cellspacing="0" class="active pardakht_type">
        <tr>
            <td style="width: 60px;position: relative" rowspan="3">
                <span class="circle"></span>
            </td>
            <td class="girandeh" colspan="3">
                <br/>
                <div style="float: right">
                    <span class="circle" style="float: right"></span>
                    <span style="float: right;font-size: 10pt">درگاه ملت</span>
                </div>
                <div style="float: right;margin-right: 30px">
                    <span class="circle"></span>
                    <span style="float: right;font-size: 10pt">درگاه پارسیان</span>
                </div>
                انتخاب شیوه پرداخت
            </td>
        </tr>
    </table>
    <table cellspacing="0" class="active pardakht_type">
        <tr>
            <td style="width: 60px;position: relative" rowspan="3">
                <span class="circle"></span>
            </td>
            <td class="girandeh" colspan="3">کارت به کارت شما می توانید وجه سفارش خود را به صورت انتقال وجه کارت به کارت
                پرداخت نموده و حداکثر تا 24 ساعت پس از سفارش اطلاعات آن را ثبت نمایید.
            </td>
        </tr>
    </table>
    <table cellspacing="0" class="active pardakht_type">
        <tr>
            <td style="width: 60px;position: relative" rowspan="3">
                <span class="circle"></span>
            </td>
            <td>واریز به حساب شما می توانید وجه سفارش خود را از طریق مراجعه به شعب بانک به حساب شرکت فن آوازه واریز کرده
                و تا حداکثر 24 ساعت پس از سفارش اطلاعات آن را ثبت نمایید.
            </td>
        </tr>
    </table>
    <div class="btn">
        <span class="btn_green" style="">ادامه خرید</span>
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
