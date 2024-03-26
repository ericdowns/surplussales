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

    <div class="flex px-5p py-20 border border-slate-300 flex justify-center items-center text-center ">


        <div class="flex flex-col items-start rounded bg-white w-full max-w-[660px] bg-white rounded-md shadow">



            <div class="flex flex-col w-full p-10">
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
                        <input type="number" class="relative w-full  h-16 inputstyle" value="0" placeholder="Minimum"></input>
                    </div>              
                    <div class="w-[20%] h-1px border-b border-neutral-400"></div>
                    <div class="relative flex flex-col w-[40%]">
                        <label class="labelstyle_absolute">Maximun</label>
                        <input type="number" class="relative w-full  h-16 inputstyle" value="0" placeholder="Minimum"></input>
                    </div>   
                </div>
                <div class="w-full h-px border-b border-neutral-400"></div>


                <div class="py-10">


                  <style>
                    :root {
                     --bg-btn: #fed7d7;
                     --btn-color: #e53e3e;
                 }

                 #checkbox:checked ~ .btn-change::before {
                     transition: 0.3s;
                     transform: translateX(38px);
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

             </style>

             <div class="btn-status">
               <input type="checkbox" name="checkbox" id="checkbox" class="hidden" />
               <label for="checkbox" class="btn-change flex items-center p-1 rounded-full w-20 h-10 cursor-pointer"></label>
           </div>

           <script>
               const btn = document.querySelector('.btn-change');

               btn.addEventListener('click', () => {
                if (document.getElementById('checkbox').checked) {
                 btn.style.setProperty('--bg-btn', '#F3EEEA');
                 btn.style.setProperty('--btn-color', '#e53e3e');
             } else {
                 btn.style.setProperty('--bg-btn', '#EE433E');
                 btn.style.setProperty('--btn-color', '#F3EEEA');
             }
         });
     </script>


 </div>


</div>







</div> <!-- form_wrapper -->
</div>
</div>



<?php include './footer.php'; ?>
</body>
</html>