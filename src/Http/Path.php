<?php
/**
 * Created by PhpStorm.
 * User: Monkey Park
 * Date: 12/4/2017
 * Time: 9:05 AM
 */

namespace Resume\Http;

class Path
{
    private $root;
    private $controller;
    private $models;
    private $views;
    private $backend;
    private $frontend;
    private $baseUrl;
    private $image;

    public function __construct()
    {
        $this->root = dirname(dirname(__DIR__));
        $this->controller = $this->root .'/src/Controllers';
        $this->models = $this->root .'/src/Models';
        $this->views = $this->root .'/src/Views/';
        $this->backend = $this->views .'Back/';
        $this->frontend = $this->views .'Front/';

        $this->baseUrl = "http://icarus.cs.weber.edu/~yl26236/mingresume";
        $this->image = $this->baseUrl.'/src/Images/';
    }
    public function imagePath()
    {
        return $this->image;
    }
    public function baseUrl()
    {
        return $this->baseUrl;
    }
    public function adminUrl()
    {
        return $this->baseUrl."/admin/";
    }

    public function root()
    {
        return $this->root;
    }
    public function controller()
    {
        return $this->controller;
    }

    public function models()
    {
        return $this->models;
    }
    public function views()
    {
        return $this->views;
    }

    public function backend()
    {
        return $this->backend;
    }

    public function frontend()
    {
        return $this->frontend;
    }

}

