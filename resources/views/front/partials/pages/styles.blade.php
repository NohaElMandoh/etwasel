<link rel="stylesheet" href="{{asset('frontUI/assets/css/bootstrapnew.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontUI/assets/css/app.min.css')}}">
        <link href="{{asset('frontUI/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="{{asset('frontUI/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontUI/assets/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontUI/assets/css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontUI/assets/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('frontUI/assets/css/magnific-popup.min.css')}}">
    <!--<link rel="stylesheet" href="{{asset('frontUI/assets/css/nice-select.css')}}">-->
    <link rel="stylesheet" href="{{asset('frontUI/assets/css/slick.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontUI/assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontUI/assets/css/meanmenu.css')}}">
    <link rel="stylesheet" href="{{asset('frontUI/assets/css/odometer.min.css')}}">
        <link rel="stylesheet" href="{{asset('frontUI/assets/css/icofont.css')}}">
        <link rel="stylesheet" href="{{asset('frontUI/assets/css/themify-icons.css')}}">
        <link rel="stylesheet" href="{{asset('frontUI/assets/css/revolution-slider.css')}}">
      <link rel="stylesheet" href="{{asset('frontUI/assets/Libs/select2/css/select2.min.css')}}">
    
    <link href="assets/Libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet" type="text/css">
        <link href="{{asset('frontUI/assets/Libs/spectrum-colorpicker2/spectrum.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('frontUI/assets/Libs/bootstrap-timepicker/css/bootstrap-timepicker.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('frontUI/assets/Libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css')}}" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="{{asset('frontUI/assets/libs/%40chenfengyuan/datepicker/datepicker.min.css')}}">
               <link rel="stylesheet" href="{{asset('frontUI/assets/Libs/wysiwyag/richtext.css')}}">
        
        
       <link rel="stylesheet" href="{{asset('frontUI/assets/css/style.css')}}">
       

    
     @if ( Config::get('app.locale') == 'en')

   <link rel="stylesheet" href="{{asset('frontUI/assets/css/style.css')}}">

   @elseif ( Config::get('app.locale') == 'ar' )
<link href="https://fonts.googleapis.com/css2?family=Almarai:wght@300;400;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('frontUI/assets/css/style-ar.css')}}">
    
   @endif
    <link rel="stylesheet" href="{{asset('frontUI/assets/css/responsive.css')}}">
       <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="icon" type="image/png" href="{{asset('frontUI/assets/img/NewImg/3anota%20alone.png')}}">
    <script src="https://kit.fontawesome.com/ea9a619c4d.js" crossorigin="anonymous"></script>
    
    
    <style>
        .navbar-area {
    bottom: auto;
    top: 0;
    background: linear-gradient( 
0deg
 , rgb(36 99 184) 0%, rgb(128 182 240) 100%);

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
        
.luvion-nav .navbar .navbar-nav .nav-item .search{
        display: block;
    height: 40px;
    line-height: 40px;
    background: #fff;
    border-radius: 25px;
    overflow: hidden;
    width: max-content;
    margin-top: 5px;
}
.luvion-nav .navbar .navbar-nav .nav-item .search .btn_search{
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
.luvion-nav .navbar .navbar-nav .nav-item .search .btn_search:hover{
        background: #3c79c7;
    border: 1px solid #3c79c7;
        color: #fff;
}
.luvion-nav .navbar .navbar-nav .nav-item .search input{
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
.modalprivew{
            
        }
        .modalprivew{
            
        }
        .modalprivew .modal-body{
            padding: 0;
        }
        .centerside .addside{
                height: 250px;
    display: block;
        }
        .centerside .addside .addcontent{
            display: block;
    width: 100%;
    height: 100%;
        }
        .centerside .addside .addcontent img{
            display: block;
            width: 100%;
                height: 100%;
        }
        .navbar-area .droplang .dropdown-menu.show {
    transform: translate(0, 0px) !important;
}
.navbar-area .dropdawnnott .dropdown-menu.show {
    transform: translate(0, 0px) !important;
}
    </style>