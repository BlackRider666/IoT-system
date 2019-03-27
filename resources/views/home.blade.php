@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-2">
            <div class="card">
                <div class="card-header">Navigate</div>

                <div class="card-body">
                    <div class="navbar-light">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="/">Home</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @else
                    <div style="display:flex;">
                        <div class="col-md-2">
                            <div style="border-right:2px solid #cdcdcd">
                                <p style="margin: 0px 0px 5px;font-weight: 600;"><i class="fab fa-android"></i> Devices</p>
                                <h3><strong style="color:green;">1500</strong></h3>
                                <p style="margin:0;"><span style="color:green;"><strong>15%</strong></span> up</p>
                            </div>
                        </div>    
                        <div class="col-md-2">
                            <div style="border-right:2px solid #cdcdcd">
                                <p style="margin: 0px 0px 5px;font-weight: 600;"><i class="fas fa-address-card"></i> Users</p>
                                <h3><strong style="color:green;">143</strong></h3>
                                <p style="margin:0;"><span style="color:green;"><strong>15%</strong></span> up</p>
                            </div>
                        </div>    
                        <div class="col-md-2">
                            <div style="border-right:2px solid #cdcdcd">
                                <p style="margin: 0px 0px 5px;font-weight: 600;"><i class="fas fa-thermometer-half"></i> Temp</p>
                                <h3><strong style="color:green;">24.5 &#176;</strong></h3>
                                <p style="margin:0;"><span style="color:green;"><strong>5%</strong></span> up</p>
                            </div>
                        </div>    
                        <div class="col-md-2">
                            <div style="border-right:2px solid #cdcdcd">
                                <p style="margin: 0px 0px 5px;font-weight: 600;"><i class="fas fa-wind"></i>Air quality</p>
                                <h3><strong style="color:red;">86%</strong></h3>
                                <p style="margin:0;"><span style="color:red;"><strong>1.5%</strong></span> down</p>
                            </div>
                        </div>    
                        <div class="col-md-2">
                            <div style="border-right:2px solid #cdcdcd">
                                <p style="margin: 0px 0px 5px;font-weight: 600;"><i class="fas fa-wifi"></i> Connect</p>
                                <h3><strong style="color:green;">8000</strong></h3>
                                <p style="margin:0;"><span style="color:green;"><strong>15%</strong></span> up</p>
                            </div>
                        </div>    
                        <div class="col-md-2">
                            <p style="margin: 0px 0px 5px;font-weight: 600;"><i class="fas fa-assistive-listening-systems"></i> Noise</p>
                            <h3><strong style="color:green;">15 Db</strong></h3>
                            <p style="margin:0;"><span style="color:red;"><strong>15%</strong></span> up</p>
                        </div>
                    </div> 
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
