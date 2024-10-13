@extends('user.layouts.app')

@section('style')
<link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.2/dropzone.min.css" rel="stylesheet">

<style>
    .card {
        border-radius: 20px;
    }

    .nav-item .btn.active-tab.active {
        user-select: none;
        -moz-user-select: none;
        background: var(--tg-theme-primary) none repeat scroll 0 0;
        border: medium none;
        color: var(--tg-common-color-white);
        cursor: pointer;
        display: inline-block;
        font-size: 16px;
        font-weight: var(--tg-fw-semi-bold);
        font-family: var(--tg-heading-font-family);
        letter-spacing: 0;
        line-height: 1.12;
        margin-bottom: 0;
        padding: 16px 30px;
        text-align: center;
        text-transform: capitalize;
        touch-action: manipulation;
        -webkit-transition: all 0.3s ease-out 0s;
        -moz-transition: all 0.3s ease-out 0s;
        -ms-transition: all 0.3s ease-out 0s;
        -o-transition: all 0.3s ease-out 0s;
        transition: all 0.3s ease-out 0s;
        vertical-align: middle;
        -webkit-border-radius: 50px;
        -moz-border-radius: 50px;
        -o-border-radius: 50px;
        -ms-border-radius: 50px;
        border-radius: 50px;
        white-space: nowrap;
        box-shadow: 4px 6px 0px 0px var(--tg-common-color-blue);
        overflow: hidden;
    }

    .nav-item .btn.active-tab {
        user-select: none;
        -moz-user-select: none;
        background: #E6E9EF;
        border: medium none;
        color: var(--tg-body-color);
        cursor: pointer;
        display: inline-block;
        font-size: 16px;
        font-weight: var(--tg-fw-semi-bold);
        font-family: var(--tg-heading-font-family);
        letter-spacing: 0;
        line-height: 1.12;
        margin-bottom: 0;
        padding: 16px 30px;
        text-align: center;
        text-transform: capitalize;
        touch-action: manipulation;
        -webkit-transition: all 0.3s ease-out 0s;
        -moz-transition: all 0.3s ease-out 0s;
        -ms-transition: all 0.3s ease-out 0s;
        -o-transition: all 0.3s ease-out 0s;
        transition: all 0.3s ease-out 0s;
        vertical-align: middle;
        -webkit-border-radius: 50px;
        -moz-border-radius: 50px;
        -o-border-radius: 50px;
        -ms-border-radius: 50px;
        border-radius: 50px;
        white-space: nowrap;
        box-shadow: none;
        overflow: hidden;
    }

    .outline-purple-primary {
        user-select: none;
        -moz-user-select: none;
        background: transparent;
        /* Membuat background menjadi transparan */
        border: 2px solid #9C40F7;
        /* Border outline dengan warna primary */
        color: #9C40F7;
        /* Warna teks mengikuti warna primary */
        cursor: pointer;
        display: inline-block;
        font-size: 16px;
        font-weight: var(--tg-fw-semi-bold);
        font-family: var(--tg-heading-font-family);
        letter-spacing: 0;
        line-height: 1.12;
        margin-bottom: 0;
        padding: 16px 30px;
        text-align: center;
        text-transform: capitalize;
        touch-action: manipulation;
        -webkit-transition: all 0.3s ease-out 0s;
        -moz-transition: all 0.3s ease-out 0s;
        -ms-transition: all 0.3s ease-out 0s;
        -o-transition: all 0.3s ease-out 0s;
        transition: all 0.3s ease-out 0s;
        vertical-align: middle;
        -webkit-border-radius: 50px;
        -moz-border-radius: 50px;
        -o-border-radius: 50px;
        -ms-border-radius: 50px;
        border-radius: 50px;
        white-space: nowrap;
        box-shadow: none;
        /* Hilangkan shadow */
        overflow: hidden;
    }

    /* Hover effect */
    .outline-purple-primary:hover {
        background-color: #9C40F7;
        /* Warna background saat hover */
        color: var(--tg-common-color-white);
        /* Warna teks saat hover */
        border-color: #9C40F7;
        /* Warna border tetap */
    }

</style>

<!-- Styles -->
<style>
    .h1 {
        letter-spacing: -0.02em;
    }

    .dropzone {
        overflow-y: auto;
        border: 0;
        background: transparent;
    }

    .dz-preview {
        width: 100%;
        margin: 0 !important;
        height: 100%;
        padding: 15px;
        position: absolute !important;
        top: 0;
    }

    .dz-photo {
        height: 100%;
        width: 100%;
        overflow: hidden;
        border-radius: 12px;
        background: #eae7e2;
    }

    .dz-drag-hover .dropzone-drag-area {
        border-style: solid;
        border-color: #86b7fe;
    }

    .dz-thumbnail {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .dz-image {
        width: 90px !important;
        height: 90px !important;
        border-radius: 6px !important;
    }

    .dz-remove {
        display: none !important;
    }

    .dz-delete {
        width: 24px;
        height: 24px;
        background: rgba(0, 0, 0, 0.57);
        position: absolute;
        opacity: 0;
        transition: all 0.2s ease;
        top: 30px;
        right: 30px;
        border-radius: 100px;
        z-index: 9999;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .dz-delete>svg {
        transform: scale(0.75);
        cursor: pointer;
    }

    .dz-preview:hover .dz-delete,
    .dz-preview:hover .dz-remove-image {
        opacity: 1;
    }

    .dz-message {
        height: 100%;
        margin: 0 !important;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .dropzone-drag-area {
        height: 300px;
        position: relative;
        padding: 0 !important;
        border-radius: 10px;
        border: 3px dashed #dbdeea;
        background-color: #F7F7F7;
    }

    .was-validated .form-control:valid {
        border-color: #dee2e6 !important;
        background-image: none;
    }

</style>
@endsection

@section('content')
<!-- breadcrumb-area -->
<section class="breadcrumb__area breadcrumb__bg py-5" data-background="{{ asset('assets/img/bg/breadcrumb_bg.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb__content">
                    <nav class="breadcrumb">
                        <span property="itemListElement" typeof="ListItem">
                            <a href="/">Home</a>
                        </span>
                        <span class="breadcrumb-separator"><i class="fas fa-angle-right"></i></span>
                        <span property="itemListElement" typeof="ListItem">Courses</span>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="breadcrumb__shape-wrap">
        <img src="{{ asset('assets/img/others/breadcrumb_shape01.svg') }}" alt="img" class="alltuchtopdown">
        <img src="{{ asset('assets/img/others/breadcrumb_shape02.svg') }}" alt="img" data-aos="fade-right" data-aos-delay="300">
        <img src="{{ asset('assets/img/others/breadcrumb_shape03.svg') }}" alt="img" data-aos="fade-up" data-aos-delay="400">
        <img src="{{ asset('assets/img/others/breadcrumb_shape04.svg') }}" alt="img" data-aos="fade-down-left" data-aos-delay="400">
        <img src="{{ asset('assets/img/others/breadcrumb_shape05.svg') }}" alt="img" data-aos="fade-left" data-aos-delay="400">
    </div>
</section>
<!-- breadcrumb-area-end -->

<div class="container d-flex justify-content-center custom-container mt-3 mb-5">
    <div class="col-lg-11">
        <div class="dashboard__nav-wrap">
            <ul class="nav nav-tabs" id="courseTab" style="border-bottom: none !important;" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="btn active-tab active" id="upload-tab" data-bs-toggle="tab" data-bs-target="#upload-tab-pane" type="button" role="tab" aria-controls="upload-tab-pane" aria-selected="true">
                        Upload Berkas
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="btn active-tab" id="link-tab" data-bs-toggle="tab" data-bs-target="#link-tab-pane" type="button" role="tab" aria-controls="link-tab-pane" aria-selected="false">
                        URL Link
                    </button>
                </li>
            </ul>
        </div>
        <div class="tab-content" id="courseTabContent">
            <div class="tab-pane fade show active" id="upload-tab-pane" role="tabpanel" aria-labelledby="upload-tab" tabindex="0">
                @include('user.pages.courses.task-execution.panes.tab-upload')
            </div>
            <div class="tab-pane fade" id="link-tab-pane" role="tabpanel" aria-labelledby="link-tab" tabindex="0">

            </div>
        </div>
    </div>

</div>
@endsection


@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.2/min/dropzone.min.js"></script>
<script>
    Dropzone.autoDiscover = false;

    var myDropzone = new Dropzone('#formDropzone', {
        previewTemplate: $('#dzPreviewContainer').html()
        , url: '/form-submit'
        , addRemoveLinks: true
        , autoProcessQueue: false
        , uploadMultiple: false
        , parallelUploads: 1
        , maxFiles: 1
        , acceptedFiles: '.jpeg, .jpg, .png, .gif'
        , thumbnailWidth: 900
        , thumbnailHeight: 600
        , previewsContainer: "#previews"
        , timeout: 0
        , init: function() {
            var dzInstance = this;

            // when file is dragged in
            this.on('addedfile', function(file) {
                $('.dropzone-drag-area').removeClass('is-invalid').next('.invalid-feedback').hide();
            });

            document.querySelector('#filePicker').addEventListener('click', function() {
                dzInstance.hiddenFileInput.click(); // Trigger file input dialog
            });
        }
        , success: function(file, response) {
            // hide form and show success message
            $('#formDropzone').fadeOut(600);
            setTimeout(function() {
                $('#successMessage').removeClass('d-none');
            }, 600);
        }
    });

    $('#formSubmit').on('click', function(event) {
        event.preventDefault();
        var $this = $(this);

        // show submit button spinner
        $this.children('.spinner-border').removeClass('d-none');

        // validate form & submit if valid
        if ($('#formDropzone')[0].checkValidity() === false) {
            event.stopPropagation();

            // show error messages & hide button spinner    
            $('#formDropzone').addClass('was-validated');
            $this.children('.spinner-border').addClass('d-none');

            // if dropzone is empty show error message
            if (!myDropzone.getQueuedFiles().length > 0) {
                $('.dropzone-drag-area').addClass('is-invalid').next('.invalid-feedback').show();
            }
        } else {
            // if everything is ok, submit the form
            myDropzone.processQueue();
        }
    });

</script>
@endsection
