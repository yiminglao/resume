<?php
/**
 * Created by PhpStorm.
 * User: Monkey Park
 * Date: 12/7/2017
 * Time: 4:48 PM
 */
namespace Resume\Controllers;
use Resume\Models\ExpModel as exp;

class ExperienceController extends CommonController
{

    public function loadView($view)
    {
        if(isset($_SESSION['email']))
        {
            require_once $this->path->backend() . $view;
        }
        else
        {
            header("location:" . $this->path->baseUrl() .'/login');
        }

    }
    public function getAllExp()
    {
        $edu = new exp();
        $expList = $edu->getAllExp();
        return $expList;
    }

    public function updateExp($id)
    {

        $company = htmlspecialchars($_POST['company']);
        $jobTitle= htmlspecialchars($_POST['title']);
        $city = htmlspecialchars($_POST['city']);
        $state = htmlspecialchars($_POST['state']);
        $zipcode = htmlspecialchars($_POST['zipcode']);
        $startDate = htmlspecialchars($_POST['startdate']);
        $endDate = htmlspecialchars($_POST['enddate']);
        $description = htmlspecialchars($_POST['description']);
        $exp = new exp( );
        $exp->updateExpById($id,$company, $jobTitle, $city,$state,$zipcode,$startDate,$endDate,$description);

        header("location:" . $this->path->adminUrl() .'exp');

    }

    public function insertExp()
    {
        $company = htmlspecialchars($_POST['company']);
        $jobTitle= htmlspecialchars($_POST['title']);
        $city = htmlspecialchars($_POST['city']);
        $state = htmlspecialchars($_POST['state']);
        $zipcode = htmlspecialchars($_POST['zipcode']);
        $startDate = htmlspecialchars($_POST['startdate']);
        $endDate = htmlspecialchars($_POST['enddate']);
        $description = htmlspecialchars($_POST['description']);
        $exp = new exp( );
        $exp->insertExp($company, $jobTitle, $city,$state,$zipcode,$startDate,$endDate,$description);

        header("location:" . $this->path->adminUrl() .'exp');
    }

    public function delExpById($id)
    {
        $edu = new exp( );
        $edu->delExpById($id);

        header("location:" . $this->path->adminUrl() .'exp');
    }

}