<?php $__env->startSection('admin'); ?>
  <div class="container">
    <div class="row">
        <div class="col">
            <div class="card border-primary mb-3 py-3 px-3" style="width: 50rem">
              <?php if($errors->any()): ?>
                <div class="">
                  <p class="text-red bg-red-200 ml-5"><strong>Whoops!</strong> There were some problems with your input.<p><br>
                  <ul>
                      <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <li class="text-red bg-red-200 ml-5"><?php echo e($error); ?></li>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </ul>
                </div>
              <?php endif; ?>
                <p class="text-center mb-3"><b>Admin Input</b></p>                    
                <form class="w-full max-w-lg md:items-center" action="<?php echo e(route('admins.store')); ?>" method="post" enctype="multipart/form-data">
                  <?php echo csrf_field(); ?>
                  <label class="ml-5">User Name</label><br/>
                  <input type="text" name="username" id="username" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-400 rounded py-3 px-4 mb-3 ml-5 leading-tight focus:outline-none focus:bg-white <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid border-red <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('username')); ?>"><br/>
                  <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="flex items-center font-medium tracking-wide text-red-500 text-xs ml-5">
                      <?php echo e($message); ?>

                    </span>                  
                  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><br/>
                  <label class="ml-5">Password</label><br/>
                  <input type="password" name="password" id="password" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-400 rounded py-3 px-4 mb-3 ml-5 leading-tight focus:outline-none focus:bg-white <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid border-red <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('password')); ?>"><br/>
                  <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <span class="flex items-center font-medium tracking-wide text-red-500 text-xs ml-5">
                      <?php echo e($message); ?>

                    </span>                  
                  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><br/>
                  <button type="submit" class="rounded-md bg-green hover:bg-green-600  mt-2 px-3 py-2 w-20 ml-36">Save</button><br/>
                </form>
            </div>
        </div>              
    </div>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.v1.admin.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laravel\laravel10-tailwindcss\resources\views/v1/admin/account/create.blade.php ENDPATH**/ ?>