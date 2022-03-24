@extends('front.layouts.app')
@section('styles')


<!-- DataTables -->
<link href="{{asset('frontUI/filesDatatable/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('frontUI/filesDatatable/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
<!-- Responsive datatable examples -->
<link href="{{asset('frontUI/filesDatatable/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />


@endsection
@section('content')
@php
$user=Auth::user();
@endphp
@section('content')
<div class="sectionfixd fixedsecotherpage">
    <div class="overlay">
        <div class="row">
            <div class="col-lg-3 col-md-4">
                <div class="fixedleft">
                    @include('front.partials.sides.left.left')
                </div>
            </div>

            <div class="col-lg-9 col-md-8">

                <div class="centerside">
                    <div class="centersidecont">
                        <div class="row">

                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="profilepage">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="profsittengs">
                                                <div class="title">
                                                    <h2><span><i class="style_icoColor__1U_A_ fas fa-sliders-h mr-2"></i></span>
                                                        {{__('front.myProducts')}}
                                                    </h2>
                                                </div>


                                                <div class="tableCenterContact">
                                                    <div class="table-responsive">
                                                        <table id="datatable-buttons" class="table table-hover table-bordered">
                                                            <thead>
                                                                <tr>
                                                                    <th>
                                                                        <p>#</p>
                                                                    </th>

                                                                    <th>
                                                                        <p>{{__('front.Product Name EN')}}</p>
                                                                    </th>

                                                                    <th>
                                                                        <p>{{__('front.Product Name AR')}}</p>
                                                                    </th>

                                                                    <th>
                                                                        <p>{{__('front.PMC')}}</p>
                                                                    </th>

                                                                    <th>
                                                                        <p>{{__('front.Image')}}</p>
                                                                    </th>

                                                                    <th>
                                                                        <p>{{__('front.Action')}}</p>
                                                                    </th>

                                                                </tr>
                                                            </thead>
                                                            <tbody>


                                                                @if($products)
                                                                @foreach($products as $k=>$product)
                                                                <tr>
                                                                    <td>
                                                                        <p>{{$k+1}}</p>
                                                                    </td>

                                                                    <td>
                                                                        <p>{{$product->product_name_en}}</p>
                                                                    </td>
                                                                    <td>
                                                                        <p>{{$product->product_name_ar}}</p>
                                                                    </td>
                                                                    <td>
                                                                        <p>{{$product->pmc->cat ?? ''}}</p>
                                                                    </td>

                                                                    <!--<td><img src="{{Voyager::image($product->image)}}" style="width:100px"></td>-->
                                                                    
                                                                    <td><button type="button" id='product_media' data-id='{{$product->id}}'data-name='{{$product->product_name}}'class="btn btn-light waves-effect ButtOpenPopUp" >{{__('front.View Images')}} </button></td>
                                                                    
                                                                    

                                                                    <td>
                                                                        <div class="actionsBtuns">
                                                                            <div class="dropdown">
                                                                                <button class="btn nav-btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                    <i class="fas fa-ellipsis-h"></i>
                                                                                </button>
                                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                                    <a class="dropdown-item accept" href="{{route('product',$product->product_name_en ?? '')}}"><i class="far fa-eye"></i> {{__('front.View Product')}}  </a>
                                                                                    <a class="dropdown-item " href="{{route('vendor_individual_product_Edit',$product->id)}}"><i class="far fa-edit"></i> {{__('front.edit')}} </a>
                                                                                    <a class="dropdown-item Delete del_pro" data-proid='{{$product->id}}' ><i class="far fa-trash-alt"></i> {{__('front.Delete')}} </a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                @endforeach
                                                                @endif



                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>




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






  <!--  Large modal example -->
                                            <div class="modal fade bs-example-modal-lg ModalditGallaryProduct" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="myLargeModalLabel">Large modal</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="PoeductEditGallary">
                                                                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                            <div id='imgs'class="carousel-inner" role="listbox">
                                                <div class="carousel-item active">
                                                    <div class="Imagess">
                                                        <img class="d-block img-fluid" src="{{asset('frontUI/assets/img/slider.png')}}" alt="First slide">
                                                    </div>
                                                    
                                                </div>
                                                
                                                
                                                
                                                <div class="carousel-item">
                                                    <div class="Imagess">
                                                        <video class="VedioPorUpload"  controls>
                                                             <source src="{{asset('frontUI/assets/videos/Team Working-14.m4v')}}" type="video/mp4">
                                                        </video>
                                                    </div>
                                                    
                                                </div>
                                                
                                                
                                                
                                            </div>
                                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </div>
                                                            </div>
                                                        </div>
                                                    </div><!-- /.modal-content -->
                                                </div><!-- /.modal-dialog -->
                                            </div><!-- /.modal -->
    
<input type=hidden id='url' name="url" value='{{url("/")}}'>

@endsection

@section('scripts')
<!-- Required datatable js -->
<script src="{{asset('frontUI/filesDatatable/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('frontUI/filesDatatable/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<!-- Buttons examples -->

<!-- Responsive examples -->
<script src="{{asset('frontUI/filesDatatable/Libs/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('frontUI/filesDatatable/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')}}"></script>
<!-- Datatable init js -->
<script src="{{asset('frontUI/filesDatatable/datatables.init.js')}}"></script>
<script>
    $(document).on('click', '.delete_btn', function(e) {
        $(this).closest('tr').remove()
    });
     $(document).on('click', '.del_pro', function(e) {
        var id = $(this).data('proid');
 

        $.ajax({
            url: "{{route('delete_product', '')}}"+"/"+id, 
            // url: "/delete_product/"+id ,
            type: "GET",

            success: function(response) {
location.reload();

            },
            

        });
    });
    
        $(document).on('click', '#product_media', function(e) {
        event.preventDefault();

        let id = $(this).attr("data-id");
         let name = $(this).attr("data-name");
        
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
             html += '<div class="carousel-item active"><div class="Imagess">'+
          '<img class="d-block img-fluid" src="'+r+'" alt="First slide"></div></div>';
        }
        else 
        html += '<div class="carousel-item "><div class="Imagess">'+
          '<img class="d-block img-fluid" src="'+r+'" alt="First slide"></div></div>';
       
    }
   
   if(item.type=='video'){
       
        let img=item.video;
      let result = img.replace("/\\/g", "/");
      let r=url+ result;
        if(i==0){
             html +='<div class="carousel-item active"><div class="Imagess"> <video class="VedioPorUpload"  controls> <source src="'+r+'" type="video/mp4"> </video></div> </div>'; 
            
        }else 
         html +='<div class="carousel-item"><div class="Imagess"> <video class="VedioPorUpload"  controls> <source src="'+r+'" type="video/mp4"> </video></div> </div>';
   }
 
 
 
});
let x='';
if(html != '')
 $('#imgs').empty().append(html);
 else {
    
  let im=response.product.image;
      let result2 = im.replace("/\\/g", "/");
      let r2=url+ result2;   
      console.log(r2);
   x='<div class="carousel-item active "><div class="Imagess">'+
          '<img class="d-block img-fluid" src="'+r2+'" alt="First slide"></div></div>';
               console.log(x);
           $('#imgs').empty().append(x);
 }
 $('.modal-title').text(name);
     $(".ModalditGallaryProduct").modal('show');
              

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