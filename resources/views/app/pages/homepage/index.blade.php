@extends('app.layout.app', ['bodyClass' => 'page-homepage'])

@section('body')
    <section class="first-section">
        <div class="left-background-img"></div>
        <div class="headings">
            <div class="container">
            <h1>Looking For Laravel Training?</h1>
            <h3>You’ve come to the right place</h3>
                </div>
        </div>

        <div class="main-text">
            <div class="container">
            <p>We are a highly experienced, highly skilled team of Laravel developers from the UK. We have built countless systems and sites using the worlds most popular PHP framework, and are the North of England's leading Laravel agency.
            </p>
            </div>
        </div>
    </section>


    <section class="third-section">
        <div class="container">
            <h1>What We Provide</h1>
            <p class="line"></p>
        </div>

        <div class="container">
            <div class="box">
                <img src="images/gear.png"/>
                <h1>Made for Developers</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras dapibus vulputate diam eu pretium. Mauris elit orci, ultricies id fermentum vel, porta et eros.
                </p>
            </div>


            <div class="box">
                <img src="images/gear.png"/>
                <h1>Modular Architecture</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras dapibus vulputate diam eu pretium. Mauris elit orci, ultricies id fermentum vel, porta et eros.
                </p>
            </div>

            <div class="box">
                <img src="images/gear.png"/>
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
                <p class="line"></p>
            </div>
            <div class="section-content">
                <div class="text-box">
                    <p><span>Individuals</span> who want to learn laravel.</p>
                </div>
                <div class="text-box">
                    <p><span>Teams</span> can come to us or have a private course at thier workplace.can come to us or have a private course at thier workplace.can come to us or have a private course at thier workplace.can come to us or have a private course at thier workplace.can come to us or have a private course at thier workplace.</p>
                </div>
                <div class="text-box">
                    <p><span>Agencies</span> can come to us or have a private course at their workplace.</p>
                </div>
                <p>Interested? <a class="btn btn-default" href="#" role="button">Get In Touch</a></p>
            </div>
        </div>
    </section>


    <section class="fifth-section">
       <div class="container">
           <h3>Our Trainers are trusted by businesses of all sizes, worldwide</h3>

           <div class="trainees-img">
               <img src="images/NHS.png" class="first-img"/>
               <img src="images/YPS.png" class="center-img"/>
               <img src="images/YBO.png" class="last-img"/>
            </div>
       </div>
    </section>
@endsection
