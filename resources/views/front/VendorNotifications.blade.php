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
                                                            {{__('front.Notifications')}} </h2>
                                                    </div>
                                                    
                                                    
                                                    <div class="tableCenterContact">
                                                        <div class="table-responsive">
                                                            <table id="datatable-buttons" class="table table-hover table-bordered">
                                                                <thead>
                                                                    <tr>
                                                                        <th><p>#</p></th>
                                                                       
                                                                        <th><p>{{__('front.title')}}</p></th>
                                                                        <th><p>{{__('front.Message')}}</p></th>
                                                                        <th><p>{{__('front.Image')}}</p></th>
                                                                    
                                                                        <th><p>{{__('front.Action')}}</p></th>
                                                                    
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                            @if(Auth::user()->notifications )
                                                                    @foreach(Auth::user()->notifications as $k=>$notification)
                                                                    
                                                                 
                                                                      <tr>
                                                                        <td><p>{{$k+1}}</p></td>
                                                            
                                                                        <td><p>{{$notification->title}}</p></td>
                                                                        <td><p>{{$notification->message}}</p></td>
                                                                        <td>
                                                                            <div class="popup-gallery2">
                                                                                <a class="imgNotfication" href="{{Voyager::image($notification->image ?? '')}}"> <img src='{{Voyager::image($notification->image ?? '')}}'> </a>
                                                                            </div>
                                                                        </td>
                                                             
                                                          
                                                                                
                                                                 
                                                                        <td>
                                                                            <div class="actionsBtuns">
                                                                                <div class="dropdown">
                                                                                    <button class="btn nav-btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                        <i class="fas fa-ellipsis-h"></i>
                                                                                    </button>
                                                                                    <div class="dropdown-menu dropdown-menu-end">
                                                                                        <!--<a class="dropdown-item accept" href="#"><i class="fas fa-check"></i> Accept </a>-->
                                                                                        <!--<a class="dropdown-item Refused" href="#"><i class="fas fa-times"></i> Refused</a>-->
                                                                                        <a class="dropdown-item Delete delete_btn" href="{{route('delete_notification',$notification->id)}}"><i class="far fa-trash-alt"></i> Delete</a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <!--<tr>-->
                                                                    <!--    <td><p>1</p></td>-->
                                                            
                                                                    <!--    <td><p>hussein</p></td>-->
                                                                    <!--    <td><p>hussein</p></td>-->
                                                                    <!--    <td><p>hussein</p></td>-->
                                                                    <!--    <td><p><span class="AcceptStstus">Accept</span></p></td>-->
                                                                    <!--    <td><p>asd asdas</p></td>-->
                                                                    <!--    <td><p>dasdsad</p></td>-->
                                                                    <!--    <td><p>hussein</p></td>-->
                                                                    <!--    <td>-->
                                                                    <!--        <div class="actionsBtuns">-->
                                                                    <!--            <div class="dropdown">-->
                                                                    <!--                <button class="btn nav-btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-->
                                                                    <!--                    <i class="fas fa-ellipsis-h"></i>-->
                                                                    <!--                </button>-->
                                                                    <!--                <div class="dropdown-menu dropdown-menu-end">-->
                                                                    <!--                    <a class="dropdown-item accept" href="#"><i class="fas fa-check"></i> Accept </a>-->
                                                                    <!--                    <a class="dropdown-item Refused" href="#"><i class="fas fa-times"></i> Refused</a>-->
                                                                    <!--                    <a class="dropdown-item Delete" href="#"><i class="far fa-trash-alt"></i> Delete</a>-->
                                                                    <!--                </div>-->
                                                                    <!--            </div>-->
                                                                    <!--        </div>-->
                                                                    <!--    </td>-->
                                                                    <!--</tr>-->
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
@endsection

@section('scripts')
<!-- Required datatable js -->
        <script src="{{asset('frontUI/filesDatatable/datatables.net/js/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('frontUI/filesDatatable/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
        <!-- Buttons examples -->

<script src="{{asset('frontUI/assets/Libs/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('frontUI/assets/Libs/magnific-popup/lightbox.init.js')}}"></script>


        <!-- Responsive examples -->
        <script src="{{asset('frontUI/filesDatatable/Libs/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
        <script src="{{asset('frontUI/filesDatatable/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')}}"></script>
        <!-- Datatable init js -->
        <script src="{{asset('frontUI/filesDatatable/datatables.init.js')}}"></script>
       <script>
          $(document).on('click', '.delete_btn', function(e) {
            $(this).closest('tr').remove()
        })
        </script>
        
@endsection