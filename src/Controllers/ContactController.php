<?php
/**
 * Created by PhpStorm.
 * User: Monkey Park
 * Date: 12/7/2017
 * Time: 11:44 PM
 */
namespace Resume\Controllers;

class ContactController extends CommonController
{
    public function loadView($view)
    {
            require_once $this->path->frontend() . $view;

    }

}