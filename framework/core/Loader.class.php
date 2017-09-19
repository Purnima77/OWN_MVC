<?php

/**
 * Created by PhpStorm.
 * User: purnima
 * Date: 19/09/2017
 * Time: 11:45
 */
class Loader
{
// Load library classes

    public function library($lib){

        include LIB_PATH . "$lib.class.php";

    }


    // loader helper functions. Naming conversion is xxx_helper.php;

    public function helper($helper){

        include HELPER_PATH . "{$helper}_helper.php";

    }
}