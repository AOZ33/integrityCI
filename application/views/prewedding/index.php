<!doctype html>
<html lang="en">
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Latest compiled and minified CSS -->

    <script src="<?= base_url('libs/'); ?>/jquery.js" charset="utf-8"></script>


    <!-- Optional theme -->


    <!-- Latest compiled and minified JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <!-- jQuery -->

    <!-- Begin Page Content -->
    <div class="container-fluid">
    <?php if($this->session->flashdata('flash') ): ?>
        <div class="row mt-3">
            <div class="col-md-6">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Data</strong> <?= $this->session->flashdata('flash'); ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>  
            </div>
        </div>
        <?php endif;?>
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Data Spk Prewed</h1>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-body">
            <div class="row">
                    <div class="col-md-4">
                        <form action="<?= base_url('Prewedding') ;?>" method="post">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="search data" name="keyword" autocomplete="off" autofocus >
                                <input class="btn btn-primary" type="submit" name="submit">
                            </div>
                            <h6>Results Data : <?= $total_rows; ?></h6>
                        </form>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered"  width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Name CPW & CPP</th>
                                <th>Lokasi</th>
                                <th>Jam</th>
                                <th>Tim</th>
                                <th>Action</th>
                                <th>Details</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($surat as $spk) : ?>
                                <tr>
                                    <td><?= $spk['name']; ?></td>
                                    <td><?= $spk['place_p']; ?></td>
                                    <td><?= $spk['w_prewed']; ?></td>
                                    <td><?= $spk['photograper']; ?><?= $spk['videograper']; ?><?= $spk['crew']; ?></td>
                                    <td>
                                    <div class="dropdown col-md-6    ">
                                            <button class="btn btn-primary dropdown-toggle font-weight-bold" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Action
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="" data-bs-toggle="modal" data-bs-target="#edit<?= $spk['id']; ?>">Edit</a>
                                            <a href="" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#delete<?= $spk['id']; ?>">Delete</a>
                                            <a class="dropdown-item" href="<?= base_url(); ?>spk/detail_prewed/<?= $spk['id']; ?>">Detail Tim</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                    <div class="dropdown col-md-6    ">
                                            <button class="btn btn-primary dropdown-toggle font-weight-bold" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Details
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                
                                            <?php 
                                            $dphotographer = explode(",", $spk['photograper']);
                                            $dvideographer = explode(",", $spk['videograper']);
                                            $dcrew = explode(",", $spk['crew']);
                                            foreach ($dphotographer as $row ) {  
                                            if (!empty($row)) {?>
                                            <a class="dropdown-item" href="<?= base_url(); ?>personal/personal/<?= $spk['id']; ?>/<?= $row; ?>">Detail <?= $row ?></a>
                                            <?php } } 
                                            foreach ($dvideographer as $row ) {
                                            if (!empty($row)) {?>
                                            <a class="dropdown-item" href="<?= base_url(); ?>personal/personal_v/<?= $spk['id']; ?>/<?= $row; ?>">Detail <?= $row ?></a>
                                            <?php } }
                                            foreach ($dcrew as $row ) {
                                            if (!empty($row)) {?>
                                            <a class="dropdown-item" href="<?= base_url(); ?>personal/personal_c/<?= $spk['id']; ?>/<?= $row; ?>">Detail <?= $row ?></a>
                                            <?php } }?>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                        <?php if( empty($surat)): ?>
                            <tr>
                                <td colspan="10">
                                <div class="alert alert-danger" role="alert">
                                Data Not Found!
                                </div>
                                </td>
                            </tr>
                            <?php endif?>
                    </table>
                    <?= $this->pagination->create_links();?>
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- Modal Ubah -->
    <?php
    foreach ($surat as $spk) :
        $id = $spk['id'];
        $name = $spk['name'];
        $phone = $spk['phone'];
        $date = $spk['date'];
        $w_prewed = $spk['w_prewed'];
        $place_p = $spk['place_p'];
        $note = $spk['note'];
    ?>
        <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="edit<?= $id; ?>" class="modal fade">
            <div class="modal-dialog " style="max-width: 40%;" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Edit</h4>
                    </div>
                    <form class="form-horizontal" action="<?= base_url('prewedding/spk_edit ') ?>" method="post" enctype="multipart/form-data" role="form">
                        <div class="modal-body row">
                            <div class="col-6" id="frm-field">
                                <div class="form-group">
                                    <label class="form-group">Nama CWP & CPP</label>
                                    <div class="mb-3">
                                        <input type="hidden" id="id" name="id" value="<?= $id; ?>">
                                        <textarea class="form-control" name="name" id="name" rows="3" placeholder="name"><?php echo $name; ?></textarea>
                                        <hr class="sidebar-divider d-none d-md-block">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-group">No. Tlp</label>
                                    <div class="mb-3">
                                        <input type="text" class="form-control" id="phone" name="phone" value="<?php echo $phone; ?>">
                                        <hr class="sidebar-divider d-none d-md-block">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-group">Tanggal Prewedding</label>
                                    <div class="mb-3">
                                        <input type="date" class="form-control" data-provide="datepicker" name="date" id="date" value="<?php echo $date; ?>">
                                        <input type="text" class="form-control" name="w_prewed" id="w_prewed" value="<?php if($spk['w_prewed'] == '00:00:00'){
                                            echo '-';
                                        }else {
                                            echo ($spk['w_prewed']); 
                                        } 
                                         ?>">
                                        <hr class="sidebar-divider d-none d-md-block">
                                    </div>
                                </div>
                            </div>
                            <div class="col-6" id="frm-field">
                                <div class="form-group  ">
                                    <label class="form-group">Tempat Prewedding</label>
                                    <div class="mb-3">
                                    <textarea class="form-control" name="place_p" id="place_p" rows="3" placeholder="Tempat Prewedding"><?php echo $place_p; ?></textarea>
    
                                        <hr class="sidebar-divider d-none d-md-block">
                                    </div>
                                </div>
                                <div class="col-md-6  ">
                                    <label for="more" class="form-label">Detail Tim (Ceklis Kembali)</label>
                                </div>
                                <div class="dropdown col-md-6 mb-2 ">
                                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        photograper
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <?php foreach  ($gaji as $ft) : 
                                          $id = $ft['id'];
                                          $name = $ft['nama'];
                                        ?>
                                        <a class="dropdown-item" href="#"><input type="checkbox" name="photograper[]" alt="Checkbox" value="<?= $name ?>"> <?= $name ?></a>
                                        <?php endforeach; ?>
                                        <a class="dropdown-item" href="#"><input type="checkbox" name="photograper[]" alt="Checkbox" value="" checked> Tidak Ada</a>
                                    </div>
                                </div>
                                <div class="dropdown col-md-6 mb-2">
                                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        videograper
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <?php foreach  ($gaji_v as $vd) : 
                                          $id = $vd['id'];
                                          $name = $vd['nama'];
                                        ?>
                                        <a class="dropdown-item" href="#"><input type="checkbox" name="videograper[]" alt="Checkbox" value="<?= $name ?>"> <?= $name ?></a>
                                        <?php endforeach; ?>
                                        <a class="dropdown-item" href="#"><input type="checkbox" name="videograper[]" alt="Checkbox" value="" checked> Tidak Ada</a>
                                    </div>
                                </div>
                                <div class="dropdown col-md-6 mb-2">
                                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        crew
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <?php foreach  ($gaji_c as $cr) : 
                                          $id = $cr['id'];
                                          $name = $cr['nama'];
                                        ?>
                                        <a class="dropdown-item" href="#"><input type="checkbox" name="crew[]" alt="Checkbox" value="<?= $name ?>"> <?= $name ?></a>
                                        <?php endforeach; ?>
                                        <a class="dropdown-item" href="#"><input type="checkbox" name="crew[]" alt="Checkbox" value="" checked> Tidak Ada</a>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label class="form-group ">Catatan</label>
                                    <div class="mb-3">
                                        <textarea class="form-control" name="note" id="note" rows="3" placeholder="note"><?php echo $note; ?></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <div class="form-group">
                                <button class="btn btn-primary" type="submit"> Edit&nbsp;</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
        </div>
        </div>
    <?php endforeach; ?>
    <!-- END Modal Ubah -->
    <!-- Modal -->
    <?php
    foreach ($surat as $ap) :
        $id = $ap['id'];
        $name = $ap['name'];

    ?>
        <div class="modal fade" id="delete<?= $id; ?>" tabindex="-1" aria-labelledby="delete" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="  text-red-800">Delete Data</h5>
                    </div>
                    <form action="<?= base_url() ?>prewedding/hapus_data/<?= $ap['id'] ?>" method="post">
                        <div class="modal-body">
                            Apakah anda yakin menghapus data ini ? <?= $ap['name'] ?>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
    <!-- /.container-fluid -->