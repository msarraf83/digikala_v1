<style>
    .filter_top {
        padding: 0;
        float: right;
        width: 100%;
        margin-top: 15px
    }

    .filter_top > li {
        width: 140px;
        height: 24px;
        float: right;
        font-size: 9.5pt;
        background: #EEE;
        border-radius: 3px;
        border: 1px solid #CCC;
        margin-left: 10px;
        padding-right: 4px;
        cursor: pointer
    }

    .filter_top li img {
        float: left;
        margin-top: 5px;
        margin-left: 8px
    }

    .filter_top li {
        position: relative;
        font-size: 9.6pt
    }

    .filter_top li .options {
        display: none;
        width: 145px;
        height: 160px;
        background: #FFF;
        box-shadow: -4px 4px 3px rgba(0, 0, 0, .1);
        border-right: 1px solid #EEE;
        position: absolute;
        top: 25px;
        right: -1px;
    . line-height: 19 px;
        overflow-y: auto;
        overflow-x: hidden;
        z-index: 2
    }

    .filter_top li .options li {
        padding-right: 12px;
        cursor: pointer
    }

    .filter_top .options .square {
        width: 10px;
        height: 10px;
        display: inline-block;
        background: url(public/images/spritefiltercontrols.png) no-repeat -58px -154px;
        position: relative;
        top: 2px;
        margin-left: 3px
    }

    .square_hover {
        background: url(public/images/spritefiltercontrols.png) no-repeat -58px -205px !important
    }

    .square_selected {
        background: url(public/images/spritefiltercontrols.png) no-repeat -58px -256px !important
    }

    .filters_selected i {
        background: url(public/images/spritefiltercontrols.png) no-repeat -57px -384px !important;
        display: inline-block;
        height: 7px;
        margin-left: 4px;
        margin-right: 4px;
        width: 9px;
        cursor: pointer
    }

    .filters_selected_span {
        background: #EEE;
        font-size: 9.6pt;
        font-family: yekan, serif;
        margin-left: 10px;
        border-radius: 3px;
        box-shadow: 1px 1px 3px rgba(0, 0, 0, .15);
        margin-right: 0;
        border: 1px dashed greenyellow
    }
</style>
<div class="filters_selected" style="width: 100%"></div>
<ul class="filter_top">
    <li class="yekan">
        <span class="title">تعداد سیم کارت</span>
        <img src="public/images/sideArrow.gif">
        <div class="options">
            <ul style="padding-right: 0;padding-top: 10px">
                <li class="yekan">
                    <span class="square"></span>
                    نمایش همه
                </li>
                <div class="horizontal_row"></div>
                <li data-id="0" class="yekan">
                    <span class="square"></span>
                    یک
                </li>
                <li data-id="1" class="yekan">
                    <span class="square"></span>
                    دو
                </li>
                <li data-id="2" class="yekan">
                    <span class="square"></span>
                    سه
                </li>
                <li data-id="3" class="yekan">
                    <span class="square"></span>
                    چهار
                </li>
                <li data-id="4" class="yekan">
                    <span class="square"></span>
                    پنج
                </li>
                <li data-id="5" class="yekan">
                    <span class="square"></span>
                    شش
                </li>
                <li data-id="6" class="yekan">
                    <span class="square"></span>
                    هفت
                </li>
                <li data-id="7" class="yekan">
                    <span class="square"></span>
                    هشت
                </li>
                <li data-id="8" class="yekan">
                    <span class="square"></span>
                    نه
                </li>
                <li data-id="9" class="yekan">
                    <span class="square"></span>
                    ده
                </li>
            </ul>
        </div>
    </li>
    <li class="yekan">
        <span class="title">تعداد سیم کارت</span>
        <img src="public/images/sideArrow.gif">
        <div class="options">
            <ul style="padding-right: 0;padding-top: 10px">
                <li class="yekan">
                    <span class="square"></span>
                    نمایش همه
                </li>
                <div class="horizontal_row"></div>
                <li data-id="0" class="yekan">
                    <span class="square"></span>
                    یک
                </li>
                <li data-id="1" class="yekan">
                    <span class="square"></span>
                    دو
                </li>
                <li data-id="2" class="yekan">
                    <span class="square"></span>
                    سه
                </li>
                <li data-id="3" class="yekan">
                    <span class="square"></span>
                    چهار
                </li>
                <li data-id="4" class="yekan">
                    <span class="square"></span>
                    پنج
                </li>
                <li data-id="5" class="yekan">
                    <span class="square"></span>
                    شش
                </li>
                <li data-id="6" class="yekan">
                    <span class="square"></span>
                    هفت
                </li>
                <li data-id="7" class="yekan">
                    <span class="square"></span>
                    هشت
                </li>
                <li data-id="8" class="yekan">
                    <span class="square"></span>
                    نه
                </li>
                <li data-id="9" class="yekan">
                    <span class="square"></span>
                    ده
                </li>
            </ul>
        </div>
    </li>
    <li class="yekan">
        <span class="title">تعداد سیم کارت</span>
        <img src="public/images/sideArrow.gif">
        <div class="options">
            <ul style="padding-right: 0;padding-top: 10px">
                <li class="yekan">
                    <span class="square"></span>
                    نمایش همه
                </li>
                <div class="horizontal_row"></div>
                <li data-id="0" class="yekan">
                    <span class="square"></span>
                    یک
                </li>
                <li data-id="1" class="yekan">
                    <span class="square"></span>
                    دو
                </li>
                <li data-id="2" class="yekan">
                    <span class="square"></span>
                    سه
                </li>
                <li data-id="3" class="yekan">
                    <span class="square"></span>
                    چهار
                </li>
                <li data-id="4" class="yekan">
                    <span class="square"></span>
                    پنج
                </li>
                <li data-id="5" class="yekan">
                    <span class="square"></span>
                    شش
                </li>
                <li data-id="6" class="yekan">
                    <span class="square"></span>
                    هفت
                </li>
                <li data-id="7" class="yekan">
                    <span class="square"></span>
                    هشت
                </li>
                <li data-id="8" class="yekan">
                    <span class="square"></span>
                    نه
                </li>
                <li data-id="9" class="yekan">
                    <span class="square"></span>
                    ده
                </li>
            </ul>
        </div>
    </li>
    <li class="yekan">
        <span class="title">تعداد سیم کارت</span>
        <img src="public/images/sideArrow.gif">
        <div class="options">
            <ul style="padding-right: 0;padding-top: 10px">
                <li class="yekan">
                    <span class="square"></span>
                    نمایش همه
                </li>
                <div class="horizontal_row"></div>
                <li data-id="0" class="yekan">
                    <span class="square"></span>
                    یک
                </li>
                <li data-id="1" class="yekan">
                    <span class="square"></span>
                    دو
                </li>
                <li data-id="2" class="yekan">
                    <span class="square"></span>
                    سه
                </li>
                <li data-id="3" class="yekan">
                    <span class="square"></span>
                    چهار
                </li>
                <li data-id="4" class="yekan">
                    <span class="square"></span>
                    پنج
                </li>
                <li data-id="5" class="yekan">
                    <span class="square"></span>
                    شش
                </li>
                <li data-id="6" class="yekan">
                    <span class="square"></span>
                    هفت
                </li>
                <li data-id="7" class="yekan">
                    <span class="square"></span>
                    هشت
                </li>
                <li data-id="8" class="yekan">
                    <span class="square"></span>
                    نه
                </li>
                <li data-id="9" class="yekan">
                    <span class="square"></span>
                    ده
                </li>
            </ul>
        </div>
    </li>
    <li class="yekan">
        <span class="title">تعداد سیم کارت</span>
        <img src="public/images/sideArrow.gif">
        <div class="options">
            <ul style="padding-right: 0;padding-top: 10px">
                <li class="yekan">
                    <span class="square"></span>
                    نمایش همه
                </li>
                <div class="horizontal_row"></div>
                <li data-id="0" class="yekan">
                    <span class="square"></span>
                    یک
                </li>
                <li data-id="1" class="yekan">
                    <span class="square"></span>
                    دو
                </li>
                <li data-id="2" class="yekan">
                    <span class="square"></span>
                    سه
                </li>
                <li data-id="3" class="yekan">
                    <span class="square"></span>
                    چهار
                </li>
                <li data-id="4" class="yekan">
                    <span class="square"></span>
                    پنج
                </li>
                <li data-id="5" class="yekan">
                    <span class="square"></span>
                    شش
                </li>
                <li data-id="6" class="yekan">
                    <span class="square"></span>
                    هفت
                </li>
                <li data-id="7" class="yekan">
                    <span class="square"></span>
                    هشت
                </li>
                <li data-id="8" class="yekan">
                    <span class="square"></span>
                    نه
                </li>
                <li data-id="9" class="yekan">
                    <span class="square"></span>
                    ده
                </li>
            </ul>
        </div>
    </li>
</ul>
<div class="horizontal_row"></div>
<script>
    var filters = $('.filter_top > li');
    filters.hover(function () {
        $('.options', this).slideDown(200);
    }, function () {
        $('.options', this).slideUp(200);
    });
    var Items = $('.filter_top .options li');
    Items.hover(function () {
        $('.square', this).addClass('square_hover');
    }, function () {
        $('.square', this).removeClass('square_hover');
    });
    Items.click(function () {
        var title = $(this).parents('li').find('.title').text();
        var value = $(this).text();
        var id = $(this).attr('data-id');
        var filter_selected = $('.filters_selected');
        var filter_selected_span = filter_selected.find('span[data-id=' + id + ']');
        var len = filter_selected_span.length;
        if (len > 0) {
            filter_selected_span.remove();
        } else {
            var span = '<span data-id="' + id + '" class="filters_selected_span">' + title + ':' + value + '<i class="remove_filter" onclick="removeSelected(this)"></i></span>';
            filter_selected.append(span);
        }
        $('.square', this).toggleClass('square_selected');
    })

    function removeSelected(tag) {
        var span_tag = $(tag).parents('span');
        span_tag.remove();
        var id = span_tag.attr('data-id');
        $('.options li[data-id=' + id + ']').find('.square').removeClass('square_selected');
    }
</script>