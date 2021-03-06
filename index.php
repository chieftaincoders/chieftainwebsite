<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<head>
    <?php require_once("lib/headUtils.php");?>
</head>
<body>

<main>
    <input id="home" type="radio" name="menu" checked="checked"/>
    <section>
      <div class="row" style="padding-right: 5%;">
        <div class="col-md-2">
          <img class="animated bounceInLeft" id="chiefLogo" src="lib/pictures/chieftainsCoders.png" alt="" />
        </div>
        <div class="col-md-4 col-md-offset-3">
          <h3>Shiprock</h3>
          <h1>High</h1>
          <h4 id="chieftains">chieftains</h4><br><br>
          <h2>coders</h2>
        </div>
        <div class="col-md-2">
          <img class="animated bounceInRight" id="chiefLogo" src="lib/pictures/chieftainsCoders.png" alt="" />
        </div>
      </div>
    </section>

    <input id="about" type="radio" name="menu"/>
    <section>
        <article>
            <span><h1 id="aboutHeadline"> About:</h1></span>
            <span><h1 id="weAre">We are</h1></span>
            <span><h2 id="chieftainsPadding">junior web developers</h2></span>
            <span><h4>We are located </h4><h2>on the reservation</h2></span>
            <span><h5>of Shiprock, </h5><h1>NEW MEXCIO</h1> <h6> We vary in age</h6> <h4> from</h4><h2> 15</h2><h4> to</h4><h1> 17</h1></span>
            <span><p><b>still</b> check it off</p> <h5>even when there's</h5> <p><b>no <u><s>common</s></u> parent.</b></p></span>
            <span><h2>- all YOU</h2> <h1>need</h1> <h4>to<br/>do</h4></span>
            <span><p>is place the <em>input</em></p> <p><b>immediately before</b></p> <p>its corresponding section.</p></span>
            <span><h2>CSS</h2> <h1>+</h1> <h4>selector takes care<br/><b>of the <u>rest</u></b>.</h4></span>
        </article>
    </section>


    <input id="portfolio" type="radio" name="menu"/>
    <section>
        <article>
            <span><h3>All the</h3></span>
            <span><h1>students</h1> <h2>in</h2> <h4>this<br/>program</h4></span>
            <span><h4>made their own websites.<br/>The websites</h4> <h2>shows a little bit</h2></span>
            <span><h6>about <b>the</b></h6> <h4>students</h4></span>
            <span><h1>hobbies,</h1></span>
            <span>&nbsp;<h2>personalities</h2></span>
            <span><h1>&amp;</h1> <p><em><u>who the</u>y are. Test blargh</em></p></span>
            
            <div class="container">
                <h2>The students personal websites:</h2>
                <ul>
                    <a href="http://allietech.com"> <h4>Alan Taliman</h4></a>
                    <a href="http://osheadev.com/"><h4>O'shea Goodman</h4></a>
                    <a href="http://riusbearjew.com "> <h4>Rius Goodman</h4></a>
                    <a href="http://amoshma.com "> <h4>Amber Henderson</h4></a>
                    <a href="http://keasioux.com"><h4>Kea Chico</h4></a>
                    <a href="http://adamjpett.com"><h4>Adam Pettigrew</h4></a>
                    <a href="http://danyelmarie.com"><h4>Danyel Johnson</h4></a>
                    <a href="http://marissashorty.com "><h4>Marissa Shorty</h4></a>
                    <a href="http://robinelwood.com"><h4>Courtney Elwood</h4></a>
                </ul>
            </div>
        </article>



       <!-- <div id="floatright" class="col-lg-4 col-md-6 col-sm-6">
            <img id="photos" src="http://tinyurl.com/h4mkoaz" class="img-circle">
            <p id="codingCoders"><strong> Amber Henderson </strong>
                <br>
            <p>
                <br>
                <i class="em em-panda_face"></i>
                <i class="em em-arrow_down"></i>
                <i class="em em-panda_face"></i>
                <i class="em em-arrow_down"></i>
                <i class="em em-panda_face"></i>
            </p>
            <a id="codersWeb" href="http://amoshma.com/">
                <button type="button" class="myButton">
                    Amber's Web
                </button>
            </a>
            </p>
        </div>

        <div id="floatleft" class="col-lg-4 col-md-6 col-sm-6">
            <img id="photos" src="lib/pictures/alan.png" class="img-circle">
            <p id="codingCoders"><strong> Alan Taliman </strong>
                <br>
            <p> Hi my name is Alan Taliman, I'm gonna be a junnior this year 2016-2017, graduating in 2018 as
                a senior. derp
                <br>
                <i class="em em-arrow_down"></i>
                <i class="em em-smile"></i>
                <i class="em em-arrow_down"></i>
            </p>
            <a id="codersWeb" href="http://allietech.com/">
                <button type="button" class="myButton">
                    Alan's Web
                </button>
            </a>
            </p>
        </div>

        <div id="floatleft" class="col-lg-4 col-md-6 col-sm-6">
            <img id="photos" src="lib/pictures/rius.jpg" class="img-circle">
            <p id="codingCoders"><strong> Rius Goodman </strong>
                <br>
            <p>
                <br>
                <i class="em em-video_game"></i>
                <i class="em em-space_invader"></i>
                <i class="em em-video_game"></i>
            </p>
            <a id="codersWeb" href="http://riusbearjew.com/">
                <button type="button" class="myButton">
                    Rius's Web
                </button>
            </a>
            </p>
        </div>

        <div id="floatright" class="col-lg-4 col-md-6 col-sm-6">
            <img id="photos" src="http://tinyurl.com/hatgfm6" class="img-circle">
            <p id="codingCoders"><strong> Kea Chico </strong>
                <br>
            <p>
                <br>
                <i class="em em-arrow_down"></i>
                <i class="em em-pizza"></i>
                <i class="em em-arrow_down"></i>
            </p>
            <a id="codersWeb" href="http://keasioux.com">
                <button type="button" class="myButton">
                    Kea's Web
                </button>
            </a>
            </p>
        </div>

        <div id="floatright" class="col-lg-4 col-md-6 col-sm-6">
            <img id="photos" src="http://tinyurl.com/hatgfm6" class="img-circle">
            <p id="codingCoders"><strong> Marissa Shorty </strong>
                <br>
            <p>
                <br>
                <i class="em em-arrow_down"></i>
                <i class="em em-smiley_cat"></i>
                <i class="em em-arrow_down"></i>
            </p>
            <a id="codersWeb" href="http://marissashorty.com/#landHere">
                <button type="button" class="myButton">
                    Marissa's Web
                </button>
            </a>
            </p>
        </div>

        <div id="floatleft" class="col-lg-4 col-md-6 col-sm-6">
            <img id="photos" src="lib/pictures/catThreeRed.JPG" class="img-circle">
            /*                http://tinyurl.com/hdjrpht        */
            <p id="codingCoders"><strong> O'Shea Goodman </strong>
                <br>
            <p> Hello my name is O'Shea Goodman i am going to be a Junior at Shiprock High School during the
                years of 2016-2017 i will be graduating with the class of 2018. My personal site is below just
                click the button to learn more about me.
                <br>
                <i class="em em-point_down"></i>
                <i class="em em-hatching_chick"></i>
                <i class="em em-point_down"></i>
            </p>
            <a id="codersWeb" href="http://osheadev.com/">
                <button type="button" class="myButton">
                    O'Shea's Web
                </button>
            </a>
            </p>
        </div>

        <div id="floatright" class="col-lg-4 col-md-6 col-sm-6">
            <img id="photos" src="http://tinyurl.com/hatgfm6" class="img-circle">
            <p id="codingCoders"><strong> Courtney Elwood </strong>
                <br>
            <p>
                <br>
                <i class="em em-arrow_down"></i>
                <i class="em em-pizza"></i>
                <i class="em em-arrow_down"></i>
            </p>
            <a id="codersWeb" href="http://robinelwood.com/">
                <button type="button" class="myButton">
                    Courtney's Web
                </button>
            </a>
            </p>
        </div>



        <div id="floatright" class="col-lg-4 col-md-6 col-sm-6">
            <img id="photos" src="http://tinyurl.com/hatgfm6" class="img-circle">
            <p id="codingCoders"><strong> Adam Pettigrew </strong>
                <br>
            <p>
                <br>
                <i class="em em-arrow_down"></i>
                <i class="em em-pizza"></i>
                <i class="em em-arrow_down"></i>
            </p>
            <a id="codersWeb" href="http://adamjpett.com//">
                <button type="button" class="myButton">
                    Adam's Web
                </button>
            </a>
            </p>
        </div>

        <div id="floatright" class="col-lg-4 col-md-6 col-sm-6">
            <img id="photos" src="http://tinyurl.com/hatgfm6" class="img-circle">
            <p id="codingCoders"><strong> Danyel Johnson </strong>
                <br>
            <p>
                <br>
                <i class="em em-arrow_down"></i>
                <i class="em em-pizza"></i>
                <i class="em em-arrow_down"></i>
            </p>
            <a id="codersWeb" href="http://danyelmarie.com//">
                <button type="button" class="myButton">
                    Danyel's Web
                </button>
            </a>
            </p>
        </div>-->
    </section>

    <input id="donations" type="radio" name="menu"/>
    <section>
        <article>
            <span><h3>But semantics!!</h3></span>
            <span><h2>oh...</h2> <h1>yeah...</h1> <h4><em>about<br/>that...</em></h4></span>
            <span><h5><em>Holy cow!</em></h5> <h4>&nbsp;Check out this&nbsp;</h4> <h3><b>amazing</b></h3></span>
            <span><h6><em>svg path&nbsp;</em> <u><s>animation</s></u></h6> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 320"><g><path class="orange" d="m320.332 174.25c0 0 53.59 105.839 162.621 105.608 145.539-.309 141.489-239.6394-4.525-239.853-130.462-.1909-169.6 234.495-300.193 239.853-172.94203 7.095-167.6333-237.2565-4.526-239.853 101.036-1.6084 146.623 134.245 146.623 134.245" fill="none" stroke="#f7b37f" stroke-linecap="miter" stroke-width="60" stroke-miterlimit="2"/>
                        <path class="white" d="m320.332 174.25c0 0 53.59 105.839 162.621 105.608 145.539-.309 141.489-239.6394-4.525-239.853-130.462-.1909-169.6 234.495-300.193 239.853-172.94203 7.095-167.6333-237.2565-4.526-239.853 101.036-1.6084 146.623 134.245 146.623 134.245" fill="none" stroke="#fff" stroke-linecap="miter" stroke-width="60" stroke-miterlimit="2"/>
                        <path class="black" d="m320.332 174.25c0 0 53.59 105.839 162.621 105.608 145.539-.309 141.489-239.6394-4.525-239.853-130.462-.1909-169.6 234.495-300.193 239.853-172.94203 7.095-167.6333-237.2565-4.526-239.853 101.036-1.6084 146.623 134.245 146.623 134.245" fill="none" stroke="#3f3f37" stroke-linecap="miter" stroke-width="63" stroke-miterlimit="2"/></g></svg>
            </span>
            <p>(ps. Still no JavaScript)</p>
        </article>
    </section>

    <input id="contact" type="radio" name="menu"/>
    <section>
        <article>
            <span><h3>Shiprock High </h3></span>
            <span><h2>CONTACT US</h2></span>
            <span><h2><u><s>Follow </s></u> us ----> </h2> <h5><s><a href="https://www.facebook.com/shiprock.chieftain"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></s><br/><em><a href="https://twitter.com/shschieftains"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></em></h5></span>
            <span><h1>from</h1><h4><u><b>Shiprock</b></u><br/>New Mexico</h4><h2>Shiprock </br> High School</br> U.S. 64</h2></span>
            <span><h4> P.O. Box 3578<br/> Tel: (505) 368-5161 </h4><h5> Shiprock, NM 87401 <br/><s>Fax: (505) 368-5796</s></h5></span>
            <span><u><h5> Email: shs@centralschools.org</h5></u></span>
        </article>
    </section>

    <label for="menu">menu</label>
    <input type="radio" name="menu" id="menu"/>
    <menu>
        <nav>
            <label for="home"><h1>Home</h1></label>
            <label for="about"><h2>About</h2></label>
            <label for="portfolio"><h3>Portfolio</h3></label>
            <label for="donations"><h4>Donations</h4></label>
            <label for="contact"><h5>Contact</h5></label>
        </nav>
    </menu>
</main>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

</body>
</html>
