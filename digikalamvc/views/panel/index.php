<style>
    .main {
        width: 1200px;
        margin: 10px auto;
        border-radius: 5px;
        overflow: hidden
    }

    .main::after {
        content: "";
        clear: both;
        display: block
    }

    .main .box {
        font-family: yekan, serif
    }

    .box .header {
        height: 30px;
        background: #3C3C3C;
        color: #FFF;
        font-size: 11pt;
        padding-right: 10px;
        line-height: 35px
    }

    .box .content {
        background: #FFF
    }

    .box .content table {
        width: 100%
    }

    .box .content table td {
        padding: 10px
    }

    .box .content table td .title {
        font-size: 10.5pt;
        color: darkblue
    }

    .box .content table td .value {
        font-size: 10.5pt
    }
</style>
<div class="main">
    <?php
    require('user_profile.php');
    require('report.php');
    require('tab.php');
    ?>
</div>
<script>
    function showDetailsTr(tag) {
        var imgtag = $(tag);
        var src = imgtag.attr('src');
        if (src === 'images/orderdetailsclose.png') {
            imgtag.attr('src', 'images/orderdetailsopen.png');
        } else {
            imgtag.attr('src', 'images/orderdetailsclose.png');
        }
        var parentTr = imgtag.parents('tr');
        parentTr.next().fadeToggle(100);
    }

    $('.item_container .item h4').click(function () {
        var item = $(this).parents('.item');
        $(this).toggleClass('active');
        $('.description', item).slideToggle(200);
    });

    $('.tab li').click(function () {
        $('.tab li').removeClass('active');
        $(this).addClass('active');
        var tabchildssection = $('.tabchilds section');
        tabchildssection.fadeOut(0);
        var index = $(this).index();
        tabchildssection.eq(index).fadeIn(200);
    });
</script>
