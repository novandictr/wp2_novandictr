<html>

<head>
  <title>Form Input Data Siswa</title>
  <style>
  .pesan {
    color: red;
    font-style: italic;
  }
  </style>
</head>

<body>
  <div class="pesan">
    <?php echo validation_errors(); ?>
  </div>
  <center>
    <form action="<?= base_url('siswa/cetak'); ?>" method="post">
      <table>
        <tr>
          <th colspan="3">
            Form Input Data Siswa
          </th>
        </tr>
        <tr>
          <td colspan="3">
            <hr>
          </td>
        </tr>
        <tr>
          <th>Nama Siswa</th>
          <th>:</th>
          <td>
            <input type="text" name="nama" id="nama">
          </td>
        </tr>
        <tr>
          <th>NIS</th>
          <td>:</td>
          <td>
            <input type="text" name="nis" id="nis">
          </td>
        </tr>
        <tr>
          <th>Kelas</th>
          <td>:</td>
          <td>
            <input type="text" name="kelas" id="kelas">
          </td>
        </tr>
        <tr>
          <th>Tanggal</th>
          <td>:</td>
          <td>
            <input type="text" name="tanggal" id="tanggal">
          </td>
        </tr>
        <tr>
          <th>Tempat Lahir</th>
          <td>:</td>
          <td>
            <input type="text" name="tempat" id="tempat">
          </td>
        </tr>
        <tr>
          <th>Alamat</th>
          <td>:</td>
          <td>
            <input type="text" name="alamat" id="alamat">
          </td>
        </tr>
        <tr>
          <th>Jenis Kelamin</th>
          <td>:</td>
          <td>
            <input type="radio" name="kelamin" value="laki-laki" id="kelamin">laki-laki
            <input type="radio" name="kelamin" value="perempuan" id="kelamin">perempuan
          </td>
        </tr>
        <tr>
          <th>Agama</th>
          <td>:</td>
          <td>
            <select name="agama" id="agama">
              <option value="">Pilih Agama</option>
              <option value="islam">islam</option>
              <option value="kristen">kristen</option>
              <option value="katolik">katolik</option>
              <option value="hindu">hindu</option>
              <option value="buddha">buddha</option>
              <option value="konghucu">konghucu</option>
            </select>
          </td>
        </tr>
        <tr>
          <td colspan="3" align="center">
            <input type="submit" value="Submit">
          </td>
        </tr>
      </table>
    </form>
  </center>
</body>

</html>