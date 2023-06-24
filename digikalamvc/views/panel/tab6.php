<style>
    .add_digibon {
        padding: 10px;
        background: #EEE no-repeat scroll 0 0;
        border: 1px dotted #CCC;
        width: 96%;
        padding-bottom: 30px;
        margin-bottom: 25px
    }

    .add_digibon input {
        width: 300px;
        height: 24px;
        border: 1px solid #CCC;
        margin-right: 10px;
        border-radius: 5px;
        box-shadow: 0 1px 2px rgba(0, 0, 0, .1)
    }

    .add_digibon img {
        position: relative;
        right: 8px;
        top: 12px;
        border-radius: 5px;
        box-shadow: 0 1px 2px rgba(0, 0, 0, .1)
    }

    .digibon .sub {
        box-shadow: 0 0 5px #CCC
    }

    .digibon .sub table {
        width: 100%
    }

    .digibon .sub table tr {
        background: #FFF !important
    }

    .digibon .sub table tr:first-child {
        background: #EEE !important;
        color: #000 !important
    }
</style>
<section class="digibon">
    <div class="add_digibon">
        <span>کد دریلفت دیجی بن:</span>
        <input type="text">
        <img src="public/images/SaveVoucher.gif">
    </div>
    <table cellspacing="1">
        <tr>
            <td>ردیف</td>
            <td>کد</td>
            <td>سفارش</td>
            <td>شرح</td>
            <td>تاریخ ثبت</td>
            <td>تاریخ انقضاء</td>
            <td>اعتبار اولیه</td>
            <td>اعتبار مصرفی</td>
            <td>مانده</td>
            <td>وضعیت</td>
            <td>جزئیات</td>
        </tr>
        <tr>
            <td>1</td>
            <td>1234</td>
            <td>digi-6232116357</td>
            <td>بن تخفیف سفارش شما</td>
            <td>15 تیر ماه 1300</td>
            <td>15 مرداد ماه 1300</td>
            <td>1</td>
            <td>1</td>
            <td>0</td>
            <td>باطل شده</td>
            <td>
                <img class="show_details" onclick="showDetailsTr(this)" style="margin-top: 5px"
                     src="public/images/orderdetailsopen.png">
            </td>
        </tr>
        <tr class="details" style="background: #FFF">
            <td colspan="11">
                <div class="sub">
                    <table cellspacing="0">
                        <tr>
                            <td>سفارش</td>
                            <td>نوع</td>
                            <td>تاریخ</td>
                            <td>اعتبار مصرفی</td>
                        </tr>
                        <tr>
                            <td>digi-6232116357</td>
                            <td>خرید</td>
                            <td>تیر ماه 1300</td>
                            <td>1</td>
                        </tr>
                    </table>
                </div>
            </td>
        </tr>
    </table>
</section>