<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surplus Sales</title>
    <style> @import url("https://use.typekit.net/mbi6zih.css"); </style>
    <link rel="stylesheet" href="https://kit.fontawesome.com/51895c5ec0.css" crossorigin="anonymous">
    <link rel="stylesheet" href="./output.css">

</head>




<div class="breakpoint-indicator"></div>

<!-- <style> *{  outline: 1px solid rgba(187, 187, 187, 0.3); } </style> -->



<header class="lg:flex flex-col w-full bg-black hidden">


    <div class="flex justify-between items-center w-full bg-stone-600 p-3 w-full ">
        <div class="flex text-stone-100 text-sm gap-6 items-center"> 

            <div class="flex items-center">
                <p> <div class="mr-2 w-2 h-2 bg-amber-400 rounded-full"></div> FREE Ground Shipping! On orders over $100</p> 
            </div>

            <a href="/">help@surplussales.com</a> <p>(402) 346-4750</p> 
        </div>


        <div class="flex text-stone-100 text-sm gap-6"> 
            <p>FAQ</p> <p>About</p>  <p>Support</p> <p>Register</p>  <p>Michael</p> 
        </div>

    </div>


    <div class="flex justify-between header_inner p-6">
        <div> <img src="./imgs/logo.svg"> </div>

        <div class="flex items-center bg-white rounded shadow">
          <input class="
          w-full 
          rounded 
          py-2 
          px-4 
          text-gray-700 
          leading-tight 
          focus:outline-none" 
          id="search" type="text" 
          placeholder="Search keyword, item, model or part #">
          
          <button class="bg-white text-gray-500 rounded-full p-2 focus:outline-none w-12 h-12 flex items-center justify-center">
            <i class="fa-solid fa-bars"></i>
        </button>
    </div>

    <a href="#" class="h-14 rounded shadow border border-stone-500 flex items-center">
        <div class="h-full items-center flex text-stone-100 text-sm font-bold uppercase leading-snug px-2 border-4-l border-stone-500"> All Categories</div>
        <div class="h-full items-center flex text-stone-100 text-sm font-bold uppercase leading-snug px-2">A - Z</div>
    </a>

</div>




</header>






<body class="bg-cream">


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
        <?php for ($i = 0; $i < 32; $i++) {include $_SERVER['DOCUMENT_ROOT'] . '/components/category_card.php'; } ?>
    </div>




    <div class="w-full mx-auto px-5p pb-10">
        <h1 class="uppercase">All Product Categories</h1>
        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget.</p>
    </div>
    <div class="w-full mx-auto px-5p  grid gap-3  xl:grid-cols-3 md:grid-cols-2  grid-cols-1 ">
        <?php for ($i = 0; $i < 3; $i++) {include $_SERVER['DOCUMENT_ROOT'] . '/components/sub_category_card.php'; } ?>
    </div>




<!-- 

    <div class="w-full mx-auto p-5p">
        <a class="btn" href="/">Button</a>
        <h1 class="text-9xl font-interstate">Heading goes here</h1>
        <h2 class="text-8xl font-articulat font-bold ">Heading goes here</h2>
        <h1 class="text-7xl">Heading goes here</h1>
        <h1 class="text-6xl">Heading goes here</h1>
        <h1 class="text-5xl">Heading goes here</h1>
        <h1 class="text-3xl">Heading goes here</h1>
        <h1 class="text-2xl">Heading goes here</h1>
        <h1 class="text-xl">Heading goes here</h1>
        <h1 class="text-lg">Heading goes here</h1>
        <h1 class="text-base">Heading goes here</h1>
        <h1 class="text-sm">Heading goes here</h1>
        <h1 class="text-xs">Heading goes here</h1>
        <h1 class="text-sm">Heading goes here</h1>
    </div>
-->


<footer class="bg-black">
    <div class="px-5p w-full mx-auto p-5p  grid gap-3 lg:grid-cols-5   grid-cols-2">
        <?php for ($i = 0; $i < 5; $i++) {include $_SERVER['DOCUMENT_ROOT'] . '/components/footer_element.php'; } ?>
    </div>

    <div class="mx-5m mx-auto border-b border-stone-500">
    </div>
    <div class="px-5p w-full mx-auto p-5p  grid gap-3 lg:grid-cols-5   grid-cols-2 ">
        <?php for ($i = 0; $i < 5; $i++) {include $_SERVER['DOCUMENT_ROOT'] . '/components/footer_element.php'; } ?>
    </div>


    <div class="flex justify-center lg:justify-between  lg:flex-row flex-col px-5p w-full mx-auto p-5p ">

        <div class="flex">
            <p class="text-center">©2024 Surplus Sales of Nebraska |  Terms  |  Privacy  |   Accessibility </p> 
        </div>

        <div class="flex flex-auto lg:flex-1">

            <svg xmlns="http://www.w3.org/2000/svg" class="fill-yellow ease-in-out duration-300 h-6 hover:fill-white" viewBox="0 0 576 512">
                <path d="M549.7 124.1c-6.3-23.7-24.8-42.3-48.3-48.6C458.8 64 288 64 288 64S117.2 64 74.6 75.5c-23.5 6.3-42 24.9-48.3 48.6-11.4 42.9-11.4 132.3-11.4 132.3s0 89.4 11.4 132.3c6.3 23.7 24.8 41.5 48.3 47.8C117.2 448 288 448 288 448s170.8 0 213.4-11.5c23.5-6.3 42-24.2 48.3-47.8 11.4-42.9 11.4-132.3 11.4-132.3s0-89.4-11.4-132.3zm-317.5 213.5V175.2l142.7 81.2-142.7 81.2z"/></svg>
            </div>


        </div>
    </footer>




</body>
</html>