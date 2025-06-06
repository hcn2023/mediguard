

<?php $__env->startSection('title', 'Add Dosage'); ?>

<?php $__env->startSection('content'); ?>
<div class="container mt-5">
    <h2 class="text-success mb-4">Add Dosage</h2>
    <form action="<?php echo e(route('dosages.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div class="mb-3">
            <label for="medication_name" class="form-label">Medication Name:</label>
            <input type="text" name="medication_name" id="medication_name" class="form-control">
        </div>
        <div class="mb-3">
            <label for="dosage" class="form-label">Dosage:</label>
            <input type="number" name="dosage" id="dosage" class="form-control">
        </div>
        <div class="mb-3">
            <label for="schedule" class="form-label">Schedule:</label>
            <input type="text" name="schedule" id="schedule" class="form-control">
        </div>
        <button type="submit" class="btn btn-success">Save Dosage</button>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Henrychris\Documents\Projects\mediguard\resources\views/adddosage.blade.php ENDPATH**/ ?>