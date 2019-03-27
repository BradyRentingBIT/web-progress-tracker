<?php
require_once 'php/function-listener.php';
session_start();
session_destroy();
redirectPage("login.php");