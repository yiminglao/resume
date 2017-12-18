<?php
/**
 * Created by PhpStorm.
 * User: Monkey Park
 * Date: 12/6/2017
 * Time: 12:09 AM
 */
namespace Resume\Models;
use Resume\Utilities\DbConnection as dbConn;

class EduModel
{

    public function getAllEdu()
    {
        $dbh = dbConn::getInstance();
        $result = $dbh->prepare("SELECT * FROM edu;");
        $result->setFetchMode(\PDO::FETCH_ASSOC);
        $result->execute();
        $retVal = $result->fetchAll();
        return $retVal;
    }

    public function getEduById($id)
    {
        $dbh = dbConn::getInstance();
        $result = $dbh->prepare("SELECT * FROM edu WHERE eduId= :id;");
        $result->bindParam(":id", $id);
        $result->setFetchMode(\PDO::FETCH_ASSOC);
        $result->execute();
        $retVal = $result->fetch();
        return $retVal;
    }

    public function delEduById($id)
    {
        $dbh = dbConn::getInstance();
        $result = $dbh->prepare("DELETE FROM edu WHERE eduId= :id;");
        $result->bindParam(":id", $id);
        $result->execute();
    }

    public function updateEduById($id ,$school, $major, $gpa,$graduation,$description)
    {
        $dbh = dbConn::getInstance();
        $result = $dbh->prepare("UPDATE edu SET school = :school,".
                            "major =:major, gpa =:gpa, graduation = :graduation, description = :description WHERE eduId= :id ;");
        $result->bindParam(":id",$id );
        $result->bindParam(":school", $school);
        $result->bindParam(":major", $major);
        $result->bindParam(":gpa",$gpa );
        $result->bindParam(":graduation", $graduation );
        $result->bindParam(":description", $description);
        $result->execute();

    }

    public function insertEdu($school, $major, $gpa,$graduation,$description)
    {
        $dbh = dbConn::getInstance();
        $result = $dbh->prepare("INSERT INTO edu ( school, major, gpa, graduation, description) ".
            "VALUES (:school, :major, :gpa, :graduation, :description);");
        $result->bindParam(":school", $school);
        $result->bindParam(":major", $major);
        $result->bindParam(":gpa",$gpa );
        $result->bindParam(":graduation", $graduation );
        $result->bindParam(":description", $description);
        $result->execute();

    }
}