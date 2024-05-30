@extends('admin_layout.mastrAdmin')

@section('content')
    <div class="wrapper wrapper-body">
        <div class="dashboard-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="d-main-title">
                            <h3><i class="fa-solid fa-calendar-days me-3"></i>Events</h3>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="main-card mt-5">
                            <div class="p-4">
                                <div class="d-flex justify-content-between align-items-center align-self-center">
                                    <h5>Events (<span style="color: rgb(7, 182, 4);">{{ $eventCount }}</span>)</h5>
                                    <!-- Formulaire de recherche -->
                                    <form method="GET" action="{{ route('events') }}">
                                        <div class="d-flex flex-row">
                                            <button class="btn btn-outline-success" type="submit" id="button-addon1"><i class="fa fa-search"></i></button>
                                            <input type="text" class="form-control" placeholder="Search by event name" type="text" name="search" value="{{ request('search') }}">
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                        @foreach($events as $event)
                            <div class="event-list">
                            <div class="tab-content">
                                <!--start list event's-->
                                <div class="tab-pane fade show active" id="all-tab" role="tabpanel">
                                    <div class="main-card mt-4">
                                        <div class="contact-list">
                                            <div class="card-top event-top p-4 align-items-center top d-md-flex flex-wrap justify-content-between">
                                                <div class="d-md-flex align-items-center event-top-info">
                                                    <div class="card-event-img">
                                                        <img src="{{asset('images/'. $event->image) }}" alt="">
                                                    </div>
                                                    <div class="card-event-dt">
                                                        <h5>{{ $event->event_name }}</h5>
                                                    </div>
                                                </div>
                                                <div class="dropdown">
                                                    <button class="option-btn" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa-solid fa-ellipsis-vertical"></i></button>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a href="{{url('/events/'.$event->id.'/modify-Events')}}" class="dropdown-item"><i class="fa-solid fa-gear me-3"></i>Modify Event</a>
                                                        <a href="#" class="dropdown-item"><i class="fa-solid fa-eye me-3"></i>Preview Event</a>
                                                        <a href="{{url('/events/'.$event->id.'/delete-Events')}}" class="dropdown-item delete-event"><i class="fa-solid fa-trash-can me-3"></i> Delete Event</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="bottom d-flex flex-wrap justify-content-between align-items-center p-4">
                                                <div class="icon-box ">
                                                    <span class="icon">
                                                        <i class="fa-solid fa-location-dot"></i>
                                                    </span>
                                                    <p>City</p>
                                                    <h6 class="coupon-status">{{ $event->city }}</h6>
                                                </div>
                                                <div class="icon-box">
                                                    <span class="icon">
                                                        <i class="fa-solid fa-calendar-days"></i>
                                                    </span>
                                                    <p>Starts on</p>
                                                    <h6 class="coupon-status">{{ $event->date }} {{ $event->time }}</h6>
                                                </div>
                                                <div class="icon-box">
                                                    <span class="icon">
                                                        <i class="fa-solid fa-ticket"></i>
                                                    </span>
                                                    <p>Ticket</p>
                                                    <h6 class="coupon-status">{{ $event->total_ticket }}</h6>
                                                </div>
                                                <div class="icon-box">
                                                    <span class="icon">
                                                        <i class="fa-solid bi bi-cash-coin"></i>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="20" fill="currentColor" class="bi bi-cash-coin" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8m5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0"/>
                                                            <path d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195z"/>
                                                            <path d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083q.088-.517.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1z"/>
                                                            <path d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 6 6 0 0 1 3.13-1.567"/>
                                                          </svg>
                                                    </span>
                                                    <p>Ticket Price</p>
                                                    <h6 class="coupon-status">{{ $event->price }} DHs</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--End list event's-->
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection