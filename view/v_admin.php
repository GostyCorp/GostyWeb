<div class="nine columns admin">
	<form method="POST" action="verifyGuests">
        <table class="u-full-width">
            <thead>
                <tr>
                    <th></th>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Status</th>
                    <th>VIP</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($guests as $guest)
                    {
                        echo '<tr>';
                            echo '<td><input type="checkbox" name='.$guest["name"].' value=checked></td>';
                            echo '<td>'.$guest['ID'].'</td>';
                            echo '<td>'.$guest['name'].'</td>';
                            echo '<td>'.$guest['statut'].'</td>';
                            echo '<td>';
                                if($guest['vip'] == 1)
                                {
                                    echo 'VIP';
                                }
                            echo '</td>';
                        echo '</tr>';
                    }
                ?>
            </tbody>
        </table>
        <select name="role">
            <libelle>Rôle</libelle>
            <option value="Guest">Guest</option>
            <option value="User">User</option>
            <option value="Dev">Dev</option>
            <option value="Admin">Admin</option>
        </select>
        <input type="submit" value=">Valider">
		<input type="reset" value=">Annuler">  
    </form>
</div>