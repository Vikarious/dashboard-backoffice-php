<?php

include("config/config.inc.php");
include("model/pdo.inc.php");

try {
    $query = "SELECT contact_name FROM blog_contacts";

    $req = $pdo->query($query);
    $data = $req->fetchAll();
} catch (Exception $e) {
    die("Err mysql: " . $e->getMessage());
}
