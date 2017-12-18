<?php
/**
 * Created by PhpStorm.
 * User: Monkey Park
 * Date: 12/7/2017
 * Time: 11:27 AM
 */
namespace Resume\Views;
use Resume\Http\Path as path;

class View
{
    public $path;
    public function __construct()
    {
        $this->path = new path();

    }

}