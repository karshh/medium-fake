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

        </style>
    </head>
    <body>
        <div>
            <div class="container">

                <header class="blog-header py-3">
                    <div class="row flex-nowrap justify-content-between align-items-center">
                        <div class="nav">
                            <a style="margin-left: 80px; margin-top: 10px" class="nav-options left-options" href="/contact">Contact</a>
                            <a style="margin-left: 265px" href="/"><svg width="138" height="27" viewBox="0 0 138 27"><path d="M130 27V16.96c0-3.26-.154-5.472-2.437-5.472-1.16 0-2.138.57-2.863 1.512.217.906.3 1.968.3 3.127 0 2.247.036 5.11 0 7.973 0 .472-.046.58.244.87L127 27h-8V16.96c0-3.297-.461-5.472-2.708-5.472-1.16 0-1.64.653-2.292 1.595V24.1c0 .472-.026.58.3.87L116 27h-8V11.56c0-.47-.07-.579-.36-.905L106 9h8v3.612c.906-2.537 2.437-4.112 5.372-4.112 2.682 0 4.494 1.466 5.255 4.257.834-2.392 3.008-4.257 6.053-4.257 3.588 0 5.32 2.626 5.32 7.627 0 2.392.036 5.11 0 7.973 0 .472.004.652.25.87L138 27h-8zm-27-3.045c0 .472-.149.617.178.906L105 27h-8v-4c-.906 2.465-2.956 4-5.637 4C87.775 27 86 24.39 86 19.461c0-2.391-.036-5 0-7.936 0-.471-.11-.58-.4-.87L84 9h8v9.628c0 3.225.269 5.4 2.298 5.4 1.16 0 2.086-.725 2.702-1.63V11.56c0-.471-.129-.58-.419-.906L95 9h8v14.955zM78.002.25A3.248 3.248 0 0 1 81.25 3.5 3.25 3.25 0 1 1 78.002.25zM75 27V11.56c0-.47.168-.579-.122-.905L73 9h8v15.1c0 .472-.01.678.24.9L83 27h-8zM64 11.706c-.507-.652-1.418-1.123-2.396-1.123-1.957 0-3.842 1.775-3.842 7.03 0 4.93 1.631 6.669 3.66 6.669.907 0 1.853-.436 2.578-1.378V11.706zm6 12.286c0 .47-.026.58.3.87L72 27h-8v-3.697C62.913 25.804 60.951 27 58.632 27 54.5 27 51.5 23.738 51.5 17.795c0-5.582 3.254-9.314 7.784-9.314 2.356 0 3.919 1.123 4.716 2.899V3.878c0-.471-.077-.617-.403-.906L62 1.305 70 .29v23.702zM43.9 16c.037-.471.037-.67.037-.815 0-4.747-.937-5.435-2.437-5.435-1.5 0-2.854.995-2.927 6.25h5.328zm-5.327 1c0 4.711 2.392 6.63 5.183 6.63 2.174 0 4.313-.943 5.509-3.335h.072c-.942 4.566-3.77 6.705-8.01 6.705-4.566 0-8.879-2.755-8.879-9.133 0-6.705 4.277-9.386 9.097-9.386 3.842 0 7.937 1.811 7.937 7.646 0 .109 0 .438-.036.873H38.573zM31.5 27h-12l2.39-2.646c.084-.084.11-.399.11-.87V7l-7.866 20L5.581 8.372C5.364 7.9 5.181 7.285 5 6.777V20.62c0 .58-.035.653.364 1.196L9 27H0l3.64-5.183c.399-.543.36-.616.36-1.196V6.27c0-.617.095-.69-.195-1.051L1 1h8.495l7.355 16.3L23.24 1h8.26l-2.2 2.75c-.326.326-.3.599-.3 1.106v18.629c0 .47.005.75.138.87L31.5 27z"></path></svg></a>
                            <a style="margin-left: 230px" id="searchBar" class="nav-options left-options" href="#">
                                <svg width="25" height="25" viewBox="0 0 25 25"><path d="M20.067 18.933l-4.157-4.157a6 6 0 1 0-.884.884l4.157 4.157a.624.624 0 1 0 .884-.884zM6.5 11c0-2.62 2.13-4.75 4.75-4.75S16 8.38 16 11s-2.13 4.75-4.75 4.75S6.5 13.62 6.5 11z"></path></svg>
                            </a>
                            @if (!Auth::check())
                                <a style="margin-top:7px" class="nav-options right-options" id="signIn" href="/login">Sign in</a>
                                <a class="btn nav-options right-options" href="/register">Get started</a>
                            @else
                                <a style="margin-top:7px; margin-left: 5px" class="nav-options right-options" id="createPost" href="/post/new">Create Post</a>
                                <a  style="margin-left: 15px"  class="btn nav-options right-options" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">  @csrf </form>

                            @endif
                      </div>
                    </div>

                    <ul id="navoptions" class="nav justify-content-center">
                      <li class="nav-item"><p style="color:black;">HOME</p></li>
                      <li class="nav-item"><p>TECHNOLOGY</p></li>
                      <li class="nav-item"><p>CULTURE</p></li>
                      <li class="nav-item"><p>ENTREPENEURSHIP</p></li>
                      <li class="nav-item"><p>CREATIVITY</p></li>
                      <li class="nav-item"><p>SELF</p></li>
                      <li class="nav-item"><p>POLITICS</p></li>
                      <li class="nav-item"><p>MEDIA</p></li>
                      <li class="nav-item"><p>PRODUCTIVITY</p></li>
                      <li class="nav-item"><p>DESI</p></li>
                    </ul>
              </header>
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

        </div>
    </body>
</html>
