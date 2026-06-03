<?php
require_once __DIR__ . '../../app/Helpers/UrlHelper.php';

require_once __DIR__ . '../../app/Helpers/Database.php';
require_once __DIR__ . '../../app/Helpers/Custom.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Wealth Bridge | Financial Advisory</title>
        
        <!-- Google Font: Inter -->
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        
        <!-- AOS -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet" />
        
        <!-- Icons -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet" />
        
        <!-- Custom CSS -->
        <link href="<?php echo UrlHelper::asset('css/style.css'); ?>" rel="stylesheet">

    </head>
<body>
    <?php include_once ('elements/header-menu.php'); ?>
