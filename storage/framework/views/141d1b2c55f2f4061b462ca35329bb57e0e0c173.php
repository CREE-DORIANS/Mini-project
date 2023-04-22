<?php $__env->startSection('title'); ?> Gainloe <?php $__env->stopSection(); ?>
<?php $__env->startSection('keywords'); ?> Home,About,Contact,Car <?php $__env->stopSection(); ?>
<?php $__env->startSection('description'); ?> Write some descripton about the webpage <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div align="center" style="background:#1CD5E8;padding:20px;"> 
    <h3  class="black-text" style="font-weight:bold;"><a href="<?php echo e(url('admin-dash')); ?>">Admin Dashboard</a></h3>

<p class="white-text" style="font-weight:bold;"> 
   

</p>
<?php if(session('status')): ?>
  <div class="alert alert-danger" role="alert">
      <?php echo e(session('status')); ?>

  </div>
  <?php endif; ?>
  

</div>

 

<div class="container py-5">
    <p align="left">
        <i class="fas fa-file-powerpoint"></i> News Letter Subscription Data
   </p>
     
<div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <table class="table table-striped table-bordered">
                    <thead>
                       
                        <th>Name</th>
                        <th>Email Id</th>
                        
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $NewsLetter; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>

                            <td><?php echo e($item->name); ?></td>
                            <td><?php echo e($item->email); ?></td>
                         

                                 
                    </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </tbody>

                </table>
            </div>
        </div>
</div>
</div>
<hr>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/commerce/resources/views/dashboards/admin/NewsLetter.blade.php ENDPATH**/ ?>