<?php $__env->startSection('admin'); ?>
  <div class="container">
    <div class="row">
        <div class="col">
            <div class="card border-primary mb-1 py-3 px-3" style="width:50rem">
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
                <p class="text-center mb-3"><b>Product Input</b></p>                    
                <form action="<?php echo e(route('products.store')); ?>" method="post" enctype="multipart/form-data">
                  <?php echo csrf_field(); ?>
                    <label class="ml-5">Code</label><br/>
                    <input type="text" name="code" id="code" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-400 rounded py-3 px-4 mb-1 ml-5 leading-tight focus:outline-none focus:bg-white <?php $__errorArgs = ['code'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid border-red <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('code')); ?>" ><br/>
                    <?php $__errorArgs = ['code'];
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
                    <input type="text" name="name" id="name" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-400 rounded py-3 px-4 mb-1 ml-5 leading-tight focus:outline-none focus:bg-white <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid border-red <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('name')); ?>" ><br/>
                    <?php $__errorArgs = ['name'];
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
                    <label class="ml-5">Brand</label><br/>
                    <select name="brandcode" id="brandcode" placeholder="Choose Brand" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-400 rounded py-3 px-4 mb-3 ml-5 leading-tight focus:outline-none focus:bg-white" >
                      <?php $__currentLoopData = $brand; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brands): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option  value="<?php echo e($brands->brandcode); ?>"><?php echo e($brands->brandname); ?></option>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>       
                    <label class="ml-5">Category</label><br/>
                    <select name="catcode" id="catcode" placeholder="Choose Brand" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-400 rounded py-3 px-4 mb-3 ml-5 leading-tight focus:outline-none focus:bg-white" >
                      <?php $__currentLoopData = $cat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option  value="<?php echo e($cat->catcode); ?>"><?php echo e($cat->catname); ?></option>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                    <label class="ml-5">Base Price</label><br/>
                    <input type="text" name="baseprice" id="baseprice" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-400 rounded py-3 px-4 mb-3 ml-5 leading-tight focus:outline-none focus:bg-white <?php $__errorArgs = ['baseprice'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid border-red <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('baseprice')); ?>"><br/>
                    <?php $__errorArgs = ['baseprice'];
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
                    <label class="ml-5">Sale Price</label><br/>
                    <input type="text" name="saleprice" id="saleprice" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-400 rounded py-3 px-4 mb-3 ml-5 leading-tight focus:outline-none focus:bg-white <?php $__errorArgs = ['saleprice'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid border-red <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('saleprice')); ?>"><br/>
                    <?php $__errorArgs = ['saleprice'];
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
                    <label class="ml-5">Unit</label><br/>
                    <input type="text" name="unit" id="unit" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-400 rounded py-3 px-4 mb-2 ml-5 leading-tight focus:outline-none focus:bg-white <?php $__errorArgs = ['unit'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid border-red <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('unit')); ?>"><br/>
                    <?php $__errorArgs = ['unit'];
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
                    <label class="ml-5">Stock</label><br/>
                    <input type="text" name="stock" id="stock" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-400 rounded py-3 px-4 mb-2 ml-5 leading-tight focus:outline-none focus:bg-white <?php $__errorArgs = ['stock'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid border-red <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('stock')); ?>" ><br/>
                    <?php $__errorArgs = ['stock'];
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
                    <label class="ml-5">Picture</label><br/>
                    <input type="file" name="image" id="image" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-400 rounded py-3 px-4 mb-3 ml-5 leading-tight focus:outline-none focus:bg-white"><br/>
                    <?php $__errorArgs = ['image'];
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
                    <label class="ml-5">Status</label><br/>
                    <select type="text" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-400 rounded py-3 px-4 mb-3 ml-5 leading-tight focus:outline-none focus:bg-white" name="status" id="status">
                      <option value="1">Active</option>
                      <option value="0">Inactive</option>
                    </select>
                    <button type="submit" class="rounded-md bg-green hover:bg-green-600  mt-2 px-3 py-2 w-20 ml-36">Save</button><br/>
                </form>
            </div>
        </div>              
    </div>
  </div> 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.v1.admin.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laravel\laravel10-tailwindcss\resources\views/v1/admin/item/create.blade.php ENDPATH**/ ?>