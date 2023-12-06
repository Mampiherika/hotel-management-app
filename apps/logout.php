<?php
require_once('./../apps/app.php');
session_start();
session_destroy();
session_abort();

redirect('./login');