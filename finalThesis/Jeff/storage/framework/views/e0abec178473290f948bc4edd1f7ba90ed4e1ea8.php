<?php $__env->startSection('title'); ?>
    Sales List
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="row">
    <div class="col-md-12">

        <div class="card">
        
            <div class="card-header">
                <div class="card-title">
                    <h3>Sales <a href="/new_sales" class="btn btn-primary btn-md btn-round" style="float: right; margin: 0px; background-color: #005CA5;">+ Sales</a></h3>
                </div>
            </div>

            <div class="card-body">

                <div class="table-responsive">
                    <table class="table">

                        <thead class="text-info">
                            <th style="font-weight: 500;">Product Name</th>
                            <th style="font-weight: 500;">Quantity</th>
                            <th style="font-weight: 500;">Client (Optional)</th>
                            <th style="font-weight: 500;">Date</th>
                            <th style="font-weight: 500;text-align: right;">Total</th>
                        </thead>

                        <tbody>

                            <?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($row['product_name']); ?></td>
                                    <td><?php echo e($row['quantity']); ?></td>
                                    <?php if($row['lastname'] == null): ?>
                                    <td>Anonymous</td>
                                    <?php else: ?>
                                    <td><?php echo e($row['lastname']); ?>, <?php echo e($row['firstname']); ?></td>
                                    <?php endif; ?>
                                    <td><?php echo e($row['date_created']); ?></td>
                                    <td style="text-align: right;"><?php echo e($row['total']); ?></td>
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
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Joebemark\Desktop\ITProject2\finalThesis\Jeff\resources\views/dashboard/sales.blade.php ENDPATH**/ ?>