<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel-Tailwind Ticket Website</title>
    <script src="https://cdn.tailwindcss.com"></script>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100">
    <div class="max-w-4xl mx-auto mt-10">
        <div class="bg-white shadow-md rounded-lg p-6">
            <p class="text-3xl font-bold text-center my-5">Thank you for your purchase</p>
            <div class="mb-4">
                <ul class="list-none">
                    <li class="text-black text-lg"></li>
                    <li class="text-gray-600 mt-1"></li>
                    <li class="text-gray-600 mt-1"></li>
                    <li class="text-gray-600 mt-1"></li>
                    <li class="text-gray-600 mt-1"></li>
                    <li class="text-black mt-1"></li>
                </ul>
                <hr class="my-4">
            </div>
            <div class="flex justify-between">
                <div class="flex-1">
                    <h5 class="text-xl font-semibold"></h5>
                </div>
                <div>
                    <p class="text-lg font-bold text-black">
                        
                    </p>
                </div>
            </div>
            <hr class="my-4">
            <div class="flex justify-between">
                <div class="flex-1">
                    <p class="text-lg">Number of Tickets</p>
                </div>
                <div>
                    <p class="text-lg"></p>
                </div>
            </div>
            <hr class="my-4">
            <div class="flex justify-between text-black">
                <div class="flex-1">
                    <p class="text-lg font-bold">Total:</p>
                </div>
                <div>
                    <p class="text-lg font-bold"></p>
                </div>
            </div>
            <hr class="border-2 border-black my-4">
            <div class="text-center mt-10">
                <form action="" method="post">
                    <input type="hidden" name="back" value="back">
                    <input type="submit" class="w-full bg-green-500 hover:bg-green-700 text-white font-bold py-2 rounded" value='Back to Dashboard'>
                </form>
                <p class="mt-2 mb-3 text-gray-500 text-center">Reservation - 2024</p>
            </div>
        </div>
    </div>
</body>

</html>