<div class="container-fluid">
    <?= $this->session->flashdata('pesan'); ?>
    <div class="row">
        <div class="col-lg-6">
            <?php if(validation_errors()){?>
            <div class="alert alert-danger" role="alert">
                <?= validation_errors();?>
            </div>
            <?php }?>
            <?= $this->session->flashdata('pesan'); ?>
            

                <!-- KOnten -->
                <form action="<?= base_url('buku/ubahanggota') ?>" method='post'>
                    <div class='form_group'>
                        <input name='id' type='hidden' class='form-control' value="<?= $anggota['id'] ?>">
                        <input name='anggota' class='form-control' value="<?= $anggota['anggota'] ?>">
                        <?= form_error('anggota'); ?>
                    </div>
                    <div class="form-group row justify-content-left mt-2">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btnprimary">Ubah</button>
                            <button class="btn btn-dark" onclick="window.history.go(-1)"> Kembali</button>
                        </div>
                    </div>
                </form>


        </div>
    </div>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->