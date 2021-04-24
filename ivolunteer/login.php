<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link
      href="https://fonts.googleapis.com/css2?family=Antonio:wght@200;400&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css"
      rel="stylesheet"
    />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Log In</title>
  </head>
  <body style="font-family: 'Antonio', sans-serif" class="bg-gray-100">
    <!-- header -->
    <div
      class="h-32 w-full bg-blue-500 flex justify-center items-center text-4xl"
    >
      <h1>Login</h1>
    </div>
    <!-- logincontainer -->
    <div class="max-w-2xl mx-auto flex text-3xl flex-col items-center mt-10">
      <input
        type="text"
        placeholder="EMAIL ADDRESS"
        class="py-2 px-10 w-full border border-gray-400 my-5 rounded-full"
      />
      <input
        type="text"
        placeholder="PASSWORD"
        class="py-2 px-10 w-full border border-gray-400 my-5 rounded-full"
      />
    </div>
    <p class="w-full flex justify-center text-xl mt-10">OR</p>
    <div class="w-full flex items-center flex-col text-2xl text-blue-500 mt-5">
      <button class="focus:outline-none hover:text-blue-700">
        Use your iVolunteer Account
      </button>
      <button
        class="mt-5 text-black bg-gray-200 py-2 px-10 rounded-full hover:bg-blue-500"
      >
        Login
      </button>
    </div>
  </body>
</html>