<?php
session_start();
unset($_SESSION["isAdmin"]);
unset($_SESSION["usersEmail"]);
session_reset();
header("Location: ../index.php");


