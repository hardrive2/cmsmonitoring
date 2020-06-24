 <!-- Content Wrapper. Contains page content -->
  <div  class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>MONITORING AGENT CC TELKOM 147</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>dashboard/">Home</a>
              </li>
              <li class="breadcrumb-item active">Cluster A</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
       <!-- Main content -->
    <section class="content">
       <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
              <div class="col-md-2 col-sm-6 col-12">
                <div class="info-box">
                  <span class="info-box-icon bg-info"><i class="far fa-bookmark"></i></span>
                  <div class="info-box-content">
                    <span class="info-box-text">Cluster A</span>
                    <span class="info-box-number">41410</span>
                    <div class="progress">
                      <div class="progress-bar bg-info" style="width: 70%"></div>
                    </div>
                    <span class="progress-description">
                          <a href="<?php echo base_url(); ?>cluster/clustera" class="small-box-footer ">More info <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </span>
                  </div>
                </div>
              </div>
              <div class="col-md-2 col-sm-6 col-12">
                <div class="info-box ">
                  <span class="info-box-icon bg-success"><i class="far fa-thumbs-up"></i></span>
                  <div class="info-box-content">
                    <span class="info-box-text">Cluster B</span>
                    <span class="info-box-number">41410</span>
                    <div class="progress">
                      <div class="progress-bar bg-success" style="width: 70%"></div>
                    </div>
                    <span class="progress-description ">
                      <a href="#" class="small-box-footer ">
                          More info <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </span>
                  </div>
                </div>
              </div>
              <div class="col-md-2 col-sm-6 col-12">
                <div class="info-box ">
                  <span class="info-box-icon bg-gradient-warning"><i class="far fa-calendar-alt"></i></span>
                  <div class="info-box-content">
                    <span class="info-box-text">Cluster C</span>
                    <span class="info-box-number">424310</span>
                    <div class="progress">
                      <div class="progress-bar bg-gradient-warning" style="width: 70%"></div>
                    </div>
                    <span class="progress-description">
                      <a href="#" class="small-box-footer ">
                          More info <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </span>
                  </div>
                </div>
              </div>
              <div class="col-md-2 col-sm-6 col-12">
                <div class="info-box ">
                  <span class="info-box-icon bg-gradient-danger"><i class="fas fa-user-plus"></i></span>
                  <div class="info-box-content">
                    <span class="info-box-text">Cluster C</span>
                    <span class="info-box-number">424310</span>
                    <div class="progress">
                      <div class="progress-bar bg-gradient-warning" style="width: 70%"></div>
                    </div>
                    <span class="progress-description">
                      <a href="#" class="small-box-footer ">
                          More info <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </span>
                  </div>
                </div>
              </div>
              <div class="col-md-2 col-sm-6 col-12">
                <div class="info-box ">
                  <span class="info-box-icon bg-gradient-secondary"><i class="far fa-calendar-alt"></i></span>
                  <div class="info-box-content">
                    <span class="info-box-text">Cluster C</span>
                    <span class="info-box-number">424310</span>
                    <div class="progress">
                      <div class="progress-bar bg-gradient-warning" style="width: 70%"></div>
                    </div>
                    <span class="progress-description">
                      <a href="#" class="small-box-footer ">
                          More info <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </span>
                  </div>
                </div>
              </div>
              <div class="col-md-2 col-sm-6 col-12">
                <div class="info-box ">
                  <span class="info-box-icon bg-gradient-primary"><i class="far fa-flag"></i></span>
                  <div class="info-box-content">
                    <span class="info-box-text">Cluster f</span>
                    <span class="info-box-number">424310</span>
                    <div class="progress">
                      <div class="progress-bar bg-gradient-warning" style="width: 70%"></div>
                    </div>
                    <span class="progress-description">
                      <a href="#" class="small-box-footer ">
                          More info <i class="fas fa-arrow-circle-right"></i>
                        </a>
                    </span>
                  </div>
                </div>
              </div>
            </div>


       <table id="example2" class="table table-bordered table-striped">
        <tr>
          <th>No</th>
          <th>Acd</th>
          <th>splitn</th>
          <th>login</th>
          <th>item name </th>
          <th>extension</th>
          <th>loc_id</th>
          <th>auxreason</th>
          <th>aworkmode</th>
          <th>role</th>
          <th>percent</th>
          <th>lup</th>
        </tr>
        <?php 
        $no = 1;
        foreach($cagent as $u){ 
        ?>
        <tr>
          <td><?php echo $no++ ?></td>
          <td><?php echo $u->acd ?></td>
          <td><?php echo $u->split ?></td>
          <td><?php echo $u->logid ?></td>
          <td><?php echo $u->item_name ?></td>
          <td><?php echo $u->extension ?></td>
          <td><?php echo $u->loc_id ?></td>
          <td><?php echo $u->auxreason ?></td>
          <td><?php echo $u->aworkmode ?></td>
          <td><?php echo $u->role ?></td>
          <td><?php echo $u->percent ?></td>
          <td><?php echo $u->lup ?></td>
        </tr>
        <?php } ?>
      </table>
    </section>
  </div>
  <!-- /.content-wrapper -->
