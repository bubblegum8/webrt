<div class="content-wrapper">
    <section class="content-header">
      <h1>
        Profil
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?= base_url();?>dashboard"><i class="fa fa-home"></i> Home</a></li>
        <li class="active">Profil</li>
      </ol>
    </section>

    <section class="content">

      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="../../dist/img/user4-128x128.jpg" alt="User profile picture">
              <h3 class="profile-username text-center">Riki</h3>

              <p class="text-muted text-center">1231231</p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>NKK</b> <a class="pull-right">123</a>
                </li>
                <li class="list-group-item">
                  <b>No Telp</b> <a class="pull-right">543</a>
                </li>
                <li class="list-group-item">
                  <b>Alamat</b> <a class="pull-right">13,287</a>
                </li>
                <li class="list-group-item">
                  <b>Kepala Keluarga</b> <a class="pull-right">13,287</a>
                </li>
              </ul>

              <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Anggota Keluarga</h3>

              <div class="box-tools">
                <div class="input-group input-group-sm hidden-xs" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
              <thead>
                <tr>
                  <th>No</th>
                  <th>NKK</th>
                  <th>NIK</th>
                  <th>Nama</th>
                  <th>Jenis Kelamin</th>
                  <th>Agama</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
              <?php
                $i = 1;
                foreach ($data as $row) {
                  echo '<tr>';  
                  echo '<td>'.$i.'</td>
                  <td>'.$row->nkk.'</td>
                  <td>'.$row->nik.'</td>
                  <td>'.$row->nama.'</td>
                  <td>'.$row->jk.'</td>
                  <td>'.$row->agama.'</td>
                  <td>
                  <a href="#" class="btn btn-success" role="button"><i class="glyphicon glyphicon-edit"></i></a>
                  <a href="#" class="btn btn-danger" role="button"><i class="glyphicon glyphicon-trash"></i></a>
                  </td>';
                  echo '</tr>';
                  $i++;
                }              
                ?> 
                </tbody>
                </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
      <!-- /.row -->

    </section>
</div>