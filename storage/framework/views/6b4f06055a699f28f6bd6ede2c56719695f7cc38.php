<?php $__env->startComponent('mail::message'); ?>
# <?php echo e($input->subject); ?>


<?php echo e($input->message); ?>


Thanks,<br>
<?php echo e(config('app.name')); ?>

<?php echo $__env->renderComponent(); ?>
<?php /**PATH /home/u960948325/domains/feastly.co/public_html/resources/views/emails/test.blade.php ENDPATH**/ ?>