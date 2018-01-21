@extends('template.master')
@section('konten')
<div class="carousel slide" id="carousel-644516">
				<ol class="carousel-indicators">
					<li class="active" data-slide-to="0" data-target="#carousel-644516">
					</li>
					<li data-slide-to="1" data-target="#carousel-644516">
					</li>
					<li data-slide-to="2" data-target="#carousel-644516">
					</li>
				</ol>
				<div class="carousel-inner">
					<div class="item active">
						<img alt="Carousel Bootstrap First" src="{{('img/silat1.jpg')}}" />
						<div class="carousel-caption">
							<h4>
								pencak silat1
							</h4>
							<p>
								pencaksilat adalah salah satu beladiri dari indonesia.
							</p>
						</div>
					</div>
					<div class="item">
						<img alt="Carousel Bootstrap Second" src="{{('img/silat2.jpg')}}" />
						<div class="carousel-caption">
							<h4>
								pencak silat2
							</h4>
							<p>
								pencaksilat adalah salah satu beladiri dari indonesia dari jawa barat.							</p>
						</div>
					</div>
					<div class="item">
						<img alt="Carousel Bootstrap Third" src="{{('img/silat3.jpg')}}" />
						<div class="carousel-caption">
							<h4>
								pencak silat3
							</h4>
							<p>
								pencaksilat adalah salah satu beladiri dari indonesia  salah satunya dari bandung
							</p>
						</div>
					</div>
				</div> <a class="left carousel-control" href="#carousel-644516" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a> <a class="right carousel-control" href="#carousel-644516" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
			</div>
		</div>

		<div>
		<img src="{{('img/silat1.jpg')}}">
			<img src="{{('img/silat2.jpg')}}">
			<img src="{{('img/silat3.jpg')}}">
			<img src="{{('img/silat4.jpg')}}">
			<img src="{{('img/silat5.jpg')}}">

		</div>
@endsection