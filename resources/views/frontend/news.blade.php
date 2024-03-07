@extends('layouts.app.main')
@section('content')

<div class="news-list-component">
   <div data-component="news-list-component" data-initialized="true" class="news_list_component">
      <div data-v-6cee4eaa="" class="new-main">
         <div data-v-6cee4eaa="" class="new-detail">
            <div data-v-6cee4eaa="" class="new-detail-main clearfix">
               <div data-v-6cee4eaa="" class="mobile-subscribe"></div>
               <div data-v-6cee4eaa="" class="content clearfix">
                  <ul data-v-6cee4eaa="" class="clearfix">
                  @if($blog)
                     @foreach ($blog as $blogs)
                     <li data-v-6cee4eaa="">
                        <div data-v-6cee4eaa="" class="news-date no_postcss_to_px">
                           <div data-v-6cee4eaa="">{{ date('d M Y', strtotime($blogs->blog_date)) }}</div>
                        </div>
                        <img data-v-6cee4eaa="" src="{{ asset($blogs->getImage()) }}" alt=""> 
                        <div data-v-6cee4eaa="" class="list-content">
                           <div data-v-6cee4eaa="" class="detail-title">{{ $blogs->title }}</div>
                           <div data-v-6cee4eaa="" class="introce no_postcss_to_px">
                           {!! substr($blogs->description, 0, 105) !!}...
                           </div>
                           <div data-v-6cee4eaa="" class="new_learn_more btn_hover no_postcss_to_px">
                              <a href="{{ route('news-details', ['slug' => $blogs->slug]) }}">learn more</a>
                              <img data-v-6cee4eaa="" src="{{ asset('assets/images/right_arrows.png') }}" alt="">
                           </div>
                        </div>
                     </li>
                     @endforeach
                        @endif                    
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

@endsection