@extends('layouts.app')

@section('content')

<div class="container-fluid pt-8" style="background-color:rgb(30,31,33);">
    <div class="col-xl-12 mb-4">
        <div class="card">
            <div class="card-header" style="background-color:rgb(42,43,45); border-radius:5px;">
                <h1 class="m-0 mr-2 text-white">Account</h1>
                <div class="d-flex">
                    <h3 class="m-0 mr-2 text-white">Company Name: </h3>
                    <p class="m-0 text-white">Privci Ltd</p>
                </div>
                <div class="d-flex">
                    <h3 class="m-0 mr-2 text-white">Email address: </h3>
                    <p class="m-0 text-white">name@company.com</p>
                </div>
                <div class="d-flex">
                    <h3 class="m-0 mr-2 text-white">Account Type: </h3>
                    <p class="m-0 text-white">Trail</p>
                </div>
                <div class="d-flex">
                    <h3 class="m-0 mr-2 p-0 text-white">Renewal Date: </h3>
                    <p class="col-9 m-0 text-white">20-10-2022</p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-12 mb-4">
        <div class="card">
            <div class="card-header" style="background-color:rgb(42,43,45); border-radius:5px;">
                <h1 class="m-0 mr-2 text-white">Tracking Company Email</h1>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label text-white" for="flexRadioDefault1">
                        Automatically track sites where user may have provided or used their company email address
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label text-white" for="flexRadioDefault1">
                        Allow users to approve which sites tomonitor after providing or using their company email address
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input color-red" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label text-red" for="flexRadioDefault1">
                        Stop tracking
                    </label>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-12 mb-4">
        <div class="card">
            <div class="card-header" style="background-color:rgb(42,43,45); border-radius:5px;">
                <h1 class="m-0 mr-2 text-white">Notifications</h1>
                <div class="form-check">
                    <label class="form-check-label" for="">
                        <input type="checkbox" class="form-check-input" id="" name="" value="something">I want to be notified in the event where my company email address is found in a data breach in the future.
                    </label>
                </div>
                <div class="d-flex">
                    <h3 class="m-0 mr-2 p-0 text-white">Send email notifications to: </h3>
                    <p class="col-4 m-0 text-white">infosec@company.com <i class="fa fa-edit"></i></p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-12 mb-4">
        <div class="card">
            <div class="card-header" style="background-color:rgb(42,43,45); border-radius:5px;">
                <h1 class="m-0 mr-2 text-white">Account</h1>
                <div class="d-flex">
                    <h3 class="m-0 mr-2 text-white">Company Name: </h3>
                    <p class="m-0 text-white">Privci Ltd</p>
                </div>
                <div class="d-flex">
                    <h3 class="m-0 mr-2 text-white">Email address: </h3>
                    <p class="m-0 text-white">name@company.com</p>
                </div>
                <div class="d-flex">
                    <h3 class="m-0 mr-2 text-white">Account Type: </h3>
                    <p class="m-0 text-white">Trail</p>
                </div>
                <div class="d-flex">
                    <h3 class="m-0 mr-2 p-0 text-white">Renewal Date: </h3>
                    <p class="col-9 m-0 text-white">20-10-2022</p>
                </div>
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