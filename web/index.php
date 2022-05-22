<?php

session_start();

include 'author.html';

if (empty($_SESSION['login'])) {
    include 'mainForm.html';
} else {
    echo 'Привет, ' . $_SESSION['login'];
    echo "<br> <a href='exit.php'>Выход</a>";
}

