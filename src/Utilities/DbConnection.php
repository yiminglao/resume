<?php
/**
 * Created by PhpStorm.
 * User: Monkey Park
 * Date: 12/3/2017
 * Time: 7:11 PM
 */

namespace Resume\Utilities;

class DbConnection
{

    private static  $instance = null;
    private static  $username = 'W01126236';
    private static  $password = 'Yics!';
    private static  $host = 'localhost';
    private static  $dbname = "W01126236";


    private function __construct()
    {

    }

    public static function getInstance() : \PDO
    {
        if(!static::$instance === null)
        {
            return static::$instance;
        }
        else
        {
            try
            {
                $connectionString = "mysql:host=".static::$host.";dbname=".static::$dbname;
                static::$instance = new \PDO($connectionString, static::$username, static::$password);
                static::$instance->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
                return static::$instance;

            }catch (\PDOException $e)
            {
                echo "Unable to connect to the database: " . $e->getMessage();
                die();
            }
        }
    }
}
