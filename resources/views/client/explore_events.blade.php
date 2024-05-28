@extends('client_layout.master')

@section('content')
	<!-- Body Start-->
	<div class="wrapper">
		<div class="hero-banner">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-xl-8 col-lg-8 col-md-10">
						<div class="hero-banner-content">
							<h2>Discover Events For All The Things You Love</h2>
							<div class="search-form main-form">
								<div class="row g-3">
									<div class="col-lg-5 col-md-12">
										<div class="form-group search-category">
											<select class="selectpicker" data-width="100%" data-size="5">
												<option value="browse_all" data-icon="fa-solid fa-tower-broadcast" selected>Browse All</option>
												<option value="online_events" data-icon="fa-solid fa-video">Online Events</option>
												<option value="venue_events" data-icon="fa-solid fa-location-dot">Venue Events</option>
											</select>
										</div>
									</div>
									<div class="col-lg-5 col-md-12">
										<div class="form-group">
											<select class="selectpicker" data-width="100%" data-size="5" data-live-search="true">
												<option value="01" selected>All</option>
												<option value="02">Arts</option>
												<option value="03">Business</option>
												<option value="04">Coaching and Consulting</option>
												<option value="05">Community and Culture</option>
												<option value="06">Education and Training</option>
												<option value="07">Family and Friends</option>
												<option value="08">Fashion and Beauty</option>
												<option value="09">Film and Entertainment</option>
												<option value="10">Food and Drink</option>
												<option value="11">Free</option>
												<option value="12">Health and Wellbeing</option>
												<option value="13">Hobbies and Interest</option>
												<option value="14">Music and Theater</option>
												<option value="15">Religion and Spirituality</option>
												<option value="16">Science and Technology</option>
												<option value="17">Sports and Fitness</option>
												<option value="18">Travel and Outdoor</option>
												<option value="19">Visual Arts</option>
											</select>
										</div>
									</div>
									<div class="col-lg-2 col-md-12">
										<a href="#" class="main-btn btn-hover w-100">Find</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="explore-events p-80">
			<div class="container">
				<div class="row">
					<div class="col-xl-12 col-lg-12 col-md-12">
						<div class="event-filter-items">
							<div class="featured-controls">
								<div class="filter-tag">
									<a href="explore_events_by_date.html" class="active">All</a>
									<a href="explore_events_by_date.html">Today</a>
									<a href="explore_events_by_date.html">Tomorrow</a>
									<a href="explore_events_by_date.html">This Week</a>
									<a href="explore_events_by_date.html">This Weekend</a>
									<a href="explore_events_by_date.html">Next Week</a>
									<a href="explore_events_by_date.html">Next Weekend</a>
									<a href="explore_events_by_date.html">This Month</a>
									<a href="explore_events_by_date.html">Next Month</a>
									<a href="explore_events_by_date.html">This Year</a>
									<a href="explore_events_by_date.html">Next Year</a>
								</div>
								<div class="controls">
									<button type="button" class="control" data-filter="all">All</button>
									<button type="button" class="control" data-filter=".arts">Arts</button>
									<button type="button" class="control" data-filter=".business">Business</button>
									<button type="button" class="control" data-filter=".concert">Concert</button>
									<button type="button" class="control" data-filter=".workshops">Workshops</button>
									<button type="button" class="control" data-filter=".coaching_consulting">Coaching and Consulting</button>
									<button type="button" class="control" data-filter=".health_Wellness">Health and Wellbeing</button>									
									<button type="button" class="control" data-filter=".volunteer">Volunteer</button>
									<button type="button" class="control" data-filter=".sports">Sports</button>
									<button type="button" class="control" data-filter=".free">Free</button>	
								</div>
								<div class="row" data-ref="event-filter-content">
								@foreach ($events as $event)
									<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mix arts concert workshops volunteer sports health_Wellness" data-ref="mixitup-target">
										<div class="main-card mt-4">
											<div class="event-thumbnail">
												<a href="venue_event_detail_view.html" class="thumbnail-img">
													<img src="{{asset('images/' .  $event->image) }}" alt="">
												</a>
												<span class="bookmark-icon" title="Bookmark"></span>
											</div>
											<div class="event-content">
												<a href="venue_event_detail_view.html" class="event-title">{{$event ->event_name }}</a>
												<div class="duration-price-remaining">
													<span class="duration-price">{{$event -> price }} DHs</span>
													<span class="remaining"></span>
												</div>
											</div>
											<div class="event-footer">
												<div class="event-timing">
													<div class="publish-date">
														<span><i class="fa-solid fa-calendar-day me-2"></i>{{$event->date}}</span>
														<span class="dot"><i class="fa-solid fa-circle"></i></span>
														<span>{{ $event -> time }}</span>
													</div>
													<span class="publish-time"><i class="fa-solid fa-clock me-2"></i>{{ $event -> duration }}</span>
												</div>
											</div>
										</div>
									</div>
									@endforeach
								
								</div>
								<div class="browse-btn">
									<a href="#" class="main-btn btn-hover ">See More</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Body End-->

    
@endsection
