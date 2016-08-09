<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once("lib/headUtils.php");?>
</head>
<body>

<main>
    <input id="home" type="radio" name="menu" checked="checked"/>
    <section>
        <h3>Shiprock</h3>
        <h1>High</h1>
        <h4 id="chieftains">chieftains</h4><br><br>
        <h2>coders</h2>
    </section>

    <input id="about" type="radio" name="menu"/>
    <section>
        <article>
            <span><h3 id="headline">About!</h3></span>
            <span id="chieftainsPadding"><h1>We<br/>are</h1></span><br>
            <span><h2 id="chieftainsPadding">junior<br/>web</h2><h2>developers</h2></span>
            <span><h4>honestly<br/>they're</h4> <h2>everywhere</h2></span>
            <span><h5>It turns out that&nbsp;</h5> <h6>a radio input's</h6> <h4>&nbsp;label will</h4></span>
            <span><p><b>still</b> check it off</p> <h5>even when there's</h5> <p><b>no <u><s>common</s></u> parent.</b></p></span>
            <span><h2>- all YOU</h2> <h1>need</h1> <h4>to<br/>do</h4></span>
            <span><p>is place the <em>input</em></p> <p><b>immediately before</b></p> <p>its corresponding section.</p></span>
            <span><h2>CSS</h2> <h1>+</h1> <h4>selector takes care<br/><b>of the <u>rest</u></b>.</h4></span>
        </article>
    </section>


    <input id="portfolio" type="radio" name="menu"/>
    <section>
        <article>
            <span><h3>But why!?</h3></span>
            <span><h1>mostly</h1> <h2>just</h2> <h4>for<br/>fun.</h4></span>
            <span><h4>besides keeping me<br/>busy last weekend</h4> <h2>it offers</h2></span>
            <span><h6>benefits <b>including</b></h6> <h4>(but not limited to)</h4></span>
            <span><h1>stability</h1></span>
            <span>&nbsp;<h2>portability</h2></span>
            <span><h1>&amp;</h1> <p><em><u>versatilit</u>y.</em></p></span>
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
