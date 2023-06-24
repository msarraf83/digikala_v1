<style>
    .main {
        width: 1200px;
        margin: 10px auto;
        border-radius: 5px;
        overflow: hidden;
        background: #FFF;
        padding: 6px
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
            background: #00BFD6 url("images/slices.png") no-repeat scroll -809px -474px
        }

        .order_steps ul li .line {
            width: 128px;
            height: 2px;
            display: block;
            background: #CCC no-repeat scroll 0 0;
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
            <li>
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
        .content {

        }

        .content .right {
            width: 540px;
            float: right
        }

        .content .right i {
            width: 48px;
            height: 54px;
            display: block;
            margin: auto;
            background: url("images/slices.png") no-repeat scroll -795px -22px
        }

        .content .left {
            width: 540px;
            float: right;
            margin-right: 20px
        }

        .content .left i {
            width: 48px;
            height: 54px;
            display: block;
            margin: auto;
            background: url("images/slices.png") no-repeat scroll -795px -90px
        }

        .content p {
            text-align: center
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
            margin-right: 185px
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
    </style>
    <div class="content">
        <div class="right">
            <i></i>
            <p style="font-size: 12pt">عضو دیجی کالا هستید؟</p>
            <p style="font-size: 10.5pt;margin-top: 2px">جهت تکمیل خرید وارد شوید.</p>
            <span class="btn_green">ورود به کلیک سایت</span>
        </div>
        <div class="left">
            <i></i>
            <p style="font-size: 12pt">هنوز عضو نشده اید؟</p>
            <p style="font-size: 10.5pt;margin-top: 2px">جهت خرید باید ثبت نام کنید.</p>
            <span class="btn_blue">ثبت نام در کلیک سایت</span>
        </div>
    </div>
</div>
