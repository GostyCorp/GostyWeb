<div class="nine columns admin">
	<form method="POST" action="changeStatus">
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
                    foreach($users as $user)
                    {
                        echo '<tr>';
                            echo '<td><input type="checkbox" name='.$user["name"].' value=checked></td>';
                            echo '<td>'.$user['ID'].'</td>';
                            echo '<td>'.$user['name'].'</td>';
                            echo '<td>'.$user['statut'].'</td>';
                            echo '<td>';
                                if($user['vip'] == 1)
                                {
                                    echo 'VIP';
                                }
                            echo '</td>';
                        echo '</tr>';
                    }
                ?>
            </tbody>
        </table>
        <br>
        <select name="role">
            <libelle>Rôle</libelle>
            <option value=""></option>
            <option value="Guest">Guest</option>
            <option value="User">User</option>
            <option value="Dev">Dev</option>
            <option value="Admin">Admin</option>
        </select>
        <select name="vip">
            <libelle>VIP</libelle>
            <option value=""></option>
            <option value="VIP">VIP</option>
            <option value="NoVIP">NoVIP</option>
        </select>
        <br>
        <input type="submit" value=">Valider">
		<input type="reset" value=">Annuler">  
    </form>
</div>