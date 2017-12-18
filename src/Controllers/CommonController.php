<?php
/**
 * Created by PhpStorm.
 * User: Monkey Park
 * Date: 12/7/2017
 * Time: 11:00 AM
 */


namespace Resume\Controllers;

use Resume\Http\Path as path;


class CommonController
{
    public $path;
    public function __construct()
    {

        $this->path = new path();
    }


}

