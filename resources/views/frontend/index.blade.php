@extends('layouts.app.main')
@section('content')
<div class="home-banner-component">
         <div data-component="home-banner-component" data-initialized="true" class="home_banner_component">
            <div class="pin-spacer">
               <div data-v-592e88dc="" class="cf_banner page_guide_banner" >
                  <div data-v-592e88dc="" class="banner_swiper_container banner_prev">
                     <div data-v-592e88dc="" class="swiper-container banner_swiper_box swiper-container-initialized swiper-container-horizontal">
                        <div class="swiper-wrapper" >
                           <div data-v-592e88dc="" class="swiper-slide swiper-slide-active" style="width: 1903px;">
                              <div data-v-592e88dc="" class="banner_player">
                                 <video data-v-592e88dc="" preload="auto" webkit-playsinline="true" x-webkit-airplay="true" playsinline="" muted="muted" loop="loop" autoplay="autoplay" x5-playsinline="true">
                                    <source data-v-592e88dc="" src="assets/video/Home Banner V2.mp4" type="video/mp4">
                                    <source data-v-592e88dc="" src="assets/video/Home Banner V2.mp4" type="video/ogg">
                                 </video>
                              </div>
                              <div data-v-592e88dc="" class="video_progress">
                                 <svg data-v-592e88dc="">
                                    <circle data-v-592e88dc="" cx="16" cy="16" r="14.5" style="stroke-dashoffset: -16.9581;"></circle>
                                 </svg>
                                 <a data-v-592e88dc="" href="#" class="video_play stopBtn"><img data-v-592e88dc="" src="assets/images/stop.png" alt="" class="stopBtn"></a>
                              </div>
                           </div>
                        </div>
                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                     </div>
                     <div data-v-592e88dc="" class="banner_scroll">
                        <p data-v-592e88dc="" class="banner_scroll_text">Scroll</p>
                        <picture data-v-592e88dc="">
                           <source data-v-592e88dc="" media="(max-width:1080px)" srcset="assets/images/banner/scroll_mobile.png">
                           <img data-v-592e88dc="" src="assets/images/scroll_new.png" alt="img" class="cf_banner_scroll">
                        </picture>
                     </div>
                     <!---->
                  </div>
                  <div data-v-592e88dc="" class="custom_cursor" style="display: none; top: 434px; left: 347px;">
                     Prev
                  </div>
               </div>
            </div>
         </div>
      </div>




      <div class="home-category-component">
         <div class="wrapper">
            <div class="content2">
               <div class="bg-shape">
                  <img src="assets/images/rotate-image.jpg" alt="">
               </div>
               <div class="product-img">
                  <div class="product-img__item" id="img1">
                     <img src="assets/images/MY2024_UFORCE_1000_XL_Desert_Tan_Right.png" alt="star wars" class="product-img__img">
                  </div>
                  <div class="product-img__item" id="img2">
                     <img src="assets/images/MY2024_ZFORCE_950_SPORT_Magma_Red_Right (1).png" alt="star wars" class="product-img__img">
                  </div>
                  <div class="product-img__item" id="img3">
                     <img src="assets/images/MY2024_UFORCE_1000_XL_Desert_Tan_Right (2).png" alt="star wars" class="product-img__img">
                  </div>
                  <div class="product-img__item" id="img4">
                     <img src="assets/images/MY2024_UFORCE_1000_XL_Desert_Tan_Right.png" alt="star wars" class="product-img__img">
                  </div>
               </div>
               <div class="product-slider">
                  <button class="prev disabled">
                     <span class="icon">
                        <svg class="icon icon-arrow-right">
                           <use xlink:href="#icon-arrow-left"></use>
                        </svg>
                     </span>
                  </button>
                  <button class="next">
                     <span class="icon">
                        <svg class="icon icon-arrow-right">
                           <use xlink:href="#icon-arrow-right"></use>
                        </svg>
                     </span>
                  </button>
                  <div class="product-slider__wrp swiper-wrapper">
                     <div class="product-slider__item swiper-slide" data-target="img4">
                        <div class="product-slider__card">
                           <div class="product-slider__content">
                              <h1 class="product-slider__title">
                                 For work, recreation and adventure
                              </h1>
                              <p>Powerful lineups to meet diversified demands</p>
                           </div>
                        </div>
                     </div>
                     <div class="product-slider__item swiper-slide" data-target="img1">
                        <div class="product-slider__card">
                           <div class="product-slider__content">
                              <h1 class="product-slider__title">
                                 IMPERIAL  ARMY’S <br> TIE FIGHTER
                              </h1>
                           </div>
                        </div>
                     </div>
                     <div class="product-slider__item swiper-slide" data-target="img2">
                        <div class="product-slider__card">
                           <div class="product-slider__content">
                              <h1 class="product-slider__title">
                                 KYLO REN'S <br> LIGHTSABER
                              </h1>
                           </div>
                        </div>
                     </div>
                     <div class="product-slider__item swiper-slide" data-target="img3">
                        <div class="product-slider__card">
                           <div class="product-slider__content">
                              <h1 class="product-slider__title">
                                 IMPERIAL ARMY'S <br>
                                 DEATH STAR
                              </h1>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <svg class="hidden" hidden>
            <symbol id="icon-arrow-left" viewBox="0 0 32 32">
               <path d="M0.704 17.696l9.856 9.856c0.896 0.896 2.432 0.896 3.328 0s0.896-2.432 0-3.328l-5.792-5.856h21.568c1.312 0 2.368-1.056 2.368-2.368s-1.056-2.368-2.368-2.368h-21.568l5.824-5.824c0.896-0.896 0.896-2.432 0-3.328-0.48-0.48-1.088-0.704-1.696-0.704s-1.216 0.224-1.696 0.704l-9.824 9.824c-0.448 0.448-0.704 1.056-0.704 1.696s0.224 1.248 0.704 1.696z"></path>
            </symbol>
            <symbol id="icon-arrow-right" viewBox="0 0 32 32">
               <path d="M31.296 14.336l-9.888-9.888c-0.896-0.896-2.432-0.896-3.328 0s-0.896 2.432 0 3.328l5.824 5.856h-21.536c-1.312 0-2.368 1.056-2.368 2.368s1.056 2.368 2.368 2.368h21.568l-5.856 5.824c-0.896 0.896-0.896 2.432 0 3.328 0.48 0.48 1.088 0.704 1.696 0.704s1.216-0.224 1.696-0.704l9.824-9.824c0.448-0.448 0.704-1.056 0.704-1.696s-0.224-1.248-0.704-1.664z"></path>
            </symbol>
         </svg>
      </div>

      
      <div class="headquarters-RD-component">
         <div data-component="headquarters-rd-component" data-initialized="true" class="headquarters_rd_component">
            <div data-v-2c06fea9="" id="headquarters_R_D" class="headquarters_R_D page-guide page-guide-num2">
               <div data-v-2c06fea9="" class="R_D">
                  <div data-v-2c06fea9="" class="description no_postcss_to_px w-75">
<div class="row align-items-center">
   <div class="col-md-4">
      <div><img data-v-2c06fea9="" src="assets/images/moto-icon.png" alt="img"></div>
   </div>
   <div class="col-md-8">
      <h2 class="mb-3">About Us</h2>
      <p style="font-size: 20px; line-height: 35px;">Al Shaali Moto was formed in 2011 introducing On-hand and Off-road Motorcycles such as ATV, UTV, Side by Side, Quad Bike, Sports Boat, Kayaks and Electric Vehicles such as luxury Golf Cart, Electric Club Cart, Resort Cart Utility Vehicle, and Commercial Golf cart, Scooter, Mobility, Electric hummers (HX, HXT, HXT Limo), Electric Classic Cars and Golf Trolleys in all over UAE and GCC. </p>
      <a href="{{ route('companyoverview') }}" class="btn btn-sumbit mt-2">Read More</a>
      
   </div>

   </div>
</div>



          

               </div>
            </div>
         </div>
      </div>



      <div class="home-video-component">
         <div class="home_video_component" data-component="home-video-component">
            <homevideocomponent video="[{&#34;videoBackground&#34;:&#34;&#34;,&#34;videoImg&#34;:&#34;assets/images/CFMOTO RACING 2024 pc.jpg&#34;,&#34;title&#34;:&#34;CFMOTO RACING Ready for 2024&#34;,&#34;imgUrl&#34;:&#34;assets/images/88d1fd819d672c5bd24c8949ca8cb32.jpg&#34;,&#34;describe_info&#34;:&#34;CFMOTO factory team for Moto3 Racing is always our passion, as well as the way we share. More Fun with you. Stay close with our challenge in the championship.&#34;,&#34;moreButton&#34;:&#34;Learn More&#34;,&#34;moreLink&#34;:&#34;/content/cfmoto/global/racing/cfmoto-moto3&#34;},{&#34;videoBackground&#34;:&#34;assets/video/车队.mp4&#34;,&#34;videoImg&#34;:&#34;&#34;,&#34;title&#34;:&#34;CFMOTO Thunder Racing Team&#34;,&#34;imgUrl&#34;:&#34;assets/images/20220421_450SR_moto3.png&#34;,&#34;describe_info&#34;:&#34;CFMOTO THUNDER RACING TEAM has always been actively involved in Rally Raid Championships worldwide and recerived a lot of attention during the past years. The mission will be continued and we will carry on fighting. &lt;br/>&lt;br/> Please follow our challenge calender and social updates.&#34;,&#34;moreButton&#34;:&#34;Learn More&#34;,&#34;moreLink&#34;:&#34;/content/cfmoto/global/racing/cfmoto-team&#34;}]"/>
         </div>
      </div>
      <div class="home-news-component">
         <div data-component="home-news-component" data-initialized="true" class="home_news_component">
            <div data-v-00f05126="" class="cf_related">
               <div data-v-00f05126="" class="cf_related_container">
                  <!----> 
                  <div data-v-00f05126="" class="related_container_top">
                     <div data-v-00f05126="" class="related_container_info">
                        <p data-v-00f05126="" class="info_date" >
                           Jan 30, 2024
                        </p>
                        <h1 data-v-00f05126="" class="info_title" >
                           CFMOTO and Aspar Team will fight together for the Moto2 and Moto3 titles
                        </h1>
                        <p data-v-00f05126="" class="info_subhead no_postcss_to_px" >
                           CFMOTO Aspar Racing Team will fight for the podiums and victorys in Moto2 and Moto3
                        </p>
                        <a data-v-00f05126="" href="{{ route('news') }}" class="related_info_more flex btn_hover no_postcss_to_px" ><span data-v-00f05126="">Learn more</span> <img data-v-00f05126="" src="assets/images/right_arrows.png" alt="img"></a> 
                        <div data-v-00f05126="" class="related_bg_text" >
                           News Information
                        </div>
                     </div>
                     <div data-v-00f05126="" class="related_container_img" >
                        <a data-v-00f05126="" href="{{ route('news') }}" class="related_container_items_graphic">
                           <div data-v-00f05126="" class="imgBox"><img data-v-00f05126="" src="assets/images/0 (9).jpg" alt="img"></div>
                           <div data-v-00f05126="" class="items_graphic_pic_id">01</div>
                        </a>
                     </div>
                  </div>
                  <div data-v-00f05126="" class="related_container_bottom" >
                     <!---->
                     <div data-v-00f05126="" class="related_container_items">
                        <a data-v-00f05126="" href="{{ route('news') }}" class="related_container_items_graphic">
                           <div data-v-00f05126="" class="items_graphic_pic">
                              <div data-v-00f05126="" class="imgBox"><img data-v-00f05126="" src="assets/images/5th.jpg" alt="img"></div>
                              <div data-v-00f05126="" class="items_graphic_pic_id">
                                 02
                              </div>
                           </div>
                           <p data-v-00f05126="" class="no_postcss_to_px">Perfect Conclusion With a ranking of 5th, CFMOTO Achieves the Best Performance for Chinese Brands in the Dakar Rally QUAD Class </p>
                        </a>
                     </div>
                     <div data-v-00f05126="" class="related_container_items">
                        <a data-v-00f05126="" href="{{ route('news') }}" class="related_container_items_graphic">
                           <div data-v-00f05126="" class="items_graphic_pic">
                              <div data-v-00f05126="" class="imgBox"><img data-v-00f05126="" src="assets/images/goes.jpg" alt="img"></div>
                              <div data-v-00f05126="" class="items_graphic_pic_id">
                                 03
                              </div>
                           </div>
                           <p data-v-00f05126="" class="no_postcss_to_px">CFMOTO Completes Acquisition of the European Off-Road Brand GOES </p>
                        </a>
                     </div>
                     <div data-v-00f05126="" class="related_container_items">
                        <a data-v-00f05126="" href="{{ route('news') }}" class="related_container_items_graphic">
                           <div data-v-00f05126="" class="items_graphic_pic">
                              <div data-v-00f05126="" class="imgBox"><img data-v-00f05126="" src="assets/images/0.jpg" alt="img"></div>
                              <div data-v-00f05126="" class="items_graphic_pic_id">
                                 04
                              </div>
                           </div>
                           <p data-v-00f05126="" class="no_postcss_to_px">CFMOTO and Yamaha Reached an Agreement to Have a Joint Venture in China  </p>
                        </a>
                     </div>
                  </div>
               </div>
               <div data-v-00f05126="" class="cf_related_container_mobile">
                  <div data-v-00f05126="" class="related_mobile_title">
                     News Information
                  </div>
                  <!----> 
                  <div data-v-00f05126="" class="related_product_list">
                     <li data-v-00f05126="" class="related_product_box">
                        <div data-v-00f05126="" class="related-mobile">
                           <div data-v-00f05126="" class="related_new-item">
                              <p data-v-00f05126="" class="des_type">Jan 30, 2024</p>
                              <a data-v-00f05126="" href="" class="related_product_items"><img data-v-00f05126="" src="assets/images/0.jpg" alt=""></a> 
                              <div data-v-00f05126="" class="related_mobile_des">
                                 <h1 data-v-00f05126="" class="des_title">CFMOTO and Aspar Team will fight together for the Moto2 and Moto3 titles </h1>
                                 <h5 data-v-00f05126="" class="des_text">CFMOTO Aspar Racing Team will fight for the podiums and victorys in Moto2 and Moto3</h5>
                                 <div data-v-00f05126="" class="des_bottom"><a data-v-00f05126="" href="{{ route('news') }}" class="info_more_mobile flex"><span data-v-00f05126="">Learn more</span> <img data-v-00f05126="" src="assets/images/right_arrows.png" alt=""></a></div>
                              </div>
                           </div>
                           <div data-v-00f05126="" class="related_new-item">
                              <p data-v-00f05126="" class="des_type">Jan 21, 2024</p>
                              <a data-v-00f05126="" href="" class="related_product_items"><img data-v-00f05126="" src="assets/images/5th.jpg" alt=""></a> 
                              <div data-v-00f05126="" class="related_mobile_des">
                                 <h1 data-v-00f05126="" class="des_title">Perfect Conclusion With a ranking of 5th, CFMOTO Achieves the Best Performance for Chinese Brands in the Dakar Rally QUAD Class </h1>
                                 <h5 data-v-00f05126="" class="des_text">CFMOTO THUNDER RACING TEAM's Antanas Kanopkinas and his CFORCE 1000 concluded the challenging Dakar Rally with an impressive 5th position in the QUAD class</h5>
                                 <div data-v-00f05126="" class="des_bottom"><a data-v-00f05126="" href="{{ route('news') }}" class="info_more_mobile flex"><span data-v-00f05126="">Learn more</span> <img data-v-00f05126="" src="assets/images/right_arrows.png" alt=""></a></div>
                              </div>
                           </div>
                           <div data-v-00f05126="" class="related_new-item">
                              <p data-v-00f05126="" class="des_type">Jan 07, 2024</p>
                              <a data-v-00f05126="" href="" class="related_product_items"><img data-v-00f05126="" src="assets/images/goes.jpg" alt=""></a> 
                              <div data-v-00f05126="" class="related_mobile_des">
                                 <h1 data-v-00f05126="" class="des_title">CFMOTO Completes Acquisition of the European Off-Road Brand GOES </h1>
                                 <h5 data-v-00f05126="" class="des_text">Hangzhou, China/ Rousset, France – 8th January, 2024</h5>
                                 <div data-v-00f05126="" class="des_bottom"><a data-v-00f05126="" href="{{ route('news') }}" class="info_more_mobile flex"><span data-v-00f05126="">Learn more</span> <img data-v-00f05126="" src="assets/images/right_arrows.png" alt=""></a></div>
                              </div>
                           </div>
                           <div data-v-00f05126="" class="related_new-item">
                              <p data-v-00f05126="" class="des_type">Sep 19, 2023</p>
                              <a data-v-00f05126="" href="" class="related_product_items"><img data-v-00f05126="" src="assets/images/0.jpg" alt=""></a> 
                              <div data-v-00f05126="" class="related_mobile_des">
                                 <h1 data-v-00f05126="" class="des_title">CFMOTO and Yamaha Reached an Agreement to Have a Joint Venture in China  </h1>
                                 <h5 data-v-00f05126="" class="des_text">CFMOTO and Yamaha have reached an agreement to have a joint venture in Zhuzhou,China. The name of the new business will be ZHUZHOU CF YAMAHA MOTOR CO.,LTD.(ZCYM).</h5>
                                 <div data-v-00f05126="" class="des_bottom"><a data-v-00f05126="" href="{{ route('news') }}" class="info_more_mobile flex"><span data-v-00f05126="">Learn more</span> <img data-v-00f05126="" src="assets/images/right_arrows.png" alt=""></a></div>
                              </div>
                           </div>
                        </div>
                     </li>
                  </div>
                  <!---->
               </div>
            </div>
         </div>
      </div>
      <div class="home-about-component">
         <div data-component="home-about-component" data-initialized="true" class="home_about_component">
            <div data-v-0444c5bc="" class="cf_about" style="background-image: url(&quot;./assets/images/条纹背景.png&quot;);">
               <div data-v-0444c5bc="" class="cf_about_top">
                  <div data-v-0444c5bc="" class="about_top_info">
                     <div data-v-0444c5bc="" class="about_top_infoText" >
                        <h1 data-v-0444c5bc="">Our vision.</h1>
                        <p data-v-0444c5bc="" class="no_postcss_to_px">Driving Excellence: Evolving with Premium Products and Top-Notch Service to Elevate Customer Satisfaction.</p>
                     </div>
                     <div data-v-0444c5bc="" class="about_top_infoText" >
                        <h1 data-v-0444c5bc="">Our mission.</h1>
                        <p data-v-0444c5bc="" class="no_postcss_to_px">Delivering Complete Solutions: Continuous Supply of Best Products & Accessories, Reliable, Economical, and Easy to Maintain.</p>
                     </div>
                  </div>
                  <div data-v-0444c5bc="" class="about_top_text">
                     <p data-v-0444c5bc="">CFMOTO</p>
                     <p data-v-0444c5bc="">GCC</p>
                  </div>
                  <div data-v-0444c5bc="" class="about_top_badge"><img data-v-0444c5bc="" src="assets/images/badge_out.png" alt="img" class="badge_out"></div>
               </div>
               <div data-v-0444c5bc="" class="cf_about_bottom">
                  <div data-v-0444c5bc="" class="about_bottom_box">
                     <a data-v-0444c5bc="" href="{{ route('companyoverview') }}" class="about_bottom_moreLink no_postcss_to_px flex btn_hover" ><span data-v-0444c5bc="">Learn more</span> <img data-v-0444c5bc="" src="assets/images/right_arrows.png" alt="img"></a> 
                     <picture data-v-0444c5bc="">
                        <source data-v-0444c5bc="" media="(max-width:750px)" srcset="assets/images/about_bg_mobile.png">
                        <img data-v-0444c5bc="" src="assets/images/about_bg.png" alt="img" class="about_bottom_bgBox">
                     </picture>
                     <div data-v-0444c5bc="" class="about_bottom_text">DETERMINED. PROGRESSIVE. MORE FUN.  </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="home-regional-component">
         <div data-component="home-regional-component" data-initialized="true" class="home_regional_component">
            <div data-v-79df4e83="" class="cf_regional">
               <div data-v-79df4e83="" class="cf_regional_top" style="background-image: url(&quot;assets/images/521670392373_.pic_hd.png&quot;);">
                  <div data-v-79df4e83="" class="regional_data_items" >
                     <li data-v-79df4e83="" class="regional_regions regional_data_list m-0">
                        <h3 data-v-79df4e83="" class="count_number">
                           100+
                        </h3>
                        <p data-v-79df4e83="">Products</p>
                     </li>
                     <li data-v-79df4e83="" class="regional_dealers regional_data_list">
                        <h3 data-v-79df4e83="" class="count_number">
                           12 Years
                        </h3>
                        <p data-v-79df4e83="">Experience</p>
                     </li>
                     <li data-v-79df4e83="" class="regional_employees regional_data_list m-0">
                        <h3 data-v-79df4e83="" class="count_number">
                           10000 +
                        </h3>
                        <p data-v-79df4e83="">Trusted Clients</p>
                     </li>
                  </div>
               </div>
               <div data-v-79df4e83="" class="cf_regional_bottom">
                  <h1 data-v-79df4e83="" class="cf_regional_bottom_title" >We are authorized dealer in GCC region</h1>
                  <div data-v-79df4e83="" class="cf_regional_list first" >
                     <div class="map-container">
                        <img src="assets/images/world-map.png">
                
  

                      </div>
            
                  </div>
             <div class="text-center mb-5">
               <a href="{{ route('becomeadistributor') }}" class="btn btn-sumbit"> Become A Distributor</a>
             </div>
                  <div data-v-79df4e83="" class="cf_regional_country_list list_pc" >
                     <!----><!----><!----><!---->
                  </div>
                  <div data-v-79df4e83="" class="cf_regional_left_box">
                     <div data-v-79df4e83="" class="left_box_cnt">
                        <!----><!----><!----><!---->
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      @endsection