<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ayuracharya</title>
    <link rel="stylesheet" href="<?php echo url_for('/stylesheets/styles.css'); ?>" />
</head>
<body>
    <!-- Header -->
    <header class="logo">
        <img src="images/logo.jpg" alt="Ayuracharya Logo">
        <a href="<?php echo url_for('/index.php');?>"><h1>Ayuracharya</h1></a>
        <h4>Your ayurveda friend</h4>
    </header>

    <!-- Navbar -->
    <nav>
        <a href="<?php echo url_for('/index.php');?>" class="left">Home</a>
        <a href="<?php echo url_for('/test_getsym.php');?>" class="left">Search</a>
        <a href="#" class="left">Learn</a>
        <a href="#" class="right">Sign Up</a>
        <a href="#" class="right">Sign In</a>
    </nav>