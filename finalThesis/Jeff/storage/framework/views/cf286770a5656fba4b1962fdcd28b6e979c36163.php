<?php $__env->startSection('title'); ?>
    Vehicle List
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="row">
    <div class="col-md-12">

        <div class="card">

            <div class="card-header">
                <div class="card-title">
                    <h3>Vehicles <a href="/new_vehicle" class="btn btn-primary btn-md btn-round" style="float: right; margin: 0px; background-color: #005CA5;">+ Vehicle</a></h3>
                </div>
            </div>

            <div class="card-body">

                <div class="table-responsive">
                    <table class="table">

                        <thead class="text-info">
                            <th style="font-weight: 500;">Plate No.</th>
                            <th style="font-weight: 500;">Type</th>
                            <th style="font-weight: 500;">Color</th>
                            <th style="text-align: center; font-weight: 500;">Action</th>
                        </thead>

                        <tbody>
                            <?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($row['plate_no']); ?></td>
                                    <td><?php echo e($row['type']); ?>(Model: <?php echo e($row['model']); ?>)</td>
                                    <td><?php echo e($row['color']); ?></td>
                                    <td style="text-align: center;">
                                        <a href="/view_vehicle/<?php echo e($row['vehicle_id']); ?>" class="btn-xs fas fa-file-alt"></a>
                                        <a href="/edit_vehicle/<?php echo e($row['vehicle_id']); ?>" class="btn-xs fas fa-edit"></a>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            
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
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\myker\Desktop\ITProject2-master\finalThesis\Jeff\resources\views/dashboard/vehicle.blade.php ENDPATH**/ ?>