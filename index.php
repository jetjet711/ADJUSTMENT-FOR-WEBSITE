<?php
// Set the default module to 'home' if 'm' is not provided
$_GET['m'] ??= 'home';

// Check the value of 'm' and include the correspo nding view
if ($_GET['m'] === 'baptism') {
    require_once "views/UIBaptism.php";
} elseif ($_GET['m'] === 'faq') {
    require_once "views/UIFaq.php";
} elseif ($_GET['m'] === 'Tracking') {
    require_once "views/Tracking.php"; // Assuming you have a FAQ view file
} elseif ($_GET['m'] === 'UIid') {
    require_once "views/UIid.php"; // Assuming you have a FAQ view file
} else {
    require_once "views/UIHome.php";
}
?>