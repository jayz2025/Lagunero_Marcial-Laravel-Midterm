

<?php $__env->startSection('content'); ?>
    <h1>Products</h1>
    <a href="<?php echo e(route('products.create')); ?>" class="btn btn-primary">Add Product</a>
    <div class="row mt-3">
        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-4">
                <div class="card mb-4">
                <img src="<?php echo e(Storage::url($product->image)); ?>" alt="Product Image" class="img-fluid">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo e($product->name); ?></h5>
                        <p class="card-text"><strong>Price:</strong> Php <?php echo e(number_format($product->price, 2)); ?></p>
                        <p class="card-text"><?php echo e($product->description); ?></p>
                        <a href="<?php echo e(route('products.show', $product)); ?>" class="btn btn-secondary">View</a>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\LAGUNERO_MARCIAL\resources\views/products/index.blade.php ENDPATH**/ ?>