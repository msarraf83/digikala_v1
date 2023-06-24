<style>
    .search {
        position: relative;
        float: right;
        width: 100%
    }

    .search input {
        width: 330px;
        height: 17px;
        border: 1px solid #EEE;
        border-radius: 3px
    }

    .search img {
        position: absolute;
        right: 317px;
        top: 8px
    }

    .search .exist {
        margin-right: 31px;
        position: relative;
        top: 6px;
        cursor: pointer
    }

    .search .exist_background {
        background: rgba(0, 0, 0, 0) url(public/images/btnchecked.png) no-repeat scroll 0 0;
        display: inline-block;
        height: 21px;
        width: 40px
    }

    .search .exist.active .exist_background {
        background-position: -40px 0 !important
    }

    .search .exist.active .exist_yesno {
        background-position: -3px 0 !important
    }

    .search .exist_yesno {
        background: rgba(0, 0, 0, 0) url(public/images/yesno.png) no-repeat scroll 0 -21px;
        height: 21px;
        width: 30px;
        position: absolute;
        top: -7px;
        left: 0
    }

    .exist > div {
        font-size: 9.8pt;
        margin-right: 7px
    }

    .view_kala_exist {
        float: left;
        position: absolute;
        left: 360px;
        top: 7px;
        font-family: yekan, serif;
        font-size: 10pt
    }
    .display_type {
        float: left
    }

    .display_type > span {
        font-size: 9.8pt;
        margin-left: 0
    }

    .display_type .type {
        font-family: yekan, serif;
        font-size: 10pt;
        margin-left: 5px
    }

    .type1, .type2 {
        width: 24px;
        height: 24px;
        display: block;
        float: left;
        background: url(public/images/displaytype.png) no-repeat scroll 0 0;
        cursor: pointer
    }

    .type1.active {
        background: url(public/images/displaytype.png) no-repeat scroll -24px 0
    }

    .type2.active {
        background: url(public/images/displaytype.png) no-repeat scroll -24px 0
    }

    .type1 {
        background-position: -24px -24px;
    }
</style>
<div class="search">
    <input type="text">
    <img src="public/images/search2.png" alt="search2">
    <span class="exist">
                 <span class="exist_background"></span>
                 <span class="exist_yesno"></span>
            </span>
    <div class="view_kala_exist">نمایش کالاهای موجود</div>
    <span class="display_type">
                <span class="type">نوع نمایش</span>
                <span class="type2"></span>
                <span class="type1"></span>
            </span>
</div>
<style>
    .sort {
        float: right;
        width: 100%;
        margin-top: 8px
    }
</style>
<div class="sort">
    <span class="yekan" style="font-size: 9.8pt"></span>
    <select>
        <option>قیمت</option>
        <option>پربازدید ترین</option>
        <option>جدیدترین</option>
        <option>پیشنهاد ویژه</option>
        <option>پرفروش ترین</option>
    </select>
    <select>
        <option>صعودی</option>
        <option>نزولی</option>
    </select>
    <span class="yekan" style="font-size: 9.8pt">تعداد نمایش</span>
    <select>
        <option>24</option>
        <option>32</option>
        <option>48</option>
    </select>
</div>
<script>
    $('.exist').click(function () {
        $(this).toggleClass('active');
        if ($(this).hasClass('active')) {
            $('.exist_yesno', this).animate({'left': '14px'}, 400);
        } else {
            $('.exist_yesno', this).animate({'left': '4px'}, 400);
        }
    });
    $('.type1').click(function () {
        $('.products').addClass('display1');
        $(this).addClass('active');
        $('.type2').removeClass('active');
    });
    $('.type2').click(function () {
        $('.products').removeClass('display1');
        $(this).addClass('active');
        $('.type1').removeClass('active');
    });
</script>