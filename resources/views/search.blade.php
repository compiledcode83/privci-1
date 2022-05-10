@extends('layouts.app')

@section('content')

<div class="container-fluid pt-7 pb-7">
    <div class="text-center text-white">
        <h1 class="text-white">Search Our Database</h1>
        <h4 class="text-white">Is your email or the email of a colleague at risk?</h4>
        <h4 class="text-white">Have you submitted personal data to a site that has a data breach history?</h4>
        <h2 class="text-white">Enter an email address or the top level domain of a website to find out!</h2>
        <select class="btn mt-4 mb-3" onChange="if(this.value == 1) document.getElementById('search-form').setAttribute('placeholder', 'Enter an email address...'); else document.getElementById('search-form').setAttribute('placeholder', 'Enter domain, for example: privci.com...');">
            <option value="1">Search email address</option>
            <option value="2">Search website domain</option>
        </select>
        <div class="container d-flex bg-white rounded search-form">
            <input type="email" class="form-control border-0" id="search-form" placeholder="Enter an email address..." name="email">
            <div class="d-flex align-items-center text-center">
                <button class="btn p-0 border-0"><h4 class="p-1 border border-primary rounded text-dark">Search</h4></button>
            </div>
        </div>
    </div>    

    <div class="text-center mt-5">
        <h2 class="text-white">Search result(s) for: fonns.kenedy211@privci.com</h2>
    </div>
    <div class="col-xl-12 mb-4">
        <div class="card-header rounded" style="background-color:rgb(42,43,45);">
            <div class="d-flex">
                <h3 class="m-0 mr-2 text-white">Breach date: </h3>
                <p class="m-0 text-white">12-2016</p>
            </div>
            <div class="d-flex">
                <h3 class="m-0 mr-2 text-white">Source: </h3>
                <p class="m-0 text-white">yahoo.com</p>
            </div>
            <div class="d-flex">
                <h3 class="m-0 mr-2 text-white">Summary: </h3>
                <p class="m-0 text-white">In April 2016, client information got from the spilling application known as "17" seemed recorded available to be purchased on a Tor concealed assistance commercial center. The information contained more than 4 million remarkable email addresses alongside IP addresses, usernames and passwords put away as unsalted MD5 hashes.</p>
            </div>
            <div class="d-flex">
                <h3 class="m-0 mr-2 text-white">Compromised data: </h3>
                <p class="m-0 text-white">Email addresses, Passwords</p>
            </div>
            <div class="d-flex">
                <h3 class="m-0 mr-2 p-0 text-white">Recommended action: </h3>
                <p class="col-9 m-0 text-white">The AntiPublic Combo List is a massive database of email addresses and passwords created by aggregating data from different data breaches.</p>
            </div>
        </div>
    </div>
    <div class="col-xl-12 mb-4">
        <div class="card-header rounded" style="background-color:rgb(42,43,45);">
            <div class="d-flex">
                <h3 class="m-0 mr-2 text-white">Breach date: </h3>
                <p class="m-0 text-white">12-2016</p>
            </div>
            <div class="d-flex">
                <h3 class="m-0 mr-2 text-white">Source: </h3>
                <p class="m-0 text-white">yahoo.com</p>
            </div>
            <div class="d-flex">
                <h3 class="m-0 mr-2 text-white">Summary: </h3>
                <p class="m-0 text-white">In April 2016, client information got from the spilling application known as "17" seemed recorded available to be purchased on a Tor concealed assistance commercial center. The information contained more than 4 million remarkable email addresses alongside IP addresses, usernames and passwords put away as unsalted MD5 hashes.</p>
            </div>
            <div class="d-flex">
                <h3 class="m-0 mr-2 text-white">Compromised data: </h3>
                <p class="m-0 text-white">Email addresses, Passwords</p>
            </div>
            <div class="d-flex">
                <h3 class="m-0 mr-2 p-0 text-white">Recommended action: </h3>
                <p class="col-9 m-0 text-white">The AntiPublic Combo List is a massive database of email addresses and passwords created by aggregating data from different data breaches.</p>
            </div>
        </div>
    </div>
    <div class="text-center mt-5">
        <h2 class="text-white">Search result(s) for: divine.chana@privci.com</h2>
    </div>
    <div class="col-xl-12 mb-4">
        <div class="card-header rounded text-center theme-background-color">
            <h2 class="m-0 mr-2 text-white">No results found! </h3>
        </div>
    </div>
    <div class="text-center mt-5">
        <h2 class="text-white">Search result(s) for: fonns.kenedy211@privci.com</h2>
    </div>
    <div class="col-xl-12 mb-4">
        <div class="card-header rounded" style="background-color:rgb(42,43,45);">
            <div class="d-flex">
                <h3 class="m-0 mr-2 text-white">Breach date: </h3>
                <p class="m-0 text-white">12-2016</p>
            </div>
            <div class="d-flex">
                <h3 class="m-0 mr-2 text-white">Source: </h3>
                <p class="m-0 text-white">yahoo.com</p>
            </div>
            <div class="d-flex">
                <h3 class="m-0 mr-2 text-white">Summary: </h3>
                <p class="m-0 text-white">In April 2016, client information got from the spilling application known as "17" seemed recorded available to be purchased on a Tor concealed assistance commercial center. The information contained more than 4 million remarkable email addresses alongside IP addresses, usernames and passwords put away as unsalted MD5 hashes.</p>
            </div>
            <div class="d-flex">
                <h3 class="m-0 mr-2 text-white">Compromised data: </h3>
                <p class="m-0 text-white">Email addresses, Passwords</p>
            </div>
            <div class="d-flex">
                <h3 class="m-0 mr-2 p-0 text-white">Recommended action: </h3>
                <p class="col-9 m-0 text-white">The AntiPublic Combo List is a massive database of email addresses and passwords created by aggregating data from different data breaches.</p>
            </div>
        </div>
    </div>

    <div class="text-center mt-5">
        <h2 class="text-white">Search result(s) for: fonns.kenedy211@privci.com</h2>
    </div>
    <div class="col-xl-12 mb-4">
        <div class="card-header rounded" style="background-color:rgb(42,43,45);">
            <div class="d-flex">
                <h3 class="m-0 mr-2 text-white">Breach date: </h3>
                <p class="m-0 text-white">12-2016</p>
            </div>
            <div class="d-flex">
                <h3 class="m-0 mr-2 text-white">Source: </h3>
                <p class="m-0 text-white">yahoo.com</p>
            </div>
            <div class="d-flex">
                <h3 class="m-0 mr-2 text-white">Summary: </h3>
                <p class="m-0 text-white">In April 2016, client information got from the spilling application known as "17" seemed recorded available to be purchased on a Tor concealed assistance commercial center. The information contained more than 4 million remarkable email addresses alongside IP addresses, usernames and passwords put away as unsalted MD5 hashes.</p>
            </div>
            <div class="d-flex">
                <h3 class="m-0 mr-2 text-white">Compromised data: </h3>
                <p class="m-0 text-white">Email addresses, Passwords</p>
            </div>
            <div class="d-flex">
                <h3 class="m-0 mr-2 p-0 text-white">Recommended action: </h3>
                <p class="col-9 m-0 text-white">The AntiPublic Combo List is a massive database of email addresses and passwords created by aggregating data from different data breaches.</p>
            </div>
        </div>
    </div>

    
        
    <div class="text-center mt-5">
        <h2 class="text-white">Search result(s) for: divine.chana@privci.com</h2>
    </div>
    <div class="col-xl-12 mb-4">
        <div class="card-header rounded text-center theme-background-color">
            <h2 class="m-0 mr-2 text-white">No results found! </h3>
        </div>
    </div>

    <div class="text-center mt-5">
        <h2 class="text-white">Search result(s) for: yahoo.com</h2>
    </div>
    <div class="col-xl-12 mb-4">
        <div class="card-header rounded text-center theme-background-color">
            <h2 class="m-0 mr-2 text-white">No results found! </h3>
        </div>
    </div>
</div>
@include('layouts.footers.auth')

<style>
.no-result-card{
    background-color: blue;
}

</style>



@endsection

@push('js')
<script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
<script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>
@endpush