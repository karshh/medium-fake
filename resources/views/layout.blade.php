

<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <title>Medium</title>

        <style>
            
            * {
                word-wrap:break-word;
            }

            #signIn {
                margin-left: 15px;
                margin-right: 15px;
            }

            #searchBar {
                margin-top: 7px;
                opacity: 0.5;
            }

            .nav-options {
                font-size: 16px;
            }

            .nav-options:hover {
                text-decoration: none;
            }

            .left-options, .medium-footer a, p {
                color: rgba(0,0,0,0.54);
            }

            .left-options:hover, .medium-footer a:hover {
                color: rgba(0,0,0,0.68);
            }

            .right-options {
                border-color: #03a87c;
                color: #03a87c;
            }

            .right-options:hover {
                color: #018f69;
                border-color: #029e74;
            }

            .medium-content {
                margin: 2px 15%;
                min-height: 800px;
                font-family: 'sans-serif';
            }

            .medium-content h1 {
                color: black;
                opacity: 0.86;
                font-size: 25px;
            }

            .medium-content img {
                margin-bottom: 20px;
            } 

            #navoptions {
                margin-top: 10px
            }

            #navoptions li {
                margin: 15px;
            }

            .medium-footer {
                margin-top: 100px;
                padding-bottom: 100px;
            } 

            .logo a, .logo a:hover{
                color: black;
                text-decoration: none
            }

        </style>
    </head>
    <body>
        <div>
            <div class="container">

                <header class="py-3">
                        <div class="nav justify-content-center">
                          </button>
                            <div class="col-4 text-center">
                                <a style=" margin-top: 10px" class="nav-options left-options" href="/contact">Contact</a>
                            </div>
                            <div class="col-4 text-center">
                                <h2 class="logo"><a href="/">Medium</a></h2>
                            </div>
                            <div class="col-4 text-center">
                                <a  id="searchBar" class="nav-options left-options" href="#">
                                <svg width="25" height="25" viewBox="0 0 25 25"><path d="M20.067 18.933l-4.157-4.157a6 6 0 1 0-.884.884l4.157 4.157a.624.624 0 1 0 .884-.884zM6.5 11c0-2.62 2.13-4.75 4.75-4.75S16 8.38 16 11s-2.13 4.75-4.75 4.75S6.5 13.62 6.5 11z"></path></svg>
                                </a>
                                @if (!Auth::check())
                                    <a style="margin-top:7px" class="nav-options right-options" id="signIn" href="/login">Sign in</a>
                                    <a class="btn nav-options right-options" href="/register">Get started</a>
                                @else
                                    <a style="margin-top:7px; margin-left: 5px" class="nav-options right-options" id="createPost" href="/post/new">Create Post</a>
                                    <a style="margin-top:7px; margin-left: 15px" 
                                    class="nav-options right-options" id="createPost" 
                                    href="/profile/{{ Auth::user()->id }}">Profile</a>
                                    <a  style="margin-left: 15px"  class="btn nav-options right-options" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">  @csrf </form>

                                @endif
                            </div>
                            
                      </div>
                    </header>
                </div>

                    <ul id="navoptions" class="nav justify-content-center">
                      <li class="nav-item"><p style="color:black;">HOME</p></li>
                      <li class="nav-item"><p>TECHNOLOGY</p></li>
                      <li class="nav-item"><p>CULTURE</p></li>
                      <li class="nav-item"><p>ENTREPENEURSHIP</p></li>
                      <li class="nav-item"><p>CREATIVITY</p></li>
                      <li class="nav-item"><p>SELF</p></li>
                      <li class="nav-item"><p>POLITICS</p></li>
                    </ul>
            </div>

            <div class="medium-content">
                @yield('content')
            </div>

            <div class="medium-footer">
                <div class="container">
                    <ul class="nav">
                      <li class="nav-item"><a class="nav-link" href="#">Help</a></li>
                      <li class="nav-item"><a class="nav-link" href="#">Status</a></li>
                      <li class="nav-item"><a class="nav-link" href="#">Blog</a></li>
                      <li class="nav-item"><a class="nav-link" href="#">Careers</a></li>
                      <li class="nav-item"><a class="nav-link" href="#">Privacy</a></li>
                      <li class="nav-item"><a class="nav-link" href="#">Terms</a></li>
                      <li class="nav-item"><a class="nav-link" href="#">About</a></li>
                    </ul>
                </div>
            </div>
    </body>
</html>
