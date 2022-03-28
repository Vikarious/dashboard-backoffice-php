<?php

include("config/config.inc.php");
include("model/pdo.inc.php");

try {
    $query = "SELECT display_name FROM blog_users";

    $req = $pdo->query($query);
    $data = $req->fetchAll();
} catch (Exception $e) {
    die("Err mysql: " . $e->getMessage());
}
