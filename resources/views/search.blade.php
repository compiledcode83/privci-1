@extends('layouts.app')

@section('content')

<div class="container-fluid pt-8" style="background-color:rgb(30,31,33);">
    <div class="text-center text-white">
        <h1 class="text-white">Search Our Database</h1>
        <h4 class="text-white">Is your email or the email of a colleague at risk?</h4>
        <h4 class="text-white">Have you submitted personal data to a site that has a data breach history?</h4>
        <h2 class="text-white">Enter an email address or the top level domain of a website to find out!</h2>
        <select class="btn mt-5 mb-3">
            <option>Search email address</option>
            <option>Search website domain</option>
        </select>
        <div class="container col-md-5">
            <input type="email" class="form-control" id="email" placeholder="Enter an email address..." name="email">
            <input type="url" class="form-control" id="url" placeholder="Enter domain, for example: privci.com" name="url" hidden>
        </div>
    </div>    

    <div class="text-center mt-5">
        <h2 class="text-white">Search result(s) for: fonns.kenedy211@privci.com</h2>
    </div>
    <div class="col-xl-12 mb-4">
        <div class="card">
            <div class="card-header" style="background-color:rgb(42,43,45); border-radius:5px;">
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
    </div>
    <div class="col-xl-12 mb-4">
        <div class="card">
            <div class="card-header" style="background-color:rgb(42,43,45); border-radius:5px;">
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
    </div>

        
    <div class="text-center mt-5">
        <h2 class="text-white">Search result(s) for: divine.chana@privci.com</h2>
    </div>
    <div class="col-xl-12 mb-4">
        <div class="card">
            <div class="card-header rounded bg-blue text-center">
                <h2 class="m-0 mr-2 text-white">No results found! </h3>
            </div>
        </div>
    </div>

    <div class="text-center mt-5">
        <h2 class="text-white">Search result(s) for: fonns.kenedy211@privci.com</h2>
    </div>
    <div class="col-xl-12 mb-4">
        <div class="card">
            <div class="card-header" style="background-color:rgb(42,43,45); border-radius:5px;">
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
    </div>

    <div class="text-center mt-5">
        <h2 class="text-white">Search result(s) for: fonns.kenedy211@privci.com</h2>
    </div>
    <div class="col-xl-12 mb-4">
        <div class="card">
            <div class="card-header" style="background-color:rgb(42,43,45); border-radius:5px;">
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
    </div>

    
        
    <div class="text-center mt-5">
        <h2 class="text-white">Search result(s) for: divine.chana@privci.com</h2>
    </div>
    <div class="col-xl-12 mb-4">
        <div class="card">
            <div class="card-header rounded bg-blue text-center">
                <h2 class="m-0 mr-2 text-white">No results found! </h3>
            </div>
        </div>
    </div>

    <div class="text-center mt-5">
        <h2 class="text-white">Search result(s) for: yahoo.com</h2>
    </div>
    <div class="col-xl-12 mb-4">
        <div class="card">
            <div class="card-header rounded bg-blue text-center">
                <h2 class="m-0 mr-2 text-white">No results found! </h3>
            </div>
        </div>
    </div>

    @include('layouts.footers.auth')
</div>

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