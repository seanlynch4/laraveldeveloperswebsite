<!DOCTYPE html>

<html>

<head>
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Custom Stylesheet -->

    <link href="css/app.css" rel="stylesheet" />

</head>

<body>

<header>
    <a href="index.html">
            <img src="images/laravel-training-logo.png" />
    </a>



    <div id="myNav" class="overlay">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
        <div class="overlay-content">
            <a href="#">Home.</a>
            <a href="#">Who We Are.</a>
            <a href="#">Courses.</a>
            <a href="#">FAQs.</a>
            <a href="#">Contact Us.</a>
        </div>
    </div>

    <span class="menu" onclick="openNav()">&#9776;</span>

    <script>
        function openNav() {
            document.getElementById("myNav").style.height = "100%";
        }

        function closeNav() {
            document.getElementById("myNav").style.height = "0%";
        }
    </script>
</header>


<section class="first-section">
    <div class="container">
        <h1>WE. ARE. LARAVEL.</h1>
        <h3>We are best for laravel training in the UK</h3>
        <a class="btn btn-default" href="#" role="button">Book Now</a>
    </div>
</section>

<section class="second-section">
    <div class="container">
        <p>We are a highly experienced, highly skilled team of Laravel developers from the UK. We have built countless systems and sites using the worlds most popular PHP framework, and are the North of England's leading Laravel agency.
        </p>
    </div>
</section>


<section class="third-section">
    <div class="container">
        <p>What We Provide</p>
    </div>

    <div class="container">
        <div class="box">
            <img src="Images/gear.png"/>
            <h1>Made for Developers</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras dapibus vulputate diam eu pretium. Mauris elit orci, ultricies id fermentum vel, porta et eros.
            </p>
        </div>


        <div class="box">
            <img src="Images/gear.png"/>
            <h1>Modular Architecture</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras dapibus vulputate diam eu pretium. Mauris elit orci, ultricies id fermentum vel, porta et eros.
            </p>
        </div>

        <div class="box">
            <img src="Images/gear.png"/>
            <h1>Infinitely Scalable</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras dapibus vulputate diam eu pretium. Mauris elit orci, ultricies id fermentum vel, porta et eros.
            </p>
        </div>
    </div>
</section>

<section class="fourth-section">
    <div class="container">
        <div class="section-header">
            <h3>Who is our training for?</h3>
        </div>
        <div class="section-content">
            <p><span>Individuals</span> who want to learn laravel</p>
            <p><span>Teams</span> can come to us or have a private course at thier workplace</p>
            <p><span>Agencies</span> can come to us or have a private course at thier workplace</p>
            <p>Interested? <a class="btn btn-default" href="#" role="button">Get In Touch</a></p>
        </div>
    </div>
</section>


<section class="fifth-section">
   <div class="container">
       <h3>Our Trainers are trusted by businesses of all sizes, worldwide</h3>

       <div class="trainees-img">
           <img src="images/NHS.png" />
           <img src="images/YPS.png" />
           <img src="images/YBO.png" />
        </div>
   </div>
</section>

<footer>
    <p>Laravel is a trademark owned by Taylor Otwell. We are not affiliated with Laravel or Taylor.</p>
</footer>
</body>

</html>
