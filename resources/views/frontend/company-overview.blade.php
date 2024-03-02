@extends('layouts.app.main')
@section('content')

<main id="content" class="site-main">
      <!-- Inner Banner html start-->
      <section class="inner-banner-wrap">
          <div class="inner-baner-container" style="background-image: url(assets/images/about-us.jpg);">
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
                              <a href="#"> Mission</a>
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
                              <a href="#"> Vision</a>
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
                              <a href="#"> Goal</a>
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

@endsection