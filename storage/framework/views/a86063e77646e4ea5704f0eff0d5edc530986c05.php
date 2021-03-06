<?php $__env->startSection('content'); ?>
    <div class="content">
        <div class="row">


            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Lokasi <?php echo e($lokasi->nama); ?></div>
                    <div class="card-body">

                        <a href="<?php echo e(url('/lokasi/lokasi')); ?>" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="<?php echo e(url('/lokasi/lokasi/' . $lokasi->id . '/edit')); ?>" title="Edit Poskamling"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                        <?php echo Form::open([
                            'method'=>'DELETE',
                            'url' => ['lokasi/lokasi', $lokasi->id],
                            'style' => 'display:inline'
                        ]); ?>

                            <?php echo Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-sm',
                                    'title' => 'Delete Poskamling',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            )); ?>

                        <?php echo Form::close(); ?>

                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td><?php echo e($lokasi->id); ?></td>
                                    </tr>
                                    <tr><th> Id Kecamatan </th><td> <?php echo e($lokasi->id_kecamatan); ?> </td></tr><tr><th> Id Kelurahan </th><td> <?php echo e($lokasi->id_kelurahan); ?> </td></tr><tr><th> Nama </th><td> <?php echo e($lokasi->nama); ?> </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.backend', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>