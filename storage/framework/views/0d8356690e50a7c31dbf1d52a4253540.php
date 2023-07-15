<?php $__env->startSection('admin'); ?>


<div class="container">
  <button class="rounded-md content-center bg-gray text-white hover:bg-gray-600 mt-1 px-2 py-1 w-15 ml-5"><a href="<?php echo e(url('admin/brands')); ?>">Back</a></button><br/>
      
  <div class="row">
    <div class="col">
      <div class="card border-primary mb-1 py-3 px-3" style="width: 50rem">
        <p class="text-center mb-3"><b>Brand Input</b></p>                    
              <form class="w-full max-w-lg md:items-center" action="<?php echo e(route('brands.store')); ?>" method="post" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <label class="ml-5">Code</label><br/>
                <input type="text" name="brandcode" id="brandcode" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-400 rounded py-3 px-4 mb-1 ml-5 leading-tight focus:outline-none focus:bg-white <?php $__errorArgs = ['brandcode'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid border-red <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('brandcode')); ?>">
                <?php $__errorArgs = ['brandcode'];
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
                <label class="ml-5">Name</label><br/>
                <input type="text" name="brandname" id="brandname" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-400 rounded py-3 px-4 mb-1 ml-5 leading-tight focus:outline-none focus:bg-white <?php $__errorArgs = ['brandname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid  border-red <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value=<?php echo e(old('brandname')); ?>>
                <?php $__errorArgs = ['brandname'];
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
unset($__errorArgs, $__bag); ?>
                <br/>
                <button type="submit" class="rounded-md content-center bg-green text-white hover:bg-green-600 mt-2 px-3 py-2 w-20 ml-36">Save</button>                
              </form>
          </div>
      </div>              
  </div>
</div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.v1.admin.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laravel\laravel10-tailwindcss\resources\views/v1/admin/brand/create.blade.php ENDPATH**/ ?>