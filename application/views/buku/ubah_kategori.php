<!-- Begin Page Content -->
<div class="container-fluid">
    <?= $this->session->flashdata('pesan'); ?>
    <div class="row">
        <div class="col-lg-6">
            <?php if (validation_errors()) {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-message" role="alert" >Nama Kategori tidak bolek Kosong</div>');
                redirect('buku/ubahkategori/' . $k['id']);
            } ?>
            <?php foreach ($kategori as $k) { ?>
                <form action="<?= base_url('buku/ubahKategori'); ?>" method="post">
                    <div class="form-group">
                        <input type="hidden" name="id" id="id" value="<?php echo $k['id']; ?>">
                        <input type="text" class="form-control form-control-user" name="kategori" id="kategori" placeholder="Masukan Kategori Buku" value="<?php echo $k['kategori']; ?>">
                    </div>
                    <div class="form-group">
                        <input type="button" class="form-control form-control-user btn btn-dark col-lg-3 mt-3" value="Kembali" onclick="window.history.go(-1)">
                        <input type="submit" class="form-control form-control-user btn btn-primary col-lg-3 mt-3" value="Update">
                    </div>
                </form>
            <?php } ?>
        </div>
    </div>
</div> 
 18  application/views/templates/aute_footer.php 
@@ -0,0 +1,18 @@
<!-- Bootstrap core JavaScript-->
<script src="<?= base_url('assets/');
?>vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url('assets/');
?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?= base_url('assets/'); ?>vendor/jqueryeasing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?= base_url('assets/'); ?>js/sb-admin2.min.js"></script>
<script>
    $('.alert-message').alert().delay(3000).slideUp('slow');
</script>

</body>

</html>
