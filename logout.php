<?php

//logout.php

include('config.php');
include('pinterest-api-settings.php');
session_destroy();

header('location:index.php');

?>
