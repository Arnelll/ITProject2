<div class="container">
    <section class="panel">
        <header>
            <h3><strong style="color:#1064A5;">Job Order Details (Date Created: <?php echo e($araw); ?>)</strong></h3>
            <hr>
        </header>
    </section>
    <div class="row">
        
        <strong><center>Customer Details</center></strong>
        <br>
        <strong>Client:</strong> <?php echo e($clients->lastname); ?>,<?php echo e($clients->firstname); ?> <br>
        <strong>Vehicle:</strong> <?php echo e($vehicle->model); ?> (<?php echo e($vehicle->type); ?>) | <strong>Plate No:</strong> <strong style="color:#FF5F5F;"><?php echo e($vehicle->plate_no); ?></strong> <br>
        <strong>Mechanic:</strong> <?php echo e($mechanic->last_name); ?>, <?php echo e($mechanic->first_name); ?> <br>
        <strong>Service Rendered:</strong> <?php echo e($jo->remarks); ?> <br>
        <strong>Job Order Status:</strong> <?php echo e($jo->status); ?> <br>
        <br><br>
        <?php if($jo->status=='Pending' || 'Ongoing'): ?>
        <strong>List of Items to be Used:</strong><br>
        <?php else: ?>
        Items Used:
        <?php endif; ?>
        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php echo e($row['quantity']); ?> of <?php echo e($row['product_name']); ?><br>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </div>
</div>
    <?php /**PATH C:\Users\63977\Desktop\thesis\ITProject2\finalThesis\Jeff\resources\views/test.blade.php ENDPATH**/ ?>