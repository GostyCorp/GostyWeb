<?php
	class chat
	{
		private $_couleur;
		private $_race;
		private $_mignon;

		function _contruct($couleur, $race, $mignon)
		{
			$this->_couleur = $couleur;
			$this->_race = $race;
			$this->_mignon = $mignon;
		}

		public function getCouleur()
		{
			return $this->_couleur;
		}

		public function getRace()
		{
			return $this->_race;
		}

		public function getMignon()
		{
			return $this->_mignon;
		}
	}

	$monChat = new chat("Vert","Neko","100");

	echo $monChat->getCouleur();

	include ("return.php");
?>