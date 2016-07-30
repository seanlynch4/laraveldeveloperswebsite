@extends('app.layout.app', ['bodyClass' => 'page-contact'])

@section('body')
    <section class="contact-section-heading">
        <div class="container">
            <div class="img"></div>
            <div class="heading">
                <h1>CONTACT US</h1>
            </div>
        </div>
    </section>

    <section class="contact-section-content">
        <div class="container">
            <p>Looking for a course more configured to your needs? Contact us on your medium of choice and we’ll do our best to configure a quote for you.
            </p>
            <p>You can reach us by calling the phone number below, dropping us an email or completing the form on this page. We work Monday - Friday between 9am and 5.30pm (GMT), but are regularly available to answer emails outside of these working hours.
            </p>

        <div class="contact-info">
            <div class="box">
                <img src="images/phone.png"/>
                <h1>01904 217026</h1>
            </div>
            <div class="box">
                <img src="images/email.png"/>
                <h1> info@laraveldevelopers.co.uk</h1>
            </div>
            <div class="box">
                <img src="images/location.png"/>
                <h1>
                    Netsells Ltd.,<br>
                    The Old Sawmill,<br>
                    52 Skeldergate,<br>
                    York,<br>
                    YO1 6DS</h1>
            </div>
        </div>
        <div class="contact-form">
            <form>
                <label>Name</label>
                <input type="text" name="Name">

                <label>Email</label>
                <input type="text" name="email">

                <label>Subject</label>
                <input type="text" name="subject">

                <label>The Details</label>
                <textarea name="message" rows="5" cols="30"></textarea>

                <a class="btn btn-default" href="contact" role="button">Request Booking</a>
            </form>
        </div>
        </div>
    </section>
@endsection