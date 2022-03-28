<?php

include("config/config.inc.php");
include("model/pdo.inc.php");

try {
    $query = "SELECT cat_descr FROM blog_categories";

    $req = $pdo->query($query);
    $data = $req->fetchAll();
} catch (Exception $e) {
    die("Err mysql: " . $e->getMessage());
}
