
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>MONITORING AGENT CC TELKOM 147</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url().'dashboard' ?>">Dashboard</a></li>
              <li class="breadcrumb-item"><a href="#">Data Extension</a></li>
              <li class="breadcrumb-item active" aria-current="page">Extension <?php echo $id;?></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
       <!-- Main content -->
       <div class="row">
          <div class="col-md-12">
            <div class="card card-danger">
              <div class="card-header">
                <h3 class="card-title">All together</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="card-refresh" data-source="/pages/widgets.html" data-source-selector="#card-refresh-content"><i class="fas fa-sync-alt"></i></button>
                  <button type="button" class="btn btn-tool" data-card-widget="maximize"><i class="fas fa-expand"></i></button>
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                <div class="col-md-5 ">
                  <ul class="nav flex-column">
                    <li class="nav-item">
                      <a href="#" class="nav-link">
                        Projects <span class="float-right badge bg-primary">31</span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link">
                        Tasks <span class="float-right badge bg-info">5</span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link">
                        Completed Projects <span class="float-right badge bg-success">12</span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link">
                        Followers <span class="float-right badge bg-danger">842</span>
                      </a>
                    </li>
                  </ul>
                </div>

                <div class="col-md-5 offset-md-2 ">
                  <ul class="nav flex-column">
                    <li class="nav-item">
                      <a href="#" class="nav-link">
                        Projects <span class="float-right badge bg-primary">31</span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link">
                        Tasks <span class="float-right badge bg-info">5</span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link">
                        Completed Projects <span class="float-right badge bg-success">12</span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link">
                        Followers <span class="float-right badge bg-danger">842</span>
                      </a>
                    </li>
                  </ul>
                </div>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>

        </div>
    </section>

     <section class="content">
      <div class="row">
        <div class="col-12">
            <!-- /.card-header -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Data Agent Extension <?php echo $id;?></h3>
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
                  foreach($extn as $u){ 
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



