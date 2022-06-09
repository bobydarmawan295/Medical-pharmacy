<?php 
    require_once 'functions.php';

    $obat = query("SELECT * FROM obat");
    var_dump($obat);
?>