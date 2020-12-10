<script type="text/javascript">
    function say()
    {
        nom = document.getElementById("nom").value;
        prenom = document.getElementById("prenom").value;
        document.getElementById("name").innerHTML = "Hello " + nom + " " + prenom + " !";
    }
</script>
<textarea rows="1" id="nom"></textarea></br>
<textarea rows="1" id="prenom"></textarea></br>
<button onclick="say()">Valider</button></br>
<textarea rows="1" id="name" readonly="true"></textarea>