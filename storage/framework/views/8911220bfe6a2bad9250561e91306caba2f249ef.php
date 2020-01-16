<?php $__env->startSection('title'); ?>
  Jenis Linmas <?php echo e($jenislinma->uraian); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('judul'); ?>
  Jenis Linmas <?php echo e($jenislinma->uraian); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="content">
        <div class="row">
            <?php echo $__env->make('admin.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

            <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <div class="col-md-12">
                      <h4 class="card-title">Jenis Linmas  <?php echo e($jenislinma->uraian); ?></h4>
                      <div class="card-category">
                        <a href="<?php echo e(url('/jenisLinmas/jenis-linmas')); ?>" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="<?php echo e(url('/jenisLinmas/jenis-linmas/' . $jenislinma->id . '/edit')); ?>" title="Edit JenisLinma"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                        <?php echo Form::open([
                            'method'=>'DELETE',
                            'url' => ['jenisLinmas/jenis-linmas', $jenislinma->id],
                            'style' => 'display:inline'
                        ]); ?>

                            <?php echo Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-sm',
                                    'title' => 'Delete JenisLinma',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            )); ?>

                        <?php echo Form::close(); ?>

                      </div>
                    </div>
                  </div>
                    <div class="card-body">


                        <br/>
                        <br/>

                        <div>
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td><?php echo e($jenislinma->id); ?></td>
                                    </tr>
                                    <tr><th> Uraian </th><td> <?php echo e($jenislinma->uraian); ?> </td></tr>
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