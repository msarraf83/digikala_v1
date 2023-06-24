<style>
    .tab {
        width: 1200px;
        float: right;
        margin-top: 20px;
        margin-right: 73px;
        background: #F5F6F7;
        padding: 0;
        border-radius: 5px;
        overflow: hidden
    }

    .tab li {
        float: right;
        padding: 10px;
        padding-right: 37px;
        font-size: 11.5pt;
        font-family: yekan, serif;
        border: 1px solid #EEE;
        cursor: pointer;
        position: relative
    }

    .tab li:before {
        background: url(public/images/slices.png) no-repeat;
        width: 30px;
        height: 26px;
        content: "";
        display: block;
        position: absolute;
        right: 3px;
        top: 9px
    }

    .tab .naghd::before {
        background-position: -105px -266px
    }

    .tab .moshakhasat::before {
        background-position: -315px -266px
    }

    .tab .nazarat::before {
        background-position: -261px -266px
    }

    .tab .porsesh::before {
        background-position: -210px -266px
    }

    .tab .foroosh::before {
        background-position: -105px -266px
    }

    .tab .sabte::before {
        background-position: -315px -266px
    }

    .tab .garanti::before {
        background-position: -261px -266px
    }

    .tab .rafee::before {
        background-position: -210px -266px
    }

    .tab .naghd:active::before {
        background-position: -105px -308px
    }

    .tab .moshakhasat:active::before {
        background-position: -315px -308px
    }

    .tab .nazarat:active::before {
        background-position: -261px -308px
    }

    .tab .porsesh:active::before {
        background-position: -210px -308px
    }

    .tab .foroosh:active::before {
        background-position: -105px -308px
    }

    .tab .sabte:active::before {
        background-position: -315px -308px
    }

    .tab .garanti:active::before {
        background-position: -261px -308px
    }

    .tab .rafee:active::before {
        background-position: -210px -308px
    }

    .tab li.active {
        background: #FDFDEE;
        border-top: 1px solid blue;
        box-shadow: 0 -2px 4px rgba(0, 0, 0, .2);
        border-radius: 5px 5px 0 0;
        border-bottom: 1px dashed rgba(0, 0, 0, .2);
        color: #210000
    }
</style>
<ul class="tab">
    <li class="naghd active">نقد و بررسی تخصصی</li>
    <li class="moshakhasat">مشخصات فنی</li>
    <li class="nazarat">نظرات کاربران</li>
    <li class="porsesh">پرسش و پاسخ</li>
</ul>
<style>
    .tabchilds {
        width: 1200px;
        float: right;
        background: #FFF;
        margin-right: 73px;
    }

    .tabchilds section {
        display: none;
        padding: 10px;
        font-family: yekan, serif;
        font-size: 12pt;
        padding-bottom: 20px;
        float: right;
        width: 100%
    }

    .tabchilds section:first-child {
        display: block;
        margin-right: -20px;
    }

    .tabchilds .item {
        padding: 0
    }

    .tabchilds .item h4 {
        font-size: 13.5pt;
        font-family: yekan, serif;
        margin: 0;
        position: relative;
        padding: 5px 25px 5px 0;
        line-height: 40px;
        cursor: pointer
    }

    .tabchilds .item h4::after {
        width: 100%;
        height: 1px;
        background: #EEE;
        position: absolute;
        top: 28px;
        left: 0;
        content: "";
        display: block
    }

    .tabchilds .item:last-child h4::after {
        top: 28px
    }

    .tabchilds .item h4 span {
        z-index: 1;
        position: relative;
        background: #FFF;
        top: 3px
    }

    .tabchilds .item h4 i {
        background: url(public/images/slices.png) no-repeat scroll -259px -606px;
        width: 31px;
        height: 56px;
        display: block;
        position: absolute;
        right: -17px;
        top: -1px
    }

    .tabchilds .item h4.active i {
    }

    .tabchilds .item:first-child h4 i {
        background: url(public/images/slices.png) no-repeat scroll -153px -615px;
        width: 31px;
        height: 44px;
        display: block;
        position: absolute;
        right: -16px;
        top: 12px
    }

    .tabchilds .item:first-child h4.active i {
        background: url(public/images/slices.png) no-repeat scroll -98px -615px
    }

    .tabchilds .item:last-child h4 i {
        background: url(public/images/slices.png) no-repeat scroll -313px -615px;
        width: 31px;
        height: 44px;
        display: block;
        position: absolute;
        right: -17px;
        top: 3px
    }

    .tabchilds .item:last-child h4.active i {
        background: url(public/images/slices.png) no-repeat scroll -207px -606px
    }

    .item_container {
        margin-right: 30px;
        border-right: 3px solid #F0F1F2;
        margin-top: 10px;
        height: 830px;
    }

    .item_container .item .description {
        display: none;
    }
</style>
<div class="tabchilds">
    <?php
    require('tab1.php');
    require('tab2.php');
    require('tab3.php');
    require('tab4.php');
    ?>
</div>
<script>
    $('.tab li').click(function () {
        $('.tab li').removeClass('active');
        $(this).addClass('active');
        $('.tabchilds section');
        $('.tabchilds section').fadeOut(0);
        var index = $(this).index();
        $('.tabchilds section').eq(index).fadeIn(200);
    });
    $('.item_container .item h4').click(function () {
        var item = $(this).parents('.item');
        $(this).toggleClass('active');
        $('.description', item).slideToggle(200);
    });
</script>