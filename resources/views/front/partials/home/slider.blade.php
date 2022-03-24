<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
  <div class="slider">
    <div class="jtv-slideshow">
      <div class="row">
        <div class="col-md-12 col-sm-12">
          <div id='jtv-rev_slider_wrapper' class='rev_slider_wrapper fullwidthbanner-container'>
            <div id='jtv-rev_slider' class='rev_slider fullwidthabanner'>
              <ul>
                @if($slider)
                @foreach($slider as $slide)
                <li data-transition='random' data-slotamount='7' data-masterspeed='1000' data-thumb='{{Voyager::image($slide->image)}}'><img src="{{Voyager::image($slide->image)}}" alt="slide-img" data-bgposition='left top' data-bgfit='cover' data-bgrepeat='no-repeat' />
                  <div class="info">
                      <div class="">
                           <div class='tp-caption jtv-sub-title sft  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2;max-width:auto;max-height:auto;white-space:nowrap;'><span>{{$slide->title}}</span> </div>
                    <div class='tp-caption jtv-large-title sfl  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1300' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:3;max-width:auto;max-height:auto;white-space:nowrap;'><span>{{$slide->sub_title}}</span> </div>
                    <div class='tp-caption Title sft  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1450' data-easing='Power2.easeInOut' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4;max-width:auto;max-height:auto;white-space:nowrap;'>{{$slide->desc}}</div>
                    <div class='tp-caption sfb  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1500' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4;max-width:auto;max-height:auto;white-space:nowrap;'><a href='#' class="jtv-shop-now-btn">{{$slide->button_title}}</a> </div>
                 
                      </div>
                   
                  </div>
                </li>
                @endforeach
                @endif
                <!-- <li data-transition='random' data-slotamount='7' data-masterspeed='1000' data-thumb='assets/img/cladreximg/slide-img1.jpg'><img src="{{asset('frontUI/assets/img/slider3.png')}}" alt="slide-img" data-bgposition='left top' data-bgfit='cover' data-bgrepeat='no-repeat' />
                  <div class="info">
                    <div class='tp-caption jtv-sub-title sft  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2;max-width:auto;max-height:auto;white-space:nowrap;'><span>Fashion Hussein 2017</span> </div>
                    <div class='tp-caption jtv-large-title sfl  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1300' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:3;max-width:auto;max-height:auto;white-space:nowrap;'><span>Look Book</span> </div>
                    <div class='tp-caption Title sft  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1450' data-easing='Power2.easeInOut' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4;max-width:auto;max-height:auto;white-space:nowrap;'>Lorem ipsum dolor sit amet, consectetur adipiscing.</div>
                    <div class='tp-caption sfb  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1500' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4;max-width:auto;max-height:auto;white-space:nowrap;'><a href='#' class="jtv-shop-now-btn">Shop Now</a> </div>
                  </div>
                </li>
                <li data-transition='random' data-slotamount='7' data-masterspeed='1000' data-thumb='assets/img/cladreximg/slide-img2.jpg'><img src="{{asset('frontUI/assets/img/slider5.png')}}" alt="slide-img" data-bgposition='left top' data-bgfit='cover' data-bgrepeat='no-repeat' />
                  <div class="info">
                    <div class='tp-caption jtv-sub-title sft slide2  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2;max-width:auto;max-height:auto;white-space:nowrap;padding-right:0px'><span>Designer Clothing</span> </div>
                    <div class='tp-caption jtv-large-title sfl  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1300' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:3;max-width:auto;max-height:auto;white-space:nowrap;'>Trendy colletions</div>
                    <div class='tp-caption Title sft  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1500' data-easing='Power2.easeInOut' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4;max-width:auto;max-height:auto;white-space:nowrap;'>Best offer of the month top brands.</div>
                    <div class='tp-caption sfb  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1500' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4;max-width:auto;max-height:auto;white-space:nowrap;'><a href='#' class="jtv-shop-now-btn">View colletion</a> </div>
                  </div>
                </li> -->




                <!--<li data-transition='random' data-slotamount='7' data-masterspeed='1000' data-thumb='assets/img/cladreximg/slide-img3.jpg'><img src="{{asset('frontUI/assets/img/slider4.png')}}" alt="slide-img" data-bgposition='left top' data-bgfit='cover' data-bgrepeat='no-repeat' />-->
                <!--  <div class="info">-->
                <!--    <div class='tp-caption jtv-sub-title sft slide2  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1100' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:2;max-width:auto;max-height:auto;white-space:nowrap;padding-right:0px'><span>Designer Clothing</span> </div>-->
                <!--    <div class='tp-caption jtv-large-title sfl  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1300' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:3;max-width:auto;max-height:auto;white-space:nowrap;'>Trendy colletions</div>-->
                <!--    <div class='tp-caption Title sft  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1500' data-easing='Power2.easeInOut' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4;max-width:auto;max-height:auto;white-space:nowrap;'>Best offer of the month top brands.</div>-->
                <!--    <div class='tp-caption sfb  tp-resizeme ' data-endspeed='500' data-speed='500' data-start='1500' data-easing='Linear.easeNone' data-splitin='none' data-splitout='none' data-elementdelay='0.1' data-endelementdelay='0.1' style='z-index:4;max-width:auto;max-height:auto;white-space:nowrap;'><a href='#' class="jtv-shop-now-btn">View colletion</a> </div>-->
                <!--  </div>-->
                <!--</li>-->







              </ul>
            </div>
          </div>
        </div>
        <!-- end JTV Home Slider -->


      </div>

    </div>
  </div>
</div>