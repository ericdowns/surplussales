<header class="w-full bg-black">

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




    


    <!-- +++++++++++++++++++++++++++++ Mobile Menu Search Dropdown ++++++++++++++++++++++++++++-->

    <div class="flex flex-col w-full max-w-[600px] mx-auto absolute top-0 bg-white h-screen">
        <div class="flex gap-3 w-full bg-black pl-4 pr-4 py-3">
            <div class="flex justify-end items-center">
                <i class="text-red text-[28px] fa-sharp fa-regular fa-xmark"></i>
            </div>
            <div class="flex h-14 w-full items-center bg-white rounded overflow-hidden">
                <input class="searchinputstyle text-base" id="search" type="text" placeholder="Search keyword, item, model or part #">
                <button class="text-gray-900 focus:outline-none w-16 h-full flex items-center justify-center">
                  <i class="fa-regular fa-magnifying-glass"></i>
              </button>
          </div>
      </div>
      <div class="flex flex-col items-start bg-white w-full bg-white pb-5 [&>a]:border-b [&>a]:border-b [&>a]:px-4 ">
          <span class="p-3 text-stone-500 text-base font-medium">Trending Search</span>
          <a class="searchitem" href="/">
            <span class="text-stone-900 text-lg font-medium">Hardware, Tools, Prototyping & Construction Aids</span> 
            <span class="text-neutral-400 text-base font-medium">2,334</span>
        </a>
        <a class="searchitem" href="/">
            <span class="text-stone-900 text-lg font-medium">Hardware, Tools, Prototyping & Construction Aids</span> 
            <span class="text-neutral-400 text-base font-medium">2,334</span>
        </a>
        <a class="searchitem" href="/">
            <span class="text-stone-900 text-lg font-medium">Hardware, Tools, Prototyping & Construction Aids</span> 
            <span class="text-neutral-400 text-base font-medium">2,334</span>
        </a>
        <a class="searchitem" href="/">
            <span class="text-stone-900 text-lg font-medium">Hardware, Tools, Prototyping & Construction Aids</span> 
            <span class="text-neutral-400 text-base font-medium">2,334</span>
        </a>
    </div> <!-- form_wrapper -->



</header>