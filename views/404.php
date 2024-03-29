<?php
require base_path('views/partials/header.php');
require base_path('views/partials/nav.php');
?>
<!--
  This example requires updating your template:

  ```
  <html class="h-full">
  <body class="h-full">
  ```
-->
<main class="grid min-h-full place-items-center px-6 py-24 sm:py-32 lg:px-8">
  <div class="text-center">
    <p class="font-semibold text-indigo-600 text-6xl">404</p>
    <h1 class="mt-4 font-bold tracking-tight text-gray-900 sm:text-3xl">Page not found!</h1>
    <div class="mt-10 flex items-center justify-center gap-x-6">
      <a href="/" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Go back home</a>
    </div>
  </div>
</main>

<?php require base_path('views/partials/footer.php'); ?>