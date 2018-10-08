<?php $__env->startSection('title'); ?>
  Data Kecamatan
<?php $__env->stopSection(); ?>

<?php $__env->startSection('judul'); ?>
    Data Kecamatan
<?php $__env->stopSection(); ?>



<?php $__env->startSection('content'); ?>
    <div class="content">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                  <div class="card-header ">
                    <div class="row">
                        <div class="col-md-9">
                          <h4 class="card-title">Data Kecamatan</h4>
                          <p class="card-category"></p>
                        </div>
                        <div class="col-md-3" style="text-align:right;">
                          <a class="btn btn-info btn-lg" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne" style="border-radius:  50%;">
                            <i class="fa fa-search	"></i>
                          </a>
                          <a href="<?php echo e(url('/kecamatan/kecamatan/create')); ?>" class="btn btn-success btn-lg" title="Add New Kecamatan" style="border-radius:  50%;">
                              <i class="fa fa-plus" aria-hidden="true"></i>
                          </a>
                        </div>
                    </div>

                  </div>
                    <div class="card-body" style="padding: 0px 15px 10px !important;">


                      <div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne">
                        <div class="card-body">

                          <?php echo Form::open(['method' => 'GET', 'url' => '/kecamatan/kecamatan', 'class' => 'form-inline  float-left','style' => 'width: 100%;', 'role' => 'search']); ?>

                          <div class="row" style="width: 100%;">


                            <div class="col-md-4">
                              Kecamatan
                              <hr>
                              <div class="">
                                <div class="row">
                                  <div class="col-md-12">
                                    <input type="text" name="kecamatan" class="form-control" placeholder="Kecamatan" value="<?php echo e(request('kecamatan')); ?>" style="font-size: 15px;border: 1px solid #b5daff;width: 100%;margin-bottom: 1%;">
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-12">
                                    <input type="text" name="alamat" class="form-control" placeholder="Alamat" value="<?php echo e(request('alamat')); ?>" style="font-size: 15px;border: 1px solid #b5daff;width: 100%;margin-bottom: 1%;">
                                  </div>
                                </div>

                                <div class="row">
                                  <div class="col-md-7">
                                    <span>Data/ halaman: </span>
                                  </div>
                                  <div class="col-md-5">
                                    <input type="text" name="paging" class="form-control" placeholder="25" value="<?php echo e(request('paging')); ?>" style="text-align: center;font-size: 15px; border: 1px solid #b5daff;width: 100%;">
                                  </div>
                              </div>

                              </div>
                            </div>

                            <div class="col-md-4">
                              Contact
                              <hr>
                              <div class="">
                                <div class="row">
                                  <div class="col-md-12">
                                    <input type="text" name="telp" class="form-control" placeholder="Telp" value="<?php echo e(request('telp')); ?>" style="font-size: 15px;border: 1px solid #b5daff;width: 100%;margin-bottom: 1%;">
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-12">
                                    <input type="text" name="fax" class="form-control" placeholder="Fax" value="<?php echo e(request('fax')); ?>" style="font-size: 15px;border: 1px solid #b5daff;width: 100%;margin-bottom: 1%;">
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div class="col-md-4">
                              Data Camat
                              <hr>
                              <div class="">
                                <div class="row">
                                  <div class="col-md-12">
                                    <input type="text" name="nama_camat" class="form-control" placeholder="Nama Camat" value="<?php echo e(request('nama_camat')); ?>" style="font-size: 15px;border: 1px solid #b5daff;width: 100%;margin-bottom: 1%;">
                                  </div>
                                </div>

                                <div class="row">
                                  <div class="col-md-12">
                                    <input type="text" name="nip" class="form-control" placeholder="Nip" value="<?php echo e(request('nip')); ?>" style="font-size: 15px;border: 1px solid #b5daff;width: 100%;margin-bottom: 1%;">
                                  </div>
                                </div>
                              </div>
                            </div>

                          </div>

                          <div class="row" style="margin-bottom: 1%;">
                            <div class="col-md-12">
                              <div style="margin-top: 2%;margin-left: -2px;margin-bottom: 3%;">
                                <button class="btn btn-info" style="margin:  0%; margin-left:  1%;">Search</button>
                              </div>
                            </div>
                          </div>



                          <?php echo Form::close(); ?>

                        </div>
                      </div>


                        <div >
                            <table  class="table table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th style="text-align:center">#</th>
                                        <th>Kecamatan</th>
                                        <th>Alamat</th>
                                        <th>Telp/ Fax</th>
                                        <th>Camat/ Nip</th>

                                        <th style="text-align:center">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $kecamatan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td style="text-align:center"><?php echo e(isset($loop->iteration) ? $loop->iteration : $item->id); ?></td>
                                        <td><?php echo e($item->kecamatan); ?></td>
                                        <td><?php echo e($item->alamat); ?></td>
                                        <td>- <?php echo e($item->telp); ?> <br> - <?php echo e($item->fax); ?></td>
                                        <td>- <?php echo e($item->nama_camat); ?><br>- <?php echo e($item->nip_camat); ?></td>
                                        <td style="text-align:center">
                                            <a href="<?php echo e(url('/kecamatan/kecamatan/' . $item->id)); ?>" title="View Kecamatan"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i></button></a>
                                            <a href="<?php echo e(url('/kecamatan/kecamatan/' . $item->id . '/edit')); ?>" title="Edit Kecamatan"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>
                                            <?php echo Form::open([
                                                'method' => 'DELETE',
                                                'url' => ['/kecamatan/kecamatan', $item->id],
                                                'style' => 'display:inline'
                                            ]); ?>

                                                <?php echo Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i>', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-sm',
                                                        'title' => 'Delete Kecamatan',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )); ?>

                                            <?php echo Form::close(); ?>

                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> <?php echo $kecamatan->appends(['search' => Request::get('search')])->render(); ?> </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.backend', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>