<?php
if(isset($_SESSION['admin'])){
?>
<style>
    /* CSS untuk tampilan home jika sudah login sebagai admin */
    .conten {
        text-align: center;
        margin-top: 50px;
    }

    .desc h1 {
        font-size: 24px;
    }
</style>
<div class="conten">
    <div class="desc">
        <h1>Selamat Datang</h1>
        <h1>Admin <?php echo $_SESSION['admin']['nama']?></h1>
    </div>
</div>
<?php
}else{
?>
<style>
    /* CSS untuk tampilan home jika belum login */
    .conten {
        text-align: center;
        margin-top: 50px;
    }
</style>
<div class="conten">
    <div class="desc">
        <h1>Test</h1>
    </div>
</div>
<div class="porto">
    <p>My Project</p><hr>
</div>
<footer class="container">
    <div class="footer">
        <!-- Konten footer -->
    </div>
</footer>
<?php
}
?>
