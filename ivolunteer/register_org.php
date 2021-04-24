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
    <title>Register As Org</title>
  </head>
  <body
    style="font-family: 'Antonio', sans-serif"
    class="bg-gray-100 relative bg-no-repeat bg-cover w-full"
  >
    <!-- header -->
    <div class="h-32 bg-blue-500 flex items-center justify-center text-5xl">
      <h1>Registration for Organization</h1>
    </div>
    <!-- Form -->
    <form class="max-w-2xl mx-auto mt-10">
      <div class="my-5 flex justify-between items-center">
        <label class="w-1/4">NAME OF THE ORGANIZATION:</label>
        <input
          type="text"
          class="w-3/4 focus:outline-none hover:border-blue-500 focus:border-blue-500 border-b-2 border-gray-500 p-2 bg-transparent"
        />
      </div>
      <!-- address container -->
      <div>
        <div class="my-5 flex justify-between gap-5 items-center">
          <label class="w-1/4">REGION:</label>
          <select name="Region" class="w-1/4">
            <option>--Select Region</option>
            <option>NCR</option>
          </select>

          <label class="w-1/4">CITY:</label>
          <select name="City" class="w-1/4">
            <option>--Select City</option>
            <option>Makati City</option>
          </select>
        </div>
        <div class="my-5 flex justify-between items-center">
          <label class="w-1/4">HOUSE NO/APARTMENT NO.:</label>
          <input
            type="text"
            class="w-3/4 focus:outline-none hover:border-blue-500 focus:border-blue-500 border-b-2 border-gray-500 p-2 bg-transparent"
          />
        </div>
      </div>
      <div class="my-5 flex justify-between items-center">
        <label class="w-1/4">MEMBERS:</label>
        <input
          type="number"
          class="w-3/4 focus:outline-none hover:border-blue-500 focus:border-blue-500 border-b-2 border-gray-500 p-2 bg-transparent"
        />
      </div>
      <div class="my-5 flex justify-between items-center">
        <label class="w-1/4">EMAIL ADDRESS:</label>
        <input
          type="text"
          class="w-3/4 focus:outline-none hover:border-blue-500 focus:border-blue-500 border-b-2 border-gray-500 p-2 bg-transparent"
        />
      </div>
      <div class="my-5 flex justify-between items-center">
        <label class="w-1/4">CREATE PASSWORD:</label>
        <input
          type="text"
          class="w-3/4 focus:outline-none hover:border-blue-500 focus:border-blue-500 border-b-2 border-gray-500 p-2 bg-transparent"
        />
      </div>
      <div class="w-full mt-10 flex justify-center text-2xl">
        <input
          type="submit"
          class="py-2 px-20 rounded-full hover:bg-blue-800 hover:text-white"
        />
      </div>
    </form>
  </body>
</html>