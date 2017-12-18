<?php
/**
 * Created by PhpStorm.
 * User: Monkey Park
 * Date: 12/5/2017
 * Time: 9:02 PM
 */
namespace Resume\Views\Front;

$path = new \Resume\Views\View();

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Ming Resume</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">


    <!-- Custom styles for this template -->
    <link href="justified-nav.css" rel="stylesheet">
</head>

<body>
<div class="container">
<header class="masthead">
    <nav class="navbar navbar-expand-md navbar-light bg-light rounded mb-3">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav text-md-center nav-justified w-100">
                <li class="nav-item active">
                    <a class="nav-link" href="<?php  echo $path->path->baseUrl();?>">Basic Info<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php  echo $path->path->baseUrl().'/edu';?>">Education</a>
                </li>
<!--                <li class="nav-item">-->
<!--                    <a class="nav-link" href="#">Github Porject</a>-->
<!--                </li>-->
                <li class="nav-item">
                    <a class="nav-link" href="<?php  echo $path->path->baseUrl().'/exp';?>">Work Experience</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php  echo $path->path->baseUrl().'/contact';?>">Contact Me</a>
                </li>
<!--                <li class="nav-item">-->
<!--                    <a class="nav-link" href="#">About</a>-->
<!--                </li>-->

            </ul>
        </div>
    </nav>
</header>
