@extends('admin_layout.mastrAdmin')
@section('content')
    <div class="wrapper wrapper-body">
        <div class="dashboard-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="d-main-title">
                            <h3><i class="fa-solid fa-user-group me-3"></i>Team Members</h3>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="conversion-setup">
                            <div class="main-card mt-5">
                                <div class="dashboard-wrap-content p-4">
                                    <div class="d-md-flex flex-wrap align-items-center">
                                        <div class="nav custom2-tabs btn-group" role="tablist">
                                            <button class="tab-link ms-0 active" data-bs-toggle="tab" data-bs-target="#overview-tab" type="button" role="tab" aria-controls="overview-tab" aria-selected="true">Overview</button>
                                            <button class="tab-link" data-bs-toggle="tab" data-bs-target="#role-tab" type="button" role="tab" aria-controls="role-tab" aria-selected="false">Role</button>
                                        </div>
                                        <div class="rs ms-auto mt_r4">
                                            <button class="main-btn btn-hover h_40 w-100" data-bs-toggle="modal" data-bs-target="#inviteTeamModal">Invite a Team Member</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-content">
                                <div class="tab-pane fade active show" id="overview-tab" role="tabpanel">
                                    <div class="table-card mt-4">
                                        <div class="main-table">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead class="thead-dark">
                                                        <tr>
                                                            <th scope="col">Name</th>
                                                            <th scope="col">Email</th>
                                                            <th scope="col">Role</th>
                                                            <th scope="col">Last Login</th>
                                                            <th scope="col">2FA Enable</th>
                                                            <th scope="col">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>										
                                                            <td>John Doe</td>	
                                                            <td>johndoe@example.com</td>	
                                                            <td>Account Owner</td>	
                                                            <td>20 May 22, 10.27 AM</td>	
                                                            <td>No</td>	
                                                            <td><span class="action-btn disabled"><i class="fa-solid fa-lock"></i></span></td>	
                                                        </tr>
                                                        <tr>										
                                                            <td>Rock Smith</td>	
                                                            <td>rocksmith@example.com</td>	
                                                            <td>Basic access</td>	
                                                            <td>20 May 22, 11.15 AM</td>	
                                                            <td>No</td>	
                                                            <td><span class="action-btn"><i class="fa-solid fa-trash-can"></i></span></td>	
                                                        </tr>
                                                        <tr>										
                                                            <td>Jassica William</td>	
                                                            <td>jassicawilliam@example.com</td>	
                                                            <td>Finance</td>	
                                                            <td>20 May 22, 11.45 AM</td>	
                                                            <td>No</td>	
                                                            <td><span class="action-btn"><i class="fa-solid fa-trash-can"></i></span></td>	
                                                        </tr>
                                                        <tr>										
                                                            <td>Lizzy Wizzy</td>	
                                                            <td>lizzywizzy@example.com</td>	
                                                            <td>Power User</td>	
                                                            <td>20 May 22, 12.20 PM</td>	
                                                            <td>No</td>	
                                                            <td><span class="action-btn"><i class="fa-solid fa-trash-can"></i></span></td>	
                                                        </tr>
                                                    </tbody>									
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="role-tab" role="tabpanel">
                                    <div class="role-slider-content mt-4">
                                        <div class="owl-carousel role-slider owl-theme">
                                            <div class="item">
                                                <div class="main-card">
                                                    <div class="role-header">
                                                        <h6>Account Owner</h6>
                                                        <span>1 per account</span>
                                                    </div>
                                                    <div class="role-body-content">
                                                        <div class="role-item">
                                                            <i class="fa-solid fa-check"></i>
                                                            <span>Banking</span>
                                                        </div>
                                                        <div class="role-item">
                                                            <i class="fa-solid fa-check"></i>
                                                            <span>Team members</span>
                                                        </div>
                                                        <div class="role-item">
                                                            <i class="fa-solid fa-check"></i>
                                                            <span>Events</span>
                                                        </div>
                                                        <div class="role-item">
                                                            <i class="fa-solid fa-check"></i>
                                                            <span>Reports</span>
                                                        </div>
                                                        <div class="role-item">
                                                            <i class="fa-solid fa-check"></i>
                                                            <span>Customer service</span>
                                                        </div>
                                                        <div class="role-item">
                                                            <i class="fa-solid fa-check"></i>
                                                            <span>Amend bookings</span>
                                                        </div>
                                                        <div class="role-item">
                                                            <i class="fa-solid fa-check"></i>
                                                            <span>Gift certificates</span>
                                                        </div>
                                                        <div class="role-item">
                                                            <i class="fa-solid fa-check"></i>
                                                            <span>Marketing tools</span>
                                                        </div>
                                                        <div class="role-item">
                                                            <i class="fa-solid fa-check"></i>
                                                            <span>Integration tools</span>
                                                        </div>
                                                        <div class="role-item">
                                                            <i class="fa-solid fa-check"></i>
                                                            <span>Scanning app</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="main-card">
                                                    <div class="role-header">
                                                        <h6>Power user</h6>
                                                        <span>Unlimited</span>
                                                    </div>
                                                    <div class="role-body-content">
                                                        <div class="role-item">
                                                            <i class="fa-solid fa-xmark i-disabled"></i>
                                                            <span>Banking</span>
                                                        </div>
                                                        <div class="role-item">
                                                            <i class="fa-solid fa-check"></i>
                                                            <span>Team members</span>
                                                        </div>
                                                        <div class="role-item">
                                                            <i class="fa-solid fa-check"></i>
                                                            <span>Events</span>
                                                        </div>
                                                        <div class="role-item">
                                                            <i class="fa-solid fa-check"></i>
                                                            <span>Reports</span>
                                                        </div>
                                                        <div class="role-item">
                                                            <i class="fa-solid fa-check"></i>
                                                            <span>Customer service</span>
                                                        </div>
                                                        <div class="role-item">
                                                            <i class="fa-solid fa-check"></i>
                                                            <span>Amend bookings</span>
                                                        </div>
                                                        <div class="role-item">
                                                            <i class="fa-solid fa-check"></i>
                                                            <span>Gift certificates</span>
                                                        </div>
                                                        <div class="role-item">
                                                            <i class="fa-solid fa-check"></i>
                                                            <span>Marketing tools</span>
                                                        </div>
                                                        <div class="role-item">
                                                            <i class="fa-solid fa-check"></i>
                                                            <span>Integration tools</span>
                                                        </div>
                                                        <div class="role-item">
                                                            <i class="fa-solid fa-check"></i>
                                                            <span>Scanning app</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="main-card">
                                                    <div class="role-header">
                                                        <h6>Finance</h6>
                                                        <span>Unlimited</span>
                                                    </div>
                                                    <div class="role-body-content">
                                                        <div class="role-item">
                                                            <i class="fa-solid fa-check"></i>
                                                            <span>Banking</span>
                                                        </div>
                                                        <div class="role-item">
                                                            <i class="fa-solid fa-xmark i-disabled"></i>
                                                            <span>Team members</span>
                                                        </div>
                                                        <div class="role-item">
                                                            <i class="fa-solid fa-xmark i-disabled"></i>
                                                            <span>Events</span>
                                                        </div>
                                                        <div class="role-item">
                                                            <i class="fa-solid fa-check"></i>
                                                            <span>Reports</span>
                                                        </div>
                                                        <div class="role-item">
                                                            <i class="fa-solid fa-xmark i-disabled"></i>
                                                            <span>Customer service</span>
                                                        </div>
                                                        <div class="role-item">
                                                            <i class="fa-solid fa-xmark i-disabled"></i>
                                                            <span>Amend bookings</span>
                                                        </div>
                                                        <div class="role-item">
                                                            <i class="fa-solid fa-xmark"></i>
                                                            <span>Gift certificates</span>
                                                        </div>
                                                        <div class="role-item">
                                                            <i class="fa-solid fa-xmark i-disabled"></i>
                                                            <span>Marketing tools</span>
                                                        </div>
                                                        <div class="role-item">
                                                            <i class="fa-solid fa-xmark i-disabled"></i>
                                                            <span>Integration tools</span>
                                                        </div>
                                                        <div class="role-item">
                                                            <i class="fa-solid fa-xmark i-disabled"></i>
                                                            <span>Scanning app</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="main-card">
                                                    <div class="role-header">
                                                        <h6>Basic access</h6>
                                                        <span>Unlimited</span>
                                                    </div>
                                                    <div class="role-body-content">
                                                        <div class="role-item">
                                                            <i class="fa-solid fa-xmark i-disabled"></i>
                                                            <span>Banking</span>
                                                        </div>
                                                        <div class="role-item">
                                                            <i class="fa-solid fa-xmark i-disabled"></i>
                                                            <span>Team members</span>
                                                        </div>
                                                        <div class="role-item">
                                                            <i class="fa-solid fa-check"></i>
                                                            <span>Events</span>
                                                        </div>
                                                        <div class="role-item">
                                                            <i class="fa-solid fa-check"></i>
                                                            <span>Reports</span>
                                                        </div>
                                                        <div class="role-item">
                                                            <i class="fa-solid fa-check"></i>
                                                            <span>Customer service</span>
                                                        </div>
                                                        <div class="role-item">
                                                            <i class="fa-solid fa-xmark i-disabled"></i>
                                                            <span>Amend bookings</span>
                                                        </div>
                                                        <div class="role-item">
                                                            <i class="fa-solid fa-check"></i>
                                                            <span>Gift certificates</span>
                                                        </div>
                                                        <div class="role-item">
                                                            <i class="fa-solid fa-check"></i>
                                                            <span>Marketing tools</span>
                                                        </div>
                                                        <div class="role-item">
                                                            <i class="fa-solid fa-xmark i-disabled"></i>
                                                            <span>Integration tools</span>
                                                        </div>
                                                        <div class="role-item">
                                                            <i class="fa-solid fa-check"></i>
                                                            <span>Scanning app</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item">
                                                <div class="main-card">
                                                    <div class="role-header">
                                                        <h6>Producer access</h6>
                                                        <span>1 per event</span>
                                                    </div>
                                                    <div class="role-body-content">
                                                        <div class="role-item">
                                                            <i class="fa-solid fa-xmark i-disabled"></i>
                                                            <span>Banking</span>
                                                        </div>
                                                        <div class="role-item">
                                                            <i class="fa-solid fa-xmark i-disabled"></i>
                                                            <span>Team members</span>
                                                        </div>
                                                        <div class="role-item">
                                                            <i class="fa-solid fa-xmark i-disabled"></i>
                                                            <span>Events</span>
                                                        </div>
                                                        <div class="role-item">
                                                            <i class="fa-solid fa-check"></i>
                                                            <span>Reports</span>
                                                        </div>
                                                        <div class="role-item">
                                                            <i class="fa-solid fa-xmark i-disabled"></i>
                                                            <span>Customer service</span>
                                                        </div>
                                                        <div class="role-item">
                                                            <i class="fa-solid fa-xmark i-disabled"></i>
                                                            <span>Amend bookings</span>
                                                        </div>
                                                        <div class="role-item">
                                                            <i class="fa-solid fa-xmark i-disabled"></i>
                                                            <span>Gift certificates</span>
                                                        </div>
                                                        <div class="role-item">
                                                            <i class="fa-solid fa-xmark i-disabled"></i>
                                                            <span>Marketing tools</span>
                                                        </div>
                                                        <div class="role-item">
                                                            <i class="fa-solid fa-xmark i-disabled"></i>
                                                            <span>Integration tools</span>
                                                        </div>
                                                        <div class="role-item">
                                                            <i class="fa-solid fa-check"></i>
                                                            <span>Scanning app</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>   
@endsection