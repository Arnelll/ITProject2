<?php $__env->startSection('title'); ?>
    + Account
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<body>
        <div class="container">
        <section class="panel">
            <div class="panel panel-footer">
            <header class="panel panel-default">
                <h3> Job Order Details </h3>
            </header>
            </div>
        <div class="panel panel-footer">
        <?php echo Form::open(array('route'=>'account_insert','id'=>'formsave','method'=>'post')); ?>

        <h3 class="d-inline p-2"><strong>Enter Client Details</strong><a href="/new_sales" class="btn btn-primary btn-sm btn-round d-inline p-2" style="margin-left:50%; background-color: #005CA5;">+ Sales</a><a href="/new_vehicle" class="btn btn-primary btn-sm btn-round d-inline p-2" style="margin-left:1%; background-color: #005CA5;">+ Vehicle</a></h3>
        <br>
        <br>
        <div class="row">
            <div class="col-lg-6 col-sm-6">
                <div class="form-group">
                <input type="text" name="fn" class="form-control bg-white" placeholder="First Name" maxlength="30" required>
                </div>
            </div>
            <div class="col-lg-6 col-sm-6">
                <div class="form-group">
                <input type="text" name="ln" class="form-control bg-white" placeholder="Last Name" maxlength="20" required>
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
            <div class="col-lg-6 col-sm-6">
                <div class="form-group">
                <input type="text" name="address" class="form-control bg-white" placeholder="Address" maxlength="100" required>
                </div>
            </div>
            <div class="col-lg-3 col-sm-4">
                <div class="form-group">
                <input type="text" name="email" class="form-control bg-white" placeholder="Email" maxlength="30" required>
                </div>
            </div>
            <div class="col-lg-3 col-sm-3">
                <div class="form-group">
                <input type="text" name="phone" class="form-control bg-white" placeholder="Phone" maxlength="11" required>
                </div>
            </div>
            <!-- <div class="col-lg-3 col-sm-3">
                <div class="form-group">
                <input type="text" name="address" class="form-control" placeholder="Address">
                </div>
            </div> -->
            <div class="col-lg-2 col-sm-2" style="margin-left:87%;">
                <div class="form-group">
                <?php echo Form::submit('Save',array('class'=>' d-inline p-2 btn btn-primary btn-lg', 'style'=>'background-color: #005CA5')); ?><a href="javascript:history.go(-1)" class="d-inline p-2 btn btn-primary btn-lg" title="Return to the previous page" style="background-color: #005CA5;">Return</a>
                </div>
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
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\myker\Desktop\ITProject2-master\finalThesis\Jeff\resources\views/dashboard/account_new.blade.php ENDPATH**/ ?>