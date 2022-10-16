<?php
declare(strict_types=1);

session_start();

if(isset($_SESSION['name']) && $_SESSION['name']) {
   echo "Hello, " . $_SESSION['name'];
   ?>

    <br />
    <a href="exit.php">Назад</a>

    <?php
}else {
    include 'about.html';
}
