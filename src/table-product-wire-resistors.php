<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Surplus Sales of Nebraska </title>
    <style> @import url("https://use.typekit.net/mbi6zih.css"); </style>
    <link rel="stylesheet" href="https://kit.fontawesome.com/51895c5ec0.css" crossorigin="anonymous">
    <link rel="stylesheet" href="./output.css">
</head>

<body class="bg-cream">

    <?php include './header.php'; ?>
    <?php include './header-mobile.php'; ?>


    <div class="w-full px-5p max-w-screen-lg">
        <div class="breadcrumbs">       
            <a class="transition ease-in-out duration-300 hover:text-red font-bold text-black" href="/">All Categories</a>| 
            <a class="transition ease-in-out duration-300 hover:text-red font-bold text-black" href="/">Resistors</a>| 
            <a class="transition ease-in-out duration-300 hover:text-red font-bold text-black" href="/">Wire Wound Resisters</a>| 
            <p>Wire Wound Resisters - 0 ohm - 200k ohm</p>
        </div>
    </div>


    <!--++++++++++++++++ Page Header +++++++++++++++++++++++++-->
    <div class="mx-5p lg:pt-16 pt-10 pb-6 mb-6 ">
        <div class="flex justify-between  lg:flex-row flex-col gap-5">
            <div class="grow-[2] flex justify-between  flex-col  w-full">
                <div>
                    <h1 class="uppercase mb-5">Wire Wound Resisters - 0 ohm - 200k ohm</h1>
                </div>
                <div>
                    <p class="text-stone-500 text-lg font-medium">
                        Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget. 
                    </p>
                </div>
            </div>
            <div class="flex justify-start lg:justify-end grow-[1]  lg:items-center lg:self-end lg:flex-row flex-col gap-4">
                <p class="text-stone-500 text-lg font-medium leading-normal whitespace-nowrap">1,598 Products Products</p>
                <a href="/" class="filterbtn">
                    <img class="w-[18px] h-[16px]" src="./imgs/icon_filter.svg"> 
                    <div class="text-stone-900 text-lg font-medium leading-normal">Filters</div>
                </a>
            </div>
        </div>
    </div> <!-- Page Header -->


    <!--++++++++++++++++ Table / Header / Table Rows +++++++++++++++++++++++++-->
    <div class="flex px-5p pt-0 py-20 flex justify-center items-center text-center ">
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
                                <?php for ($i = 0; $i < 10; $i++) {include $_SERVER['DOCUMENT_ROOT'] . '/components/table_row_misc.php'; } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- Table / Header / Table -->



    <!--++++++++++++++++ Pagination +++++++++++++++++++++++++-->
    <div class="flex px-5p pt-0 py-20 flex justify-center items-center">
        <nav class="inline-flex pb-40 gap-2 w-full mx-auto justify-center">
            <button type="button" aria-current="page" class="inline-flex rounded items-center px-4 py-2 text-sm font-semibold border border-stone-500 bg-neutral-800 text-white">1</button>
            <button type="button" class="inline-flex items-center px-4 py-2 text-sm rounded font-semibold border border-stone-500 hover:bg-neutral-800 hover:text-white">2</button>
            <button type="button" class="inline-flex items-center px-4 py-2 text-sm rounded font-semibold border border-stone-500 hover:bg-neutral-800 hover:text-white">3</button>
            <button type="button" class="inline-flex items-end px-2  text-lg  font-semibold">...</button>
            <button type="button" class="inline-flex items-center px-4 py-2 text-sm rounded font-semibold border border-stone-500 hover:bg-neutral-800 hover:text-white">7</button>
        </nav>
    </div> <!-- Pagination -->



    <!--++++++++++++++++ Using this to apply a tab to table row +++++++++++++++++++++++++-->
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