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

    <div class="grid  lg:grid-cols-12 gap-16 w-full mx-auto px-5p py-20">
        <div class="flex content-start flex-wrap lg:col-span-4 col-span-1 gap-3">


            <div class="flex flex-col gap-3">
                <div class="pb-3 text-black text-5xl font-bold font-interstate uppercase leading-10">Customer Registration</div>       
                <p>Welcome to Surplus Sales of Nebraska. We are excited you’re here!</p>
                <p>Surplus Sales of Nebraska offers one of the largest selections of new and hard to find equipment and electronic parts.</p>
                <p>For us to give you the best experience possible, please fill out this form with a few details.</p>
            </div>



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
                    <input class="inputstyle h-16" type="text">
                </div>
            </div>
            <!-- City / State / Zip -->
            <div class="flex w-full gap-3">
                <div class="flex flex-col w-1/3">
                    <label class="labelstyle"> City</label>
                    <input class="inputstyle h-16" type="text">
                </div>
                <div class="flex flex-col w-1/3">
                    <label class="labelstyle"> State </label>
                    <select class="inputstyle w-full h-16">
                        <option>Select State</option>
                        <option>Option 1</option>
                        <option>Option 2</option>
                        <option>Option 3</option>
                    </select>
                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                    </div>
                </div>
                <div class="flex flex-col w-1/3">
                    <label class="labelstyle"> Zip</label>
                    <input class="inputstyle h-16" type="text">
                </div>
            </div>
            <!-- County -->
            <div class="flex w-full gap-3">
                <div class="flex flex-col w-full">
                    <label class="labelstyle"> County</label>
                    <select class="inputstyle w-full h-16">
                        <option>Select County</option>
                        <option>Option 1</option>
                        <option>Option 2</option>
                        <option>Option 3</option>
                    </select>
                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                    </div>
                </div>
            </div>
            <!-- Address Line 1 -->
            <div class="flex w-full gap-3">
                <div class="flex flex-col w-full">
                    <label class="labelstyle"> Address Line 1</label>
                    <input class="inputstyle h-16" type="text" placeholder="">
                </div>
            </div>
            <!-- Address Line 2 -->
            <div class="flex w-full gap-3">
                <div class="flex flex-col w-full">
                    <label class="labelstyle"> Address Line 2</label>
                    <input class="inputstyle h-16" type="text" placeholder="">
                </div>
            </div>
            <!-- Username -->
            <div class="flex w-full gap-3">
                <div class="flex flex-col w-full">
                    <label class="labelstyle"> Username</label>
                    <input class="inputstyle h-16" type="text" placeholder="">
                </div>
            </div>
            <!-- Password -->
            <div class="flex w-full gap-3">
                <div class="flex flex-col w-full">
                    <label class="labelstyle"> Password</label>
                    <input class="inputstyle h-16" type="text" placeholder="">
                </div>
            </div>
            <!-- Password Verification -->
            <div class="flex w-full gap-3">
                <div class="flex flex-col w-full">
                    <label class="labelstyle"> Password Verification</label>
                    <input class="inputstyle h-16" type="text" placeholder="">
                </div>
            </div>
            <button class="btn_add_cart w-72">Submit</button>
        </div> <!-- lg:col-span-8 -->

    </div>

    
</div>

</div>



<?php include './footer.php'; ?>
</body>
</html>