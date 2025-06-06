

<?php $__env->startSection('title', 'Dosage List'); ?>

<?php $__env->startSection('content'); ?>
    <h2 class="text-center mt-4 mb-4 text-success">Dosage List</h2>
    <table class="table table-striped table-bordered">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Medication Name</th>
                <th>Dosage</th>
                <th>Schedule</th>
                <th>Created At</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $dosages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dosage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($dosage->id); ?></td>
                    <td><?php echo e($dosage->medication_name); ?></td>
                    <td><?php echo e($dosage->dosage); ?></td>
                    <td><?php echo e($dosage->schedule); ?></td>
                    <td><?php echo e($dosage->created_at); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Henrychris\Documents\Projects\mediguard\resources\views/dosage.blade.php ENDPATH**/ ?>