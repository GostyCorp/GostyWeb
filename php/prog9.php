<form action=prog9.php method=post>
<label>Combien voulez vous convertir ?</label>
<input type="text" name="money">
<input type="submit" name="Valider">
<br>
<label>"Le taux est de 1€ pour 1,09$</label>

<?php 
	if (isset($_POST["money"]))
	{
		$money = $_POST["money"];
		$moneyye = $money * 1.09;
		echo "Vous avez convertie : ", $money, "€ en ", $moneyye, "$";
	}
	include ("return.php");
?>