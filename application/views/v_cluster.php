<script>
    function edit(id) {
        $.ajax({
            url: "<?php echo base_url() . 'cluster/edit_extension/'; ?>",
            type: "POST",
            data: {
                id: id
            },
            success: function(ajaxData) {
                $("#modaledit").html(ajaxData);
                $("#modaledit").modal('show', {
                    backdrop: 'true'
                });
            }
        });
    }
</script>

<!-- BreadCumb -->

<!-- Content -->
<div class="container-fluid">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?php echo base_url().'dashboard' ?>">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">Data Cluster</li>
      </ol>
    </nav>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Cluster</h6>
        </div>
        <div class="card-body">
            <?php
            echo $this->session->flashdata("input_success");
            echo $this->session->flashdata("input_failed");
            echo $this->session->flashdata("update_success");
            echo $this->session->flashdata("update_failed");
            echo $this->session->flashdata("delete_success");
            echo $this->session->flashdata("delete_failed");
            ?>
            <button class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#myModal" style="margin-bottom:10px;"><i class="icofont-plus-circle"></i> Tambah</button>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable1" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="text-center">No.</th>
                            <th class="text-center">Cluster</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($cluster as $p) {
                            ?>
                            <tr>
                                <td class="text-center"><?php echo $no++."."; ?></td>
                                <td><?php echo $p->cluster; ?></td>
                                <td style="text-align:center;">
                                    <a href="<?php echo base_url().'cluster/cluster/'.$p->cluster; ?>" class="btn btn-sm btn-warning"><i class="icofont-eye"></i></a>
                                    <a  href="<?= base_url('') . 'cluster/delete/' . $p->cluster?>">
                                        <button class="btn btn-danger btn-sm"><i class="icofont-ui-delete"></i></button>
                                    </a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Extension</h6>
        </div>
        <div class="card-body">
            <?php
            echo $this->session->flashdata("input_success");
            echo $this->session->flashdata("input_failed");
            echo $this->session->flashdata("update_success");
            echo $this->session->flashdata("update_failed");
            echo $this->session->flashdata("delete_success");
            echo $this->session->flashdata("delete_failed");
            ?>
            <button class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#myModal2" style="margin-bottom:10px;"><i class="icofont-plus-circle"></i> Tambah</button>
             <div class="table-responsive">
                <table class="table table-bordered" id="dataTable2" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="text-center">No.</th>
                            <th class="text-center">Cluster</th>
                            <th class="text-center">Extension</th>
                            <th class="text-center">aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($extn as $p) {
                            ?>
                            <tr>
                                <td class="text-center"><?php echo $no++."."; ?></td>
                                <td><?php echo $p->cluster; ?></td>
                                <td><?php echo $p->extension; ?></td>
                                <td style="text-align:center;">
                                    <a href="<?= base_url('') . 'cluster/delete_extension/' . $p->extension?>">
                                        <button class="btn btn-danger btn-sm"><i class="icofont-ui-delete"></i></button>
                                    </a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


<!-- TModal Cluster -->
<div class="modal" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <form name="tambah-cluster" method="POST" action="<?php echo base_url(); ?>cluster/tambah_aksi">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Tambah Cluster</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal body -->
                <div class="col-md-6 mb-3">
                    <div class="form-group-inner">
                        <label for="" class="pull-left">Cluster</label>
                        <input type="text" name="cluster" class="form-control form-control-sm" placeholder="Masukan Cluster" required>
                    </div>
                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="reset" class="btn btn-danger btn-sm">Reset</button>
                    <input type="submit" class="btn btn-primary btn-sm" value="Simpan" />
                </div>
            </form>
        </div>
    </div>
</div>

<!-- TModal Extension -->
<div class="modal" id="myModal2">
    <div class="modal-dialog">
        <div class="modal-content">
            <form name="tambah-extension" method="POST" action="<?php echo base_url(); ?>cluster/add_extension">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Tambah Kode Extension</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div class="form-group-inner">
                                <label for="" class="pull-left">Kode Cluster</label><br>
                                <select name="cluster" id="" class="form-control form-control-sm select2_" required style="width: 100%">
                                    <option value="">--Pilih Kode Cluster--</option>
                                    <?php
                                    foreach ($cluster as $key) {
                                    ?>
                                        <option value="<?= $key->cluster ?>"> <?= $key->cluster?> </option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-group-inner">
                                <label for="" class="pull-left">Extension</label>
                                <input type="text" name="extension" class="form-control form-control-sm" placeholder="Masukan Kode extension" required>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="reset" class="btn btn-danger btn-sm">Reset</button>
                    <input type="submit" class="btn btn-primary btn-sm" value="Simpan" />
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal" id="modaledit">
</div>
