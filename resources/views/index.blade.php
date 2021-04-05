
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7 no-js" lang="en-US">
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8 no-js" lang="en-US">
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html lang="en" class="no-js">
<head>
	<!-- Basic need -->
	<title>MovieWorld | Homepage</title>
	<meta charset="UTF-8">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<link rel="profile" href="#">

    <!--Google Font-->
    <link rel="stylesheet" href='http://fonts.googleapis.com/css?family=Dosis:400,700,500|Nunito:300,400,600' />
	<!-- Mobile specific meta -->
	<meta name=viewport content="width=device-width, initial-scale=1">
	<meta name="format-detection" content="telephone-no">

	<!-- CSS files -->
	<link rel="stylesheet" href="css/plugins.css">
	<link rel="stylesheet" href="css/style.css">

</head>
<body>
<!--preloading-->
<div id="preloader">
    <img class="logo" src="images/logo1.png" alt="" width="119" height="58">
    <div id="status">
        <span></span>
        <span></span>
    </div>
</div>
<!--end of preloading-->
<!--login form popup-->
<div class="login-wrapper" id="login-content">
    <div class="login-content">
        <a href="#" class="close">x</a>
        <h3>Login</h3>
        <form method="post" action="login.php">
        	<div class="row">
        		 <label for="username">
                    Username:
                    <input type="text" name="username" id="username" placeholder="Hugh Jackman" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{8,20}$" required="required" />
                </label>
        	</div>
           
            <div class="row">
            	<label for="password">
                    Password:
                    <input type="password" name="password" id="password" placeholder="******" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" required="required" />
                </label>
            </div>
            <div class="row">
            	<div class="remember">
					<div>
						<input type="checkbox" name="remember" value="Remember me"><span>Remember me</span>
					</div>
            		<a href="#">Forget password ?</a>
            	</div>
            </div>
           <div class="row">
           	 <button type="submit">Login</button>
           </div>
        </form>
        <div class="row">
        	<p>Or via social</p>
            <div class="social-btn-2">
            	<a class="fb" href="#"><i class="ion-social-facebook"></i>Facebook</a>
            	<a class="tw" href="#"><i class="ion-social-twitter"></i>twitter</a>
            </div>
        </div>
    </div>
</div>
<!--end of login form popup-->
<!--signup form popup-->
<div class="login-wrapper"  id="signup-content">
    <div class="login-content">
        <a href="#" class="close">x</a>
        <h3>sign up</h3>
        <form method="post" action="signup.php">
            <div class="row">
                 <label for="username-2">
                    Username:
                    <input type="text" name="username" id="username-2" placeholder="Hugh Jackman" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{8,20}$" required="required" />
                </label>
            </div>
           
            <div class="row">
                <label for="email-2">
                    your email:
                    <input type="password" name="email" id="email-2" placeholder="" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" required="required" />
                </label>
            </div>
             <div class="row">
                <label for="password-2">
                    Password:
                    <input type="password" name="password" id="password-2" placeholder="" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" required="required" />
                </label>
            </div>
             <div class="row">
                <label for="repassword-2">
                    re-type Password:
                    <input type="password" name="password" id="repassword-2" placeholder="" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" required="required" />
                </label>
            </div>
           <div class="row">
             <button type="submit">sign up</button>
           </div>
        </form>
    </div>
</div>
<!--end of signup form popup-->

<!-- BEGIN | Header -->
<header class="ht-header">
	<div class="container">
		<nav class="navbar navbar-default navbar-custom">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header logo">
				    <div class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					    <span class="sr-only">Toggle navigation</span>
					    <div id="nav-icon1">
							<span></span>
							<span></span>
							<span></span>
						</div>
				    </div>
				    <a href="{{url('/')}}"><img class="logo" src="images/logo1.png" alt="" width="119" height="58"></a>
			    </div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse flex-parent" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav flex-child-menu menu-left">
						<li class="hidden">
							<a href="#page-top"></a>
						</li>
						<li class="dropdown first">
							<a class="btn btn-default dropdown-toggle lv1" href="{{url('/')}}">Home</a>
						</li>
						<li class="dropdown first">
							<a class="btn btn-default dropdown-toggle lv1" data-toggle="dropdown" data-hover="dropdown">
							movies<i class="fa fa-angle-down" aria-hidden="true"></i>
							</a>
							<ul class="dropdown-menu level1">
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" >Movie grid<i class="ion-ios-arrow-forward"></i></a>
									<ul class="dropdown-menu level2">
										<li><a href="moviegrid.html">Movie grid</a></li>
										<li><a href="moviegridfw.html">movie grid full width</a></li>
									</ul>
								</li>			
								<li><a href="movielist.html">Movie list</a></li>
								<li><a href="moviesingle.html">Movie single</a></li>
								<li class="it-last"><a href="seriessingle.html">Series single</a></li>
							</ul>
						</li>
						<li class="dropdown first">
							<a class="btn btn-default dropdown-toggle lv1" data-toggle="dropdown" data-hover="dropdown">
							celebrities <i class="fa fa-angle-down" aria-hidden="true"></i>
							</a>
							<ul class="dropdown-menu level1">
								<li><a href="celebritygrid01.html">celebrity grid 01</a></li>
								<li><a href="celebritygrid02.html">celebrity grid 02 </a></li>
								<li><a href="celebritylist.html">celebrity list</a></li>
								<li class="it-last"><a href="celebritysingle.html">celebrity single</a></li>
							</ul>
						</li>
						<li class="dropdown first">
							<a class="btn btn-default dropdown-toggle lv1" data-toggle="dropdown" data-hover="dropdown">
							news <i class="fa fa-angle-down" aria-hidden="true"></i>
							</a>
							<ul class="dropdown-menu level1">
								<li><a href="bloglist.html">blog List</a></li>
								<li><a href="bloggrid.html">blog Grid</a></li>
								<li class="it-last"><a href="blogdetail.html">blog Detail</a></li>
							</ul>
						</li>
						<li class="dropdown first">
							<a class="btn btn-default dropdown-toggle lv1" data-toggle="dropdown" data-hover="dropdown">
							community <i class="fa fa-angle-down" aria-hidden="true"></i>
							</a>
							<ul class="dropdown-menu level1">
								<li><a href="userfavoritegrid.html">user favorite grid</a></li>
								<li><a href="userfavoritelist.html">user favorite list</a></li>
								<li><a href="userprofile.html">user profile</a></li>
								<li class="it-last"><a href="userrate.html">user rate</a></li>
							</ul>
						</li>
					</ul>
					<ul class="nav navbar-nav flex-child-menu menu-right">
						<li class="dropdown first">
							<a class="btn btn-default dropdown-toggle lv1" data-toggle="dropdown" data-hover="dropdown">
							pages <i class="fa fa-angle-down" aria-hidden="true"></i>
							</a>
							<ul class="dropdown-menu level1">
								<li><a href="landing.html">Landing</a></li>
								<li><a href="404.html">404 Page</a></li>
								<li class="it-last"><a href="comingsoon.html">Coming soon</a></li>
							</ul>
						</li>                
						<li><a href="#">Help</a></li>
						<li class="loginLink"><a href="#">LOG In</a></li>
						<li class="btn signupLink"><a href="#">sign up</a></li>
					</ul>
				</div>
			<!-- /.navbar-collapse -->
	    </nav>
	    
	    <!-- top search form -->
	    <div class="top-search">
	    	<select>
				<option value="united">TV show</option>
				<option value="saab">Others</option>
			</select>
			<input type="text" placeholder="Search for a movie, TV Show or celebrity that you are looking for">
	    </div>
	</div>
</header>
<!-- END | Header -->

<div class="slider movie-items">
	<div class="container">
		<div class="row">
			<div class="social-link">
				<p>Follow us: </p>
				<a href="#"><i class="ion-social-facebook"></i></a>
				<a href="#"><i class="ion-social-twitter"></i></a>
				<a href="#"><i class="ion-social-googleplus"></i></a>
				<a href="#"><i class="ion-social-youtube"></i></a>
			</div>
	    	<div  class="slick-multiItemSlider">
                @foreach ($popularMovies as $headerMovie)
                    @if ($loop->index < 8)
                        <div class="movie-item">
                            <div class="mv-img">
                                <a href="{{url('movies/'.$headerMovie['id'].'')}}"><img src="https://image.tmdb.org/t/p/w500/{{$headerMovie['poster_path']}}" alt="" width="285" height="437"></a>
                            </div>
                            <div class="title-in">
                                <div class="cate">
                                    @foreach ($headerMovie['genre_ids'] as $genre)
                                        <span style="@if ($genre == 28)
                                            background-color: #8b1a1a
                                        @elseif ($genre == 12)
                                            background-color: #cd661d
                                        @elseif ($genre == 16)
                                            background-color: #006400
                                        @elseif ($genre == 35)
                                            background-color: #836fff
                                        @elseif ($genre == 80)
                                            background-color: #363636
                                        @elseif ($genre == 99)
                                            background-color: #6f804a
                                        @elseif ($genre == 18)
                                            background-color: #ff69b4
                                        @elseif ($genre == 10751)
                                            background-color: #d15fee
                                        @elseif ($genre == 14)
                                            background-color: #c71585
                                        @elseif ($genre == 36)
                                            background-color: #8b4513
                                        @elseif ($genre == 27)
                                            background-color: #000000
                                        @elseif ($genre == 10749)
                                            background-color: #ff3030
                                        @elseif ($genre == 878)
                                            background-color: #008080
                                        @elseif ($genre == 53)
                                            background-color: #1c0f45
                                        @elseif ($genre == 10752)
                                            background-color: #8b0a5
                                        @elseif ($genre == 37)
                                            background-color: #ff7f50
                                        @else
                                            background-color: #cd9b9b
                                        @endif
                                        "><a href="#">{{$genres->get($genre)}}</a></span>
                                    @endforeach
                                </div>
                                <h6><a href="{{url('movies/'.$headerMovie['id'].'')}}">{{$headerMovie['title']}}</a></h6>
                                <p><i class="ion-android-star"></i><span>{{$headerMovie['vote_average']}}</span> /10</p>
                            </div>
                        </div>
                    @endif
				@endforeach
	    	</div>
	    </div>
	</div>
</div>
<div class="movie-items">
	<div class="container">
		<div class="row ipad-width">
            <div class="col-md-12">
                <div class="col-md-12">
                    <div class="title-hd">
                        <h2 style="text-align: center;">in theater</h2>
                        <a href="#" class="viewall">View all <i class="ion-ios-arrow-right"></i></a>
                    </div>
                    <div class="tabs">
                        <ul class="tab-links">
                            <li class="active"><a href="">#Popular</a></li>                     
                        </ul>
                        <div class="tab-content">
                            <div id="tab1" class="tab active">
                                <div class="row">
                                    <div class="slick-multiItem">
                                        @foreach ($popularMovies as $popularMovie)
                                            @if ($loop->index < 12)
                                                <div class="slide-it">
                                                    <div class="movie-item">
                                                        <div class="mv-img">
                                                            <img src="https://image.tmdb.org/t/p/w500/{{$popularMovie['poster_path']}}" alt="" width="185" height="284">
                                                        </div> 
                                                        <div class="hvr-inner">
                                                            <a  href="{{url('movies/'.$popularMovie['id'].'')}}"> Read more <i class="ion-android-arrow-dropright"></i> </a>
                                                        </div>
                                                        <div class="title-in">
                                                            <h6><a href="{{url('movies/'.$popularMovie['id'].'')}}">{{$popularMovie['title']}}</a></h6>
                                                            <p><i class="ion-android-star"></i><span>{{$popularMovie['vote_average']}}</span> /10</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                                <a href="#" class="viewall" style="float: right">View all <i class="ion-ios-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <a href="#" class="viewall">View all <i class="ion-ios-arrow-right"></i></a> -->
                <div class="col-md-12">
                    <div class="tabs">
                        <ul class="tab-links">
                            <li class="active"><a href=""> #Coming Soon</a></li>                      
                        </ul>
                        <div class="tab-content">
                            <div id="tab3" class="tab active">
                                <div class="row">
                                    <div class="slick-multiItem">
                                        @foreach ($upcomingMovies as $upcomingMovie)
                                            @if ($loop->index < 12)
                                                <div class="slide-it">
                                                    <div class="movie-item">
                                                        <div class="mv-img">
                                                            <img src="https://image.tmdb.org/t/p/w500/{{$upcomingMovie['poster_path']}}" alt="" width="185" height="284">
                                                        </div> 
                                                        <div class="hvr-inner">
                                                            <a  href="{{url('movies/'.$upcomingMovie['id'].'')}}"> Read more <i class="ion-android-arrow-dropright"></i> </a>
                                                        </div>
                                                        <div class="title-in">
                                                            <h6><a href="{{url('movies/'.$upcomingMovie['id'].'')}}">{{$upcomingMovie['title']}}</a></h6>
                                                            <p><i class="ion-android-star"></i><span>{{$upcomingMovie['vote_average']}}</span> /10</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                                <a href="#" class="viewall" style="float: right">View all <i class="ion-ios-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="tabs">
                        <ul class="tab-links">
                            <li class="active"><a href=""> #Top Rated Movies</a></li>                      
                        </ul>
                        <div class="tab-content">
                            <div id="tab3" class="tab active">
                                <div class="row">
                                    <div class="slick-multiItem">
                                        @foreach ($ratedMovies as $ratedMovie)
                                            @if ($loop->index < 12)
                                                <div class="slide-it">
                                                    <div class="movie-item">
                                                        <div class="mv-img">
                                                            <img src="https://image.tmdb.org/t/p/w500/{{$ratedMovie['poster_path']}}" alt="" width="185" height="284">
                                                        </div> 
                                                        <div class="hvr-inner">
                                                            <a  href="{{url('movies/'.$ratedMovie['id'].'')}}"> Read more <i class="ion-android-arrow-dropright"></i> </a>
                                                        </div>
                                                        <div class="title-in">
                                                            <h6><a href="{{url('movies/'.$ratedMovie['id'].'')}}">{{$ratedMovie['title']}}</a></h6>
                                                            <p><i class="ion-android-star"></i><span>{{$ratedMovie['vote_average']}}</span> /10</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                                <a href="#" class="viewall" style="float: right">View all <i class="ion-ios-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="tabs">
                        <ul class="tab-links">
                            <li class="active"><a href=""> #Playing Movies</a></li>                      
                        </ul>
                        <div class="tab-content">
                            <div id="tab4" class="tab active">
                                <div class="row">
                                    <div class="slick-multiItem">
                                        @foreach ($playingMovies as $playingMovie)
                                            @if ($loop->index < 12)
                                                <div class="slide-it">
                                                    <div class="movie-item">
                                                        <div class="mv-img">
                                                            <img src="https://image.tmdb.org/t/p/w500/{{$playingMovie['poster_path']}}" alt="" width="185" height="284">
                                                        </div> 
                                                        <div class="hvr-inner">
                                                            <a  href="{{url('movies/'.$playingMovie['id'].'')}}"> Read more <i class="ion-android-arrow-dropright"></i> </a>
                                                        </div>
                                                        <div class="title-in">
                                                            <h6><a href="{{url('movies/'.$playingMovie['id'].'')}}">{{$playingMovie['title']}}</a></h6>
                                                            <p><i class="ion-android-star"></i><span>{{$playingMovie['vote_average']}}</span> /10</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                                <a href="#" class="viewall" style="float: right">View all <i class="ion-ios-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="title-hd">
                        <h2>on tv</h2>
                        <a href="#" class="viewall">View all <i class="ion-ios-arrow-right"></i></a>
                    </div>
                    <div class="tabs">
                        <ul class="tab-links-2">
                            <li class="active"><a href="#tab21"> #Popular TV</a></li>                    
                        </ul>
                        <div class="tab-content">
                            <div id="tab21" class="tab active">
                                <div class="row">
                                    <div class="slick-multiItem">
                                        @foreach ($popularTVs as $popularTV)
                                            @if ($loop->index < 12)
                                                <div class="slide-it">
                                                    <div class="movie-item">
                                                        <div class="mv-img">
                                                            <img src="https://image.tmdb.org/t/p/w500/{{$popularTV['poster_path']}}" alt="" width="185" height="284">
                                                        </div>
                                                        <div class="hvr-inner">
                                                            <a  href="{{url('tv/'.$popularTV['id'].'')}}"> Read more <i class="ion-android-arrow-dropright"></i> </a>
                                                        </div>
                                                        <div class="title-in">
                                                            <h6><a href="{{url('tv/'.$popularTV['id'].'')}}">{{$popularTV['name']}}</a></h6>
                                                            <p><i class="ion-android-star"></i><span>{{$popularTV['vote_average']}}</span> /10</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                                <a href="#" class="viewall" style="float: right">View all <i class="ion-ios-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="tabs">
                        <ul class="tab-links-2">
                            <li class="active"><a href=""> #Top Rated TV</a></li>                      
                        </ul>
                        <div class="tab-content">
                            <div id="tab21" class="tab active">
                                <div class="row">
                                    <div class="slick-multiItem">
                                        @foreach ($ratedTVs as $ratedTV)
                                            @if ($loop->index < 12)
                                                <div class="slide-it">
                                                    <div class="movie-item">
                                                        <div class="mv-img">
                                                            <img src="https://image.tmdb.org/t/p/w500/{{$ratedTV['poster_path']}}" alt="" width="185" height="284">
                                                        </div>
                                                        <div class="hvr-inner">
                                                            <a  href="{{url('tv/'.$ratedTV['id'].'')}}"> Read more <i class="ion-android-arrow-dropright"></i> </a>
                                                        </div>
                                                        <div class="title-in">
                                                            <h6><a href="{{url('tv/'.$ratedTV['id'].'')}}">{{$ratedTV['name']}}</a></h6>
                                                            <p><i class="ion-android-star"></i><span>{{$ratedTV['vote_average']}}</span> /10</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                                <a href="#" class="viewall" style="float: right">View all <i class="ion-ios-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="tabs">
                        <ul class="tab-links-2">
                            <li class="active"><a href=""> #On Air TV</a></li>                      
                        </ul>
                        <div class="tab-content">
                            <div id="tab21" class="tab active">
                                <div class="row">
                                    <div class="slick-multiItem">
                                        @foreach ($onairTVs as $onairTV)
                                            @if ($loop->index < 12)
                                                <div class="slide-it">
                                                    <div class="movie-item">
                                                        <div class="mv-img">
                                                            <img src="https://image.tmdb.org/t/p/w500/{{$onairTV['poster_path']}}" alt="" width="185" height="284">
                                                        </div>
                                                        <div class="hvr-inner">
                                                            <a  href="{{url('tv/'.$onairTV['id'].'')}}"> Read more <i class="ion-android-arrow-dropright"></i> </a>
                                                        </div>
                                                        <div class="title-in">
                                                            <h6><a href="{{url('tv/'.$onairTV['id'].'')}}">{{$onairTV['name']}}</a></h6>
                                                            <p><i class="ion-android-star"></i><span>{{$onairTV['vote_average']}}</span> /10</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                                <a href="#" class="viewall" style="float: right">View all <i class="ion-ios-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="tabs">
                        <ul class="tab-links-2">
                            <li class="active"><a href=""> #Today Air TV</a></li>                      
                        </ul>
                        <div class="tab-content">
                            <div id="tab21" class="tab active">
                                <div class="row">
                                    <div class="slick-multiItem">
                                        @foreach ($todayairTVs as $todayairTV)
                                            @if ($loop->index < 12)
                                                <div class="slide-it">
                                                    <div class="movie-item">
                                                        <div class="mv-img">
                                                            <img src="https://image.tmdb.org/t/p/w500/{{$todayairTV['poster_path']}}" alt="" width="185" height="284">
                                                        </div>
                                                        <div class="hvr-inner">
                                                            <a  href="{{url('tv/'.$todayairTV['id'].'')}}"> Read more <i class="ion-android-arrow-dropright"></i> </a>
                                                        </div>
                                                        <div class="title-in">
                                                            <h6><a href="{{url('tv/'.$todayairTV['id'].'')}}">{{$todayairTV['name']}}</a></h6>
                                                            <p><i class="ion-android-star"></i><span>{{$todayairTV['vote_average']}}</span> /10</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                                <a href="#" class="viewall" style="float: right">View all <i class="ion-ios-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ads">
                <img src="images/uploads/ads2.png" alt="" width="728" height="106">
            </div>
            <div class="col-md-12">
                <div class="tabs">
                    <div class="title-hd">
                        <h2 style="text-align: center;">Popular Celebrities</h2>
                        <a href="#" class="viewall">View all <i class="ion-ios-arrow-right"></i></a>
                    </div>
                    <div class="tab-content">
                        <div id="tab21" class="tab active">
                            <div class="row">
                                <div class="slick-multiItem">
                                    @foreach ($popularCelebs as $popularCeleb)
                                        @if ($loop->index < 12)
                                            <div class="slide-it">
                                                <div class="movie-item">
                                                    <div class="mv-img">
                                                        <img src="https://image.tmdb.org/t/p/w500/{{$popularCeleb['profile_path']}}" alt="" width="185" height="284">
                                                    </div>
                                                    <div class="hvr-inner">
                                                        <a  href="{{url('person/'.$popularCeleb['id'].'')}}"> Read more <i class="ion-android-arrow-dropright"></i> </a>
                                                    </div>
                                                    <div class="title-in">
                                                        <h6><a href="{{url('person/'.$popularCeleb['id'].'')}}">{{$popularCeleb['name']}}</a></h6>
                                                        <p><i class="ion-android-star"></i><span>{{$popularCeleb['popularity']}}</span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
		</div>
	</div>
</div>

<!-- latest new v1 section-->
<div class="latestnew" style="background-color: #06121e;">
	<div class="container">
		<div class="row ipad-width">
			<div class="col-md-12">
				<div class="ads">
					<img src="images/uploads/ads2.png" alt="" width="728" height="106">
				</div>
				<div class="title-hd">
					<h2>Latest news</h2>
				</div>
				<div class="tabs">
					<ul class="tab-links-3">
						<li class="active"><a href="#tab31">#Movies </a></li>
						<li><a href="#tab32"> #TV Shows </a></li>              
						<li><a href="#tab33">  # Celebs</a></li>                       
					</ul>
				    <div class="tab-content">
				        <div id="tab31" class="tab active">
				            <div class="row">
				            	<div class="blog-item-style-1">
				            		<img src="images/uploads/blog-it1.jpg" alt="" width="170" height="250">
				            		<div class="blog-it-infor">
				            			<h3><a href="#">Brie Larson to play first female white house candidate Victoria Woodull in Amazon film</a></h3>
				            			<span class="time">13 hours ago</span>
				            			<p>Exclusive: <span>Amazon Studios </span>has acquired Victoria Woodhull, with Oscar winning Room star <span>Brie Larson</span> polsed to produce, and play the first female candidate for the presidency of the United States. Amazon bought it in a pitch package deal. <span> Ben Kopit</span>, who wrote the Warner Bros film <span>Libertine</span> that has...</p>
				            		</div>
				            	</div>
				            </div>
				        </div>
				        <div id="tab32" class="tab">
				           <div class="row">
				            	<div class="blog-item-style-1">
				            		<img src="images/uploads/blog-it2.jpg" alt="" width="170" height="250">
				            		<div class="blog-it-infor">
				            			<h3><a href="#">Tab 2</a></h3>
				            			<span class="time">13 hours ago</span>
				            			<p>Exclusive: <span>Amazon Studios </span>has acquired Victoria Woodhull, with Oscar winning Room star <span>Brie Larson</span> polsed to produce, and play the first female candidate for the presidency of the United States. Amazon bought it in a pitch package deal. <span> Ben Kopit</span>, who wrote the Warner Bros film <span>Libertine</span> that has...</p>
				            		</div>
				            	</div>
				            </div>
				        </div>
				        <div id="tab33" class="tab">
				        	<div class="row">
				            	<div class="blog-item-style-1">
				            		<img src="images/uploads/blog-it1.jpg" alt="" width="170" height="250">
				            		<div class="blog-it-infor">
				            			<h3><a href="#">Tab 3</a></h3>
				            			<span class="time">13 hours ago</span>
				            			<p>Exclusive: <span>Amazon Studios </span>has acquired Victoria Woodhull, with Oscar winning Room star <span>Brie Larson</span> polsed to produce, and play the first female candidate for the presidency of the United States. Amazon bought it in a pitch package deal. <span> Ben Kopit</span>, who wrote the Warner Bros film <span>Libertine</span> that has...</p>
				            		</div>
				            	</div>
				            </div>
			       	 	</div>
				    </div>
				</div>
				<div class="morenew">
					<div class="title-hd">
						<h3>More news on Blockbuster</h3>
						<a href="#" class="viewall">See all Movies news<i class="ion-ios-arrow-right"></i></a>
					</div>
					<div class="more-items">
						<div class="left">
							<div class="more-it">
								<h6><a href="#">Michael Shannon Frontrunner to play Cable in “Deadpool 2”</a></h6>
								<span class="time">13 hours ago</span>
							</div>
							<div class="more-it">
								<h6><a href="#">French cannibal horror “Raw” inspires L.A. theater to hand out “Barf Bags”</a></h6>
								
								<span class="time">13 hours ago</span>
							</div>
						</div>
						<div class="right">
							<div class="more-it">
								<h6><a href="#">Laura Dern in talks to join Justin Kelly’s biopic “JT Leroy”</a></h6>
								<span class="time">13 hours ago</span>
							</div>
							<div class="more-it">
								<h6><a href="#">China punishes more than 300 cinemas for box office cheating</a></h6>
								<span class="time">13 hours ago</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@extends('components.footer')
</body>
</html>
