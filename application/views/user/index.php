<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>
            <?= $title ?>
          </h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <!-- jika Anda ingin membuat breadcrumb tambahkan disini -->
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>


  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <?=
          // mengambil dan menampilkan pesan 'message' dari metode getflashdata yang ada di User.php
          $this->session->flashdata('message');
          ?>

          <!-- Profile Image -->
          <div class="card card-primary card-outline">
            <div class="card-body box-profile">
              <div class="text-center">
                <img class="profile-user-img img-fluid img-circle"
                  src="<?= base_url('assets/img/profile/' . $user['image']) ?>" alt="User profile picture">
              </div>
              <h3 class="profile-username text-center">
                <?php echo $user['name']; ?>
              </h3>
              <p class="text-muted text-center">
                <?php echo $user['email']; ?>
              </p>
              <p class="text-muted text-center">Anggota Sejak 10 september 2022</p>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->