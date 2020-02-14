<?php $__env->startSection('title'); ?>
    + Product
	
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
        <?php echo Form::open(array('route'=>'product_insert','id'=>'formsave','method'=>'post')); ?>

        <h4><strong>Enter Product Details</strong></h4>
        <div class="row">
            <div class="col-lg-6 col-sm-6">
                <div class="form-group">
                Product Name<input type="text" name="productname" class="form-control bg-white" maxlength="100" required>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="form-group">
                Quantity<input type="text" name="qty" class="form-control bg-white" maxlength="4" required>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="form-group">
                Retail Price<input type="text" name="retail_price" class="form-control bg-white" style="text-align:right" required>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="form-group">
                Wholesale Price<input type="text" name="whole_price" class="form-control bg-white" style="text-align:right" required>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="form-group">
                Distributor Price<input type="text" name="dis_price" class="form-control bg-white" style="text-align:right" required>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="form-group">
                    Supplier<select id="supplier_id" name="supplier_id" class="form-control productname bg-white" required>
                        <option value="" disabled="true" selected>Select Supplier</option>
                        <?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($row['supplier_id']); ?>"><?php echo e($row['name']); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                     </select>
                </div>
            </div>
            <div class="col-lg-4 col-sm-4">
                <div class="form-group">
                Category<input type="text" name="category" class="form-control bg-white" required>
                </div>
            </div>
            <div class="col-lg-4 col-sm-3">
                <div class="form-group">
                Brand<input type="text" name="brand" class="form-control bg-white" required>
                </div>
            </div>
</div>
    <div class="modal-footer">
        <?php echo Form::submit('Save',array('class'=>'d-inline p-2 btn btn-primary btn-lg', 'style'=>'background-color: #005CA5')); ?> <a href="javascript:history.go(-1)" class="d-inline p-2 btn btn-primary btn-lg" title="Return to the previous page" style="background-color: #005CA5;">Return</a>
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
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\myker\Desktop\ITProject2-master\finalThesis\Jeff\resources\views/dashboard/product_new.blade.php ENDPATH**/ ?>