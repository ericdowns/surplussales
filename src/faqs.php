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


    <!-- <style> *{  outline: 1px solid rgba(187, 187, 187, 0.3); } </style> -->

    <?php include './header.php'; ?>


    <img src="./imgs/about_hero.jpg" class="block h-[375px] w-full object-cover object-center" alt="" />
    <div class="grid lg:grid-cols-12 gap-16 w-full mx-auto px-5p py-20">
        <div class="flex content-start flex-wrap lg:col-span-4 col-span-1 gap-3">
            <div class="pb-3 text-black text-5xl font-bold font-interstate uppercase leading-10">Frequently asked questions</div> 
            <p class="pb-3">Got a question? We’re here to answer! If you don’t see your question here, drop us a line on our Contact Page</p>
        </div>
        <div class="lg:col-span-8 col-span-1 flex justify-center items-center ">
            <div class="flex flex-col pt-8 gap-9 border-t border-neutral-400">
                <?php for ($i = 0; $i < 9; $i++) {include $_SERVER['DOCUMENT_ROOT'] . '/components/faq_item.php'; } ?>
            </div>
        </div>
    </div>




    <?php include './footer.php'; ?>
</body>
</html>