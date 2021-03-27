<?php

session_start();



$results = $_SESSION['results'] ?? null;

session_unset();

?>