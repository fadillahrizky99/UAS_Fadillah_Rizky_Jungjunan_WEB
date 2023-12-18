<?php
    include 'oop.php';

    $read_tabel = new Pelanggan($konek);
    $data = $read_tabel->read();
?>
<h1 class="sub_judul">Daftar Pelanggan</h1>
<button class="btn_tbh" style="background-color: #007bff; border: none; padding: 10px 15px; border-radius: 5px; margin-top:20px;">
    <a class="tambah" href="?page=formulir" style="text-decoration: none; color: #fff; ">
        <p style="margin: 0;">Tambah Pelanggan</p>
    </a>
</button>


<div class="form mahasiswa">
    <table class="daftar_mahasiswa" style="overflow-x:scroll" id="tabel">
        <tr>
            <th>Nama</th>
            <th>Email</th>
            <th>Jenis Kelamin</th>
            <th>Tanggal Lahir</th>
            <th>Alamat</th>
            <th>Action</th>
        </tr>
        <?php foreach ($data as $value): ?>
        <tr>
            <td><?php echo $value['nama']; ?></td>
            <td><?php echo $value['email']; ?></td>
            <td><?php echo $value['jenis_kelamin']; ?></td>
            <td><?php echo $value['tgl_lahir']; ?></td>
            <td><?php echo $value['alamat']; ?></td>
            <td width="22%">
                <a class="btn" href="?page=edit&&id=<?php echo $value['id']?>">Edit</a>
                <a class="btn_tbh" href="?page=read&&id=<?php echo $value['id']?>">Lihat</a>
                <button class="btn_del" onclick="confirmDelete(<?php echo $value['id']; ?>)">Hapus</button>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>      
<script>
function confirmDelete(id) {
    var result = confirm("Apakah Anda yakin ingin menghapus data ini?");
    if (result) {
        // Jika pengguna menekan OK, arahkan ke skrip delete.php dengan parameter ID
        window.location.href = "?page=delete&&id=" + id;
    }
}
</script>