@extends('layouts.app.main')
@section('content')

<div class="product-banner-component">

<div class="product_banner_component" data-component="product-banner-component">
    <productbannercomponent banner="[{&#34;image&#34;:&#34;{{ asset('assets/images/CFORCE%20EV%20110_Polar%20White%20(63).jpg') }}&#34;,&#34;mobileImage&#34;:&#34;undefined&#34;},{&#34;image&#34;:&#34;{{ asset('assets/images/CFORCE%20EV%20110_Polar%20White%20(58).jpg') }}&#34;,&#34;mobileImage&#34;:&#34;undefined&#34;},{&#34;image&#34;:&#34;{{ asset('assets/images/CFORCE%20EV%20110_Polar%20white.jpg') }}&#34;,&#34;mobileImage&#34;:&#34;undefined&#34;}]" characteristic="[{&#34;image&#34;:&#34;undefined&#34;,&#34;mobileImage&#34;:&#34;undefined&#34;,&#34;value&#34;:&#34;4.5&#34;,&#34;unit&#34;:&#34;kw&#34;,&#34;name&#34;:&#34;Max Power &#34;,&#34;isMobShow&#34;:&#34;true&#34;},{&#34;image&#34;:&#34;undefined&#34;,&#34;mobileImage&#34;:&#34;undefined&#34;,&#34;value&#34;:&#34;40&#34;,&#34;unit&#34;:&#34;Nm&#34;,&#34;name&#34;:&#34;Max Torque &#34;,&#34;isMobShow&#34;:&#34;true&#34;},{&#34;image&#34;:&#34;undefined&#34;,&#34;mobileImage&#34;:&#34;undefined&#34;,&#34;value&#34;:&#34;3hr+ / 60km&#34;,&#34;name&#34;:&#34;Run Time&#34;,&#34;isMobShow&#34;:&#34;true&#34;},{&#34;image&#34;:&#34;undefined&#34;,&#34;mobileImage&#34;:&#34;undefined&#34;,&#34;value&#34;:&#34;LED day running lights&#34;,&#34;isMobShow&#34;:&#34;true&#34;}]"/>
</div>
</div>


    
    
    <div class="product-category-component">
    <div class="product_category_component" data-component="product-category-component">
        <productcategorycomponent product="{&#34;image&#34;:&#34;{{ asset('assets/images/CFORCEEV110_11.png') }}&#34;,&#34;title&#34;:&#34;CFORCE EV110&#34;,&#34;desc&#34;:&#34;The game-changing CFORCE EV110 is an all-electric youth ATV designed for enthusiasts around 10 years old. It prioritizes a smooth and easy riding experience that allows for the development of advanced riding techniques. &#34;,&#34;specificationImage&#34;:&#34;{{ asset('assets/images/CFORCEEV110_jscs.png') }}&#34;,&#34;imageAreas&#34;:[],&#34;imageRealWidth&#34;:1140,&#34;imageRealHeight&#34;:760}" image="{{ asset('assets/images/CFORCEEV110_11.png') }}" category="{&#34;title&#34;:&#34;110&#34;,&#34;button&#34;:&#34;Find a Distributor&#34;,&#34;link&#34;:&#34;/content/cfmoto/global/about-us/global_distributors&#34;,&#34;tips&#34;:&#34;CFMOTO models may have different specifications to comply with local regulations, and maybe modified to meet specific demands in a particular region.&#34;,&#34;downloadBrochureText&#34;:&#34;Download brochure&#34;,&#34;downloadBrochureLink&#34;:&#34;/content/dam/cfmoto/site/global/product/youth/atv/cforce-ev110/documentation/2022_CFORCE EV110_brochure.pdf&#34;,&#34;downloadName&#34;:&#34;2022_CFORCE EV110_brochure.pdf&#34;,&#34;motorcycleType&#34;:&#34;OFF ROAD VEHICLES&#34;,&#34;pointData&#34;:[{&#34;title&#34;:&#34;Futuristic design&#34;,&#34;name&#34;:&#34;dot-point0&#34;,&#34;des&#34;:&#34;Closed grille, LED light, unique color lay the groundwork for future of the ATV world.&#34;,&#34;img&#34;:&#34;/content/dam/cfmoto/site/global/product/youth/atv/cforce-ev110/关键部分图/1, Futuristic design.jpg&#34;,&#34;number&#34;:&#34;{{ asset('assets/product/category/01@2x.jpg') }}&#34;},{&#34;title&#34;:&#34;Lithium-ion battery&#34;,&#34;name&#34;:&#34;dot-point1&#34;,&#34;des&#34;:&#34;Ride all day with the lithium-ion battery of 2332Wh, 44v, 53Ah.&#34;,&#34;img&#34;:&#34;{{ asset('assets/images/IMG_6317.jpg') }}&#34;,&#34;number&#34;:&#34;{{ asset('assets/images/02@2x.jpg') }}&#34;},{&#34;title&#34;:&#34;Full disc brakes&#34;,&#34;name&#34;:&#34;dot-point2&#34;,&#34;des&#34;:&#34;Disc brakes provide reliable stopping power, allowing ride with the confidence of control.&#34;,&#34;img&#34;:&#34;{{ asset('assets/images/IMG_6315.jpg') }}&#34;,&#34;number&#34;:&#34;{{ asset('assets/images/03@2x.jpg') }}&#34;},{&#34;title&#34;:&#34;Dynamic suspension with long travel&#34;,&#34;name&#34;:&#34;dot-point3&#34;,&#34;des&#34;:&#34;Long suspension travel, dual A-arm front suspension and monoshock rear suspension provide dynamic performance and a comfortable ride.&#34;,&#34;img&#34;:&#34;{{ asset('assets/images/IMG_6252.jpg') }}&#34;,&#34;number&#34;:&#34;{{ asset('assets/images/04@2x.jpg') }}&#34;},{&#34;title&#34;:&#34;Safety measures&#34;,&#34;name&#34;:&#34;dot-point4&#34;,&#34;des&#34;:&#34;Magnetic safety tether, built-in throttle limiter are standard features.  &#34;,&#34;img&#34;:&#34;{{ asset('assets/images/IMG_6262.jpg') }}&#34;,&#34;number&#34;:&#34;{{ asset('assets/images/05@2x.jpg') }}&#34;}]}" variant="[{&#34;image&#34;:&#34;{{ asset('assets/images/CFORCEEV110_11.png') }}&#34;,&#34;title&#34;:&#34;Lemon Green&#34;,&#34;desc&#34;:&#34;&#34;,&#34;modelColor&#34;:&#34;&#34;,&#34;colorImage&#34;:&#34;{{ asset('assets/images/CFORCEEV110_1.png') }}&#34;},{&#34;image&#34;:&#34;{{ asset('assets/images/CFORCEEV110_22.png') }}&#34;,&#34;title&#34;:&#34;Lava Orange&#34;,&#34;desc&#34;:&#34;&#34;,&#34;modelColor&#34;:&#34;&#34;,&#34;colorImage&#34;:&#34;{{ asset('assets/images/CFORCEEV110_2.png') }}&#34;}]"/>
    </div>
    
</div>


    
    
    <div class="product-cehiclescfmoto-specialty-component">
    <div class="product_motorcycle_specialty_component" data-component="product-motorcycle-specialty-component">
        <productcehiclescfmotospecialtycomponent specialty="{&#34;title&#34;:&#34;PURE ELECTRIC FUN&#34;,&#34;desc&#34;:&#34;Say goodbye to hot engine parts, exhaust emissions, and noise with the all-electric CFORCE EV110. With no shifting or clutch, learning riders can concentrate solely on throttle coordination for a safer and more focused riding experience. Going green off-road has never been easier!&#34;,&#34;img&#34;:&#34;{{ asset('assets/images/1,%20PURE%20ELECTRIC%20FUN..jpg') }}&#34;,&#34;bgTitle&#34;:&#34;PURE&#34;}"/>
    </div>


</div>


    
    
    <div class="product-cehiclescfmoto-specialty-component">
    <div class="product_motorcycle_specialty_component" data-component="product-motorcycle-specialty-component">
        <productcehiclescfmotospecialtycomponent specialty="{&#34;title&#34;:&#34;MORE THAN ACTION&#34;,&#34;desc&#34;:&#34;With a fully charged lithium-ion battery, the CFORCE EV110 offers up to 60 km of autonomy. Equipped with rugged 19” front and 18” rear wheels, riders can tackle rough terrain with ease. The hydraulic brakes provide reliable stopping power, while the plush seat provides a comfortable and secure connection for balance and control.&#34;,&#34;img&#34;:&#34;{{ asset('assets/images/2,%20MORE%20THAN%20ACTION..jpg') }}&#34;,&#34;bgTitle&#34;:&#34;MORE&#34;}"/>
    </div>


</div>


    
    
    <div class="product-cehiclescfmoto-specialty-component">
    <div class="product_motorcycle_specialty_component" data-component="product-motorcycle-specialty-component">
        <productcehiclescfmotospecialtycomponent specialty="{&#34;title&#34;:&#34;TAKE IT MORE PLACES&#34;,&#34;desc&#34;:&#34;The vehicle location monitor, geo-fence, SOS call, call back, and custom speed limitation can all be accessed through a convenient app. Take parental controls to the next level.&#34;,&#34;img&#34;:&#34;{{ asset('assets/images/3,%20TAKE%20IT%20MORE%20PLACES.jpg') }}&#34;,&#34;bgTitle&#34;:&#34;TAKE&#34;}"/>
    </div>


</div>


    
    
    <div class="product-specification-component">
    <div class="product_specification_component" data-component="product-specification-component">
        <productspecificationcomponent path="/content/cfmoto-product/products/cfmoto/youth_series/atv/cforce_ev110" config="{&#34;compared&#34;:&#34;Compare&#34;,&#34;comparedLink&#34;:&#34;/content/cfmoto/global/motorcycles_comparis&#34;,&#34;downloadBrochure&#34;:&#34;Download tech specs&#34;,&#34;title&#34;:&#34;Specifications&#34;}" specification="[{&#34;type&#34;:&#34;Engine&#34;,&#34;specification&#34;:[{&#34;key&#34;:&#34;Engine Type&#34;,&#34;value&#34;:&#34;44V, 1500W electric motor&#34;},{&#34;key&#34;:&#34;Displacement&#34;,&#34;value&#34;:&#34;Equivalent power to a petrol 110cc&#34;},{&#34;key&#34;:&#34;Maximum Power&#34;,&#34;value&#34;:&#34;4500w max output&#34;},{&#34;key&#34;:&#34;Maximum Torque&#34;,&#34;value&#34;:&#34;40Nm&#34;},{&#34;key&#34;:&#34;Fuel Supply&#34;,&#34;value&#34;:&#34;44V, 53Ah, 2332Wh. Lithium-ion. With BMS.&#34;},{&#34;key&#34;:&#34;Transmission&#34;,&#34;value&#34;:&#34;F-N-R&#34;}]},{&#34;type&#34;:&#34;Dimensions and Weight&#34;,&#34;specification&#34;:[{&#34;key&#34;:&#34;Length x Width x Height&#34;,&#34;value&#34;:&#34;1500 x 935 x 950mm&#34;},{&#34;key&#34;:&#34;Wheelbase&#34;,&#34;value&#34;:&#34;1020mm&#34;},{&#34;key&#34;:&#34;Minimum Ground Clearance&#34;,&#34;value&#34;:&#34;120mm&#34;},{&#34;key&#34;:&#34;Curb Weight&#34;,&#34;value&#34;:&#34;130kg&#34;},{&#34;key&#34;:&#34;Payload Capacity&#34;,&#34;value&#34;:&#34;70kg&#34;},{&#34;key&#34;:&#34;Fuel Capacity&#34;,&#34;value&#34;:&#34;N/A&#34;},{&#34;key&#34;:&#34;Colors&#34;,&#34;value&#34;:&#34;Lemon Green/Lava Orange&#34;}]},{&#34;type&#34;:&#34;Chassis&#34;,&#34;specification&#34;:[{&#34;key&#34;:&#34;Drive&#34;,&#34;value&#34;:&#34;2WD, chain&#34;},{&#34;key&#34;:&#34;Brake&#34;,&#34;value&#34;:&#34;Full Hydraulic Brakes&#34;},{&#34;key&#34;:&#34;Suspension&#34;,&#34;value&#34;:&#34;Front: Double A-arm Independent\u003cbr/\u003eRear: Adjustable Mid-placed Monoshock&#34;},{&#34;key&#34;:&#34;Shock Absorber&#34;,&#34;value&#34;:&#34;Oil shock absorber&#34;},{&#34;key&#34;:&#34;Rim&#34;,&#34;value&#34;:&#34;Front 10x5.0 Rear 8x7.0&#34;},{&#34;key&#34;:&#34;Tire&#34;,&#34;value&#34;:&#34;Front 19x6-10 Rear 18x9-8&#34;}]}]" product="{{ asset('assets/images/CFORCEEV110_11.png') }}&#34;,&#34;title&#34;:&#34;CFORCE EV110&#34;,&#34;desc&#34;:&#34;The game-changing CFORCE EV110 is an all-electric youth ATV designed for enthusiasts around 10 years old. It prioritizes a smooth and easy riding experience that allows for the development of advanced riding techniques. &#34;,&#34;specificationImage{{ asset('assets/images/CFORCEEV110_jscs.png') }}&#34;,&#34;imageAreas&#34;:[],&#34;imageRealWidth&#34;:1140,&#34;imageRealHeight&#34;:760}"/>
    </div>
    


</div>


    
    
    <div class="product-gallery-component">
    <div class="product_gallery_component" data-component="product-gallery-component">
        <productgallerycomponent gallery="{&#34;description&#34;:&#34;Need to Download the latest series of picture,please click&#34;,&#34;downloadCenter&#34;:&#34;Download Center&#34;,&#34;downloadCenterLink&#34;:&#34;/content/cfmoto/global/media-center/download-center&#34;}" spicturelist="{&#34;imageList&#34;:[&#34;{{ asset('assets/images/CFORCE EV 110_Polar White (20).jpg') }}&#34;,&#34;{{ asset('assets/images/CFORCE EV 110_Polar White (4).jpg') }}&#34;,&#34;{{ asset('assets/images/CFORCE EV 110_Polar White (11).jpg') }}&#34;]}" lpicturelist="{&#34;imageList&#34;:[&#34;{{ asset('assets/images/CFORCE EV 110_Polar White (63).jpg') }}&#34;,&#34;{{ asset('assets/images/CFORCE EV 110_Polar white.jpg') }}&#34;,&#34;{{ asset('assets/images/CFORCE EV 110_Polar White (58).jpg') }}&#34;]}"/>
    </div>

    



</div>


    
    
    <div class="product-recommend-component">
    <div class="product_recommend_component" data-component="product-recommend-component">
        <productrecommendcomponent product="[{&#34;image&#34;:&#34;{{ asset('assets/images/CFORCE110_11.png') }}&#34;,&#34;title&#34;:&#34;CFORCE 110&#34;,&#34;desc&#34;:&#34;The CFORCE 110 takes on bumpy ground and rough terrain with ease, fostering your young rider as they gain confidence and learn to take on more advanced maneuvers. Step out the rear and learn to drift, or even line up for a race as skills develop!&#34;,&#34;pageLink&#34;:&#34;{{ route('cforceev110') }}&#34;}]" productinfo="{&#34;image&#34;:&#34;{{ asset('assets/images/CFORCEEV110_11.png') }}&#34;,&#34;title&#34;:&#34;CFORCE EV110&#34;,&#34;desc&#34;:&#34;The game-changing CFORCE EV110 is an all-electric youth ATV designed for enthusiasts around 10 years old. It prioritizes a smooth and easy riding experience that allows for the development of advanced riding techniques. &#34;,&#34;specificationImage&#34;:&#34;{{ asset('assets/images/CFORCEEV110_jscs.png') }}&#34;,&#34;imageAreas&#34;:[],&#34;imageRealWidth&#34;:1140,&#34;imageRealHeight&#34;:760}" recommend="null"/>
    </div>
    
</div>

@endsection