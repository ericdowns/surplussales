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

<body class="bg-cream">




    <?php include './header.php'; ?>
    <?php include './header-mobile.php'; ?>

    
    <!-- <style> *{  outline: 1px solid rgba(187, 187, 187, 0.3); } </style> -->

    <style>
        :root {
            --bg-btn: #C4C4C4;
            --btn-color: #FFF;
        }

        .btn-change {
            background-color: var(--bg-btn);
        }

        .btn-change::before {
            content: '';
            display: block;
            width: 30px;
            height: 30px;
            border-radius: 50%;
            background-color: var(--btn-color);
            transition: 0.3s;
            transform: translateX(0);
        }

        #checkbox:checked ~ .btn-change {
            --bg-btn: #EE433E; /* Red background */
        }

        #checkbox:checked ~ .btn-change::before {
            transform: translateX(30px);
        }

    </style>

    <script>
        document.getElementById('checkbox').addEventListener('change', function() {
            const btnChange = document.querySelector('.btn-change');
            if (this.checked) {
        btnChange.style.setProperty('--bg-btn', '#EE433E'); // Optional: Directly manipulate style for immediate changes
    } else {
        btnChange.style.setProperty('--bg-btn', '#C4C4C4'); // Reset back to original color
    }
});
</script>



<div class="flex px-5p py-20 border border-slate-300 flex justify-center items-center text-center ">


    <div class="flex flex-col items-start rounded bg-white w-full max-w-[660px] bg-white rounded-md shadow-xl border-2 border-stone-300">
        <div class="flex w-full h-14  bg-cream justify-center items-center p-4 relative rounded-tl-md rounded-tr-md">
            <p class="text-neutral-800 text-xl font-bold leading-normal">Filters</p>
            <a class="group flex items-center justify-center" href="#"><i class="group-hover:opacity-50 absolute right-5 fa-sharp fa-regular fa-xmark"></i></a>
        </div>
        <div class="flex flex-col w-full p-5">
            <div class="flex pb-7">
                <p class="text-neutral-800 text-lg font-bold leading-normal">ohm Range</p>
            </div>
            <div class="flex justify-between w-full  h-1 bg-red relative">
                <div class="w-7 h-7 bg-red -top-3 left-0 absolute rounded-full shadow border-2 border-white" ></div>
                <div class="w-7 h-7 bg-red -top-3 right-0 absolute rounded-full shadow border-2 border-white" ></div>
            </div>
            <div class="flex justify-between items-center py-10 gap-7">
                <div class="relative flex flex-col w-[40%]">
                    <label class="labelstyle_absolute">Minimum</label>
                    <input type="number" class="relative w-full  h-16 inputstyle" value="0" placeholder="Minimum"></input>
                </div>              
                <div class="w-[20%] h-1px border-b border-neutral-400"></div>
                <div class="relative flex flex-col w-[40%]">
                    <label class="labelstyle_absolute">Maximun</label>
                    <input type="number" class="relative w-full  h-16 inputstyle" value="0" placeholder="Minimum"></input>
                </div>   
            </div>
            <div class="w-full h-px border-b border-neutral-400 mb-10"></div>
            <div class="flex pb-7">
                <p class="text-neutral-800 text-lg font-bold leading-normal">ohm Range</p>
            </div>
            <div class="flex justify-between w-full  h-1 bg-red relative">
                <div class="w-7 h-7 bg-red -top-3 left-0 absolute rounded-full shadow border-2 border-white" ></div>
                <div class="w-7 h-7 bg-red -top-3 right-0 absolute rounded-full shadow border-2 border-white" ></div>
            </div>
            <div class="flex justify-between items-center py-10 gap-7">
                <div class="relative flex flex-col w-[40%]">
                    <label class="labelstyle_absolute">Minimum</label>
                    <input type="number" class="relative w-full  h-16 inputstyle" value="1" placeholder="Minimum"></input>
                </div>              
                <div class="w-[20%] h-1px border-b border-neutral-400"></div>
                <div class="relative flex flex-col w-[40%]">
                    <label class="labelstyle_absolute">Maximun</label>
                    <input type="number" class="relative w-full  h-16 inputstyle" value="500" placeholder="Minimum"></input>
                </div>   
            </div>
            <div class="w-full h-px border-b border-neutral-400 mb-10"></div>
            <div class="flex pb-7">
                <p class="text-neutral-800 text-lg font-bold leading-normal">ohm Range</p>
            </div>
            <div class="flex justify-between w-full  h-1 bg-red relative">
                <div class="w-7 h-7 bg-red -top-3 left-0 absolute rounded-full shadow border-2 border-white" ></div>
                <div class="w-7 h-7 bg-red -top-3 right-0 absolute rounded-full shadow border-2 border-white" ></div>
            </div>
            <div class="flex justify-between items-center py-10 gap-7">
                <div class="relative flex flex-col w-[40%]">
                    <label class="labelstyle_absolute">Minimum</label>
                    <input type="number" class="relative w-full  h-16 inputstyle" value="0.1" placeholder="Minimum"></input>
                </div>              
                <div class="w-[20%] h-1px border-b border-neutral-400"></div>
                <div class="relative flex flex-col w-[40%]">
                    <label class="labelstyle_absolute">Maximun</label>
                    <input type="number" class="relative w-full  h-16 inputstyle" value="10" placeholder="Minimum"></input>
                </div>   
            </div>
            <div class="w-full h-px border-b border-neutral-400"></div>
            <div class="py-10 flex items-center gap-5 _bg-red">
                <div class="flex text-left flex-wrap">
                    <p class="text-neutral-800 text-lg font-bold leading-normal mb-2">Show Bulk Price Only</p>
                    <p class="text-stone-500 text-base font-medium leading-tight">Ellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. </p>
                </div>
                <div class="btn-status">
                 <input type="checkbox" name="checkbox" id="checkbox" class="hidden" />
                 <label for="checkbox" class="btn-change flex items-center p-1 rounded-full w-[70px] h-10 cursor-pointer">
                 </label>
             </div>
         </div>
         <div class="w-full h-px border-b border-neutral-400 mb-10"></div>
         <div class="flex items-center justify-between">
            <a href="#" class="text-sky-700 text-lg font-bold leading-normal hover:text-neutral-800">Clear All</a>
            <button class="btn_add_cart w-52 hover:bg-white">Show Results</button>
        </div>
    </div> <!-- form_wrapper -->
</div>
</div>


<?php include './footer.php'; ?>
</body>
</html>