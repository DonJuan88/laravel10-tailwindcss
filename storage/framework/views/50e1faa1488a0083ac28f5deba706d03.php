<?php $__env->startSection('admin'); ?>
  <div class="container">
    <div class="row">
        <div class="col">
            <div class="card border-primary mb-3 py-3 px-3" style="width:50rem">
                <p class="text-center mb-3"><b>Product Input</b></p>                    
                <form action="<?php echo e(route('products.store')); ?>" method="post" enctype="multipart/form-data">
                  <?php echo csrf_field(); ?>
                    <label class="ml-5">Code</label><br/>
                    <input type="text" name="code" id="code" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-400 rounded py-3 px-4 mb-3 ml-5 leading-tight focus:outline-none focus:bg-white" ><br/>
                    <label class="ml-5">Name</label><br/>
                    <input type="text" name="name" id="name" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-400 rounded py-3 px-4 mb-3 ml-5 leading-tight focus:outline-none focus:bg-white" ><br/>
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
                    <input type="text" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-400 rounded py-3 px-4 mb-3 ml-5 leading-tight focus:outline-none focus:bg-white" name="baseprice" id="baseprice"><br/>
                    <label class="ml-5">Sale Price</label><br/>
                    <input type="text" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-400 rounded py-3 px-4 mb-3 ml-5 leading-tight focus:outline-none focus:bg-white" name="saleprice" id="saleprice"><br/>
                    <label class="ml-5">Unit</label><br/>
                    <input type="text" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-400 rounded py-3 px-4 mb-3 ml-5 leading-tight focus:outline-none focus:bg-white" name="unit" id="unit"><br/>
                    <label class="ml-5">Stock</label><br/>
                    <input type="text" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-400 rounded py-3 px-4 mb-3 ml-5 leading-tight focus:outline-none focus:bg-white" name="stock" id="stock"><br/>
                    <label class="ml-5">Picture</label><br/>
                    <input type="file" name="image" id="image" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-400 rounded py-3 px-4 mb-3 ml-5 leading-tight focus:outline-none focus:bg-white"><br/>
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