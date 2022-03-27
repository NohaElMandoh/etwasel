@extends('front.layouts.app')

@section('content')
@php
$user=Auth::user();
@endphp

@section('content')
<div class="sectionfixd fixedsecotherpage">
    <div class="overlay">
        <div class="row">
            <div class="col-lg-3 col-md-3">
                <div class="fixedleft">
                @include('front.partials.sides.left.left')
                </div>
            </div>
            <div class="col-lg-9 col-md-9">

                <div class="centerside">
                    <div class="centersidecont">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="display: none;">
                                <div class="addside">
                                    <div class="addcontent">
                                        <p>Adds</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="vrticalproduct">
                                    <div class="row">
                                        @if(count($products)>0)
                                        @foreach($products as $product)
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="productitem">
                                                <div class="row">
                                                    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                                                        <div class="imgesProduct">
                                                            <div class="images">
                                                                
                                                                 @if(count($product->media) >0)
                                                               
                                                                                        @foreach($product->media as $key=>$media)
                                                                                        @if($loop->first)
                                                                                        @if($media->type == 'image'  )
                                                                                    
                                                                                          <img src="{{Voyager::image($media->image ?? 'default_product.png')}}">
                                                                                         @endif
                                                                                          @if($media->type == 'video'  )
                                                                                      
                                                                                          <video src="{{Voyager::image($media->video ?? 'default_product.png')}}">
                                                                                         @endif
                                                                                         
                                                                                          @endif
                                                                                         
                                                                                        @endforeach
                                                                                        
                                                                                        @else 
                                                                                      @if($product->image != null)
                                                                                      <img src="{{Voyager::image($product->image)}}">
                                                                                      @else
                                                                                     
                                                                                        <img src="{{Voyager::image('default_product.png')}}">
                                                                                        @endif    @endif
                                                                                        
                                                                                        
                                                               {{-- <img src="{{Voyager::image($product->image)}}">--}}
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                                                        <div class="produdetails">
                                                            <div class="detaisl">
                                                                <div class="sponser">
                                                                    <div class="sponsrimg">
                                                                       
                                                                        @if(count($product->keywords)>0)
                                                                        @foreach($product->keywords as $keywordd)
                                                                        @if($keyword == $keywordd->keyword)
                                                                       {{--{{\Carbon\Carbon::now()->toDateString()}}
                                                                       {{$keywordd->date_to }}--}}
                                                                         @if(! ($keywordd->date_to <= \Carbon\Carbon::now()->toDateString()))
                                                                         
                                                                          <img src="{{asset('frontUI/assets/img/cladreximg/star.png')}}">
                                                                          @else  <img src="{{asset('frontUI/assets/img/cladreximg/star_white.png')}}">
                                                                        @endif
                                                                        
                                                                        @endif
                                                                        @endforeach
                                                                        
                                                                        @else <img src="{{asset('frontUI/assets/img/cladreximg/star_white.png')}}">
                                                                        @endif
                                                                      
                                                                    </div>
                                                                </div>
                                                                <div class="title">

                                                                    <!-- <a class="product_name" href="#" target="_blank"> Wholesale <span>A4</span> Copy <span>Paper</span> / Wholesale Woodfree Printing <span>Paper</span></a> -->
                                                                    <a class="product_name" href="{{route('product',['product_id'=>$product->id,'product_name'=>$product->product_name_en ?? ''])}}" target="_blank"> {{$product->product_name??''}} </a>

                                                                </div>
                                                                <div class="fobMin">
                                                                    <ul>
                                                                        <li>
                                                                            <p>{{__('front.FOB Price')}}: <span class="red">{{$product->min_price}}-{{$product->max_price}} </span> <span class="else"> /  {{$product->unit->name ?? ''}}</span></p>
                                                                        </li>
                                                                        <li>
                                                                            <p>{{__('front.Min')}}. {{__('front.Order')}}: <span class="black">{{$product->min_order}}  {{$product->unit->name ?? ''}}</span></p>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="lidetaisl">
                                                                    <ul>
                                                                        <li>
                                                                            <p>Class: <span class="sas"> 1 </span></p>
                                                                        </li>
                                                                        <li>
                                                                            <p>Specifications : <span class="sas"> 210mm*297mm </span></p>
                                                                        </li>
                                                                        <li>
                                                                            <p>Weight : <span class="sas"> 2.5kg/Pack </span></p>
                                                                        </li>
                                                                        <li>
                                                                            <p>Usage : <span class="sas"> Printing Paper </span></p>
                                                                        </li>
                                                                        <li>
                                                                            <p>Coating Material : <span class="sas"> None </span></p>
                                                                        </li>
                                                                        <li>
                                                                            <p>Coating Side : <span class="sas"> Double Side </span></p>
                                                                        </li>

                                                                    </ul>
                                                                </div>
                                                                <div class="line"></div>
                                                                <div class="underline">
                                                                    <ul>
                                                                        <li>
                                                                            <a href="#" class="links">Hebei Zhouwo Trading Co., Ltd.</a>
                                                                        </li>
                                                                        <li>
                                                                            <p>Hebei, China <span>|</span> ISO 9001, ISO 9000, ISO 14001, ISO 14000</p>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="addcart">


                                                                    <button type="button" class="btn_addcont" data-id="{{$product->id}}" data-name="{{$product->product_name}}" data-user="{{$product->user_id}}" >
                                                                        <i class="far fa-envelope" aria-hidden="true"></i> {{__('front.Contact Now')}}
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
@endforeach
@else <h2>No data founded</h2>
                                      @endif

                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="go-top"><i class="fas fa-arrow-up"></i></div>

    </div>
</div>
<input type=hidden id='url' name="url" value='{{url("/")}}'>
@endsection

@section('scripts')
<script>
   $(document).on('click', '.btn_addcont', function(e) {
        event.preventDefault();

        let id = $(this).attr("data-id");
         let name = $(this).attr("data-name");
           let user_id = $(this).attr("data-user");
        
     let url= $('#url').val()+'/storage/';
  let html='';
  let html2='';
        $.ajax({
            url:    "{{route('product_media', '')}}"+"/"+id,
            type: "GET",
            data: {
                "_token": "{{ csrf_token() }}",

             
            },
            success: function(response) {
                
$.each(response.product_imgs, function(i, item) {
    
     
    
    if(item.type=='image')
    {
      
         let img=item.image;
      let result = img.replace("/\\/g", "/");
      let r=url+ result;
        if(i==0){
            
            html +=' <a class="nav-link active" id="product-'+i+'-tab" data-bs-toggle="pill" href="#product-'+i+'" role="tab" aria-controls="product-'+i+'" aria-selected="true">'+
           '<img src="'+r+'" alt="" class="img-fluid mx-auto d-block rounded"></a>';
            
            
            html2 +='<div class="tab-pane fade show active" id="product-'+i+'" role="tabpanel" aria-labelledby="product-'+i+'-tab"> <div> <img src="'+r+'" alt="" class="img-fluid mx-auto d-block"></div></div>';
        }
        else {
        html +=' <a class="nav-link " id="product-'+i+'-tab" data-bs-toggle="pill" href="#product-'+i+'" role="tab" aria-controls="product-'+i+'" aria-selected="true">'+
           '<img src="'+r+'" alt="" class="img-fluid mx-auto d-block rounded"></a>';
           html2 +='<div class="tab-pane fade show " id="product-'+i+'" role="tabpanel" aria-labelledby="product-'+i+'-tab"> <div> <img src="'+r+'" alt="" class="img-fluid mx-auto d-block"></div></div>';
        }
    }
   
   if(item.type=='video'){
       
        let img=item.video;
      let result = img.replace("/\\/g", "/");
      let r=url+ result;
        if(i==0){
           html +=' <a class="nav-link  active " id="product-'+i+'-tab" data-bs-toggle="pill" href="#product-'+i+'" role="tab" aria-controls="product-'+i+'" aria-selected="true">'+
           '<video class="VedioPorUpload"  controls> <source src="'+r+'" type="video/mp4"> </video></a>';
           
           html2 +='<div class="tab-pane fade show active" id="product-'+i+'" role="tabpanel" aria-labelledby="product-'+i+'-tab"> <div> <video class="VedioPorUpload"  controls> <source src="'+r+'" type="video/mp4"> </video></a></div></div>';
        }else 
       {
         html +=' <a class="nav-link " id="product-'+i+'-tab" data-bs-toggle="pill" href="#product-'+i+'" role="tab" aria-controls="product-'+i+'" aria-selected="true">'+
           '<video class="VedioPorUpload"  controls> <source src="'+r+'" type="video/mp4"> </video></a>';
           
            html2 +='<div class="tab-pane fade show " id="product-'+i+'" role="tabpanel" aria-labelledby="product-'+i+'-tab"> <div> <video class="VedioPorUpload"  controls> <source src="'+r+'" type="video/mp4"> </video></a></div></div>';
       
       }
           
   }
 
 
 
});
 $('#v-pills-tab').empty().append(html);
  $('#v-pills-tabContent').empty().append(html2);
 $('.pro_name').text(name);
 $('#user_id').val(user_id);
 
     $("#exampleModalCenterquotaion").modal('show');
              
            },
            error: function(response) {
                // $(".alert-danger").css("display", "block");
                // $(".alert-success-message").css("display", "none");
            },

        });
        // document.getElementById("contactForm").reset();
    });
    
</script>

@endsection