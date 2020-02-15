<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Aloha!</title>

<style type="text/css">
    * {
        font-family: Verdana, Arial, sans-serif;
    }
    table{
        font-size: x-small;
    }
    tfoot tr td{
        font-weight: bold;
        font-size: x-small;
    }
    .gray {
        background-color: lightgray
    }
</style>

</head>
<body>
  <header>
    <center>Job Order</center>
  </header>
  <table width="100%">
    <tr>
        <td valign="top"><img src="#" alt="" width="150"/></td>
        <td align="right">
            <h3>Jeff's Off Road</h3>
            <pre>
                <?php echo e($araw); ?>

                Company address
                Tax ID
                phone
                fax
            </pre>
        </td>
    </tr>

  </table>

  <table width="100%">
    <tr>
        <td><strong>Client:</strong> <?php echo e($clients->lastname); ?>,<?php echo e($clients->firstname); ?></td>
        <td><strong></strong></td>
    </tr>

  </table>

  <br/>

  <table width="100%">
    <thead style="background-color: lightgray;">
      <tr>
        <th>#</th>
        <th>Description</th>
        <th>Quantity Ordered</th>
        <th>Unit Price</th>
        <th>Total</th>
      </tr>
    </thead>
    <tbody>
    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  
      <tr>
        <th scope="row">1</th>
        <td><?php echo e($row['product_name']); ?></td>
        <td align="right"><?php echo e($row['quantity']); ?></td>
        <td align="right"><?php echo e($row['retail_price']); ?></td>
        <td align="right"><?php echo e($row['quantity']*$row['retail_price']); ?></td>
      </tr>
    </tbody>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <tfoot>
        <tr>
            <td colspan="3"></td>
            <td align="right">Subtotal $</td>
            <td align="right">1635.00</td>
        </tr>
        <tr>
            <td colspan="3"></td>
            <td align="right">Tax $</td>
            <td align="right">294.3</td>
        </tr>
        <tr>
            <td colspan="3"></td>
            <td align="right">Total $</td>
            <td align="right" class="gray">$ 1929.3</td>
        </tr>
    </tfoot>
  </table>

</body>
</html><?php /**PATH C:\Users\63977\Desktop\thesis\ITProject2\finalThesis\Jeff\resources\views/report/jo.blade.php ENDPATH**/ ?>