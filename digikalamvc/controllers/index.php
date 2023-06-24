<?php

class index extends controller
{
    function __construct()
    {

    }

    function index()
    {
        $this->view('index/index');
    }

    function sayHello($name = '', $family = '', $age = '')
    {
        echo $name . '<br>';
        echo $family . '<br>';
        echo $age;
    }

    function clicksite()
    {

    }
}

?>
