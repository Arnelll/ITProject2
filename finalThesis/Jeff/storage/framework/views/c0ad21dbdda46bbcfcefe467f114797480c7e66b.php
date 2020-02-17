<?php $__env->startSection('title'); ?>
    + Edit Product
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
<body>
        <div class="container">
        <section class="panel">
        <div class="panel panel-footer">
            <header class="panel panel-default">
                <h3> Product Details </h3>
            </header>
            </div>
        <div class="panel panel-footer">
        <?php echo Form::open(array('route'=>'product_update','id'=>'formupdate','method'=>'post')); ?>

        <div class="row">
        <input type="hidden" value="<?php echo e($result->product_id); ?>" id="productid" name="productid">
            <div class="col-lg-6 col-sm-6">
                <div class="form-group">
                Product Name<input type="text" id="productname" name="productname" class="form-control" value="<?php echo e($result->product_name); ?>">
                </div>
            </div>
            <div class="col-lg-2 col-sm-6">
                <div class="form-group">
                Retail Price<input type="text" style="text-align: right;" id="price" name="price" class="form-control" value="<?php echo e($result->retail_price); ?>">
                </div>
            </div>
            <div class="col-lg-2 col-sm-6">
                <div class="form-group">
                Wholesale Price<input type="text" style="text-align: right;" id="price" name="whole_price" class="form-control" value="<?php echo e($result->wholesale_price); ?>">
                </div>
            </div>
            <div class="col-lg-2 col-sm-6">
                <div class="form-group">
                Distributor Price<input type="text" style="text-align: right;" id="price" name="dis_price" class="form-control" value="<?php echo e($result->distributor_price); ?>">
                </div>
            </div>
            <div class="col-lg-2 col-sm-2" style="margin-left:85%;">
                <div class="form-group">
                <?php echo Form::submit('Update',array('class'=>'d-inline p-2 btn btn-primary btn-lg')); ?><a href="javascript:history.go(-1)" class="d-inline p-2 btn btn-primary btn-lg" title="Return to the previous page">Return</a>
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
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\63977\Desktop\thesis\ITProject2\finalThesis\Jeff\resources\views/dashboard/edit_product.blade.php ENDPATH**/ ?>