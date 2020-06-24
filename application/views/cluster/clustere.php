  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>MONITORING AGENT CC TELKOM 147</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active"><a href="<?php echo base_url(); ?>dashboard/">dashboard</a></li>
               <li class="breadcrumb-item active">cluster e</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
       <!-- Main content -->
    </section>

     <section class="content">
      <div class="row">
        <div class="col-12">
            <!-- /.card-header -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Data Agent Cluster E</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Cluster</th>
                  <th>Agent Name</th>
                  <th>Login Id</th>
                  <th>Extn</th>
                  <th>Role</th>
                  <th>Aux Reason</th>
                  <th>State</th>
                  <th>Directi on</th>
                  <th>Split/Skill</th>
                  <th>Level</th>
                  <th>Timer</th>
                  <th>VDN Name</th>
                </tr>
                </thead>
                <tbody>
                  <?php 
                  $no = 1;
                  foreach($clustere as $u){ 
                  ?>
                <tr>
                  <td><?php echo $no++ ?></td>
                  <td><?php echo $u->cluster ?></td>
                  <td><?php echo $u->item_name ?></td>
                  <td><?php echo $u->logid ?></td>
                  <td><?php echo $u->extension ?></td>
                  <td><?php echo $u->role ?></td>
                  <td><?php
                      if ($u->auxreason == 1) {
                          echo "KONSUL";
                      } elseif ($u->auxreason == 2) {
                          echo "SUPPORTING";
                      } elseif ($u->auxreason == 4) {
                          echo "TOILET";
                      } elseif ($u->auxreason == 6) {
                          echo "SHOLAT";
                      } elseif ($u->auxreason == 7) {
                          echo "ISTIRAHAT";
                      } elseif ($u->auxreason == 8) {
                          echo "BREAVING";
                      } elseif ($u->auxreason == 0) {
                          echo "";
                      } else {
                          echo $u->auxreason;
                      }?>
                  </td>
                  <td></td>
                  <td><?php echo $u->direction ?></td>
                  <td><?php echo $u->split ?></td>
                  <td><?php echo $u->workslevel ?></td>
                  <td><?php echo $u->lup ?></td>
                  <td><?php echo $u->vdn ?></td>
                </tr>
                <?php } ?>
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>




  </div>
  <!-- /.content-wrapper -->

