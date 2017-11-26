<!DOCTYPE html>
<html>
<head>
    <title>9Pochana</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{asset('css/styles.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/peel-text.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/lato.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/catalog.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/vote.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css"
          integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Barlow+Condensed" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"
            integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh"
            crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"
            integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ"
            crossorigin="anonymous"></script>
</head>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">9POCHANA</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#today-parallax">Today's</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">Todo</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#vote-parallax">Vote</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#contact-parallax">Contact Us</a>
                </div>
            </li>
            <li class="nav-item">
                @guest
            <li class="dropdown-login">
                <a href="#" id="navbarDropdown" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                   aria-expanded="false"><b>Login</b><span class="caret"></span></a>
                <ul id="login-dp" class="dropdown-menu">
                    <li>
                        <div class="row">
                            <div class="col-md-12">
                                <form class="form" method="POST" action="{{ route('login') }}" id="login-nav">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <label class="sr-only" for="exampleInputEmail2">Username</label>
                                        <input type="email" class="form-control" name="email" id="exampleInputEmail2"
                                               placeholder="Email address" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="exampleInputPassword2">Password</label>
                                        <input type="password" name="password" class="form-control"
                                               id="exampleInputPassword2" placeholder="Password" required>
                                        <div class="help-block text-right"><a href="">Forget the password ?</a></div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">
                                            Sign in
                                        </button>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox"> keep me logged-in
                                        </label>
                                    </div>
                                </form>
                            </div>
                            <div class="bottom text-center">
                                New here ? <a href="{{ route('register') }}"><b>Join Us</b></a>
                            </div>
                        </div>
                    </li>
                </ul>
            </li>
            @else
            <li class="dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"
                   aria-haspopup="true">
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <ul class="dropdown-menu">
                    <li>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            Logout
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>
            </li>
            @endguest
            </li>

        </ul>


    </div>
</nav>


<body>
<div class="parallax">
    <h2 class="logo9">
        <svg viewBox="0 0 960 300">
            <symbol id="s-text">
                <text text-anchor="middle" x="50%" y="58%">9POCHANA</text>
            </symbol>
            <g class="g-ants">
                <use xlink:href="#s-text" class="text-copy"></use>
                <use xlink:href="#s-text" class="text-copy"></use>
                <use xlink:href="#s-text" class="text-copy"></use>
                <use xlink:href="#s-text" class="text-copy"></use>
                <use xlink:href="#s-text" class="text-copy"></use>
            </g>
        </svg>
        <p class="logo-desc">Made from heart Every Dishes</p>
    </h2>
</div>
<div class="today-notice">
    <div class="today-border">
        <p class="today-word">DAILY FRESH AND MADE FROM HEART</p>
        <p class="today-wrd">ENJOY YOUR EPIC MEALS♥</p>
    </div>
</div>

<div id="today-parallax">
    <div class="menu">
        <p aria-label="menus">
            <span data-text="T">T</span>
            <span data-text="O">O</span>
            <span data-text="D">D</span>
            <span data-text="A">A</span>
            <span data-text="Y">Y</span>
            <span data-text="'S">'S</span>
            <span data-text="M">M</span>
            <span data-text="E">E</span>
            <span data-text="N">N</span>
            <span data-text="U">U</span>
            <span data-text="S">S</span>
        </p>
    </div>
    <div id="today">
        <figure class="snip1246">
            <img src="{{asset('img/1893.jpg')}}" alt="kfc"/>
            <figcaption>
                <h2>ROASTED CHICKEN</h2>
                <p>BAKED CHICKEN WITH LEMON & CHEESE</p>
                <div class="price">{{ $count[0] }}</div>
            </figcaption>
        </figure>
        <figure class="snip1246">
            <img src="{{asset('img/2996.jpg')}}" alt="spgt"/>
            <figcaption>
                <h2>SPAGHETTI BOLOGNESE</h2>
                <p>A NOODLE WITH MEAT-BALL SAUCE</p>
                <div class="price">{{ $count[1] }}</div>
            </figcaption>
        </figure>
        <figure class="snip1246">
            <img src="{{asset('img/breakfast.jpg')}}" alt="brf"/>
            <figcaption>
                <h2>SPECIAL BREAKFAST</h2>
                <p>CROISSANT WITH FRIED EGG AND SAUSAGE</p>
                <div class="price">{{ $count[2] }}</div>
            </figcaption>
        </figure>
        <figure class="snip1246">
            <img src="{{asset('img/para4.jpg')}}" alt="brf"/>
            <figcaption>
                <h2>KITCHEN</h2>
                <p>JUST A KITCHEN</p>
                <div class="price">{{ $count[3] }}</div>
            </figcaption>
        </figure>
        <figure class="snip1246">
            <img src="{{asset('img/1506.jpg')}}" alt="brf"/>
            <figcaption>
                <h2>MOUSLIE YOGURT</h2>
                <p>A HEALTHY DESSERT AFTER MEAL</p>
                <div class="price">{{ $count[4] }}</div>
            </figcaption>
        </figure>
        <figure class="snip1246">
            <img src="{{asset('img/giphy.gif')}}" alt="brf"/>
            <figcaption>
                <h2>SHELTER</h2>
                <p>THE RESTUARANT'S SIGNATURE</p>
                <div class="price">{{ $count[5] }}</div>
            </figcaption>
        </figure>
    </div>
</div>
<div class="vote-contain">
    <div class="vote">
        <div id="app"></div>
    </div>
</div>

<div id="vote-parallax">
    <div class="let-vote">
        <p>DECIDE YOUR OWN MEALS BY YOUR SELF</p>
        <p>HERE NOW!!</p>
        <!--div class="votesas">
            <a href="#" class="social-container codepen">
                <div class="social-cube">
                    <div class="front">
                        VOTE NOW
                    </div>
                    <div class="bottom">
                        YUMMY
                    </div>
                </div>
            </a>
        </div-->
    </div>
    <div id="all-food">
        <form action="/vote" method="post" class="foods">
            {{ csrf_field() }}
            <figure class="snip1247">
                <input type="checkbox" id="vote1" name="vote1">
                <label for="vote1"><img src="{{asset('img/1893.jpg')}}" alt="kfc"/></label>
            </figure>
            <figure class="snip1247">
                <input type="checkbox" id="vote2" name="vote2">
                <label for="vote2"><img src="{{asset('img/2996.jpg')}}" alt="spgt"/></label>
            </figure>
            <figure class="snip1247">
                <input type="checkbox" id="vote3" name="vote3">
                <label for="vote3"><img src="{{asset('img/breakfast.jpg')}}" alt="brf"/></label>
            </figure>
            <figure class="snip1247">
                <input type="checkbox" id="vote4" name="vote4">
                <label for="vote4"><img src="{{asset('img/para4.jpg')}}" alt="brf"/></label>
            </figure>
            <figure class="snip1247">
                <input type="checkbox" id="vote5" name="vote5">
                <label for="vote5"><img src="{{asset('img/1506.jpg')}}" alt="brf"/></label>
            </figure>
            <figure class="snip1247">
                <input type="checkbox" id="vote6" name="vote6">
                <label for="vote6"><img src="{{asset('img/(21).jpg')}}" alt="brf"/></label>
            </figure>
            <figure class="snip1247">
                <input type="checkbox" id="vote7" name="vote7">
                <label for="vote7"><img src="{{asset('img/(1).jpg')}}" alt="brf"/></label>
            </figure>
            <figure class="snip1247">
                <input type="checkbox" id="vote8" name="vote8">
                <label for="vote8"><img src="{{asset('img/(2).jpg')}}" alt="brf"/></label>
            </figure>
            <figure class="snip1247">
                <input type="checkbox" id="vote9" name="vote9">
                <label for="vote9"><img src="{{asset('img/(3).jpg')}}" alt="brf"/></label>
            </figure>
            <figure class="snip1247">
                <input type="checkbox" id="vote10" name="vote10">
                <label for="vote10"><img src="{{asset('img/(4).jpg')}}" alt="brf"/></label>
            </figure>
            <figure class="snip1247">
                <input type="checkbox" id="vote11" name="vote11">
                <label for="vote11"><img src="{{asset('img/(5).jpg')}}" alt="brf"/></label>
            </figure>
            <figure class="snip1247">
                <input type="checkbox" id="vote12" name="vote12">
                <label for="vote12"><img src="{{asset('img/(6).jpg')}}" alt="brf"/></label>
            </figure>
            <figure class="snip1247">
                <input type="checkbox" id="vote13" name="vote13">
                <label for="vote13"><img src="{{asset('img/(7).jpg')}}" alt="brf"/></label>
            </figure>
            <figure class="snip1247">
                <input type="checkbox" id="vote14" name="vote14">
                <label for="vote14"><img src="{{asset('img/(8).jpg')}}" alt="brf"/></label>
            </figure>
            <figure class="snip1247">
                <input type="checkbox" id="vote15" name="vote15">
                <label for="vote15"><img src="{{asset('img/(9).jpg')}}" alt="brf"/></label>
            </figure>
            <figure class="snip1247">
                <input type="checkbox" id="vote16" name="vote16">
                <label for="vote16"><img src="{{asset('img/(10).jpg')}}" alt="brf"/></label>
            </figure>
            <figure class="snip1247">
                <input type="checkbox" id="vote17" name="vote17">
                <label for="vote17"><img src="{{asset('img/(11).jpg')}}" alt="brf"/></label>
            </figure>
            <figure class="snip1247">
                <input type="checkbox" id="vote18" name="vote18">
                <label for="vote18"><img src="{{asset('img/(12).jpg')}}" alt="brf"/></label>
            </figure>
            <figure class="snip1247">
                <input type="checkbox" id="vote19" name="vote19">
                <label for="vote19"><img src="{{asset('img/(13).jpg')}}" alt="brf"/></label>
            </figure>
            <figure class="snip1247">
                <input type="checkbox" id="vote20" name="vote20">
                <label for="vote20"><img src="{{asset('img/(14).jpg')}}" alt="brf"/></label>
            </figure>
            <figure class="snip1247">
                <input type="checkbox" id="vote21" name="vote21">
                <label for="vote21"><img src="{{asset('img/(15).jpg')}}" alt="brf"/></label>
            </figure>
    </div>
    <div id="vote-btn">
        <input type="submit" id="butvote" class="btn btn-default" value="vote">
    </div>
    </form>
</div>
<div id="contact-parallax">
    <div class="contact-head">
            <p aria-label="team">
                <span data-text="T">T</span>
                <span data-text="E">E</span>
                <span data-text="A">A</span>
                <span data-text="M">M</span>
                <span data-text="-">-</span>
                <span data-text="M">M</span>
                <span data-text="E">E</span>
                <span data-text="M">M</span>
                <span data-text="B">B</span>
                <span data-text="E">E</span>
                <span data-text="R">R</span>
                <span data-text="S">S</span>
            </p>
    </div>
    <div class="wrapper">
        <div class="gallery">
            <ul>
                <li><img class="contact-image" src="{{asset('img/phee.jpg')}}" alt="Phee Chayanin" >
                    <p><a href="https://www.facebook.com/chayanin.lumyong">Chayanin Lumyong</a></p></li>
                <li><img class="contact-image" src="{{asset('img/nueng.jpg')}}" alt="Kitrawee onez" >
                    <p><a href="https://www.facebook.com/ONEZ.Nueng">Kitrawee Pasukrojsin</a></p></li>
                <li><img class="contact-image" src="{{asset('img/kim.jpg')}}" alt="Kim kho" >
                <p><a href="https://www.facebook.com/kimkosit10690">Khosit Khositkunakorn</a></p></li>
                <li><img class="contact-image" src="{{asset('img/fuk.jpg')}}" alt="f'fluke piyapol" >
                <p><a href="https://www.facebook.com/FlukePiyapol">Piyapol Permpongpaibul</a></p></li>
                <li><img class="contact-image" src="{{asset('img/leo.jpg')}}" alt="leo leo Dod" >
                    <p><a href="https://www.facebook.com/error34215">Nithipon Siriwattanarodom</a></p></li>
            </ul>
        </div>
</div>
</div>


</body>
</html>