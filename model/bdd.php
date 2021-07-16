<?php
	class BDD
	{
		private static $sql;
		private static $sqlBdd = null;
		private static $server='sqlsrv:server = loly.ovh';
		private static $bdd='Database = lolyData';
		private static $user='lolySite' ;
		private static $pwd='lc@dyo08';

		private function __construct()
		{
			try
			{
				BDD::$sql = new PDO(BDD::$server.';'.BDD::$bdd, BDD::$user, BDD::$pwd);
			}
			catch (Exception $e)
			{
				throw new Exception("Erreur à la connexion \n" . $e->getMessage());
			}
		}

		public function _destruct()
		{
			BDD::$sql = null;
		}

		public static function getBdd()
		{
			if (BDD::$sqlBdd == null)
			{
				BDD::$sqlBdd =  new BDD();
			}
			return BDD::$sqlBdd;
		}

		public function getUsers($login, $pwd)
		{
			$req = "SELECT name, pwd FROM USERS WHERE name = '$login' AND pwd = '$pwd'";
			try
			{
				$prep = BDD::$sql->prepare($req);
				$prep->execute();
				$result = $prep->fetch();
				if(!empty($result))
				{
					return $result['name'];
				}
			}
			catch (Exception $e)
			{
				echo ('Error connection : '), $e->getMessage(), "\n";
			}
		}
	}