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
    <!-- <style> *{  outline: 1px solid rgba(187, 187, 187, 0.3); } </style> -->
    <?php include './header.php'; ?>


    <img src="./imgs/about_hero.jpg" class="block h-[375px] w-full object-cover object-center" alt="" />

    <div class="grid lg:grid-cols-12 gap-16 w-full mx-auto px-5p py-20 items-start">
        <div class="flex content-center flex-wrap lg:col-span-4 col-span-1 gap-3">
            <div class="pb-3 text-black text-5xl font-bold font-interstate uppercase leading-10">Support</div>        
            <p class="pb-3">We pledge to try our best to serve you, our valued customer. In the event a problem arises with your order, please write or call us with as many details as possible, and one of our staff will promptly help find a satisfactory solution. We guarantee our merchandise is the quality stated in our advertisement, but we cannot guarantee its suitability for any particular use. 
            </p>
            <p class="pb-3">We accept no liability for any product's use or misuse. New equipment is warrantied by its manufacturer, and warranty claims are handled directly through them.
            </p>
        </div>

        

        <div class="lg:col-span-8 col-span-1 flex-col flex min-h-[500px]">


            <div class="form_wrapper flex flex-col gap-8">
                <!-- Name -->
                <div class="flex w-full gap-3">
                    <div class="flex flex-col w-1/2">
                        <label class="labelstyle"> First Name</label>
                        <input class="inputstyle h-16" id="grid-first-name" type="text">
                    </div>
                    <div class="flex flex-col w-1/2">
                        <label class="labelstyle"> First Name</label>
                        <input class="inputstyle h-16" id="grid-first-name" type="text">
                    </div>
                </div>
                <!-- Email -->
                <div class="flex w-full gap-3">
                    <div class="flex flex-col w-full">
                        <label class="labelstyle"> Email Address</label>
                        <input class="inputstyle h-16" type="email">
                    </div>
                </div>
                <!-- Order Number -->
                <div class="flex w-full gap-3">
                    <div class="flex flex-col w-full">
                        <label class="labelstyle"> Order Number </label>
                        <input class="inputstyle h-16" type="email">
                    </div>
                </div>
                <div class="flex flex-col w-full">
                    <label class="labelstyle"> Your Message </label>
                    <textarea class="inputstyle block h-fit w-full min-h-[auto]" rows="6"></textarea>
                </div>
                <button class="btn_add_cart w-48">Submit</button>
            </div> <!-- form_wrapper -->

        </div>

    </div>



    <?php include './footer.php'; ?>
</body>
</html>