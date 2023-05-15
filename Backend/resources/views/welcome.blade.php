<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>OMOA-Online Medicine Ordering App</title>
        <link rel="icon" href="template/img/items/omoalogo.png" sizes="36x36" type="template/img/items/omoalogo.png">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <!-- bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

        <!-- Custom styles for this template -->
        <link href="{{asset('template/css/custom.css')}}" rel="stylesheet">
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
                padding:0 5px;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color:#deebf2;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            /* The navbar */
           /* .topnav {
            overflow: hidden;
            background-color: black;
            }*/

            /* Navbar links */
           /* .topnav a {
            float: left;
            color: #f2f2f2;
            text-align: center;
            padding: 13px 15px;
            text-decoration: none;
            font-size: 17px;
            }*/

           /* .topnav a:hover {
            background-color: white;
            color: black;
            }
            */
            .p{
                font-size: 20px;
            }
            .navbar-navv{
                margin-left: 500px;
                padding: 5px;
            }

        </style>
    </head>
    <body> 
      
                <div class="col-lg-12 col-md-6" id="navbar">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="{{ url('/') }}">
                        <img src="{{asset('template/img/items/omoalogonav.png')}}" class="img">
                        OMOA
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                         data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavDropdown">
                            <div class="navbar-navv mr-auto">
                                @if (Route::has('login'))
                                    <div class="topnav">
                                        @auth
                                        
                                        <a class="nav-link active" href="/home">Home</a>
                               
                                        @else
                                   
                                            <a class="nav-link active" href="{{ route('login') }}">Login</a> 
                           
                                        @if (Route::has('register'))
                                       
                                            <a class="nav-link active" href="{{ route('register') }}">Register</a>
                                       
                                        @endif
                                        @endauth
                                        
                                            <a class="nav-link active" href="/about">About Us</a>
                                      </div>
                                @endif
                            </div>
                        </div>
                    </nav>
                </div>
        
            <div id="carouselExampleCaptions" class="carousel slide" data-ride=" carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" id="bg-img">
                    <div class="carousel-item active">
                        <img src="images/bgimg6.jpg" class="d-block w-100" alt="...">
                        <div class="paragraph">
                            <i><h1>WELCOME TO OUR OMOA</h1>
                            <p class="innerp">
                                Health is a state of complete harmony of the body, mind and spirit. When one is free from physical disabilities and mental distractions, the gates of the soul open             Warmly Welcome to our OMOA!! 
                            </p>
                            </i>        
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="images/bgimg7.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block p">
                            <h2>WELCOME TO OUR OMOA APP & WEBSITE</h2>
                            <p><i>
                                Health is a state of complete harmony of the body, mind and spirit. When one is free from physical disabilities and mental distractions, the gates of the soul open.
                                In today’s modern world, many of our systems and customs seem to be organized in a way that separates the different facets of health.To ensure good health: take supplitories, eat lightly, breathe deeply, live moderately, cultivate cheerfulness, and maintain an interest in life.
                            </i></p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="images/bgimg6.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block p">
                            <h2>WELCOME TO OUR OMOA APP & WEBSITE</h2>
                            <p>
                                <i>
                                Health is a state of complete harmony of the body, mind and spirit. When one is free from physical disabilities and mental distractions, the gates of the soul open.
                                In today’s modern world, many of our systems and customs seem to be organized in a way that separates the different facets of health.To ensure good health: take supplitories, eat lightly, breathe deeply, live moderately, cultivate cheerfulness, and maintain an interest in life.
                                </i>
                            </p>
                        </div>
                    </div>
                </div>
                    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                    </a>
            </div>

            <div class="row col-lg-12 col-md-6">
                  <a href="{{route('home')}}" class="btn btn-warning mt-3" id="b">Get More +</a>
           </div>
         
            <div class="plainn"></div>

            <div class="row col-lg-12 col-md-6 mx-3 mb-3" id="cardshadow">
                <div class="col-md-4">
                    <div class="card col-lg-12 col-md-12 col-sm-6">
                        <div class="card-body">
                            <h5 class="card-title"><img src="https://img.icons8.com/office/30/000000/online-store.png" width="35px" /> STORE MANAGEMENT</h5>
                            <p class="card-text">Individual store setup & management.Detailed analytics reports for individual items, stores or overall medicine delivery business performance.</p>
                            <a href="{{route('login')}}" class="btn btn-danger">Order Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card col-lg-12 col-md-12 col-sm-6">
                        <div class="card-body">
                            <h5 class="card-title"><img src="https://img.icons8.com/ultraviolet/40/000000/delivery.png" width="35px" /> DELIVERY TIME</h5>
                            <p class="card-text">Absolute zero setup cost & tied up with multiple delivery partnersShipping label generation and printing through system</p>
                            <a href="{{route('login')}}" class="btn btn-info">Order Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card col-lg-12 col-md-12 col-sm-6">
                        <div class="card-body">
                            <h5 class="card-title"><img src="https://img.icons8.com/doodle/48/000000/refund.png" width="35px" /> EASY RETURNS & REFUNDS</h5>
                            <p class="card-text">Build trust among customers by offering easy return & refundBesides admin, sellers can also manage refund at their end.</p>
                            <a href="{{route('login')}}" class="btn btn-success">Order Now</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="plainn"></div>

            <div class="row col-lg-12 col-md-12 mx-1 mt-3 my-5 textcontent">
                <div class="col-md-10">
                    <p> Not sure what you need? Learn in seconds which types of match your business.</p>
                </div>
               <div class="col-md-2">
                   +959777100555
               </div>
            </div>

            <div class="plainn"></div>

            <div class="row col-lg-12 col-md-6 mt-3 mx-3">
                <h2>Health Products</h2>
            </div>
          
            <div class="row col-lg-12 col-md-6 mt-3 mx-3" id="cardshadow">
                <div class="card" style="background-color:#8fc2ea99" id="caption">    
                    <img src="template\img\items\Omega-3.png" width="180px" height="150px">
                    <div class="card-footer">Omega-3</div>
                </div>
                <div class="card" style="background-color:#e6cdd985" id="caption">    
                   <img src="template\img\items\Glucosamine.png" width="180px" height="150px">
                    <div class="card-footer">Glucosamine</div>
                </div>
                <div class="card" style="background-color:#8fc2ea99" id="caption">    
                    <img src="template\img\items\Omega-3.png" width="180px" height="150px">
                    <div class="card-footer">Omega-3</div>
                </div>
                <div class="card" style="background-color:#e6cdd985" id="caption">    
                   <img src="template\img\items\Glucosamine.png" width="180px" height="150px">
                    <div class="card-footer">Glucosamine</div>
                </div>
               <div class="card" style="background-color:#8fc2ea99" id="caption">    
                    <img src="template\img\items\Omega-3.png" width="180px" height="150px">
                    <div class="card-footer">Omega-3</div>
                </div>
                <div class="card" style="background-color:#e6cdd985" id="caption">    
                   <img src="template\img\items\Glucosamine.png" width="180px" height="150px">
                    <div class="card-footer">Glucosamine</div>
                </div>
               <div class="card" style="background-color:#d3dbe1" id="caption">    
                    <img src="template\img\items\Omega-3.png" width="180px" height="150px">
                    <div class="card-footer">Omega-3</div>
                </div>
            </div>

               <div class="plain"></div>
               <div class="plain"></div>

            <div class="row col-lg-12 col-md-6 mt-3 mx-3">
                <h2>Beauty Products</h2>
            </div>
          
            <div class="row col-lg-12 col-md-6 mt-3 mx-3" id="cardshadow">
                <div class="card" style="background-color:#8fc2ea99" id="caption">    
                    <img src="template\img\items\baby1.jpg" width="180px" height="150px">
                    <div class="card-footer">Sweety Pink Lotion</div>
                </div>
                <div class="card" style="background-color:#8fc2ea99" id="caption">    
                    <img src="template\img\items\baby1.jpg" width="180px" height="150px">
                    <div class="card-footer">Sweety Pink Lotion</div>
                </div>
                <div class="card" style="background-color:#e6cdd985" id="caption">    
                   <img src="template\img\items\baby2.jpg" width="180px" height="150px">
                    <div class="card-footer">Baby Milk_Cream</div>
                </div>
                <div class="card" style="background-color:#d3dbe1" id="caption">    
                   <img src="template\img\items\baby3.jpg" width="180px" height="150px">
                    <div class="card-footer">Baby Shower</div>
                </div>
                <div class="card" style="background-color:#cfd71c7a" id="caption">    
                    <img src="template\img\items\baby10.jpg" width="180px" height="150px">
                    <div class="card-footer">Johnsons Lotion</div>
                </div>
                <div class="card" style="background-color:#8fc2ea99" id="caption">    
                    <img src="template\img\items\baby5.jpg" width="180px" height="150px">
                    <div class="card-footer">Baby Powder</div>
                </div>
                <div class="card" style="background-color:#e6cdd985" id="caption">    
                    <img src="template\img\items\baby6.jpg" width="180px" height="150px">
                    <div class="card-footer">Cussons Oil&Gentle</div>
                </div>
            </div>

            <div class="plainn"></div>
            <div class="plainn"></div>
            <div class="row col-lg-12 col-md-6 mt-3 mx-3">
               <div class="col-md-6">
                   <h1 class="text">Simplifying Healthcare, Impacting Lives</h1>
                   <div class="playstore">
                       <p style="font-size:25px;">Download the App for free</p>
                   <a href="">
                       <img src="images/googleplaystore.png" width="200px" height="70px"> <img src="images/googleplaystore1.png" width="220px" height="70px"> 
                   </a>
                   </div>                      
               </div>
               <div class="col-md-6" id="appbg">
                    <img src="template/img/items/app.png" width="720px" height="400px" id="apppic">
                    <img src="template/img/items/app.png" id="apppic2">
                    <img src="template/img/items/app.png" id="apppic3">
               </div> 
            </div> 
            <div class="plainn"></div>
            <div class="plainn"></div>
            <div class="row mt-3 footer bg">
                    <div class="col-md-3 mt-3">
                        <h4 class="h">Our Services</h4>
                            <p>Order Medicine</p>
                            <p>HealthCare Products</p>
                            <p>Door-To-Door Delivery Service</p>                      
                    </div>
                    <div class="col-md-3 mt-3">
                        <h4 class="h">Need Help</h4>
                            <p><a class="alink" href="/">Browse All Medicines</a></p>
                            <p><a class="alink" href="/">Browse All Molecules</a></p>
                            <p><a class="alink" href="/">FAQs</a></p>
                    </div>
                    <div class="col-md-3 mt-3">
                        <h4 class="h">Policy Infos</h4>
                            <p><a class="alink" href="/">Privacy Policy</a></p>
                            <p><a class="alink" href="/">Terms and Conditions</a></p>
                    </div>
                    <div class="col-md-3 mt-3">
                        <h4 class="h">Follow Us</h4>
                            <p><a href="https://www.facebook.com/login/"><img src="https://img.icons8.com/fluent/48/000000/facebook-new.png" width="40px" /></a><a href="https://twitter.com/t"><img src="https://img.icons8.com/fluent/48/000000/twitter.png" width="40px" /></a><a href="https://www.instagram.com/?hl=en"><img src="https://img.icons8.com/fluent/48/000000/instagram-new.png" width="40px" /></a></p>  
                    </div>

                    <p style="margin-left: 300px;"><img src="https://img.icons8.com/small/16/000000/copyright.png" width="20px" /> 2020 By OMOA && All Rights Reserved</p>               
            </div>  
        </div>         
    </body>
</html>