<?php $__env->startSection('title'); ?>
    Product List
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="row">
    <div class="col-md-12">

        <div class="card">
        
            <div class="card-header">
                <div class="card-title">
                    <h3>Products <a href="/new_product" class="btn btn-primary btn-md btn-round" style="float: right; margin: 0px; background-color: #005CA5;">+ Product</a></h3>
                </div>
            </div>

            <div class="card-body">

                <div class="table-responsive">
                    <table class="table">

                        <thead class="text-info">
                            <th style="font-weight: 500;">Product Name</th>
                            <th style="font-weight: 500;">Status</th>
                            <th style="text-align: center; font-weight: 500;">Actions</th>
                        </thead>

                        <tbody>

                            <?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($row['product_name']); ?></td>
                                    <td><?php echo e($row['status']); ?></td>
                                    <td style="text-align: center;">
                                        <a href="/product_profile/<?php echo e($row['product_id']); ?>" class="btn-xs fas fa-file-alt"></a>
                                        <a href="/edit_product/<?php echo e($row['product_id']); ?>" class="btn-xs fas fa-edit"></a>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            <?php echo e($result->links()); ?>

                            
                        </tbody>

                    </table>
                </div>

            </div>

        </div>

    </div>
</div>

<?php $__env->stopSection(); ?>
    
<?php $__env->startSection('scripts'); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\63977\Desktop\thesis\ITProject2\finalThesis\Jeff\resources\views/dashboard/product.blade.php ENDPATH**/ ?>