@extends('components.master')
@section('title')
    Popular Celebrities
@endsection
@section('content')
<div class="hero common-hero" style="background-size: cover;">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="hero-ct">
					<h1>Popular Celebrities</h1>
					<ul class="breadcumb">
						<li class="active"><a href="{{url('/')}}">Home</a></li>
						<li> <span class="ion-ios-arrow-right"></span>Popular Celebrities</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="page-single">
	<div class="container">
		<div class="row ipad-width">
			<div class="topbar-filter">
				<p>Found <span>100 popular celebrities</span> in total</p>
			</div>
			<div class="col-md-8 col-sm-12 col-xs-12">				
				<div class="flex-wrap-movielist">
					@foreach ($celebs as $celeb)
						<div class="movie-item-style-2 movie-item-style-1">
							<a href="redirect-url">
								<img src="@if ($celeb['profile_path'] == null) {{asset('images/uploads/blog-it1.jpg')}} @else https://image.tmdb.org/t/p/w500/{{$celeb['profile_path']}} @endif" alt="{{$celeb['name']}}" width="170px" height="255px">
							</a>
							<div class="hvr-inner">
								<a href="{{url('person/'.$celeb['id'].'')}}"> Read more <i class="ion-android-arrow-dropright"></i> </a>
							</div>
							<div class="mv-item-infor">
								<h6><a href="{{url('person/'.$celeb['id'].'')}}">{{$celeb['name']}}</a></h6>
								<p class="rate"><i class="ion-android-star"></i><span>{{$celeb['popularity']}}</span></p>
							</div>
						</div>
					@endforeach
				</div>
				<div class="topbar-filter">
					<div class="pagination2">
						<span>Page 1 of 5:</span>
						<a @if (Request::segment(2) == 1) class="active" @endif href="{{url('celeb/1')}}">1</a>
						<a @if (Request::segment(2) == 2) class="active" @endif href="{{url('celeb/2')}}">2</a>
						<a @if (Request::segment(2) == 3) class="active" @endif href="{{url('celeb/3')}}">3</a>
						<a @if (Request::segment(2) == 4) class="active" @endif href="{{url('celeb/4')}}">4</a>
						<a @if (Request::segment(2) == 5) class="active" @endif href="{{url('celeb/5')}}">5</a>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-sm-12 col-xs-12">
				<div class="sidebar">
					<div class="searh-form">
						<h4 class="sb-title">Search for movie</h4>
						<form class="form-style-1" action="#">
							<div class="row">
								<div class="col-md-12 form-it">
									<label>Movie name</label>
									<input type="text" placeholder="Enter keywords">
								</div>
								<div class="col-md-12 form-it">
									<label>Genres & Subgenres</label>
									<div class="group-ip">
										<select
											name="skills" multiple="" class="ui fluid dropdown">
											<option value="">Enter to filter genres</option>
											<option value="Action1">Action 1</option>
					                        <option value="Action2">Action 2</option>
					                        <option value="Action3">Action 3</option>
					                        <option value="Action4">Action 4</option>
					                        <option value="Action5">Action 5</option>
										</select>
									</div>	
								</div>
								<div class="col-md-12 form-it">
									<label>Rating Range</label>
									<select>
									  <option value="range">-- Select the rating range below --</option>
									  <option value="saab">-- Select the rating range below --</option>
									</select>
								</div>
								<div class="col-md-12 form-it">
									<label>Release Year</label>
									<div class="row">
										<div class="col-md-6">
											<select>
											  <option value="range">From</option>
											  <option value="number">10</option>
											</select>
										</div>
										<div class="col-md-6">
											<select>
											  <option value="range">To</option>
											  <option value="number">20</option>
											</select>
										</div>
									</div>
								</div>
								<div class="col-md-12 ">
									<input class="submit" type="submit" value="submit">
								</div>
							</div>
						</form>
					</div>
					<div class="ads">
						<img src="{{asset('images/uploads/ads1.png')}}" alt="">
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection