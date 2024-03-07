@extends('layouts.app.main')
@section('content')
<div class="new-detail new-detail-container new-copyDownload-container">
   <div>
      <div class="new-detail">
         <div class="top">
            <div aria-label="Breadcrumb" role="navigation" class="el-breadcrumb">
               <a href="{{ route('news') }}" class="el-breadcrumb__item">
               <span role="link" class="el-breadcrumb__inner is-link">News</span>
               <i class="el-breadcrumb__separator el-icon-arrow-right left"></i>
               </a>
               <a href="{{ route('news') }}" class="el-breadcrumb__item">
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
                  @if($blog)
                     @foreach ($blog as $blogsz)
                     <li data-v-5cb42fb0="">
                        <div data-v-5cb42fb0="" class="footer">
                           <div data-v-5cb42fb0="" class="footer-introce">{{ date('d M Y', strtotime($blogs->blog_date)) }}</div>
                        </div>
                        <img data-v-5cb42fb0="" src="{{ asset('assets/images/5th.jpg') }}" alt=""> 
                        <div data-v-5cb42fb0="" class="detail-title">
                        {{ $blogsz->title }}
                     </div>
                        <div data-v-5cb42fb0="" class="introce">
                        {!! substr($blogsz->description, 0, 105) !!}...</div>
                        <div data-v-6cee4eaa="" class="new_learn_more btn_hover no_postcss_to_px">
                              <a href="{{ route('news-details', ['slug' => $blogsz->slug]) }}">learn more</a>
                           </div>
                     </li>
                     @endforeach
                        @endif
                  </ul>
                  <div data-v-5cb42fb0="" class="mobile-view-all">
                  <a href="{{ route('news') }}"> View all</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

@endsection