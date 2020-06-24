<div class="modal-dialog">
        <div class="modal-content">
            <form method="POST" action="<?php echo base_url(); ?>cluster/update_extension">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Edit Extension</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <?php foreach($extension as $i){ ?>
                    <div class="row">
                        <input type="hidden" name="temp_cluster" value="<?php echo $i->cluster ?>">
                        <div class="col-md-6">
                            <div class="form-group-inner">
                                <label for="" class="pull-left">Cluster</label>
                                <input type="text" name="no_anggota" class="form-control form-control-sm" placeholder="Masukkan No. Anggota" value="<?php echo $i->cluster; ?>" readonly>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group-inner">
                                <label for="" class="pull-left">Extension</label>
                                <input type="text" name="nama_terang" class="form-control form-control-sm" placeholder="Masukkan Nama" value="<?php echo $i->extension; ?>" required>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="reset" class="btn btn-danger btn-sm">Reset</button>
                    <input type="submit" class="btn btn-primary btn-sm" value="Simpan" />
                </div>
            </form>
        </div>
    </div>