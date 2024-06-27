<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>

<body>
    <h1 class="text-center">User login</h1>
    <div class="flex item-center justify-center h-screen">
        <div class="relative m-2 w-full max-w-md h-96 rounded-lg bg-blue-600 px-10 pb-14 pt-12 shadow-md ">
            <form action="/users" method='POST'>
                @csrf
                <div class="mb-4">
                    <label for="username" class="block text-sm text-white">Student Id / Teacher Id / Email</label>
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 flex items-center pl-4">
                            <i class="fas fa-user text-gray-400"></i>
                        </span>
                        <input type="text" id="username" name="name" class="form-input mt-1 block w-full rounded-md p-3.5 pl-10 placeholder:text-xs" placeholder="Enter your Id or email or Phone Number" />
                    </div>
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-sm text-white">Password</label>
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 flex items-center pl-4">
                            <i class="fas fa-lock text-gray-400"></i>
                        </span>
                        <input type="password" id="password" name="password" class="form-input mt-1 block w-full rounded-md p-3.5 pl-10 pr-5 placeholder:text-xs" placeholder="Enter your password" />
                        <span class="absolute inset-y-0 right-0 flex cursor-pointer items-center pr-2" id="togglePassword">
                            <i class="fas fa-eye text-gray-400 " id="eye"></i>
                        </span>
                    </div>
                </div>
                <button type="submit" class="focus:shadow-outline w-full rounded bg-blue-500 px-4 py-3.5 font-semibold text-white hover:bg-blue-700 focus:outline-none">
                    Login
                </button>
                <a href="/forgot-password" class="block mt-4 text-center text-white">Forget password?</a>

            </form>
        </div>
    </div>
</body>

</html>