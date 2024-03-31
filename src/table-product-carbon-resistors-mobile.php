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

<!-- <style> *{  outline: 1px solid rgba(187, 187, 187, 0.3); } </style> -->

<body class="bg-cream">
    <?php include './header.php'; ?>



    <div class="w-full px-5p">
        <div class="breadcrumbs relative"> 
            <!-- <div class="absolute bg-gradient-to-r from-cream to-red h-14 top-0 right-0 w-40"></div> -->
            <a class="transition ease-in-out duration-300 hover:text-red font-bold text-black" href="/">All Categories</a>| 
            <a class="transition ease-in-out duration-300 hover:text-red font-bold text-black" href="/">Resistors</a>| 
            <a class="transition ease-in-out duration-300 hover:text-red font-bold text-black" href="/">Carbon Composition Resistors</a>| 
            <p>Carbon Composition Resistors - 1/8 watt (RC)</p>
        </div>
    </div>



    <div class="mx-5p lg:pt-16 pt-10 pb-6 mb-6 ">
        <div class="flex justify-between  lg:flex-row flex-col gap-5">
            <div class="grow-[2] flex justify-between  flex-col  w-full">
                <div>
                    <h1 class="uppercase mb-5">Carbon Composition Resistors - 1/8 watt (RC</h1>
                </div>
                <div>
                    <p class="text-stone-500 text-lg font-medium"><span class="font-bold">Legend:</span> RC = Commercial / RCR = Military (5 band)</p>
                    <p class="text-stone-500 text-lg font-medium"><span class="font-bold">Note:</span> Minimum order is $1.00 per line item.</p>

                </div>
            </div>
            <div class="flex justify-start lg:justify-end grow-[1]  lg:items-center lg:self-end lg:flex-row flex-col-reverse gap-4">
                <p class="text-stone-500 text-lg font-medium leading-normal whitespace-nowrap">125 Products</p>
                
                <a href="/" class="filterbtn">
                    <img class="w-[18px] h-[16px]" src="./imgs/icon_filter.svg"> 
                    <div class="text-stone-900 text-lg font-medium leading-normal">Filters</div>
                </a>
            </div>
        </div>
    </div>


    <div class="w-full mx-auto px-5p pb-20  grid gap-3  xl:grid-cols-3 lg:grid-cols-2  grid-cols-1 ">
        <?php for ($i = 0; $i < 10; $i++) {include $_SERVER['DOCUMENT_ROOT'] . '/components/product_card.php'; } ?>
    </div>








    <?php include './footer.php'; ?>
</body>
</html>