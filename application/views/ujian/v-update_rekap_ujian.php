<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

  <!-- Main content -->
  <div class="content mt-2">
    <div class="container-fluid">
      <div class="row">
        <!-- /.col-md-6 -->
        <div class="col-sm">
          <div class="card">
            <div class="card-header bg-success">
              <h4 class="m-0" style="color: white;"><?= $title; ?></h4>
            </div>
            <div class="card-body">
              <form action="<?= base_url('ujian/rekap_ujian/update'); ?>" method="POST">
                <input type="hidden" name="IdUjian" value="<?= $rekap_ujian['IdUjian']; ?>">
                <div class="form-group">
                  <label for="target_ujian">Target Ujian</label>
                  <select name="target_ujian" class="form-control">
                    <?php if ($rekap_ujian['IdTargetUjian']) : ?>
                      <option value="<?= $rekap_ujian['IdTargetUjian']; ?>" selected> <?= $rekap_ujian['NamaUjian']; ?> | <?= $rekap_ujian['Keterangan']; ?></option>
                      <option> -- Pilih Target Ujian -- </option>
                      <?php foreach ($target_ujian as $tu) : ?>
                        <option value="<?= $tu['IdTargetUjian']; ?>"><?= $tu['NamaUjian']; ?> | (<?= $tu['Keterangan']; ?>)</option>
                      <?php endforeach; ?>
                    <?php else : ?>
                      <option> -- Pilih Target Ujian -- </option>
                      <?php foreach ($target_ujian as $tu) : ?>
                        <option value="<?= $tu['IdTargetUjian']; ?>"><?= $tu['NamaUjian']; ?> | (<?= $tu['Keterangan']; ?>)</option>
                      <?php endforeach; ?>
                    <?php endif; ?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="nama_santri">Nama Santri</label>
                  <select name="nama_santri" class="form-control">
                    <?php if ($rekap_ujian['IdSiswa']) : ?>
                      <option value="<?= $rekap_ujian['IdSiswa']; ?>" selected><?= $rekap_ujian['NamaLengkap']; ?></option>
                      <option> -- Pilih Santri -- </option>
                      <?php foreach ($santri as $s) : ?>
                        <option value="<?= $s['IdSiswa']; ?>"><?= $s['NamaLengkap']; ?> | <?= $s['NamaKelas']; ?></option>
                      <?php endforeach; ?>
                    <?php else : ?>
                      <option> -- Pilih Santri -- </option>
                      <?php foreach ($santri as $s) : ?>
                        <option value="<?= $s['IdSiswa']; ?>"><?= $s['NamaLengkap']; ?> | <?= $s['NamaKelas']; ?></option>
                      <?php endforeach; ?>
                    <?php endif; ?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="periode_ujian">Periode Ujian</label>
                  <select name="periode_ujian" class="form-control">
                    <?php if ($rekap_ujian['IdPeriodeUjian']) : ?>
                      <option value="<?= $rekap_ujian['IdPeriodeUjian']; ?>" selected><?= $rekap_ujian['Periode']; ?> | (<?= $rekap_ujian['Semester']; ?> - <?= $rekap_ujian['ThAjaran']; ?>) / <?= $rekap_ujian['NamaKelas']; ?></option>
                      <option> -- Pilih Periode Ujian -- </option>
                      <?php foreach ($periode_ujian as $pu) : ?>
                        <option value="<?= $pu['IdPeriodeUjian']; ?>"><?= $pu['Periode']; ?> | (<?= $pu['Semester']; ?> - <?= $pu['ThAjaran']; ?>) / <?= $pu['NamaKelas']; ?></option>
                      <?php endforeach; ?>
                    <?php else : ?>
                      <option> -- Pilih Periode Ujian -- </option>
                      <?php foreach ($periode_ujian as $pu) : ?>
                        <option value="<?= $pu['IdPeriodeUjian']; ?>"><?= $pu['Periode']; ?> | (<?= $pu['Semester']; ?> - <?= $pu['ThAjaran']; ?>) / <?= $pu['NamaKelas']; ?></option>
                      <?php endforeach; ?>
                    <?php endif; ?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="nilai">Nilai</label>
                  <input type="text" class="form-control" id="nilai" name="nilai" onkeyup="cek_nilai()" value="<?= $rekap_ujian['Nilai']; ?>" required autocomplete="off">
                </div>
                <!-- <button type="button" class="btn btn-danger">Proses</button> -->
                <div class="form-group">
                  <label for="predikat">Predikat</label>
                  <input type="text" class="form-control" id="predikat" name="predikat" value="<?= $rekap_ujian['Predikat']; ?>" readonly>
                </div>
                <div class="form-group">
                  <label for="keterangan">Keterangan</label>
                  <input type="text" class="form-control" id="keterangan" name="keterangan" value="<?= $rekap_ujian['ket_rekap']; ?>" readonly>
                </div>

            </div>
            <div class="modal-footer justify-content-between">
              <a href="<?= base_url('ujian/rekap_ujian'); ?>" class="btn btn-default" data-dismiss="modal">Batal</a>
              <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Simpan</button>
            </div>
            </form>
          </div>
        </div>

      </div>
    </div>

    <!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

<script type="text/javascript">
  function cek_nilai() {
    // var Predikat = "";
    // var Keterangan = "";
    Nilai = document.getElementById("nilai").value;
    // alert(Nilai);

    $.ajax({
      type: "POST",
      url: "<?= base_url('ujian/rekap_ujian/predikat_ket') ?>",
      data: 'Nilai=' + Nilai,
      success: function(pk) {
        // ! Data hasil query Masih kosong, belum mau muncul
        // console.log(pk);
        var json = pk,
          // console.log(json);
          obj = JSON.parse(json);
        $('#predikat').val(obj.PredikatNilai);
        $('#keterangan').val(obj.KetNilai);
        $('#alamat').val(obj.alamat);
      }
    });
  }
</script>