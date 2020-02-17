<?php $__env->startSection('title'); ?>
    Mechanics
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="row">
    <div class="col-md-12">

        <div class="card">

            <div class="card-header">
                <div class="card-title">
                    <h3>Mechanics <a href="/new_mechanic" class="btn btn-primary btn-md btn-round" style="float: right; margin: 0px; background-color: #005CA5;">+ Mechanic</a></h3>
                </div>
            </div>

            <div class="card-body">

                <div class="table-responsive">
                    <table class="table">

                        <thead class="text-info">
                            <th style="font-weight: 500;">Fullname</th>
                            <th style="font-weight: 500;">Status</th>
                            <th style="text-align: center; font-weight: 500;">Action</th>
                        </thead>

                        <tbody>
                            
                            <?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                <tr>
                                    <td><?php echo e($row['last_name']); ?>, <?php echo e($row['first_name']); ?></td>
                                    <td><?php echo e($row['status']); ?></td>
                                    <td style="text-align: center;">
                                    <a href="/remove_mechanic/<?php echo e($row['mechanic_id']); ?>" class="btn-xs fas fa-user-minus"></a>
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
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\63977\Desktop\thesis\ITProject2\finalThesis\Jeff\resources\views/dashboard/mechanic.blade.php ENDPATH**/ ?>