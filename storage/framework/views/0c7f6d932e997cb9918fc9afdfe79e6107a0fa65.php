<?php $__env->startSection('title'); ?>
  Data Kelurahan
<?php $__env->stopSection(); ?>

<?php $__env->startSection('judul'); ?>
    Data Kelurahan
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
    <div class="content">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                      <div class="row">
                          <div class="col-md-9">
                            <h4 class="card-title">Data Kelurahan</h4>
                            <p class="card-category"></p>
                          </div>
                          <div class="col-md-3" style="text-align:right;">
                            <a href="<?php echo e(url('/kelurahan/kelurahan/create')); ?>" class="btn btn-success btn-lg" title="Add New Kecamatan" style="border-radius:  50%;">
                                <i class="fa fa-plus" aria-hidden="true"></i>
                            </a>
                          </div>
                      </div>
                      </div>
                    <div class="card-body" style="padding: 0px 15px 10px !important;">

                        

                        <br/>
                        <div >
                          <table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th style="text-align:center">#</th>
                                        <th>Kecamatan</th>
                                        <th>Kelurahan</th>
                                        <th>Alamat</th>
                                        <th style="text-align:center">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $kecamatan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td style="text-align:center"><?php echo e(isset($loop->iteration) ? $loop->iteration : $item->id); ?></td>
                                        <td ><?php echo e($item->kecamatan); ?></td>
                                        <td><?php echo e($item->kelurahan); ?></td>
                                        <td><?php echo e($item->alamat); ?></td>
                                        <td style="text-align:center">
                                            <a href="<?php echo e(url('/kelurahan/kelurahan/' . $item->id)); ?>" title="View Kelurahan"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i></button></a>
                                            <a href="<?php echo e(url('/kelurahan/kelurahan/' . $item->id . '/edit')); ?>" title="Edit Kelurahan"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>
                                            <?php echo Form::open([
                                                'method' => 'DELETE',
                                                'url' => ['/kelurahan/kelurahan', $item->id],
                                                'style' => 'display:inline'
                                            ]); ?>

                                                <?php echo Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i>', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-sm',
                                                        'title' => 'Delete Kelurahan',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )); ?>

                                            <?php echo Form::close(); ?>

                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> <?php echo $kelurahan->appends(['search' => Request::get('search')])->render(); ?> </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.backend', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>