@extends('layouts.app')

@section('content')

<div class="container-fluid pt-8" style="background-color:rgb(30,31,33);">
    <div class="row col-lg-10 col-md-12 m-0 mb-1 p-0">
        <div class="col-lg-1 col-md-2 d-flex align-items-center">
            <h3 class="text-white mb-0 text-right">Filter:</h3>
        </div>
        <div class="col-lg-2 col-md-3 d-flex align-items-center">
            <button class="form-control bg-gray text-white p-0 pl-2 pr-2">Sort: A to Z</button>
        </div>
        <div class="col-lg-3 col-md-3 d-flex align-items-center">
            <button class="form-control bg-gray text-white p-0 pl-2 pr-2">Sort: With a breach history</button>
        </div>
        <div class="col-lg-4 col-md-4 d-flex align-items-center">
            <button class="form-control bg-gray text-white p-0 pl-2 pr-2">Sort: With the most email addresses</button>
        </div>
    </div>
    <div class="col-xl-12 mb-5 mb-xl-0">
        <div class="card">
            <div class="card-header" style="background-color:rgb(42,43,45); border-radius:5px;">
                <div class="row align-items-center">
                    <div class="col-md-2 p-0">
                        <h2 class="text-white p-0 pl-2 m-0">Domain</h2>
                    </div>
                    <div class="col">
                        <div class="row">
                            <h2 class="text-white ml-2 pt-2 pr-2">Search</h2>
                            <div class="d-flex align-items-center m-0 p-0">
                                <button class="btn pt-0 pb-0 pl-2 pr-2 h-75" style="background-color:rgb(247,223,113)">Domain <span>></span></button>
                                <h2 class="text-white pt-2 mr-3">:</h2>
                            </div>
                            <div class="col-md-6 d-flex align-items-center m-0 p-0">
                                <input type="text" class="form-control pt-0 pb-0 pl-2 pr-2 h-75" placeholder="Enter domain" style="background-color:rgb(80,80,82);">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-2 pl-2 text-white">
                        <div class="d-flex flex-column h-100 pt-3 pl-2 rounded" style="background-color:rgb(80,80,82);">
                            <div class="custom-control custom-radio mb-2">
                                <input type="radio" class="custom-control-input" id="customRadio" name="example1">
                                <label class="custom-control-label" for="customRadio">securmind.com</label>
                            </div>
                            <div class="custom-control custom-radio mb-2">
                                <input type="radio" class="custom-control-input" id="customRadio" name="example1">
                                <label class="custom-control-label" for="customRadio">mypersa.com</label>
                            </div>
                            <div class="custom-control custom-radio mb-2">
                                <input type="radio" class="custom-control-input" id="customRadio" name="example1">
                                <label class="custom-control-label" for="customRadio">yahoo.com</label>
                            </div>
                            <div class="custom-control custom-radio mb-2">
                                <input type="radio" class="custom-control-input" id="customRadio" name="example1">
                                <label class="custom-control-label" for="customRadio">breachnow.com</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-10 pl-2 pr-2 text-white">
                        <div class="p-2 rounded" style="background-color:rgb(80,80,82);">
                            <div class="p-2 rounded text-white" style="background-color:rgb(55,56,58);">
                                <div class="row m-0 mb-2 justify-content-between text-blue">
                                    <div class="d-flex align-items-center">
                                        <h4 class="m-0 mr-2 text-blue">Company Name:</h4>
                                        <p class="m-0">2fast4u</p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <h4 class="m-0 mr-2 text-blue">No of breaches:</h4>
                                        <p class="m-0">2fast4u</p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <h4 class="m-0 mr-2 text-blue">Privacy policy:</h4>
                                        <p class="m-0">https://secure.privci.com/p...</p>
                                    </div>
                                    <div class="d-flex align-items-start">
                                        <p class="m-0 text-white">1 of 2</p>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <h4 class="m-0 text-white">Breach Date:</h4>
                                    <p class="col m-0">7-2016</p>
                                </div>
                                <div class="d-flex">
                                    <h4 class="m-0 text-white">No of Records:</h4>
                                    <p class="col m-0">5,162</p>
                                </div>
                                <div class="d-flex">
                                    <h4 class="m-0 p-0 text-white">Breach of Summary:</h4>
                                    <p class="col-9 m-0">In October 2015, a web hosting website known as 000webhost was alledgelly breached. And this affected over 13 million user data. This data was made up of usernames, emails, and plain text passwords.</p>
                                </div>
                                <div class="d-flex">
                                    <h4 class="m-0 text-white">Reference:</h4>
                                    <p class="col m-0">https://www/esecurityplanet.com/network-security/data-breach-at-web-host-exposes-13-million-plain-text-passwords.html</p>
                                </div>
                                <div class="d-flex justify-content-end">
                                    <p class="text-blue m-0 p-0">Previous</p>
                                    <ul class="d-flex align-items-center ml-2 m-0 mr-2 p-0">
                                        <li class="list-unstyled pl-2 pr-2 bg-white rounded text-dark">1</li>
                                        <li class="list-unstyled pl-2 pr-2">2</li>
                                    </ul>
                                    <p class="text-blue m-0 p-0">Next</p>
                                </div>
                            </div>
                            <div class="mb-5 mt-2">
                                <p class="m-0" >Does the Internet company sell the personal data of its users?<span><i></i></span></p>
                                <p class="m-0">Do they share personal data for marketing purposes?<span><i></i></span></p>
                                <p class="m-0">Statement(s) related to opting out found in the Privacy Policy<span><i></i></span></p>
                            </div>
                            <div class="p-0 mb-2 d-flex justify-content-between align-items-center">
                                <div class="col-6 form-group d-flex align-items-center p-0 m-0">
                                    <h4 for="pwd" class="m-0 mr-1 p-0 text-white">Search email:</h4>
                                    <input type="password" class="col form-control p-1 h-75" id="pwd" placeholder="Enter password" name="pswd" style="background-color:rgb(80,80,82);">
                                </div>
                                
                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" id="customRadio" name="example1">
                                    <label class="custom-control-label" for="customRadio">Select All</label>
                                </div>
                            </div>
                            <div class="pl-3 pt-2" style="background-color:rgb(55,56,58);">
                                <h4 class="text-white">Users that may have submite or used their company email on <a class="text-blue">securmind.com</a></h4>
                                <div class="row">
                                    <div class="col-3">
                                        <div class="form-check">
                                            <label class="form-check-label" for="">
                                                <input type="checkbox" class="form-check-input" id="" name="" value="something">adhere@me.com
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label" for="">
                                                <input type="checkbox" class="form-check-input" id="" name="" value="something">adhere@me.com
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label" for="">
                                                <input type="checkbox" class="form-check-input" id="" name="" value="something">adhere@me.com
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label" for="">
                                                <input type="checkbox" class="form-check-input" id="" name="" value="something">adhere@me.com
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label" for="">
                                                <input type="checkbox" class="form-check-input" id="" name="" value="something">adhere@me.com
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label" for="">
                                                <input type="checkbox" class="form-check-input" id="" name="" value="something">adhere@me.com
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label" for="">
                                                <input type="checkbox" class="form-check-input" id="" name="" value="something">adhere@me.com
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label" for="">
                                                <input type="checkbox" class="form-check-input" id="" name="" value="something">adhere@me.com
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label" for="">
                                                <input type="checkbox" class="form-check-input" id="" name="" value="something">adhere@me.com
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label" for="">
                                                <input type="checkbox" class="form-check-input" id="" name="" value="something">adhere@me.com
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label" for="">
                                                <input type="checkbox" class="form-check-input" id="" name="" value="something">adhere@me.com
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label" for="">
                                                <input type="checkbox" class="form-check-input" id="" name="" value="something">adhere@me.com
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="form-check">
                                            <label class="form-check-label" for="">
                                                <input type="checkbox" class="form-check-input" id="" name="" value="something">adhere@me.com
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label" for="">
                                                <input type="checkbox" class="form-check-input" id="" name="" value="something">adhere@me.com
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label" for="">
                                                <input type="checkbox" class="form-check-input" id="" name="" value="something">adhere@me.com
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label" for="">
                                                <input type="checkbox" class="form-check-input" id="" name="" value="something">adhere@me.com
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label" for="">
                                                <input type="checkbox" class="form-check-input" id="" name="" value="something">adhere@me.com
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label" for="">
                                                <input type="checkbox" class="form-check-input" id="" name="" value="something">adhere@me.com
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label" for="">
                                                <input type="checkbox" class="form-check-input" id="" name="" value="something">adhere@me.com
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label" for="">
                                                <input type="checkbox" class="form-check-input" id="" name="" value="something">adhere@me.com
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label" for="">
                                                <input type="checkbox" class="form-check-input" id="" name="" value="something">adhere@me.com
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label" for="">
                                                <input type="checkbox" class="form-check-input" id="" name="" value="something">adhere@me.com
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label" for="">
                                                <input type="checkbox" class="form-check-input" id="" name="" value="something">adhere@me.com
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label" for="">
                                                <input type="checkbox" class="form-check-input" id="" name="" value="something">adhere@me.com
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="form-check">
                                            <label class="form-check-label" for="">
                                                <input type="checkbox" class="form-check-input" id="" name="" value="something">adhere@me.com
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label" for="">
                                                <input type="checkbox" class="form-check-input" id="" name="" value="something">adhere@me.com
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label" for="">
                                                <input type="checkbox" class="form-check-input" id="" name="" value="something">adhere@me.com
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label" for="">
                                                <input type="checkbox" class="form-check-input" id="" name="" value="something">adhere@me.com
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label" for="">
                                                <input type="checkbox" class="form-check-input" id="" name="" value="something">adhere@me.com
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label" for="">
                                                <input type="checkbox" class="form-check-input" id="" name="" value="something">adhere@me.com
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label" for="">
                                                <input type="checkbox" class="form-check-input" id="" name="" value="something">adhere@me.com
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                    </div>
                                </div>
                                <div class="row p-0 m-0 mt-3 justify-content-between">
                                    <div><span class="text-blue"> 1</span>-<span class="text-blue"> 50</span> of <span class="text-blue">245</span> records</div>
                                    <div class="col-2 m-0 mr-3 p-0 d-flex justify-content-between">
                                        <span class="text-blue">Previous</span>
                                        <span class="text-blue">Next</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex mt-5 justify-content-between">
                            <div class="p-0">
                                <button class="btn btn-warning"> Check if email is in a data breach</button>
                                <p class="fs-2"><strong>Note:</strong>You must select an email to use this feature</p>
                            </div>
                            <div class="d-flex p-0">
                                <button class="btn btn-primary h-50 mr-4">Send an email to selected user(s)</button>
                                <button class="btn btn-primary h-50">Send a push notification</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        
    @include('layouts.footers.auth')
</div>
@endsection

@push('js')
<script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
<script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush