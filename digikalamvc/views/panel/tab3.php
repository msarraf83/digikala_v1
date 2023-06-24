<style>
    .favorites ul {
        padding: 10px;
        background: #EEE;
        border: 1px dashed #CCC;
        width: 96.5%;
        border-radius: 5px;
        box-shadow: 0 2px 3px rgba(0, 0, 0, .15);
        float: right;
        padding-bottom: 22px
    }

    .favorites ul li {
        width: 280px;
        height: 36px;
        margin-right: 20px;
        float: right
    }

    .favorites ul li a {
        height: 100%;
        display: block;
        position: relative;
        border-radius: 5px;
        padding: 5px
    }

    .favorites ul li:active a {
        background: #FFF;
        border: 1px solid #CCC
    }

    .favorites ul li a:hover {
        background: #FFF;
        border: 1px solid #CCC
    }

    .favorites ul li a .folder {
        vertical-align: middle
    }

    .favorites ul li a span {
        font-family: yekan, serif;
        font-size: 10.3pt;
        margin-right: 7px
    }

    .favorites ul li a .edit {
        position: absolute;
        top: 2px;
        left: 2px;
        display: none
    }
</style>
<section class="favorites" style="display: block">
    <ul>
        <li>
            <a>
                <img class="folder" src="public/images/folder_documents_all.png">
                <span>همه پوشه ها</span>
            </a>
        </li>
        <li>
            <a>
                <img class="folder" src="public/images/folder_documents_all.png">
                <span>گوشی</span>
                <img class="edit" src="public/images/icon_edit_16.png">
            </a>
        </li>
    </ul>
    <style>
        .favorites .item {
            float: right;
            width: 96%;
            margin-top: 11px;
            padding: 13px;
            border: 1px dotted;
            border-radius: 5px
        }

        .favorites .item .right {
            float: right;
            line-height: 10px
        }

        .favorites .item .right img {
            width: 110px;
            height: 110px;
            border: 1px solid #EEE;
            border-radius: 5px;
        }

        .favorites .item .left {
            float: right;
            margin-right: 5px;
            width: 1000px;
            padding-right: 26px
        }

        .favorites .item .left h4 {
            font-size: 12.8pt;
            margin: 0;
            position: relative
        }

        .favorites .item .left h4 .edit {
            position: absolute;
            left: 23px;
            top: -5px
        }

        .favorites .item .left .delete {
            position: absolute;
            left: -12px;
            bottom: 8px
        }

        .favorites .item .left .description {
            font-size: 11pt;
            font-family: yekan, serif
        }
    </style>
    <div class="item">
        <div class="right">
            <img src="public/images/product2.jpg">
        </div>
        <div class="left">
            <h4>گوشی اپل مدل xyz
                <img class="edit" src="public/images/Edit.gif">
                <img class="delete" src="public/images/Delete.gif">
            </h4>
            <p class="description">توضیحات در مورد این محصول توسط کاربر...</p>
        </div>
    </div>
</section>
<script>
    $('.favorites ul li a').hover(function () {
        $('.edit', this).fadeIn(200);
    }, function () {
        $('.edit', this).fadeOut(200);
    });
</script>