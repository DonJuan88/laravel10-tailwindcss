

<?php $__env->startSection('admin'); ?>
    <div class="container ml-2 mr-2">
        <div class="row">
            <div class="col">
                <div class="card border-primary mb-3" >
                    <p class="text-center"><b>User</b></p>                    
                        <table class="table-fixed w-full bg-white rounded-lg shadow overflow-hidden">
                                <thead class="text-sm font-medium text-left text-gray-700">
                                    <tr>
                                        <th class="px-4 py-2 w-3">#</th>
                                        <th class="px-4 py-2 w-12">Name</th>
                                        <th class="px-4 py-2 w-20">Email</th>
                                        <th class="px-4 py-2 w-10">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr class="hover:bg-gray-100 border-b border-gray-200 ">
                                            <td class="px-4 py-2 "><?php echo e($loop->iteration); ?></td>
                                            <td class="px-4 py-2 "><?php echo e($user->name); ?></td>                                        
                                            <td class="px-4 py-2 "><?php echo e($user->email); ?></td>
                                            <td class="px-4 py-2 w-20">
                                                <button class="rounded-md bg-gray hover:bg-gray-dark text-white font-bold  px-2 mr-2 py-1 text-sm"><a href="<?php echo e(route('customers.show', $user->id)); ?>">  Detail </a> </button>
                                            </td>
                                        </tr>    
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                                    
                                </tbody>
                        </table>
                    </div>
            </div>              
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.v1.admin.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laravel\laravel10-tailwindcss\resources\views/v1/admin/user/index.blade.php ENDPATH**/ ?>