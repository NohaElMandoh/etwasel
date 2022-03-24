<!doctype html>
<html lang="zxx">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content=" Finance ,Shopping, Retail, Food Delivery, Cost Reductions, Wholesaler, activity tracker, and profits- e-Payment- Financial Solutions ">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @include('front.partials.pages.styles')
        @yield('styles')
</head>

<body style="overflow-x: hidden">
    <div class="preloader">
        <div class="loader">
            <!--<div class="shadow"></div>-->
            <!--<div class="box"></div>-->
                      <img src="{{asset('frontUI/assets/img/loader.gif')}}">
        </div>
    </div>

    @include('front.partials.home.nav_bar')


    @yield('content')




    <div class="modal fade modaluploadimg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <!--        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>-->
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="editephotoimg">
                        <div class="title">
                            <h2>Update Photo</h2>
                            <p>Cillum velit ex consequat voluptate.Qui irure enim exercitation proident do ea reprehenderit pariatur consequat aute deserunt ipsum officia esse.</p>
                        </div>
                        <div class="uploadinput">
                            <div class="qoutstepform">
                                <!--                    <span>Upload Photo</span>-->
                                <div class="input-group image-preview fileuploaaad">
                                    <input type="text" class="form-control image-preview-filename" disabled="disabled">
                                    <span class="input-group-btn">
                                        <div class="btn btn-default image-preview-input">

                                            <span class="far fa-folder-open"></span>
                                            <span class="image-preview-input-title">Browse</span>
                                            <input oninput="this.className = ''" type="file" accept="image/png, image/jpeg, image/gif" name="input-file-preview" />
                                        </div>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
    </div>


<div class="modal  modaluploadimg" id="editProfileModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <!--        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>-->
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="editephotoimg">
                        <div class="title">
                            <h2>Update Photo</h2>
                            <p>Cillum velit ex consequat voluptate.Qui irure enim exercitation proident do ea reprehenderit pariatur consequat aute deserunt ipsum officia esse.</p>
                        </div>
                        <div class="uploadinput">
                            <div class="qoutstepform">
                                <!--                    <span>Upload Photo</span>-->
                                <div class="input-group image-preview fileuploaaad">
                                    <input type="text" class="form-control image-preview-filename" disabled="disabled">
                                    <span class="input-group-btn">
                                        <div class="btn btn-default image-preview-input">

                                            <span class="far fa-folder-open"></span>
                                            <span class="image-preview-input-title">Browse</span>
                                            <input onchange="changePreviewProfile(event);" oninput="this.className = ''" type="file" accept="image/png, image/jpeg, image/gif" name="input-file-preview" />
                                        </div>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <div class="modal  modaluploadimg" id="editCoverModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <!--        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>-->
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="editephotoimg">
                        <div class="title">
                            <h2>Update Cover</h2>
                            <p>Cillum velit ex consequat voluptate.Qui irure enim exercitation proident do ea reprehenderit pariatur consequat aute deserunt ipsum officia esse.</p>
                        </div>
                        <div class="uploadinput">
                            <div class="qoutstepform">
                                <!--                    <span>Upload Photo</span>-->
                                <div class="input-group image-preview fileuploaaad">
                                    <input type="text" class="form-control image-preview-filename" disabled="disabled">
                                    <span class="input-group-btn">
                                        <div class="btn btn-default image-preview-input">

                                            <span class="far fa-folder-open"></span>
                                            <span class="image-preview-input-title">Browse</span>
                                            <input onchange="changePreviewCover(event);" oninput="this.className = ''" type="file" accept="image/png, image/jpeg, image/gif" name="input-file-preview" />
                                        </div>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


  <div class="modal fade popupqutaions" id="exampleModalCenterquotaion" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title pro_name" id="exampleModalLongTitle ">Product Name</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
          <form  method="post" id='contact_form'>
                  <input type="hidden" id='user_id' name='user_id' value=''>
                                                                    @csrf
                                                                 
                                                                    <div class="alert alert-success alert-success-message2" style="display:none">
                                                                        {{ Session::get('success') }}
                                                                    </div>
        <div class="modal-body">
            
          <div class="qutpopupbody">
              <div class="row">
                  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                      <!--<div class="imgProduct">-->
                      <!--    <div class="imgtag">-->
                      <!--        <img src="{{asset('frontUI/assets/img/cladreximg/Product/27.png')}}">-->
                      <!--    </div>-->
                      <!--</div>-->
                      
                      <div class="product-detai-imgs">
                                                    <div class="row">
                                                        <div class="col-md-2 col-sm-3 col-xs-12">
                                                            <div class="nav flex-column nav-pills caroselproductdetails " id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                                                <a class="nav-link active" id="product-1-tab" data-bs-toggle="pill" href="#product-1" role="tab" aria-controls="product-1" aria-selected="true">
                                                                    <img src="{{asset('frontUI/assets/img/cladreximg/Product/26.png')}}" alt="" class="img-fluid mx-auto d-block rounded">
                                                                </a>
                                                                <a class="nav-link" id="product-2-tab" data-bs-toggle="pill" href="#product-2" role="tab" aria-controls="product-2" aria-selected="false">
                                                                    <img src="{{asset('frontUI/assets/img/cladreximg/Product/27.png')}}" alt="" class="img-fluid mx-auto d-block rounded">
                                                                </a>
                                                                <a class="nav-link" id="product-3-tab" data-bs-toggle="pill" href="#product-3" role="tab" aria-controls="product-3" aria-selected="false">
                                                                    <img src="{{asset('frontUI/assets/img/cladreximg/Product/28.png')}}" alt="" class="img-fluid mx-auto d-block rounded">
                                                                </a>
                                                                <a class="nav-link" id="product-4-tab" data-bs-toggle="pill" href="#product-4" role="tab" aria-controls="product-4" aria-selected="false">
                                                                    <img src="{{asset('frontUI/assets/img/cladreximg/Product/29.png')}}" alt="" class="img-fluid mx-auto d-block rounded">
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-7 offset-md-1 col-sm-9 col-xs-12">
                                                            <div class="tab-content" id="v-pills-tabContent">
                                                                <div class="tab-pane fade show active" id="product-1" role="tabpanel" aria-labelledby="product-1-tab">
                                                                    <div>
                                                                        <img src="{{asset('frontUI/assets/img/cladreximg/Product/26.png')}}" alt="" class="img-fluid mx-auto d-block">
                                                                    </div>
                                                                </div>
                                                                <div class="tab-pane fade" id="product-2" role="tabpanel" aria-labelledby="product-2-tab">
                                                                    <div>
                                                                        <img src="{{asset('frontUI/assets/img/cladreximg/Product/27.png')}}" alt="" class="img-fluid mx-auto d-block">
                                                                    </div>
                                                                </div>
                                                                <div class="tab-pane fade" id="product-3" role="tabpanel" aria-labelledby="product-3-tab">
                                                                    <div>
                                                                        <img src="{{asset('frontUI/assets/img/cladreximg/Product/28.png')}}" alt="" class="img-fluid mx-auto d-block">
                                                                    </div>
                                                                </div>
                                                                <div class="tab-pane fade" id="product-4" role="tabpanel" aria-labelledby="product-4-tab">
                                                                    <div>
                                                                        <img src="{{asset('frontUI/assets/img/cladreximg/Product/29.png')}}" alt="" class="img-fluid mx-auto d-block">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                      
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="qutpopform">
                        <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                          <div class="formgropop">
                            <span>{{__('front.Name')}}</span>
                            <input type="text" id='name_pop'  name='name_pop' placeholder="{{__('front.Name')}}" class="forminpppop" required>
                          </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                          <div class="formgropop">
                            <span>{{__('front.Email')}}</span>
                            <input type="email" id='email_pop'  name='email_pop' placeholder="{{__('front.Email')}}" class="forminpppop" required>
                          </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                          <div class="formgropop">
                            <span>{{__('front.Phone Number')}}</span>
                            <input type="text" id='phone_pop'  name='phone_pop' placeholder="{{__('front.Phone Number')}}" class="forminpppop" required>
                          </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                          <div class="formgropop">
                            <span>{{__('front.Qty')}}</span>
                            <input type="text"  id='qty_pop'  name='qty_pop' value="1" min="1" placeholder="{{__('front.Qty')}}" class="forminpppop" required>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
              

          </div>
        </div>
        <div class="modal-footer">
          <!--        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>-->
          <button type="submit" class="btn_savess send_msg">{{__('front.Send')}}</button>
        </div>
        </form>
      </div>
    </div>
  </div>

 <div class="modal fade ModelMap" id="Popuplocation" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <div class="ModelMapbody">
                        <div class="maps">
                            <iframe id='map_iframe_src' style="border: 0;" src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3449.198261345427!2d31.47360221444666!3d30.1743300193814!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sGolf%20Mall%2C%20Building%202%2C%20BETA%20Greens%20Compound%2C%206%20October%2C%20Giza!5e0!3m2!1sen!2seg!4v1622592831809!5m2!1sen!2seg" width="100%" allowfullscreen="allowfullscreen"></iframe>
                        </div>
                      </div>
                  </div>
                </div>
              </div>
            </div>

    @include('front.partials.home.scripts')
    @yield('scripts')

<script>
        function changePreviewProfile(e, k, v) {
            var files = e.target.files;
            // console.log(files)

            $.each(files, function(key, file) {
                var reader = new FileReader();
                reader.readAsDataURL(file);
                reader.onload = function(e) {
                    $("#photo_img").attr("src", e.target.result);

                }
            });
        }

        function changePreviewCover(e, k, v) {
            var files = e.target.files;
            // console.log(files)

            $.each(files, function(key, file) {
                var reader = new FileReader();
                reader.readAsDataURL(file);
                reader.onload = function(e) {
                    $("#cover_img").attr("src", e.target.result);

                }
            });
        }
    </script>
    
    <script>
     $('.send_msg').on('click', function(event) {
        event.preventDefault();
let user_id=$('#user_id').val();
        let email = $('#email_pop').val();
        let name = $('#name_pop').val();
let phone = $('#phone_pop').val();
        let qty = $('#qty_pop').val();


        $.ajax({
            url: "{{route('contactUs')}}",
            type: "POST",
            data: {
                "_token": "{{ csrf_token() }}",
user_id:user_id,
                email: email,
                name: name,
                phone: phone,
                quantity: qty,
            },
            success: function(response) {
                $(".alert-danger").css("display", "none");
                $(".alert-success-message2").css("display", "block");
                $(".alert-success-message2").html('<P style="text-align:center">Thank you.').hide()
                    .fadeIn(1500, function() {
                        $('.alert-success-message2');
                    }).fadeOut(1500, function() {
                        $('.alert-success-message2');
                    }).reset();

            },
            error: function(response) {
                $(".alert-danger2").css("display", "block");
                $(".alert-success-message2").css("display", "none");
            },

        });
        document.getElementById("contact_form").reset();
    });
  
</script>

</body>



</html>