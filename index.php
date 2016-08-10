<!DOCTYPE html>
<html lang="en">
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
            <span><h1>&amp;</h1> <p><em><u>who the</u>y are.</em></p></span>
            
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
        </article>
    </section>

    <input id="donations" type="radio" name="menu"/>
    <section>
        <article>
            <span><h3>But semantics!!</h3></span>
            <span><h2>oh...</h2> <h1>yeah...</h1> <h4><em>about<br/>that...</em></h4></span>
            <span><h5><em>Holy cow!</em></h5> <h4>&nbsp;Check out this&nbsp;</h4> <h3><b>amazing</b></h3></span>
            <span><h6><em>svg path&nbsp;</em> <u><s>animation</s></u></h6> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 320"><g><path class="orange" d="m320.332 174.25c0 0 53.59 105.839 162.621 105.608 145.539-.309 141.489-239.6394-4.525-239.853-130.462-.1909-169.6 234.495-300.193 239.853-172.94203 7.095-167.6333-237.2565-4.526-239.853 101.036-1.6084 146.623 134.245 146.623 134.245" fill="none" stroke="#f7b37f" stroke-linecap="miter" stroke-width="60" stroke-miterlimit="2"/><path class="white" d="m320.332 174.25c0 0 53.59 105.839 162.621 105.608 145.539-.309 141.489-239.6394-4.525-239.853-130.462-.1909-169.6 234.495-300.193 239.853-172.94203 7.095-167.6333-237.2565-4.526-239.853 101.036-1.6084 146.623 134.245 146.623 134.245" fill="none" stroke="#fff" stroke-linecap="miter" stroke-width="60" stroke-miterlimit="2"/><path class="black" d="m320.332 174.25c0 0 53.59 105.839 162.621 105.608 145.539-.309 141.489-239.6394-4.525-239.853-130.462-.1909-169.6 234.495-300.193 239.853-172.94203 7.095-167.6333-237.2565-4.526-239.853 101.036-1.6084 146.623 134.245 146.623 134.245" fill="none" stroke="#3f3f37" stroke-linecap="miter" stroke-width="63" stroke-miterlimit="2"/></g></svg></span>
            <p>(ps. Still no JavaScript)</p>
        </article>
    </section>

    <input id="contact" type="radio" name="menu"/>
    <section>
        <article>
            <span><h3>Who's Udy??</h3></span>
            <span><h2>That's me!</h2></span>
            <span><h2><u><s>I'm</s></u> a</h2> <h5><s>front–end</s><br/><em>developer</em></h5></span>
            <span><h1>from</h1> <h4><u><b>Québec</b></u><br/>Canada</h4> <h2>who</h2></span>
            <span><h2>(</h2> <h4>now quite<br/>ironically</h4> <h2>)</h2> <h5>likes to spend his time<br/><b>writing</b> <u><s>JavaScript</s></u></h5></span>
            <span><h4>check out <b>my</b></h4> <h6><a href="http://codepen.io/udyux/" target="_blank"><s>profile</s></a></h6> <u><h5>for more pens.</h5></u></span>
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
