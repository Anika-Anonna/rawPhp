<?php
require_once 'vendor/autoload.php';
use App\classes\FullName;

//$message='';

if (isset($_GET['page']))
    {
        if ($_GET['page'] == 'home')
        {
            include 'pages/home.php';
        }
        elseif ($_GET['page'] == 'fullName')
        {
            include 'pages/fullName.php';
        }
        elseif ($_GET['page'] == 'submitName')
        {
            $fullName = new FullName($_POST);
            $message  = $fullName -> createName();
            include 'pages/home.php';
        }



        elseif ($_GET['page'] == 'calculator')
        {
            include 'pages/calculator.php';
        }
        elseif ($_GET['page'] == 'calculate')
        {
            $calculator = new Calculator($_POST);
            $message    = $calculator->getResult();
            include 'pages/calculator.php';
        }



        elseif ($_GET['page'] == 'series')
        {
            include 'pages/series.php';
        }
        elseif ($_GET['page'] == 'sum-series')
        {
            include 'pages/sum-series.php';
        }
        elseif ($_GET['page'] == 'odd-even')
        {
            include 'pages/odd-even.php';
        }
    }