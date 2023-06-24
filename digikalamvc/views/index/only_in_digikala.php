<style>
    .sliderscroll {
        height: 310px;
        width: 890px;
        box-shadow: 0 1px 2px rgba(0, 0, 0, .19);
        margin-top: 10px;
        background: #FFF;
        border-radius: 4px;
        overflow: hidden
    }

    .sliderscroll h3 {
        background: #F7F9FA;
        height: 35px;
        padding-right: 10px;
        padding-top: 7px;
        font-family: yekan, serif;
        font-size: 10.5pt;
        margin: 0;
        font-weight: normal
    }

    .sliderscroll_content {
        height: 268px
    }

    .sliderscroll_prev, .sliderscroll_next {
        width: 55px;
        height: 100%;
        float: right
    }

    .sliderscroll_main {
        width: 780px;
        height: 100%;
        float: right;
        overflow: hidden
    }

    .sliderscroll_prev .prev {
        width: 15px;
        right: 15px;
        height: 42px;
        background: url(public/images/slices.png) no-repeat;
        background-position: -852px -677px;
        display: block;
        position: relative;
        top: 100px;
        cursor: pointer
    }

    .sliderscroll_next .next {
        width: 15px;
        right: 15px;
        height: 42px;
        background: url(public/images/slices.png) no-repeat;
        background-position: -812px -677px;
        display: block;
        position: relative;
        top: 100px;
        cursor: pointer
    }

    .sliderscroll .sliderscroll_main ul {
        padding: 0;
        height: 100%
    }

    .sliderscroll .sliderscroll_main ul li {
        padding: 0;
        width: 195px;
        height: 100%;
        float: right
    }

    .sliderscroll .sliderscroll_main ul li a {
        padding: 0;
        display: block;
        height: 100%;
        text-align: center
    }

    .sliderscroll .price {
        color: green;
        font-size: 13pt
    }

    .sliderscroll p {
        text-align: center;
        margin-top: 1px;
        margin-bottom: 1px
    }
</style>
<div class="sliderscroll">
    <h3>
        فقط در دیجی کالا
    </h3>
    <div class="sliderscroll_content">
        <div class="sliderscroll_prev">
                    <span class="prev" onclick="sliderscroll('right',this)">
                    </span>
        </div>
        <div class="sliderscroll_main">
            <ul>
                <li>
                    <a>
                        <img src="public/images/sliderscroll_1.jpg">
                        <img src="public/images/exclusive-blue.png">
                        <p class="yekan fontsm">
                            لپ تاپ سونی
                        </p>
                        <p class="yekan price">
                            1,200,000
                        </p>
                    </a>
                </li>
                <li>
                    <a>
                        <img src="public/images/scrollslider_2.jpg">
                        <img src="public/images/exclusive-blue.png">
                        <p class="yekan fontsm">
                            لپ تاپ acer
                        </p>
                        <p class="yekan price">
                            1,200,000
                        </p>
                    </a>
                </li>
                <li>
                    <a>
                        <img src="public/images/scrollslider_3.jpg">
                        <img src="public/images/exclusive-blue.png">
                        <p class="yekan fontsm">
                            لپ تاپ asus
                        </p>
                        <p class="yekan price">
                            1,200,000
                        </p>
                    </a>
                </li>
                <li>
                    <a>
                        <img src="public/images/scrollslider_4.jpg">
                        <img src="public/images/exclusive-blue.png">
                        <p class="yekan fontsm">
                            لپ تاپ clicksite.ir
                        </p>
                        <p class="yekan price">
                            1,200,000
                        </p>
                    </a>
                </li>
                <li>
                    <a>
                        <img src="public/images/scrollslider_5.jpg">
                        <img src="public/images/exclusive-blue.png">
                        <p class="yekan fontsm">
                            لپ تاپ lenovo
                        </p>
                        <p class="yekan price">
                            1,200,000
                        </p>
                    </a>
                </li>
                <li>
                    <a>
                        <img src="public/images/scrollslider_5.jpg">
                        <img src="public/images/exclusive-blue.png">
                        <p class="yekan fontsm">
                            لپ تاپ lenovo
                        </p>
                        <p class="yekan price">
                            1,200,000
                        </p>
                    </a>
                </li>
                <li>
                    <a>
                        <img src="public/images/scrollslider_5.jpg">
                        <img src="public/images/exclusive-blue.png">
                        <p class="yekan fontsm">
                            لپ تاپ lenovo
                        </p>
                        <p class="yekan price">
                            1,200,000
                        </p>
                    </a>
                </li>
                <li>
                    <a>
                        <img src="public/images/scrollslider_5.jpg">
                        <img src="public/images/exclusive-blue.png">
                        <p class="yekan fontsm">
                            لپ تاپ lenovo
                        </p>
                        <p class="yekan price">
                            1,200,000
                        </p>
                    </a>
                </li>
            </ul>
        </div>
        <div class="sliderscroll_next">
                     <span class="next" onclick="sliderscroll('left',this)">
                    </span>
        </div>
    </div>
</div>