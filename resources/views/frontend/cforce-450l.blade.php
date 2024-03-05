@extends('layouts.app.main')
@section('content')

<div class="product-banner-component">

<div class="product_banner_component" data-component="product-banner-component">
    <productbannercomponent banner="[{&#34;image&#34;:&#34;{{ asset('assets/images/CFORECE450L-banner.png') }}&#34;,&#34;mobileImage&#34;:&#34;{{ asset('assets/images/CFORCE%20450%20L-banner.png') }}&#34;},{&#34;image&#34;:&#34{{ asset('assets/images/CFORECE450L-BANNER1.png') }}&#34;,&#34;mobileImage&#34;:&#34;{{ asset('assets/images/CFORCE%20450%20L-banner%E5%A4%87%E4%BB%BD%202.png') }}&#34;},{&#34;image&#34;:&#34;{{ asset('assets/images/CFORECE450L-BANNER2.png') }}&#34;,&#34;mobileImage&#34;:&#34;{{ asset('assets/images/CFORCE%20450%20L-banner%E5%A4%87%E4%BB%BD.png') }}&#34;}]" characteristic="[{&#34;image&#34;:&#34;undefined&#34;,&#34;mobileImage&#34;:&#34;undefined&#34;,&#34;value&#34;:&#34;400&#34;,&#34;unit&#34;:&#34;cc&#34;,&#34;name&#34;:&#34;Engine&#34;,&#34;isMobShow&#34;:&#34;true&#34;},{&#34;image&#34;:&#34;undefined&#34;,&#34;mobileImage&#34;:&#34;undefined&#34;,&#34;value&#34;:&#34;BOSCH EFI&#34;,&#34;name&#34;:&#34;Fuel Supply&#34;,&#34;isMobShow&#34;:&#34;true&#34;},{&#34;image&#34;:&#34;undefined&#34;,&#34;mobileImage&#34;:&#34;undefined&#34;,&#34;value&#34;:&#34;31&#34;,&#34;unit&#34;:&#34;hp&#34;,&#34;name&#34;:&#34;Maximum Power&#34;,&#34;isMobShow&#34;:&#34;true&#34;},{&#34;image&#34;:&#34;undefined&#34;,&#34;mobileImage&#34;:&#34;undefined&#34;,&#34;value&#34;:&#34;612&#34;,&#34;unit&#34;:&#34;kg&#34;,&#34;name&#34;:&#34;Tow Capacity&#34;},{&#34;image&#34;:&#34;undefined&#34;,&#34;mobileImage&#34;:&#34;undefined&#34;,&#34;value&#34;:&#34;6.5&#34;,&#34;unit&#34;:&#34;m&#34;,&#34;name&#34;:&#34;Turning Diameter&#34;},{&#34;image&#34;:&#34;undefined&#34;,&#34;mobileImage&#34;:&#34;undefined&#34;,&#34;value&#34;:&#34;250&#34;,&#34;unit&#34;:&#34;mm&#34;,&#34;name&#34;:&#34;Ground Clearance&#34;}]"/>
</div>
</div>


    
    
    <div class="product-category-component">
    <div class="product_category_component" data-component="product-category-component">
        <productcategorycomponent product="{&#34;image&#34;:&#34;{{ asset('assets/images/CFORCE450L_11.png') }}&#34;,&#34;title&#34;:&#34;CFORCE 450 L&#34;,&#34;desc&#34;:&#34;CFORCE 450 L offers a versatile entry point into the brand\u0027s world, providing the perfect balance of affordability, functionality, comfort for two.&#34;,&#34;specificationImage&#34;:&#34;{{ asset('assets/images/CFORCE450L_jscs.png') }}&#34;,&#34;imageAreas&#34;:[],&#34;imageRealWidth&#34;:1140,&#34;imageRealHeight&#34;:760}" image="{{ asset('assets/images/CFORCE450L_11.png') }}" category="{&#34;title&#34;:&#34;450&#34;,&#34;button&#34;:&#34;Find a Distributor&#34;,&#34;link&#34;:&#34;/content/cfmoto/global/about-us/global_distributors&#34;,&#34;tips&#34;:&#34;CFMOTO models may have different specifications to comply with local regulations, and maybe modified to meet specific demands in a particular region.&#34;,&#34;downloadBrochureText&#34;:&#34;Download brochure&#34;,&#34;downloadBrochureLink&#34;:&#34;{{ asset('assets/CFORCE_450_Specifications_20240304060347.pdf') }}&#34;,&#34;downloadName&#34;:&#34;2022_CFORCE 450-520 brochure.pdf&#34;,&#34;motorcycleType&#34;:&#34;OFF ROAD VEHICLES&#34;,&#34;pointData&#34;:[{&#34;title&#34;:&#34;Fuel-injected Single Cylinder with CVT&#34;,&#34;name&#34;:&#34;dot-point0&#34;,&#34;des&#34;:&#34;The engine combined with CVT and low vehicle weight ensures impressive acceleration&#34;,&#34;img&#34;:&#34;{{ asset('assets/images/关键部位图/450SR_Detail_01备份(8).jpg') }}&#34;,&#34;number&#34;:&#34;{{ asset('assets/images/01@2x.jpg') }}&#34;},{&#34;title&#34;:&#34;Dual A-arm suspensions&#34;,&#34;name&#34;:&#34;dot-point1&#34;,&#34;des&#34;:&#34;Front suspension A-arms is arched for improved clearance. Shocks adjustable.&#34;,&#34;img&#34;:&#34;{{ asset('assets/images/关键部位图/IMG_6455.jpg') }}&#34;,&#34;number&#34;:&#34;{{ asset('assets/images/02@2x.jpg') }}&#34;},{&#34;title&#34;:&#34;Hydraulic disc brakes&#34;,&#34;name&#34;:&#34;dot-point2&#34;,&#34;des&#34;:&#34;Hydraulic disc brakes at all four wheels. &#34;,&#34;img&#34;:&#34;{{ asset('assets/images/关键部位图/450SR_Detail_01备份 2(3).jpg') }}&#34;,&#34;number&#34;:&#34;{{ asset('assets/images/03@2x.jpg') }}&#34;},{&#34;title&#34;:&#34;3.5-inch dashboard&#34;,&#34;name&#34;:&#34;dot-point3&#34;,&#34;des&#34;:&#34;Digital dash display provides a speedometer, fuel gauge, engine temperature, odometer, clock, and more.&#34;,&#34;img&#34;:&#34;{{ asset('assets/images/关键部位图/2909.jpg') }}&#34;,&#34;number&#34;:&#34;{{ asset('assets/images/04@2x.jpg') }}&#34;},{&#34;title&#34;:&#34;Passenger backrest with hand rail&#34;,&#34;name&#34;:&#34;dot-point4&#34;,&#34;des&#34;:&#34;Redesigned backrest increases foam thickness and widens to give passenger more cushion on bumpy roads&#34;,&#34;img&#34;:&#34;{{ asset('assets/images/关键部位图/450L靠背.png') }}&#34;,&#34;number&#34;:&#34;{{ asset('assets/images/05@2x.jpg') }}&#34;}]}" variant="[{&#34;image&#34;:&#34;{{ asset('assets/images/CFORCE450L_11.png') }}&#34;,&#34;title&#34;:&#34;Jet Black&#34;,&#34;desc&#34;:&#34;&#34;,&#34;modelColor&#34;:&#34;&#34;,&#34;colorImage&#34;:&#34;{{ asset('assets/images/CFORCE450L_1.png') }}&#34;},{&#34;image&#34;:&#34;{{ asset('assets/images/CFORCE450L_22') }}&#34;,&#34;title&#34;:&#34;Rocket Red&#34;,&#34;desc&#34;:&#34;&#34;,&#34;modelColor&#34;:&#34;&#34;,&#34;colorImage&#34;:&#34;{{ asset('assets/images/CFORCE450L_2.png') }}&#34;},{&#34;image&#34;:&#34;{{ asset('assets/images/CFORCE450L_33.png') }}&#34;,&#34;title&#34;:&#34;Lava Orange&#34;,&#34;desc&#34;:&#34;&#34;,&#34;modelColor&#34;:&#34;&#34;,&#34;colorImage&#34;:&#34;{{ asset('assets/images/CFORCE450L_3.png') }}&#34;},{&#34;image&#34;:&#34;{{ asset('assets/images/CFORCE450L_44.png') }}&#34;,&#34;title&#34;:&#34;Hunter Green&#34;,&#34;desc&#34;:&#34;&#34;,&#34;modelColor&#34;:&#34;&#34;,&#34;colorImage&#34;:&#34;{{ asset('assets/images/CFORCE450L_4.png') }}&#34;}]"/>
    </div>
    
</div>


    
    
    <div class="product-graphic-component">
    <div class="product_graphic_component" data-component="product-graphic-component">
        <productgraphiccomponent config="{&#34;title&#34;:&#34;WORK MACHINE &amp; COMFORTABLE FOR TWO&#34;,&#34;description&#34;:&#34;Introducing the CFORCE 450L, the ultimate value for money ATV designed to comfortably carry two people. Powered by a reliable 400cc engine and equipped with a robust 4WD system, this all-terrain vehicle is perfect for farmers and ranchers who require a reliable and versatile companion for their daily tasks. With its durable construction, work-ready features, and impressive performance, the CFORCE 450L can handle tough jobs with ease. From hauling loads to traversing rough trails or navigating muddy fields, this ATV delivers unbeatable performance and quality at an affordable price. Experience unmatched value with the CFORCE 450L, the go-to choice for those who demand capability and comfort for two riders.&#34;,&#34;pcTitleFontSize&#34;:&#34;&#34;,&#34;mobTitleFontSize&#34;:&#34;&#34;,&#34;pcDescFontSize&#34;:&#34;&#34;,&#34;mobDescFontSize&#34;:&#34;&#34;,&#34;style&#34;:&#34;divideEqually&#34;,&#34;bottomDescClass&#34;:&#34;&#34;,&#34;twoCol&#34;:{&#34;firstImage&#34;:&#34;{{ asset('assets/images/CFORECE450L_01.png') }}&#34;,&#34;secondImage&#34;:&#34;{{ asset('assets/images/CFORECE450L_02.png') }}&#34;}}"/>
    </div>
    
</div>


    
    
    <div class="product-graphic-component">
    <div class="product_graphic_component" data-component="product-graphic-component">
        <productgraphiccomponent config="{&#34;title&#34;:&#34;REFINEMENTS ACROSS THE BOARD&#34;,&#34;description&#34;:&#34;With refinements in nearly every category, the newest generation CFORCE 450 and CFORCE 520 bring even more rugged capability to the CFMOTO family of ATVs. Infused with the right technology to work harder and smarter, the CFORCE 450 and 520 are outfitted for more utility performance than ever. With increased loading capacity, tighter turning radius, a stronger frame and even more suspension travel, the CFORCE 450 and 520 will take on your toughest tasks, and still be ready for fun when the work is done.&#34;,&#34;pcTitleFontSize&#34;:&#34;&#34;,&#34;mobTitleFontSize&#34;:&#34;&#34;,&#34;pcDescFontSize&#34;:&#34;&#34;,&#34;mobDescFontSize&#34;:&#34;&#34;,&#34;fullScreenImage&#34;:&#34;{{ asset('assets/images/CFORECE450L_03.png') }}&#34;,&#34;style&#34;:&#34;fullScreen&#34;,&#34;bottomDescClass&#34;:&#34;&#34;}"/>
    </div>
    
</div>


    
    
    <div class="product-graphic-component">
    <div class="product_graphic_component" data-component="product-graphic-component">
        <productgraphiccomponent config="{&#34;title&#34;:&#34;400CC SINGLE-CYLINDER ENGINE&#34;,&#34;description&#34;:&#34;Designed to handle the demands of farmers and rural work, the CFORCE 450 ATV boasts a powerful 30 horsepower, 400cc engine equipped with Bosch Electronic Fuel Injection (EFI) for optimal efficiency and reliable performance. The Continuously Variable Transmission (CVT) allows for smooth gear shifts, making it easy to navigate through fields, pastures, and rugged terrain. Whether you need to transport heavy loads, navigate through uneven landscapes, or access hard-to-reach areas, its robust engine with 30hp and CVT transmission system are up to the task.&#34;,&#34;pcTitleFontSize&#34;:&#34;&#34;,&#34;mobTitleFontSize&#34;:&#34;&#34;,&#34;pcDescFontSize&#34;:&#34;&#34;,&#34;mobDescFontSize&#34;:&#34;&#34;,&#34;fullScreenImage&#34;:&#34;{{ asset('assets/images/CFORECE450L_04.png') }}&#34;,&#34;style&#34;:&#34;fullScreen&#34;,&#34;bottomDescClass&#34;:&#34;&#34;}"/>
    </div>
    
</div>


    
    
    <div class="product-graphic-component">
    <div class="product_graphic_component" data-component="product-graphic-component">
        <productgraphiccomponent config="{&#34;title&#34;:&#34;NEW RUGGED LOOK&#34;,&#34;description&#34;:&#34;The look is BOLDER, yet the exterior retains its compact profile. The aggressive CFORCE DNA shines through at first glance, with LED day-running light and strong grill that integrates front protection bars. Wheelbase remains the same, while the overall stance increases, giving the CFORCE 450L a more commanding presence. &#34;,&#34;pcTitleFontSize&#34;:&#34;&#34;,&#34;mobTitleFontSize&#34;:&#34;&#34;,&#34;pcDescFontSize&#34;:&#34;&#34;,&#34;mobDescFontSize&#34;:&#34;&#34;,&#34;style&#34;:&#34;twoThree&#34;,&#34;bottomDescClass&#34;:&#34;&#34;,&#34;twoCol&#34;:{&#34;firstImage&#34;:&#34;{{ asset('assets/images/CFORECE450L_05.png') }}&#34;,&#34;secondImage&#34;:&#34;{{ asset('assets/images/CFORECE450L_06.png') }}&#34;,&#34;style&#34;:&#34;top&#34;}}"/>
    </div>
    
</div>


    
    
    <div class="product-graphic-component">
    <div class="product_graphic_component" data-component="product-graphic-component">
        <productgraphiccomponent config="{&#34;title&#34;:&#34;AGILITY, 25% TIGHTER TURNING THAN PREVIOUS MODEL&#34;,&#34;description&#34;:&#34;The CFORCE 450L is designed with farmers in mind, offering exceptional agility with a turning radius that is 25% tighter than standard ATVs. With a minimum turning diameter of just 6.5 meters (two-up), this means farmers can easily navigate through tight spaces and maneuver in confined areas. Whether you need to make sharp turns in the field, navigate around obstacles, or work in cramped environments, the CFORCE 450L&#39;s impressive turning radius allows for efficient and hassle-free operation, making it an ideal choice for farmers who require agility for their daily.&#34;,&#34;pcTitleFontSize&#34;:&#34;&#34;,&#34;mobTitleFontSize&#34;:&#34;&#34;,&#34;pcDescFontSize&#34;:&#34;&#34;,&#34;mobDescFontSize&#34;:&#34;&#34;,&#34;fullScreenImage&#34;:&#34;{{ asset('assets/images/CFORECE450L_07.png') }}&#34;,&#34;style&#34;:&#34;fullScreen&#34;,&#34;bottomDescClass&#34;:&#34;&#34;}"/>
    </div>
    
</div>


    
    
    <div class="product-graphic-component">
    <div class="product_graphic_component" data-component="product-graphic-component">
        <productgraphiccomponent config="{&#34;title&#34;:&#34;COMFORT&#34;,&#34;description&#34;:&#34;When it comes to long hours in the field, vehicle vibration is a critical factor that can wear you down. The CFORCE 450 and 520 have the lowest vibration in class across the entire torque range (vibration measured at handlebar grip, seat, and foot rests). Reducing vibration was a key focus in the development of the newest CFORCE 450 and 520, accomplished through optimizing the engine mounts to the new frame. New foam material is used in the seats. Foam thickness increased by 40%.&#34;,&#34;pcTitleFontSize&#34;:&#34;&#34;,&#34;mobTitleFontSize&#34;:&#34;&#34;,&#34;pcDescFontSize&#34;:&#34;&#34;,&#34;mobDescFontSize&#34;:&#34;&#34;,&#34;style&#34;:&#34;divideEqually&#34;,&#34;bottomDescClass&#34;:&#34;&#34;,&#34;twoCol&#34;:{&#34;firstImage&#34;:&#34;{{ asset('assets/images/CFORECE450L_08.png') }}&#34;,&#34;secondImage&#34;:&#34;{{ asset('assets/images/CFORECE450L_09.png') }}&#34;}}"/>
    </div>
    
</div>


    
    
    <div class="product-graphic-component">
    <div class="product_graphic_component" data-component="product-graphic-component">
        <productgraphiccomponent config="{&#34;title&#34;:&#34;USER-FRIENDLY ERGONOMICS&#34;,&#34;description&#34;:&#34;New rider-friendly ergonomics place the handlebar higher and closer to the rider. A lower foot brake further improves body position, which is optimized for a more aggressive rider posture. The newly designed fuel tank is not only narrower to accommodate riders’ position, either standing or sitting, with more leg space, it also provides more range with 17-liter fuel capacity, an increase of 3 liters.&#34;,&#34;pcTitleFontSize&#34;:&#34;&#34;,&#34;mobTitleFontSize&#34;:&#34;&#34;,&#34;pcDescFontSize&#34;:&#34;&#34;,&#34;mobDescFontSize&#34;:&#34;&#34;,&#34;style&#34;:&#34;divideEqually&#34;,&#34;bottomDescClass&#34;:&#34;&#34;,&#34;twoCol&#34;:{&#34;firstImage&#34;:&#34;{{ asset('assets/images/CFORECE450L_10.png') }}&#34;,&#34;secondImage&#34;:&#34;{{ asset('assets/images/CFORECE450L_11.png') }}&#34;}}"/>
    </div>
    
</div>


    
    
    <div class="product-graphic-component">
    <div class="product_graphic_component" data-component="product-graphic-component">
        <productgraphiccomponent config="{&#34;title&#34;:&#34;RUGGED PERFORMANCE&#34;,&#34;description&#34;:&#34;With a generous 10 inches of ground clearance and independent double A-arm suspension with adjustable shocks, the CFORCE 450L is ready to tackle rough terrain or head off the ranch and into the great outdoors. New arched A-arm design and revised suspension settings deliver improved ground clearance and a 26% increase in suspension travel for comfortable riding.&#34;,&#34;pcTitleFontSize&#34;:&#34;&#34;,&#34;mobTitleFontSize&#34;:&#34;&#34;,&#34;pcDescFontSize&#34;:&#34;&#34;,&#34;mobDescFontSize&#34;:&#34;&#34;,&#34;style&#34;:&#34;twoThree&#34;,&#34;bottomDescClass&#34;:&#34;&#34;,&#34;twoCol&#34;:{&#34;firstImage&#34;:&#34;{{ asset('assets/images/CFORECE450L_12.png') }}&#34;,&#34;secondImage&#34;:&#34;{{ asset('assets/images/CFORECE450L_13.png') }}&#34;,&#34;style&#34;:&#34;top&#34;}}"/>
    </div>
    
</div>


    
    
    <div class="product-graphic-component">
    <div class="product_graphic_component" data-component="product-graphic-component">
        <productgraphiccomponent config="{&#34;title&#34;:&#34;MORE CAPACITY&#34;,&#34;description&#34;:&#34;The CFORCE 450L is a reliable workhorse for farmers, with a carrying capacity of up to 90 kg on front and rear high-intensity steel racks, and a towing capacity of up to 612 kg. Its durable construction and impressive hauling and towing capabilities make it ideal for transporting tools, equipment, feed, and crops, making farm tasks efficient and effective.&#34;,&#34;pcTitleFontSize&#34;:&#34;&#34;,&#34;mobTitleFontSize&#34;:&#34;&#34;,&#34;pcDescFontSize&#34;:&#34;&#34;,&#34;mobDescFontSize&#34;:&#34;&#34;,&#34;style&#34;:&#34;highlyAdaptive&#34;,&#34;bottomDescClass&#34;:&#34;&#34;}" adaptive="{&#34;imageList&#34;:[{&#34;image&#34;:&#34;{{ asset('assets/images/CFORECE450L_14.png') }}&#34;},{&#34;image&#34;:&#34;{{ asset('assets/images/CFORECE450L_17.png') }}&#34;},{&#34;image&#34;:&#34;{{ asset('assets/images/CFORECE450L_15.png') }}&#34;},{&#34;image&#34;:&#34;{{ asset('assets/images/CFORECE450L_16.png') }}&#34;}]}"/>
    </div>
    
</div>


    
    
<div class="product-specification-component">
    <div data-component="product-specification-component" data-initialized="true" class="product_specification_component"><div data-v-3fb92384="" id="specification" class="cf_product_specification page-guide page-guide-num11"><div data-v-3fb92384="" class="specification_box"><div data-v-3fb92384="" class="specification_box_left"><h1 data-v-3fb92384="" class="specification_box_tit" style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1;">Specifications</h1> <div data-v-3fb92384="" class="specification_tabs" style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1;"><div data-v-3fb92384="" class="specification_tab no_postcss_to_px active">
          Engine
        </div><div data-v-3fb92384="" class="specification_tab no_postcss_to_px">
          Dimensions
        </div><div data-v-3fb92384="" class="specification_tab no_postcss_to_px">
          Chassis
        </div></div> <div data-v-3fb92384="" class="specification_tab-content" style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1;"><li data-v-3fb92384="" class="tabs_items no_postcss_to_px"><h5 data-v-3fb92384="">Engine Type</h5> <p data-v-3fb92384="">Liquid-cooled four-stroke single cylinder with EFI</p></li><li data-v-3fb92384="" class="tabs_items no_postcss_to_px"><h5 data-v-3fb92384="">Displacement</h5> <p data-v-3fb92384="">400cc</p></li><li data-v-3fb92384="" class="tabs_items no_postcss_to_px"><h5 data-v-3fb92384="">Bore x Stroke</h5> <p data-v-3fb92384="">91x61.5mm</p></li><li data-v-3fb92384="" class="tabs_items no_postcss_to_px"><h5 data-v-3fb92384="">Maximum Power</h5> <p data-v-3fb92384="">31hp@7250 rpm</p></li><li data-v-3fb92384="" class="tabs_items no_postcss_to_px"><h5 data-v-3fb92384="">Maximum Torque</h5> <p data-v-3fb92384="">31N·m@5500rpm</p></li><li data-v-3fb92384="" class="tabs_items no_postcss_to_px"><h5 data-v-3fb92384="">Fuel Supply</h5> <p data-v-3fb92384="">EFI</p></li><li data-v-3fb92384="" class="tabs_items no_postcss_to_px"><h5 data-v-3fb92384="">Transmission</h5> <p data-v-3fb92384="">CVT transmission H/L/N/R/P</p></li></div><!----><!----> <div data-v-3fb92384="" class="specification_operation" style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1;"><a data-v-3fb92384="" href="/global/motorcycles_comparis.html" target="_blank" class="moreLink no_postcss_to_px"><span data-v-3fb92384="">Compare</span> <img data-v-3fb92384="" src="{{ asset('assets/images/right_arrows.png') }}" alt=""></a> <a data-v-3fb92384="" href="{{ asset('assets/CFORCE_450_Specifications_20240304060347.pdf') }}" target="_blank" download="Specifications" class="bottom_box_downLink no_postcss_to_px"><img data-v-3fb92384="" src="{{ asset('assets/images/green_down-arrow.png') }}" alt=""> <span data-v-3fb92384="">Download brochure</span></a></div> <p data-v-3fb92384="" class="specification_tips no_postcss_to_px" style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1;"><span data-v-3fb92384="">*</span>
        All figures are preliminary and subject to change.
      </p></div> <div data-v-3fb92384="" class="specification_box_right" style="translate: none; rotate: none; scale: none; transform: translate(0px, -288.394px); opacity: 1;"><picture data-v-3fb92384=""><source data-v-3fb92384="" media="(min-width:1080px )" srcset="{{ asset('assets/images/CFORCE450_jscs.png') }}"> <img data-v-3fb92384="" src="{{ asset('assets/images/cforce-450/2024/CFORCE450_jscs.png') }}" alt="" class="specification_bg"></picture></div> <img data-v-3fb92384="" src="{{ asset('assets/images/specification_bottom_slogan1.png') }}" class="specification_bottom_slogan"></div></div></div>
    


</div>


    
    
    <div class="product-gallery-component">
    <div class="product_gallery_component" data-component="product-gallery-component">
        <productgallerycomponent gallery="{&#34;}" spicturelist="{&#34;imageList&#34;:[&#34;{{ asset('assets/images/CFORCE 450 L_Hunter Green (14).jpg') }}&#34;,&#34;{{ asset('assets/images/CFORCE 450 L_Hunter Green (15).jpg') }}&#34;,&#34;{{ asset('assets/images/CFORCE 450 L_Hunter Green (13).jpg') }}&#34;]}" lpicturelist="{&#34;imageList&#34;:[&#34;{{ asset('assets/images/CFORCE 450 L_Hunter Green (1).jpg') }}&#34;,&#34;{{ asset('assets/images/CFORCE 450 L_Hunter Green (19).jpg') }}&#34;,&#34;{{ asset('assets/images/CFORCE 450 L_Hunter Green (20).jpg') }}&#34;,&#34;{{ asset('assets/images/CFORCE 450 L_Hunter Green (16).jpg') }}&#34;,&#34;{{ asset('assets/images/CFORCE 450 L_Hunter Green (7).jpg') }}&#34;]}"/>
    </div>

    



</div>


    
    
    <div class="product-recommend-component">
    <div class="product_recommend_component" data-component="product-recommend-component">
        <productrecommendcomponent product="[{&#34;image&#34;:&#34;{{ asset('assets/images/CFORCE450_11.png') }}&#34;,&#34;title&#34;:&#34;CFORCE 450&#34;,&#34;desc&#34;:&#34;CFORCE 450 offers a versatile entry point into the brand\u0027s world, providing the perfect balance of affordability and functionality.&#34;,&#34;pageLink&#34;:&#34;/content/cfmoto/global/atv/atv/cforce_450.html&#34;},{&#34;image&#34;:&#34;{{ asset('assets/images/CFORCE520_44.png') }}&#34;,&#34;title&#34;:&#34;CFORCE 520&#34;,&#34;desc&#34;:&#34;CFORCE 520 takes the versatility and practicality of the CFORCE 450 to the next level, offering more power and advanced features for an even more exceptional riding experience, no matter you\u0027re out on a leisurely excursion or tackling tougher terrain. &#34;,&#34;pageLink&#34;:&#34;/content/cfmoto/global/atv/atv/cforce_520.html&#34;},{&#34;image&#34;:&#34;{{ asset('assets/images/CFORCE520L_55.png') }}&#34;,&#34;title&#34;:&#34;CFORCE 520 L&#34;,&#34;desc&#34;:&#34;CFORCE 520 L is a versatile and practical ATV that offers the perfect combination of performance and comfort. This model has been designed to seat two people, making it the ideal choice for couples or friends who want to explore the great outdoors together.&#34;,&#34;pageLink&#34;:&#34;/content/cfmoto/global/atv/atv/cforce_520l.html&#34;},{&#34;image&#34;:&#34;{{ asset('assets/images/CFORCE625_44.png') }}&#34;,&#34;title&#34;:&#34;CFORCE 625&#34;,&#34;desc&#34;:&#34;This versatile and capable machine is a must-have for anyone looking for a fun and adventurous ride.&#34;,&#34;pageLink&#34;:&#34;/content/cfmoto/global/atv/atv/cforce_625.html&#34;},{&#34;image&#34;:&#34;{{ asset('assets/images/CFORCE625TOURING_44.png') }}&#34;,&#34;title&#34;:&#34;CFORCE 625 TOURING&#34;,&#34;desc&#34;:&#34;Why ride alone when you can ride in style! This is what the CFORCE 625 TOURING offers.&#34;,&#34;pageLink&#34;:&#34;/content/cfmoto/global/atv/atv/cforce_625_touring.html&#34;},{&#34;image&#34;:&#34;{{ asset('assets/images/model_1.png') }}&#34;,&#34;title&#34;:&#34;CFORCE 625 TOURING OVERLAND&#34;,&#34;desc&#34;:&#34;Built with the CFORCE 1000 OVERLAND in mind, the CFORCE 625 TOURING OVERLAND is a factory, adventure-ready platform that will take you and your best wherever the trail leads. The only thing left is get outdoors and start your adventure.&#34;,&#34;pageLink&#34;:&#34;/content/cfmoto/global/atv/atv/cforce_625_touring_overland.html&#34;},{&#34;image&#34;:&#34;{{ asset('assets/images/CFORCE850XC_11.png') }}&#34;,&#34;title&#34;:&#34;CFORCE 850 XC&#34;,&#34;desc&#34;:&#34;With the angular design, the CFORCE 850 XC attracts attention from afar. &#34;,&#34;pageLink&#34;:&#34;/content/cfmoto/global/atv/atv/cforce_850_xc.html&#34;},{&#34;image&#34;:&#34;{{ asset('assets/images/CFORCE850TOURING.png') }}&#34;,&#34;title&#34;:&#34;CFORCE 850 TOURING&#34;,&#34;desc&#34;:&#34;More power, more advanced technology and capability, unbeatable funcionality, with undiluted dose of off-road excitement. The CFORCE 850 TOURING is the top-class ATV that tackles every terrain and challenges with an attitude that manifests \&#34;unstoppable\&#34; and leaves the competition in the dust&#34;,&#34;pageLink&#34;:&#34;/content/cfmoto/global/atv/atv/cforce-850-touring.html&#34;},{&#34;image&#34;:&#34;{{ asset('assets/images/CFORCE1000_11.png') }}&#34;,&#34;title&#34;:&#34;CFORCE 1000&#34;,&#34;desc&#34;:&#34;The CFORCE 1000 is CFMOTO\u0027s most powerful and torquey ATV.&#34;,&#34;pageLink&#34;:&#34;/content/cfmoto/global/atv/atv/cforce_1000.html&#34;},{&#34;image&#34;:&#34;{{ asset('assets/images/CFORCE1000OVERLAND_22.png') }}&#34;,&#34;title&#34;:&#34;CFORCE 1000 OVERLAND&#34;,&#34;desc&#34;:&#34;The CFORCE 1000 OVERLAND takes adventure to new heights.&#34;,&#34;pageLink&#34;:&#34;/content/cfmoto/global/atv/atv/cforce_1000_overland.html&#34;},{&#34;image&#34;:&#34;{{ asset('assets/images/CFORCE1000TOURING.png') }}&#34;,&#34;title&#34;:&#34;CFORCE 1000 TOURING&#34;,&#34;desc&#34;:&#34;The new CFORCE 1000 TOURING provides more than just ultimate performance; it\u0027s a superior balance between power, precision, and comfort. It\u0027s not just raw force; it\u0027s about using it with absolute confidence. &#34;,&#34;pageLink&#34;:&#34;/content/cfmoto/global/atv/atv/cforce-1000-touring.html&#34;}]" productinfo="{&#34;image&#34;:&#34;{{ asset('assets/images/CFORCE450L_11.png') }}&#34;,&#34;title&#34;:&#34;CFORCE 450 L&#34;,&#34;desc&#34;:&#34;CFORCE 450 L offers a versatile entry point into the brand\u0027s world, providing the perfect balance of affordability, functionality, comfort for two.&#34;,&#34;specificationImage&#34;:&#34;{{ asset('assets/images/CFORCE450L_jscs.png') }}&#34;,&#34;imageAreas&#34;:[],&#34;imageRealWidth&#34;:1140,&#34;imageRealHeight&#34;:760}" recommend="null"/>
    </div>
    
</div>


    
    



</div>

@endsection