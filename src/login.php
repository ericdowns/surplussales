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


    <div class="flex px-5p py-20 border border-slate-300 flex justify-center items-center text-center ">
        <div class="flex flex-col items-start rounded bg-white w-full max-w-[680px] lg:p-10 p-6">
            <div class="pb-8 text-black text-5xl font-bold font-interstate uppercase leading-10">Customer Login</div>        

            <div class="form_wrapper flex flex-col w-full gap-8">
                <!-- Email -->
                <div class="flex w-full gap-3">
                    <div class="flex flex-col w-full">
                        <label class="labelstyle"> Username or email address*</label>
                        <input class="inputstyle h-16" type="email">
                    </div>
                </div>
                <!-- Order Number -->
                <div class="flex w-full gap-3">
                    <div class="flex flex-col w-full">
                        <label class="labelstyle"> Password* </label>
                        <input class="inputstyle h-16" type="email">
                    </div>
                </div>
                <div class="flex items-center">
                    <input type="checkbox" class=" w-[20px] h-[20px] shrink-0 mt-0.5 border-gray-200 rounded text-neutral-800 focus:ring-neutral-800 disabled:opacity-50 disabled:pointer-events-none dark:bg-gray-800 dark:border-gray-700 dark:checked:bg-neutral-800 dark:checked:border-neutral-800">
                    <label class="text-stone-500 text-lg font-medium ms-3">Remember Me</label>
                </div>
                <button class="btn_add_cart lg:w-96 w-full hover:bg-white">Login</button>
                <div class="flex flex-col items-start gap-2">
                    <a href="/" class="text-neutral-800 font-bold underline hover:opacity-50 hover:ease-in-out hover:duration-300">Lost your password?</a>
                    <p class="text-neutral-800 font-medium">Need an account? <a class="font-bold underline hover:opacity-50 hover:ease-in-out hover:duration-300" href="/">Sign up here.</a></p>
                </div>
            </div> <!-- form_wrapper -->

        </div>
    </div>



    <?php include './footer.php'; ?>
</body>
</html>