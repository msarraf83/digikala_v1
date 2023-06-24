<div id="main" style="width: 1200px; margin: 10px auto;height: 500px;background: #FFF;box-shadow: 0 1px 3px #EEE">
    <div class="header">
        <i></i>
        <h2>
            به کلیک سایت بپیوندید
        </h2>
        <div class="right">
            <div>
                <label>
                    پست الکترونیک
                </label>
                <input type="text">
            </div>
            <div>
                <label>
                    رمز عبور
                </label>
                <input type="password">
            </div>
            <div class="check_div">
                <label class="check_label"></label>
                <input class="check_input" type="checkbox">
                قوانین را مطالعه نموده ام و موافق هستم
            </div>
            <div class="check_div">
                <label class="check_label"></label>
                <input class="check_input" type="checkbox">
                خبرنامه را برای من ارسال کن
            </div>
            <div>
                 <span class="btn">
ثبت نام
                 </span>
            </div>
        </div>
        <script>
            $('.check_input').click(function () {
                if ($(this).is(':checked')) {
                    $(this).parents('.check_div').find('.check_label').addClass('checked')
                } else {
                    $(this).parents('.check_div').find('.check_label').removeClass('checked')

                }
            })
        </script>
        <style>
            .header .left ul {
                padding: 0
            }

            .header .left li {
                font-family: yekan;
                font-size: 10.6pt
            }

            .header .left li i {
                background: url(public/images/slices.png);
                display: inline-block;
                height: 27px;
                margin-left: 21px;
                position: relative;
                top: 8px;
                width: 27px
            }
        </style>
        <div class="left">
            <ul>
                <li>
                    <i style="background-position: -980px -330px;">

                    </i>
                    سریع تر و ساده تر خرید کنید
                </li>
                <li>
                    <i style="background-position: -980px -286px;">

                    </i>
                    به سادگی سوابق خریدو فعالیت های خود را مدیریت کنید
                </li>
                <li>
                    <i style="background-position: -980px -243px;">

                    </i>
                    لیست علاقه مندی های خود را بسازید و تغییرات آنها را دنبال کنید
                </li>
            </ul>
        </div>
    </div>
</div>