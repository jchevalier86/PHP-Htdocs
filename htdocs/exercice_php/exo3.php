<?php
  $t = 12.872;
  $d = 32.5;
  $v = $d/($t/60);
  echo "La vitesse est : ".round($v,2);
?>

<?php
    if (isset ($_GET["nombre"])) {
        $nombre = $_GET["nombre"];
        if($nombre >= 0) {
          try {
            $res = sqrt($nombre);
          }
          catch (Error $e) {
            echo "Erreur de code : $e";
          }
        }
      
      else {
          $res= "Erreur";
      }
    }
    else {
        $nombre = 0;
    }
?> 

<form action="exo3.php" method="GET">
    <input type="text" value="<?php echo $nombre; ?>" name="nombre"/>    
    <input type="submit" value="Envoyer"/> 
</form>
