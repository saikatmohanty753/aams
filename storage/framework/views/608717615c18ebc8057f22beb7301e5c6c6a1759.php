
<script>
    $(document).ready(function(){
       <?php if(Session::has('success')): ?>
       toastr.options =
       {
           "closeButton" : true,
           "progressBar" : false
       }
       toastr.success("<?php echo e(session('success')); ?>");
       <?php echo e(Session::forget('success')); ?>

       <?php endif; ?>

       <?php if(Session::has('error')): ?>
           toastr.options =
           {
               "closeButton" : true,
               "progressBar" : false
           }
           toastr.error("<?php echo e(session('error')); ?>");
           <?php echo e(Session::forget('error')); ?>

       <?php endif; ?>

       <?php if(Session::has('info')): ?>
       toastr.options =
       {
           "closeButton" : true,
           "progressBar" : false
       }
           toastr.info("<?php echo e(session('info')); ?>");
           <?php echo e(Session::forget('info')); ?>

       <?php endif; ?>

       <?php if(Session::has('warning')): ?>
       toastr.options =
       {
           "closeButton" : true,
           "progressBar" : false
       }
       toastr.warning("<?php echo e(session('warning')); ?>");
       <?php echo e(Session::forget('warning')); ?>

       <?php endif; ?>

       <?php if($errors->any()): ?>
       <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
       toastr.options =
       {
           "closeButton" : true,
           "progressBar" : false
       }
       toastr.error("<?php echo e($error); ?>");
       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
       <?php endif; ?>

       <?php if(Session::has('customError')): ?>
       <?php $__currentLoopData = session('customError'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customerror): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

       <?php if(array_key_exists("error",$customerror)): ?>
       toastr.options =
       {
           "closeButton" : true,
           "progressBar" : false
       }
       toastr.error("<?php echo e($customerror['error']); ?>");
       <?php endif; ?>

       <?php if(array_key_exists("success",$customerror)): ?>
       toastr.options =
       {
           "closeButton" : true,
           "progressBar" : false
       }
       toastr.success("<?php echo e($customerror['success']); ?>");
       <?php endif; ?>

       <?php if(array_key_exists("info",$customerror)): ?>
       toastr.options =
       {
           "closeButton" : true,
           "progressBar" : false
       }
       toastr.info("<?php echo e($customerror['info']); ?>");
       <?php endif; ?>

       <?php if(array_key_exists("warning",$customerror)): ?>
       toastr.options =
       {
           "closeButton" : true,
           "progressBar" : false
       }
       toastr.warning("<?php echo e($customerror['warning']); ?>");
       <?php endif; ?>

       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
       <?php echo e(Session::forget('customError')); ?>

       <?php endif; ?>
    })
</script>
<?php /**PATH C:\xampp\htdocs\aams\resources\views/alert_msg.blade.php ENDPATH**/ ?>