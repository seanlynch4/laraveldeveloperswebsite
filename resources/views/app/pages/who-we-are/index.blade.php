@extends('app.layout.app', ['bodyClass' => 'page-whoweare'])

@section('body')
    <section class="whoweare-section-heading">
        <div class="container">
            <div class="img"></div>
            <div class="heading">
                <h1>WHO WE ARE</h1>
            </div>
        </div>
    </section>

    <section class="whoweare-section-main-description">
        <div class="container">
            <h3>We are a highly experienced, highly skilled team of Laravel developers from the UK. We have built countless systems and sites using the worlds most popular PHP framework, and are the North of England's leading Laravel agency.
            </h3>
        </div>

    </section>

    <section class="whoweare-section-whatwedo">
        <div class="container">

        </div>
    </section>


    <section class="whoweare-section-trainers">
        <div class="container">

            <div class="box">
                <img src="images/CraigSansam.png"/>
                <h1>Craig Sansam</h1>
                <p><span>Role At Netsells:</span> Lead Developer</p>
                <p><span>About:</span> Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam porta sem malesuada magna mollis euismod. Cras mattis consectetur purus sit amet fermentum. Integer posuere erat a ante venenatis dapibus posuere.
                </p>
            </div>

            <div class="box">
                <img src="images/SamTurrell.png"/>
                <h1>Sam Turrell</h1>
                <p><span>Role At Netsells:</span> Lead Frontend Developer</p>
                <p><span>About:</span> Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam porta sem malesuada magna mollis euismod. Cras mattis consectetur purus sit amet fermentum. Integer posuere erat a ante venenatis dapibus posuere.
                </p>
            </div>

            <div class="box">
                <img src="images/ScottBroughton.png"/>
                <h1>Scott Broughton</h1>
                <p><span>Role At Netsells:</span> Lead Designer</p>
                <p><span>About:</span> Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam porta sem malesuada magna mollis euismod. Cras mattis consectetur purus sit amet fermentum. Integer posuere erat a ante venenatis dapibus posuere.
                </p>
            </div>
        </div>
    </section>
@endsection