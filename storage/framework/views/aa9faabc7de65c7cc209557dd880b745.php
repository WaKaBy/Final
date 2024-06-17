<?php $__env->startSection('content'); ?>
    <h1>Komandos</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Pavadinimas</th>
                <th>Miestas</th>
                <th>Įkūrimo Metai</th>
                <th>Žaidėjai</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $komandos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $komanda): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($komanda->ID); ?></td>
                    <td><?php echo e($komanda->Pavadinimas); ?></td>
                    <td><?php echo e($komanda->Miestas); ?></td>
                    <td><?php echo e($komanda->Ikurmio_metai); ?></td>
                    <td>
                        <ul>
                            <?php $__currentLoopData = $komanda->zaidejai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $zaidejas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($zaidejas->Vardas); ?> <?php echo e($zaidejas->Pavarde); ?> - Aukštis: <?php echo e($zaidejas->Aukstis); ?> cm, Svoris: <?php echo e($zaidejas->Svoris); ?> kg</li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\my-site\resources\views/komandos/index.blade.php ENDPATH**/ ?>