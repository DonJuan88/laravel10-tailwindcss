

<?php $__env->startSection('admin'); ?>

    <div class="container ml-2 mr-2">
        <div class="row">
            <div class="col">
                <div class="card border-primary mb-3" >
                    <p class="text-center"><b>Admin List</b></p>                    
                    
                    <div class=""></div>
                            <a href="<?php echo e(route('admins.create')); ?>" class="bg-emerald-700 hover:bg-emerald-500 text-white font-bold py-2 px-2 rounded-md text-sm">
                                Add New
                            </a>
                        </div>
                        <br/>
                        <?php if($message = Session::get('success')): ?>

                        <div class="alert alert-success">
                
                            <p class="p text-center"><?php echo e($message); ?></p>
                
                        </div>
                
                        <?php endif; ?>
                        <table class="table-fixed w-full bg-white rounded-lg shadow overflow-hidden">
                                <thead class="text-sm font-medium text-left text-gray-700">
                                    <tr>
                                        <th class="px-4 py-2 w-3">#</th>
                                        <th class="px-4 py-2 w-22">Username</th>
                                        <th class="px-15 py-2 w-25">Password</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $admin; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $admin): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr class="hover:bg-gray-100 border-b border-gray-200 ">
                                            <td class="px-4 py-2 "><?php echo e($loop->iteration); ?></td>
                                            <td class="px-15 py-2 w-22"><?php echo e($admin->username); ?></td>                                        
                                            <td class="px-15 py-2 w-20"><?php echo e(Str::limit($admin->password, 10)); ?></td>
                                            <td class="px-4 py-2 w-5">
                                                <form method="POST" action="<?php echo e(route('admins.destroy', $admin->id)); ?>">
                                                    <button class="rounded-md bg-blue hover:bg-blue-100 text-white font-bold  px-2 mr-2 py-1 text-sm"><a href="<?php echo e(route('admins.edit', $admin->id)); ?>">  Edit </a> </button>
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('DELETE'); ?>
                                                    <button type="submit" class="rounded-md bg-red text-white font-bold hover:bg-red-400 px-2 py-1 text-sm">Delete</button><br/>
                                                </form>
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
<?php echo $__env->make('layouts.v1.admin.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laravel\laravel10-tailwindcss\resources\views/v1/admin/account/index.blade.php ENDPATH**/ ?>