<?php
/**
 * Created by PhpStorm.
 * User: purnima
 * Date: 19/09/2017
 * Time: 12:51
 */
class IndexController extends Controller{
    public function indexAction ()
    {
        include CURR_VIEW_PATH . "index.html";
    }

    public function addAction()
    {
        echo "added";exit;  //http://localhost:8888/index.php?p=home&c=index&a=add
    }
}