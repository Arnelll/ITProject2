<?php $__env->startSection('title'); ?>
    Clients
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="row">
    <div class="col-md-12">

        <div class="card">

            <div class="card-header">
                <div class="card-title">
                    <h3>Clients <a href="/new_account" class="btn btn-primary btn-md btn-round" style="float: right; margin: 0px; background-color: #005CA5;">+ Client</a></h3>
                    <a href="/generate" class="btn btn-primary btn-md btn-round" style="float: right; margin: 0px; background-color: #005CA5;">Print Clients</a>
                </div>
            </div>

            <div class="card-body">

                <div class="table-responsive">
                    <table class="table">

                        <thead class="text-info">
                            <th style="font-weight: 500;">Fullname</th>
                            <th style="font-weight: 500;">Contact</th>
                            <th style="font-weight: 500;">Address</th>
                            <th style="font-weight: 500;">Email</th>
                            <th style="text-align: center; font-weight: 500;">Actions</th>
                        </thead>

                        <tbody>

                            <?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($row['lastname']); ?>, <?php echo e($row['firstname']); ?></td>
                                    <td><?php echo e($row['contact_no']); ?></td>
                                    <td><?php echo e($row['address']); ?></td>
                                    <td><?php echo e($row['email']); ?></td>
                                    <td style="text-align: center;">
                                        <a href="/view_accounts/<?php echo e($row['client_id']); ?>" class="btn-xs fas fa-file-alt"></a>
                                        <a href="/edit_account/<?php echo e($row['client_id']); ?>" class="btn-xs fas fa-edit"></a>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            <nav aria-label="...">
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
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Joebemark\Desktop\ITProject2\finalThesis\Jeff\resources\views/dashboard/accounts.blade.php ENDPATH**/ ?>