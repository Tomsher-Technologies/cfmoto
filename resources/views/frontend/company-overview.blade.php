<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title></title>
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="{{ asset('assets/css/clientlib-all.lc-202401081956-lc.min.f12464e7415ea6247b9e9c9d91a43427.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/css/css.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/css/jquery.hiSlider.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/css/main.css?v2') }}">
      <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/css/s') }}">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
      <link rel="stylesheet" href="{{ asset('assets/css/webslidemenu.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/css/demo.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/css/white-gry.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/css/fade-down.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/css/all.css') }}">
      <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/css/swiper.min.css'>
      <link rel="stylesheet" href="https://alshaalimoto.com/assets/vendors/fontawesome/css/all.min.css">

      <link rel="stylesheet" href="{{ asset('assets/css/about.css') }}">
      <link href="https://db.onlinewebfonts.com/c/7280a131e9f73efe49c55d60cf58ebd6?family=elementskit" rel="stylesheet">
      <link rel="stylesheet" href="https://alshaalimoto.com/assets/vendors/elementskit-icon-pack/assets/css/ekiticons.css">
      <link rel="stylesheet" href="https://alshaalimoto.com/style.css">
      <link rel="stylesheet" href="https://alshaalimoto.com/assets/vendors/elementskit-icon-pack/assets/css/ekiticons.css">
      <link rel="stylesheet" href="https://alshaalimoto.com/assets/vendors/elementskit-icon-pack/assets/css/ekiticons.css">

      <style>
         .skiptranslate {
             display: none !important;
         } 
         body {
             top: 0px !important; 
         }
         .lang-select {
            padding: 0 0px 0 0px !important;
         }
       </style>
   </head>


   <div class="wsmobileheader clearfix">
         <a id="wsnavtoggle" class="wsanimated-arrow"><span></span></a>
         <span class="smllogo"><a href="{{ route('uae') }}"><img src="{{ asset('assets/images/cfmoto-logo-block.png') }}" width="80" alt="" /></a></span>
         <div class="language-selector d-block d-md-none">
            {{-- <select name="menu" id="meun-items">
               <option selected> <img src="{{ asset('assets/images/en.png') }}" alt=""> EN</option>
               <option value="html" id="google_translate_element">AR</option>
            </select> --}}
            <select name="menu" id="meun-items " class="lang-select">
               <option value="en" data-lang="en"> <img src="{{ asset('assets/images/en.png') }}" alt=""> EN</option>
               <option value="ar" data-lang="ar">AR</option>
            </select>
         </div>
         <div id="google_translate_buttons"></div>
      </div>
      </div>
   <div class="headerfull">
         <div class="container-fluid">
            <div class="wsmain clearfix">
               <div class="smllogo"><a href="{{ route('uae') }}"><img src="{{ asset('assets/images/cfmoto-logo-block.png') }}" alt="" /></a></div>
               <nav class="wsmenu clearfix">
                  <ul class="wsmenu-list">
                     <li aria-haspopup="true">
                        <a href="#" class="navtext"><span></span> <span>Products</span></a>
                        <div class="wsshoptabing wtsdepartmentmenu clearfix">
                           <div class="wsshopwp clearfix">
                              <ul class="wstabitem clearfix">
                                 <li class="wsshoplink-active">
                                    <a href="#">CFORCE</a>
                                    <div class="wstitemright clearfix wstitemrightactive">
                                       <div class="row ">
                                          <div class="col-lg-12 col-md-12 clearfix">
                                             <div class="wstheading clearfix">CFORCE</div>
                                             <div class="row g-5">
                                                <div class="col-md-3 text-center">
                                              <a href="{{ route('cforce110') }}">
                                              <img data-v-87eb4736="" src="{{ asset('assets/images/CFORCE110_11.png') }}" alt="">
                                              <h3>CFORCE 110</h3>
                                             </a>
                                                </div>
                                                <div class="col-md-3 text-center">
                                                  <a href="{{ route('cforceev110') }}">
                                                   <img data-v-87eb4736="" src="{{ asset('assets/images/CFORCEEV110_11.png') }}" alt="">
                                                   <h3>CFORCE EV110</h3>
                                                  </a>
                                                </div>
                                                <div class="col-md-3 text-center">
                                            <a href="{{ route('cforce450l') }}">
                                             <img data-v-87eb4736="" src="{{ asset('assets/images/CFORCE450L_11.png') }}" alt="">
                                             <h3>CFORCE 450 L
                                             </h3>
                                            </a>
                                                </div>
                                                <div class="col-md-3 text-center">
                                      <a href="{{ route('cforce625touring') }}">
                                       <img data-v-87eb4736="" src="{{ asset('assets/images/CFORCE625TOURING_44.png') }}" alt="">
                                       <h3>CFORCE 625 TOURING
                                       </h3>
                                      </a>
                                                </div>
                                                <div class="col-md-3 text-center">
                                          <a href="{{ route('cforce625touringoverland') }}">
                                             <img data-v-87eb4736="" src="{{ asset('assets/images/model_1.png') }}" alt="">
                                             <h3>CFORCE 625 TOURING OVERLAND
                                             </h3>
                                          </a>
                                                </div>
                                                <div class="col-md-3 text-center">
                                      <a href="{{ route('cforce850xc') }}">
                                       <img data-v-87eb4736="" src="{{ asset('assets/images/CFORCE850XC_11.png') }}" alt="">
                                       <h3>CFORCE 850 XC
                                       </h3>
                                      </a>
                                                </div>
                                                <div class="col-md-3 text-center">
                                        <a href="{{ route('cforce1000') }}">
                                          <img data-v-87eb4736="" src="{{ asset('assets/images/CFORCE1000_11.png') }}" alt="">
                                          <h3>CFORCE 1000
                                          </h3>
                                        </a>
                                                </div>
                                                <div class="col-md-3 text-center">
                                      <a href="{{ route('cforce1000overland') }}">
                                       <img data-v-87eb4736="" src="{{ asset('assets/images/CFORCE1000OVERLAND_22.png') }}" alt="">
                                       <h3>CFORCE 1000 OVERLAND
                                       </h3>
                                      </a>
                                                </div>
                                                <div class="col-md-3 text-center">
                                                   <a href="{{ route('cforce850touring') }}">
                                                    <img data-v-87eb4736="" src="{{ asset('assets/images/CFORCE850TOURING (1).png') }}" alt="">
                                                    <h3>CFORCE 850 TOURING
                                                    </h3>
                                                   </a>
                                                             </div>


                                                             <div class="col-md-3 text-center">
                                                               <a href="{{ route('cforce1000touring') }}">
                                                                <img data-v-87eb4736="" src="{{ asset('assets/images/CFORCE1000TOURING (1).png') }}" alt="">
                                                                <h3>
                                                                  CFORCE 1000 TOURING 
     </h3>
                                                               </a>
                                                                         </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </li>
                                 <li>
                                    <a href="#">ZFORCE</a>
                                    <div class="wstitemright clearfix">
                                       <div class="container-fluid">
                                          <div class="row">
                                             <div class="col-lg-12 col-md-12 clearfix">
                                                <div class="wstheading clearfix">ZFORCE</div>
                                                <div class="row">
                                                   <div class="col-md-3 text-center">
                                               <a href="{{ route('zforce950sport4') }}">
                                                <img data-v-87eb4736="" src="{{ asset('assets/images/ZFORCE_950_SPORT-4_1.png') }}" alt="">
                                                <h3>ZFORCE 950 SPORT-4
                                                </h3>
                                               </a>
                                                   </div>
                                                   <div class="col-md-3 text-center">
                                              <a href="{{ route('zforce1000sportr') }}">
                                                <img data-v-87eb4736="" src="{{ asset('assets/images/ZFORCE1000SPORTR_33.png') }}" alt="">
                                                <h3>ZFORCE 1000 SPORT R
                                                </h3>
                                              </a>
                                                   </div>
                                                   <div class="col-md-3 text-center">
                                            <a href="{{ route('zforce950sport') }}">
                                             <img data-v-87eb4736="" src="{{ asset('assets/images/vm11-model_1.png') }}" alt="">
                                             <h3>ZFORCE 950 SPORT
                                             </h3>
                                            </a>
                                                   </div>
                                                   <div class="col-md-3 text-center">
                                      <a href="{{ route('zforce800trail') }}">
                                       <img data-v-87eb4736="" src="{{ asset('assets/images/ZFORCE800TRAIL_22.png') }}" alt="">
                                       <h3>ZFORCE 800 TRAIL
                                       </h3>
                                      </a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </li>
                                 <li>
                                    <a href="#">UFORCE</a>
                                    <div class="wstitemright clearfix">
                                       <div class="wstheading clearfix">UFORCE</div>
                                       <div class="container-fluid">
                                          <div class="row">
                                             <div class="col-lg-12 col-md-12 clearfix">
                                                <div class="row">
                                                   <div class="col-md-3 text-center">
                                        <a href="{{ route('uforce600') }}">
                                          <img data-v-87eb4736="" src="{{ asset('assets/images/UFORCE600_11A.png') }}" alt="">
                                          <h3>UFORCE 600
                                          </h3>
                                        </a>
                                                   </div>
                                                   <div class="col-md-3 text-center">
                                           <a href="{{ route('uforce1000') }}">
                                             <img data-v-87eb4736="" src="{{ asset('assets/images/UFORCE1000_33A.png') }}" alt="">
                                             <h3>UFORCE 1000
                                             </h3>
                                           </a>
                                                   </div>
                                                   <div class="col-md-3 text-center">
                                         <a href="{{ route('uforce1000xl') }}">
                                          <img data-v-87eb4736="" src="{{ asset('assets/images/UFORCE1000XL_33A.png') }}" alt="">
                                          <h3>UFORCE 1000 XL
                                          </h3>
                                         </a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </li>
                                 <li>
                                    <a href="#">MOTORCYCLES</a>
                                    <div class="wstitemright clearfix kitchenmenuimg">
                                       <div class="container-fluid">
                                          <div class="row">
                                             <div class="col-md-12">
                                                <div class="wstheading clearfix">Naked</div>
                                             </div>
                                             <div class="col-md-3 text-center">
                         <a href="{{ route('t250nk') }}">
                           <img data-v-87eb4736="" src="{{ asset('assets/images/250NK_Athens-Blue.png') }}" alt="">
                           <h3>250NK 
           
                           </h3>
                         </a>
                                             </div>
                                             <div class="col-md-3 text-center">
                                     <a href="{{ route('t300nk') }}">
                                       <img data-v-87eb4736="" src="{{ asset('assets/images/300NK_Athens-Blue.png') }}" alt="">
                                       <h3>300NK
                                       </h3>
                                     </a>
                                             </div>
                                             <div class="col-md-3 text-center">
                                       <a href="{{ route('f450nk') }}">
                                          <img data-v-87eb4736="" src="{{ asset('assets/images/model_1.png') }}" alt="">
                                          <h3>450NK
                                          </h3>
                                       </a>
                                             </div>
                                             <div class="col-md-3 text-center">
                                        <a href="{{ route('s650nk') }}">
                                          <img data-v-87eb4736="" src="{{ asset('assets/images/650NK_Nebula-White.png') }}" alt="">
                                          <h3>650NK
                                          </h3>
                                        </a>
                                             </div>

                                             <div class="col-md-3 text-center">
                                       <a href="{{ route('e800nk') }}">
                                          <img data-v-87eb4736="" src="{{ asset('assets/images/800NK 锆石黑.png') }}" alt="">
                                          <h3>800NK
                                          </h3>
                                       </a>
                                             </div>
                                          </div>
                                          <div class="row ">
                                             <div class="col-md-12 mt-5">
                                                <div class="wstheading clearfix">Sport Racing</div>
                                             </div>
                                             <div class="col-md-3 text-center">
                                         <a href="{{ route('t250sr1') }}">
                                          <img data-v-87eb4736="" src="{{ asset('assets/images/250SR_1.png') }}" alt="">
                                          <h3>250SR
                                          </h3>
                                         </a>
                                             </div>
                                             <div class="col-md-3 text-center">
                                        <a href="{{ route('t250sr2') }}">
                                          <img data-v-87eb4736="" src="{{ asset('assets/images/编组 3.png') }}" alt="">
                                          <h3>250SR
                                          </h3>
                                        </a>
                                             </div>
                                             <div class="col-md-3 text-center">
                                          <a href="{{ route('t300sr') }}">
                                             <img data-v-87eb4736="" src="{{ asset('assets/images/编组 3备份 4.png') }}" alt="">
                                             <h3>300SR
                                             </h3>
                                          </a>
                                             </div>
                                             <div class="col-md-3 text-center">
                                            <a href="{{ route('f450sr') }}">
                                             <img data-v-87eb4736="" src="{{ asset('assets/images/450SR-1.png') }}" alt="">
                                             <h3>450SR
                                             </h3>
                                            </a>
                                             </div>
                                             <div class="col-md-3 text-center">
                                        <a href="{{ route('f450srs') }}">
                                          <img data-v-87eb4736="" src="{{ asset('assets/images/编组 3备份 9.png') }}" alt="">
                                          <h3>450SR S
                                          </h3>
                                        </a>
                                             </div>
                                          </div>
                                          <div class="row ">
                                             <div class="col-md-12 mt-5">
                                                <div class="wstheading clearfix">Classic</div>
                                             </div>
                                             <div class="col-md-3 text-center">
                                           <a href="{{ route('t250clx') }}">
                                             <img data-v-87eb4736="" src="{{ asset('assets/images/250CL-X_Nebula-Black.png') }}" alt="">
                                             <h3>250CL-X
                                             </h3>
                                           </a>
                                             </div>
                                             <div class="col-md-3 text-center">
                                            <a href="{{ route('t300clx') }}">
                                             <img data-v-87eb4736="" src="{{ asset('assets/images/300CL-X_Nebula-White.png') }}" alt="">
                                             <h3>300CL-X
                                             </h3>
                                            </a>
                                             </div>
                                             <div class="col-md-3 text-center">
                                          <a href="{{ route('f450clc') }}">
                                             <img data-v-87eb4736="" src="{{ asset('assets/images/model_2.png') }}" alt="">
                                             <h3>450CL-C
                                             </h3>
                                          </a>
                                             </div>
                                             <div class="col-md-3 text-center">
                                          <a href="{{ route('s700clxheritage') }}">
                                             <img data-v-87eb4736="" src="{{ asset('assets/images/700CL-X-HERITAGE_Nebula-Black.png') }}" alt="">
                                             <h3>700CL-X HERITAGE
                                             </h3>
                                          </a>
                                             </div>
                                             <div class="col-md-3 text-center">
                                            <a href="{{ route('s700clxsport') }}">
                                             <img data-v-87eb4736="" src="{{ asset('assets/images/700CL-X-SPORT_Nebula-White.png') }}" alt="">
                                             <h3>700CL-X SPORT
                                             </h3>
                                            </a>
                                             </div>
                                             <div class="col-md-3 text-center">
                                            <a href="{{ route('s700clxadventure') }}">
                                             <img data-v-87eb4736="" src="{{ asset('assets/images/700CL-X-ADVENTURE_Aurora-Blue.png') }}" alt="">
                                             <h3>700CL-X ADVENTURE
                                             </h3>
                                            </a>
                                             </div>
                                          </div>
                                          <div class="row ">
                                             <div class="col-md-12 mt-5">
                                                <div class="wstheading clearfix">Mult-Touring</div>
                                             </div>
                                             <div class="col-md-3 text-center">
                                          <a href="{{ route('s650mt') }}">
                                             <img data-v-87eb4736="" src="{{ asset('assets/images/650MT_Athens-Blue.png') }}" alt="">
                                             <h3>650MT
                                             </h3>
                                          </a>
                                             </div>
                                             <div class="col-md-3 text-center">
                                       <a href="{{ route('s700mt') }}">
                                          <img data-v-87eb4736="" src="{{ asset('assets/images/700MT_Nebula-White_Right.png') }}" alt="">
                                          <h3>700MT
                                          </h3>
                                       </a>
                                             </div>
                                             <div class="col-md-3 text-center">
                                     <a href="{{ route('e800mtsport') }}">
                                       <img data-v-87eb4736="" src="{{ asset('assets/images/800MT-SPORT_Nebula-Black.png') }}" alt="">
                                       <h3>800MT SPORT 
                                       </h3>
                                     </a>
                                             </div>
                                             <div class="col-md-3 text-center">
                                        <a href="{{ route('e800mttouring') }}">
                                          <img data-v-87eb4736="" src="{{ asset('assets/images/800MT-TOURING_Twilight-Blue.png') }}" alt="">
                                          <h3>800MT TOURING
                                          </h3>
                                        </a>
                                             </div>
                                             <div class="col-md-3 text-center">
                                          <a href="{{ route('e800mtexplore') }}">
                                             <img data-v-87eb4736="" src="{{ asset('assets/images/800MT EXPLORE EDITION_Gem Black_Right.png') }}" alt="">
                                             <h3>800MT EXPLORE
                                             </h3>
                                          </a>
                                             </div>
                                          </div>
                                          <div class="row ">
                                             <div class="col-md-12 mt-5">
                                                <div class="wstheading clearfix">PAPIO</div>
                                             </div>
                                             <div class="col-md-3 text-center">
                                        <a href="{{ route('stpapio') }}">
                                          <img data-v-87eb4736="" src="{{ asset('assets/images/ST-PAPIO_Lemon Yellow.png') }}" alt="">
                                          <h3>ST PAPIO
                                          </h3>
                                        </a>
                                             </div>
                                             <div class="col-md-3 text-center">
                                         <a href="{{ route('xopapioracer') }}">
                                          <img data-v-87eb4736="" src="{{ asset('assets/images/XO-PAPIO-ABS_Fiery-Red_Right.png') }}" alt="">
                                          <h3>XO PAPIO RACER
                                          </h3>
                                         </a>
                                             </div>
                                             <div class="col-md-3 text-center">
                                           <a href="{{ route('xopapiotrail') }}">
                                             <img data-v-87eb4736="" src="{{ asset('assets/images/1_GalaxyGrey.png') }}" alt="">
                                             <h3>XO PAPIO TRAIL
                                             </h3>
                                           </a>
                                             </div>

                                          </div>
                                          <div class="row ">
                                             <div class="col-md-12 mt-5">
                                                <div class="wstheading clearfix">Grand Touring</div>
                                             </div>
                                             <div class="col-md-3 text-center">
                                          <a href="{{ route('s650gt') }}">
                                             <img data-v-87eb4736="" src="{{ asset('assets/images/gt650.png') }}" alt="">
                                             <h3>
                                                650GT
                                             </h3>
                                          </a>
                                             </div>

                                          </div>
                                          <div class="row ">
                                             <div class="col-md-12 mt-5">
                                                <div class="wstheading clearfix">TR-G</div>
                                             </div>
                                             <div class="col-md-3 text-center">
                                           <a href="{{ route('o1250trg') }}">
                                             <img data-v-87eb4736="" src="{{ asset('assets/images/1250TR-G.png') }}" alt="">
                                             <h3>1250TR-G
                                             </h3>
                                           </a>
                                             </div>

                                          </div>
                                          <div class="row ">
                                             <div class="col-md-12 mt-5">
                                                <div class="wstheading clearfix">YOUTH DIRT BIKE</div>
                                             </div>
                                             
                                             <div class="col-md-3 text-center">
                                             <a href="{{ route('cx5e') }}">
                                                <img data-v-87eb4736="" src="{{ asset('assets/images/CX-5E_1.png') }}" alt="">
                                                <h3>CX-5E
                                                </h3>
                                             </a>
                                             </div>
                                             <div class="col-md-3 text-center">
                                            <a href="{{ route('cx2e') }}">
                                             <img data-v-87eb4736="" src="{{ asset('assets/images/CX-2E_1.png') }}" alt="">
                                             <h3>CX-2E
                                             </h3>
                                            </a>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </li>
                     <li aria-haspopup="true"><a href="{{ route('news') }}" class="navtext"> <span>News</span></a>
                     </li>
                     <li aria-haspopup="true" class="dropdown">
                        <a class="dropdown-toggle navtext" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                           CFMOTO Racing
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                          <li><a class="dropdown-item" href="{{ route('asparracing') }}">CFMOTO Aspar Racing Team </a></li>
                          <li><a class="dropdown-item" href="{{ route('racing') }}">CFMOTO Thundering Racing Team</a></li>
                        </ul>
                      </li>
                     <li aria-haspopup="true"><a href="{{ route('ride') }}" class="navtext"> <span>CFMOTO Ride</span></a>
                 
                        
                     <li aria-haspopup="true"><a href="{{ route('brands') }}" class="navtext"> <span>Brand</span></a>
                     <li aria-haspopup="true"><a href="{{ route('companyoverview') }}" class="navtext"> <span> About Us</span></a>
                     </li>
                     <li aria-haspopup="true"><a href="{{ route('contactus') }}" class="navtext"> <span> Contact Us</span></a>
                     </li>
                  </ul>
               </nav>
               <div class="language-selector d-none d-md-block">
                  <select name="menu" id="meun-items " class="lang-select">
                     <option value="en" data-lang="en"> <img src="{{ asset('assets/images/en.png') }}" alt=""> EN</option>
                     <option value="ar" data-lang="ar">AR</option>
                  </select>
                 
               </div>

               {{-- <ul class="list-unstyled language-selector d-none d-md-block">
                  <li>
                     <a href="#googtrans(en|en)" class="lang-en lang-select" data-lang="en">
                        English
                     </a>
                  </li>
                     <li>
                     <a href="#googtrans(en|ar)" class="lang-es lang-select" data-lang="ar">
                           Arabic
                     </a>
                  </li>
               </ul> --}}

               {{-- <div id="google_translate_button" ></div> --}}

              
            </div>
         </div>
      </div>

   <main id="content" class="site-main">
      <!-- Inner Banner html start-->
      <section class="inner-banner-wrap">
          <div class="inner-baner-container" style="background-image: url('assets/images/about-us.jpg')">
              <div class="container">
                  <div class="inner-banner-content">
                      <h1 class="inner-title">Alshali Moto</h1>
                  </div>
              </div>
          </div>
      </section>
      <!-- Inner Banner html end-->
      <!-- About page html start -->
      <section class="about-section">
          <div class="container">
              <div class="row">
                  <div class="col-lg-6">
                      <div class="about-left-image">
                          <figure class="top-left-img">
                              <img src="{{ asset('assets/images/favicon.png') }}" alt="">
                          </figure>
                          <div class="bottom-content">
                              <div class="img-year-content">
                                  <h2>12+</h2>
                                  <h6>YEARS</h6>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-6">
                      <div class="about-right-desc">
                          <div class="section-head">
                              <div class="title-divider-right">ABOUT US</div>
                              <h3 class="section-title">
                                  INTRODUCTION  
                                  <span class="title-highlight-gradient">
                                      Al Shaali
                                  </span>
                                  Moto Trading
                              </h3>
                              <p>
                                 ALSHAALI MOTO was established in Dubai since 2011 with ventures across key industries from Passenger Vehicles, Electric Vehicles, Off-Road vehicles, On-Road Motorcycles, and Motorcycle Accessories across UAE and GCC.
                              </p>
                                <p>
                                Al Shaali Moto L.L.C are the official distributor for BAIC vehicles in UAE, CFMOTO and Al Shaali EV Golf Carts in UAE &amp; GCC Countries as well as to other premium brands for Motorcycle Accessories like LS2 Helmets &amp; 100% Goggles.
                              </p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <section class="service-section">
          <div class="container">
              <div class="type-of-service">
                  <div class="service-type">
                      <div class="service-no-icon">
                          <figure class="service-icon">
                              <i aria-hidden="true" class="icon icon-Target"></i>
                          </figure>
                      </div>
                      <div class="service-detail">
                          <h5 class="service-title">
                              <a href="service-detail.html"> Mission</a>
                          </h5>
                          <p class="service-illustration">
                            Our Mission is to Continuously supply with the best reliable and economical products in the market as well as easy-to-manage and maintain the products
                          </p>
                      </div>
                  </div>
                  <div class="service-type">
                      <div class="service-no-icon">
                          <figure class="service-icon">
                              <i aria-hidden="true" class="icon icon-light-bulb-1"></i>
                          </figure>
                      </div>
                      <div class="service-detail">
                          <h5 class="service-title">
                              <a href="service-detail.html"> Vision</a>
                          </h5>
                          <p class="service-illustration">
                              Our vision is to bring full-grade products that can compete with other brands in terms of quality, affordability, and customer satisfaction. From this, we expanded our vision onto other things with the same criteria of quality, affordability, and customer satisfaction.
                          </p>
                      </div>
                  </div>
                  <div class="service-type">
                      <div class="service-no-icon">
                          <figure class="service-icon">
                              <i aria-hidden="true" class="icon icon-flag"></i>
                          </figure>
                      </div>
                      <div class="service-detail">
                          <h5 class="service-title">
                              <a href="service-detail.html"> Goal</a>
                          </h5>
                          <p class="service-illustration">
                              Our goal is to work as hard as possible, to strengthen the group and company with no limitations, and to expand.
                          </p>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <div class="about-service-wrap">
              <div class="pattern-overlay circle-patten"></div>
              <div class="container">
                  <div class="section-head">
                      <div class="row no-gutters align-items-center">
                          <div class="col-lg-7">
                         
                              <h3 class="section-title mb-4">
                                 OWNER’S MESSAGE
                              </h3>
                              <div class="section-disc">
                                  <p>
                                      Since Al SHAALI MOTO launched in the UAE, we have seen the company consistently grow to become a key player in the automotive in UAE &amp; GCC countries, and our commitment to supporting businesses, governmental institutes, and owners.
                                  </p>
                                    <p>
                                     This success was achieved with the hard work and commitment of the entire Group, nevertheless; it wouldn't have been possible without the continuous support, praise, and demand for our trusted products by our current and prospective clients.
                                  </p>
                                     <p>
                                    We are committed to delivering state-of-the-art customer services and goods to individuals, and private and public sector companies to serve their customers. We take pride in that our services support and improve our client’s business network. 
                                  </p>
                                  <p>
                                   AL SHAALI MOTO is always keen to accomplish customers' requests and needs, and is known for its Corporate Social Responsibility initiatives in the region.
                                  </p>
                              </div>
                          </div>
                            <div class="col-lg-5">
                         <div class="product-item text-center wrap-owner">
                                      <figure class="product-image">
                                              <img src="{{ asset('assets/images/owner.png') }}" alt="">
                                      </figure>
                                      <div class="product-content">
                                          <h5>H.E. MARWAN AL SHAALI</h5>
                                      </div>
                                      <div class="tilte-own">
                                          <h3>CHAIRMAN &amp; FOUNDER</h3>
                                      </div>
                                  </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <section class="about-section pt-110">
          <div class="container">
              <div class="row align-items-center">
                  <div class="col-lg-6">
                      <div class="about-right-desc">
                          <div class="section-head">
                              <div class="title-divider-right">OUR LOCATIONS</div>
                              <h3 class="section-title">
                                  AREAS OF OPERATIONS &amp; 
                                  <span class="title-highlight-gradient">
                                      NETWORK
                                  </span>
                              </h3>
                              <p>
                                Al Shaali Moto over the years has successfully expanded its areas of operations throughout the GCC. from dubai to the kingdom of saudi arabia, kuwait and bharain.
                              </p>
                          </div>
                      </div>
                  </div>
                           <div class="col-lg-6">
                          <figure>
                              <img src="{{ asset('assets/images/map.jpg') }}" alt="">
                          </figure>
                  </div>
              </div>
          </div>
      </section>
                <!-- home progress counter  -->
      <!-- home charging process -->
      <section class="home-charging about-home-charging">
          <div class="container">
              <div class="section-head text-center">
                  <h3 class="section-title-heading">ALSHAALI MOTO GROUP <br>
                      <span class="title-highlight-gradient">SUBSIDIARIES</span>
                  </h3>
                  <p class="text-det">Over the years, Al Shaali Moto has expanded its range of exclusive distribution for world-class products such as CFMOTO, BAIC, LS2 and so much more.</p>
              </div>
              <div class="charging-procudure">
                  <div class="pattern-overlay"></div>
                  <div class="pattern-overlay"></div>
                  <div class="pattern-overlay"></div>
                  <div class="pattern-overlay"></div>
                  <div class="charge-step">
                     <a href="https://cfmoto-uae.com/" target="_blank">
                      <figure class="charging-step-img">
                          <img src="{{ asset('assets/images/g-1.png') }}" alt="">
                      </figure>
                  </a>
                      <div class="step-content">
                          <a href="https://cfmoto-uae.com/" target="_blank"><h5 class="step-content-title">CFMOTO</h5></a>
                          <p>In 2011, Al Shaali Moto been awarded to be the official dealer for CFMOTO brand </p>
                      </div>
                  </div>
                  <div class="charge-step">
                      <a href="https://www.alshaaliev.com/" target="_blank">
                      <figure class="charging-step-img">
                          <img src="{{ asset('assets/images/g-2.png') }}" alt="">
                      </figure>
                  </a>
                      <div class="step-content">
                          <a href="https://www.alshaaliev.com/" target="_blank"><h5 class="step-content-title">AL SHAALI EV</h5></a>
                          <p>Al Shaali Moto was formed in 2011. Our partnership with the best Golf Carts providers globally made us AL SHAALI</p>
                      </div>
                  </div>
                  <div class="charge-step">
                      <a href="https://baicuae.com/" target="_blank">
                      <figure class="charging-step-img">
                          <img src="{{ asset('assets/images/g-3.png') }}" alt="">
                      </figure>
                  </a>
                      <div class="step-content">
                           <a href="https://baicuae.com/" target="_blank"><h5 class="step-content-title">BAIC</h5></a>
                          <p>ALSHAALI MOTO was established in Dubai in 2011. AL SHAALI MOTO is the official distributor for BAIC cars in the UAE.</p>
                      </div>
                  </div>
                  <div class="charge-step">
                       <a href="https://www.ixmoto.com/" target="_blank">
                      <figure class="charging-step-img">
                          <img src="{{ asset('assets/images/g-4.png') }}" alt="">
                      </figure>
                  </a>
                      <div class="step-content">
                           <a href="https://www.ixmoto.com/" target="_blank"><h5 class="step-content-title">IXMOTO</h5></a>
                          <p>In 2020, we entered our business in motorcycles accessories</p>
                      </div>
                  </div>
              </div>
          </div>
      </section>
  </main>

  <div class="about-service-wrap bg-white">
   <div class="pattern-overlay circle-patten"></div>
   <div class="container">
       <div class="section-head">
           <div class="row no-gutters">
               <div class="col-lg-6">
                   <div class="title-divider-right">OUR Services</div>
                   <h3 class="section-title mb-0">
                       ALSHAALI MOTO MISSION
                   </h3>
                          <div class="section-disc">
                       <p>
                           ALSHAALI MOTO mission in UAE &amp; GCC countries markets is to provide state-of-the-art, the best products in the market and world-class customer service.
                       </p>
                   </div>
               </div>
               <div class="col-lg-6">
                   <div class="section-disc">
                        <p>
                           With this, we aim to provide our products and services by utilizing the latest technology, CRM systems, and digitalization, our staff, and technicians are well-trained and updated on the products we represent, using only genuine spare parts and accessories in our service centers and following the worldwide dealerships standards.
                       </p>
                   </div>
               </div>
           </div>
       </div>
       <div class="iconbox-container d-flex flex-wrap justify-content-center">
           <div class="iconbox-item-3 d-flex flex-wrap">
               <div class="iconbox-border d-flex align-items-center">
                   <div class="iconbox-icon">
                       <i aria-hidden="true" class="icon icon-car-1"></i>
                   </div>
                   <div class="iconbox-content">
                       <h5 class="inbox-title">VEHICLE MAINTENANCE</h5>
                   </div>
               </div>
           </div>
           <div class="iconbox-item-3 d-flex flex-wrap">
               <div class="iconbox-border d-flex align-items-center">
                   <div class="iconbox-icon">
                       <i aria-hidden="true" class="icon icon-money"></i>
                   </div>
                   <div class="iconbox-content">
                       <h5 class="inbox-title">QUALITY ASSURANCE</h5>
                   </div>
               </div>
           </div>
           <div class="iconbox-item-3 d-flex flex-wrap">
               <div class="iconbox-border d-flex align-items-center">
                   <div class="iconbox-icon">
                       <i aria-hidden="true" class="icon icon-support"></i>
                   </div>
                   <div class="iconbox-content">
                       <h5 class="inbox-title">CUSTOMER SERVICE</h5>
                   </div>
               </div>
           </div>
                   <div class="iconbox-item-3 d-flex flex-wrap">
               <div class="iconbox-border d-flex align-items-center">
                   <div class="iconbox-icon">
                       <i aria-hidden="true" class="icon icon-users"></i>
                   </div>
                   <div class="iconbox-content">
                       <h5 class="inbox-title">TRAINING &amp; DEVELOPMENT</h5>
                   </div>
               </div>
           </div>
                   <div class="iconbox-item-3 d-flex flex-wrap">
               <div class="iconbox-border d-flex align-items-center">
                   <div class="iconbox-icon">
                       <i aria-hidden="true" class="icon icon-cogwheel"></i>
                   </div>
                   <div class="iconbox-content">
                       <h5 class="inbox-title">GENUINE SPARE PARTS</h5>
                   </div>
               </div>
           </div>
                   <div class="iconbox-item-3 d-flex flex-wrap">
               <div class="iconbox-border d-flex align-items-center">
                   <div class="iconbox-icon">
                       <i aria-hidden="true" class="icon icon-tablet"></i>
                   </div>
                   <div class="iconbox-content">
                       <h5 class="inbox-title">DIGITALIZATION</h5>
                   </div>
               </div>
           </div>
       </div>
   </div>
</div>

<div data-component="footer-component" data-initialized="true" class="footer_component">
         <div data-v-5758fa05="" class="cf_footer">
      
            <div data-v-5758fa05="" class="cf_footer_nav">
               <div class="d-block pb-2 pb-md-5 mb2 mb-md-5 text-center" style="border-bottom: 1px solid #ccc;">
                  
               <span>                     <img src="{{ asset('assets/images/alshali-moto.png') }}" class="alshli-logo me-0 me-md-5"  alt=""></span>
       
               <span>                     <img src="{{ asset('assets/images/cfmoto-logo-block.png') }}" class="alshli-logo" alt=""></span>
               </div>
      
               <ul data-v-5758fa05="" class="footer_list p-0">
                  <li data-v-5758fa05="" class="footer_list_items">
                     <!----> 
                     <div data-v-5758fa05="" class="footer_list_items_link no_postcss_to_px">
                        <a data-v-5758fa05="" href="{{ route('productdetails') }}" class="footer_nav_item">
                           <span data-v-5758fa05="" class="link_name">CFORCE</span> <!---->
                        </a>
                        <a data-v-5758fa05="" href="{{ route('productdetails') }}" class="footer_nav_item">
                           <span data-v-5758fa05="" class="link_name">ZFORCE</span> <!---->
                        </a>
      
                        <a data-v-5758fa05="" href="{{ route('productdetails') }}" class="footer_nav_item">
                           <span data-v-5758fa05="" class="link_name">UFORCE</span> <!---->
                        </a>
      
                        <a data-v-5758fa05="" href="{{ route('productdetails') }}" class="footer_nav_item">
                           <span data-v-5758fa05="" class="link_name">MOTORCYCLES</span> <!---->
                        </a>
                     </div>
                     <!---->
                  </li>
                  <li data-v-5758fa05="" class="footer_list_items">
                     <!----> 
                     <div data-v-5758fa05="" class="footer_list_items_link no_postcss_to_px">
                        <a data-v-5758fa05="" href="{{ route('companyoverview') }}" class="footer_nav_item">
                           <span data-v-5758fa05="" class="link_name">About CFMOTO</span> <!---->
                        </a>
                        <a data-v-5758fa05="" href="{{ route('racing') }}" class="footer_nav_item">
                           <span data-v-5758fa05="" class="link_name">CFMOTO Racing</span> <!---->
                        </a>
                        <a data-v-5758fa05="" href="{{ route('ride') }}" class="footer_nav_item">
                           <span data-v-5758fa05="" class="link_name">CFMOTO Ride
                           </span> <!---->
                        </a>
                     </div>
                     <!---->
                  </li>
                  <li data-v-5758fa05="" class="footer_list_items">
                     <!----> 
                     <div data-v-5758fa05="" class="footer_list_items_link no_postcss_to_px">
                        <a data-v-5758fa05="" href="{{ route('news') }}" class="footer_nav_item">
                           <span data-v-5758fa05="" class="link_name">News</span> <!---->
                        </a>
                        <a data-v-5758fa05="" href="{{ route('contactus') }}" class="footer_nav_item">
                           <span data-v-5758fa05="" class="link_name">Contact Us</span> <!---->
                        </a>
      
      
                     </div>
                     <!---->
                  </li>
                  <li data-v-5758fa05="" class="footer_list_items">
                     <!----> 
                     Subscribe
                     <div data-v-5758fa05="" class="pc mt-3">
                        <div data-v-5758fa05="" class="cf_footer_subscribe">
                           <input data-v-5758fa05="" placeholder="subscribe to the news via email" class=""> <button data-v-5758fa05="" class="subscribe_btn"><img data-v-5758fa05="" src="{{ asset('assets/images/right_arrows.png') }}" alt=""></button> <!----> 
                           <div data-v-5758fa05="" class="cf_footer_subscribe_dialog">
                              <div data-v-5758fa05="" class="cf_footer_subscribe_dialog_wrap">
                                 <div data-v-5758fa05="" class="cf_footer_subscribe_dialog_title">
                                    Subscribe to our news
                                 </div>
                                 <div data-v-5758fa05="" class="cf_footer_subscribe_dialog_close"><img data-v-5758fa05="" src="{{ asset('assets/images/nav_close.png') }}" alt=""></div>
                                 <div data-v-5758fa05="" class="form clearfix">
                                    <form data-v-5758fa05="" class="el-form el-form--label-top">
                                       <div data-v-5758fa05="" class="item-right el-col el-col-12">
                                          <div data-v-5758fa05="" class="el-form-item is-required">
                                             <label for="firstName" class="el-form-item__label">First name*</label>
                                             <div class="el-form-item__content">
                                                <div data-v-5758fa05="" class="el-input">
                                                   <!----><input type="text" autocomplete="off" placeholder="Please enter" class="el-input__inner"><!----><!----><!----><!---->
                                                </div>
                                                <!---->
                                             </div>
                                          </div>
                                       </div>
                                       <div data-v-5758fa05="" class="item-left el-col el-col-12">
                                          <div data-v-5758fa05="" class="el-form-item is-required">
                                             <label for="lastName" class="el-form-item__label">Last name*</label>
                                             <div class="el-form-item__content">
                                                <div data-v-5758fa05="" class="el-input">
                                                   <!----><input type="text" autocomplete="off" placeholder="Please enter" class="el-input__inner"><!----><!----><!----><!---->
                                                </div>
                                                <!---->
                                             </div>
                                          </div>
                                       </div>
                                       <div data-v-5758fa05="" class="el-col el-col-12">
                                          <div data-v-5758fa05="" class="el-form-item">
                                             <label for="email" class="el-form-item__label">Email*</label>
                                             <div class="el-form-item__content">
                                                <div data-v-5758fa05="" class="el-input">
                                                   <!----><input type="text" autocomplete="off" placeholder="Please enter" class="el-input__inner"><!----><!----><!----><!---->
                                                </div>
                                                <!---->
                                             </div>
                                          </div>
                                       </div>
                                       <div data-v-5758fa05="" class="item-left el-col el-col-12">
                                          <div data-v-5758fa05="" class="user_type">
                                             <div data-v-5758fa05="" class="el-form-item is-required">
                                                <label for="userType" class="el-form-item__label">User Type*</label>
                                                <div class="el-form-item__content">
                                                   <div data-v-5758fa05="" class="el-select">
                                                      <!---->
                                                      <div class="el-input el-input--suffix">
                                                         <!----><input type="text" readonly="readonly" autocomplete="off" placeholder="Please select" class="el-input__inner"><!---->
                                                         <span class="el-input__suffix">
                                                            <span class="el-input__suffix-inner">
                                                               <i class="el-select_caret el-input_icon el-icon-arrow-up"></i><!----><!----><!----><!----><!---->
                                                            </span>
                                                            <!---->
                                                         </span>
                                                         <!----><!---->
                                                      </div>
                                                      <div class="el-select-dropdown el-popper" style="display: none;">
                                                         <div class="el-scrollbar" style="">
                                                            <div class="el-select-dropdown_wrap el-scrollbar_wrap">
                                                               <ul class="el-scrollbar_view el-select-dropdown_list">
                                                                  <!---->
                                                                  <li data-v-5758fa05="" class="el-select-dropdown__item"><span>CFMOTO consumer</span></li>
                                                                  <li data-v-5758fa05="" class="el-select-dropdown__item"><span>Media</span></li>
                                                                  <li data-v-5758fa05="" class="el-select-dropdown__item"><span>Business partner-Distributor</span></li>
                                                                  <li data-v-5758fa05="" class="el-select-dropdown__item"><span>Business partner-dealer</span></li>
                                                                  <li data-v-5758fa05="" class="el-select-dropdown__item"><span>Others</span></li>
                                                               </ul>
                                                            </div>
                                                            <div class="el-scrollbar__bar is-horizontal">
                                                               <div class="el-scrollbar__thumb" ></div>
                                                            </div>
                                                            <div class="el-scrollbar__bar is-vertical">
                                                               <div class="el-scrollbar__thumb" ></div>
                                                            </div>
                                                         </div>
                                                         <!---->
                                                      </div>
                                                   </div>
                                                   <!---->
                                                </div>
                                             </div>
                                             <!---->
                                          </div>
                                       </div>
                                       <div data-v-5758fa05="" class="el-col el-col-24">
                                          <div data-v-5758fa05="" class="email-statement">
                                             <div data-v-5758fa05="" class="el-form-item">
                                                <!---->
                                                <div class="el-form-item__content">
                                                   <label data-v-5758fa05="" class="el-checkbox">
                                                      <span class="el-checkbox_input"><span class="el-checkboxinner"></span><input type="checkbox" aria-hidden="false" class="el-checkbox_original" value=""></span>
                                                      <span class="el-checkbox__label">
                                                         <div data-v-5758fa05="">
                                                            By submitting, I agree to subscribe to news and marketing email. <br>For more details, please view our  <a data-v-52b96a7e="" href="{{ route('privacy') }}">privacy policy</a> , 
                                                            <a data-v-52b96a7e="" href="{{ route('marketing') }}">
                                                               marketing communications.<!-- a-->
                                                            </a>
                                                         </div>
                                                         <!---->
                                                      </span>
                                                   </label>
                                                   <!---->
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div data-v-5758fa05="" class="el-col el-col-24">
                                          <div data-v-5758fa05="" class="new-dialog-footer">
                                             <div data-v-5758fa05="" class="el-form-item">
                                                <!---->
                                                <div class="el-form-item__content">
                                                   <button data-v-5758fa05="" type="button" class="el-button subscribe el-button--default">
                                                      <!----><!---->
                                                      <span>
                                                         Subscribe
                                                         <!----> <img data-v-5758fa05="" src="{{ asset('assets/images/right_arrows.png') }}" alt="" class="btn_hover">
                                                      </span>
                                                   </button>
                                                   <!---->
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </form>
                                 </div>
                              </div>
                           </div>
                        </div>
                              <div data-v-5758fa05="" class="cf_footer_outconnection"><a data-v-5758fa05="" target="_blank" href="https://business.facebook.com/cfmotouaeandgcc/" class="flex"><img data-v-5758fa05="" src="{{ asset('assets/images/facebook.png') }}" alt="" class="normal"> <img data-v-5758fa05="" src="{{ asset('assets/images/facebook-.png') }}" alt="" class="hover"></a><a data-v-5758fa05="" target="_blank" href="https://www.youtube.com/channel/UCEF6cHkS5uOGhuIKGLCUp8w" class="flex"><img data-v-5758fa05="" src="{{ asset('assets/images/youtube.png') }}" alt="" class="normal"> <img data-v-5758fa05="" src="{{ asset('assets/images/youtube-.png') }}" alt="" class="hover"></a><a data-v-5758fa05="" target="_blank" href="https://www.instagram.com/cfmoto_gcc/?utm_medium=copy_link" class="flex"><img data-v-5758fa05="" src="{{ asset('assets/images/instagram.png') }}" alt="" class="normal"> <img data-v-5758fa05="" src="{{ asset('assets/images/instagram-.png') }}" alt="" class="hover"></a><a data-v-5758fa05="" target="_blank" href="https://ae.linkedin.com/in/cfmoto-uae-038b98202" class="flex"><img data-v-5758fa05="" src="{{ asset('assets/images/linkedin-white.png') }}" alt="" class="normal"> <img data-v-5758fa05="" src="{{ asset('assets/images/linkedin-white.png') }}" alt="" class="hover"></a>               </div>
                  </li>
               </ul>
               <div data-v-5758fa05="" class="mobile subscribe_input_wrap">
                  <a data-v-5758fa05="" href="{{ route('news') }}" class="news">News</a> 
                  <div data-v-5758fa05="" class="cf_footer_subscribe">
                     <input data-v-5758fa05="" placeholder="subscribe to the news via email" class=""> <button data-v-5758fa05="" class="subscribe_btn"><img data-v-5758fa05="" src="{{ asset('assets/images/right_arrows.png') }}" alt=""></button> <!----> 
                     <div data-v-5758fa05="" class="cf_footer_subscribe_dialog">
                        <div data-v-5758fa05="" class="cf_footer_subscribe_dialog_wrap">
                           <div data-v-5758fa05="" class="cf_footer_subscribe_dialog_title">
                              Subscribe to our news
                           </div>
                           <div data-v-5758fa05="" class="cf_footer_subscribe_dialog_close"><img data-v-5758fa05="" src="{{ asset('assets/images/nav_close.png') }}" alt=""></div>
                           <div data-v-5758fa05="" class="form clearfix">
                              <form data-v-5758fa05="" class="el-form el-form--label-top">
                                 <div data-v-5758fa05="" class="item-right el-col el-col-12">
                                    <div data-v-5758fa05="" class="el-form-item is-required">
                                       <label for="firstName" class="el-form-item__label">First name*</label>
                                       <div class="el-form-item__content">
                                          <div data-v-5758fa05="" class="el-input">
                                             <!----><input type="text" autocomplete="off" placeholder="Please enter" class="el-input__inner"><!----><!----><!----><!---->
                                          </div>
                                          <!---->
                                       </div>
                                    </div>
                                 </div>
                                 <div data-v-5758fa05="" class="item-left el-col el-col-12">
                                    <div data-v-5758fa05="" class="el-form-item is-required">
                                       <label for="lastName" class="el-form-item__label">Last name*</label>
                                       <div class="el-form-item__content">
                                          <div data-v-5758fa05="" class="el-input">
                                             <!----><input type="text" autocomplete="off" placeholder="Please enter" class="el-input__inner"><!----><!----><!----><!---->
                                          </div>
                                          <!---->
                                       </div>
                                    </div>
                                 </div>
                                 <div data-v-5758fa05="" class="el-col el-col-12">
                                    <div data-v-5758fa05="" class="el-form-item">
                                       <label for="email" class="el-form-item__label">Email*</label>
                                       <div class="el-form-item__content">
                                          <div data-v-5758fa05="" class="el-input">
                                             <!----><input type="text" autocomplete="off" placeholder="Please enter" class="el-input__inner"><!----><!----><!----><!---->
                                          </div>
                                          <!---->
                                       </div>
                                    </div>
                                 </div>
                                 <div data-v-5758fa05="" class="item-left el-col el-col-12">
                                    <div data-v-5758fa05="" class="user_type">
                                       <div data-v-5758fa05="" class="el-form-item is-required">
                                          <label for="userType" class="el-form-item__label">User Type*</label>
                                          <div class="el-form-item__content">
                                             <div data-v-5758fa05="" class="el-select">
                                                <!---->
                                                <div class="el-input el-input--suffix">
                                                   <!----><input type="text" readonly="readonly" autocomplete="off" placeholder="Please select" class="el-input__inner"><!---->
                                                   <span class="el-input__suffix">
                                                      <span class="el-input__suffix-inner">
                                                         <i class="el-select_caret el-input_icon el-icon-arrow-up"></i><!----><!----><!----><!----><!---->
                                                      </span>
                                                      <!---->
                                                   </span>
                                                   <!----><!---->
                                                </div>
                                                <div class="el-select-dropdown el-popper" style="display: none;">
                                                   <div class="el-scrollbar" style="">
                                                      <div class="el-select-dropdown_wrap el-scrollbar_wrap" style="margin-bottom: -17px; margin-right: -17px;">
                                                         <ul class="el-scrollbar_view el-select-dropdown_list">
                                                            <!---->
                                                            <li data-v-5758fa05="" class="el-select-dropdown__item"><span>CFMOTO consumer</span></li>
                                                            <li data-v-5758fa05="" class="el-select-dropdown__item"><span>Media</span></li>
                                                            <li data-v-5758fa05="" class="el-select-dropdown__item"><span>Business partner-Distributor</span></li>
                                                            <li data-v-5758fa05="" class="el-select-dropdown__item"><span>Business partner-dealer</span></li>
                                                            <li data-v-5758fa05="" class="el-select-dropdown__item"><span>Others</span></li>
                                                         </ul>
                                                      </div>
                                                      <div class="el-scrollbar__bar is-horizontal">
                                                         <div class="el-scrollbar__thumb" ></div>
                                                      </div>
                                                      <div class="el-scrollbar__bar is-vertical">
                                                         <div class="el-scrollbar__thumb" ></div>
                                                      </div>
                                                   </div>
                                                   <!---->
                                                </div>
                                             </div>
                                             <!---->
                                          </div>
                                       </div>
                                       <!---->
                                    </div>
                                 </div>
                                 <div data-v-5758fa05="" class="el-col el-col-24">
                                    <div data-v-5758fa05="" class="new-dialog-footer">
                                       <div data-v-5758fa05="" class="el-form-item">
                                          <!---->
                                          <div class="el-form-item__content">
                                             <button data-v-5758fa05="" type="button" class="el-button subscribe el-button--default">
                                                <!----><!---->
                                                <span>
                                                   Subscribe
                                                   <!----> <img data-v-5758fa05="" src="{{ asset('assets/images/right_arrows') }}'" alt="" class="btn_hover">
                                                </span>
                                             </button>
                                             <!---->
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div data-v-5758fa05="" class="el-col el-col-24">
                                    <div data-v-5758fa05="" class="email-statement">
                                       <div data-v-5758fa05="" class="el-form-item">
                                          <!---->
                                          <div class="el-form-item__content">
                                             <label data-v-5758fa05="" class="el-checkbox">
                                                <span class="el-checkbox_input"><span class="el-checkboxinner"></span><input type="checkbox" aria-hidden="false" class="el-checkbox_original" value=""></span>
                                                <span class="el-checkbox__label">
                                                   <div data-v-5758fa05="">
                                                      By submitting, I agree to subscribe to news and marketing email. <br>For more details, please view our  <a data-v-52b96a7e="" href="{{ route('privacy') }}">privacy policy</a> , 
                                                      <a data-v-52b96a7e="" href="{{ route('marketing') }}">
                                                         marketing communications.<!-- a-->
                                                      </a>
                                                   </div>
                                                   <!---->
                                                </span>
                                             </label>
                                             <!---->
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div data-v-5758fa05="" class="cf_footer_language_social">
                     <div data-v-5758fa05="" class="cf_footer_outconnection"><a data-v-5758fa05="" target="_blank" href="https://www.facebook.com/CFMOTOOFFICIAL" class="flex"><img data-v-5758fa05="" src="{{ asset('assets/images/facebook3.png') }}" alt="" class="normal"> <img data-v-5758fa05="" src="{{ asset('assets/images/facebook-.png') }}'" alt="" class="hover"></a><a data-v-5758fa05="" target="_blank" href="https://www.youtube.com/channel/UC2qMgbLZ-ODtz0HzKaPnCAQ" class="flex"><img data-v-5758fa05="" src="{{ asset('assets/images/youtube.png') }}" alt="" class="normal"> <img data-v-5758fa05="" src="{{ asset('assets/images/youtube-.png') }}" alt="" class="hover"></a><a data-v-5758fa05="" target="_blank" href="https://www.instagram.com/cfmotoofficial/" class="flex"><img data-v-5758fa05="" src="{{ asset('assets/images/instagram.png') }}" alt="" class="normal"> <img data-v-5758fa05="" src="{{ asset('assets/images/instagram-.png') }}" alt="" class="hover"></a><a data-v-5758fa05="" target="_blank" href="https://www.linkedin.com/company/cfmoto-powersports-inc/" class="flex"><img data-v-5758fa05="" src="{{ asset('assets/images/linkedin-white.png') }}" alt="" class="normal"> <img data-v-5758fa05="" src="{{ asset('assets/images/linkedin-white.png') }}" alt="" class="hover"></a><a data-v-5758fa05="" target="_blank" href="https://www.tiktok.com/@cfmoto_official" class="flex"><img data-v-5758fa05="" src="{{ asset('assets/images/tiktok-black.png') }}" alt="" class="normal"> <img data-v-5758fa05="" src="{{ asset('assets/images/tiktok-white') }}'" alt="" class="hover"></a></div>
                     <div data-v-5758fa05="" class="cf_footer_language">
                        <div data-v-5758fa05="" class="cf_footer_language_default"><img data-v-5758fa05="" class="cf_footer_language_icon"> <span data-v-5758fa05="" class="cf_footer_language_text"></span></div>
                        <div data-v-5758fa05="" class="ul-wrap">
                           <div data-v-5758fa05="" class="drop-down-content">
                              <div data-v-5758fa05="" class="ul-title"><span data-v-5758fa05="" class="close"></span></div>
                              <ul data-v-5758fa05=""></ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div data-v-5758fa05="" class="cf_footer_bottom justify-content-center">
               <div data-v-5758fa05="" class="footer_left">
                  <div data-v-5758fa05="" class="footer_info no_postcss_to_px "><a data-v-5758fa05="" href="#" class="footer_link">
                     © Copyright 2024 all Rights Reserved. Designed by <a href="https://www.tomsher.com" target="_blank">Tomsher</a>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="whatsapp-action">
   <div class="action" onclick="actionToggle();">

      <span><img src="assets/images/whatsapp.png" alt=""></span>
  
      <ul class="all-whatsapp">
  
        <li> <a href="#"> 
              <img src="assets/images/uae-flag.png" alt="">
              <img src="assets/images/whatsapp.png" alt="">
              +971 4 320 0009

        </a></li>
        <li> <a href="#"> 
         <img src="assets/images/ksa-flag.png" alt="">
         <img src="assets/images/whatsapp.png" alt="">
         +971 4 320 0009

   </a></li>
   <li> <a href="#"> 
      <img src="assets/images/kuwait-flag.png" alt="">
      <img src="assets/images/whatsapp.png" alt="">
      +971 4 320 0009

</a></li>
  
      </ul>
 <script src="{{ asset('assets/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.js') }}"></script>
      <script src="{{ asset('assets/js/AppMeasurement.min.js') }}"></script>
      <script src="{{ asset('assets/js/AppMeasurement_Module_ActivityMap.min.js') }}"></script>
      <script src="{{ asset('assets/js/clientlib-all.lc-202401081956-lc.min.92f1e1eb72923682eeedfbc16eb72d32.js') }}"></script>
      <script src="{{ asset('assets/js/jquery.hiSlider.js') }}"></script>
      <script src="{{ asset('assets/js/jquery.scrollbar.js') }}"></script>
      <script src="{{ asset('assets/js/launch-b43d331c5522-development.min.js') }}"></script>
      <script src="{{ asset('assets/js/laydate.js') }}"></script>
      <script src="{{ asset('assets/js/main.js') }}"></script>
      <script src="{{ asset('assets/js/owl.carousel.js') }}"></script>
      <script src="{{ asset('assets/js/scrolltopcontrol.js') }}"></script>
      <script src="{{ asset('assets/js/tc.js') }}"></script>
      <script src="{{ asset('assets/js/video.min.js') }}"></script>
      {{-- <script src="{{ asset('assets/js/jquery-3.2.1.min.js') }}"></script> --}}
      <script src='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/js/swiper.min.js'></script>

      {{-- <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateInit" ></script>
      <script type="text/javascript">
      googleTranslateInit();
        function googleTranslateInit() {
          new google.translate.TranslateElement(
            { pageLanguage: 'ar' },
            'google_translate_button'
          );
        }
      </script> --}}
      {{-- <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
      <script type="text/javascript">
        function googleTranslateElementInit() {
          new google.translate.TranslateElement({pageLanguage: 'ar'}, 'google_translate_element');
        }
        </script> --}}
        
      <script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
      <script>
          function googleTranslateElementInit() {
              new google.translate.TranslateElement(
                  {
                  pageLanguage: 'en',
                  includedLanguages: 'ar',
                  layout: google.translate.TranslateElement.InlineLayout.SIMPLE,
                  autoDisplay: false
                },
                  'google_translate_button'
              );
          }

          window.setInterval(function(){
              var lang = $('html')[0].lang;
              $(".lang-select").val(lang);
          },3000);

          function setCookie(key, value, expiry) {
              var expires = new Date();
              expires.setTime(expires.getTime() + (15 * 60 * 1000)); 
              // document.cookie = key + '=' + value + ';expires=' + expires.toUTCString();
              document.cookie = key + '=' + value + '; domain=tomsher.co; path=/;expires=' + expires.toUTCString()+'; secure';
              document.cookie = key + '=' + value + '; path=/; expires=' + expires.toUTCString() +'; secure';
          }
          

          $('.lang-select').on('change',function() {
              setCookie('googtrans','',0);
              var theLang = $(this).val();
              $('.goog-te-combo').val(theLang);
              if(theLang == 'ar'){
                // window.location = '#googtrans(en|ar)';
                setCookie('googtrans', '/en/ar', 1);
              }else{
                // window.location = '#googtrans(en|en)';
                setCookie('googtrans', '/en/en', 1);
              }
              window.location.reload();
          });
        
      </script>
      
      
      <script src="{{ asset('assets/js/webslidemenu.js') }}"></script>
      <script type='text/javascript'>
         $(document).ready(function () {
           $("a[data-theme]").click(function () {
             $("head link#theme").attr("href", $(this).data("theme"));
             $(this).toggleClass('active').siblings().removeClass('active');
           });
           $("a[data-effect]").click(function () {
             $("head link#effect").attr("href", $(this).data("effect"));
             $(this).toggleClass('active').siblings().removeClass('active');
           });
         
         });
         
         var swiper = new Swiper('.product-slider', {
            spaceBetween: 30,
            effect: 'fade',
            // initialSlide: 2,
            loop: false,
            navigation: {
                nextEl: '.next',
                prevEl: '.prev'
            },
            // mousewheel: {
            //     // invert: false
            // },
            on: {
                init: function(){
                    var index = this.activeIndex;
         
                    var target = $('.product-slider__item').eq(index).data('target');
         
                    console.log(target);
         
                    $('.product-img__item').removeClass('active');
                    $('.product-img__item#'+ target).addClass('active');
                }
            }
         
         });
         
         swiper.on('slideChange', function () {
            var index = this.activeIndex;
         
            var target = $('.product-slider__item').eq(index).data('target');
         
            console.log(target);
         
            $('.product-img__item').removeClass('active');
            $('.product-img__item#'+ target).addClass('active');
         
            if(swiper.isEnd) {
                $('.prev').removeClass('disabled');
                $('.next').addClass('disabled');
            } else {
                $('.next').removeClass('disabled');
            }
         
            if(swiper.isBeginning) {
                $('.prev').addClass('disabled');
            } else {
                $('.prev').removeClass('disabled');
            }
         });
         
         $(".js-fav").on("click", function() {
            $(this).find('.heart').toggleClass("is-active");
         });
         
         
         (function ($) {
            $(function () {
              $(document).off('click.bs.tab.data-api', '[data-hover="tab"]');
              $(document).on('mouseenter.bs.tab.data-api', '[data-toggle="tab"], [data-hover="tab"]', function () {
                $(this).tab('show');
              });
            });
          })(jQuery);
      </script>
      <script>
         $(document).ready(function(){
            $('.nav-tabs > li > a').hover(function() {
                 $(this).tab('show');
            });
         })

         $(document).ready(function(){
            tippy('.tippy', {
              theme: 'light',
              size: 'big',
              arrow: true
            })
        });
      </script>
    
    @stack('footer')

    </body>
</html>