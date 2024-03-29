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
    <?php include './header.php'; ?>



    <div class="w-full px-5p">
        <div class="breadcrumbs relative"> 
            <!-- <div class="absolute bg-gradient-to-r from-cream to-red h-14 top-0 right-0 w-40"></div> -->
            <a class="transition ease-in-out duration-300 hover:text-red font-bold text-black" href="/">All Categories</a>| 
            <a class="transition ease-in-out duration-300 hover:text-red font-bold text-black" href="/">Resistors</a>| 
            <a class="transition ease-in-out duration-300 hover:text-red font-bold text-black" href="/">Carbon Composition Resistors</a>| 
            <p>Carbon Composition Resistors - 1/8 watt (RC)</p>
        </div>
    </div>


    <div class="mx-5p lg:pt-16 pt-3 pb-6 mb-6 ">
        <div>
            <div>
                <h1 class="uppercase mb-5">Carbon Composition Resistors - 1/8 watt (RC)</h1>
            </div>
            <div class="flex justify-between flex-wrap lg:flex-nowrap gap-4 w-full">
                <div>
                    <p class="text-stone-500 text-lg font-medium"><span class="font-bold">Legend:</span> RC = Commercial / RCR = Military (5 band)</p>
                    <p class="text-stone-500 text-lg font-medium"><span class="font-bold">Note:</span> Minimum order is $1.00 per line item.</p>
                </div>
                <div class="flex items-center flex-wrap-reverse gap-4 w-full lg:w-auto">
                    <p class="text-stone-500 text-lg font-medium leading-normal">125 Products</p>
                    <a href="/" class="flex items-center justify-center content-center lg:w-auto w-full h-14 bg-white rounded shadow border border-stone-300 px-5 py-3 gap-2">
                        <img class="w-[18px] h-[16px]" src="./imgs/icon_filter.svg"> 
                        <div class="text-stone-900 text-lg font-medium leading-normal">Filters</div>
                    </a>
                </div>
            </div>
        </div>
    </div>



    <div class="flex px-5p pt-0 py-20 border flex justify-center items-center text-center ">
        <div class="flex flex-col w-full overflow-x-auto">
            <div class="w-full">
                <div class="inline-block min-w-full border-none">
                    <div class="overflow-x-auto border-none">
                        <table class="min-w-full text-black border-t border-b text-left border-neutral-400">
                            <thead class="border-b border-neutral-400">
                                <tr class="border-t border-b border-neutral-400">
                                    <th scope="col" class="lg:px-6 px-2  py-4"></th>
                                    <th scope="col" class="lg:px-6 px-2 py-4 whitespace-nowrap">Part Number <i class="text-neutral-400 fa-sharp fa-light fa-angle-up"></i></th>
                                    <th scope="col" class="lg:px-6 px-2 py-4 whitespace-nowrap">Description <i class="text-neutral-400  fa-sharp fa-light fa-angle-up"></i></th>
                                    <th scope="col" class="lg:px-6 px-2 py-4 whitespace-nowrap">Wattage <i class="text-neutral-400 fa-sharp fa-light fa-angle-up"></i></th>
                                    <th scope="col" class="lg:px-6 px-2 py-4 whitespace-nowrap">Ohms <i class="text-neutral-400  fa-sharp fa-light fa-angle-up"></i></th>
                                    <th scope="col" class="lg:px-6 px-2 py-4 whitespace-nowrap">Brand <i class="text-neutral-400 fa-sharp fa-light fa-angle-up"></i></th>
                                    <th scope="col" class="lg:px-6 px-2 py-4 whitespace-nowrap">Price <i class="text-neutral-400 fa-sharp fa-light fa-angle-up"></i></th>
                                    <th scope="col" class="lg:px-6 px-2 py-4 whitespace-nowrap">Bulk Price <i class="text-neutral-400 fa-sharp fa-light fa-angle-up"></i></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php for ($i = 0; $i < 10; $i++) {include $_SERVER['DOCUMENT_ROOT'] . '/components/table_row.php'; } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>
        document.querySelector('tbody').addEventListener('click', function(e) {
            var closestTr = e.target.closest('tr');
            if (closestTr && closestTr.dataset.url) {
                window.location.href = closestTr.dataset.url;
            }
        });
    </script>

    <?php include './footer.php'; ?>
</body>
</html>