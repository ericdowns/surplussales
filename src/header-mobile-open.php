<header class="w-full bg-black lg:hidden">

    <!-- <style> *{  outline: 1px solid rgba(187, 187, 187, 0.3); } </style> -->

    <div class="flex flex-col px-5 py-3 gap-4">
        <div class="flex justify-between items-center">
            <div class="flex flex-col justify-center cursor-pointer">
                <i class="text-[28px] text-white fa-sharp fa-regular fa-bars"></i>
            </div>
            <a href="/"> <img class="max-w-[150px] w-full h-auto" src="./imgs/logo.svg"> </a>
            <a href="/checkout-cart-full.php" class="flex cart items-center group">
                <div class="relative cart-icon cursor-pointer -mb-2">
                    <img class="h-5 w-auto"  src="./imgs/cart.svg">
                    <div class="flex justify-center items-center absolute bg-red  text-white font-bold text-xs rounded-lg min-w-[18px] 
                    pt-[2px] pb-[2px] pr-1 pl-1 top-[-16px] right-[-9px] "> 1 </div>
                </div>
            </a>
        </div>
        <div class="flex h-14 items-center bg-white rounded overflow-hidden min-w-fit xl:min-w-[600px]">
            <input class="searchinputstyle" id="search" type="text" placeholder="Search keyword, item, model or part #">
            <button class="bg-white text-gray-900 focus:outline-none w-16 h-full flex items-center justify-center hover:opacity-50 hover:ease-in-out hover:duration-300"> <i class="fa-regular fa-magnifying-glass"></i>
            </button>
        </div>
    </div>




    <!-- +++++++++++++++++++++++++++++ Mobile Menu Navigation ++++++++++++++++++++++++++++-->

    <div class="bg-black h-full w-[90%] absolute top-0 _hidden">
        <div class="flex justify-end py-4 border-b border-stone-600 pr-5">
            <i class="text-red text-[28px]  fa-sharp fa-regular fa-xmark"></i>
        </div>
        <div class="flex flex-col pl-4 [&>a]:text-white [&>a]:py-4 [&>a]:border-b 
            [&>a]:border-stone-600 [&>a]:font-medium [&>a]:text-base [&>a:last]:border-b-0">
            <a href="/">All Categories</a>  
            <a href="/">A - Z Listing of Products</a>  
            <a href="/">About</a>  
            <a href="/">FAQ</a>  
            <a href="/">Support</a>  
            <a href="/">Register</a>  
            <a href="/">Login</a>  
        </div>
        <div class="flex w-full bg-stone-600 py-8 px-4 flex-col gap-4 -mt-[1px]">
            <a class="text-stone-100 flex" href="/"><span class="mr-2 w-2 h-2 flex bg-amber-400 rounded-full place-self-center"></span> 
                FREE Ground Shipping! On orders over $100 
                <i class="group-hover:text-amber-400 group-hover:border-amber-400 ml-1 flex text-[7px] inline-flex justify-center items-center border border-white border text-white rounded-full w-[13px] h-[13px] fa-sharp fa-solid fa-info place-self-center"></i>
            </a>
            <a class="text-stone-100 pl-4" href="/">help@surplussales.com</a>
            <a class="text-stone-100 pl-4" href="/">(402) 346-4750</a>
        </div>
    </div>




</header>