<div class="main">
    <div class="banner_top">
        <img src="public/images/banner.jpg">
    </div>
    <?php
    require('sidebar_right.php');
    ?>
    <div class="content" style="width: 890px;float: left;margin-top: 10px">
        <?php
        require('slider1.php');
        require('slider2.php');
        require('services_feature.php');
        require('only_in_digikala.php');
        require('direct_access.php');
        require('most_viewed.php');
        require('most_saled.php');
        require('last_products.php');
        ?>
    </div>
</div>
<script>
    function sliderscroll(direction, tag) {
        var span_tag = $(tag);
        var sliderScroll = span_tag.parents('.sliderscroll');
        var sliderScrollTagUi = sliderScrollTag.find('.sliderscroll_main ul');
        var sliderScrollItems = sliderScrollUl.find('li');
        var sliderScrollItemsNumbers = sliderScrollItems.length('li');
        var sliderScrollNumbers = Math.ceil(sliderScrollItemsNumbers / 4);
        var maxNegativeMargin = -(sliderScrollNumbers - 1) * 780;
        sliderScrollUl.css('width', sliderScrollItemsNumbers * 195);
        var marginRightNew;
        var marginRightOld = sliderScrollUl.css('margin-right');
        marginRightOld = parseFloat(marginRightOld);
        if (direction === 'left') {
            marginRightNew = marginRightOld - 780;
        }
        if (direction === 'right') {
            marginRightNew = marginRightOld + 780;
        }
        alert(marginRightNew)
        if (marginRightNew < maxNegativeMargin) {
            marginRightNew = 0;
        }
        if (marginRightNew > 0) {
            marginRightNew = maxNegativeMargin;
        }
        sliderScrollUl.animate({'margin-right': marginRightNew}, 1000)
    }
</script>

