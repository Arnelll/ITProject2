<?php $__env->startSection('title'); ?>
    + Edit Account
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
<body>
        <div class="container">
        <section class="panel">
            <div class="panel panel-footer">
            <header class="panel panel-default">
                <h3> Account Details </h3>
            </header>
            </div>
        <div class="panel panel-footer">
        <?php echo Form::open(array('route'=>'account_update','id'=>'formupdate','method'=>'post')); ?>

        <div class="row">
        <input type="hidden" value="<?php echo e($result->client_id); ?>" id="clientid" name="clientid">
            <div class="col-lg-5 col-sm-6">
                <div class="form-group">
                <strong>First Name</strong><input type="text" id="fn" name="fn" class="form-control" value="<?php echo e($result->firstname); ?>" maxlength="11" required>
                </div>
            </div>
            <div class="col-lg-5 col-sm-6">
                <div class="form-group">
                <strong>Last Name</strong><input type="text" id="ln" name="ln" class="form-control" value="<?php echo e($result->lastname); ?>" maxlength="11" required>
                </div>
            </div>
            <!--
            <div class="col-lg-2 col-sm-2">
                <div class="form-group">
                <select name="sex" class="form-control">
                    <option value="0" selected="true" disabled="true">Gender</option>
                    <option value="1">Male</option>  
                    <option value="2">Female</option>
                    </select>
                </div>
            </div> -->
            <div class="col-lg-5 col-sm-6">
                <div class="form-group">
                <strong>Address</strong><input type="text" id="address" name="address" class="form-control" value="<?php echo e($result->address); ?>" maxlength="50" required>
                </div>
            </div>
            <div class="col-lg-3 col-sm-4">
                <div class="form-group">
                <strong>Email</strong><input type="text" id="email" name="email" class="form-control" value="<?php echo e($result->email); ?>" maxlength="11" required>
                </div>
            </div>
            <div class="col-lg-2 col-sm-3">
                <div class="form-group">
                <strong>Contact Number</strong><input type="text" id="contactnum" name="contactnum" class="form-control" value="<?php echo e($result->contact_no); ?>" maxlength="11" required>
                </div>
            </div>
            <!-- <div class="col-lg-3 col-sm-3">
                <div class="form-group">
                <input type="text" name="address" class="form-control" placeholder="Address">
                </div>
            </div> -->
</div>
        <div class="col-lg-2 col-sm-2" style="margin-left:70%;">
                <div class="form-group">
                <?php echo Form::submit('Update',array('class'=>'d-inline p-2 btn btn-primary btn-lg')); ?><a href="javascript:history.go(-1)" class="d-inline p-2 btn btn-primary btn-lg" title="Return to the previous page">Return</a>
                </div>
            </div>
        <?php echo Form::hidden('_token',csrf_token()); ?>

        <?php echo Form::close(); ?>

            </div>
        </section>
    </div>
</body>
<?php $__env->stopSection(); ?>
    
<?php $__env->startSection('scripts'); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\myker\Desktop\ITProject2-master\finalThesis\Jeff\resources\views/dashboard/edit_account.blade.php ENDPATH**/ ?>