<?php
/**
 * Created by PhpStorm.
 * User: Monkey Park
 * Date: 12/6/2017
 * Time: 10:30 PM
 */
namespace Resume\Controllers;
use Resume\Models\EduModel as edu;

class EduController extends CommonController
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

    public function getAllEdu()
    {
        $edu = new edu();
        $eduList = $edu->getAllEdu();
        return $eduList;
    }

    public function updateEdu($id)
    {
        $school = htmlspecialchars($_POST['school']);
        $major= htmlspecialchars($_POST['Major']);
        $gpa = htmlspecialchars($_POST['gpa']);
        $graduation = htmlspecialchars($_POST['GradYear']);
        $description = htmlspecialchars($_POST['description']);
        $edu = new edu( );
        $edu->updateEduById($id ,$school, $major, $gpa,$graduation,$description);

        header("location:" . $this->path->adminUrl() .'edu');

    }

    public function insertEdu()
    {
        $school = htmlspecialchars($_POST['school']);
        $major= htmlspecialchars($_POST['Major']);
        $gpa = htmlspecialchars($_POST['gpa']);
        $graduation = htmlspecialchars($_POST['GradYear']);
        $description = htmlspecialchars($_POST['description']);
        $edu = new edu( );
        $edu->insertEdu($school, $major, $gpa,$graduation,$description);

        header("location:" . $this->path->adminUrl() .'edu');
    }

    public function delEduById($id)
    {

        $edu = new edu( );
        $edu->delEduById($id);

        header("location:" . $this->path->adminUrl() .'edu');
    }

}