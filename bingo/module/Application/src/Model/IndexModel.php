<?php
	namespace Application\Model; 

	use Zend\Db\Adapter\Platform\PlatformInterface;
	use Zend\Db\ResultSet\ResultSet;	

	class IndexModel{

	    public function login($username, $password){
	    	$configArray = array(
			    'driver' => 'Mysqli',
			    'database' => 'game',
			    'username' => 'gameOwner@phpgameserver',
			    'password' => 'Password123',
			    'hostname' => 'phpgameserver.mysql.database.azure.com',
			    'port' => '3306'
			 );

	    	$adapter = new \Zend\Db\Adapter\Adapter($configArray);

	    	$query = sprintf("CALL spLogin('%s', '%s')", $username, $password);

	    	$statement = $adapter->createStatement($query);
    		$result = $statement->execute()->current();

	    	return $result;
	    }

	     public function register($username, $password){
	    	$configArray = array(
			    'driver' => 'Mysqli',
			    'database' => 'game',
			    'username' => 'gameOwner@phpgameserver',
			    'password' => 'Password123',
			    'hostname' => 'phpgameserver.mysql.database.azure.com',
			    'port' => '3306'
			 );
 	    	$adapter = new \Zend\Db\Adapter\Adapter($configArray);

 	    	$query = sprintf("CALL spRegister('%s', '%s')", $username, $password);
	    	
	    	$statement = $adapter->createStatement($query);
    		$result = $statement->execute()->current();

	    	return $result;
	    }

 	    public function changePassword($userID, $oldPassword, $newPassword){
	    	$configArray = array(
			    'driver' => 'Mysqli',
			    'database' => 'game',
			    'username' => 'gameOwner@phpgameserver',
			    'password' => 'Password123',
			    'hostname' => 'phpgameserver.mysql.database.azure.com',
			    'port' => '3306'
			 );
 	    	$adapter = new \Zend\Db\Adapter\Adapter($configArray);
 	    	$query = sprintf("CALL spChangePassword(%s, '%s', '%s')", $userID, $oldPassword, $newPassword);

 	    	$statement = $adapter->createStatement($query);
    		$result = $statement->execute()->current();

	    	return $result;
	    }
	    
 	    public function getHistory($userID){
	    	$configArray = array(
			    'driver' => 'Mysqli',
			    'database' => 'game',
			    'username' => 'gameOwner@phpgameserver',
			    'password' => 'Password123',
			    'hostname' => 'phpgameserver.mysql.database.azure.com',
			    'port' => '3306'
			 );

	    	$adapter = new \Zend\Db\Adapter\Adapter($configArray);
 	    	$query = sprintf("CALL spGetHistory(%s)", $userID);

 	    	$statement = $adapter->createStatement($query);
    		$result = $statement->execute()->current();

    		return $result;
	    }

	    public function insertGameScore($userID, $score){
	    	$configArray = array(
			    'driver' => 'Mysqli',
			    'database' => 'game',
			    'username' => 'gameOwner@phpgameserver',
			    'password' => 'Password123',
			    'hostname' => 'phpgameserver.mysql.database.azure.com',
			    'port' => '3306'
			 );

	    	$adapter = new \Zend\Db\Adapter\Adapter($configArray);
 	    	$query = sprintf("CALL spInsertGameScore('%s', %s')", $userID, $score);

 	    	$statement = $adapter->createStatement($query);
    		$result = $statement->execute()->current();

    		return $result;
	    }
	}

?>