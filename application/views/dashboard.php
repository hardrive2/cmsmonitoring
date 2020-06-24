<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>MONITORING AGENT CC TELKOM 147</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
               <li class="breadcrumb-item active">dashboard</li>
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
              <h3 class="card-title">Data Agent All Cluster </h3>
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



