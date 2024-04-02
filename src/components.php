<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Surplus Sales of Nebraska </title>
    <style> @import url("https://use.typekit.net/mbi6zih.css"); </style>
    <link rel="stylesheet" href="https://kit.fontawesome.com/51895c5ec0.css" crossorigin="anonymous">
    <link rel="stylesheet" href="./output.css">
</head>

<body class="bg-cream">
    <!-- <style> *{  outline: 1px solid rgba(187, 187, 187, 0.3); } </style> -->

    <?php include './header.php'; ?>
    <?php include './header-mobile.php'; ?>





    <div class="flex mx-auto px-5p  pt-5 py-20 w-full">

        <div class="prose prose-slate mx-auto mt-8 lg:prose-2xl w-full">

            <h1 class="border-b uppercase mb-0">Components</h1>
            
            <div>
                <h6 class="uppercase font-interstate border-b border-neutral-300">Filter Button</h6>
                <div class="flex gap-4 pt-5 pb-20"> 
                    <a href="/" class="filterbtn border-2 border-black relative">
                        <img class="w-[18px] h-[16px]" src="./imgs/icon_filter.svg"> 
                        <div class="text-stone-900 text-lg font-medium leading-normal">Filters</div>
                        <div class="flex justify-center items-center absolute bg-red  text-white font-bold text-xs rounded-lg min-w-[20px] pt-1 pb-1 pr-2 pl-2 top-[-10px] right-[-9px] "> 1</div>
                    </a>
                    <a href="/" class="filterbtn">
                        <img class="w-[18px] h-[16px]" src="./imgs/icon_filter.svg"> 
                        <div class="text-stone-900 text-lg font-medium leading-normal">Filters</div>
                    </a>
                </div>
            </div>



            <div>
                <h6 class="uppercase font-interstate border-b border-neutral-300">Pricing Popup</h6>
                <div class="pt-5 pb-20">
                    <div class="relative flex p-5 w-72 bg-white rounded-md shadow-xl">
                        <span class="p-0 m-0 text-stone-900 text-base font-medium">
                            Disclaimer message about free shipping... habitant morbi tristique senectus et netus et malesuada
                        </span>
                        <!-- Triangle element -->
                        <div class="tooltip-triangle bg-red"></div>
                    </div>
                </div>
            </div>




        </div>


    </div>



    <?php include './footer.php'; ?>
</body>
</html>