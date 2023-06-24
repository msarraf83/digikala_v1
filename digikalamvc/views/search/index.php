<style>
    .content {
        width: 880px;
        float: left
    }

    .horizontal_row {
        background: #CCC;
        float: right;
        height: 1px;
        margin: 15px;
        width: 86%
    }

    .main {
        width: 1150px;
        margin: 10px auto;
        background: #FFF;
        box-shadow: 0 1px 3px #EEE;
        padding: 25px
    }

    .main::after {
        content: "";
        clear: both;
        display: block
    }
</style>
<div class="main">
    <?php
    require('sidebar.php');
    ?>
    <div class="content">
        <?php
        require('navigator.php');
        require('filter_top.php');
        require('search.php');
        require('products.php');
        ?>
    </div>
</div>
