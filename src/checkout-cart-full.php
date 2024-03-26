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

    <?php include './header.php'; ?>
    <div class="breakpoint-indicator"></div>

    <!-- <style> *{  outline: 1px solid rgba(187, 187, 187, 0.3); } </style> -->


    <div class="page_wrapper w-full mx-auto px-5p py-14 pb-56">


        <div class="flex lg:flex-row flex-col gap-10">

            <div class="lg:w-[65%] w-full">
                <div class="w-full mx-auto pb-4">
                    <h6 class=" text-neutral-800 text-3xl font-bold font-interstate uppercase leading-loose">Shopping Cart</h6>
                </div>
                <div class="product_row lg:flex hidden justify-between w-full border-y border-neutral-400 py-4 gap-4">
                    <div class="img_remove_wrapper flex w-[20%] flex flex-row items-center space-x-4">
                        <div></div>
                        <div></div>
                    </div>
                    <div class="product_details_wrapper flex flex-row items-center justify-between lg:w-[80%] w-full space-x-10">            
                        <div class="flex w-[45%]  flex-col gap-3 pl-4">
                            <p class="text-zinc-800 text-lg font-bold leading-tight">Product</p>
                        </div>
                        <div class="w-[10%]">
                            <p class="text-zinc-800 text-lg font-bold">Price</p>
                        </div>
                        <div class="flex justify-center w-[10%]">
                            <p class="text-zinc-800 text-lg font-bold">Quanitity</p>
                        </div>
                        <div class="justify-end flex w-[10%]">
                            <p class="text-zinc-800 text-lg font-bold text-left">Total</p>
                        </div>
                    </div>
                </div>
                <?php for ($i = 0; $i < 4; $i++) {include $_SERVER['DOCUMENT_ROOT'] . '/components/product_cart_row.php'; } ?>


                <div class="py-5">
                    <label class="font-medium">Coupon Code</label>
                    <input type="text" class="inputstyle w-64"> </input>
                    <a class="btn_add_cart_sm hover:bg-cream" href="/">Apply</a>
                </div>



            </div>


            <div class="lg:w-[35%] w-full">
                <div class="w-full mx-auto pb-4">
                    <h6 class=" text-neutral-800 text-3xl font-bold font-interstate uppercase leading-loose">Summary</h6>
                </div>


                <?php include './components/summary_card.php'; ?>


            </div>
        </div>

    </div> <!-- page_wrapper -->



    <?php include './footer.php'; ?>
</body>
</html>