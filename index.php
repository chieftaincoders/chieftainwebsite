<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once("lib/head-utils.php");?>

</head>
<body>

<nav class="navabar navbar-transparent navbar-fixed-top" role = "navigation">

    <div class = "navbar-header">
        <button type = "button" class = "navbar-toggle btn btn-default" id="button"
                data-toggle = "collapse" data-target = "#example-navbar-collapse">
            <span class = "sr-only">Toggle navigation</span>
            <span class = "icon-bar"></span>
            <span class = "icon-bar"></span>
            <span class = "icon-bar"></span>
        </button>
    </div>

    <div class = "collapse navbar-collapse" id = "example-navbar-collapse" >
        <ul class = "nav navbar-nav">
            <li class = "dropdown">
                    <li id="dropdownLists"><a href="index.php">Home</a></li><br>
                    <li id="dropdownLists"><a href="#">About</a></li><br>
                    <li id="dropdownLists"><a href="#">Portfolio</a></li><br>
                    <li id="dropdownLists"><a href="#">Fundraiser</a></li><br>
                    <li id="dropdownLists"><a href="#">Contact Us</a></li><br>
            </li>
        </ul>
    </div>
</nav>


<!--=================================================
                      Carousel
==================================================-->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img class="first-slide"
                 src="http://tinyurl.com/j33fd3r"
                 alt="firstSlide">
            <div class="container">
                <div class="carousel-caption">
                    <h1 class="leadtag-carousel"> Hello</h1>
                </div>
            </div>
        </div>
        <div class="item">
            <img class="second-slide"
                 src="http://tinyurl.com/j33fd3r"
                 alt="secondSlide">
            <div class="container">
                <div class="carousel-caption">
                    <h1>Hello</h1>
                </div>
            </div>
        </div>
        <div class="item">
            <img class="third-slide"
                 src="http://tinyurl.com/j33fd3r"
                 alt="thirdSlide">
            <div class="container">
                <div class="carousel-caption">
                    <h1>Hello</h1>
                </div>
            </div>
        </div>
    </div>
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>

</div>
<!-- End of carousel-->

<h1> Derp </h1>

</body>
</html>
