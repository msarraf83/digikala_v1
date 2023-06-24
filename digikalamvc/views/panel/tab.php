<ul class="tab">
    <li class="active">پیغام های من</li>
    <li>سفارش های من</li>
    <li>لیست مورد علاقه</li>
    <li>نقد های من</li>
    <li>نظر های من</li>
    <li>دیجی بن های من</li>
    <li>کارت های هدیه من</li>
    <li>اطلاع رسانی ها</li>
</ul>
<div class="tabchilds">
    <?php
    require('tab1.php');
    require('tab2.php');
    require('tab3.php');
    require('tab4.php');
    require('tab5.php');
    require('tab6.php');
    ?>
</div>
<style>
    .tab {
        width: 1200px;
        float: right;
        margin-top: 20px;
        background: #f5f6f7;
        padding: 0;
        border-radius: 5px 5px 0 0;
        overflow: hidden;
        text-align: center
    }

    .tab li {
        float: right;
        padding: 10px;
        padding-right: 37px;
        font-size: 11.5pt;
        font-family: yekan, serif;
        border: 1px solid #EEE;
        cursor: pointer;
        position: relative
    }

    .tab li:before {
        background: url(public/images/slices.png) no-repeat scroll 0 0;
        width: 30px;
        height: 26px;
        content: "";
        display: block;
        position: absolute;
        right: 3px;
        top: 9px
    }

    .tab .naghd::before {
        background-position: -105px -266px
    }

    .tab .moshakhasat::before {
        background-position: -315px -266px
    }

    .tab .nazarat::before {
        background-position: -261px -266px
    }

    .tab .porsesh::before {
        background-position: -210px -266px
    }

    .tab .foroosh::before {
        background-position: -105px -266px
    }

    .tab .sabte::before {
        background-position: -315px -266px
    }

    .tab .garanti::before {
        background-position: -261px -266px
    }

    .tab .rafee::before {
        background-position: -210px -266px
    }

    .tab .naghd:active::before {
        background-position: -105px -308px
    }

    .tab .moshakhasat:active::before {
        background-position: -315px -308px
    }

    .tab .nazarat:active::before {
        background-position: -261px -308px
    }

    .tab .porsesh:active::before {
        background-position: -210px -308px
    }

    .tab .foroosh:active::before {
        background-position: -105px -308px
    }

    .tab .sabte:active::before {
        background-position: -315px -308px
    }

    .tab .garanti:active::before {
        background-position: -261px -308px
    }

    .tab .rafee:active::before {
        background-position: -210px -308px
    }

    .tab li.active {
        background: #FFF;
        border-top: 1px solid blue;
        box-shadow: 0 -1px 2px rgba(0, 0, 0, .1);
        color: #210000
    }
    .tabchilds {
        width: 1200px;
        float: right;
        background: #FFF;
        height: 304px
    }

    .tabchilds section {
        display: none;
        padding: 10px;
        font-family: yekan, serif;
        font-size: 12pt;
        padding-bottom: 0;
        float: right;
        width: 100%
    }

    .tabchilds section:first-child {
        display: block
    }

    .tabchilds section > table {
        width: 98%
    }

    .tabchilds section > table td {
        text-align: center;
        padding: 4px;
        border: 1px solid #CCC;
        border-bottom: 1px solid #000
    }

    .tabchilds section > table tr {
        background: #EEE;
        color: #000;
        font-size: 10pt;
        font-family: yekan, serif
    }

    .tabchildsrs > section > table tr:first-child {
        background: #3C3C3C;
        color: #FFF;
        font-size: 10.7pt;
        font-family: yekan, serif

    }

    .tabchilds section > table .sub_table {
        box-shadow: 0 0 5px #CCC;
        background: #FFF;
        padding: 10px
    }

    .tabchilds .my_orders > table .sub_table > table {
        width: 100%
    }

    .tabchilds .my_orders > table .sub_table > table > tr {
        background: #FFF !important;
        color: #000;
        font-size: 11pt
    }

    .tabchilds .my_orders > table .sub_table > table > tr td:first-child {
        border-right: 1px solid #CCC
    }

    .tabchilds .my_orders > table .sub_table > table > tr:first-child {
        background: #EEE !important;
        color: #000;
        font-size: 11pt
    }

    h4 .title {
        font-family: yekan, serif;
        font-size: 11.4pt;
        margin: 4px 0;
        background: #EEE no-repeat scroll 0 0;
        font-weight: normal;
        padding-right: 10px
    }

    table .details {
        display: none
    }

    .show_details {
        cursor: pointer
    }

    .my_orders .sub_table .more {

    }

    .my_orders .sub_table .more table {
        width: 100%
    }

    .my_orders .sub_table .more tr {
        background: #FFF !important;
        color: #000;
        font-size: 10pt
    }

    .my_orders .sub_table .more tr td {
        width: 33%
    }

    .my_orders .sub_table .more tr td:last-child {
        border-left: none !important
    }
</style>
