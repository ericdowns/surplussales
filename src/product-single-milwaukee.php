<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surplus Sales of Nebraska </title>
    <style> @import url("https://use.typekit.net/mbi6zih.css"); </style>
    <link rel="stylesheet" href="https://kit.fontawesome.com/51895c5ec0.css" crossorigin="anonymous">
    <link rel="stylesheet" href="./output.css">
</head>

<body class="bg-cream">


    <?php include './header.php'; ?>
    <?php include './header-mobile.php'; ?>

    <div class="w-full px-5p">
        <div class="breadcrumbs relative"> 
            <div class="absolute bg-gradient-to-l from-cream to-transparent h-full top-0 right-0 w-56"></div>

            <a class="transition ease-in-out duration-300 hover:text-red font-bold text-black" href="/">All Categories</a>| 
            <a class="transition ease-in-out duration-300 hover:text-red font-bold text-black" href="/">Resistors</a>| 
            <a class="transition ease-in-out duration-300 hover:text-red font-bold text-black" href="/">Wire Wound Resisters</a>| 
            <a class="transition ease-in-out duration-300 hover:text-red font-bold text-black" href="/">Power Resisters Assortments</a>| 
            <p>Milwaukee Ribwound Assortment</p>
        </div>
    </div>



    
    <div class="flex w-full mx-auto flex-col lg:flex-row px-5p py-20 gap-8">
        <h1 class="uppercase lg:hidden">Milwaukee Ribwound Assortment </h1>




        <!-- +++++++++++++++++++++++++++++ Product Image ++++++++++++++++++++++++++++-->
        <div class="flex gap-8 flex xl:w-[30%] lg:w-[50%] w-full _bg-blue">
            <div class="flex w-full flex-col gap-3">
                <div class="border flex w-full">
                    <img class="w-full h-auto block" src="./imgs/placeholder-milwaukee.png"> 
                </div>
                <div class="flex gap-3">
                    <img class="w-[72px] h-auto block border border-amber-400" src="./imgs/placeholder-milwaukee.png"> 
                    <img class="w-[72px] h-auto block" src="./imgs/placeholder-milwaukee.png"> 
                </div>
            </div>
        </div>

        <!-- +++++++++++++++++++++++++++++ Product Details Wrapper ++++++++++++++++++++++++++++-->
        <div class="w-full gap-8 flex xl:w-[70%] lg:w-[50%] w-full xl:flex-row flex-col _bg-red">


            <!-- +++++++++++++++++++++++++++++ Product Details ++++++++++++++++++++++++++++-->
            <div class="content_pricing flex flex-col  xl:w-[60%] lg:w-full  lg:order-first order-last">
                <h1 class="uppercase mb-5 hidden lg:block">Milwaukee Ribwound Assortment </h1>
                <p class="pb-3">Part Number: <br>
                    <span class="text-black font-bold font-interstate text-2xl">(RWF) 12-96R/1ASRT</span></p>
                    <div class="mb-5">
                        <p>Product Details: <br> <span class="text-black font-medium">Milwaukee 12-96 ribwound assortment. 7 resistors, 0.4 to 47 ohms. 160 watts, 3/4"D x 6"L. This assortment of round wire resistors includes the following values:</span> </p>
                        <ul class="list-disc list-inside pt-2">
                            <li>0.4 ohm - Qty: 1</li>
                            <li>0.4 ohm - Qty: 1</li>
                            <li>0.4 ohm - Qty: 1</li>
                            <li>0.4 ohm - Qty: 1</li>
                            <li>0.4 ohm - Qty: 1</li>
                            <li>0.4 ohm - Qty: 1</li>
                        </ul>
                    </div>
                </div>


                <!-- +++++++++++++++++++++++++++++ Pricing Box ++++++++++++++++++++++++++++-->
                <div class="pricing-box flex xl:w-[40%] lg:w-full content-start flex-wrap gap-3">
                    <div class="flex flex-col gap-3 w-full">
                        <a href="/" class="flex items-center gap-1 justify-end group">
                            <p class="text-right text-stone-500 text-base font-medium leading-tight group-hover:text-black">Share this page</p>
                            <img class="pt-1 w-[22px] block" src="./imgs/icon_share_windows.svg"> 
                        </a>
                        <div class="w-full p-6 rounded border border-neutral-400 flex flex-col">
                            <div class="flex items-center gap-2">
                                <div class="text-neutral-800 text-2xl font-bold font-interstate uppercase leading-normal">$65.00</div> <p>/ each</p>
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
                </div> <!-- Pricing Box -->
            </div>
        </div> <!-- Product Details Wrapper -->
    </div>




    <!-- +++++++++++++++++++++++++++++ Featured Products ++++++++++++++++++++++++++++-->
    <div class="w-full mx-auto px-5p pt-0 pb-4">
        <h6 class=" text-neutral-800 text-3xl font-bold font-interstate uppercase leading-loose">Featured Products</h6>
    </div>
    <div class="w-full mx-auto px-5p pb-20  grid gap-3  xl:grid-cols-4 lg:grid-cols-3 md:grid-cols-2  grid-cols-1 ">
        <?php for ($i = 0; $i < 4; $i++) {include $_SERVER['DOCUMENT_ROOT'] . '/components/product_card.php'; } ?>
    </div>



    <?php include './footer.php'; ?>
</body>
</html>