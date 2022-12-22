<?php
include('loginStyles.css');
?>
<div class="flex h-screen w-full items-center justify-center bg-gray-900 bg-cover bg-no-repeat" style="background-color: #d5b59c">
  <div class="rounded-xl bg-gray-800 bg-opacity-50 px-16 py-10 shadow-lg backdrop-blur-md max-sm:px-8">
    <div class="text-white">
      <!--  Tittle area --> 
      <div class="mb-8 flex flex-col items-center">
        
        <h1 class="text">Welcome to LMS</h1>
        
      </div>
      <!--  Login form area -->
      <form action= "loadContent(teachercheck)">
       <!--  Username area -->
        <div class="mt-16 flex flex-col xl:w-2/6 lg:w-1/2 md:w-1/2 w-full">
           <label for="username" class="text">Username</label>
           <input tabindex="0" type="text" id="username" name="username" required class="border border-gray-300 dark:border-gray-700 pl-3 py-3 shadow-sm rounded text-sm focus:outline-none focus:border-indigo-700 bg-transparent placeholder-gray-500 text-gray-600 dark:text-gray-400" placeholder="mentor" />
        </div>
        <!--  Password area -->
        <div class="mt-16 flex flex-col xl:w-2/6 lg:w-1/2 md:w-1/2 w-full">
           <label for="username" class="text">Password</label>
           <input tabindex="0" type="text" id="username" name="username" required class="border border-gray-300 dark:border-gray-700 pl-3 py-3 shadow-sm rounded text-sm focus:outline-none focus:border-indigo-700 bg-transparent placeholder-gray-500 text-gray-600 dark:text-gray-400" placeholder="******" />
        </div>     
        <!--  Button area -->
        <div class="mt-8 flex justify-center text-lg text-white">
          <button type="submit" class="btn">Log in</button>
        </div>
      </form>
      </div>
    </div>
</div>