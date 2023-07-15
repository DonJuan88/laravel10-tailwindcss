 <!DOCTYPE html>
 <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <link rel="stylesheet" href="/resources/css/style.css">
		<link rel="stylesheet" href="https://rsms.me/inter/inter.css">
		<script src="https://cdn.tailwindcss.com"></script>
		<?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
		<?php echo app('Illuminate\Foundation\Vite')('resources/js/app.js'); ?>

    </head>
    <body class="flex items-center justify-center h-screen bg-gray-100">
	<!-- component -->
		<div class="flex h-screen bg-gray-100">

		<!-- sidebar -->
		<div class="hidden md:flex flex-col w-64 bg-gray-800">
			<div class="flex items-center justify-center h-16 bg-gray-900">
				<span class="text-white font-bold uppercase">Kelontong</span>
			</div>
			<div class="flex flex-col flex-1 overflow-y-auto">
				<nav class="flex-1 px-2 py-4 bg-gray-800">
					<a href="<?php echo e(url('admin/dashboard')); ?>" class="flex items-center px-4 py-2 text-gray-100 hover:bg-gray-700">
						<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24"
							stroke="currentColor">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
								d="M4 6h16M4 12h16M4 18h16" />
						</svg>
						Dashboard
					</a>
					<a href="<?php echo e(url('admin/orders')); ?>" class="flex items-center px-4 py-2 mt-2 text-gray-100 hover:bg-gray-700">
						<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
							<path stroke-linecap="round" stroke-linejoin="round" d="M3.75 12h16.5m-16.5 3.75h16.5M3.75 19.5h16.5M5.625 4.5h12.75a1.875 1.875 0 010 3.75H5.625a1.875 1.875 0 010-3.75z" />
						</svg>
						Order
					</a>
					<a href="<?php echo e(url('admin/customers')); ?>" class="flex items-center px-4 py-2 mt-2 text-gray-100 hover:bg-gray-700">
						<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-2">
							<path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
						  </svg>						  
						Customer
					</a>
					<div id="accordion-collapse" data-accordion="collapse">
						<h2 id="accordion-collapse-heading-1">
						  <button type="button" class="flex items-center px-4 py-2 mt-2 text-white hover:bg-gray-700" data-accordion-target="#accordion-collapse-body-1" aria-expanded="true" aria-controls="accordion-collapse-body-1">
							<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-2">
								<path stroke-linecap="round" stroke-linejoin="round" d="M8.25 6.75h12M8.25 12h12m-12 5.25h12M3.75 6.75h.007v.008H3.75V6.75zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zM3.75 12h.007v.008H3.75V12zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm-.375 5.25h.007v.008H3.75v-.008zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
							  </svg>							  
									Master
							<svg data-accordion-icon class="w-6 h-6 rotate-180 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
						  </button>
						</h2>
						<div id="accordion-collapse-body-1" class="hidden" aria-labelledby="accordion-collapse-heading-1">
							<a href="<?php echo e(url('admin/brands')); ?>" class="flex items-center px-4 py-2 mt-2 text-gray-100 hover:bg-gray-700">
								<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-2">
									<path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
								</svg>								
								Brand
							</a>
							<a href="<?php echo e(url('admin/cats')); ?>" class="flex items-center px-4 py-2 mt-2 text-gray-100 hover:bg-gray-700">
								<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-2">
									<path stroke-linecap="round" stroke-linejoin="round" d="M9.568 3H5.25A2.25 2.25 0 003 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 005.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 009.568 3z" />
									<path stroke-linecap="round" stroke-linejoin="round" d="M6 6h.008v.008H6V6z" />
								  </svg>	
								Category
							</a>
							<a href="<?php echo e(url('admin/products')); ?>" class="flex items-center px-4 py-2 mt-2 text-gray-100 hover:bg-gray-700">
								<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24"
									stroke="currentColor">
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
										d="M6 18L18 6M6 6l12 12" />
								</svg>
								Product
							</a>
							<a href="<?php echo e(url('admin/status')); ?>" class="flex items-center px-4 py-2 mt-2 text-gray-100 hover:bg-gray-700">
								<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-2">
									<path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
								</svg>  
								Status
							</a>
							<a href="<?php echo e(url('admin/admins')); ?>" class="flex items-center px-4 py-2 mt-2 text-gray-100 hover:bg-gray-700">
								<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
									<path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
								</svg>
								Admin
							</a>
						</div>
					<a href="#" class="flex items-center px-4 py-2 mt-2 text-gray-100 hover:bg-gray-700">
						<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-2">
							<path stroke-linecap="round" stroke-linejoin="round" d="M11.42 15.17L17.25 21A2.652 2.652 0 0021 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 11-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 004.486-6.336l-3.276 3.277a3.004 3.004 0 01-2.25-2.25l3.276-3.276a4.5 4.5 0 00-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437l1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008z" />
						  </svg>						  
						Settings
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
			<div class="container mx-auto">
				<?php echo $__env->yieldContent('admin'); ?>
			</div>
		</div>
		
	</div>
			<script src="https://unpkg.com/flowbite@1.5.1/dist/flowbite.js"></script>
			<script src="https://cdn.tailwindcss.com"></script>
	        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>    
            
    </body>
</html><?php /**PATH C:\laravel\laravel10-tailwindcss\resources\views/layouts/v1/admin/main.blade.php ENDPATH**/ ?>