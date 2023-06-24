<style>
    .slider {
        height: 310px;
        border-radius: 4px;
        overflow: hidden;
        box-shadow: 0 1px 3px rgba(0, 0, 0, .3);
        background: #FFF
    }

    .slider_img {
        height: 260px;
        width: 890px
    }

    .slider_img img {
        height: 260px;
        width: 100%
    }

    .slider_img a {
        display: block
    }

    .slider_navigator {
        height: 50px;
        background: rgba(0, 0, 0, .5)
    }

    .slider .prev {
        width: 19px;
        height: 33px;
        display: block;
        position: absolute;
        top: 130px;
        right: 15px;
        background: url(public/images/arrow_slider.png) no-repeat;
        background-position: 0 -33px;
        cursor: pointer;
        z-index: 2
    }

    .slider .next {
        width: 19px;
        height: 33px;
        display: block;
        position: absolute;
        top: 130px;
        left: 15px;
        background: url(public/images/arrow_slider.png) no-repeat;
        cursor: pointer;
        z-index: 2
    }

    .slider .slider_navigator ul {
        height: 100%;
        padding: 0
    }

    .slider .slider_navigator ul li {
        width: 178px;
        height: 100%;
        float: right
    }

    .slider .slider_navigator ul li a {
        display: block;
        width: 100%;
        height: 100%;
        text-align: center;
        line-height: 45px;
        color: #FFF;
        cursor: pointer
    }

    .slider .slider_navigator .active > a {
        background: #FFF;
        color: #000;
        position: relative
    }

    .slider .slider_navigator .active > a::after {
        content: "";
        position: absolute;
        top: -13px;
        right: 0;
        left: 0;
        margin: 0 auto;
        width: 0;
        height: 0;
        border-style: solid;
        border-width: 0 12.5px 13px 12.5px;
        border-color: transparent transparent #FFF transparent
    }
</style>
<div class="slider" style="position: relative">
    <span class="prev"></span>
    <span class="next"></span>
    <div class="slider_img">
        <a class="item">
            <img src="public/images/slider1.jpg">
        </a>
        <a class="item">
            <img src="public/images/slider2.jpg">
        </a>
        <a class="item">
            <img src="public/images/slider3.jpg">
        </a>
        <a class="item">
            <img src="public/images/slider4.jpg">
        </a>
        <a class="item">
            <img src="public/images/slider5.jpg">
        </a>
    </div>
    <div class="slider_navigator">
        <ul>
            <li>
                <a class="yekan fontsm">
                    محصولات کالای خواب
                </a>
            </li>
            <li>
                <a class="yekan fontsm">
                    لواز جانبی دوربین
                </a>
            </li>
            <li>
                <a class="yekan fontsm">
                    سری جدید vaio
                </a>
            </li>
            <li>
                <a class="yekan fontsm">
                    کتب معنوی
                </a>
            </li>
            <li>
                <a class="yekan fontsm">
                    لوازم خانگی
                </a>
            </li>
        </ul>
    </div>
</div>
<script>
    $('.next').click(function () {
        sliderscroll('left');
    })
    $('.prev').click(function () {
        sliderscroll('right');
    })
    var sliderTag = $('.slider');
    var sliderItems = sliderTag.find('.item');
    var numItems = sliderItems.length;
    var nextSlide = 1;
    var timeOut = 5000;
    var sliderNavigators = sliderTag.find('.slider_navigator ul li');

    function slider() {
        if (nextSlide > numItems) {
            nextSlide = 1;
        }
        if (nextSlide < 1) {
            nextSlide = numItems;
        }
        sliderItems.fadeOut(0);
        sliderItems.eq(nextSlide - 1).fadeIn(100);
        sliderNavigators.removeClass('active');
        sliderNavigators.eq(nextSlide - 1).addClass('active');
        nextSlide++;
    }

    slider();
    var sliderInterval = setInterval(slider, timeOut);
    sliderTag.mouseleave(function () {
        clearInterval(sliderInterval);
        sliderInterval = setInterval(slider, timeOut);
    });

    function goTonext() {
        slider();
    }

    $('.slider .next').click(function () {
        clearInterval(sliderInterval);
        goTonext();
    });

    function goToprev() {
        nextSlide = nextSlide - 2;
        slider();
    }

    $('.slider .prev').click(function () {
        clearInterval(sliderInterval);
        goToprev();
    });

    function goToSlide(index) {
        nextSlide = index;
        slider();
    }

    $('.slider .slider_navigator li').hover(function () {
        clearInterval(sliderInterval);
        var index = $(this).index();
        goToSlide(index + 1);
    }, function () {
    });
    $('button').click(function () {
        slider();
    });
</script>