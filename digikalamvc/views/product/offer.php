<style>
    .offer {
        height: 60px;
        background: #FFF5F5 url(public/images/amazing-offer.png) no-repeat 97% center;
        position: relative;
        border-radius: 5px
    }

    .flipTimer {
        right: -130px;
        transform: scale(.3);
        position: absolute;
        top: -21px;
        left: -165%
    }

    .flipTimer, .flipTimer div {
        direction: ltr !important
    }

    .offer .discount {
        width: 180px;
        height: 28px;
        display: block;
        position: absolute;
        left: 250px;
        top: 16px;
        border-radius: 3px;
        overflow: hidden;
        margin-left: -215px;
    }

    .offer .discount .right {
        width: 105px;
        height: 100%;
        background: red;
        float: right;
        display: block
    }

    .offer .discount .left {
        width: 75px;
        height: 100%;
        float: right;
        display: block;
        background: #E54949 no-repeat
    }

    .offer .discount .right .number {
        font-size: 17pt;
        color: #FFF;
        line-height: 20px;
        padding-right: 10px
    }

    .offer .discount .right .tooman {
        font-size: 9pt;
        color: #FFF;
        width: 42px;
        display: inline-block;
        line-height: 11px;
        top: 4px;
        margin-right: 18px;
        position: relative;
        height: 13px
    }

    .offer .left span {
        color: #FFF;
        font-family: yekan, serif;
        font-size: 10.5pt;
        padding-right: 21px;
        line-height: 20px;
        left: -1px;
        text-align: center
    }
</style>
<div class="offer">
        <span class="discount">
             <span class="right yekan">
                 <span class="number">46</span>
                 <span class="tooman">هزار تومان</span>
             </span>
             <span class="left yekan">
              <span>تخفیف</span>
             </span>
        </span>
    <div class="flipTimer">
        <div class="hours"></div>
        <div class="minutes"></div>
        <div class="seconds"></div>
    </div>
</div>
<script>
    $('.flipTimer').flipTimer({
        direction: 'down',
        date: 'July 03,2016 16:51:45',
        callback: function () {
            $('.slider2_content_right').css('opacity', .4);
            $('.slider2_content_left').css('opacity', .4);
            $('.slider2_finished').fadeIn(200);
        };
    });
</script>
