<script src="public/public/js/jquery.mCustomScrollbar.js"></script>
<link href="public/js/jquery.mCustomScrollbar.css" rel="stylesheet">
<script src="public/3d/jsc3d.js"></script>
<script src="public/3d/jsc3d.touch.js"></script>
<script src="public/3d/jsc3d.webgl.js"></script>

<style>
    .product_gallery {
        width: 900px;
        height: 584px;
        position: fixed;
        background: #FFF;
        right: 0;
        left: 0;
        margin: auto;
        top: 21px;
        z-index: 6;
        border-radius: 5px;
        display: none
    }

    .dark {
        width: 100%;
        position: fixed;
        background: rgba(0, 0, 0, .3);
        top: 0;
        left: 0;
        height: 100%;
        z-index: 5;
        display: none
    }

    .product_gallery h4 {
        font-family: yekan, serif;
        font-size: 11pt;
        background: #EEE;
        padding: 8px;
        margin: 10px;
        border-radius: 5px;
        position: relative;
        border: 1px solid #e4eae2;
        box-shadow: 0 2px 3px rgba(0, 0, 0, .2)
    }

    .product_gallery .close {
        width: 28px;
        height: 28px;
        background: url(public/images/slices.png) no-repeat scroll -134px -122px;
        position: absolute;
        left: 4px;
        top: 4px;
        border-radius: 100%;
        border: 1px solid #F7F8FA;
        cursor: pointer;
        box-shadow: 0 2px 3px rgba(0, 0, 0, .2)
    }

    .product_gallery .right {
        width: 700px;
        float: right;
        height: 515px;
        position: absolute;
        top: 115px;
        left: 148px
    }

    .product_gallery .right .item {
        width: 700px;
        float: right;
        height: 100%
    }

    .product_gallery .right img {
        max-width: 100%;
        max-height: 100%;
        border-radius: 5px
    }

    .product_gallery .left {
        width: 197px;
        float: left;
        height: 524px;
        border-right: 1px solid #CCC;
        overflow-y: auto;
        box-shadow: 0 2px 3px rgba(0, 0, 0, .15);
        border-radius: 5px
    }

    .product_gallery .left ul {
        padding: 0;
        width: 100%
    }

    .product_gallery .left ul li {
        height: 130px;
        border: 1px solid #CCC;
        border-radius: 10px;
        text-align: center;
        cursor: pointer;
        opacity: .6;
    }

    .product_gallery .left ul li.active {
        opacity: .6 !important;
    }

    .product_gallery .left ul li img {
        margin: 0 auto;
        margin-top: 7px;
        max-width: 100%;
        max-height: 100%;
        border-radius: 5px;
    }

    .product_gallery .right #cv {
        margin: auto;
        right: 133px;
        position: relative;
    }

    .product_gallery .right .item {
        display: none
    }

    .icon3d {
        width: 28px;
        height: 28px;
        background: url(public/images/slices.png) no-repeat scroll -363px -117px;
        display: block;
        position: absolute;
        left: 4px;
        bottom: 4px
    }

</style>
<div class="product_gallery">
    <h4>گوشی سامسونگ مدل xyz
        <span class="close"></span>
    </h4>
    <div class="right">
        <canvas id="cv" width="420" height="320"></canvas>
        <img class="mainimage" src="public/">
    </div>
    <div class="left">
        <ul>
            <li data-main-image="" style="position: relative">
                <img src="public/images/note21_1_1.jpg">
                <span class="icon3d"></span>
            </li>
            <li data-main-image="images/note21_1.jpg">
                <img src="public/images/note21_1_1.jpg">
            </li>
            <li data-main-image="images/note21_2.jpg">
                <img src="public/images/note21_2_2.jpg">
            </li>
            <li data-main-image="images/note21_3.jpg">
                <img src="public/images/note21_3_3.jpg">
            </li>
            <li data-main-image="images/note21_4.jpg">
                <img src="public/images/note21_4_4.jpg">
            </li>
            <li data-main-image="images/note21_5.jpg">
                <img src="public/images/note21_5_5.jpg">
            </li>
            <li data-main-image="images/note21_6.jpg">
                <img src="public/images/note21_6_6.jpg">
            </li>
            <li data-main-image="images/note21_7.jpg">
                <img src="public/images/note21_7_7.jpg">
            </li>
            <li data-main-image="images/note21_8.jpg">
                <img src="public/images/note21_8_8.jpg">
            </li>
            <li data-main-image="images/note21_9.jpg">
                <img src="public/images/note21_9_9.jpg">
            </li>
            <li data-main-image="images/note21_10.jpg">
                <img src="public/images/note21_10_10.jpg">
            </li>
        </ul>
    </div>
</div>
<div class="dark"></div>
<script>
    var canvasTag = document.getElementById('cv')
    var viewer = new JSC3D.Viewer(canvasTag, {
        SceneUrl: 'public/samsung/galaxys6.png',
        InitRotationX: -100,
        InitRotationY: -100,
        InitRotationZ: 0,
        RenderMode: 'texturesmooth'
    })
    viewer.init()
    viewer.update()
</script>
<script>
    var product_gallery = $('.product_gallery')
    var product_gallery_items = product_gallery.find('.item')

    function showGallery(imageUrl, index) {
        product_gallery_thumbnails.removeClass('active')
        product_gallery_thumbnails.eq(index).addClass('active')
        if (imageUrl.length > 0) {
            product_gallery.find('.mainimage').attr('src', imageUrl)
            $('#cv').fadeOut(0)
            $('.mainimage').fadeIn(0)
        } else {
            $('.mainimage').fadeOut(0)
            $('#cv').fadeIn(100)
        }
    }
    var product_gallery_thumbnails = product_gallery.find('.left ul li')
    product_gallery_thumbnails.click(function () {
        var index = $(this).index()
        var mainImageUrl = $(this).attr('data-main-image')
        showGallery(mainImageUrl, index)
    })
    product_gallery.find('.close').click(function () {
        product_gallery.fadeOut(200)
        $('.dark').fadeOut(200)
    })
    $('.gallery ul li').click(function () {
        $('.dark').fadeIn(200)
        product_gallery.fadeIn(200)
        var index = $(this).index()
        if (index < 0) {
            index = 0
        }
        var mainImageUrl = $(this).attr('data-main-image')
        showGallery(mainImageUrl, index)
    })
    $('.product_gallery .left').mCustomScrollbar({
        setWidth: false,
        setHeight: false,
        setTop: 0,
        setLeft: 0,
        axis: "y",
        scrollbarPosition: "inside",
        scrollInertia: 950,
        autoDraggerLength: true,
        autoHideScrollbar: true,
        autoExpandScrollbar: false,
        alwaysShowScrollbar: 0,
        snapAmount: null,
        snapOffset: 0,
        mouseWheel: {
            enable: true,
            scrollAmount: "auto",
            axis: "y",
            preventDefault: false,
            deltaFactor: "auto",
            normalizeDelta: false,
            invert: false,
            disableOver: ["select", "option", "keygen", "datalist", "textarea"]
        },
        scrollButtons: {
            enable: true,
            scrollType: "stepless",
            scrollAmount: "auto"
        },
        keyboard: {
            enable: true,
            scrollType: "stepless",
            scrollAmount: "auto"
        },
        contentTouchScroll: 25,
        advanced: {
            autoExpandHorizontalScroll: false,
            autoScrollOnFocus: "input,textarea,select,button,datalist,keygen,a[tabindex],area,object,[contenteditable='true']",
            updateOnContentResize: true,
            updateOnImageLoad: true,
            updateOnSelectorChange: false,
            releaseDraggableSelectors: false
        },
        theme: "3d-thick-dark",
        callbacks: {
            onInit: false,
            onScrollStart: false,
            onScroll: false,
            onTotalScroll: false,
            onTotalScrollBack: false,
            whileScrolling: false,
            onTotalScrollOffset: 0,
            onTotalScrollBackOffset: 0,
            alwaysTriggerOffsets: true,
            onOverflowY: false,
            onOverflowX: false,
            onOverflowYNone: false,
            onOverflowXNone: false
        },
        live: false,
        liveSelector: null
    })
</script>