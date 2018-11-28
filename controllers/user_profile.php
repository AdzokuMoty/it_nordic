<?php

require_once '../models/user.php';

$user = getUser($_GET['id']);


require_once '../views/users_profile.php';
// var_dump($user);

