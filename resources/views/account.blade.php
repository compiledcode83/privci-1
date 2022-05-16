@extends('layouts.app')

@section('content')

<div class="container-fluid main-container pt-7 pb-7" style="background-color:rgb(30,31,33);">
    <div class="col-xl-12 mb-4">
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
    <div class="col-xl-12 mb-4">
        <div class="card-header" style="background-color:rgb(42,43,45); border-radius:5px;">
            <h1 class="m-0 mr-2 text-white">Tracking Company Email</h1>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="tracking-company-email" id="account_radio_1" checked>
                <label class="form-check-label text-white" for="account_radio_1">
                    Automatically track sites where user may have provided or used their company email address
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="tracking-company-email" id="account_radio_2">
                <label class="form-check-label text-white" for="account_radio_2">
                    Allow users to approve which sites tomonitor after providing or using their company email address
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input color-red" type="radio" name="tracking-company-email" id="account_radio_3">
                <label class="form-check-label text-red" for="account_radio_3">
                    Stop tracking
                </label>
            </div>
        </div>
    </div>
    <div class="col-xl-12 mb-4">
        <div class="card-header" style="background-color:rgb(42,43,45); border-radius:5px;">
            <h1 class="m-0 mr-2 text-white">Notifications</h1>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="account_notification" name="" value="something">
                <label class="form-check-label" for="account_notification">
                    I want to be notified in the event where my company email address is found in a data breach in the future.
                </label>
            </div>
            <div class="d-flex align-items-center">
                <h3 class="m-0 mr-2 p-0">Send email notifications to: </h3>
                <div class="d-flex align-items-center" id="notification_p">
                    <p>infosec@company.com </p>
                    <i class="fa fa-edit ml-2" onClick="
                        document.getElementById('notification_p').setAttribute('style', 'display:none !important');
                        document.getElementById('notification_input').style.display = '';
                    "></i>
                </div>
                <div class="d-flex align-items-center" id="notification_input" style="display:none !important">
                    <input type="text" class="pl-2 pr-2 rounded" value="infosec@company.com">
                    <i class="fa fa-save ml-2" onClick="
                        document.getElementById('notification_p').children[0].innerHTML = document.getElementById('notification_input').children[0].value;
                        document.getElementById('notification_p').style.display = '';
                        document.getElementById('notification_input').setAttribute('style', 'display:none !important');
                    "></i>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-12 mb-4">
        <div class="card-header" style="background-color:rgb(42,43,45); border-radius:5px;">
            <h1 class="m-0 mr-2 text-white">Change Password</h1>
            <div class="d-flex">
                <h3 class="m-0 mr-2 text-white">Account: </h3>
                <p class="m-0 text-white">name@company.com</p>
            </div>
            <input type="text" placeholder="Current Password" class="form-control mb-3">
            <input type="text" placeholder="New Password" class="form-control mb-3">
            <button class="btn theme-background-color">Change Password</button>
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