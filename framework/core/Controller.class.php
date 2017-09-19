<?php

/**
 * Created by PhpStorm.
 * User: purnima
 * Date: 19/09/2017
 * Time: 11:43
 */
class Controller
{
    protected $loader;


    public function __construct(){

        $this->loader = new Loader();

    }


    public function redirect($url,$message,$wait = 0){

        if ($wait == 0){

            header("Location:$url");

        } else {

            include CURR_VIEW_PATH . "message.html";

        }


        exit;

    }

}