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


    <img src="./imgs/placeholder-faq.jpg" class="block h-[375px] w-full object-cover object-center" alt="" />
    <div class="grid lg:grid-cols-12 gap-16 w-full mx-auto px-5p py-20 pb-56">
        <div class="flex content-start flex-wrap lg:col-span-4 col-span-1 gap-3">
            <div class="pb-3 text-black text-5xl font-bold font-interstate uppercase leading-10">Frequently asked questions</div> 
            <p class="pb-3">Got a question? We’re here to answer! If you don’t see your question here, drop us a line on our Contact Page</p>
        </div>
        <div class="lg:col-span-8 col-span-1 flex justify-center items-center ">

            <div class="flex flex-col pt-6 border-t border-neutral-400">
                <div class="flex flex-col border-b border-neutral-400">
                    <div class="flex justify-between items-center content-center pb-5">
                        <h4 class="flex justify-center items-center content-center leading-none">Do we have real time inventory?</h4>
                        <i class="flex rotate-180 bg-stone-600 text-white justify-center items-center w-11 h-11 rounded-full border border-stone-600 fa-sharp fa-regular fa-angle-down"></i>
                    </div>
                    <div class="pb-8">
                        <p>No, we do not have real time inventory because we have thousands of different items. It would take years to provide an accurate inventory count on each item. We do try to keep the postings updated on the website if they are available, sometimes items may be out of stock and we do not have a record of that until a customer orders. Customer service does contact the customers ASAP when an item is out of stock either by phone call or email. We then update the website to show the item out of stock or remove it from the website.</p>
                    </div>
                </div>

                <?php for ($i = 0; $i < 9; $i++) {include $_SERVER['DOCUMENT_ROOT'] . '/components/faq_item.php'; } ?>
            </div>
        </div>
    </div>




    <?php include './footer.php'; ?>
</body>
</html>