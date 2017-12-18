<?php
/**
 * Created by PhpStorm.
 * User: Monkey Park
 * Date: 12/3/2017
 * Time: 10:44 PM
 */
namespace Resume\Controllers;

use Resume\Models\userInfoModel as user;


class UserInfoController extends CommonController
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

    public function getUserId($email)
    {
        $user = new user();
        $result = $user->getUserId($email);
        return $result;
    }

    public function getUser($id)
    {
        $user = new user();
        $result = $user->getAllInfo($id);
        return $result;
    }

    public function saveInfo()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST')
        {
            $imageName = '';
            if ($_FILES['fileToUpload']['name'] != null) {
                $target_file = $this->path->imagePath() . basename($_FILES["fileToUpload"]["name"]);

                $uploadOk = 1;
                $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

                // Check if image file is a actual image or fake image
                if (isset($_POST["submit"])) {
                    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);

                    if ($check !== false) {
                        echo '<script>alert(\'something wrong!!\')</script>';

                        $uploadOk = 1;
                    } else {
                        echo '<script>alert(\'File is not an image!!\')</script>';

                        $uploadOk = 0;
                    }
                }
                // Check if file already exists
                if (file_exists($target_file)) {
                    echo '<script>alert(\'Sorry, file already exists.!!\')</script>';
                    $imageName = $_FILES["fileToUpload"]["name"];
                    $uploadOk = 0;
                }
                // Check file size
                if ($_FILES["fileToUpload"]["size"] > 500000) {
                    echo '<script>alert(\'Sorry, your file is too large!!\')</script>';

                    $uploadOk = 0;
                }
                // Allow certain file formats
                if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                    && $imageFileType != "gif") {
                    echo '<script>alert(\'Sorry, only JPG, JPEG, PNG & GIF files are allowed!!\')</script>';

                    $uploadOk = 0;
                }
                // Check if $uploadOk is set to 0 by an error
                if ($uploadOk == 0) {
                    echo '<script>alert(\'Sorry, your file was not uploaded.!!\')</script>';

                    // if everything is ok, try to upload file
                } else {
                    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                        echo "The file " . basename($_FILES["fileToUpload"]["name"]) . " has been uploaded.";
                        $imageName = $_FILES["fileToUpload"]["name"];
                    } else {
                        echo '<script>alert(\'Sorry, there was an error uploading your file.!!\')</script>';
                        return;
                    }
                }
            }

                $userName = htmlspecialchars($_POST['username']);
                $firstName = htmlspecialchars($_POST['fname']);
                $lastName = htmlspecialchars($_POST['lname']);
                $address = htmlspecialchars($_POST['address']);
                $state = htmlspecialchars($_POST['state']);
                $opass = htmlspecialchars($_POST['opass']);
                $npass = htmlspecialchars($_POST['npass']);
                $cpass = htmlspecialchars($_POST['cpass']);
                $city = htmlspecialchars($_POST['city']);
                $zipcode = htmlspecialchars($_POST['zip']);

                $phone = htmlspecialchars($_POST['phone']);


                $user = new user();

                $cOld = $user->getPassword($_SESSION['email']);

                $id = $user->getUserId($_SESSION['email']);

                if ($this->checkPassword($opass, $cOld['password'], $npass, $cpass)) {

                    $user->updateInfoById($id['userId'], $userName, $npass, $firstName, $lastName, $address, $city, $state, $zipcode,
                        $phone, $imageName);
                } else {
                    $user->updateInfoById($id['userId'], $userName, $opass, $firstName, $lastName, $address, $city, $state, $zipcode,
                        $phone, $imageName);
                }
                echo '<script>alert(\'update!!\')</script>';
            }

            header("location:" . $this->path->adminUrl() . 'basicinfo');
        }


    public function checkPassword($old, $cOld ,$new, $confirm)
    {
        if($new == $confirm && $new !== null)
        {
            if ($old == $cOld)
            {
                return true;
            }

        }
    }
}