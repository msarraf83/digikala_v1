<div class="main">
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
    </style>
    <?php
    require('offer.php');
    require('details.php');
    require('introduction.php');
    require('only_in_digikala.php');
    require('tabs.php');
    ?>
</div>
<?php
require ('gallery.php');
?>
<script>
    var timer = {};
    $('.menu_top li').hover(function () {
        var tag = $(this);
        var timerAttr = tag.attr('data-time');
        clearTimeout(timer[timerAttr]);
        timer[timerAttr] = setTimeout(function () {
            $('> ul', tag).fadeIn(0);
            tag.addClass('active-menu');
            $('> .submenu3', tag).fadeIn(0);
        }, 500);
    }, function () {
        var tag = $(this);
        var timerAttr = tag.attr('data-time');
        clearTimeout(timer[timerAttr]);
        timer[timerAttr] = setTimeout(function () {
            $('> ul', tag).fadeOut(0);
            tag.removeClass('active-menu');
            $('> .submenu3', tag).fadeOut(0);
        }, 600);
    });
</script>
