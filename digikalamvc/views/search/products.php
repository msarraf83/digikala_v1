<style>
    .pagination {
        float: right;
        width: 100%;
        margin-top: -23px
    }

    .pagination .prev {
        font-family: yekan, serif;
        font-size: 9.3pt;
        float: left;
        width: 60px;
        height: 20px;
        display: block;
        border: 1px solid #EEE;
        box-shadow: 0 2px 2px rgba(0, 0, 0, .2);
        border-radius: 3px;
        text-align: center;
        background: rgb(205, 205, 205);
        background: linear-gradient(90deg, rgba(205, 205, 205, 1) 0%, rgba(256, 256, 256, 1) 100%);
        background: -webkit-linear-gradient(90deg, rgba(205, 205, 205, 1) 0%, rgba(256, 256, 256, 1) 100%);
        background: -moz-linear-gradient(90deg, rgba(205, 205, 205, 1) 0%, rgba(256, 256, 256, 1) 100%);
        background: -o-linear-gradient(90deg, rgba(205, 205, 205, 1) 0%, rgba(256, 256, 256, 1) 100%);
        background: -ms-linear-gradient(90deg, rgba(205, 205, 205, 1) 0%, rgba(256, 256, 256, 1) 100%)
    }

    .pagination .next {
        font-family: yekan, serif;
        font-size: 9.3pt;
        float: left;
        width: 60px;
        height: 20px;
        display: block;
        border: 1px solid #EEE;
        box-shadow: 0 2px 2px rgba(0, 0, 0, .2);
        border-radius: 3px;
        text-align: center;
        background: rgb(205, 205, 205);
        background: linear-gradient(90deg, rgba(205, 205, 205, 1) 0%, rgba(256, 256, 256, 1) 100%);
        background: -webkit-linear-gradient(90deg, rgba(205, 205, 205, 1) 0%, rgba(256, 256, 256, 1) 100%);
        background: -moz-linear-gradient(90deg, rgba(205, 205, 205, 1) 0%, rgba(256, 256, 256, 1) 100%);
        background: -o-linear-gradient(90deg, rgba(205, 205, 205, 1) 0%, rgba(256, 256, 256, 1) 100%);
        background: -ms-linear-gradient(90deg, rgba(205, 205, 205, 1) 0%, rgba(256, 256, 256, 1) 100%)
    }

    .pagination ul {
        padding: 0;
        float: left
    }

    .pagination ul li {
        float: right;
        font-family: yekan, serif;
        font-size: 9.3pt;
        width: 25px;
        height: 21px;
        border: 1px solid #EEE;
        border-radius: 2px;
        margin-left: 2px;
        margin-right: 2px;
        text-align: center;
        background: rgb(205, 205, 205);
        background: linear-gradient(90deg, rgba(205, 205, 205, 1) 0%, rgba(256, 256, 256, 1) 100%);
        background: -webkit-linear-gradient(90deg, rgba(205, 205, 205, 1) 0%, rgba(256, 256, 256, 1) 100%);
        background: -moz-linear-gradient(90deg, rgba(205, 205, 205, 1) 0%, rgba(256, 256, 256, 1) 100%);
        background: -o-linear-gradient(90deg, rgba(205, 205, 205, 1) 0%, rgba(256, 256, 256, 1) 100%);
        background: -ms-linear-gradient(90deg, rgba(205, 205, 205, 1) 0%, rgba(256, 256, 256, 1) 100%)
    }

    .pagination ul li .line {

    }
</style>
<div class="pagination">
    <span class="next">صفحه بعد</span>
    <ul>
        <li>1</li>
        <li>2</li>
        <li>3</li>
        <li>4</li>
        <li>5</li>
        <li>--</li>
        <li>9</li>
        <li>10</li>
    </ul>
    <span class="prev">صفحه قبل</span>
</div>
<style>
    .products {
        float: right;
        margin-top: 30px;
        margin-right: -10px;
        width: 101%
    }

    .products ul {
        padding: 0;
        width: 100%
    }

    .products ul li {
        width: 210px;
        height: 300px;
        border: 1px solid #EEE;
        margin-right: 10px;
        float: right;
        margin-bottom: 8px;
        border-radius: 5px;
        overflow: hidden
    }

    .products ul li:hover {
        box-shadow: -2px 3px 0 0 rgba(0, 0, 0, .1);
        transition: all .3s ease-in-out
    }

    .products ul li a {
        display: block;
        width: 100%
    }

    .products .colors {
        text-align: center
    }

    .products .colors .color {
        width: 12px;
        height: 12px;
        display: inline-block;
        border: 1px solid #EEE;
        border-radius: 100%
    }

    .text_center {
        text-align: center
    }

    .gray {
        width: 55px;
        height: 9px;
        background: url(public/images/stars.png) repeat scroll 0 -9px;
        margin: 0 auto;
        position: relative
    }

    .red {
        width: 50%;
        height: 9px;
        background: url(public/images/stars.png) repeat scroll 0 0;
        margin: 0 auto;
        position: absolute;
        left: 0;
        top: 0
    }

    .products .title {
        font-size: 10pt;
        text-align: left;
        padding: 0 6px
    }

    .price_red {
        color: red;
        font-size: 10pt;
        text-decoration: line-through;
        margin: 0;
        margin-top: 5px
    }

    .price_green {
        color: green;
        font-size: 10pt;
        margin: 0
    }

    .price {
        padding: 0 6px;
        position: relative
    }

    .addtocart {
        width: 30px;
        height: 30px;
        display: block;
        background: url(public/images/addtocart-min.png) no-repeat scroll 0 0;
        position: absolute;
        left: 18px;
        top: 7px
    }

    .products .description {
        height: 208px;
        display: none;
        font-family: yekan, serif;
        font-size: 10pt
    }

    .display1 li {
        width: 100% !important
    }

    .display1 .right {
        float: right;
        width: 217px
    }

    .display1 .left {
        float: left;
        width: 660px
    }

    .display1 .title {
        text-align: right !important;
        font-size: 14pt !important
    }

    .display1 .description {
        display: block !important
    }
</style>
<div class="products">
    <ul>
        <li>
            <a>
                <div class="right">
                    <div class="text_center" style="margin-top:4px">
                        <img src="public/images/product1.jpg">
                    </div>
                    <div class="colors text_center" style="margin-top: 5px">
                        <span class="color" style="background: silver"></span>
                        <span class="color" style="background: gold"></span>
                        <span class="color" style="background: #FFF"></span>
                    </div>
                    <div class="stars text_center">
                        <div class="star">
                            <div class="gray">
                                <div class="red"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="left">
                    <div class="title yekan">Apple</div>
                    <div class="description">توضیحات محصول</div>
                    <div class="price yekan">
                        <p class="yekan price_red">200,000 تومان</p>
                        <p class="yekan price_green">100,000 تومان</p>
                        <span class="addtocart"></span>
                    </div>
                </div>
            </a>
        </li>
        <li>
            <a>
                <div class="right">
                    <div class="text_center" style="margin-top:4px">
                        <img src="public/images/product2.jpg">
                    </div>
                    <div class="colors text_center" style="margin-top: 5px">
                        <span class="color" style="background: silver"></span>
                        <span class="color" style="background: gold"></span>
                        <span class="color" style="background: #FFF"></span>
                    </div>
                    <div class="stars text_center">
                        <div class="star">
                            <div class="gray">
                                <div class="red"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="left">
                    <div class="title yekan">Apple</div>
                    <div class="description">توضیحات محصول</div>
                    <div class="price yekan">
                        <p class="yekan price_red">200,000 تومان</p>
                        <p class="yekan price_green">100,000 تومان</p>
                        <span class="addtocart"></span>
                    </div>
                </div>
            </a>
        </li>
        <li>
            <a>
                <div class="right">
                    <div class="text_center" style="margin-top:4px">
                        <img src="public/images/product3.jpg">
                    </div>
                    <div class="colors text_center" style="margin-top: 5px">
                        <span class="color" style="background: silver"></span>
                        <span class="color" style="background: gold"></span>
                        <span class="color" style="background: #FFF"></span>
                    </div>
                    <div class="stars text_center">
                        <div class="star">
                            <div class="gray">
                                <div class="red"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="left">
                    <div class="title yekan">Apple</div>
                    <div class="description">توضیحات محصول</div>
                    <div class="price yekan">
                        <p class="yekan price_red">200,000 تومان</p>
                        <p class="yekan price_green">100,000 تومان</p>
                        <span class="addtocart"></span>
                    </div>
                </div>
            </a>
        </li>
        <li>
            <a>
                <div class="right">
                    <div class="text_center" style="margin-top:4px">
                        <img src="public/images/product5.jpg" style="width: 180px;height: 180px">
                    </div>
                    <div class="colors text_center" style="margin-top: 5px">
                        <span class="color" style="background: silver"></span>
                        <span class="color" style="background: gold"></span>
                        <span class="color" style="background: #FFF"></span>
                    </div>
                    <div class="stars text_center">
                        <div class="star">
                            <div class="gray">
                                <div class="red"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="left">
                    <div class="title yekan">Apple</div>
                    <div class="description">توضیحات محصول</div>
                    <div class="price yekan">
                        <p class="yekan price_red">200,000 تومان</p>
                        <p class="yekan price_green">100,000 تومان</p>
                        <span class="addtocart"></span>
                    </div>
                </div>
            </a>
        </li>
        <li>
            <a>
                <div class="right">
                    <div class="text_center" style="margin-top:4px">
                        <img src="public/images/product1.jpg">
                    </div>
                    <div class="colors text_center" style="margin-top: 5px">
                        <span class="color" style="background: silver"></span>
                        <span class="color" style="background: gold"></span>
                        <span class="color" style="background: #FFF"></span>
                    </div>
                    <div class="stars text_center">
                        <div class="star">
                            <div class="gray">
                                <div class="red"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="left">
                    <div class="title yekan">Apple</div>
                    <div class="description">توضیحات محصول</div>
                    <div class="price yekan">
                        <p class="yekan price_red">200,000 تومان</p>
                        <p class="yekan price_green">100,000 تومان</p>
                        <span class="addtocart"></span>
                    </div>
                </div>
            </a>
        </li>
        <li>
            <a>
                <div class="right">
                    <div class="text_center" style="margin-top:4px">
                        <img src="public/images/product2.jpg">
                    </div>
                    <div class="colors text_center" style="margin-top: 5px">
                        <span class="color" style="background: silver"></span>
                        <span class="color" style="background: gold"></span>
                        <span class="color" style="background: #FFF"></span>
                    </div>
                    <div class="stars text_center">
                        <div class="star">
                            <div class="gray">
                                <div class="red"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="left">
                    <div class="title yekan">Apple</div>
                    <div class="description">توضیحات محصول</div>
                    <div class="price yekan">
                        <p class="yekan price_red">200,000 تومان</p>
                        <p class="yekan price_green">100,000 تومان</p>
                        <span class="addtocart"></span>
                    </div>
                </div>
            </a>
        </li>
        <li>
            <a>
                <div class="right">
                    <div class="text_center" style="margin-top:4px">
                        <img src="public/images/product3.jpg">
                    </div>
                    <div class="colors text_center" style="margin-top: 5px">
                        <span class="color" style="background: silver"></span>
                        <span class="color" style="background: gold"></span>
                        <span class="color" style="background: #FFF"></span>
                    </div>
                    <div class="stars text_center">
                        <div class="star">
                            <div class="gray">
                                <div class="red"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="left">
                    <div class="title yekan">Apple</div>
                    <div class="description">توضیحات محصول</div>
                    <div class="price yekan">
                        <p class="yekan price_red">200,000 تومان</p>
                        <p class="yekan price_green">100,000 تومان</p>
                        <span class="addtocart"></span>
                    </div>
                </div>
            </a>
        </li>
        <li>
            <a>
                <div class="right">
                    <div class="text_center" style="margin-top:4px">
                        <img src="public/images/product5.jpg" style="width: 180px;height: 180px">
                    </div>
                    <div class="colors text_center" style="margin-top: 5px">
                        <span class="color" style="background: silver"></span>
                        <span class="color" style="background: gold"></span>
                        <span class="color" style="background: #FFF"></span>
                    </div>
                    <div class="stars text_center">
                        <div class="star">
                            <div class="gray">
                                <div class="red"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="left">
                    <div class="title yekan">Apple</div>
                    <div class="description">توضیحات محصول</div>
                    <div class="price yekan">
                        <p class="yekan price_red">200,000 تومان</p>
                        <p class="yekan price_green">100,000 تومان</p>
                        <span class="addtocart"></span>
                    </div>
                </div>
            </a>
        </li>
        <li>
            <a>
                <div class="right">
                    <div class="text_center" style="margin-top:4px">
                        <img src="public/images/product1.jpg">
                    </div>
                    <div class="colors text_center" style="margin-top: 5px">
                        <span class="color" style="background: silver"></span>
                        <span class="color" style="background: gold"></span>
                        <span class="color" style="background: #FFF"></span>
                    </div>
                    <div class="stars text_center">
                        <div class="star">
                            <div class="gray">
                                <div class="red"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="left">
                    <div class="title yekan">Apple</div>
                    <div class="description">توضیحات محصول</div>
                    <div class="price yekan">
                        <p class="yekan price_red">200,000 تومان</p>
                        <p class="yekan price_green">100,000 تومان</p>
                        <span class="addtocart"></span>
                    </div>
                </div>
            </a>
        </li>
        <li>
            <a>
                <div class="right">
                    <div class="text_center" style="margin-top:4px">
                        <img src="public/images/product2.jpg">
                    </div>
                    <div class="colors text_center" style="margin-top: 5px">
                        <span class="color" style="background: silver"></span>
                        <span class="color" style="background: gold"></span>
                        <span class="color" style="background: #FFF"></span>
                    </div>
                    <div class="stars text_center">
                        <div class="star">
                            <div class="gray">
                                <div class="red"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="left">
                    <div class="title yekan">Apple</div>
                    <div class="description">توضیحات محصول</div>
                    <div class="price yekan">
                        <p class="yekan price_red">200,000 تومان</p>
                        <p class="yekan price_green">100,000 تومان</p>
                        <span class="addtocart"></span>
                    </div>
                </div>
            </a>
        </li>
        <li>
            <a>
                <div class="right">
                    <div class="text_center" style="margin-top:4px">
                        <img src="public/images/product3.jpg">
                    </div>
                    <div class="colors text_center" style="margin-top: 5px">
                        <span class="color" style="background: silver"></span>
                        <span class="color" style="background: gold"></span>
                        <span class="color" style="background: #FFF"></span>
                    </div>
                    <div class="stars text_center">
                        <div class="star">
                            <div class="gray">
                                <div class="red"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="left">
                    <div class="title yekan">Apple</div>
                    <div class="description">توضیحات محصول</div>
                    <div class="price yekan">
                        <p class="yekan price_red">200,000 تومان</p>
                        <p class="yekan price_green">100,000 تومان</p>
                        <span class="addtocart"></span>
                    </div>
                </div>
            </a>
        </li>
        <li>
            <a>
                <div class="right">
                    <div class="text_center" style="margin-top:4px">
                        <img src="public/images/product5.jpg" style="width: 180px;height: 180px">
                    </div>
                    <div class="colors text_center" style="margin-top: 5px">
                        <span class="color" style="background: silver"></span>
                        <span class="color" style="background: gold"></span>
                        <span class="color" style="background: #FFF"></span>
                    </div>
                    <div class="stars text_center">
                        <div class="star">
                            <div class="gray">
                                <div class="red"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="left">
                    <div class="title yekan">Apple</div>
                    <div class="description">توضیحات محصول</div>
                    <div class="price yekan">
                        <p class="yekan price_red">200,000 تومان</p>
                        <p class="yekan price_green">100,000 تومان</p>
                        <span class="addtocart"></span>
                    </div>
                </div>
            </a>
        </li>
        <li>
            <a>
                <div class="right">
                    <div class="text_center" style="margin-top:4px">
                        <img src="public/images/product1.jpg">
                    </div>
                    <div class="colors text_center" style="margin-top: 5px">
                        <span class="color" style="background: silver"></span>
                        <span class="color" style="background: gold"></span>
                        <span class="color" style="background: #FFF"></span>
                    </div>
                    <div class="stars text_center">
                        <div class="star">
                            <div class="gray">
                                <div class="red"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="left">
                    <div class="title yekan">Apple</div>
                    <div class="description">توضیحات محصول</div>
                    <div class="price yekan">
                        <p class="yekan price_red">200,000 تومان</p>
                        <p class="yekan price_green">100,000 تومان</p>
                        <span class="addtocart"></span>
                    </div>
                </div>
            </a>
        </li>
        <li>
            <a>
                <div class="right">
                    <div class="text_center" style="margin-top:4px">
                        <img src="public/images/product2.jpg">
                    </div>
                    <div class="colors text_center" style="margin-top: 5px">
                        <span class="color" style="background: silver"></span>
                        <span class="color" style="background: gold"></span>
                        <span class="color" style="background: #FFF"></span>
                    </div>
                    <div class="stars text_center">
                        <div class="star">
                            <div class="gray">
                                <div class="red"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="left">
                    <div class="title yekan">Apple</div>
                    <div class="description">توضیحات محصول</div>
                    <div class="price yekan">
                        <p class="yekan price_red">200,000 تومان</p>
                        <p class="yekan price_green">100,000 تومان</p>
                        <span class="addtocart"></span>
                    </div>
                </div>
            </a>
        </li>
        <li>
            <a>
                <div class="right">
                    <div class="text_center" style="margin-top:4px">
                        <img src="public/images/product3.jpg">
                    </div>
                    <div class="colors text_center" style="margin-top: 5px">
                        <span class="color" style="background: silver"></span>
                        <span class="color" style="background: gold"></span>
                        <span class="color" style="background: #FFF"></span>
                    </div>
                    <div class="stars text_center">
                        <div class="star">
                            <div class="gray">
                                <div class="red"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="left">
                    <div class="title yekan">Apple</div>
                    <div class="description">توضیحات محصول</div>
                    <div class="price yekan">
                        <p class="yekan price_red">200,000 تومان</p>
                        <p class="yekan price_green">100,000 تومان</p>
                        <span class="addtocart"></span>
                    </div>
                </div>
            </a>
        </li>
        <li>
            <a>
                <div class="right">
                    <div class="text_center" style="margin-top:4px">
                        <img src="public/images/product5.jpg" style="width: 180px;height: 180px">
                    </div>
                    <div class="colors text_center" style="margin-top: 5px">
                        <span class="color" style="background: silver"></span>
                        <span class="color" style="background: gold"></span>
                        <span class="color" style="background: #FFF"></span>
                    </div>
                    <div class="stars text_center">
                        <div class="star">
                            <div class="gray">
                                <div class="red"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="left">
                    <div class="title yekan">Apple</div>
                    <div class="description">توضیحات محصول</div>
                    <div class="price yekan">
                        <p class="yekan price_red">200,000 تومان</p>
                        <p class="yekan price_green">100,000 تومان</p>
                        <span class="addtocart"></span>
                    </div>
                </div>
            </a>
        </li>
    </ul>
</div>