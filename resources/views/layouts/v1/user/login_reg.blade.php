 <!DOCTYPE html>
 <html lang="en" class="h-full bg-cyan">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/resources/css/style.css">
    @vite('resources/css/app.css')
	@vite('resources/js/app.js')
 </head>
 <body class="h-full">
<!--
  This example requires updating your template:

  ```
  <html class="h-full bg-gray-100">
  <body class="h-full">
  ```
-->
    <div class="min-h-full">
        <main>
            <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
                @yield('log_reg')
            </div>
        </main>
    </div>
  


        
		<script src="https://unpkg.com/flowbite@1.5.1/dist/flowbite.js"></script>
		<script src="https://cdn.tailwindcss.com"></script>
	    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>   
 </body>
 </html>