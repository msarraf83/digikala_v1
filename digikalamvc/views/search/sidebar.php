<style>
    .sidebar {
        width: 250px;
        border: 1px solid #CCC;
        float: right;
        border-radius: 5px;
        overflow: hidden
    }


    .sidebar h3 {
        height: 30px;
        background: #777780;
        color: #FFF;
        padding-right: 5px;
        padding-top: 5px;
        margin: 0;
        font-size: 10.5pt;
        line-height: 25px
    }

    .sidebar h3 .arrow {
        background: url(public/images/subcatarrow.gif) no-repeat scroll 0 0;
        display: block;
        float: left;
        height: 11px;
        margin-left: 8px;
        margin-top: 8px;
        width: 20px
    }

    .sidebar ul {
        font-family: yekan;
        font-size: 10pt;
        padding-right: 20px
    }
    </style>
<div class="sidebar">
    <h3 class="yekan">
        گوشی موبایل
        <span class="arrow"></span>
    </h3>
    <ul>
        <li>
            کالای دیجیتال
            <ul>
                <li>
                    موبایل
                    <ul>
                        <li>
                            گوشی موبایل
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
    </ul>
    <div class="horizontal_row"></div>
    <style>
        .filter_ul {
            padding-right: 5px
        }

        .filter_ul li {
            font-family: yekan, serif;
            font-size: 10pt;
            position: relative
        }

        .filter_ul .title {
            font-size: 10.5pt;
        }

        .check_input {
            display: inline-block;
            height: 16px;
            margin: 0;
            opacity: 0;
            position: relative;
            right: 1px;
            top: 2px;
            width: 16px;
            z-index: 2;
            cursor: pointer;
            margin-left: 8px
        }

        .check_label {
            background: rgba(0, 0, 0, 0) url(public/images/a-checkbox-medium-sprite.png) no-repeat -1px -1px;
            border-radius: 1px;
            display: block;
            height: 17px;
            position: absolute;
            right: 3px;
            top: 5px;
            width: 17px !important
        }

        .check_label .checked {
            background: rgba(0, 0, 0, 0) url(public/images/a-checkbox-medium-sprite.png) no-repeat -1px -32px;
            border: none
        }

        .product_color {
            width: 3px;
            height: 15px;
            display: inline-block;
            margin-left: 5px;
            position: relative;

        }
    </style>
    <ul class="filter_ul">
        <li class="title">
            بر اساس نوع
        </li>
        <li>
            <label class="check_label"></label>
            <input class="check_input" type="checkbox">
            سیستم عامل اندروید
        </li>
        <li>
            <label class="check_label"></label>
            <input class="check_input" type="checkbox">
            سیستم عامل ios
        </li>
        <li>
            <label class="check_label"></label>
            <input class="check_input" type="checkbox">
            کروم
        </li>
        <li>
            <label class="check_label"></label>
            <input class="check_input" type="checkbox">
            BlackBerry
        </li>
        <li>
            <label class="check_label"></label>
            <input class="check_input" type="checkbox">Windows 10
        </li>
    </ul>
    <div class="horizontal_row"></div>
    <ul class="filter_ul">
        <li class="title">بر اساس سازنده</li>
        <li>
            <label class="check_label"></label>
            <input class="check_input" type="checkbox">Apple
        </li>
        <li>
            <label class="check_label"></label>
            <input class="check_input" type="checkbox">Samsung
        </li>
        <li>
            <label class="check_label"></label>
            <input class="check_input" type="checkbox">Huawei
        </li>
        <li>
            <label class="check_label"></label>
            <input class="check_input" type="checkbox">xiaomi
        </li>
        <li>
            <label class="check_label"></label>
            <input class="check_input" type="checkbox">Asus
        </li>
    </ul>
    <div class="horizontal_row"></div>
    <ul class="filter_ul">
        <li class="title">بر اساس رنگ</li>
        <li>
            <label class="check_label"></label>
            <input class="check_input" type="checkbox">
            <span class="product_color" style="background-color: black"></span>
            مشکی
        </li>
        <li>
            <label class="check_label"></label>
            <input class="check_input" type="checkbox">
            <span class="product_color" style="background-color: red"></span>
            قرمز
        </li>
        <li>
            <label class="check_label"></label>
            <input class="check_input" type="checkbox">
            <span class="product_color" style="background-color: yellow"></span>
            زرد
        </li>
        <li>
            <label class="check_label"></label>
            <input class="check_input" type="checkbox">
            <span class="product_color" style="background-color: green"></span>
            سبز
        </li>
        <li>
            <label class="check_label"></label>
            <input class="check_input" type="checkbox">
            <span class="product_color" style="background-color: blue"></span>
            آبی
        </li>
    </ul>
    <script>
        $('.check_input').click(function () {
            if ($(this).is(':checked')) {
                $(this).parents('li').find('.check_label').addClass('checked')
            } else {
                $(this).parents('li').find('.check_label').removeClass('checked')

            }
        })
    </script>
</div>