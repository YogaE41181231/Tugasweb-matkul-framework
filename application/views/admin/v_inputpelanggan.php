<div class="container-fluid">
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Tambah Pelanggan</h1>
            </div>

            <!-- Content Row -->
            <div class="row">
                <!-- Content Row -->
                <!-- Disini tempat membuat Edit Profil nya! -->
            </div>
            <div class="col-lg-10">
                <form action="<?php echo base_url() . 'admin/C_pelanggan/tambah_pelanggan'; ?>" method="post">
                    <div class="form-group">
                        <label for="nama_pelanggan"> Nama Pelanggan : </label>
                        <input type="text" class="form-control form-control-user" id="nama_pelanggan" name="nama_pelanggan" placeholder="Masukan Nama Pelanggan" title="Isikan data dengan benar" required pattern="[a-zA-Z\s]+">
                    </div>
                    <div class="form-group">
                        <label for="alamat"> Alamat Pelanggan : </label>
                        <textarea name="alamat" class="form-control" id="alamat" cols="30" rows="6" placeholder="Masukkan Alamat Pelanggan" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="no_telepon"> No Telepon : </label>
                        <input type="text" name="no_telepon" class="form-control form-control-user" placeholder="Masukkan No Telepon" title="Isikan Angka" required>
                    </div>
                    <div class="form-group">
                    <label for="jenis_kelamin"> Jenis Kelamin : </label>
                            <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                                    <option selected value=""> Pilih berikut </option>
                                    <option value="Laki-Laki"> Laki - Laki </option>
                                    <option value="Perempuan"> Perempuan </option>
                                </select>
                    </div>
                    <div class="form-group">
                        <label for="tanggal"> Tanggal Periksa : </label>
                        <?php date_default_timezone_set('Asia/Jakarta');?>
                        <input type="date" class="form-control" name="tanggal" id="tanggal">
                        <input type="time" class="form-control" name="jam" id="jam">
                    </div>
                    <hr>
                    <button type="submit" name="submit" class="btn btn-success btn-user btn-block">Tambah</button>
                </form>
                <br>
                <div class="text-center">
                    <div class="row">

                    </div>
                    <!-- Batas edit profil -->
                    <!-- Content Row -->
                    <div class="row">

                        <!-- Content Column -->
                        <div class="col-lg-6 mb-4">

                        </div>

                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>