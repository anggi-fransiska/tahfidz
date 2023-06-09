<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

  <title>Raport <?= $identitas_santri['NIS']; ?>_<?= $identitas_santri['NamaLengkap']; ?></title>
</head>

<body>
  <!-- Halaman Cover -->
  <!-- Header -->
  <div class="row text-center pt-4" style="font-size: 28px; font-weight: bold; font-family: 'Times New Roman', Times, serif;">
    <div class="col">
      <p style="font-size: 36px; font-weight: bold; font-family: 'Times New Roman', Times, serif;">Laporan Perkembangan Belajar Santri</p>
      <p style="font-size: 24px; font-weight: bold; font-family: 'Times New Roman', Times, serif;">Tahfidz <?= $identitas_santri['Kampus'] == "Kampus 1" ? '1' : '2'; ?> </p>
      <!-- <p style="font-size: 24px; font-weight: bold; font-family: 'Times New Roman', Times, serif;">KAB. MAJALENGKA</p> -->
    </div>
  </div>
  <!-- /. Header -->
  <!-- Logo -->
  <div class="row text-center pt-4">
    <div class="col">
      <center>
        <table class="pt-3">
          <td>
            <img src="<?= base_url('assets/'); ?>img/tahfidz.png" width="350px" height="350px" alt="Logo Tahfidz">
          </td>
        </table>

    </div>
    </center>
  </div>
  <!-- /. Logo -->
  <!-- Field Keterangan Ujian -->
  <!-- Ujian Pondok Ke Berapa -->
  <!-- <div class="row text-center mt-4 pt-3">
    <div class="col-sm-3">
    </div>
    <div class="col-sm-6">
      <div class="card" style="border-radius: 25px; border-width: 2px;">
        <div class="card-body">
          <p style="text-underline-position: auto; font-size: 20px;font-family: 'Times New Roman', Times, serif;"><u>Ujian Pondok Ke :</u></p>
          <p style="font-weight: bold;font-size: 22px;font-family: 'Times New Roman', Times, serif;"><?= $identitas_santri['KetPeriode']; ?></p>
          <p style="font-size: 20px;font-family: 'Times New Roman', Times, serif;"><u>Periode Bulan :</u></p>
          <p style="font-weight: bold;font-size: 22px;font-family: 'Times New Roman', Times, serif;"><?= $identitas_santri['Periode']; ?></p>
          <p style="font-size: 20px;font-family: 'Times New Roman', Times, serif;"><u>Kelas :</u></p>
          <p style="font-weight: bold;font-size: 22px;font-family: 'Times New Roman', Times, serif;"><?= $identitas_santri['NamaKelas']; ?> (<?= $identitas_santri['Tingkat']; ?>) Tahfidz</p>
        </div>
      </div>
    </div>
    <div class="col-sm-3">
    </div>

  </div> -->
  <!-- /. Ujian Pondok Ke Berapa -->
  <!-- Nama Peserta Didik -->
  <div class="row text-center mt-4 pt-3">
    <div class="col">
      <p style="font-size: 18px; font-family: 'Times New Roman', Times, serif;">Nama Peserta Didik</p>
    </div>
  </div>
  <div class="row text-center mt-2">
    <div class="col-sm-3">
    </div>
    <div class="col-sm-6">
      <div class="card" style="border-radius: 25px; border-width: 2px;">
        <div class="card-body">
          <p style="font-weight: bold;font-size: 20px;font-family: 'Times New Roman', Times, serif;"><?= $identitas_santri['NamaLengkap']; ?></p>
        </div>
      </div>
    </div>
    <div class="col-sm-3">
    </div>

  </div>
  <!-- /. Nama Peserta Didik -->
  <!-- NIS Santri -->
  <div class="row text-center mt-4 pt-3">
    <div class="col">
      <p style="font-size: 18px; font-family: 'Times New Roman', Times, serif;">Nomor Induk Santri</p>
    </div>
  </div>
  <div class="row text-center mt-2">
    <div class="col-sm-3">
    </div>
    <div class="col-sm-6">
      <div class="card" style="border-radius: 25px; border-width: 2px;">
        <div class="card-body">
          <p style="font-weight: bold;font-size: 20px;font-family: 'Times New Roman', Times, serif;"><?= $identitas_santri['NIS']; ?></p>
        </div>
      </div>
    </div>
    <div class="col-sm-3">
    </div>

  </div>
  <!-- /. NIS Santri -->
  <!-- Info Tambahan -->
  <div class="row pt-4 mt-4 mb-5 text-center">
    <div class="col">
      <p style="font-weight: bold; font-size: 16px;">Head Ofice:</p>
      <!-- <p>Jl. Raya K H Abdul Halim Kec. Majalengka, Kabupaten Majalengka, Jawa Barat 45418</p> -->
      <!-- <p>www.ummifoundation.com</p> -->
    </div>
  </div>
  <br>
  <!-- /. Info Tambahan -->
  <!-- /.Halaman Cover -->


  <center>
    <div class="row pt-3">
      <div class="col">
        <p style="font-size: 24px; font-style: italic;">HASIL PENCAPAIAN KOMPETENSI SANTRI <br> </p>
      </div>
    </div>
    <hr style="border-width: medium;" class="mt-0">


    <div class="row">
      <div class="col-sm-6">
        <table>
          <tr style="width: 150px;">
            <td>Nama Santri</td>
            <td>:</td>
            <td><?= $identitas_santri['NamaLengkap']; ?></td>
          </tr>
          <tr>
            <td>Nomor Induk Santri</td>
            <td>:</td>
            <td><?= $identitas_santri['NIS']; ?></td>
          </tr>
          <!-- <tr>
            <td>Nama Halaqoh</td>
            <td>:</td>
            <td><?= $identitas_santri['NamaKelompok']; ?></td>
          </tr> -->
          <tr>
            <td>Nama Musyrif</td>
            <td>:</td>
            <td><?= $identitas_santri['NamaMusyrif']; ?></td>
          </tr>
          <tr>
            <td>No Hp Musyrif</td>
            <td>:</td>
            <td><?= $identitas_santri['NoHp']; ?></td>
          </tr>
          <!-- <tr>
            <td>PJ Halaqoh Tahfidz</td>
            <td>:</td>
            <td> <?= $pj_halaqoh['PJHalaqoh']; ?></td>
          </tr> -->
        </table>
      </div>
      <div class="col-sm-6">
        <table>
          <!-- <tr>
            <td>Kelas</td>
            <td>:</td>
            <td><?= $identitas_santri['NamaKelas']; ?> / <?= $identitas_santri['Tingkat']; ?></td>
          </tr>
          <tr>
            <td>Semester</td>
            <td>:</td>
            <td><?= $identitas_santri['Semester']; ?></td>
          </tr>
          <tr>
            <td>Ujian Pondok Ke</td>
            <td>:</td>
            <td><?= $identitas_santri['KetPeriode']; ?></td>
          </tr>
          <tr>
            <td>Periode Bulan</td>
            <td>:</td>
            <td><?= $identitas_santri['Periode']; ?></td>
          </tr>
          <tr>
            <td>Tahun Ajaran</td>
            <td>:</td>
            <td><?= $identitas_santri['ThAjaran']; ?></td>
          </tr> -->
          <tr>
            <td><a href="<?= base_url('raport'); ?>" class="badge badge-sm badge-danger"><i class="fas fa-arrow-left"></i>Kembali</a></td>
            <td>|</td>
            <td><a href="" class="badge badge-sm badge-primary"><i class="fas fa-print"></i>Cetak Raport</a></td>
          </tr>
        </table>
      </div>
    </div>
  </center>
  <hr style="border-width: medium;" class="mt-3">
  <!-- A. Hasil Nilai Ujian -->
  <div class="row ml-4 mr-4">
    <div class="col">
      <b>A. Hasil Nilai Ujian </b>
      <br>
      <br>
      <center>
        <div class="row ml-3">
          <table class="table table-bordered">
            <thead class="text-center">
              <tr>
                <th>NO</th>
                <th>Materi</th>
                <th>Target</th>
                <th>Nilai</th>
                <th>Predikat</th>
                <th>Keterangan</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="text-center" style="width: 50px;">1</td>
                <td>Tahfidz</td>
                <td>Prosentase Target Tahfidz</td>
                <?php foreach ($prosentase_target as $prosentase) : ?>
                  <td colspan="2" class="text-center"><?= $prosentase['Prosentase']; ?>%</td>
                  <td><b><?= $prosentase['Prosentase'] == 100 ? 'Target Selesai' : 'Target Tidak Selesai'; ?></b></td>
                <?php endforeach; ?>
              </tr>
              <?php $no = 2;
              foreach ($nilai_ujian as $n_ujian) : ?>
                <tr>
                  <td class="text-center" style="width: 50px;"><?= $no++; ?></td>
                  <td><?= $n_ujian['NamaUjian']; ?></td>
                  <td><?= $n_ujian['Keterangan']; ?></td>
                  <td class="text-center" style="width: 180px;"><?= $n_ujian['Nilai']; ?></td>
                  <td style="text-align: center; width: 100px;"><?= $n_ujian['Predikat']; ?></td>
                  <td style="width: 150px;"><b><?= $n_ujian['Keterangan_Ujian']; ?></b></td>

                </tr>
              <?php endforeach; ?>
              <tr>
                <td colspan="3" style="text-align: right;"> Total</td>
                <?php foreach ($hasil_akhir as $ha) : ?>
                  <td class="text-center"><?= $ha['Total']; ?></td>
                <?php endforeach; ?>
              </tr>
              <tr>
                <td colspan="3" style="text-align: right;"> Rata-Rata</td>
                <?php foreach ($hasil_akhir as $ha) : ?>
                  <td class="text-center"><?= round($ha['Rata-rata'], 1); ?></td>
                <?php endforeach; ?>
              </tr>
              <tr>
                <td colspan="3" style="text-align: right;"> Rangking</td>
                <?php foreach ($hasil_akhir as $ha) : ?>
                  <td class="text-center"><b><?= $ha['Rangking']; ?></b> dari <?= implode($jml_siswa); ?> Santri</td>
                <?php endforeach; ?>
              </tr>
            </tbody>
          </table>
        </div>
      </center>
    </div>
  </div>
  <br><br>
  <!-- B. Rekap Pelanggaran -->
  <!-- <div class="row ml-4 mr-4">
    <div class="col">
      <b>B. REKAP PELANGGARAN IBADAH DAN BAHASA</b>
      <br> -->
      <!-- Bagian Ibadah -->
      <!-- <div class="row ml-3">
        <b>a. Bagian Ibadah</b>
        <table class="table table-bordered">
          <tr>
            <td style="width: 250px;">Poin Pelanggaran</td>
            <td><?php foreach ($points_ibadah as $points) {
                  echo $points . ' Poin';
                } ?>
            </td>
          </tr>
          <tr>
            <td style="width: 250px;">Keterangan</td>
            <td>
              <?php foreach ($keterangan_ibadah as $ket_ibadah) {
                echo $ket_ibadah['JenisIqob'] . ' (' . $ket_ibadah['Points'] . ')' . '<br>';
              } ?>
            </td>
          </tr>
        </table>
      </div>
      <div class="row ml-3">
        <b>Keterangan Poin Pelanggaran Ibadah:</b>
      </div>
      <div class="row mt-2 ml-3" style="font-weight: bold;">
        <div class="col-md-6">
          1. Datang setelah adzan (30 Poin) <br>
          2. Datang setelah iqomah (40 Poin) <br>
          3. Tidak mengikuti kegiatann ibadah (50 Poin)
        </div>
        <div class="col-md-6">
          4. Tidak sholat berjama'ah di masjid tanpa izin (150 Poin) <br>
          5. Tidak memakai peci saat sholat (30 Poin) <br>
          6. Bercanda atau bergurau setelah adzan (30 Poin)
        </div>
      </div>

      <div class="row mt-2 ml-2">
        <div class="col mt-2">
          <table border="1.5">
            <td>
              <b>Catatan</b> : Batas maksimal rekap iqob Ibadah adalah <b>700 Poin</b>. Apabila melebihi dari poin yang ditentukan, maka santri <b>TIDAK BERHAK</b> mengikuti seluruh Ujian Pondok
            </td>
          </table>
        </div>
      </div>

      <br>
      <div class="row ml-3">
        <b>b. Bagian Bahasa</b>
        <table class="table table-bordered">
          <tr>
            <td style="width: 250px;">Poin Pelanggaran</td>
            <td> <?php foreach ($points_bahasa as $points) {
                    echo $points . ' Poin';
                  } ?>
            </td>
          </tr>
          <tr>
            <td style="width: 250px;">Keterangan</td>
            <td><?php foreach ($keterangan_bahasa as $ket_bahasa) {
                  echo $ket_bahasa['JenisIqob'] . ' (' . $ket_bahasa['Points'] . ')' . '<br>';
                } ?>
            </td>
          </tr>
        </table>
      </div>
      <div class="row ml-3">
        <b>Keterangan Poin Pelanggaran Bahasa:</b>
      </div>
      <div class="row mt-2 ml-3" style="font-weight: bold;">
        <div class="col-md-6">
          1. Berbicara dengan bahasa indonesia (30 Poin)
        </div>
        <div class="col-md-6">
          2. Berbahasa daerah (50 Poin)
        </div>
      </div>
      <div class="row mt-2 ml-2">
        <div class="col mt-2">
          <table border="1.5">
            <td>
              <b>Catatan</b> : Batas maksimal rekap iqob Bahasa adalah <b>800 Poin</b>. Apabila melebihi dari poin yang ditentukan, maka santri <b>TIDAK BERHAK</b> mengikuti seluruh Ujian Pondok
            </td>
          </table>
        </div>
      </div>

    </div>
  </div>
  <br><br> -->
  <!-- C. Catatan Musyrif -->
  <div class="row ml-4 mr-4">
    <div class="col">
      <b>B. CATATAN DARI Musyrif Tahfidz</b>
      <br>
      <div class="row ml-3">
        <b>a. Perkembangan Target</b>
        <table class="table table-bordered">
          <tr>
            <td><?= !$c_perkembangan_target ? '' : $c_perkembangan_target['IsiCatatan']; ?></td>
          </tr>
        </table>
        <br>
        <b>b. Sikap Santri Ketika Hafalan Tahfidz</b>
        <table class="table table-bordered">
          <tr>
            <td><?= !$c_sikap_santri ? '' : $c_sikap_santri['IsiCatatan']; ?></td>
          </tr>
        </table>
        <br>
        <b>c. Penilaian Akhlaq Perilaku</b>
        <table class="table table-bordered">
          <tr>
            <td><?= !$c_akhlaq_perilaku ? '' : $c_akhlaq_perilaku['IsiCatatan']; ?></td>
          </tr>
        </table>
        <br>
        <b>d. Kerapian Dan Kebersihan</b>
        <table class="table table-bordered">
          <tr>
            <td><?= !$c_kerapian_kebersihan ? '' : $c_kerapian_kebersihan['IsiCatatan']; ?></td>
          </tr>
        </table>
        <br>
        <b>e. Catatan Musyrif</b>
        <table class="table table-bordered">
          <tr>
            <td><?= !$c_catatan_musyrif ? '' : $c_catatan_musyrif['CatatanMusyrif']; ?></td>
          </tr>
        </table>
      </div>
    </div>
  </div>
  <br>
  <!-- D. Reward Ujian -->
  <div class="row ml-4 mr-4">
    <div class="col">
      <b>C. HASIL REWARD UJIAN</b>
      <br>
      <div class="row ml-3">
        <table class="table table-bordered">
          <tr>
            <!-- <td>
              <b><?= $reward_ujian['Reward'] != null ? $reward_ujian['Reward'] : ''; ?></b>
            </td> -->
          </tr>
        </table>
      </div>
    </div>
  </div>
  <br>

  <div class="row ml-4 pl-2">
    <div class="col">
      <!-- Bagian Pengesahan -->
      <table class="table table-borderless">
        <tr>
          <td>Mengetahui</td>
          <td></td>
          <td>Mojokerto, <?= date_indo(date('Y-m-d')); ?></td>
        </tr>
        <tr>
          <td><?= $pengasuh['Jabatan']; ?></td>
          <td><?= $direktur['Jabatan'] ? $direktur['Jabatan'] : 'Aktifkan Status Direktur'; ?></td>
          <td>Musyrif Halaqoh <?= $identitas_santri['NamaKelompok']; ?></td>
        </tr>
        <tr>
          <td class=""><img src="<?= base_url('assets/upload/ttd/' . $identitas_santri['Ttd']); ?>" width="100px"></td>
          <td class=""><img src="<?= base_url('assets/upload/ttd/' . $identitas_santri['Ttd']); ?>" width="100px"></td>
          <td class=""><img src="<?= base_url('assets/upload/ttd_musyrif/' . $identitas_santri['Ttd']); ?>" width="100px"></td>
        </tr>
        <tr>
          <td class=""><?= $identitas_santri['NamaMusyrif']; ?></td>
          <td class=""><?= $identitas_santri['NamaMusyrif'] ?></td>
          <td class=""><?= $identitas_santri['NamaMusyrif']; ?></td>
        </tr>
        <tr>
          <td>NIP. <?= $pengasuh['Nip']; ?></td>
          <td>NIP. <?= $direktur['Nip']; ?></td>
          <td>NIP. -</td>
        </tr>
      </table>
    </div>
  </div>


  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

  <script>
    window.print();
  </script>

  <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>