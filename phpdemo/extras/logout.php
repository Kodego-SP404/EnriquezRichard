<?php
session_start();

//destroy the session
session_destroy();
header('Location: /enriquez/phpdemo/13_sessions.php');