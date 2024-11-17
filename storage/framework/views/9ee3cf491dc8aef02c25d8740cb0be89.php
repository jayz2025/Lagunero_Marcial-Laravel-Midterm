<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LAGUNERO & MARCIAL - MIDTERM</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
            <img src="<?php echo e(asset('images/anne.jpg')); ?>" alt="Logo" style="height: 100px; margin-right: 50px;">
            LAGUNERO & MARCIAL - MIDTERM EXAM
        </a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('products.create')); ?>">Add Product</a>
                </li>
            </ul>
        </div>
    </nav>
    
    <div class="container mt-5">
        <?php echo $__env->yieldContent('content'); ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\LAGUNERO_MARCIAL\resources\views/layouts/app.blade.php ENDPATH**/ ?>