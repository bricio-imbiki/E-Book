<?php

require 'template/template.php';

$email   = $_POST['email'];
$pseudo  = $_POST['pseudo'];
$message = $_POST['message'];

$pseudo  = str_replace("'", "\'", $pseudo);
$email   = str_replace("'", "\'", $email);
$message = str_replace("'", "\'", $message);

(new Table())->contactez($pseudo, $email, $message);

header('location:contact.php?msg=true');
