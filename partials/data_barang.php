<?php
if (isset($_POST['cari'])) {
    $cari = $_POST['cari'];
} else {
    $cari = "";
}
?>

<div class="row">
    <div class="col-md-12">
        <div class="page-header">
            <h4>
                Data Barang
                <div class="pull-right">
                    <form action="../index.php" class="form-inline" method="post">
                        <div class="form-group">
                            <div class="input-group-addon">
                                <i class="glyphicon glyphicon-search"></i>
                            </div>
                            <input type="text" class="form-control" name="cari" placeholder="Cari...." autocomplete="off" value="<?php echo $cari; ?>">
                        </div>
                    </form>
                </div>
            </h4>
            <a href="?page=tambah" class="btn btn-info">
                <i class="glyphicon glyphicon-plus">Tambah</i>
            </a>
        </div>
    </div>
    <?php
    if(empty($_GET['alert'])){
        echo "";
    }elseif ($_GET['alert' == 1]) {
        
    } 
    ?>
</div>