<header class="lg:flex hidden flex-col w-full bg-black ">

    <!-- <style> *{  outline: 1px solid rgba(187, 187, 187, 0.3); } </style> -->


    <!-- +++++++++++++++++++++++++++++ Header Top Bar Link ++++++++++++++++++++++++++++-->

    <div class="flex justify-between items-center w-full bg-stone-600 p-3 w-full ">
        <div class="flex text-stone-100 text-sm items-center"> 
            <div class="flex items-center leading-tight gap-6 hover:*:text-amber-400 hover:*:duration-300">
                <a href="#" class="text-sm text-stone-100 flex items-center group"> 
                    <span class="mr-2 w-2 h-2 flex bg-amber-400 rounded-full"></span> FREE Ground Shipping! On orders over $100 
                    <i class="group-hover:text-amber-400 group-hover:border-amber-400 ml-1 flex text-[7px] inline-flex justify-center items-center border border-white border text-white rounded-full w-[13px] h-[13px] fa-sharp fa-solid fa-info"></i>
                </a> 
                <a href="/" class="flex items-center text-sm text-stone-100">help@surplussales.com</a>
                <a href="/" class="text-sm text-stone-100">(402) 346-4750</a> 
            </div>
        </div>
        <div class="flex text-stone-100 text-sm font-medium gap-6 whitespace-nowrap hover:*:text-amber-400 "> 
            <a href="/about.php">About</a>  
            <a href="/faqs.php">FAQ</a> 
            <a href="/support.php">Support</a> 
            <a href="/register.php">Register</a>  
            <a href="/">Michael</a> 
            <a class="flex group" href="/login.php"> <img class="mr-1 w-[15px] group-hover:opacity-50"  src="./imgs/icon_profile.svg"> Login</a> 
        </div>
    </div>



    <!-- +++++++++++++++++++++++++++++ Header Main Logo / Search / Categories / Cart ++++++++++++++++++++++++++++-->
    <div class="flex justify-between header_inner p-6 gap-4">


        <!-- +++++++++++++++++++++++++++++ Header Main Logo ++++++++++++++++++++++++++++-->

        <div class="flex w-[70%] justify-between gap-6">
            <div class="flex justify-center items-center">
                <a href="/"> <img class="w-full h-auto" src="./imgs/logo.svg"> </a>
            </div>
        </div>


        <!-- +++++++++++++++++++++++++++++ Header Main Logo / Categories / Cart ++++++++++++++++++++++++++++-->
        <div class="flex w-[30%] gap-0 justify-between">
            <a href="#" class="whitespace-nowrap group h-14 rounded shadow border border-stone-500 flex items-center font-interstate hover:bg-white ease-in-out duration-500 "> 
                <div class="h-full items-center flex text-stone-100 text-base uppercase leading-snug px-2 py-2 border-r border-stone-500 group-hover:text-black"> <svg class="pl-2 pr-3 fill-stone-100  group-hover:fill-black ease-in-out duration-300 h-6 hover:fill-yellow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"> <path d="M0 80c0-8.8 7.2-16 16-16H432c8.8 0 16 7.2 16 16s-7.2 16-16 16H16C7.2 96 0 88.8 0 80zM0 240c0-8.8 7.2-16 16-16H432c8.8 0 16 7.2 16 16s-7.2 16-16 16H16c-8.8 0-16-7.2-16-16zM448 400c0 8.8-7.2 16-16 16H16c-8.8 0-16-7.2-16-16s7.2-16 16-16H432c8.8 0 16 7.2 16 16z"/> </svg> All Categories </div> 
                <div class="h-full items-center flex text-stone-100 text-base  uppercase leading-snug px-2 py-2 pl-3 pr-3 group-hover:text-black">A - Z</div> 
            </a>

            <a href="/checkout-cart-full.php" class="flex cart items-center group">
                <p class="text-stone-100 text-lg font-bold mr-2 group-hover:ease-linear group-hover:duration-500 group-hover:text-yellow">Cart</p>
                <div class="relative cart-icon cursor-pointer">
                    <img class="w-7 h-auto"  src="./imgs/cart.svg">
                    <div class="flex justify-center items-center absolute bg-red  text-white font-bold text-xs rounded-lg min-w-[20px] pt-1 pb-1 pr-1 pl-1 top-[-16px] right-[-9px] "> 10 </div>
                </div>
            </a>
        </div>

    </div> <!-- Header Main Search / Logo / Cart -->




</header>
