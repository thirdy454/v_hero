<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://fonts.googleapis.com/css2?family=Antonio:wght@200;400&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css"
      rel="stylesheet"
    />
    <title>RegisterAsVolunteer</title>
  </head>
  <body
    style="font-family: 'Antonio', sans-serif"
    class="bg-gray-100 relative bg-no-repeat bg-cover w-full"
  >

    <!-- header -->
    <div class="h-32 bg-blue-500 flex items-center justify-center text-5xl">
      <h1>Registration for Users</h1>
    </div>
    <!-- Form -->
    <form class="max-w-2xl mx-auto mt-10" action="includes/register_volunteer.php" method="POST">
      <div class="my-5 flex justify-between items-center">
        <label class="w-1/4">NAME:</label>
        <input
          type="text"
          class="w-3/4 focus:outline-none hover:border-blue-500 focus:border-blue-500 border-b-2 border-gray-500 p-2 bg-transparent"
          name="name"
          />
      </div>
      <div class="my-5 flex justify-between items-center">
        <label class="w-1/4">Address:</label>
        <input
          type="text"
          class="w-3/4 focus:outline-none hover:border-blue-500 focus:border-blue-500 border-b-2 border-gray-500 p-2 bg-transparent"
          name="address"
        />
      </div>
      <div class="my-5 flex justify-between items-center">
        <label class="w-1/4">AGE:</label>
        <input
          type="number"
          class="w-3/4 focus:outline-none hover:border-blue-500 focus:border-blue-500 border-b-2 border-gray-500 p-2 bg-transparent"
          name="age"
        />
      </div>
      <div class="my-5 flex justify-between items-center">
        <label class="w-1/4">EMAIL ADDRESS:</label>
        <input
          type="text"
          class="w-3/4 focus:outline-none hover:border-blue-500 focus:border-blue-500 border-b-2 border-gray-500 p-2 bg-transparent"
          name="email"
        />
      </div>
      <div class="my-5 flex justify-between items-center">
        <label class="w-1/4">CREATE PASSWORD:</label>
        <input
          type="text"
          class="w-3/4 focus:outline-none hover:border-blue-500 focus:border-blue-500 border-b-2 border-gray-500 p-2 bg-transparent"
          name="password"
        />
      </div>
      <div class="w-full mt-10 flex justify-center text-2xl">
        <input
          type="submit"
          class="py-2 px-20 rounded-full hover:bg-blue-800 hover:text-white"
          name = "Signup_volunteer"
        />
      </div>
    </form>
  </body>
</html>
