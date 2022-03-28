<?php

include("config/config.inc.php");
include("model/pdo.inc.php");

try {
    $query = "SELECT comment_content, display_name, post_title 
    FROM blog_comments
    JOIN blog_users
    ON ID = comment_author
    JOIN blog_posts
    ON comment_post_ID = post_ID";

    $req = $pdo->query($query);
    $data = $req->fetchAll();
} catch (Exception $e) {
    die("Err mysql: " . $e->getMessage());
}
