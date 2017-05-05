<!DOCTYPE HTML>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/materialize.css" />
    <title></title>
</head>
<body class="grey lighten-4">
    <!-- Dropdown Structure -->
    <ul id="dropdown1" class="dropdown-content">
      <li><a href="#!">one</a></li>
      <li><a href="#!">two</a></li>
      <li class="divider"></li>
      <li><a href="#!">three</a></li>
    </ul>
    <nav class="orange z-depth-0">
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
            <div class="col s2">
                <img src="image/logo.png" alt="" height="75px"/>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row white">
            <div class="col s1 orange center white-text">
                <p><b>NEWS</b></p>
            </div>
            <div class="col s11">
            </div>
        </div>
    </div>
    
    <div class="container">
        <div class="row white">
            <!--content blog-->
            <div class="col s9">
                <div class="row">
                    <div class="col s12">
                        <div class="collection " style="border: none">
                            <div href="#!" class="collection-item black-text grey lighten-5 disabled">
                                <span class="new badge orange white-text" data-badge-caption="LASTEST RELEASES"></span>NEW ARTICLE
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!--content-->
                    <div class="col s12" style="border-bottom: 1px dotted orangered; padding-top: 5px">
                        <div class="col s3">
                            <img src="image/118264.png" width="200px" alt="" />
                        </div>
                        <div class="col s9 black-text" style="padding-left: 20px">
                            <div class="col s12">
                                <span style="font-size: 16px;"><b>JUDUL BLOG</b></span>
                            </div>
                            <div class="col s12">
                            <br /><br />
                                Tanggal  <a class="disabled red-text">12 Oktober</a> <i class="material-icons left">date_range</i><br/>
                                Category <a href="" class="blue-text">Magang</a> <i class="material-icons left">label</i>
                                <span class="new badge orange white-text" data-badge-caption="ADMIN"></span>
                            </div>
                        </div>
                    </div>
                    <!--content-->
                    <div class="col s12" style="border-bottom: 1px dotted orangered; padding-top: 5px">
                        <div class="col s3">
                            <img src="image/118264.png" width="200px" alt="" />
                        </div>
                        <div class="col s9 black-text" style="padding-left: 20px">
                            <div class="col s12">
                                <span style="font-size: 16px;"><b>JUDUL BLOG</b></span>
                            </div>
                            <div class="col s12">
                            <br /><br />
                                Tanggal  <a class="disabled red-text">12 Oktober</a> <i class="material-icons left">date_range</i><br/>
                                Category <a href="" class="blue-text">Magang</a> <i class="material-icons left">label</i>
                                <span class="new badge orange white-text" data-badge-caption="ADMIN"></span>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="row">
                    <div class="col s12">
                        <ul class="pagination">
                            <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
                            <li class="active"><a href="#!">1</a></li>
                            <li class="waves-effect"><a href="#!">2</a></li>
                            <li class="waves-effect"><a href="#!">3</a></li>
                            <li class="waves-effect"><a href="#!">4</a></li>
                            <li class="waves-effect"><a href="#!">5</a></li>
                            <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <!--widget-->
            <div class="col s3">
                <div class="row">
                    <div class="col s12">
                        <div class="collection " style="border: none">
                            <div href="#!" class="collection-item white-text orange disabled">
                                NEW ARTICLE
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12">
                        <p>gdjasgh</p>
                    </div>
                </div>
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