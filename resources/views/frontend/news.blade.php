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
                        <img data-v-6cee4eaa="" src="{{ asset($blogs->image()) }}" alt=""> 
                        <div data-v-6cee4eaa="" class="list-content">
                           <div data-v-6cee4eaa="" class="detail-title">{{ $blogs->title }}</div>
                           <div data-v-6cee4eaa="" class="introce no_postcss_to_px">
                           {!! substr($blogs->description, 0, 105) !!}...
                           </div>
                           <div data-v-6cee4eaa="" class="new_learn_more btn_hover no_postcss_to_px">
                              <a href="{{ route('newsdetails', ['slug' => $blogs->slug]) }}">learn more</a>
                              <img data-v-6cee4eaa="" src="{{ asset('assets/images/right_arrows.png') }}" alt="">
                           </div>
                        </div>
                     </li>
                     @endforeach
                        @endif
                     <li data-v-6cee4eaa="">
                        <div data-v-6cee4eaa="" class="news-date no_postcss_to_px">
                           <div data-v-6cee4eaa="">Jan 21 2024</div>
                        </div>
                        <img data-v-6cee4eaa="" src="{{ asset('assets/images/5th.jpg') }}" alt=""> 
                        <div data-v-6cee4eaa="" class="list-content">
                           <div data-v-6cee4eaa="" class="detail-title">Perfect Conclusion With a ranking of 5th, CFMOTO Achieves the Best Performance for Chinese Brands in the Dakar Rally QUAD Class</div>
                           <div data-v-6cee4eaa="" class="introce no_postcss_to_px">
                              CFMOTO THUNDER RACING TEAM's Antanas Kanopkinas and his CFORCE 1000 concluded the challenging Dakar Rally with an impressive 5th position in the QUAD class
                           </div>
                           <div data-v-6cee4eaa="" class="new_learn_more btn_hover no_postcss_to_px">
                              learn more
                              <img data-v-6cee4eaa="" src="{{ asset('assets/images/right_arrows.png') }}" alt="">
                           </div>
                        </div>
                     </li>
                     <li data-v-6cee4eaa="">
                        <div data-v-6cee4eaa="" class="news-date no_postcss_to_px">
                           <div data-v-6cee4eaa="">Jan 20 2024</div>
                        </div>
                        <img data-v-6cee4eaa="" src="{{ asset('assets/images/PressDay14.jpg') }}" alt=""> 
                        <div data-v-6cee4eaa="" class="list-content">
                           <div data-v-6cee4eaa="" class="detail-title">A. Kanopkinas after crossing the Dakar finish arch: "One mistake here can cost a lot"</div>
                           <div data-v-6cee4eaa="" class="introce no_postcss_to_px">
                              A. Kanopkinas after crossing the Dakar finish arch: "One mistake here can cost a lot"
                           </div>
                           <div data-v-6cee4eaa="" class="new_learn_more btn_hover no_postcss_to_px">
                              learn more
                              <img data-v-6cee4eaa="" src="{{ asset('assets/images/right_arrows.png') }}" alt="">
                           </div>
                        </div>
                     </li>
                     <li data-v-6cee4eaa="">
                        <div data-v-6cee4eaa="" class="news-date no_postcss_to_px">
                           <div data-v-6cee4eaa="">Jan 18 2024</div>
                        </div>
                        <img data-v-6cee4eaa="" src="{{ asset('assets/images/PressDay13.jpg') }}" alt=""> 
                        <div data-v-6cee4eaa="" class="list-content">
                           <div data-v-6cee4eaa="" class="detail-title">A. Kanopkinas reached the end of the day by helicopter: "The landscapes are very beautiful"</div>
                           <div data-v-6cee4eaa="" class="introce no_postcss_to_px">
                              A. Kanopkinas reached the end of the day by helicopter: "The landscapes are very beautiful"
                           </div>
                           <div data-v-6cee4eaa="" class="new_learn_more btn_hover no_postcss_to_px">
                              learn more
                              <img data-v-6cee4eaa="" src="{{ asset('assets/images/right_arrows.png') }}" alt="">
                           </div>
                        </div>
                     </li>
                     <li data-v-6cee4eaa="">
                        <div data-v-6cee4eaa="" class="news-date no_postcss_to_px">
                           <div data-v-6cee4eaa="">Jan 17 2024</div>
                        </div>
                        <img data-v-6cee4eaa="" src="{{ asset('assets/images/PressDay12.jpg') }}" alt=""> 
                        <div data-v-6cee4eaa="" class="list-content">
                           <div data-v-6cee4eaa="" class="detail-title">A. Kanopkinas: "Today I wandered off the track. Not once"</div>
                           <div data-v-6cee4eaa="" class="introce no_postcss_to_px">
                              A. Kanopkinas: "Today I wandered off the track. Not once"
                           </div>
                           <div data-v-6cee4eaa="" class="new_learn_more btn_hover no_postcss_to_px">
                              learn more
                              <img data-v-6cee4eaa="" src="{{ asset('assets/images/right_arrows.png') }}" alt="">
                           </div>
                        </div>
                     </li>
                     <li data-v-6cee4eaa="">
                        <div data-v-6cee4eaa="" class="news-date no_postcss_to_px">
                           <div data-v-6cee4eaa="">Jan 16 2024</div>
                        </div>
                        <img data-v-6cee4eaa="" src="{{ asset('assets/images/PressDay11.jpg') }}" alt=""> 
                        <div data-v-6cee4eaa="" class="list-content">
                           <div data-v-6cee4eaa="" class="detail-title">"There were a lot of va banque situations today," A. Kanopkinas said on Tuesday</div>
                           <div data-v-6cee4eaa="" class="introce no_postcss_to_px">
                              "There were a lot of va banque situations today," A. Kanopkinas said on Tuesday
                           </div>
                           <div data-v-6cee4eaa="" class="new_learn_more btn_hover no_postcss_to_px">
                              learn more
                              <img data-v-6cee4eaa="" src="{{ asset('assets/images/right_arrows.png') }}" alt="">
                           </div>
                        </div>
                     </li>
                     <li data-v-6cee4eaa="">
                        <div data-v-6cee4eaa="" class="news-date no_postcss_to_px">
                           <div data-v-6cee4eaa="">Jan 14 2024</div>
                        </div>
                        <img data-v-6cee4eaa="" src="{{ asset('assets/images/Day9.jpg') }}" alt=""> 
                        <div data-v-6cee4eaa="" class="list-content">
                           <div data-v-6cee4eaa="" class="detail-title">A. Kanopkinas after Sunday's stage: "I feel really tired today"</div>
                           <div data-v-6cee4eaa="" class="introce no_postcss_to_px">
                              A. Kanopkinas after Sunday's stage: "I feel really tired today"
                           </div>
                           <div data-v-6cee4eaa="" class="new_learn_more btn_hover no_postcss_to_px">
                              learn more
                              <img data-v-6cee4eaa="" src="{{ asset('assets/images/right_arrows.png') }}" alt="">
                           </div>
                        </div>
                     </li>
                     <li data-v-6cee4eaa="">
                        <div data-v-6cee4eaa="" class="news-date no_postcss_to_px">
                           <div data-v-6cee4eaa="">Jan 14 2024</div>
                        </div>
                        <img data-v-6cee4eaa="" src="{{ asset('assets/images/Day67.jpg') }}" alt=""> 
                        <div data-v-6cee4eaa="" class="list-content">
                           <div data-v-6cee4eaa="" class="detail-title">The 48h Chrono stage shuffled the cards for the CFMOTO Thunder Racing Team's Dakar</div>
                           <div data-v-6cee4eaa="" class="introce no_postcss_to_px">
                              The 48h Chrono stage shuffled the cards for the CFMOTO Thunder Racing Team's Dakar
                           </div>
                           <div data-v-6cee4eaa="" class="new_learn_more btn_hover no_postcss_to_px">
                              learn more
                              <img data-v-6cee4eaa="" src="{{ asset('assets/images/right_arrows.png') }}" alt="">
                           </div>
                        </div>
                     </li>
                     <li data-v-6cee4eaa="">
                        <div data-v-6cee4eaa="" class="news-date no_postcss_to_px">
                           <div data-v-6cee4eaa="">Jan 14 2024</div>
                        </div>
                        <img data-v-6cee4eaa="" src="{{ asset('assets/images/PressDay10.jpg') }}" alt=""> 
                        <div data-v-6cee4eaa="" class="list-content">
                           <div data-v-6cee4eaa="" class="detail-title">A. Kanopkinas after Monday: "I liked the first part, and the second... I used a lot of swear words"</div>
                           <div data-v-6cee4eaa="" class="introce no_postcss_to_px">
                              A. Kanopkinas after Monday: "I liked the first part, and the second... I used a lot of swear words"
                           </div>
                           <div data-v-6cee4eaa="" class="new_learn_more btn_hover no_postcss_to_px">
                              learn more
                              <img data-v-6cee4eaa="" src="{{ asset('assets/images/right_arrows.png') }}" alt="">
                           </div>
                        </div>
                     </li>
                     <li data-v-6cee4eaa="">
                        <div data-v-6cee4eaa="" class="news-date no_postcss_to_px">
                           <div data-v-6cee4eaa="">Jan 10 2024</div>
                        </div>
                        <img data-v-6cee4eaa="" src="{{ asset('assets/images/day5.jpg') }}" alt=""> 
                        <div data-v-6cee4eaa="" class="list-content">
                           <div data-v-6cee4eaa="" class="detail-title">Greeting with dunes: A. Kanopkinas had some technical problems on the stage</div>
                           <div data-v-6cee4eaa="" class="introce no_postcss_to_px">
                              Greeting with dunes: A. Kanopkinas had some technical problems on the stage
                           </div>
                           <div data-v-6cee4eaa="" class="new_learn_more btn_hover no_postcss_to_px">
                              learn more
                              <img data-v-6cee4eaa="" src="{{ asset('assets/images/right_arrows.png') }}" alt="">
                           </div>
                        </div>
                     </li>
                     <li data-v-6cee4eaa="">
                        <div data-v-6cee4eaa="" class="news-date no_postcss_to_px">
                           <div data-v-6cee4eaa="">Jan 09 2024</div>
                        </div>
                        <img data-v-6cee4eaa="" src="{{ asset('assets/images/day4.jpg') }}" alt=""> 
                        <div data-v-6cee4eaa="" class="list-content">
                           <div data-v-6cee4eaa="" class="detail-title">The fourth day of the Dakar Rally was the easiest for A. Kanopkinas so far</div>
                           <div data-v-6cee4eaa="" class="introce no_postcss_to_px">
                              The fourth day of the Dakar Rally was the easiest for A. Kanopkinas so far
                           </div>
                           <div data-v-6cee4eaa="" class="new_learn_more btn_hover no_postcss_to_px">
                              learn more
                              <img data-v-6cee4eaa="" src="{{ asset('assets/images/right_arrows.png') }}" alt="">
                           </div>
                        </div>
                     </li>
                     <li data-v-6cee4eaa="">
                        <div data-v-6cee4eaa="" class="news-date no_postcss_to_px">
                           <div data-v-6cee4eaa="">Jan 08 2024</div>
                        </div>
                        <img data-v-6cee4eaa="" src="{{ asset('assets/images/day3.jpg') }}" alt=""> 
                        <div data-v-6cee4eaa="" class="list-content">
                           <div data-v-6cee4eaa="" class="detail-title">A. Kanopkinas: "I drove first hundred kilometers like I was carrying eggs in the basket"</div>
                           <div data-v-6cee4eaa="" class="introce no_postcss_to_px">
                              A. Kanopkinas: "I drove first hundred kilometers like I was carrying eggs in the basket"
                           </div>
                           <div data-v-6cee4eaa="" class="new_learn_more btn_hover no_postcss_to_px">
                              learn more
                              <img data-v-6cee4eaa="" src="{{ asset('assets/images/right_arrows.png') }}" alt="">
                           </div>
                        </div>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

@endsection