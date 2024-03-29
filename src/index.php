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

<?php include './header.php'; ?>


<body class="bg-cream">


    <div class="w-full mx-auto px-5p py-14 pb-20">
        <h1 class="uppercase pb-5 mb-10">Surplus Sales Site Build</h1>
        
        <div class="grid lg:grid-cols-2 grid-cols-1 gap-5 text-1xl lg:text-1xl font-bold">


            <div class="flex flex-col gap-3 border rounded border-neutral-400 p-5">
                <h6 class="border-b border-neutral-400 pb-2 mb-2">Marketing Pages:</h6>
                <a href="/home.php">Home</a>
                <a href="/about.php">About</a>
                <a href="/faqs.php">FAQs</a>
                <a href="/general.php">General Page</a>

            </div>



            <div class="flex flex-col gap-3 border rounded border-neutral-400 p-5">
                <h6 class="border-b border-neutral-400 pb-2 mb-2">Account:</h6>
                <a href="/login.php">Login</a>
                <a href="/register.php">Register</a>
                <a href="/support.php">Support</a>

            </div>


            <div class="flex flex-col gap-3 border rounded border-neutral-400 p-5">
                <h6 class="border-b border-neutral-400 pb-2 mb-2">Categories Pages:</h6>
                <a href="/categories.php">All Categories</a>
                <a href="/az-categories.php">A-Z Listing</a>
                <a href="/resistors.php">All Categories | Resistors</a>
                <a href="/resistors-wire-wound.php">All Categories | Wire Wound Resisters</a>
                <a href="/resistors-carbon-composition-resistors.php">All Categories | Carbon Composition Resistors</a>
                <a href="/products-resistors-wire-wound.php">Products | Wire Wound Resisters - Matched Sets </a>
            </div>



            <div class="flex flex-col gap-3 border rounded border-neutral-400 p-5">
                <h6 class="border-b border-neutral-400 pb-2 mb-2">Product Pages:</h6>

                <a href="/product-single-resistor.php">Product Single | Carbon Composition Resistor </a>
                <a href="/product-single-milwaukee.php">Product Single | Milwaukee Ribwound Assortment </a>
                <a href="/table-product-carbon-resistors.php">Product Table | Carbon Composition Resistors</a>
                <a href="/table-product-wire-resistors.php">Product Table | Wire Wound Resistors</a>
            </div>

            <div class="flex flex-col gap-3 border rounded border-neutral-400 p-5">
                <h6 class="border-b border-neutral-400 pb-2 mb-2">Cart Pages:</h6>
                <a href="/checkout-cart-full.php">Checkout Cart | Full</a>
                <a href="/checkout-cart-empty.php">Checkout Cart | Empty</a>
                <a href="/checkout-cart-order-placed.php">Checkout Cart | Order Placed</a>
            </div>

            <div class="flex flex-col gap-3 border rounded border-neutral-400 p-5">
                <h6 class="border-b border-neutral-400 pb-2 mb-2">Misc Pages:</h6>
                <a href="/components.php">Components</a>
                <a href="/filter-slider-simple.php">Filter Slider Complex</a>
                <a href="/search-dropdown.php">Search Dropdown</a>
                <a href="/category-dropdown.php">Category Dropdown</a>
                <a href="/mobile-menu.php">Mobile Menu</a>



            </div>



        </div>


    </div>
    <?php include './footer.php'; ?>
</body>
</html>