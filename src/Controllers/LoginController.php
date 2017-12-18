<?php
/**
 * Created by PhpStorm.
 * User: Monkey Park
 * Date: 12/4/2017
 * Time: 8:33 AM
 */

namespace Resume\Controllers;
use Resume\Utilities\DbConnection as dbConn;

class LoginController extends CommonController
{

    public function loadView($view)
    {


            require_once $this->path->backend() . $view;

    }

    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST')
        {
            $email = htmlspecialchars($_POST['email']);
            $password = htmlspecialchars($_POST['password']);
            if($email !== null && $password !== null)
            {
                $dbh = dbConn::getInstance();
                $result = $dbh->prepare("SELECT email , password  FROM userInfo WHERE email = :email;");
                $result->bindParam(":email" ,$email );
                $result->setFetchMode(\PDO::FETCH_ASSOC);
                $result->execute();
                $retVal = $result->fetch();
                if($email == $retVal['email'] && $password == $retVal['password'])
                {

                    $_SESSION['email'] = $retVal['email'];

                    header("location:".$this->path->baseUrl() ."/admin/basicinfo");
                }
                else{

                    header("location:".$this->path->baseUrl()."/login");
                }
            }

        }
    }
}
