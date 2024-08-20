<html>

<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">

        <?php echo $__env->make('inc.topnav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div>
            <?php echo $__env->yieldContent('content'); ?>
        </div>
    <div>
</body>

</html><?php /**PATH C:\xampp\htdocs\LARAVEL PROJECT\Basic-Laravel\resources\views/layouts/app.blade.php ENDPATH**/ ?>