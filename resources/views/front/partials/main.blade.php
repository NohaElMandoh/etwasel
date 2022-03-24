<div class="main-banner jarallax">

    <button type="button" class="btn_dotedt" data-toggle="modal" data-target="#exampleModalCenter">
      <!--    <img src="{{asset('frontUI/assets/img/cladreximg/dots.e')}}1b5719e.svg">-->
      <i class="fas fa-bars"></i>
    </button>
    <div class="container">
      <div class="searchcontent">
        <div class="row" style="justify-content: center;">
          <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
            <div class="searchdettails">
              <div class="img EN_ETASELIMG">
                <img src="{{asset('frontUI/assets/img/cladreximg/2021-LogoMaker-Site-Logo.png')}}">
              </div>
              
              <div class="img AR_ETASELIMG">
                <img src="{{asset('frontUI/assets/img/cladreximg/ArabicLogoEtwasel.png')}}">
              </div>
              <div class="details">
                
                <div class="form-group">
                <form method="get" action="{{route('search')}}" enctype="multipart/form-data">
                @csrf
                  <button type='submit' class="bn_search"><i class="fas fa-search"></i></button>
                  <input type="text" id='keyword' name='keyword' placeholder="{{__('front.Search')}} " value="">
                  </form>
                </div>
                <div class="artilcles">
                  <h2>{{__('front.It Is More Than Sources')}}</h2>
                  <p>{{__('front.B2B community')}}</p>

                </div>
                <div class="partner">
                  <ul style="display: none">
                    <li>
                      <a href="#" class="partlink">
                        <i class="style_sponsIcon__3kBof icofont icofont-brand-adidas"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#" class="partlink">
                        <i class="style_sponsIcon__3kBof icofont icofont-brand-samsung"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#" class="partlink">
                        <i class="style_sponsIcon__3kBof icofont icofont-brand-huawei"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#" class="partlink">
                        <i class="style_sponsIcon__3kBof icofont icofont-brand-lg"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#" class="partlink">
                        <i class="style_sponsIcon__3kBof icofont icofont-brand-nike"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!--<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">-->
          <!--  <div class="imgsearchside">-->
          <!--    <img src="{{asset('frontUI/assets/img/cladreximg/lock.svg')}}">-->
          <!--  </div>-->
          <!--</div>-->
        </div>
      </div>
    </div>

  </div>
  <div class="modal fade modalsDotets" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>

        <div class="modal-body">
          <div class="modaldotetsbody">
            <div class="row">
              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
                <div class="dotetitem">
                  <a href="#" class="dotetdetaisls">
                    <i class="fas fa-play-circle mb-2"></i>
                    Mr1Play
                  </a>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
                <div class="dotetitem">
                  <a href="#" class="dotetdetaisls">
                    <i class="style_iconColor__2X4ze fab fa-adversal mb-2"></i>
                    Ads
                  </a>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
                <div class="dotetitem">
                  <a href="#" class="dotetdetaisls">
                    <i class="style_iconColor__2X4ze fas fa-video mb-2"></i>
                    Faces
                  </a>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
                <div class="dotetitem">
                  <a href="#" class="dotetdetaisls">
                    <i class="style_iconColor__2X4ze fas fa-wallet mb-2"></i>
                    My wallet
                  </a>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
                <div class="dotetitem">
                  <a href="#" class="dotetdetaisls">
                    <i class="style_iconColor__2X4ze far fa-hdd mb-2"></i>
                    My storage
                  </a>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
                <div class="dotetitem">
                  <a href="#" class="dotetdetaisls">
                    <i class="style_iconColor__2X4ze fas fa-language mb-2"></i>
                    Translator
                  </a>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
                <div class="dotetitem">
                  <a href="#" class="dotetdetaisls">
                    <i class="style_iconColor__2X4ze fas fa-gamepad mb-2"></i>
                    Gaming
                  </a>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
                <div class="dotetitem">
                  <a href="#" class="dotetdetaisls">
                    <i class="style_iconColor__2X4ze fas fa-vr-cardboard mb-2"></i>
                    Ar
                  </a>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
                <div class="dotetitem">
                  <a href="#" class="dotetdetaisls">
                    <i class="style_iconColor__2X4ze fas fa-book-open mb-2"></i>
                    Education
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
