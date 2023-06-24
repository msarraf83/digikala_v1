<style>
    .order_steps {
        padding-left: 10px;
        padding-right: 126px;
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
        background: #00BFD6 no-repeat scroll 0 0;
        display: block;
        float: right;
        margin-left: 3px
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
        background: #00BFD6 url(public/images/slices.png) no-repeat scroll -809px -474px
    }

    .order_steps ul li .line {
        width: 128px;
        height: 2px;
        display: block;
        background: #CCC;
        border-radius: 100%;
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
        right: 12px;
        width: 100px
    }

    .order_steps ul li.active .title {
        color: #00BFD6
    }
</style>
<section class="my_orders">
    <table cellspacing="1">
        <tr>
            <td>ردیف</td>
            <td>کد</td>
            <td>تاریخ</td>
            <td>مبلغ کل</td>
            <td>وضعیت</td>
            <td>عملیات پرداخت</td>
            <td>نوع</td>
            <td>جزئیات</td>
        </tr>
        <tr>
            <td>1</td>
            <td>1234</td>
            <td>تیر ماه 1300</td>
            <td>12,000</td>
            <td>تحویل شده</td>
            <td>پرداخت</td>
            <td>سفارش</td>
            <td>
                <img class="show_details" onclick="showDetailsTr(this)" style="margin-top: 5px"
                     src="public/images/orderdetailsopen.png">
            </td>
        </tr>
        <tr class="details">
            <td colspan="8">
                <div class="sub_table">
                    <table cellspacing="0">
                        <tr>
                            <td>کالا</td>
                            <td>تعداد</td>
                            <td>قیمت واحد</td>
                            <td>قیمت کل</td>
                            <td>تخفیف کل</td>
                            <td>مبلغ کل</td>
                        </tr>
                        <tr>
                            <td>مسواک برقی</td>
                            <td>1</td>
                            <td>30,000</td>
                            <td>قیمت کل</td>
                            <td>تخفیف کل</td>
                            <td>مبلغ کل</td>
                        </tr>
                    </table>
                    <h4 class="title">رهگیری سفارش</h4>
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
                                <span class="title">تایید سفارش</span>
                            </li>
                            <li>
                                <span class="circle"></span>
                                <span class="line"></span>
                                <span class="title">پرداخت</span>
                            </li>
                            <li>
                                <span class="circle"></span>
                                <span class="line"></span>
                                <span class="title">پردازش انبار</span>
                            </li>
                            <li>
                                <span class="circle"></span>
                                <span class="line"></span>
                                <span class="title">آماده ارسال</span>
                            </li>
                            <li style="width: 72px">
                                <span class="circle"></span>
                                <span class="title">تحویل شده</span>
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
                    <div class="more">
                        <table cellspacing="0">
                            <tr>
                                <td>روش ارسال: تحویل اکسپرس دیجی کالا (هزینه ارسال: رایگان (ویژه سفارش های با
                                    ارزش
                                    بیشتر از صد هزار تومان) سفارش های کمتر از صد هزار تومان: 4500 تومان ثابت)
                                </td>
                                <td>زمان ارسال: بازه: 12 - 15 تاریخ:1395/2/27</td>
                                <td>کد مرسوله: نامشخص</td>
                            </tr>
                            <tr>
                                <td>آدرس تحویل: خیابان قزوین، دوراهی قهان، جنب پمپ بنزین، کوچه شهید بهمن نوروزی،
                                    بن
                                    بست قدمی، پلاک 7، طبقه 2
                                </td>
                                <td>تحویل گیرنده: محمد جعفر بلاغی</td>
                                <td>کلیک سایت</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </td>
        </tr>
        <tr>
            <td>1</td>
            <td>1234</td>
            <td>تیر ماه 1300</td>
            <td>12,000</td>
            <td>تحویل شده</td>
            <td>پرداخت</td>
            <td>سفارش</td>
            <td>
                <img class="show_details" onclick="showDetailsTr(this)" style="margin-top: 5px"
                     src="public/images/orderdetailsopen.png">
            </td>
        </tr>
        <tr class="details">
            <td colspan="8">
                <div class="sub_table">
                    <table cellspacing="0">
                        <tr>
                            <td>کالا</td>
                            <td>تعداد</td>
                            <td>قیمت واحد</td>
                            <td>قیمت کل</td>
                            <td>تخفیف کل</td>
                            <td>مبلغ کل</td>
                        </tr>
                        <tr>
                            <td>مسواک برقی</td>
                            <td>1</td>
                            <td>30,000</td>
                            <td>قیمت کل</td>
                            <td>تخفیف کل</td>
                            <td>مبلغ کل</td>
                        </tr>
                    </table>
                    <h4 class="title">رهگیری سفارش</h4>
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
                                <span class="title">تایید سفارش</span>
                            </li>
                            <li>
                                <span class="circle"></span>
                                <span class="line"></span>
                                <span class="title">پرداخت</span>
                            </li>
                            <li>
                                <span class="circle"></span>
                                <span class="line"></span>
                                <span class="title">پردازش انبار</span>
                            </li>
                            <li>
                                <span class="circle"></span>
                                <span class="line"></span>
                                <span class="title">آماده ارسال</span>
                            </li>
                            <li style="width: 72px">
                                <span class="circle"></span>
                                <span class="title">تحویل شده</span>
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
                    <div class="more">
                        <table cellspacing="0">
                            <tr>
                                <td>روش ارسال: تحویل اکسپرس دیجی کالا (هزینه ارسال: رایگان (ویژه سفارش های با
                                    ارزش
                                    بیشتر از صد هزار تومان) سفارش های کمتر از صد هزار تومان: 4500 تومان ثابت)
                                </td>
                                <td>زمان ارسال: بازه: 12 - 15 تاریخ:1395/2/27</td>
                                <td>کد مرسوله: نامشخص</td>
                            </tr>
                            <tr>
                                <td>آدرس تحویل: خیابان قزوین، دوراهی قهان، جنب پمپ بنزین، کوچه شهید بهمن نوروزی،
                                    بن
                                    بست قدمی، پلاک 7، طبقه 2
                                </td>
                                <td>تحویل گیرنده: محمد جعفر بلاغی</td>
                                <td>کلیک سایت</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </td>
        </tr>
    </table>
</section>