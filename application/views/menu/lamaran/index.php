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

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Data Spk Lamaran</h1>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Name CPW & CPP</th>
                                <th>Lokasi</th>
                                <th>Jam</th>
                                <th>Tim</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($surat as $spk) : ?>
                                <tr>
                                    <td><?= $spk['name']; ?></td>
                                    <td><?= $spk['place_l']; ?></td>
                                    <td><?= $spk['w_lamaran']; ?></td>
                                    <td><?= $spk['photograper']; ?>,<?= $spk['videograper']; ?>,<?= $spk['crew']; ?></td>
                                    <td>
                                        <div class="dropdown col-md-6    ">
                                            <button class="btn btn-primary dropdown-toggle font-weight-bold" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Action
                                            </button>    
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="" data-bs-toggle="modal" data-bs-target="#edit<?= $spk['id']; ?>">Edit</a>
                                                <a href="" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#delete<?= $spk['id']; ?>">Delete</a>
                                                <a class="dropdown-item" href="<?= base_url(); ?>spk/detail_lamar/<?= $spk['id']; ?>">Detail</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
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
        $date_l = $spk['date_l'];
        $w_lamaran = $spk['w_lamaran'];
        $place_l = $spk['place_l'];
        $note = $spk['note'];
    ?>
        <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="edit<?= $id; ?>" class="modal fade">
            <div class="modal-dialog " style="max-width: 40%;" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Edit</h4>
                    </div>
                    <form class="form-horizontal" action="<?= base_url('lamaran/spk_edit ') ?>" method="post" enctype="multipart/form-data" role="form">
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
                                    <label class="form-group">Tanggal Acara</label>
                                    <div class="mb-3">
                                        <input type="date" class="form-control mb-1" data-provide="datepicker" name="date_l" id="date_l" value="<?php echo $date_l; ?>">
                                        <input type="text" class="form-control" name="w_lamaran" id="w_lamaran" value="<?php if($ap['w_lamaran'] == '00:00:00'){
                                            echo '-';
                                        }else {
                                            echo ($ap['w_lamaran']); 
                                        } 
                                         ?>">
                                        <hr class="sidebar-divider d-none d-md-block">
                                    </div>
                                </div>
                            </div>
                            <div class="col-6" id="frm-field">
                                <div class="form-group  ">
                                    <label class="form-group">Tempat Acara</label>
                                    <div class="mb-3">
                                    <textarea class="form-control" name="place_l" id="place_l" rows="3" placeholder="Tempat Lamaran"><?php echo $place_l; ?></textarea>
                                    <hr class="sidebar-divider d-none d-md-block">
                                    </div>
                                </div>
                                <div class="col-md-6  ">
                                    <label for="more" class="form-label">Detail editor</label>
                                </div>
                                <div class="dropdown col-md-6 mb-2 ">
                                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        photograper
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#"><input type="checkbox" name="photograper[]" alt="Checkbox" value=""> Tidak Ada</a>
                                        <a class="dropdown-item" href="#"><input type="checkbox" name="photograper[]" alt="Checkbox" value="Ardi"> Ardi</a>
                                        <a class="dropdown-item" href="#"><input type="checkbox" name="photograper[]" alt="Checkbox" value="Nano"> Nano</a>
                                        <a class="dropdown-item" href="#"><input type="checkbox" name="photograper[]" alt="Checkbox" value="Rezza"> Rezza</a>
                                        <a class="dropdown-item" href="#"><input type="checkbox" name="photograper[]" alt="Checkbox" value="Malik"> Malik</a>
                                        <a class="dropdown-item" href="#"><input type="checkbox" name="photograper[]" alt="Checkbox" value="Apid"> Apid</a>
                                        <a class="dropdown-item" href="#"><input type="checkbox" name="photograper[]" alt="Checkbox" value="Dion"> Dion</a>
                                        <a class="dropdown-item" href="#"><input type="checkbox" name="photograper[]" alt="Checkbox" value="Nallho"> Nallho</a>
                                        <a class="dropdown-item" href="#"><input type="checkbox" name="photograper[]" alt="Checkbox" value="Asti"> Asti</a>
                                        <a class="dropdown-item" href="#"><input type="checkbox" name="photograper[]" alt="Checkbox" value="Rogen"> Rogen</a>
                                        <a class="dropdown-item" href="#"><input type="checkbox" name="photograper[]" alt="Checkbox" value="Jiwa"> Jiwa</a>
                                        <a class="dropdown-item" href="#"><input type="checkbox" name="photograper[]" alt="Checkbox" value="Dika"> Dika</a>
                                        <a class="dropdown-item" href="#"><input type="checkbox" name="photograper[]" alt="Checkbox" value="Alvin"> Alvin</a>
                                        <a class="dropdown-item" href="#"><input type="checkbox" name="photograper[]" alt="Checkbox" value="Azizur"> Azizur</a>
                                        <a class="dropdown-item" href="#"><input type="checkbox" name="photograper[]" alt="Checkbox" value="Rizky"> Rizky</a>
                                        <a class="dropdown-item" href="#"><input type="checkbox" name="photograper[]" alt="Checkbox" value="Faris"> Faris</a>
                                        <a class="dropdown-item" href="#"><input type="checkbox" name="photograper[]" alt="Checkbox" value="Eza Kusuma"> Eza Kusuma</a>
                                        <a class="dropdown-item" href="#"><input type="checkbox" name="photograper[]" alt="Checkbox" value="Aldi Gon"> Aldi Gon</a>
                                        <a class="dropdown-item" href="#"><input type="checkbox" name="photograper[]" alt="Checkbox" value="Intan"> Intan</a>
                                        <a class="dropdown-item" href="#"><input type="checkbox" name="photograper[]" alt="Checkbox" value="Bimo"> Bimo</a>
                                    </div>
                                </div>
                                <div class="dropdown col-md-6 mb-2">
                                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        videograper
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#"><input type="checkbox" name="videograper[]" alt="Checkbox" value=""> Tidak Ada</a>
                                        <a class="dropdown-item" href="#"><input type="checkbox" name="videograper[]" alt="Checkbox" value="Gian"> Gian</a>
                                        <a class="dropdown-item" href="#"><input type="checkbox" name="videograper[]" alt="Checkbox" value="Fadil"> Fadil</a>
                                        <a class="dropdown-item" href="#"><input type="checkbox" name="videograper[]" alt="Checkbox" value="Jodski"> Jodski</a>
                                        <a class="dropdown-item" href="#"><input type="checkbox" name="videograper[]" alt="Checkbox" value="Wendi"> Wendi</a>
                                        <a class="dropdown-item" href="#"><input type="checkbox" name="videograper[]" alt="Checkbox" value="Rama"> Rama</a>
                                        <a class="dropdown-item" href="#"><input type="checkbox" name="videograper[]" alt="Checkbox" value="Memeng"> Memeng</a>
                                        <a class="dropdown-item" href="#"><input type="checkbox" name="videograper[]" alt="Checkbox" value="Ekil"> Ekil</a>
                                        <a class="dropdown-item" href="#"><input type="checkbox" name="videograper[]" alt="Checkbox" value="Zaki"> Zaki</a>
                                        <a class="dropdown-item" href="#"><input type="checkbox" name="videograper[]" alt="Checkbox" value="Davi"> Davi</a>
                                        <a class="dropdown-item" href="#"><input type="checkbox" name="videograper[]" alt="Checkbox" value="Karin"> Karin</a>
                                        <a class="dropdown-item" href="#"><input type="checkbox" name="videograper[]" alt="Checkbox" value="Upil"> Upil</a>
                                        <a class="dropdown-item" href="#"><input type="checkbox" name="videograper[]" alt="Checkbox" value="Ilham"> Ilham</a>
                                        <a class="dropdown-item" href="#"><input type="checkbox" name="videograper[]" alt="Checkbox" value="Aldi Yahya"> Aldi Yahya</a>
                                        <a class="dropdown-item" href="#"><input type="checkbox" name="videograper[]" alt="Checkbox" value="Dasep"> Dasep</a>
                                    </div>
                                </div>
                                <div class="dropdown col-md-6 mb-2 ">
                                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        crew
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#"><input type="checkbox" name="crew[]" alt="Checkbox" value=""> Tidak Ada</a>
                                        <a class="dropdown-item" href="#"><input type="checkbox" name="crew[]" alt="Checkbox" value="Kewong"> Kewong</a>
                                        <a class="dropdown-item" href="#"><input type="checkbox" name="crew[]" alt="Checkbox" value="Tebi"> Tebi</a>
                                        <a class="dropdown-item" href="#"><input type="checkbox" name="crew[]" alt="Checkbox" value="Bejo"> Bejo</a>
                                        <a class="dropdown-item" href="#"><input type="checkbox" name="crew[]" alt="Checkbox" value="Well"> Well</a>
                                        <a class="dropdown-item" href="#"><input type="checkbox" name="crew[]" alt="Checkbox" value="Aziz"> Aziz</a>
                                        <a class="dropdown-item" href="#"><input type="checkbox" name="crew[]" alt="Checkbox" value="Ule"> Ule</a>
                                        <a class="dropdown-item" href="#"><input type="checkbox" name="crew[]" alt="Checkbox" value="Iki"> Iki</a>
                                        <a class="dropdown-item" href="#"><input type="checkbox" name="crew[]" alt="Checkbox" value="Nandang"> Nandang</a>
                                        <a class="dropdown-item" href="#"><input type="checkbox" name="crew[]" alt="Checkbox" value="Egi"> Egi</a>
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
                                <button class="btn btn-primary" type="submit"> Create&nbsp;</button>
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
                    <form action="<?= base_url() ?>lamaran/hapus_data/<?= $ap['id'] ?>" method="post">
                        <div class="modal-body">
                            Apakah anda yaki menghapus data ini ?<?= $ap['name']; ?>
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