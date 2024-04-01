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
    <?php include './header-mobile.php'; ?>

    <div class="page_wrapper w-full mx-auto px-5p py-14 lg:pb-56 pb-20">
        <div class="flex lg:flex-row flex-col gap-10">
            <div class="lg:w-[65%] w-full">
                <div class="w-full mx-auto pb-4">
                    <h6 class="flex text-neutral-800 text-3xl font-bold font-interstate uppercase leading-tight">
                        Your order was placed successfully. <img class="place-self-center h-8 ml-1 _bg-red"  src="./imgs/icon-circled-check-mark.svg">
                    </h6>
                </div>
                <div class="confirmation_text w-full">
                    <div class="pb-6 mb-6 border-b border-neutral-400">
                        <p class="text-zinc-800 text-lg font-bold mb-3">Check your email for your order confirmation.</p> 
                        <p class="text-stone-500 text-lg font-medium mb-4"> 
                            Your Order: C009826044708 
                        </p> 
                        <p class="text-stone-500 text-lg font-medium mb-4"> 
                            Order Date: December 18, 2023 at 2:39 PM GMT <br>
                            Confirmation email was sent to johnsmith@grainful.com 
                        </p>
                    </div>
                    <div class="pb-4">
                        <p class="text-stone-500 text-lg font-medium mb-4"> 
                            John Smith <br>                     
                            1234 Westernville Ave. <br>
                            Omaha, NE 68105
                        </p>
                        <p class="text-stone-500 text-lg font-medium mb-4"> 
                            johnsmith@grainful.com <br>
                            (402) 123-4567
                        </p>
                        <p class="text-stone-500 text-lg font-medium mb-4"> 
                            Shipping method: Most economical way Surplus Sales choice <br>
                            Billing and shipping address are the same
                        </p>
                        <p class="text-stone-500 text-lg font-medium mb-4"> 
                            Payment Method: Secure Credit/Debit Card
                        </p>
                    </div>
                    <a href="/" class="px-20 py-3.5 border-neutral-800 border-2 rounded-md justify-center items-center inline-flex hover:bg-neutral-800 hover:text-cream hover:border-2 hover:border-neutral-800 text-neutral-800 text-lg font-bold whitespace-nowrap duration-300 ease-in-out hover:duration-300 hover:ease-in-out cursor-pointer">
                    Print Order Confirmation </a>
                </div>
            </div>
            <div class="lg:w-[35%] w-full">
             <div class="w-full mx-auto pb-4">
                <h6 class=" text-neutral-800 text-3xl font-bold font-interstate uppercase leading-loose">Summary</h6>
            </div>
            <?php include './components/summary_card_order_placed.php'; ?>
        </div>
    </div>
</div> <!-- page_wrapper -->



<?php include './footer.php'; ?>
</body>
</html>