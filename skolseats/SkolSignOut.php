<?php

session_start();
session_unset();
session_destroy();

header("location: SkolSeatsHomepage.php");
exit();