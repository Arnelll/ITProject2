<?php $__env->startSection('title'); ?>
    Delivery
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="row">
    <div class="col-md-12">

        <div class="card">
        
            <div class="card-header">
                <div class="card-title">
                    <h3>Delivery<a href="/new_delivery" class="btn btn-primary btn-md btn-round" style="float: right; margin: 0px; background-color: #005CA5;">+ Delivery</a></h3>
                </div>
            </div>

            <div class="card-body">

                <div class="table-responsive">
                    <table class="table">

                        <thead class="text-info">
                            <th style="font-weight: 500;">Delivery Id</th>
                            <th style="font-weight: 500;">Delivery Date</th>
                            <th style="font-weight: 500;">Action</th>
                        </thead>

                        <tbody>
                                <?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($row['delivery_id']); ?></td>
                                    <td><?php echo e($row['delivery_date']); ?></td>
                                    <td><a href="/delivery_profile/<?php echo e($row['delivery_id']); ?>" class="btn-xs fas fa-file-alt"></a></td>
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
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\myker\Desktop\ITProject2-master\finalThesis\Jeff\resources\views/dashboard/view_delivery.blade.php ENDPATH**/ ?>