    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>MONITORING AGENT CC TELKOM 147</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url().'dashboard' ?>">Dashboard</a></li>
              <li class="breadcrumb-item"><a href="#">Data Cluster</a></li>
              <li class="breadcrumb-item active" aria-current="page">Cluster <?php echo $id;?></li>
            </ol>
          </div>
        </div>
      </div>
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
                        Calls Waiting <span class="float-right badge bg-primary">31</span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link">
                        Oldest Call Waiting <span class="float-right badge bg-info">5</span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link">
                        Direct Agent Calls Waiting <span class="float-right badge bg-success">12</span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link">
                        % Within Service Level <span class="float-right badge bg-danger">842</span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link">
                       Service Level <span class="float-right badge bg-danger">842</span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link">
                       ACD Calls <span class="float-right badge bg-danger">842</span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link">
                       Aban Calls <span class="float-right badge bg-danger">842</span>
                      </a>
                    </li>
                  </ul>
                </div>

                <div class="col-md-5 offset-md-2 ">
                  <ul class="nav flex-column">
                    <li class="nav-item">
                      <a href="#" class="nav-link">
                        Agents Staved <span class="float-right badge bg-primary">31</span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link">
                        Agent Avail <span class="float-right badge bg-info">5</span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link">
                        Agents Ringing <span class="float-right badge bg-success">12</span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link">
                        Agents in ACW <span class="float-right badge bg-danger">842</span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link">
                        Agents on ACD Calls <span class="float-right badge bg-danger">842</span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link">
                        Agents in AUX <span class="float-right badge bg-danger">842</span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link">
                        Agents in Other <span class="float-right badge bg-danger">842</span>
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
              <h3 class="card-title">Data Agent Cluster All</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example" class="table table-bordered table-striped">
                <thead>
                <tr>
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
                  foreach($data as $u){

                  $agname = $this->M_data->get_data_agname($u->logid);
                  $role  = $this->M_data->get_data_role($u->role);
                  $aux = $this->M_data->get_data_auxreason($u->auxreason);
                  $split  = $this->M_data->get_data_split($u->split);
                  $workmode  = $this->M_data->get_data_workmode($u->aworkmode);
                  $direction  = $this->M_data->get_data_direction($u->direction);
                  $vdn  = $this->M_data->get_data_vdn($u->vdn);
                  ?>
                <tr>
                  
                  <td><?php echo $u->cluster ?></td>
                  <td><?php echo $agname->item_name ?></td>
                  <td><?php echo $u->logid ?></td>
                  <td><?php echo $u->extension ?></td>
                  <td><?php echo $role->item_name ?></td>
                  <td><?php echo $aux->item_name ?></td>
                  <td><?php echo $workmode->item_name ?></td>
                  <td><?php echo $direction->item_name ?></td>
                  <td><?php echo $u->workskill ?></td>
                  <td><?php echo $u->workslevel ?></td>
                  <td><?php echo $u->lup ?></td>
                  <td><?php echo $split->item_name ?></td>
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


