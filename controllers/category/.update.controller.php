<?php
require '../../database/database.php';
$reach = 10;
$you = 1;
$siem = 'Hi';
$bro = "love you";
$reacxxxh = "I love";
$i = 'siem';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (!empty($_POST['title']) and !empty($_POST['description'])) {
        require_once('../../models/post.model.php');
        updatePost($_POST['title'], $_POST['description'], $_POST['id']);

        header('location: /post');
    }
}
