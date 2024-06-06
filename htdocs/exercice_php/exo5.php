<?php
    const pSeuil = 2.3;
    const vSeuil = 7.41;

    $pression = $_GET["p"];
    $volume = $_GET ["v"];
    
    echo "p = .$pression.";
    echo "v = .$volume.";

    if($volume > vSeuil && $pression > pSeuil) {
      echo "Arrêt Immédiat";
    }
    elseif ($pression > pSeuil) {
      echo "Augmenter le volume de l'enceinte";
    }
    elseif ($volume > vSeuil) {
      echo "Diminuer le volume de l'enceinte";
    }
    else {
      echo "Tout va bien"
    }
?>

<form action="exo.php" method="GET">
    <input type="text" value="<?php echo $nombre>=0? sqrt($nombre): "Erreur" ?>" name="nombre"/>    
    <input type="submit" value="Envoyer"/> 
</form>