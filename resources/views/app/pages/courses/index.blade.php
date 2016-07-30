@extends('app.layout.app', ['bodyClass' => 'page-courses'])

@section('body')
    <section class="courses-section-heading">
        <div class="container">
            <div class="img"></div>
            <div class="heading">
                <h1>COURSES</h1>
            </div>
        </div>
    </section>

    <section class="courses-section-about">
        <div class="container">

            <h1>How It Works</h1>
            <p class="line"></p>



        <div class="box">
            <img src="images/calendar.png"/>
            <h3>Pick A Few Dates</h3>
            <p>Select the dates that you are available.
            </p>
        </div>

        <div class="box">
            <img src="images/contact-form.png"/>
            <h3>Enter A Few Details</h3>
            <p>Enter your contact details so we can get back to you.
            </p>
        </div>


        <div class="box">
            <img src="images/mail.png"/>
            <h3>We’ll Get Back To You</h3>
            <p>Wait for an email back confirming a date and a cost.
            </p>
        </div>


        <div class="box">
            <img src="images/training.png"/>
            <h3>Let The Training Begin</h3>
            <p>Learn and advance your skills in Laravel Development
            </p>
        </div>
    </section>

    <section class="courses-section-list">
        <div class="container">
            <div class="lists">
                <ul>
                    <li>BEGINNER</li>
                    <li>View and Routes</li>
                    <li>Controllers</li>
                    <li>Manage CSS and JS</li>
                    <li>Fetching Data</li>
                    <li>Database relationships with Eloquent</li>
                    <li>Forms</li>
                    <li>Validation</li>
                </ul>

                <ul>
                    <li>INTERMEDIATE</li>
                    <li>Laravel Elixir</li>
                    <li>Var, Let or Const</li>
                    <li>Default Parameters</li>
                    <li>Classes</li>
                    <li>Testing</li>
                    <li>Return Type Declarations</li>
                    <li>Grouped Imports</li>
                </ul>

                <ul>
                    <li>ADVANCED</li>
                    <li>Middleware</li>
                    <li>Normalization</li>
                    <li>Refactoring</li>
                    <li>Use Cases</li>
                    <li>Form Objects</li>
                    <li>Domain Events</li>
                    <li>View Models</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="courses-section-middle-banner">
        <div class="container">
            <p>Want something a bit more tailored? </p><a class="btn btn-default" href="#" role="button">Get In Touch</a>
        </div>
    </section>

    <section class="courses-section-book">
        <h1>Book a Course Now</h1>
        <p class="line"></p>

        <div class="calendar-section">
            <h3>What dates are you avaialable?</h3>
            <div class="calendar">
                <div id="datepicker"></div>
            </div>
        </div>
        <div class="bookingform-section">

                <form>
                    <label>Name</label>
                    <input type="text" name="Name">

                    <label>Email Address</label>
                    <input type="text" name="email">

                    <label>Contact Number</label>
                    <input type="text" name="telephone">

                    <label>Address</label>
                    <input type="text" name="address">

                    <label>Postcode</label>
                    <input type="text" name="postcode">

                    <label>What type of Course:</label>
                    <div class="course-lvl">
                        <input id="Beginner" type="radio" name="course-lvl" value="Beginner">
                        <label for="Beginner">Beginner</label>

                        <input id="Intermediate" type="radio" name="course-lvl" value="Intermediate">
                        <label for="Intermediate">Intermediate</label>

                        <input id="Advanced" type="radio" name="course-lvl" value="Advanced">
                        <label for="Advanced">Advanced</label>
                    </div>

                    <label>How big is your team?</label>
                    <div class="team-size">
                        <input id="1-5" type="radio" name="team-size" value="1-5">
                        <label for="1-5">1-5</label>

                        <input id="6-10" type="radio" name="team-size" value="6-10">
                        <label for="6-10">6-10</label>

                        <input id="11-15" type="radio" name="team-size" value="11-15">
                        <label for="11-15">11-15</label>

                        <input id="15+" type="radio" name="team-size" value="15+">
                        <label for="15+">15+</label>
                    </div>

                    <a class="btn btn-default" href="courses" role="button">Request Booking</a>

                </form>



        </div>

    </section>
@endsection