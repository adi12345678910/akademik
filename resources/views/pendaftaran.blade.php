<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Akademik</title>
</head>
<body>
    <form action="pendaftaran/proses" method="post">
            <h3>FORM MAHASISWA</h3>
        {{ csrf_field() }}
        <table>
        <tr><td>Nama Mahasiswa</td><td>:
        <input type="text" name="nama"></td></tr>
        <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
            <tr><td>Jenis Kelamin</td><td>:
            <input type="radio" class="btn-check" name="jenis_kelamin" value="Laki-laki" checked>
            <label class="btn btn-outline-primary">Laki-laki</label>
          
            <input type="radio" class="btn-check" name="jenis_kelamin" value="Perempuan">
            <label class="btn btn-outline-primary">Perempuan</label></td></tr>
        </div>
        <div>
            <tr><td>Agama</td><td>:
            <select name="agama" id="agama" class="form-control">
                <option>Pilih Agama</option>
                <option value="Islam">Islam</option>
                <option value="Kristen Katholik">Kristen Katholik</option>
                <option value="Kristen Protestan">Kristen Protestan</option>
                <option value="Hindu">Hindu</option>
                <option value="Buddha">Buddha</option>
                <option value="Kong Hu Chu">Kong Hu Chu</option></td></tr>
            </select>
        </div>
        <div>
            <tr><td>Alamat</td><td>:
            <textarea name="alamat" id="alamat"></textarea></td></tr>
        </div>
        <div>
            <tr><td>Telepon</td><td>:
        <input type="text" name="telepon"></td></tr>
        </div>
        <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
            <tr><td>Hobi</td><td>:
            <input type="checkbox" class="btn-check" name="hobi" value="Olah Raga" autocomplete="off">
            <label class="btn btn-outline-primary">Olah Raga</label>
          
            <input type="checkbox" class="btn-check" name="hobi" value="Membaca" autocomplete="off">
            <label class="btn btn-outline-primary" for="btncheck2">Membaca</label>
          
            <input type="checkbox" class="btn-check" name="hobi" value="Main Musik" autocomplete="off">
            <label class="btn btn-outline-primary">Main Musik</label></td></tr>
          </div>
          <div>
            <tr><td>Jurusan</td><td>:
            <select name="jurusan" id="jurusan" class="form-control">
                <option>Pilih Jurusan</option>
                <option value="RPL">RPL</option>
                <option value="TKJ">TKJ</option>
                <option value="Multimedia">Multimedia</option>
                <option value="Perhotelan">Perhotelan</option></td></tr>
            </select>
        </div>
        <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
            <tr><td>Bidang Minat</td><td>:
            <input type="checkbox" class="btn-check" name="bidang_minat" value="Pemrograman" autocomplete="off">
            <label class="btn btn-outline-primary">Pemrograman</label>
          
            <input type="checkbox" class="btn-check" name="bidang_minat" value="Multimedia" autocomplete="off">
            <label class="btn btn-outline-primary" for="btncheck2">Multimedia</label>
          
            <input type="checkbox" class="btn-check" name="bidang_minat" value="Teknisi&Jaringan" autocomplete="off">
            <label class="btn btn-outline-primary">Teknisi&Jaringan</label></td></tr>
          </div>
          <tr><td>Foto</td><td>:
            <input type="file" class="form-control" name="foto" id="foto">
        <tr><td>
        <input type="submit" value="Simpan"></td></tr>
        </table>
    </form>
</body>
</html>