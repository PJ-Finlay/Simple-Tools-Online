<?php
$siteName = "Simple Tools Online";
$defaultKeywords = "online, tool"; //Added to any keywords put in the keywords variable

if(!isset($toolName)){
    $toolName = $siteName;
}

$defaultDescription = "Online ".$toolName;
if(!isset($description)){
    $description = $defaultDescription;
}

if(isset($keywords)){
    $keywords = $keywords.", ".$defaultKeywords;
}else{
    $keywords = $defaultKeywords;
}
$keywords = $keywords.', '.$toolName;
$keywords = strtolower($keywords);

echo '<!DOCTYPE html>
<html lang="en">
<head>
    <title>'.$toolName.'</title>
    <base href="https://'.$_SERVER['HTTP_HOST'].'/">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="'.$description.'">
    <meta name="keywords" content="'.$keywords.'">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/script.js"></script>

    <!-- Insert Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="images/icons/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="images/icons/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="images/icons/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="images/icons/manifest.json">
    <link rel="mask-icon" href="images/icons/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="images/icons/favicon.ico">
    <meta name="msapplication-config" content="images/icons/browserconfig.xml">
    <meta name="theme-color" content="#3b1fad">

    <!-- Google Analytics -->
    '."
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-86128137-1', 'auto');
      ga('send', 'pageview');

    </script>
    ".'
</head>
<body>

<div class="header">
    <h1><a href=".">'.$siteName.'</a></h1>
</div>

<main>
';


 ?>
