@extends('layouts.app')

@section('content')

<div class="container-fluid pt-7 pb-7">
    <div class="text-white">
        <h1 class="text-white mb-2">Upload A Data Protection Policy</h1>
        <h4 class="text-white">This will allow users to ask questions and receive answers that are token directly from your data protection policy</h4>
        <p class="upload-note mb-5"><strong>Note:</strong> Content will only be available to colleagues within your organisation</p>
        <div class="d-flex align-items-center mb-4">
            <input class="col-md-8 mr-3 form-control" type="file" id="formFile">
            <p class="upload-note">Supported:<br>pdf, doc, docx, text</p>
        </div>
        <div class="d-flex align-items-center">
            <h4 class="text-white mr-2">Or extract from a link: </h4>
            <input type="url" class="col-4 form-control" id="email" placeholder="Add link to extract..." name="url">
            <button class="btn theme-background-color ml-2 mr-2">Extract</button>
            <p class="upload-note">Supported:<br>pdf, html</p>
        </div>
    </div>    

    <textarea name="" id="" rows="10" class="col-xl-12 mt-4 rounded mb-2" placeholder="Copy and paste policy text..."></textarea>
    
    <div class="d-flex align-items-center mb-3">
        <h4 class="mr-3 text-white">Add a title to this document: </h4>
        <input type="email" class="col form-control" id="email" placeholder="Start typing..." name="email">
    </div>
    <div class="d-flex align-items-center mb-5">
        <h5 class="mr-3 text-white">Adding a link to the original document will allow users to access it from the extension: </h5>
        <input type="email" class="col form-control" id="email" placeholder="Paste link..." name="email">
    </div>
    <div class="d-flex flex-row-reverse align-items-center mb-6">
        <button class="btn theme-background-color ml-3">Save Upload</button>
        <p class="upload-note">Please make sure the extract has been properly parsed before saving</p>
    </div>
    <div class="faq-accordian-container">
        <div class="faq-upload">
            <h2 class="text-white mr-3">Documents Uploaded</h2>
            <!-- <h3 class="col add-tab border-gray bg-gray text-white p-2">Add a FAQ (up to 5 FAQ may be added)</h3> -->
            <div class="col add-tab border-gray text-white p-2 faq-accordion">Add a FAQ (up to 5 FAQ may be added)</div>
        </div>
            <!-- <button class="faq-accordion">Add a FAQ (up to 5 FAQ may be added)</button> -->
        <div class="faq-panel">
            <h4>A list of Frequently Asked Questions will be added to the extension and will be visible to colleagues within your organization</h4>
            <p>You may want to answer questioins regarding data DOs and DONTs, data sharing procedures, an the contact details of your Data Protection Officer.</p>
            <div class="d-flex align-items-center mb-1">
                <h3 class="col-2">Questions:</h3>
                <input type="text" class="form-control" placeholder="Maximum of 60 characters...">
            </div>
            <div class="d-flex mb-2">
                <h3 class="col-2">Answer:</h3>
                <textarea name="" id="" cols="" rows="5" class="form-control" placeholder="Maximum of 1000 characters..."></textarea>
            </div>
        </div>
        <div class="mt-2 mb-3 pl-2">
            <div class="d-flex align-items-center theme-color">
                <p class="mr-2 theme-color">1 - (title of document if provided)</p>
                <i class="mr-1 fa fa-edit"></i>
                <i class="fa fa-trash"></i>
            </div>
            <div class="d-flex align-items-center theme-color">
                <p class="mr-2 theme-color">1 - (title of the second document added)</p>
                <i class="mr-1 fa fa-edit"></i>
                <i class="fa fa-trash"></i>
            </div>
        </div>
    </div>
    <div>
        <div class="faq-upload">
            <h2>FAQs Added</h2>
        </div>
        <div class="mt-2 mb-3 pl-2">
            <div class="d-flex align-items-center theme-color">
                <p class="mr-2 theme-color">1 - (What type of personal information is collected?)</p>
                <i class="mr-1 fa fa-edit"></i>
                <i class="fa fa-trash"></i>
            </div>
            <div class="d-flex align-items-center theme-color">
                <p class="mr-2 theme-color">1 - (How will my information be used?)</p>
                <i class="mr-1 fa fa-edit"></i>
                <i class="fa fa-trash"></i>
            </div>
            <div class="d-flex align-items-center theme-color">
                <p class="mr-2 theme-color">1 - (Will my information be shared for marketing?)</p>
                <i class="mr-1 fa fa-edit"></i>
                <i class="fa fa-trash"></i>
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