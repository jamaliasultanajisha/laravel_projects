<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <style>
        /* Remove the navbar's default margin-bottom and rounded borders */
        .navbar {
            margin-bottom: 0;
            border-radius: 0;
        }

        /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
        .row.content {
            height: 450px
        }

        /* Set gray background color and 100% height */
        .sidenav {
            padding-top: 20px;
            background-color: #f1f1f1;
            height: 100%;
        }

        /* Set black background color, white text and some padding */
        footer {
            background-color: #555;
            color: white;
            padding: 15px;
        }

        /* On small screens, set height to 'auto' for sidenav and grid */
        @media screen and (max-width: 767px) {
            .sidenav {
                height: auto;
                padding: 15px;
            }

            .row.content {
                height: auto;
            }
        }
    </style>
</head>
<body>

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Manage your Event</a>
        </div>
        echo "$input";
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Opportunities</a></li>
                <li><a href="#">Profile</a></li>
                <li><a href="#">Preferences</a></li>
                <li><a href="#">Contact</a></li>
             {{--<li><a href="#">About Us</a></li>--}}
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container-fluid text-center">
    <div class="row content">
        <div class="col-sm-2 sidenav">
            <p><a href="#">Information</a></p>
            <p><a href="#">Matching</a></p>
            <p><a href="#">Services</a></p>
            <p><a href="#">Reviews</a></p>
            <p><a href="#">Works</a></p>
            <p><a href="#">Awards</a></p>
            <p><a href="#">Images</a></p>
            <p><a href="#">Managers</a></p>
            <p><a href="#">Team</a></p>
            <p><a href="#">Badges</a></p>
            <p><a href="#">Billing</a></p>
            <p><a href="#">Notifications</a></p>
        </div>
        <div class="col-sm-8 text-left">
            <h1>Welcome</h1>
            <p>We will ask you the right questions so we can introduce you to the right agencies.</p>
            <hr>
            <!-- Trigger the modal with a button -->
            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Make
                Portfolio
            </button>


        </div>
        <div class="col-sm-2 sidenav">
            <div class="well">
                <p>sth</p>
            </div>
            <div class="well">
                <p>sth</p>
            </div>
        </div>
    </div>
</div>
<div class="container">


    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">New Request</h4>
                </div>
                <div class="modal-body">
                    <p>What service do you need?.</p>
                    <div class="checkbox">
                        <label><input type="checkbox" value="">Wedding</label>
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox" value="">Birthday</label>
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox" value="">Office party</label>
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox" value="">PR event</label>
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox" value="">Branding and Positioning</label>
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox" value="">Anniversary celebration</label>
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox" value="">Office party</label>
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox" value="">Bridal Shower</label>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>

</div>

<footer class="container-fluid text-center">
    <p>About Us</p>
</footer>

</body>
</html>


{{--
<!doctype html>
--}}
{{--
<link rel="stylesheet" href="/css/bootstrap.css">
<script src="/js/jquery-2.2.4.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
--}}{{--


<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">

    <!-- Trigger the modal with a button -->
    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Make Portfolio</button>


    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">New Request</h4>
                </div>
                <div class="modal-body">
                    <p>What service do you need?.</p>
                    <div class="checkbox">
                        <label><input type="checkbox" value="">Wedding</label>
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox" value="">Birthday</label>
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox" value="">Office party</label>
                    </div>
                    <div class = "checkbox">
                        <label><input type="checkbox" value="">PR event</label>
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox" value="">Branding and Positioning</label>
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox" value="">Anniversary celebration</label>
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox" value="">Office party</label>
                    </div>
                    <div class = "checkbox">
                        <label><input type="checkbox" value="">Bridal Shower</label>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>

</div>

</body>
</html>



--}}
{{--

    <body>
    <div class="container">
        <div class="col-md-12">
            @yield('content')
        </div>
        <div class="col-md-3">
            @section('menu')
                <ul>
                    <li> Home </li>
                    <li> Services </li>
                    <li> Contact Us </li>
                </ul>
        </div>
        <div class="col-md-9">
            @section('main')
            @show
        </div>
    </div>
    </body>
--}}{{--


--}}
