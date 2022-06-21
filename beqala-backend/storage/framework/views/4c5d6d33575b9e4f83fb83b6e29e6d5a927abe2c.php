<?php $__env->startComponent('mail::message'); ?>
Hello 

the requested <?php echo e($store_name); ?> has been accepted
login data is : <br>
email: <?php echo e($email); ?>

password:  <?php echo e($password); ?>





Thanks,<br>
<?php echo e(config('app.name')); ?>

<?php echo $__env->renderComponent(); ?>
s<?php /**PATH /home/ghost/Development/htdocs/beqala/resources/views/emails/storeAccepted.blade.php ENDPATH**/ ?>