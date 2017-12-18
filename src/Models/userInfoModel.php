<?php
/**
 * Created by PhpStorm.
 * User: Monkey Park
 * Date: 12/6/2017
 * Time: 10:50 PM
 */
namespace Resume\Models;
use Resume\Utilities\DbConnection as dbConn;

class userInfoModel
{
    public function __construct()
    {

    }

    public function getAllInfo($id)
    {
        $dbh = dbConn::getInstance();
        $result = $dbh->prepare("SELECT * FROM userInfo WHERE userId = :id ;");
        $result->bindParam(":id", $id);
        $result->setFetchMode(\PDO::FETCH_ASSOC);
        $result->execute();
        $retVal = $result->fetch();
        return $retVal;
    }
    public function getUserId($email)
    {
        $dbh = dbConn::getInstance();
        $result = $dbh->prepare("SELECT * FROM userInfo WHERE email = :email;");
        $result->bindParam(":email", $email);
        $result->setFetchMode(\PDO::FETCH_ASSOC);
        $result->execute();
        $retVal = $result->fetch();
        return $retVal;
    }

    public function getPassword($email)
    {
        $dbh = dbConn::getInstance();
        $result = $dbh->prepare("SELECT password FROM userInfo WHERE email = :email;");
        $result->bindParam(":email", $email);
        $result->setFetchMode(\PDO::FETCH_ASSOC);
        $result->execute();
        $retVal = $result->fetch();
        return $retVal;
    }


    public function updateInfoById($id ,$userName,$password, $firstName,$lastName ,$address, $city, $state,$zipcode,
                    $phone,$photo)
    {

        $dbh = dbConn::getInstance();
        if($password == null && $photo == null)
        {

            $result = $dbh->prepare("UPDATE userInfo SET userName = :userName,".
                "firstName=:firstName, lastName =:lastName, address = :address,city = :city,".
                "state=:state, zipcode = :zipcode , phone = :phone".
                " WHERE userId = :id ;");
        }elseif($password == null && $photo != null)
        {
            $result = $dbh->prepare("UPDATE userInfo SET userName = :userName,".
                "firstName=:firstName, lastName =:lastName, address = :address,city = :city,".
                "state=:state, zipcode = :zipcode , phone = :phone, photo=:photo".
                " WHERE userId = :id ;");
            $result->bindParam(":photo" , $photo);

        }
        else if($password != null && $photo == null)
        {
            $result = $dbh->prepare("UPDATE userInfo SET userName = :userName,".
                "password=:password, firstName=:firstName, lastName =:lastName, address = :address,city = :city,".
                "state=:state, zipcode = :zipcode , phone = :phone ".
                " WHERE userId = :id ;");
            $result->bindParam(":password" , $password);
        }
        else{
            $result = $dbh->prepare("UPDATE userInfo SET userName = :userName,".
                "password=:password, firstName=:firstName, lastName =:lastName, address = :address,city = :city,".
                "state=:state, zipcode = :zipcode , phone = :phone, photo=:photo".
                " WHERE userId = :id ;");
                $result->bindParam(":password" , $password);
                $result->bindParam(":photo" , $photo);
        }

        $result->bindParam(":id", $id);
        $result->bindParam(":userName" ,$userName );

        $result->bindParam(":firstName" ,$firstName );
        $result->bindParam(":lastName" , $lastName);
        $result->bindParam(":address" , $address);
        $result->bindParam(":city" , $city);
        $result->bindParam(":state" , $state);
        $result->bindParam(":zipcode" ,$zipcode );

        $result->bindParam(":phone" , $phone);

        $result->execute();

    }

//    public function insertEdu($id , $userName,$password, $firstName,$lastName ,$address, $state,$zipcode,
//                              $email,$phone,$photo)
//    {
//        $dbh = dbConn::getInstance();
//        $result = $dbh->prepare("INSERT INTO userInfo ( userName, password, firstName, lastName, "."
//                                        address, state,zipcode,email,phone,photo) ".
//                                        "VALUES (:userName, :password, :firstName, :lastName, "."
//                                        :address, :state,:zipcode,:email,:phone,:photo);");
//        $result->bindParam(":userName" ,$userName );
//        $result->bindParam(":password" , $password);
//        $result->bindParam(":firstName" ,$firstName );
//        $result->bindParam(":lastName" , $lastName);
//        $result->bindParam(":address" , $address);
//        $result->bindParam(":state" , $state);
//        $result->bindParam(":zipcode" ,$zipcode );
//        $result->bindParam(":email" ,$email );
//        $result->bindParam(":phone" , $phone);
//        $result->bindParam(":photo" , $photo);
//        $result->execute();

//    }
}