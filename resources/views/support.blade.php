@extends('layouts.app')

@section('content')

<div class="container-fluid pt-7 pb-7">
    <div class="col-xl-12 mb-4">
        <div class="card">
            <div class="card-header" style="background-color:rgb(42,43,45); border-radius:5px;">
                <h1 class="m-0 mr-2 text-white">Support</h1>
                <div class="d-flex">
                    <h3 class="m-0 mr-2 text-white">Please contact the relevant email below if you need assistance and we will respond as soon as possible: </h3>
                </div>
                <div class="d-flex">
                    <h3 class="m-0 mr-2 text-white">General Inquiries: </h3>
                    <p class="m-0 text-white">support@Privci.io</p>
                </div>
                <div class="d-flex">
                    <h3 class="m-0 mr-2 p-0 text-white">Techinical Issues / Questions: </h3>
                    <p class="col-6 m-0 p-0 text-white">admin@privci.com</p>
                </div>
            </div>
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