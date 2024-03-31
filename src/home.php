<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Surplus Sales of Nebraska </title>
    <style> @import url("https://use.typekit.net/mbi6zih.css"); </style>
    <link rel="stylesheet" href="https://kit.fontawesome.com/51895c5ec0.css" crossorigin="anonymous">
    <link rel="stylesheet" href="./output.css">
</head>

<div class="breakpoint-indicator"></div>
<!-- <style> *{  outline: 1px solid rgba(187, 187, 187, 0.3); } </style> -->
<?php include './header-home.php'; ?>

<body class="bg-cream">



    <!-- +++++++++++++++++++++++++++++ Home Search Section ++++++++++++++++++++++++++++-->
    <div class="w-full mx-auto px-5p py-14 bg-black border-t border-stone-500">
        <div class="grid gap-10 lg:grid-cols-2  grid-cols-1 ">
            <div class="text-center lg:text-left">
                <p class="text-stone-300 mb-4">Looking for something? We’ve probably got it! </p>
                <h1 class="text-stone-100 uppercase leading-12">Browse our selection of over 100K products.</h1>
            </div>
            <div>
                <div class="flex h-14 items-center bg-white rounded overflow-hidden shadow  min-w-fit   xl:min-w-[600px]">
                   <input class="searchinputstyle" id="search" type="text" placeholder="Search keyword, item, model or part #">
                   <button class="bg-white text-gray-900 focus:outline-none w-16 h-full flex items-center justify-center hover:opacity-50 hover:ease-in-out hover:duration-300"> <i class="fa-regular fa-magnifying-glass"></i>
                   </button>
               </div>
               <div class="flex flex-wrap pt-6 gap-2 hover:[&>a]:bg-cream hover:[&>a]:text-black ">
                  <div class="flex justify-center items-center
                  px-2.5 py-1.5 text-center text-red lg:text-base text-sm font-bold leading-none hover:*:bg-black">Popular: </div>
                  <a href="/" class="btn_small">Capacitors</a> <a href="/" class="btn_small">Resistors</a> <a href="/" class="btn_small">Transformers</a> <a href="/" class="btn_small">Motors & Solenoids</a>
              </div>
          </div>
      </div>
  </div>


  <!-- +++++++++++++++++++++++++++++ Product Categories Cards ++++++++++++++++++++++++++++-->
  <div class="w-full mx-auto px-5p pt-10 pb-4">
    <h6 class=" text-neutral-800 text-3xl font-bold font-interstate uppercase leading-loose">Recently Viewed Products</h6>
</div>

<div class="w-full mx-auto px-5p pb-20  grid gap-3  xl:grid-cols-4 lg:grid-cols-3 md:grid-cols-2  grid-cols-1 ">
    <?php for ($i = 0; $i < 4; $i++) {include $_SERVER['DOCUMENT_ROOT'] . '/components/product_card.php'; } ?>
</div>




<!-- +++++++++++++++++++++++++++++ All Products Cards ++++++++++++++++++++++++++++-->
<div class="w-full mx-auto px-5p pt-0 pb-4">
    <h6 class=" text-neutral-800 text-3xl font-bold font-interstate uppercase leading-loose">Recently Viewed Categories</h6>
</div>

<div class="w-full mx-auto px-5p pb-20  grid gap-3  xl:grid-cols-3 md:grid-cols-2  grid-cols-1 ">
    <?php for ($i = 0; $i < 3; $i++) {include $_SERVER['DOCUMENT_ROOT'] . '/components/sub_category_card.php'; } ?>
</div>




<!-- +++++++++++++++++++++++++++++  Categories Cards ++++++++++++++++++++++++++++-->
<div class="w-full mx-auto px-5p pt-0 lg:pb-4 pb-8 flex lg:items-center justify-between lg:flex-row flex-col">
    <h6 class=" text-neutral-800 text-3xl font-bold font-interstate uppercase leading-loose">Popular Categories</h6>
    <a href="/" class="text-sky-700 text-lg font-medium leading-normal hover:text-neutral-800 hover:ease-in-out hover:duration-300">See All Categories <i class="text-base fa-sharp fa-regular fa-angle-right"></i></a>
</div>

<div class="w-full mx-auto px-5p _pb-20  grid gap-3  xl:grid-cols-6 lg:grid-cols-4 grid-cols-2  ">
    <?php for ($i = 0; $i < 18; $i++) {include $_SERVER['DOCUMENT_ROOT'] . '/components/category_card.php'; } ?>
</div>




<!-- +++++++++++++++++++++++++++++  Home CTA Cards ++++++++++++++++++++++++++++-->
<div class="w-full mx-auto px-5p py-20  grid gap-3  grid-cols-1 lg:grid-cols-2">
   <div class="relative m-0 flex lg:h-80 h-96">
    <div class="z-10 h-full w-full overflow-hidden">
        <img src="./imgs/cta_card.png" class="animate-fade-in block h-full w-full scale-100 object-cover object-center" alt="" />
    </div>
    <div class="absolute flex flex-col justify-end bottom-0 left-0 z-20 p-5 bg-gradient-to-t from-black to-transparent h-full w-full">
        <div class="text-stone-100 text-2xl font-bold font-interstate uppercase leading-loose leading-tight pb-3 border-b border-opacity-50 border-white pb-3 mb-3">
            Our staff is experienced and can talk with you about your unique needs.
        </div>
        <div class="text-stone-100 text-lg font-bold leading-normal flex items-center"><img src="./imgs/icon_phone.svg" class="h-auto w-[20px] mr-2" />(402) 346-4750</div>
    </div>
</div>
<div class="relative m-0 flex lg:h-80 h-96 w-full bg-stone-600">
    <div class="flex flex-col justify-end p-5 h-full w-full items-start gap-4">
        <img src="./imgs/icon_shipping_box_white.svg" class="block h-auto w-[35px]" />
        <div class="text-stone-100 text-2xl font-bold font-interstate uppercase leading-tight">
           Surplus Sales strives to use the lowest  cost shipping for every order. 
       </div>
       <p class="text-stone-300 text-lg font-medium leading-tight">We calculate shipping after we’ve received and verified your order because skipping the flat rates and average charges save you money. </p>
       <a class="btn_small hover:bg-white hover:text-black" href="/">Learn More</a>
   </div>
</div>
<div class="relative m-0 flex lg:h-80 h-96 w-full bg-black">
    <div class="flex flex-col justify-end p-5 h-full w-full items-start gap-4">
        <div class="text-stone-100 text-2xl font-bold font-interstate uppercase leading-loose leading-tight">
            Our staff is experienced and can talk with you about your unique needs.
        </div>
        
        
        <div class="gap-4 pb-2 flex flex-col w-full">
            <div class="text-stone-100 flex _items-center lg:flex-row flex-col"> 
                <span class="font-bold flex"> <img src="./imgs/icon_check-circle-white.svg" class="h-auto w-[20px] mr-2 place-self-start"/>  $100-$299 orders </span> 
                <span> - Up to 10 lbs. shipped free </span>
            </div>
            <div class="text-stone-100 flex _items-center lg:flex-row flex-col"> 
                <span class="font-bold flex"> <img src="./imgs/icon_check-circle-white.svg" class="h-auto w-[20px] mr-2 place-self-start"/>  $100-$299 orders </span> 
                <span> - Up to 10 lbs. shipped free </span>
            </div>
        </div>


        <a class="btn_small hover:bg-white hover:text-black" href="/">Learn More</a>
    </div>
</div>
<div class="relative m-0 flex lg:h-80 h-96">
    <div class="z-10 h-full w-full overflow-hidden">
        <img src="./imgs/cta_card_2.png" class="block h-full w-full scale-100 object-cover object-center" alt="" />
    </div>
    <div class="absolute flex flex-col justify-end bottom-0 left-0 z-20 p-5 bg-gradient-to-t from-black to-transparent h-full w-full items-start">
        <div class="text-stone-100 text-2xl font-bold font-interstate uppercase leading-tight pb-3 mb-2">
            Our staff is experienced and can talk with you about your unique needs.
        </div>
        <a class="btn_small hover:bg-white hover:text-black" href="/">Learn More</a>
    </div>
</div>
</div>



<!-- +++++++++++++++++++++++++++++  Recent Reviews ++++++++++++++++++++++++++++-->
<div class="w-full mx-auto px-5p pt-0 lg:pb-4 pb-8 flex lg:items-center justify-between lg:flex-row flex-col">
    <h6 class=" text-neutral-800 text-3xl font-bold font-interstate uppercase leading-loose">Recent Reviews</h6>
    <a href="/" class="text-sky-700 text-lg font-medium leading-normal hover:text-neutral-800 hover:ease-in-out hover:duration-300">See All <i class="text-base fa-sharp fa-regular fa-angle-right"></i></a>
</div>

<div class="w-full mx-auto px-5p pb-20  grid gap-3  lg:grid-cols-3   grid-cols-1 ">
    <?php for ($i = 0; $i < 3; $i++) {include $_SERVER['DOCUMENT_ROOT'] . '/components/testimonial_card.php'; } ?>
</div>





<?php include './footer.php'; ?>
</body>
</html>