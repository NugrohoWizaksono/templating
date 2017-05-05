<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8"><!--Import Google Icon Font-->
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="css/bootstrap.css" />
        <link rel="stylesheet" href="css/materialize.css" />
        <title>Blogs</title>
    </head>
    <body class="grey lighten-4">
        <!-- Dropdown Structure -->
        <ul id="dropdown1" class="dropdown-content">
          <li><a href="#!">one</a></li>
          <li><a href="#!">two</a></li>
          <li class="divider"></li>
          <li><a href="#!">three</a></li>
        </ul>
        <nav class="blue-grey darken-4">
            <div class="container">
                <div class="nav-wrapper">
                    <ul class="left hide-on-med-and-down">
                        <li><a href="/">Home</a></li>
                        <li><a href="/">Blogs</a></li>
                        <!-- Dropdown Trigger -->
                        <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Contact Us<i class="material-icons right">arrow_drop_down</i></a></li>
                    </ul>
                    <form class="right">
                        <div class="input-field">
                            <input id="search" type="search" required>
                            <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                            <i class="material-icons">close</i>
                        </div>
                    </form>
                </div>
            </div>
        </nav>
        <div class="container">
            <div class="row">
                <div class="col s1">
                    <img width="250px" src="image/logo.png" alt="" />
                </div>
            </div>
        </div>
        
        
        <div class="container">
            <div class="white">
                <div class="row white">
                    <div class="col s12 m12 xl12">sdfsdfs</div>
                </div>
            </div>
        </div>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.js"></script>
    <script type="text/javascript" src="js/materialize.js"></script>
    <script type="text/javascript">
    $(document).ready(function (){
        $('.button-collapse').sideNav({
            menuWidth: 400, // Default is 300
            edge: 'left', // Choose the horizontal origin
            closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
            draggable: true // Choose whether you can drag to open on touch screens
        });
        $(".dropdown-button").dropdown({
            hover:true
        });
    });
    </script>
    </body>
</html>
