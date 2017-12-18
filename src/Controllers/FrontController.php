<?php
/**
 * Created by PhpStorm.
 * User: Monkey Park
 * Date: 12/9/2017
 * Time: 11:42 AM
 */
namespace Resume\Controllers;


class FrontController extends CommonController
{
    public function loadView($view)
    {
            require_once $this->path->frontend() . $view;

    }
}