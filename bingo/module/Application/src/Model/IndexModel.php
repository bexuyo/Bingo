<?php
	namespace Application\Model; 

	use Zend\Db\Adapter\Platform\PlatformInterface;
	use Zend\Db\ResultSet\ResultSet;	

	class IndexModel{
		private $adapter;
		private $configArray = array(
			    'driver' => 'Mysqli',
			    'database' => 'phpgameserver.mysql.database.azure.com',
			    'username' => 'gameOwner@phpgameserver',
			    'password' => 'Password123'
			 );

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

	    	$query = sprintf("CALL spLogin(`%s`, `%s`)", $username, $password);

	    	$data = $adapter->query($query);
	    	return $data->fetchAll();
	    }
	}

?>