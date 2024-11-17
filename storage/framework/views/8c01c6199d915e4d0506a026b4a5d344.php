

<?php $__env->startSection('content'); ?>
    <h1><?php echo e($product->name); ?></h1>
    <img src="<?php echo e(Storage::url($product->image)); ?>" alt="Product Image" class="img-fluid">
    <p><strong>Price:</strong>  Php <?php echo e(number_format($product->price, 2)); ?></p>
    <p><?php echo e($product->description); ?></p>

    <a href="<?php echo e(route('products.edit', $product)); ?>" class="btn btn-primary">Edit</a>
    <form action="<?php echo e(route('products.destroy', $product)); ?>" method="POST" style="display:inline;">
        <?php echo csrf_field(); ?>
        <?php echo method_field('DELETE'); ?>
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\LAGUNERO_MARCIAL\resources\views/products/show.blade.php ENDPATH**/ ?>