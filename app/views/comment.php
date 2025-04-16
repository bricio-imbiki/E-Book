<?php

require 'template/template.php';

$id      = $_POST['id'];
$pseudo  = $_POST['pseudo'];
$message = $_POST['message'];

$pseudo  = str_replace("'", "\'", $pseudo);
$message = str_replace("'", "\'", $message);

(new Table())->commenter($id, $pseudo, $message);

header('location:livre.php?id=' . $id . '&comment=true');
