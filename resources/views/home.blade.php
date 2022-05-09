@extends('layouts.app')

@section('content')

<div class="container-fluid pt-7 pb-7">
    <div class="filter-row">
        <h3 class="text-white mb-0 text-right">Filter:</h3>
        <button class="btn">
            Sort: A to Z
            <div class="d-flex flex-column ml-2">
                <i class="fa-solid fa fa-angle-up m-0"></i> 
                <i class="fa-solid fa fa-angle-down m-0"></i> 
            </div>
        </button>
        <button class="btn">
            Sort: With a breach history
            <div class="d-flex flex-column ml-2">
                <i class="fa-solid fa fa-angle-up m-0"></i> 
                <i class="fa-solid fa fa-angle-down m-0"></i> 
            </div>
        </button>
        <button class="btn">
            Sort: With the most email addresses
            <div class="d-flex flex-column ml-2">
                <i class="fa-solid fa fa-angle-up m-0"></i> 
                <i class="fa-solid fa fa-angle-down m-0"></i> 
            </div>
        </button>
    </div>
    <div class="main-card rounded">
        <div class="card-col col-md-2">
            <div class="row m-0 mb-2 align-items-center">
                <h2 class="text-white p-0 pl-2 m-0">Domain</h2>
            </div>
            <div class="pt-3 pl-2 inner-card rounded">
                <div class="form-check d-flex align-items-center">
                    <input class="form-check-input" type="radio" name="" id="" checked/>
                    <label class="form-check-label text-white" for=""> securmind.com </label>
                </div>
                <div class="form-check d-flex align-items-center">
                    <input class="form-check-input" type="radio" name="" id=""/>
                    <label class="form-check-label text-white" for=""> securmind.com </label>
                </div>
            </div>
        </div>
        <div class="card-col">
            <div class="row m-0 mb-2 align-items-center">
                <h2 class="text-white mr-1">Search</h2>
                <select class="rounded">
                    <option value="domain" selected>Domain</option>
                    <option value="email">Email</option>
                </select>
                <h2 class="text-white ml-1 mr-3">:</h2>
                <div class="col-7 p-0 d-flex align-items-center bg-white rounded">
                    <input type="url" class="col rounded border-0" placeholder="Enter domain">
                    <i class="col-1 fa fa-search"></i>
                </div>
            </div>
            <div class="p-2 inner-card rounded">
                <div class="p-2 medium-card rounded text-white">
                    <div class="d-flex mb-2 justify-content-between theme-color">
                        <div class="col-sm-12 col-md-11 p-0 d-flex justify-content-between">
                            <div class="d-flex align-items-center">
                                <h4 class="m-0 mr-2 theme-color">Company Name:</h4>
                                <p class="m-0">2fast4u</p>
                            </div>
                            <div class="d-flex align-items-center">
                                <h4 class="m-0 mr-2 theme-color">No of breaches:</h4>
                                <p class="m-0">2fast4u</p>
                            </div>
                            <div class="d-flex align-items-center">
                                <h4 class="m-0 mr-2 theme-color">Privacy policy:</h4>
                                <p class="m-0">https://secure.privci.com/p...</p>
                            </div>
                        </div>
                        <p class="page-show">1 of 2</p>
                    </div>
                    <div class="search-result-info">
                        <h4 class="m-0 text-white">Breach Date:</h4>
                        <p class="col m-0">7-2016</p>
                    </div>
                    <div class="search-result-info">
                        <h4 class="m-0 text-white">No of Records:</h4>
                        <p class="col m-0">5,162</p>
                    </div>
                    <div class="search-result-info">
                        <h4 class="m-0 p-0 text-white">Breach of Summary:</h4>
                        <p class="col-9 m-0">In October 2015, a web hosting website known as 000webhost was alledgelly breached. And this affected over 13 million user data. This data was made up of usernames, emails, and plain text passwords.</p>
                    </div>
                    <div class="search-result-info">
                        <h4 class="m-0 text-white">Reference:</h4>
                        <p class="col m-0">https://www/esecurityplanet.com/network-security/data-breach-at-web-host-exposes-13-million-plain-text-passwords.html</p>
                    </div>
                    <div class="d-flex justify-content-end">
                        <p class="m-0 p-0 theme-color">Previous</p>
                        <ul class="d-flex align-items-center ml-2 m-0 mr-2 p-0">
                            <li class="list-unstyled pl-2 pr-2 page-selected">1</li>
                            <li class="list-unstyled pl-2 pr-2">2</li>
                            <li class="list-unstyled pl-2 pr-2">3</li>
                        </ul>
                        <p class="m-0 p-0 theme-color">Next</p>
                    </div>
                </div>
                <div class="accordian-container mb-5 mt-2">
                    <button class="accordion">Does the Internet company sell the personal data of its users?</button>
                    <p class="panel">...If you no longer want to receive marketing emails from Splunk on a go-forward back. Alternatively, you may use the "unsubscribe" feature in our email message... In our paid on-premises products, you can set your level of participation, For more ... Documentation... ...</p>
                    <button class="accordion">Do they share personal data for marketing purposes?</button>
                    <p class="panel">When I was growing up, I had an old neighbor named doctor Gibbs, he never yelled at us for playing in his yard, I remember him as someone who was a lot nicer than circumstances warranted.</p>
                    <button class="accordion">Statement(s) related to opting out found in the Privacy Policy</button>
                    <p class="panel">When the good doctor wasn't saving lives, he was planting trees, he was from "no pain, no gain" school of horticulture. He never watered his new trees, which flew in the face of conventional wisdom, once I asked why and he said...</p>
                </div>
                
                <div class="p-0 mb-2 d-flex justify-content-between">
                    <div class="col-8 p-0 d-flex m-0 align-items-center">
                        <h4 class="text-white mr-3">Search email:</h4>
                        <div class="col pl-0 d-flex align-items-center bg-white rounded">
                            <input type="email" class="col rounded border-0" placeholder="Enter an email address...">
                            <i class="col-1 fa fa-search"></i>
                        </div>
                    </div>
                    <div class="form-check d-flex align-items-center">
                        <label class="form-check-label text-white" for=""> Select all </label>
                        <input class="form-check-input" type="checkbox" name="" id=""/>
                    </div>
                </div>
                <div class="pl-3 pt-2 medium-card rounded text-white">
                    <h4 class="mb-2 text-white">Users that may have submite or used their company email on <a class="theme-color">securmind.com</a></h4>
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-12">
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
                        <div class="col-lg-3 col-md-6 col-sm-12">
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
                        <div class="col-lg-3 col-md-6 col-sm-12">
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
                        <div class="col-lg-3 col-md-6 col-sm-12">
                        </div>
                    </div>
                    <div class="row p-0 m-0 mt-3 justify-content-between">
                        <div><span class="theme-color"> 1</span>-<span class="theme-color"> 50</span> of <span class="theme-color">245</span> records</div>
                        <div class="col-2 m-0 mr-3 p-0 d-flex justify-content-between">
                            <span class="theme-color">Previous</span>
                            <span class="theme-color">Next</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row m-0 mt-4 justify-content-between">
                <button class="btn btn-sm btn-danger"> Check if email is in a data breach</button>
                <div class="d-flex p-0">
                    <button class="btn btn-sm theme-background-color mr-4">Send an email to selected user(s)</button>
                    <button class="btn btn-sm theme-background-color">Send a push notification</button>
                </div>
            </div>
            <p class="bottom-note"><strong>Note: </strong> You must select an email to use this feature</p>
        </div>
    </div>
        
</div>

@include('layouts.footers.auth')

@endsection

@push('js')
<script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
<script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush