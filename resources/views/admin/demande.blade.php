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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>   
@endsection