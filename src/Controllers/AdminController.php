<?php
/**
 * Created by PhpStorm.
 * User: Monkey Park
 * Date: 12/5/2017
 * Time: 9:08 PM
 */

namespace Resume\Controllers;

class AdminController extends CommonController
{


    public function logout()
    {
        if(isset($_SESSION['email']))
        {
            unset($_SESSION['email']);

        }
        header("location:" . $this->path->baseUrl());
    }

    public function getImage()
    {
        echo "get image";
    }

}