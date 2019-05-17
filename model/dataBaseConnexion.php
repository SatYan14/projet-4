<?php

class DataBaseConnexion
{
	private static $db;

	public static function getDataBaseConnexion()
	{
		$parameters = [
		        "hostAndPort" => "localhost;",
                        "dbName" => "projet2",
                        "username" => "root",
                        "password" => ''
		];
		if(self::$db === null) {
            $db = new PDO('mysql:host='.$parameters['hostAndPort'].'dbname='.$parameters['dbName']. ';charset=UTF8',
                    $parameters['username'],$parameters['password']
            );

            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        return $db;
	}
}