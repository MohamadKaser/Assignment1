<?php

session_start();


if (!isset($_SESSION['results'])){
    header('Location: foobooks.php');
}


$results = $_SESSION['results'] ?? null;

session_unset();

?>