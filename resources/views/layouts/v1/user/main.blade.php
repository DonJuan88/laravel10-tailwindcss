<!DOCTYPE html>
<html lang="en">
   <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <meta http-equiv="X-UA-Compatible" content="ie=edge">
       <title>Document</title>
       <link rel="stylesheet" href="/resources/css/style.css">
       <link rel="stylesheet" href="https://rsms.me/inter/inter.css">

       @vite('resources/css/app.css')
       @vite('resources/js/app.js')

   </head>
   <body class="flex items-center justify-center h-screen bg-gray-100">
   <!-- component -->
       <div class="flex h-screen bg-gray-100">

       <!-- sidebar -->
       <div class="hidden md:flex flex-col w-64 bg-cyan">
           <div class="flex items-center justify-center h-16 bg-cyan">
               <span class="text-black font-bold uppercase">Kelontong</span>
           </div>
           <div class="flex flex-col flex-1 overflow-y-auto">
               <nav class="flex-1 px-2 py-4 bg-cyan">
                   <a href="{{  url('admin/dashboard') }}" class="flex items-center px-4 py-2 text-black hover:bg-cyan-100">
                       <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24"
                           stroke="currentColor">
                           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                               d="M4 6h16M4 12h16M4 18h16" />
                       </svg>
                       Home
                   </a>
                   <a href="{{ url('admin/orders') }}" class="flex items-center px-4 py-2 mt-2 text-black hover:bg-cyan-100">
                       <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-2">
                           <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                         </svg>						  
                        Order
                   </a>
                   <a href="{{ url('admin/customers') }}" class="flex items-center px-4 py-2 mt-2 text-black hover:bg-cyan-100">
                       <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-2">
                           <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                         </svg>						  
                       My Wishlist
                   </a>
                   <a href="#" class="flex items-center px-4 py-2 mt-2 text-black hover:bg-cyan-100">
                       <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-2">
                           <path stroke-linecap="round" stroke-linejoin="round" d="M11.42 15.17L17.25 21A2.652 2.652 0 0021 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 11-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 004.486-6.336l-3.276 3.277a3.004 3.004 0 01-2.25-2.25l3.276-3.276a4.5 4.5 0 00-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437l1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008z" />
                         </svg>						  
                       Account
                   </a>
               </nav>
           </div>
       </div>
   
       <!-- Main content -->
       <div class="flex flex-col flex-1 overflow-y-auto">
           <div class="flex items-center justify-between h-16 bg-white border-b border-gray-200">
               <div class="flex items-center px-4">
                   <button class="text-gray-500 focus:outline-none focus:text-gray-700">
                       <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                           stroke="currentColor">
                           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                               d="M4 6h16M4 12h16M4 18h16" />
                       </svg>
                   </button>
                   <input class="mx-4 w-full border rounded-md px-4 py-2" type="text" placeholder="Search">
               </div>
               <div class="flex items-center pr-4">
   
                   <button
                       class="flex items-center text-gray-500 hover:text-gray-700 focus:outline-none focus:text-gray-700">
                       <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                           stroke="currentColor">
                           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                               d="M12 19l-7-7 7-7m5 14l7-7-7-7" />
                       </svg>
                   </button>
               </div>
           </div>
           <div class="container mx-auto bg-white">
               @yield('admin')
           </div>
       </div>
       
   </div>



           <script src="https://unpkg.com/flowbite@1.5.1/dist/flowbite.js"></script>
           <script src="https://cdn.tailwindcss.com"></script>
           <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>    
           
   </body>
</html>