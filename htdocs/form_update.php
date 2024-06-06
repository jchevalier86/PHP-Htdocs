<?php
    require_once("test_1.php");
    $req = sprintf("SELECT * FROM utilisateurs WHERE id='%s';",$_GET["choix"]);
    $col = $mysqli -> query($req);
    $lign = $col -> Fetch_object();
?>
<?php
    $req = $mysqli -> prepare ("SELECT * FROM utilisateurs WHERE id=?;");
    $req -> bind_param("i", $_GET["choix"]);
    $req -> execute();
    $col=$req -> get_result();
    if($col->num_rows > 0){
        $lign=$col->Fetch_object();
    }
?>
<form action="update.php" method="get">
    <label for="prenom">Prénom :*</label>
    <input type="text" name="prenom" id="prenom" value="<?php echo $lign->prenom; ?>" require><br>
    <label for="nom">Nom :*</label>
    <input type="text" name="nom" id="nom" value="<?php echo $lign->nom; ?>" require><br>
    <label for="email">Email :*</label>
    <input type="email" name="email" id="email" value="<?php echo $lign->email; ?>" require><br>
    <input type="hidden" name="choix" value="<?php echo $_GET["choix"]; ?>">
    <input type="submit" value="Mettre à jour">
</form>