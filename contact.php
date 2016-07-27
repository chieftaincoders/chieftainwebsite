<!DOCTYPE html>
<html lang="en">
<head>

    <?php require_once("lib/head-utils.php");?>

</head>
<body>

<?php require_once("navbar.php");?>


<div class="mainImage-2" datasrc="lib/images/Starry-Night.jpg">
    <h1>Contact</h1>
</div>

<br>

<div class="Bloop">

    <div class="container">
        <h4>Chieftain Coders</h4>
        <p class="para">
            <br>
            Tel: (505) 368-5161
            <br>
            Fax: (505) 368-5796
            <br>
            Email: shs@centralschools.org
        </p>

        <br>
        <div class="container">
            <h3 class="forp"> Message us:</h3>
            <form class="forp">
                <div class="form-group">
                    <label for="exampleInputName1">Name (required)</label>
                    <input type="text"  class="form-control" id="exampleInputName1" placeholder="Marcel Stylinson">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Your Email (required)</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="exampleInputsubject1">Message</label>
                    <input type="text" class="form-control" placeholder="Subject">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>
</div>
</body>

<script src="lib/js/script.js"></script>

</html>