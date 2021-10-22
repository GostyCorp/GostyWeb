<?php
	class BDD
	{
		private static $sql;
		private static $sqlBdd = null;
		private static $server='sqlsrv:server = loly.ovh';
		private static $bdd='Database = lolyData';
		private static $user='lolyData' ;
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

		public function getUser($login, $pwd)
		{
			$req = "SELECT U.ID, U.name, U.pwd, S.statut, S.vip
						FROM USERS U INNER JOIN STATUS S ON U.ID = S.userID 
						WHERE name = '$login' AND pwd = '$pwd'";
			try
			{
				$prep = BDD::$sql->prepare($req);
				$prep->execute();
				$result = $prep->fetch();
				if(!empty($result))
				{
					return $result;
				}
			}
			catch (Exception $e)
			{
				echo ('Error connection : '), $e->getMessage(), "\n";
			}
		}

		public function getUsername($login)
		{
			$req = "SELECT name FROM USERS WHERE name = '$login'";
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

		public function registerUser($login, $pwd, $email)
		{
			$req = "INSERT INTO USERS (name, pwd, email) VALUES ('$login', '$pwd', '$email')";
			try
			{
				$prep = BDD::$sql->prepare($req);
				$prep->execute();
				
			}
			catch (Exception $e)
			{
				echo ('Error connection : '), $e->getMessage(), "\n";
			}
		}

		public function registerStatut($login)
		{
			$req = "INSERT INTO STATUS (userID, statut, vip) VALUES ((SELECT ID FROM USERS WHERE name = '$login'), 'Guest', '0')";
			try
			{
				$prep = BDD::$sql->prepare($req);
				$prep->execute();
			}
			catch (Exception $e)
			{
				echo ('Error connection : '), $e->getMessage(), "\n";
			}
		}

		public function getUsers()
		{
			$req = "SELECT U.ID, U.name, S.statut, S.vip FROM USERS U INNER JOIN STATUS S ON U.ID = S.userID";
			try
			{
				$prep = BDD::$sql->prepare($req);
				$prep->execute();
				$result = $prep->fetchAll();
				return $result;
			}
			catch (Exception $e)
			{
				echo ('Error connection : '), $e->getMessage(), "\n";
			}
		}

		public function getMessages()
		{
			$req = "SELECT U.ID, name, message, date FROM USERS U INNER JOIN TCHAT T ON U.ID = T.userID ORDER BY T.ID DESC";
			try
			{
				$prep = BDD::$sql->prepare($req);
				$prep->execute();
				$result = $prep->fetchAll();
				return $result;
			}
			catch (Exception $e)
			{
				echo ('Error connection : '), $e->getMessage(), "\n";
			}
		}

		public function newMessage($id, $message, $date)
		{
			$req = "INSERT INTO TCHAT (userID, message, date) VALUES ($id, '$message', '$date')";
			try
			{
				$prep = BDD::$sql->prepare($req);
				$prep->execute();
			}
			catch (Exception $e)
			{
				echo ('Error connection : '), $e->getMessage(), "\n";
			}
		}

		public function alterStatut($id, $role)
		{
			$req = "UPDATE STATUS SET statut = '$role' WHERE userID = '$id'";
			try
			{
				$prep = BDD::$sql->prepare($req);
				$prep->execute();
				echo 'ok';
			}
			catch (Exception $e)
			{
				echo ('Error connection : '), $e->getMessage(), "\n";
			}
		}

		public function alterVIP($id, $vip)
		{
			$req = "UPDATE STATUS SET vip = '$vip' WHERE userID = '$id'";
			try
			{
				$prep = BDD::$sql->prepare($req);
				$prep->execute();
				echo 'ok';
			}
			catch (Exception $e)
			{
				echo ('Error connection : '), $e->getMessage(), "\n";
			}
		}
	}