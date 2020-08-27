<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="{{ url('/')}}/css/bootstrap.min.css">
        <style>
            div{
                border-color :black;
                border-style: ;
                /* margin: 5px 5px 5px 5px; */
                padding: 10px 10px 10px 10px;
            }
            body {
            background-color: blueviolet;
            width: 100%;
            /* padding: none; */
            margin: 0px;
            padding: 20px 20px 20px 20px;
            }

            .nav-center ul{
            list-style-type: none;
            margin-left:30%; 
            margin-right:30%; 
            }

            .nav-center li{
                float: left;
                margin: 0px 30px 0px 30px;
                size: 100px;
            }
            .nav-center-header{
                overflow: hidden;
            }
            .nav-center-header ul a{
                float: left;
            }
        </style>
    </head>
    <body>
        <header class="fixed-top" style="position: sticky;top: 0;overflow: hidden;">
            {{-- <img id="logo" src="{{URL::asset('/img/logo.png')}}" width="15%" />

            <nav class="nav-center-header">
                <ul>
                <a href="#"><li>HOME</li></a>
                <a href="#"><li>SHOP</li></a>
                <a href="#"><li>BLOG</li></a>
                <a href="#"><li>ABOUT AS</li></a>
                </ul>
            </nav> --}}
            <nav class="navbar navbar-expand-lg navbar-light bg-light " style="overflow: hidden;">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
              
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                      <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                      </div>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link disabled" href="#">Disabled</a>
                    </li>
                  </ul>
                  <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                  </form>
                </div>
            </nav>
        </header>
        <section class="content">
            <div class="box box-default">
                <div class="box-body">
                    <div class="row">
                        <div class="form-group col-md-12" style="background-color: blue">
                            {{-- <nav class="nav-center">
                                <ul>
                                <a href="#"><li>HOME</li></a>
                                <a href="#"><li>SHOP</li></a>
                                <a href="#"><li>BLOG</li></a>
                                <a href="#"><li>ABOUT AS</li></a>
                                </ul>
                            </nav> --}}
                            <ul class="nav justify-content-center nav-center">
                                <li class="nav-item">
                                  <a class="nav-link" href="#">HOME</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" href="#">SHOP</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" href="#">BLOG</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" href="#">ABOUT AS</a>
                                </li>
                            </ul>
                        </div>
                        <div class="form-group col-md-2" style="background-color: rgb(24, 100, 56)">
                            @for ($i = 1; $i <= 15; $i++)
                                <section class="form-group" style="margin:5px">
                                    Section {{$i}}
                                </section>
                            @endfor
                        </div>
                        <div class="form-group col-md-8" style="background-color: yellow">
                            <div class="row">
                                <div class="jumbotron">
                                    <h1 class="display-4">Hello, world!</h1>
                                    <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
                                    <hr class="my-4">
                                    <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
                                    <p class="lead">
                                      <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
                                    </p>
                                  </div>
                            </div>
                            <div class="row">
                                {{-- @for ($i = 0; $i < 3 ; $i++)
                                    <div class="form-group col-md-4" style="background-color: rgb(15, 172, 184)">

                                    </div>
                                @endfor --}}
                                <div class="card-deck">
                                    <div class="card">
                                      <img class="card-img-top" src="..." alt="Card image cap">
                                      <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                      </div>
                                    </div>
                                    <div class="card">
                                      <img class="card-img-top" src="..." alt="Card image cap">
                                      <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                      </div>
                                    </div>
                                    <div class="card">
                                      <img class="card-img-top" src="..." alt="Card image cap">
                                      <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                      </div>
                                    </div>
                                  </div>
                            </div>
                        </div>
                        <div class="form-group col-md-2" style="background-color: red">
                            <div class="row">
                                @for ($i = 1; $i <= 7; $i++)
                                <section class="form-group col-md-12" style="margin:5px">
                                    Feature {{$i}}
                                </section>
                            @endfor
                            </div>
                            <div class="row">
                                <div class="card border-info mb-3" style="max-width: 18rem;">
                                    <div class="card-header">Header</div>
                                    <div class="card-body text-info">
                                      <h5 class="card-title">Info card title</h5>
                                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script src="{{ url('/')}}/js/bootstrap.min.js"></script>   
    </body>
</html>