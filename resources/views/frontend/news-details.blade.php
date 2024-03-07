@extends('layouts.app.main')
@section('content')
<div class="new-detail new-detail-container new-copyDownload-container">
   <div>
      <div class="new-detail">
         <div class="top">
            <div aria-label="Breadcrumb" role="navigation" class="el-breadcrumb">
               <a href="https://www.cfmoto.com/global.html" class="el-breadcrumb__item">
               <span role="link" class="el-breadcrumb__inner is-link">CFMOTO Global</span>
               <i class="el-breadcrumb__separator el-icon-arrow-right left"></i>
               </a>
               <a href="{{ route('news') }}" class="el-breadcrumb__item">
               <span role="link" class="el-breadcrumb__inner is-link">News</span>
               <i class="el-breadcrumb__separator el-icon-arrow-right left"></i>
               </a>
               <a href="{{ route('news') }}" class="el-breadcrumb__item">
               <span role="link" class="el-breadcrumb__inner is-link">Perfect Conclusion With a ranking of 5th, CFMOTO Achieves the Best Performance for Chinese Brands in the Dakar Rally QUAD Class</span>
               </a>
            </div>
         </div>
      </div>
   </div>
   <div class="content">
      <div class="time">
         <div class="footer-introce">{{ date('d M Y', strtotime($blogs->blog_date)) }}
         </div>
      </div>
      <div class="title">
      {!! $blogs->title !!}
   </div>
       <div>
         <img src="{{ $blogs->image }}" alt="img">
      </div>
                  
      <div class="copy-container-content">
         <div class="text parbase">
         {!! $blogs->description !!}
      </div>
      </div>
      
   </div>
   <div>
      <div data-component="news-latest-component" data-initialized="true" class="news_latest_component">
         <div data-v-5cb42fb0="" class="new-detail">
            <div data-v-5cb42fb0="" class="detail">
               <div data-v-5cb42fb0="" class="title clearfix">
                  <div data-v-5cb42fb0="" class="left">
                     Latest News
                  </div>
                  <div data-v-5cb42fb0="" class="line"></div>
                  <div data-v-5cb42fb0="" class="right btn_hover">
                     Latest News
                  </div>
               </div>
               <div data-v-5cb42fb0="" class="content-detail clearfix">
                  <ul data-v-5cb42fb0="" class="clearfix">
                     <li data-v-5cb42fb0="">
                        <div data-v-5cb42fb0="" class="footer">
                           <div data-v-5cb42fb0="" class="footer-introce">21 Jan 2024</div>
                        </div>
                        <img data-v-5cb42fb0="" src="{{ asset('assets/images/5th.jpg') }}" alt=""> 
                        <div data-v-5cb42fb0="" class="detail-title">
                           Perfect Conclusion With a ranking of 5th, CFMOTO Achieves the Best Performance for Chinese Brands in the Dakar Rally QUAD Class
                        </div>
                        <div data-v-5cb42fb0="" class="introce">
                           CFMOTO THUNDER RACING TEAM's Antanas Kanopkinas and his CFORCE 1000 concluded the challenging Dakar Rally with an impressive 5th position in the QUAD class
                        </div>
                        <div data-v-5cb42fb0="" class="new_learn_more btn_hover">
                           learn more
                           <img data-v-5cb42fb0="" src="{{ asset('assets/images/right_arrows.png') }}" alt="img">
                        </div>
                     </li>
                     <li data-v-5cb42fb0="">
                        <div data-v-5cb42fb0="" class="footer">
                           <div data-v-5cb42fb0="" class="footer-introce">20 Jan 2024</div>
                        </div>
                        <img data-v-5cb42fb0="" src="{{ asset('assets/images/PressDay14.jpg') }}" alt=""> 
                        <div data-v-5cb42fb0="" class="detail-title">
                           A. Kanopkinas after crossing the Dakar finish arch: "One mistake here can cost a lot"
                        </div>
                        <div data-v-5cb42fb0="" class="introce">
                           A. Kanopkinas after crossing the Dakar finish arch: "One mistake here can cost a lot"
                        </div>
                        <div data-v-5cb42fb0="" class="new_learn_more btn_hover">
                           learn more
                           <img data-v-5cb42fb0="" src="{{ asset('assets/images/right_arrows.png') }}" alt="img">
                        </div>
                     </li>
                     <li data-v-5cb42fb0="">
                        <div data-v-5cb42fb0="" class="footer">
                           <div data-v-5cb42fb0="" class="footer-introce">18 Jan 2024</div>
                        </div>
                        <img data-v-5cb42fb0="" src="{{ asset('assets/images/PressDay13.jpg') }}" alt=""> 
                        <div data-v-5cb42fb0="" class="detail-title">
                           A. Kanopkinas reached the end of the day by helicopter: "The landscapes are very beautiful"
                        </div>
                        <div data-v-5cb42fb0="" class="introce">
                           A. Kanopkinas reached the end of the day by helicopter: "The landscapes are very beautiful"
                        </div>
                        <div data-v-5cb42fb0="" class="new_learn_more btn_hover">
                           learn more
                           <img data-v-5cb42fb0="" src="{{ asset('assets/images/right_arrows.png') }}" alt="img">
                        </div>
                     </li>
                     <li data-v-5cb42fb0="">
                        <div data-v-5cb42fb0="" class="footer">
                           <div data-v-5cb42fb0="" class="footer-introce">17 Jan 2024</div>
                        </div>
                        <img data-v-5cb42fb0="" src="{{ asset('assets/images/PressDay12.jpg') }}" alt=""> 
                        <div data-v-5cb42fb0="" class="detail-title">
                           A. Kanopkinas: "Today I wandered off the track. Not once"
                        </div>
                        <div data-v-5cb42fb0="" class="introce">
                           A. Kanopkinas: "Today I wandered off the track. Not once"
                        </div>
                        <div data-v-5cb42fb0="" class="new_learn_more btn_hover">
                           learn more
                           <img data-v-5cb42fb0="" src="{{ asset('assets/images/right_arrows.png') }}" alt="img">
                        </div>
                     </li>
                  </ul>
                  <div data-v-5cb42fb0="" class="mobile-view-all">
                     View all
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

@endsection