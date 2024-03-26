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

<body class="bg-cream">
    <div class="breakpoint-indicator"></div>
    <?php include './header.php'; ?>


    <div class="flex w-full mx-auto flex-col lg:flex-row px-5p py-20 gap-8">
        <div class="flex gap-8 flex lg:w-[30%] w-full">
            <div class="flex w-full flex-col gap-3">
                <div class="border flex w-full">
                 <img class="w-full h-auto block" src="./imgs/table_img.png"> 
             </div>
             <div class="flex gap-3">
                <img class="w-[72px] h-auto block border border-amber-400" src="./imgs/table_img.png"> 
                <img class="w-[72px] h-auto block" src="./imgs/table_img.png"> 
            </div>
        </div>
    </div>

    <div class="w-full gap-8 flex xl:w-[70%] lg:w-[70%] md:w-full lg:flex-row flex-col">

        <div class="content_pricing flex flex-col lg:w-[60%] w-full">
            <h1 class="uppercase mb-5">Carbon Composition Resistors - 1/8 watt (RC) </h1>
            <p class="pb-3">Part Number: <br>
                <span class="text-black font-bold font-interstate text-2xl">(RCF) RC05GF120J</span></p>
                <div class="mb-5">
                    <p>Product Details: <br> <span class="text-black font-medium">5% Carbon Resistor</span> </p>
                </div>
                <div class="flex w-full flex-col">
                    <div class="grid grid-cols-2 gap-2 border-b border-neutral-400 py-2">
                        <p>Wattage</p> <p class="text-black">1/8w</p>
                    </div>
                    <div class="grid grid-cols-2 gap-2 border-b border-neutral-400 py-2">
                        <p>Ohms</p> <p class="text-black">33 ohm</p>
                    </div>
                    <div class="grid grid-cols-2 gap-2 border-b border-neutral-400 py-2">
                        <p>Brand</p> <p class="text-black">Allen Bradley</p>
                    </div>
                </div>
            </div>



            <div class="pricing-box flex lg:w-[40%] md:w-full content-start flex-wrap gap-3">
                <div class="flex flex-col gap-3 w-full">
                    <a href="/" class="flex items-center gap-1 justify-end group">
                        <p class="text-right text-stone-500 text-base font-medium leading-tight group-hover:text-black">Share this page</p>
                        <img class="pt-1 w-[22px] block" src="./imgs/icon_share_windows.svg"> 
                    </a>
                    <div class="w-full p-6 rounded border border-neutral-400 flex flex-col">
                        <div class="flex items-center gap-2">
                            <div class="text-neutral-800 text-2xl font-bold font-interstate uppercase leading-normal">$1.50</div> <p>/ each</p>
                        </div>
                        <div class="flex items-center gap-2">
                            <div class="text-neutral-800 text-2xl font-bold font-interstate uppercase leading-normal">$1.40</div> <p>/ each</p>
                        </div>
                        <div class="flex items-center gap-2 py-4 justify-start">
                            <input type="number" class="w-auto max-w-[60px] inputstyle" name="custom-input-number" value="1"></input> <p class="text-stone-500 text-lg font-medium font-['Articulat CF'] leading-normal">Qty</p>
                        </div>
                        <a href="/" class="btn_add_cart"> Add to Cart </a>
                        <div class="flex gap-4 items-start pt-4">
                            <img class="pt-1 w-[22px] block" src="./imgs/icon_shipping_box.svg"> 
                            <p class="font-medium leading-[21px]">
                                FREE Ground Shipping! On orders over $100 
                                <a class="leading-tight" href="/">
                                    <i class="flex text-[9px] inline-flex justify-center items-center border border-blue border-2 text-blue rounded-full w-[17px] h-[17px] fa-sharp fa-solid fa-info"></i>
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div> <!-- pricing-box -->


        </div>


    </div> <!-- content_pricing -->



</div>






<div class="w-full mx-auto px-5p pt-0 pb-4">
    <h6 class=" text-neutral-800 text-3xl font-bold font-interstate uppercase leading-loose">Featured Products</h6>
</div>
<div class="w-full mx-auto px-5p pb-20  grid gap-3  xl:grid-cols-4 lg:grid-cols-3 md:grid-cols-2  grid-cols-1 ">
    <?php for ($i = 0; $i < 4; $i++) {include $_SERVER['DOCUMENT_ROOT'] . '/components/product_card.php'; } ?>
</div>



<?php include './footer.php'; ?>
</body>
</html>