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


<?php include './header.php'; ?>


<body class="bg-cream">






    <div class="w-full mx-auto px-5p py-14 bg-black border-t border-stone-500">
        <div class="grid gap-10 lg:grid-cols-2  grid-cols-1 ">
            <div class="text-center lg:text-left">
                <p class="text-stone-300 mb-4">Looking for something? We’ve probably got it! </p>
                <h1 class="text-stone-100 uppercase leading-12">Browse our selection of over 100K products.</h1>
            </div>
            <div>
                <div class="flex h-14 items-center bg-white rounded overflow-hidden shadow  min-w-fit   xl:min-w-[600px]">
                    <input class="w-full h-14 text-stone-500 text-lg leading-tight font-medium focus:outline-none outline-none ring-0 ring-offset-0 ring-offset-blue-300 hover:ring-offset-blue-500 border-none rounded-none " id="search" type="text" placeholder="Search keyword, item, model or part #">
                    <button class="bg-white text-gray-500 focus:outline-none w-16 h-full flex items-center justify-center">
                        <svg class="fill-black h-4 w-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path d="M368 208A160 160 0 1 0 48 208a160 160 0 1 0 320 0zM337.1 371.1C301.7 399.2 256.8 416 208 416C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208c0 48.8-16.8 93.7-44.9 129.1L505 471c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0L337.1 371.1z"/>
                        </svg>
                    </button>
                </div>
                <div class="flex flex-wrap pt-6 gap-2">
                    <div class="flex justify-center items-center px-2.5 py-1.5 text-center text-red lg:text-base text-sm font-bold leading-none">Popular:</div>
                    <a href="/" class="btn_small">Capacitors</a> <a href="/" class="btn_small">Resistors</a> <a href="/" class="btn_small">Transformers</a> <a href="/" class="btn_small">Motors & Solenoids</a> <a href="/" class="btn_small">Capacitors</a> <a href="/" class="btn_small">Resistors</a> <a href="/" class="btn_small">Transformers</a> <a href="/" class="btn_small">Motors & Solenoids</a>
                </div>
            </div>
        </div>
    </div>






    <div class="w-full mx-auto px-5p py-14">
        <h1 class="uppercase mb-2">All Product Categories</h1>
        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget.</p>
    </div>

    <div class="w-full mx-auto px-5p pb-20  grid gap-3  xl:grid-cols-4 lg:grid-cols-3 md:grid-cols-2  grid-cols-1 ">
        <?php for ($i = 0; $i < 4; $i++) {include $_SERVER['DOCUMENT_ROOT'] . '/components/product_card.php'; } ?>
    </div>


    <div class="w-full mx-auto px-5p py-14">
        <h1 class="uppercase mb-2">Category Cards</h1>
        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget.</p>
    </div>


    <div class="w-full mx-auto px-5p pb-20  grid gap-3  xl:grid-cols-4 lg:grid-cols-3 md:grid-cols-2  grid-cols-1 ">
        <?php for ($i = 0; $i < 4; $i++) {include $_SERVER['DOCUMENT_ROOT'] . '/components/category_card.php'; } ?>
    </div>




    <div class="w-full mx-auto px-5p pb-10">
        <h1 class="uppercase mb-2">All Product Categories</h1>
        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget.</p>
    </div>
    <div class="w-full mx-auto px-5p pb-20  grid gap-3  xl:grid-cols-3 md:grid-cols-2  grid-cols-1 ">
        <?php for ($i = 0; $i < 3; $i++) {include $_SERVER['DOCUMENT_ROOT'] . '/components/sub_category_card.php'; } ?>
    </div>



    <div class="w-full mx-auto px-5p pt-20 pb-4">
        <h6 class=" text-neutral-800 text-3xl font-bold font-interstate uppercase leading-loose">Recent Reviews</h6>
    </div>
    <div class="w-full mx-auto px-5p pb-20  grid gap-3  lg:grid-cols-3   grid-cols-1 ">
        <?php for ($i = 0; $i < 3; $i++) {include $_SERVER['DOCUMENT_ROOT'] . '/components/testimonial_card.php'; } ?>
    </div>



    <div class="w-full mx-auto px-5p py-20  grid gap-3  grid-cols-1 lg:grid-cols-2   ">
        <div class="relative m-0 flex h-80">
            <div class="z-10 h-full w-full overflow-hidden">
                <img src="./imgs/cta_card.png" class="animate-fade-in block h-full w-full scale-100 object-cover object-center" alt="" />
            </div>
            <div class="absolute flex flex-col justify-end bottom-0 left-0 z-20 p-5 bg-gradient-to-t from-black to-transparent h-full w-full">
                <div class="text-stone-100 text-lg font-bold font-interstate uppercase leading-loose leading-tight pb-3 border-b border-opacity-50 border-white pb-3 mb-2">
                    Our staff is experienced and can talk with you about your unique needs.
                </div>
                <div class="text-stone-100 text-lg font-bold leading-normal">(402) 346-4750</div>
            </div>
        </div>
        <div class="relative m-0 flex h-80 w-full bg-stone-600">
            <div class="flex flex-col justify-end p-5 h-full w-full items-start gap-3">
                <div class="text-stone-100 text-lg font-bold font-interstate uppercase leading-tight">
                    Our staff is experienced and can talk with you about your unique needs.
                </div>
                <p class="text-stone-300 text-sm font-medium leading-normal">We calculate shipping after we’ve received and verified your order because skipping the flat rates and average charges save you money. </p>
                <a class="btn_small" href="/">Learn More</a>
            </div>
        </div>
        <div class="relative m-0 flex h-80 w-full bg-black">
            <div class="flex flex-col justify-end p-5 h-full w-full items-start gap-3">
                <div class="text-stone-100 text-lg font-bold font-interstate uppercase leading-loose leading-tight">
                    Our staff is experienced and can talk with you about your unique needs.
                </div>
                <div class="gap-1 pb-2 flex flex-col">
                    <div class="text-stone-100">$100-$299 orders - Up to 10 lbs. shipped free</div>
                    <div class="text-stone-100">$100-$299 orders - Up to 10 lbs. shipped free</div>
                </div>
                <a class="btn_small" href="/">Learn More</a>
            </div>
        </div>
        <div class="relative m-0 flex h-80">
            <div class="z-10 h-full w-full overflow-hidden">
                <img src="./imgs/cta_card_2.png" class="block h-full w-full scale-100 object-cover object-center" alt="" />
            </div>
            <div class="absolute flex flex-col justify-end bottom-0 left-0 z-20 p-5 bg-gradient-to-t from-black to-transparent h-full w-full items-start">
                <div class="text-stone-100 text-lg font-bold font-interstate uppercase leading-tight pb-3 mb-2">
                    Our staff is experienced and can talk with you about your unique needs.
                </div>
                <a class="btn_small" href="/">Learn More</a>
            </div>
        </div>
    </div>



    <?php include './footer.php'; ?>
</body>
</html>