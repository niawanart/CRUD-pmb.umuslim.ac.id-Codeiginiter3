<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Pendaftaran Mahasiswa Baru</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- <link rel="stylesheet" href="bootstrap-4.0.0/dist/css/bootstrap.min.css" /> -->
    <link rel="stylesheet" href="assets/bootstrap-4.0.0/dist/css/bootstrap.min.css" />
    
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"> -->
    <!-- <link rel="stylesheet" href="bootstrap-5.2.0-beta1-dist/css/bootstrap.min.css"> -->
    <!-- <link rel="stylesheet" href="bootstrap-4.0.0/assets/css/docs.min.css"> -->
  </head>
  <?php
echo form_open('registrasi/tambah');
?>
  <body>
    <div class="container p-3 my-3">
      <h3 class="text-center">Form Pendaftaran</h3>
      <h3 class="text-center">Mahasiswa Baru</h3>
      <h3 class="text-center">Tahun Akademik 2023/2024</h3>
      <form id="form" method="post">
        <div class="alert alert-info">
          <strong>Data Pribadi Calon Mahasiswa</strong>
        </div>
        <!--  -->
        <div class="row">
          <div class="col-sm-3">
            <div class="form-group">
              <label>Nama Lengkap:</label>
              <input
                type="text"
                name="namaLengkap"
                class="form-control"
                placeholder="Masukan Nama Lengkap"
              />
            </div>
          </div>
          <div class="col-sm-3">
            <div class="form-group">
              <label>Nomor Identitas (NIK):</label>
              <input
                type="text"
                name="nik"
                class="form-control"
                placeholder="Masukan Nomor NIK"
              />
            </div>
          </div>
          <div class="col-sm-3">
            <div class="form-group">
              <label>Suku Kebangsaan:</label>
              <input
                type="text"
                name="suku"
                class="form-control"
                placeholder="Masukan Tempat Lahir"
              />
            </div>
          </div>
          <div class="col-sm-3">
            <div class="form-group">
              <label>Tempat Lahir:</label>
              <input type="text" name="tpt_lahir" class="form-control" />
            </div>
          </div>
        </div>
        <!--  -->
        <div class="row">
          <div class="col-sm-3">
            <div class="form-group">
              <label>Tgl Lahir:</label>
              <input type="date" name="tgl_lahir" class="form-control" />
            </div>
          </div>
          <div class="col-sm-3">
            <label for="">Jenis Kelamin</label>
            <div class="form-grup">
              <div class="form-check">
                <input
                  class="form-check-input"
                  type="radio"
                  name="flexRadioDefault"
                  id="laki"
                />
                <label class="form-check-label" for="laki">Laki-laki</label>
              </div>

              <div class="form-check">
                <input
                  class="form-check-input"
                  type="radio"
                  name="flexRadioDefault"
                  id="perempuan"
                />
                <label class="form-check-label" for="perempuan"
                  >Perempuan
                </label>
              </div>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="form-group">
              <label>Agama:</label>
              <select class="form-control" name="agama">
                <option>Pilih</option>
                <option value="Islam">Islam</option>
                <option value="Kristen">Kristen</option>
                <option value="Katolik">Katolik</option>
                <option value="Hindu">Hindu</option>
                <option value="Budha">Budha</option>
                <option value="Lainnya">Lainnya</option>
              </select>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="form-group">
              <label>Tinggi Berat Badan</label>
              <input
                type="text"
                name="berat_badan"
                class="form-control"
                placeholder="Berat Badan Anda"
              />
            </div>
          </div>
        </div>
        <!--  -->
        <div class="row"></div>
        <!--  -->
        <div class="alert alert-info">
          <strong>Alamat Calon Mahasiswa</strong>
        </div>
        <div class="row">
          <div class="col-sm-4">
            <div class="form-group">
              <label>Jalan :</label>
              <textarea name="jalan" id="" cols="40" rows="2" class="form-control">
              </textarea>
              <!-- <input type="text" name="kode_pos" class="form-control" placeholder="Masukkan Jalan"> -->
            </div>
          </div>
          <div class="col-sm-4">
            <div class="form-group">
              <label>Dusun :</label>
              <input
                type="text"
                name="dusun"
                class="form-control"
                placeholder="Masukkan Nama Dusun"
              />
            </div>
          </div>
          <div class="col-sm-2">
            <div class="form-group">
              <label>RT :</label>
              <input
                type="text"
                name="rt"
                class="form-control"
                placeholder=" RT"
              />
            </div>
          </div>
          <div class="col-sm-2">
            <div class="form-group">
              <label>RW :</label>
              <input
                type="text"
                name="rw"
                class="form-control"
                placeholder=" RW"
              />
            </div>
          </div>
          <!-- <div class="col-sm-6">
                    <div class="form-group">
                        <label>Dusun :</label>
                        <input type="text" name="kode_pos" class="form-control" placeholder="Masukkan Nama Dusun">
                    </div>
                </div> -->
        </div>
        <!--  -->
        <div class="row">
          <div class="col-sm-4">
            <div class="form-group">
              <label>Kecamatan:</label>
              <input
                type="text"
                name="kecamatan"
                class="form-control"
                placeholder="Masukkan Nama Kecamatan"
              />
            </div>
          </div>
          <div class="col-sm-4">
            <div class="form-group">
              <label>Kelurahan:</label>
              <input
                type="text"
                name="kelurahan"
                class="form-control"
                placeholder="Masukkan Nama Kelurahan"
              />
            </div>
          </div>
          <div class="col-sm-4">
            <div class="form-group">
              <label>Kode Pos :</label>
              <input
                type="text"
                name="kode_pos"
                class="form-control"
                placeholder="Masukkan Kode Pos"
              />
            </div>
          </div>
        </div>
        <!--  -->
        <div class="row">
          <div class="col-sm-3">
            <div class="form-group">
              <label>Telepon :</label>
              <input
                type="text"
                name="telepon"
                class="form-control"
                placeholder="Masukkan Nama Telepon"
              />
            </div>
          </div>
          <div class="col-sm-3">
            <div class="form-group">
              <label>Hp :</label>
              <input
                type="text"
                name="hp"
                class="form-control"
                placeholder="Masukkan Hp"
              />
            </div>
          </div>
          <div class="col-sm-3">
            <div class="form-group">
              <label>Email :</label>
              <input
                type="text"
                name="email"
                class="form-control"
                placeholder="Masukkan Email"
              />
            </div>
          </div>
          <div class="col-sm-3">
            <label for="">Status</label>
            <div class="form-grup">
              <div class="form-check">
                <input
                  class="form-check-input"
                  type="radio"
                  name="flexRadioDefault"
                  id="flexRadioDefault100"
                />
                <label class="form-check-label" for="flexRadioDefault100"
                  >Kawin</label
                >
              </div>

              <div class="form-check">
                <input
                  class="form-check-input"
                  type="radio"
                  name="flexRadioDefault"
                  id="flexRadioDefault122"
                />
                <label class="form-check-label" for="flexRadioDefault122"
                  >Belum Kawin
                </label>
              </div>
            </div>
          </div>
        </div>
        <!--  -->
        <div class="row"></div>
        <!--  -->
        <div class="alert alert-info">
          <strong>Data Pendidikan</strong>
        </div>
        <div class="row">
          <div class="col-sm-6">
            <div class="form-group">
              <label>Pendidikan Terakhir:</label>
              <select class="form-control" name="pendidikan_terakhir">
                <option value="SMA">SMA</option>
                <option value="MA">MA</option>
                <option value="SMK">SMK  </option>
                <option value="D1">D1</option>
                <option value="D2">D2</option>
                <option value="D3">D3</option>
                <option value="D4">D4</option>
                <option value="S1">S1</option>
                <option value="S2">S2</option>
              </select>
            </div>
          </div>
          <!--  -->
          <div class="col-sm-6">
            <div class="form-group">
              <label>NISN:</label>
              <input type="text" name="nisn" class="form-control" />
            </div>
          </div>
          <!--  -->
          <div class="col-sm-6">
            <div class="form-group">
              <label>Nama Sekolah :</label>
              <input type="text" name="nama_sekolah" class="form-control" />
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label>Jurusan :</label>
              <input type="text" name="jurusan" class="form-control" />
            </div>
          </div>
          <div class="col-sm-4">
            <div class="form-group">
              <label>No. Ijazah :</label>
              <input type="text" name="no_ijazah" class="form-control" />
            </div>
          </div>
          <div class="col-sm-4">
            <div class="form-group">
              <label>Tempat Dikeluarkan Ijazah:</label>
              <input type="text" name="tempat_ijazah" class="form-control" />
            </div>
          </div>
          <div class="col-sm-4">
            <div class="form-group">
              <label>Tgl dan Tahun Ijazah :</label>
              <input type="text" class="form-control" name="tgl_ijzah" />
            </div>
          </div>
        </div>
        <!--  -->
        <div class="alert alert-info">
          <strong>Identitas Orang Tua / Wali</strong>
        </div>
        <!--  -->
        <div class="row">
          <!-- ayah  -->
          <div class="col-sm-4">
            <div class="form-group">
              <label><strong> Nama Ayah :</strong></label>
              <input class="form-control" name="nama_ayah" type="text" />
            </div>
          </div>
          <div class="col-sm-4">
            <div class="form-group">
              <label>Nik (No.Ktp) :</label>
              <input
                type="text"
                name="nik_ayah"
                class="form-control"
                placeholder="Masukkan Hp"
              />
            </div>
          </div>
          <div class="col-sm-4">
            <label for="">Hubungan Dengan Ayah</label>
            <div class="form-grup">
              <div class="form-check">
                <input
                  class="form-check-input"
                  type="radio"
                  name="hubungan_ayah"
                  id="ayahkandung98"
                />
                <label class="form-check-label" for="ayahkandung98"
                  >Ayah Kandung
                </label>
              </div>

              <div class="form-check form-check-inline">
                <input
                  class="form-check-input"
                  type="radio"
                  id="ayahtiri"
                  name="hubungan_ayah"
                  value="option1"
                  checked
                />
                <label class="form-check-label" for="ayahtiri">Ayah Tiri</label>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="form-group">
              <label>Tempat Lahir :</label>
              <input
                type="text"
                name="tpt_lahir_ayah"
                class="form-control"
                placeholder="Masukkan Tempat lahir"
              />
            </div>
          </div>
          <!--  -->
          <div class="col-sm-4">
            <div class="form-group">
              <label>Tgl Lahir :</label>
              <input
                type="date"
                name="tgl_lahir_ayah"
                class="form-control"
                placeholder="Masukkan Tempat lahir"
              />
            </div>
          </div>
          <div class="col-sm-4">
            <label> <strong>Status Ayah</strong></label>
            <div class="form-grup">
              <div class="form-check">
                <input
                  class="form-check-input"
                  type="radio"
                  name="status_ayah"
                  id="hidup"
                />
                <label class="form-check-label" for="hidup">Masih Hidup </label>
              </div>

              <div class="form-check form-check-inline">
                <input
                  class="form-check-input"
                  type="radio"
                  id="almarhum"
                  name="status_ayah"
                  value="option1"
                  checked
                />
                <label class="form-check-label" for="almarhum">Almarhum</label>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="form-group">
              <label>Pekerjaan :</label>
              <input type="text" class="form-control" />
            </div>
          </div>
            <div class="col-sm-4">
            <div class="form-group">
              <label>No Hp :</label>
              <input type="text" name="no_hp_ayah" class="form-control" />
            </div>
          </div>

          <div class="col-sm-4">
            <div class="form-group">
              <label>Telepon :</label>
              <input type="text" name="telepon_ayah" class="form-control" />
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4">
            <div class="form-group">
              <label>Alamat Rumah :</label>
              <textarea name="alamat_rumah_ayah" id="" cols="40" rows="2" class="form-control">
              </textarea>
              <!-- <input type="text" class="form-control"> -->
            </div>
          </div>
          <div class="col-sm-4">
            <div class="form-group">
              <label>Alamat Kantor :</label>
              <textarea name="alamat_kantor_ayah" id="" cols="40" rows="2" class="form-control">
              </textarea>
              <!-- <input type="text" class="form-control"> -->
            </div>
          </div>
        </div>
        <!--  -->
        <hr />
        <div class="row">
          <!-- ayah  -->
          <div class="col-sm-4">
            <div class="form-group">
              <label><strong> Nama Ibu :</strong></label>
              <input class="form-control" name="nama_ibu" type="text" />
            </div>
          </div>
          <div class="col-sm-4">
            <div class="form-group">
              <label>Nik (No.Ktp) :</label>
              <input
                type="text"
                name="nik_ibu"
                class="form-control"
                placeholder="Masukkan Hp"
              />
            </div>
          </div>
          <div class="col-sm-4">
            <label for="">Hubungan Dengan Ibu</label>
            <div class="form-grup">
              <div class="form-check">
                <input
                  class="form-check-input"
                  type="radio"
                  name="hubungan_ibu"
                  id="ibukandung98"
                />
                <label class="form-check-label" for="ibukandung98"
                  >Ibu Kandung
                </label>
              </div>

              <div class="form-check form-check-inline">
                <input
                  class="form-check-input"
                  type="radio"
                  id="ibutiri"
                  name="hubungan_ibu"
                  value="option1"
                  checked
                />
                <label class="form-check-label" for="ibutiri">Ibu Tiri</label>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="form-group">
              <label>Tempat Lahir :</label>
              <input
                type="text"
                name="tpt_lahir"
                class="form-control"
                placeholder="Masukkan Tempat lahir"
              />
            </div>
          </div>
          <!--  -->
          <div class="col-sm-4">
            <div class="form-group">
              <label>Tgl Lahir :</label>
              <input
                type="date"
                name="tgl_lahir"
                class="form-control"
                placeholder="Masukkan Tempat lahir"
              />
            </div>
          </div>
          <div class="col-sm-4">
            <label> <strong>Status Ibu</strong></label>
            <div class="form-grup">
              <div class="form-check">
                <input
                  class="form-check-input"
                  type="radio"
                  name="status_ibu"
                  id="hidup2"
                />
                <label class="form-check-label" for="hidup2">Masih Hidup </label>
              </div>

              <div class="form-check form-check-inline">
                <input
                  class="form-check-input"
                  type="radio"
                  id="almarhum"
                  name="status_ibu"
                  value="option1"
                  checked
                />
                <label class="form-check-label" for="almarhum">Almarhum</label>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="form-group">
              <label>Pekerjaan :</label>
              <input type="text" name="pekerjaan_ibu" class="form-control" />
            </div>
          </div>
            <div class="col-sm-4">
            <div class="form-group">
              <label>No Hp :</label>
              <input type="text" name="no_hp_ibu" class="form-control" />
            </div>
          </div>

          <div class="col-sm-4">
            <div class="form-group">
              <label>Telepon :</label>
              <input type="text" name="telepon_ibu" class="form-control" />
            </div>
          </div>
        </div>
        <div class="row">


        
          <div class="col-sm-4">
            <div class="form-group">
              <label>Alamat Rumah :</label>
              <textarea name="alamat_rumah_ibu" id="" cols="40" rows="2" class="form-control">
              </textarea>
              <!-- <input type="text" class="form-control"> -->
            </div>
          </div>
          <div class="col-sm-4">
            <div class="form-group">
              <label>Alamat Kantor :</label>
              <textarea name="alamat_kantor_ibu" id="" cols="40" rows="2" class="form-control">
              </textarea>
              <!-- <input type="text" class="form-control"> -->
            </div>
          </div>
        </div>
        <!--  -->

        <!--  -->
        <div class="alert alert-info">
          <strong>Pilihan Program Studi</strong>
        </div>
        <div class="row">
          <div class="col-sm-4">
            <div class="form-group">
              <label>Pilih Program Studi 1:</label>
              <select class="form-control" name="prodi1">
                <option>Pilih</option>
                <option>Fakultas Pertanian - Agroteknologi</option>
                <option>Fakultas Pertanian - Peternakan</option>
                <option>Fakultas Pertanian - Akualtur</option>
                <option>Fakultas Pertanian - Kehutanan</option>
                <option>
                  Fakultas Pertanian - Teknoligi Industri Pertanian
                </option>
                <option>FKIP - Pendidikan Matematika</option>
                <option>FKIP - Pendidikan Biologi</option>
                <option>FKIP - Pendidikan Fisika</option>
                <option>FKIP - Pendidikan Bhs Inggris</option>
                <option>FKIP - Pendidikan Bhs Indo</option>
                <option>FKIP - Pendidikan Ekonomi</option>
                <option>FKIP - Pendidikan Geografi</option>
                <option>FKIP - Pgsd</option>
                <option>FKIP - PG Paud</option>
                <option>Fakultas Teknik - Teknik Sipil</option>
                <option>Fakultas Teknik - Arsitektur</option>
                <option>FISIP - Administrasi Bisnis</option>
                <option>FISIP - Administrasi Publik</option>
                <option>FISIP - Hubungan Internasional</option>
                <option>Fakultas Ekonomi - Ekonomi Pembangunan</option>
                <option>Fikom - Informatika</option>
                <option>Fikom - Sistem Informasi</option>
                <option>Fakultas Kesehatan - Kebidanan(S1)</option>
                <option>Fakultas Kesehatan - Pendidikan Profesi Bidan</option>
                <option>Fakultas Kesehatan - Kebidanan(D3)</option>
              </select>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="form-group">
              <label>Pilih Program Studi 2:</label>
              <select class="form-control" name="prodi2">
                <option>Pilih</option>
                <option>Fakultas Pertanian - Agroteknologi</option>
                <option>Fakultas Pertanian - Peternakan</option>
                <option>Fakultas Pertanian - Akualtur</option>
                <option>Fakultas Pertanian - Kehutanan</option>
                <option>
                  Fakultas Pertanian - Teknoligi Industri Pertanian
                </option>
                <option>FKIP - Pendidikan Matematika</option>
                <option>FKIP - Pendidikan Biologi</option>
                <option>FKIP - Pendidikan Fisika</option>
                <option>FKIP - Pendidikan Bhs Inggris</option>
                <option>FKIP - Pendidikan Bhs Indo</option>
                <option>FKIP - Pendidikan Ekonomi</option>
                <option>FKIP - Pendidikan Geografi</option>
                <option>FKIP - Pgsd</option>
                <option>FKIP - PG Paud</option>
                <option>Fakultas Teknik - Teknik Sipil</option>
                <option>Fakultas Teknik - Arsitektur</option>
                <option>FISIP - Administrasi Bisnis</option>
                <option>FISIP - Administrasi Publik</option>
                <option>FISIP - Hubungan Internasional</option>
                <option>Fakultas Ekonomi - Ekonomi Pembangunan</option>
                <option>Fikom - Informatika</option>
                <option>Fikom - Sistem Informasi</option>
                <option>Fakultas Kesehatan - Kebidanan(S1)</option>
                <option>Fakultas Kesehatan - Pendidikan Profesi Bidan</option>
                <option>Fakultas Kesehatan - Kebidanan(D3)</option>
              </select>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="form-group">
              <label for="">Kelas :</label>
              <select class="form-control" name="kelas">
                <option>Pilih</option>
                <option>Regular</option>
                <option>Lanjutan</option>
                <option>Pindahan</option>
                <option>Non Regular</option>
              </select>
            </div>
          </div>
        </div>
        <div class="alert alert-info">
          <strong>Bahan Yang Harus Dilampirkan</strong>
        </div>
        <div class="row">
          <div class="col-sm-6">
            <!-- <label>Fotokopi ijazah(Surat Keterangan Lulus dari Kepala Sekolah dan Daftar Nilai SKHU yang telah
                        dilegalisir sebanyak 3 lembar</label>
                    <label>Pasfoto terbaru ukuran 3 x 4cm sebanyak 2 lembar</label> <br>
                    <label>Transkrip Nilai yang telah dilegalisir(bagi kelas Lanjutan dan DII, DIII(pindahan sebanyak 3
                        lembar</label>
                    <label>Fotokopi Kartu Keluarga Calon Mahasiswa sebanyak 1 lembar</label><BR>
                    <label>Fotokopi kartu KIP (bagi jalur beasiswa KIP) </label> -->
            <label class="form-label" for="customFile">Ijazah</label>
            <input name="ijazah" type="file" class="form-control" id="customFile" />
          </div>
          <div class="col-sm-6">
            <label class="form-label" for="customFile">Pas Foto</label>
            <input type="file" name="ijazah" class="form-control" id="customFile" />
          </div>
          <br>
          <br>
          <br>
          <div class="col-sm-4">
            <label class="form-label" for="customFile">Trankrip Nilai</label>
            <input type="file" name="transkrip_nilai" class="form-control" id="customFile" />
          </div>
          <div class="col-sm-4">
            <label class="form-label" for="customFile">Kartu Keluarga</label>
            <input type="file" class="form-control" name="kk" id="customFile" />
          </div>
          <div class="col-sm-4">
            <label class="form-label" for="customFile">Kartu KIP</label>
            <input type="file" name="k_kip" class="form-control" id="customFile" />
          </div>
        </div>
        <br>
        <br>
        <br>
        <!-- <div> -->
        <div class="alert alert-info">

           <strong>Bahan Yang Harus Dilampirkan</strong>
       </div>  
     <div>a. Fotocopy Ijazah(surat keterangan lulus Dari dari kepala sekolah)dan daftar nilai/SKHU yang telah di legalisir sebanyak 3(tiga)lembar </div>  
     <div>b. pasfoto terbaru ukuran 3X4 cm sebanyak 2 (dua)lembar</div>
     <div>c. transkrip nilai yang telah di lagilisir (bagi kelas lanjutan dan DII,DIII/pindahan) sebanyak 3(tiga)lembar</div>
     <div>d. fotocopy kartu keluarga calon mahasiswa sebanyak 1(satu)lembar</div>
     <div>e. fotocopy KTP calon mahasiswa,ayah dan ibu (sesuai isian pada formulir) masing masing sebanyak 1 (satu) lembar</div>
     <div>f. fotocopy kartu KIP (bagi jalur beasiswa KIP)</div>  
     
     <br>
     
     <!-- <div class="alert alert-primary"> -->
      <div class="alert alert-info">

       <strong>Keterangan</strong>
   </div> 
   <div>1. isilah formulir dengan lengkap dengan jelas</div>
   <div>2. isilah kontak yang telah disediakan sesuai dengan nomor pilihan menggunakan tanda v (centang)</div>
   <div>3. untuk poin 7,maksimal program studi 2 (dua)pilihan</div>
   <div>4. jika ada hal yang kurang jelas dapat di nyatakan lanbgsung pada panitia SPMB/contac person : 0895400652121</div>  
   <div>5. PGSD :pendidikan guru sekolah dasar</div>
   <div>6. PG PAUD :pendidikan guru pendidikan anak usia dini</div>                  
       
       
        <br>
        <div class="row">
          <div class="col-sm-4">
            <button type="submit" name="Submit" id="Submit" class="btn btn-primary" style="background-color: #008080">
            Daftar
              <!-- <a class="text-light text-decoration-none" type="submit"> Daftar </a> -->
            </button>
            <button type="reset" class="btn btn-secondary">Reset</button>
          </div>
        </div>
      </form>
    </div>
  </body>

  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script> -->
  <script src="bootstrap-4.0.0/assets/js/docs.min.js"></script>
  <style>
    body {
      /* background: #0e7385; */
      background-image: linear-gradient(#00b09b, #96c93d);
    }

    .container {
      background-color: #fff;
    }

    .text-center {
      /* color: #0e7385; */
      color: #008080;
    }

    .alert-info {
      /* background: linear-gradient(to right, #71dad3, #93c3f1); */
      /* background-image: linear-gradient(to right, #00b09b, #96c93d); */
      background-color: #008080;

      color: #fff;
      border: none;
    }

    label {
      color: #008080;
      font-family: poppins;
    }
  </style>
</html>
