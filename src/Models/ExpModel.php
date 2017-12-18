<?php
/**
 * Created by PhpStorm.
 * User: Monkey Park
 * Date: 12/7/2017
 * Time: 5:03 PM
 */

namespace Resume\Models;
use Resume\Utilities\DbConnection as dbConn;

class ExpModel
{

    public function getAllExp()
    {
        $dbh = dbConn::getInstance();
        $result = $dbh->prepare("SELECT * FROM experience;");
        $result->setFetchMode(\PDO::FETCH_ASSOC);
        $result->execute();
        $retVal = $result->fetchAll();
        return $retVal;

    }

    public function getExpById($id)
    {
        $dbh = dbConn::getInstance();
        $result = $dbh->prepare("SELECT * FROM experience WHERE eId= :id;");
        $result->bindParam(":id", $id);
        $result->setFetchMode(\PDO::FETCH_ASSOC);
        $result->execute();
        $retVal = $result->fetch();
        return $retVal;
    }

    public function delExpById($id)
    {
        $dbh = dbConn::getInstance();
        $result = $dbh->prepare("DELETE FROM experience WHERE eId= :id;");
        $result->bindParam(":id", $id);
        $result->execute();

    }

    public function updateExpById($id ,$company, $jobTitle, $city,$state,$zipcode,$startDate,$endDate,$description)
    {
        $dbh = dbConn::getInstance();
        $result = $dbh->prepare("UPDATE experience SET company = :company,".
            "jobTitle=:jobTitle, city=:city, state =:state, zipcode =:zipcode, startDate=:startDate,".
            "endDate=:endDate,description = :description WHERE eId= :id ;");
        $result->bindParam(":id",$id );
        $result->bindParam(":company", $company);
        $result->bindParam(":jobTitle", $jobTitle);
        $result->bindParam(":city",$city );
        $result->bindParam(":state", $state );
        $result->bindParam(":zipcode", $zipcode );
        $result->bindParam(":startDate", $startDate );
        $result->bindParam(":endDate", $endDate );
        $result->bindParam(":description", $description);

        $result->execute();

    }

    public function insertExp($company, $jobTitle, $city,$state,$zipcode,$startDate,$endDate,$description)
    {
        $dbh = dbConn::getInstance();
        $result = $dbh->prepare("INSERT INTO experience ( company, jobTitle, city, state, zipcode,startDate,endDate,description) ".
            "VALUES (:company, :jobTitle, :city, :state, :zipcode,:startDate,:endDate,:description);");

        $result->bindParam(":company", $company);
        $result->bindParam(":jobTitle", $jobTitle);
        $result->bindParam(":city",$city );
        $result->bindParam(":state", $state );
        $result->bindParam(":zipcode", $zipcode );
        $result->bindParam(":startDate", $startDate );
        $result->bindParam(":endDate", $endDate );
        $result->bindParam(":description", $description);
        $result->execute();

    }
}