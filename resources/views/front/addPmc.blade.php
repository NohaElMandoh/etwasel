@extends('front.layouts.app')
@section('styles')

<style>
    .navbar-area {
        bottom: auto;
        top: 0;
        background: linear-gradient(0deg, rgb(36 99 184) 0%, rgb(128 182 240) 100%);

    }

    .sectionfixd {
        opacity: 1;
        position: relative;
        top: 0;
        overflow: auto;
        overflow-x: hidden;
        margin-top: 65px;

    }

    .bodyscroll::-webkit-scrollbar {
        width: 6px;
        background: #ffffff;
    }

    ::-webkit-scrollbar {
        width: 6px;
        background: #fff;
    }

    .bodyscroll::-webkit-scrollbar-thumb {
        width: 6px;
        border-radius: 0;
        background: #3c79c7;
    }

    ::-webkit-scrollbar-thumb {
        width: 6px;
        border-radius: 0;
        background: #3c79c7;
    }

    .luvion-nav .navbar .navbar-nav .nav-item .search {
        display: block;
        height: 40px;
        line-height: 40px;
        background: #fff;
        border-radius: 25px;
        overflow: hidden;
        width: max-content;
        margin-top: 5px;
    }

    .luvion-nav .navbar .navbar-nav .nav-item .search .btn_search {
        height: 40px;
        width: 40px;
        float: right;
        background: #fff;
        border: 1px solid #fff;
        color: #000;
        margin: 0;
        font-size: 20px;
        text-align: center;
        outline: 0;
        transition: all .4s ease-in-out;
    }

    .luvion-nav .navbar .navbar-nav .nav-item .search .btn_search:hover {
        background: #3c79c7;
        border: 1px solid #3c79c7;
        color: #fff;
    }

    .luvion-nav .navbar .navbar-nav .nav-item .search input {
        height: 40px;
        line-height: 440px;
        padding: 0 10px;
        border: 1px solid #fff;
        outline: 0;
        font-size: 16px;
        color: #000;
        text-transform: capitalize;
        font-weight: 400;
    }

    .luvion-nav .navbar .navbar-nav .nav-item {
        position: relative;
        padding-top: 10px;
        padding-bottom: 10px;
        padding-left: 0;
        padding-right: 0;

    }

    .luvion-nav .navbar .navbar-nav .nav-item:hover .dropdown-menu {
        padding: 15px;
        border-radius: 25px;
        box-shadow: 0 0 10px #aaa;
    }

    .sectionfixd .fixedright {
        right: 0;
    }

    .centerside .productfillter {
        padding: 15px !important;
    }



    .modalprivew {}

    .modalprivew {}

    .modalprivew .modal-body {
        padding: 0;
    }

    .centerside .addside {
        height: 250px;
        display: block;
    }

    .centerside .addside .addcontent {
        display: block;
        width: 100%;
        height: 100%;
    }

    .centerside .addside .addcontent img {
        display: block;
        width: 100%;
        height: 100%;
    }

    .ScondPriview {}

    .ScondPriview .modal-dialog {}

    .ScondPriview .modal-content {}

    .ScondPriview .modal-header {}

    .ScondPriview .modal-header .modal-title {}

    .ScondPriview .modal-header .btn-close {}

    .ScondPriview .modal-body {}

    .ScondPriview .secPriviewCont {}

    .ScondPriview .secPriviewCont .BoxSec {
        display: flex;
        height: 200px;
        align-items: center;
        justify-content: center;
        border: 1px dashed #3c79c7;
        background: #fff;
    }

    .ScondPriview .secPriviewCont .BoxSec h2 {
        text-transform: capitalize;
        color: #ffffff;
        font-size: 45px;
        -webkit-text-stroke: 1px #3c79c7;
        text-transform: uppercase;
        letter-spacing: 15px;
        font-weight: revert;
    }

    .ScondPriview .secPriviewCont .ImgPrivew {}

    .ScondPriview .secPriviewCont .ImgPrivew .ImgCont {
        display: block;
        width: 100%;
        height: 300px;
        margin: 15px auto;
    }

    .ScondPriview .secPriviewCont .ImgPrivew .ImgCont img {
        display: block;
        width: 100%;
        height: 100%
    }
</style>
@endsection
@section('content')
@php
$user=Auth::user();
@endphp
<div class="sectionfixd fixedsecotherpage">
    <div class="overlay">
        <div class="row">
            <div class="col-lg-3 col-md-4">
                <div class="fixedleft">
                    @include('front.partials.sides.left.left')
                </div>
            </div>

            <div class="col-lg-9 col-md-8">

                <div class="profilepage">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="profsittengs">
                                <div class="title">
                                    <h2><span><i class="style_icoColor__1U_A_ fas fa-sliders-h mr-2"></i></span> {{__('front.Add PMC')}}</h2>
                                </div>
                                <form action="{{route('add_pmc_post')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    @if(session()->has('message'))
                                    <div class="alert alert-success">
                                        {{ session()->get('message') }}
                                    </div>
                                    @endif
                                    <div class="inputVendorr">
                                        <div class="row">


                                            <div class="col-lg-12 col-nd-12 col-sm-12 col-xs-12 repeater">

                                                <div class="formItemVendor PMCFormGroup">
                                                    <div class="" data-repeater-list="pmcs">
                                                        <button type="button" data-repeater-create class="addMore" title="Add More">
                                                            <i class="fas fa-plus iconpluss"></i>
                                                        </button>
                                                        @if(count($user->details)>0)

                                                        @if(count($user->pmcs)>0)

                                                        @foreach($user->pmcs as $pmc)
                                                        <div class="repeterdev PMCGRPUPINPUTS" data-repeater-item>
                                                            <span>{{__('front.Product Main Category EN')}} </span>
                                                            <input type="text" class="inputvendor" name="cat_name" value='{{$pmc->cat_name}}' id='cat_name' required placeholder="">
                                                            <span>{{__('front.Product Main Category AR')}} </span>
                                                            <input type="text" class="inputvendor mt-1" name="cat_name_ar" value='{{$pmc->cat_name_ar}}' id='cat_name_ar' required placeholder="">
                                                            <input type="hidden" id='cat_id' name='cat_id' value='{{$pmc->id}}'>
                                                            <!--<input data-repeater-delete type="button" class="btn btn-danger" value="{{ __('Delete') }}" />-->
                                                            <button data-repeater-delete type="button" class="btn btn-danger deleterepeat" title="Add Mor PMC">
                                                                <i class="far fa-trash-alt"></i>
                                                            </button>

                                                        </div>


                                                        @endforeach

                                                        @else
                                                        <div class="repeterdev" data-repeater-item>
                                                            <span>{{__('front.Product Main Category EN')}} </span>
                                                            <input type="text" class="inputvendor" name="cat_name" id='cat_name' value='{{$pmc->cat_name ?? ''}}' required placeholder="">
                                                            <span>{{__('front.Product Main Category AR')}} </span>
                                                            <input type="text" class="inputvendor mt-1" name="cat_name_ar" value='{{$pmc->cat_name_ar ?? ''}}' required id='cat_name_ar' placeholder="">
                                                            <input type="hidden" id='cat_id' name='cat_id'>
                                                            <!--<input data-repeater-delete type="button" class="btn btn-danger" value="{{ __('Delete') }}" />-->
                                                            <button data-repeater-delete type="button" class="btn btn-danger deleterepeat" title="Add Mor PMC">
                                                                <i class="far fa-trash-alt"></i>
                                                            </button>
                                                        </div>
                                                        @endif
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <div class="formItemVendor">
                                                    <button type="submit" id='add_btn' class="btn btn-success ">
                                                        <i class="fas fa-check"></i> {{__('front.Add')}}
                                                    </button>


                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>




                    </div>
                </div>
            </div>

        </div>

        <div class="go-top"><i class="fas fa-arrow-up"></i></div>

    </div>
</div>


@endsection
@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.repeater/1.2.1/jquery.repeater.min.js"></script>
<script>
    $(document).ready(function() {




        $('.repeater').repeater({
            // (Optional)
            // start with an empty list of repeaters. Set your first (and only)
            // "data-repeater-item" with style="display:none;" and pass the
            // following configuration flag
            initEmpty: false,
            // (Optional)
            // "show" is called just after an item is added.  The item is hidden
            // at this point.  If a show callback is not given the item will
            // have $(this).show() called on it.
            show: function() {
                $(this).slideDown();
            },
            // (Optional)
            // "hide" is called when a user clicks on a data-repeater-delete
            // element.  The item is still visible.  "hide" is passed a function
            // as its first argument which will properly remove the item.
            // "hide" allows for a confirmation step, to send a delete request
            // to the server, etc.  If a hide callback is not given the item
            // will be deleted.
            hide: function(deleteElement) {
                if (confirm('Are you sure you want to delete this element?')) {
                    $(this).slideUp(deleteElement);
                }
            },
            // (Optional)
            // Removes the delete button from the first list item,
            // defaults to false.
            isFirstItemUndeletable: true
        })

    });
    // ---------
    let certicications = new Array();
    let certicications_imgs = new Array();
    $(document).on('click', '#add_cert', function() {

        var fd = new FormData();
        var files = $('#certification')[0].files;

        // Check file selected or not
        if (files.length > 0) {
            //    fd.append('certification',files[0]);
            certicications_imgs.push(files[0]);
            var row2 = {
                "image": files[0],
                "title": cert_title,

            };
            certicications.push(row2);
        }


        var cert_title = $('#cert_title').val();
        var TotalImages = $('#certification')[0].files.length;
        var images = $('#certification')[0];

        var files = $('#cert_title')[0].files;

        for (var i = 0; i < TotalImages; i++) {
            //   files[0]
            var row2 = {
                "image": $('#certification')[0].files[i],
                "title": cert_title,

            };
            certicications.push(row2);
            // certicications_imgs.push($('#certification')[0].files[i]);
            // alert( $('#certification')[0].files[i]);
            var reader = new FileReader();
            reader.readAsDataURL(images.files[i]);
            reader.onload = function(e) {
                $html = '<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12"> <div class="formItemVendor"> <div class="CertificationItem"><img src="' + e.target.result + '">  <p>' + cert_title + '</p><button type="button" class="Removee" >' +
                    '<i class="far fa-trash-alt"></i></button></div></div>  </div>'



                $("#cert_imgs").append($html);
            }
        }
        //  changePreviewCert(e,k, v);
    });
    // $('#add_btn').click(function() {
    //     event.preventDefault();


    //     var form = new FormData();
    //     form.append('campany_name_en', $('#campany_name_en').val());
    //     form.append('campany_name_ar', $('#campany_name_ar').val());
    //     form.append('campany_category_id', $('#campany_category_id').val());
    //     form.append('industry_field_id', $('#industry_field_id').val());
    //     form.append('emails', $('#emails').val());
    //     form.append('contacts', $('#contacts').val());
    //     form.append('location_url', $('#location_url').val());
    //     form.append('location_map', $('#location_map').val());
    //     form.append('address', $('#address').val());
    //     form.append('start_date', $('#start_date').val());
    //     form.append('campany_about', $('#campany_about').val());

    //     form.append('certicications', JSON.stringify(certicications));
    //     form.append('certicications_imgs', JSON.stringify(certicications_imgs));




    //     // var images = $('#image')[0];


    //     // form.append('image', images.files[0]);

    //     $.ajax({
    //         url: "{{route('add_pmc_post')}}",
    //         type: "POST",
    //         data: form,
    //         cache: false,
    //         contentType: false,
    //         dataType: 'json',
    //         // contentType: 'application/json; charset=utf-8',
    //         headers: {
    //             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //         },
    //         processData: false,

    //         success: function(response) {
    //             // location.reload();
    //             // $(".alert-success-message3").css("display", "block");
    //             // $(".alert-success-message3").html('<P style="text-align:center">Thank you.').hide()
    //             //     .fadeIn(1500, function() {
    //             //         $('.alert-success-message3');
    //             //     }).fadeOut(1500, function() {
    //             //         $('.alert-success-message3');
    //             //     }).reset();
    //         },
    //     });

    // });

    function changePreviewCert(e, k, v) {
        var files = e.target.files;
        // console.log(files)
        // $("#slider_imgs_div").empty();
        // $("#cert_imgs").css("display", "block");
        $.each(files, function(key, file) {
            var reader = new FileReader();
            reader.readAsDataURL(file);
            reader.onload = function(e) {
                // $html="  <div class='formItemVendor' id='slider_imgs'><img id='prev_img' src='"+e.target.result+"'></div> ";
                // $html=  " <div class='col-lg-3 col-md-3 col-sm-6 col-xs-12'><div class='formItemVendor'> <img src='"+e.target.result+"'>  </div> </div>";

                $html = '<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12"> <div class="formItemVendor"> <div class="CertificationItem"><img src="' + e.target.result + '">  <p>CV Certi</p><button type="button" class="Removee" >' +
                    '<i class="far fa-trash-alt"></i></button></div></div>  </div>'



                $("#cert_imgs").append($html);
                // $("#prev_img").attr("src", e.target.result);


            }
        });
    };
    // ---------
    function changePreview(e, k, v) {
        var files = e.target.files;
        console.log(files)
        $("#slider_imgs_div").empty();
        // $("#slider_imgs_div").css("display", "block");
        $.each(files, function(key, file) {
            var reader = new FileReader();
            reader.readAsDataURL(file);
            reader.onload = function(e) {
                // $html="  <div class='formItemVendor' id='slider_imgs'><img id='prev_img' src='"+e.target.result+"'></div> ";
                $html = " <div class='col-lg-3 col-md-3 col-sm-6 col-xs-12'><div class='formItemVendor'> <img src='" + e.target.result + "'>  </div> </div>";
                $("#slider_imgs_div").append($html);
                // $("#prev_img").attr("src", e.target.result);


            }
        });
    };

    function changePreview2(e, k, v) {
        var files = e.target.files;
        // console.log(files)
        $("#logo_imgs_div").empty();
        $("#logo_imgs_div").css("display", "block");
        $.each(files, function(key, file) {
            var reader = new FileReader();
            reader.readAsDataURL(file);
            reader.onload = function(e) {
                // $html="  <div class='formItemVendor' id='slider_imgs'><img id='prev_img' src='"+e.target.result+"'></div> ";
                $html = " <div class='col-lg-3 col-md-3 col-sm-6 col-xs-12'><div class='formItemVendor'> <img src='" + e.target.result + "'>  </div> </div>";
                $("#logo_imgs_div").empty().append($html);
                // $("#prev_img").attr("src", e.target.result);


            }
        });
    };

    $(document).on('click', '#close-preview', function() {
        $('.image-preview').popover('hide');
        // Hover befor close the preview
        $('.image-preview').hover(
            function() {
                $('.image-preview').popover('show');
            },
            function() {
                $('.image-preview').popover('hide');
            }
        );
    });

    $(function() {
        // Create the close button
        var closebtn = $('<button/>', {
            type: "button",
            text: 'x',
            id: 'close-preview',
            style: 'font-size: initial;',
        });
        closebtn.attr("class", "close pull-right");
        // Set the popover default content
        $('.image-preview').popover({
            trigger: 'manual',
            html: true,
            title: "<strong>Preview</strong>" + $(closebtn)[0].outerHTML,
            content: "There's no image",
            placement: 'bottom'
        });
        // Clear event
        $('.image-preview-clear_logo').click(function() {
            $('.image-preview_logo').attr("data-content", "").popover('hide');
            $('.image-preview-filename_logo').val("");
            $('.image-preview-clear_logo').hide();
            $('.image-preview-input_logo input:file').val("");
            $(".image-preview-input-title_logo").text("Browse");
        });
        // Create the preview image
        $("#logo_btn").change(function() {
            var img = $('<img/>', {
                id: 'dynamic',
                width: 250,
                height: 200
            });
            var file = this.files[0];
            var reader = new FileReader();
            // Set preview image into the popover data-content
            reader.onload = function(e) {
                $(".image-preview-input-title_logo").text("Change");
                $(".image-preview-clear_logo").show();
                $(".image-preview-filename_logo").val(file.name);
                img.attr('src', e.target.result);
                $(".image-preview_logo").attr("data-content", $(img)[0].outerHTML).popover("show");
            }
            reader.readAsDataURL(file);
        });

        // --slider--
        // Clear event
        $('.image-preview-clear_slider').click(function() {
            $('.image-preview_slider').attr("data-content", "").popover('hide');
            $('.image-preview-filename_slider').val("");
            $('.image-preview-clear_slider').hide();
            $('.image-preview-input_slider input:file').val("");
            $(".image-preview-input-title_slider").text("Browse");
        });
        // Create the preview image
        $("#slider_btn").change(function() {
            var img = $('<img/>', {
                id: 'dynamic',
                width: 250,
                height: 200
            });
            var file = this.files[0];
            var reader = new FileReader();
            // Set preview image into the popover data-content
            reader.onload = function(e) {
                $(".image-preview-input-title_slider").text("Change");
                $(".image-preview-clear_slider").show();
                $(".image-preview-filename_slider").val(file.name);
                img.attr('src', e.target.result);
                $(".image-preview_slider").attr("data-content", $(img)[0].outerHTML).popover("show");
            }
            reader.readAsDataURL(file);
        });
        // ---------    
        $("#location_map").change(function() {
            $('#map_iframe_src').attr('src', $(this).val());
            // alert('hi');

        });


    });
</script>
@endsection