<?php

session_start();

session_destroy();

header('Location: /learn-php/13_sessions.php');