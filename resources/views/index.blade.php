@extends('layouts.main-app');

@section('body')
<body style="background-color:orange;">

    <section id="home" class="customsection">
        <div class="curvebg col-md-12">
            <nav class="navbar navbar-expand-lg ">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
                    aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{route('login')}}">Login <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('register')}}">Register</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Help</a>
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="row col-md-12">
                <div class="col-md-8" style="margin-left:9%; margin-top:3%;">
                    <img src="{{asset('img/plantliners.png')}}" alt="" />
                    <h2 class="description">A centralized platform for our country's unsung heroes.</h2>
                </div>
            </div>
            <div class="row" style="margin-top:3%;margin-left:5%;">
                <div class="col-md-1"></div>
                <div class="col-md-2">
                    <a href="{{route('admin.login')}}"><input type="submit" class="btnFarmer" value="I'm a Farmer" /></a>
                </div>
                <div class="col-md-2">
                    <a href="{{route('login')}}"><input type="submit" class="btnFarmer" value="I'm a Vendor" /></a>
                </div>
            </div>

        </div>
    </section>
    <section id="intro" class="customsection">
        <div>
            <h1 class="text-center font-weight-bold" style="font-size: 100px;color:white;">What is Plantliners?</h1>
        </div>
        <div class="row" style="width:80%; margin-left:auto; margin-right:auto; margin-top:8%;">
            <p class="text-center" style="color:white; font-size:xx-large;">Plantliners is an initiative that gives
                farmers, our unsung heroes, access to the information and support that they sorely need. This
                centralized system provides farmers and vendors access to agricultural market information, supply and
                demand, market requirements, DA-regulated farm product prices, and full transparency from start to
                finish, all while making agriculture more attractive. </p>
        </div>
    </section>
    <section id="about" class="customsection">
        <br>
        <div>
            <h1 class="text-center font-weight-bold" style="font-size: 100px;color:white;">About Us</h1>
        </div>
        <div class="row col-md-12">
            <p class="text-center" style="color:white; font-weight:bold;margin-left:auto; margin-right:auto;">We are a
                small team of developers that aims to aid Filipino farmers around the country and improve the plight of
                Philippine agriculture through technology and modernization.</p>
        </div>
        <!-- <div class="card"></div>    -->
        <div>
            <h1 class="text-center font-weight-bold" style="font-size: 50px;color:white; margin-top:3%;">The Team</h1>
        </div>
        <div class="row col-md-12" style="margin-top:5%;margin-left:auto;margin-right:auto;">
            <div class="col-md-2 " style="margin: auto;">
            
                <img id="prof_img" src="{{asset('img/miko.png')}}" alt="" />
                <h4 class="font-weight-bold text-center" style="color:white; ">Michael Korllon Aninon</h4>
            </div>
            <div class="col-md-2" style="margin: auto;">
                <img id="prof_img" src="{{asset('img/bryl.png')}}" alt="" />
                <h4 class="font-weight-bold text-center" style="color:white;">Bryl Kezter Lim</h4>
            </div>
            <div class="col-md-2" style="margin: auto;">
                <img id="prof_img"  src="{{asset('img/ian.png')}}" alt="" />
                <h4 class="font-weight-bold text-center" style="color:white;">Ian Lindley Olmoguez</h4>
            </div>
            <div class="col-md-2" style="margin: auto;">
                <img id="prof_img" src="{{asset('img/justin.png')}}" alt="" />
                <h4 class="font-weight-bold text-center" style="color:white;">Justin Manigo</h4>
            </div>

        </div>



    </section>

    <footer id="footer">
        <p>Copyright © Plantliners (Impact Hackathon Demo)</p>
    </footer>
</body>
@endsection