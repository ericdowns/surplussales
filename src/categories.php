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


<div class="breakpoint-indicator"></div>
<!-- <style> *{  outline: 1px solid rgba(187, 187, 187, 0.3); } </style> -->
<?php include './header.php'; ?>


<body class="bg-cream">

    <div class="w-full px-5p">

        <div class="breadcrumbs">       
            <a class="transition ease-in-out duration-300 hover:text-red font-bold text-black" href="/">Home</a>| 
            <p>All Categories</p>
        </div>
    </div>


    <div class="mx-5p lg:pt-16 pt-3 pb-6 mb-6  border-b border-neutral-400">
        <div class="max-w-screen-lg">
            <h1 class="uppercase mb-5">All Product Categories</h1>
            <p class="font-medium text-stone-500 text-lg">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget.</p>        
        </div>
    </div>

    <div class="w-full mx-auto px-5p pb-20  grid gap-3  xl:grid-cols-4 lg:grid-cols-3 md:grid-cols-2  grid-cols-1 ">
        <?php for ($i = 0; $i < 24; $i++) {include $_SERVER['DOCUMENT_ROOT'] . '/components/category_card.php'; } ?>
    </div>


    <?php include './footer.php'; ?>
</body>
</html>