<!doctype html>
<html lang="en">
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="<?= base_url('libs/'); ?>/jquery.js" charset="utf-8"></script>

    <!-- Begin Page Content -->
    <div class="container-fluid">
        <?php if ($this->session->flashdata('flash')) : ?>
            <div class="row mt-3">
                <div class="col-md-6">
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Data</strong> <?= $this->session->flashdata('flash'); ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Data Client</h1>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <a class=" btn btn-success" href="<?= base_url('appointment'); ?>"><i class="fa fa-plus"></i> Tambah Client</a>
                <hr class="sidebar-divider d-none d-md-block">
                <p>Keyword Daftar Acara</p>
                <p>"Lmn = Lamaran, Pwd = Prewedd, A & R = Akad & Resepsi, P & S = Pegajian & Siraman, Live = Live Streaming"</p>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <form action="<?= base_url('Data'); ?>" method="post">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Cari Data..." name="keyword" autocomplete="off" autofocus>
                                <input class="btn btn-primary" type="submit" name="submit">
                            </div>
                            <h6>Jumlah Data : <?= $total_rows; ?></h6>
                        </form>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered" id="Table" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Name CPW & CPP</th>
                                <th>Daftar Acara</th>
                                <th>Lamaran</th>
                                <th>Prewedd</th>
                                <th>A & R</th>
                                <th>P & S</th>
                                <th>Acara</th>
                                <th>SPK</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($appointment as $ap) : ?>
                                <tr>
                                    <td><?= $ap['name']; ?></td>
                                    <td><?= $ap['n_acara']; ?><?= $ap['description']; ?></td>
                                    <td>
                                        <?php if ($ap['date_l'] == '0000-00-00') {
                                            echo '-';
                                        } else {
                                            echo date("Y/m/d", strtotime($ap['date_l']));
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <?php if ($ap['date_p'] == '0000-00-00') {
                                            echo '-';
                                        } else {
                                            echo date("Y/m/d", strtotime($ap['date_p']));
                                        }
                                        ?>
                                    <td>
                                        <?php if ($ap['date_w'] == '0000-00-00') {
                                            echo '-';
                                        } else {
                                            echo date("Y/m/d", strtotime($ap['date_w']));
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <?php if ($ap['date_m'] == '0000-00-00') {
                                            echo '-';
                                        } else {
                                            echo date("Y/m/d", strtotime($ap['date_m']));
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <?php if ($ap['date_a'] == '0000-00-00') {
                                            echo '-';
                                        } else {
                                            echo date("Y/m/d", strtotime($ap['date_a']));
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <div class="dropdown col-md-6   ">
                                            <button class="btn btn-primary dropdown-toggle font-weight-bold" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                SPK
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item " data-bs-toggle="modal" data-bs-target="#lamaran<?= $ap['id']; ?>">Lamaran</a>
                                                <a class="dropdown-item " data-bs-toggle="modal" data-bs-target="#prewed<?= $ap['id']; ?>">Prewedd</a>
                                                <a class="dropdown-item " data-bs-toggle="modal" data-bs-target="#wedding<?= $ap['id']; ?>">A & R</a>
                                                <a class="dropdown-item " data-bs-toggle="modal" data-bs-target="#pengajian<?= $ap['id']; ?>">P & S</a>
                                                <a class="dropdown-item " data-bs-toggle="modal" data-bs-target="#live<?= $ap['id']; ?>">Live</a>
                                                <a class="dropdown-item " data-bs-toggle="modal" data-bs-target="#editor<?= $ap['id']; ?>">Editor</a>
                                                <a class="dropdown-item " data-bs-toggle="modal" data-bs-target="#lainnya<?= $ap['id']; ?>">Acara</a>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="dropdown col-md-6    ">
                                            <button class="btn btn-primary dropdown-toggle font-weight-bold" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Action
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#edit<?= $ap['id']; ?>">Edit</a>
                                                <a class="dropdown-item" href="<?= base_url(); ?>data/detail/<?= $ap['id']; ?>">Detail</a>
                                                <a class="dropdown-item" href="<?= base_url(); ?>data/techmeet/<?= $ap['id']; ?>">Techmeet</a>
                                                <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#delete<?= $ap['id']; ?>">Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                        <?php if (empty($appointment)) : ?>
                            <tr>
                                <td colspan="10">
                                    <div class="alert alert-danger" role="alert">
                                        Data Not Found!
                                    </div>
                                </td>
                            </tr>
                        <?php endif ?>
                    </table>
                    <?= $this->pagination->create_links(); ?>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal Ubah -->
    <?php
    foreach ($appointment as $ap) :
        $id = $ap['id'];
        $name = $ap['name'];
        $name_a = $ap['name_a'];
        $package = $ap['package'];
        $event;
        $photo_g = $ap['photo_g'];
        $box = $ap['box'];
        $ukuran_p = $ap['ukuran_p'];
        $ukuran_w = $ap['ukuran_w'];
        $photo_g = $ap['photo_g'];
        $tambahan = $ap['tambahan'];
        $u20x30 = $ap['u20x30'];
        $u25x30 = $ap['u25x30'];
        $u30x30 = $ap['u30x30'];
        $video = $ap['video'];
        $lainnya = $ap['lainnya'];
        $wedding_book = $ap['wedding_book'];
        $address = $ap['address'];
        $phone = $ap['phone'];
        $email = $ap['email'];
        $instagram = $ap['instagram'];
        $price = $ap['price'];
        $dp = $ap['dp'];
        $nilai = $ap['nilai'];
        $uang = $ap['uang'];
        $date_l = $ap['date_l'];
        $w_lamaran = $ap['w_lamaran'];
        $place_l = $ap['place_l'];
        $date_p = $ap['date_p'];
        $w_prewed = $ap['w_prewed'];
        $date_w = $ap['date_w'];
        $w_akad = $ap['w_akad'];
        $w_resepsi = $ap['w_resepsi'];
        $date_m = $ap['date_m'];
        $w_siram = $ap['w_siram'];
        $place_m = $ap['place_m'];
        $date_s = $ap['date_s'];
        $w_live = $ap['w_live'];
        $place_s = $ap['place_s'];
        $n_acara = $ap['n_acara'];
        $date_a = $ap['date_a'];
        $w_lain = $ap['w_lain'];
        $place_p = $ap['place_p'];
        $place_w = $ap['place_w'];
        $place_a = $ap['place_a'];
        $date_dp = $ap['date_dp'];
        $date_n = $ap['date_n'];
        $date_u = $ap['date_u'];
        $more = $ap['more'];
        $more_p = $ap['more_p'];
        $more_w = $ap['more'];
        $more_m = $ap['more_m'];
        $more_s = $ap['more_s'];
        $more_a = $ap['more_a'];
    ?>
        <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="edit<?= $id; ?>" class="modal fade">
            <div class="modal-dialog " style="max-width: 80%;" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Edit Data</h4>
                    </div>
                    <form class="form-horizontal" action="<?= base_url('data/edit_barang') ?>" method="post" enctype="multipart/form-data" role="form">
                        <div class="modal-body row">
                            <div class="col-6" id="frm-field">
                                <div class="form-group">
                                    <h5>Data Diri Client</h5>
                                    <hr class="sidebar-divider d-none d-md-block">
                                </div>
                                <div class="form-group">
                                    <label class="form-group">Name CWP & CPP</label>
                                    <input type="hidden" id="id" name="id" value="<?= $id; ?>">
                                    <input type="text" class="form-control" id="name" name="name" value="<?php echo $name; ?>">
                                </div>
                                <div class="form-group">
                                    <label class="form-group">Nama Album & Video</label>
                                    <input type="text" class="form-control" id="name_a" name="name_a" value="<?php echo $name_a; ?>">
                                </div>
                                <div class="form-group ">
                                    <label class="form-group">Alamat</label>
                                    <textarea class="form-control" name="address" id="address" rows="2"><?php echo $address; ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label class="form-group">No. Tlp</label>
                                    <input type="number" class="form-control" id="phone" name="phone" value="<?php echo $phone; ?>">
                                </div>
                                <div class="form-group">
                                    <label class="form-group">Email</label>
                                    <input type="text" class="form-control" id="email" name="email" value="<?php echo $email; ?>">
                                </div>
                                <div class="form-group">
                                    <label class="form-group">Instagram</label>
                                    <input type="text" class="form-control" id="instagram" name="instagram" value="<?php echo $instagram; ?>">
                                </div>
                                <div class="form-group">
                                    <label class="form-group">Package</label>
                                    <input type="text" class="form-control" id="package" name="package" value="<?php echo $package; ?>">
                                </div>
                                <hr class="sidebar-divider d-none d-md-block">
                                <div class="col-md-6 ">
                                    <h5>Detail Order</h5>
                                    <hr class="sidebar-divider d-none d-md-block">
                                </div>
                                <div class="form-group">
                                    <label class="form-group">Photo Mini Gallery Prewed</label>
                                    <input type="text" class="form-control" id="photo_g" name="photo_g" value="<?php echo $photo_g; ?>">
                                </div>
                                <div class="form-group">
                                    <label class="form-group">Photo Pembesaran</label>
                                    <input type="text" class="form-control" id="ukuran_p" name="ukuran_p" value="<?php echo $ukuran_p; ?>">
                                    <input type="text" class="form-control" id="ukuran_w" name="ukuran_w" value="<?php echo $ukuran_w; ?>">
                                </div>
                                <div class="form-group">
                                    <label class="form-group">Lainnya</label>
                                    <input type="text" class="form-control" id="tambahan" name="tambahan" value="<?php echo $tambahan; ?>">
                                </div>
                                <div class="form-group">
                                    <label class="form-group">Box</label>
                                    <input type="text" class="form-control" id="box" name="box" value="<?php echo $box; ?>">
                                </div>
                                <div class="form-group">
                                    <label class="form-group">Album</label>
                                    <input type="text" class="form-control" id="u20x30" name="u20x30" value="<?php echo $u20x30; ?>" placeholder="20x30">
                                    <input type="text" class="form-control" id="u25x30" name="u25x30" value="<?php echo $u25x30; ?>" placeholder="25x30">
                                    <input type="text" class="form-control" id="u30x30" name="u30x30" value="<?php echo $u30x30; ?>" placeholder="30x30">
                                </div>
                                <div class="form-group">
                                    <label class="form-group">Wedding Book</label>
                                    <input type="text" class="form-control" id="wedding_book" name="wedding_book" value="<?php echo $wedding_book; ?>">
                                </div>
                                <div class="form-group">
                                    <label class="form-group">Video</label>
                                    <input type="text" class="form-control" id="video" name="video" value="<?php echo $video; ?>">
                                </div>
                                <div class="form-group">
                                    <label class="form-group">Lainnya</label>
                                    <input type="text" class="form-control" id="lainnya" name="lainnya" value="<?php echo $lainnya; ?>">
                                </div>
                                <hr class="sidebar-divider d-none d-md-block">
                            </div>
                            <div class="col-6">
                                <div class="col-md-6  ">
                                    <h5>Detail Acara (Harus di Ceklis)</h5>
                                    <hr class="sidebar-divider d-none d-md-block">
                                </div>
                                <div class="dropdown col-md-6 row  ">
                                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Daftar
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <input type="hidden" name="description[]" alt="Checkbox" value="">
                                        <a class="dropdown-item" href="#"><input type="checkbox" name="description[]" alt="Checkbox" value=" Lmn"> Lamaran</a>
                                        <a class="dropdown-item" href="#"><input type="checkbox" name="description[]" alt="Checkbox" value=" Pwd"> Prewedding</a>
                                        <a class="dropdown-item" href="#"><input type="checkbox" name="description[]" alt="Checkbox" value=" P & S"> Pegajian & Siraman</a>
                                        <a class="dropdown-item" href="#"><input type="checkbox" name="description[]" alt="Checkbox" value=" A & R"> Akad & Resepsi</a>
                                        <a class="dropdown-item" href="#"><input type="checkbox" name="description[]" alt="Checkbox" value=" Live"> Live Streaming</a>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-group">Lamaran</label>
                                    <input type="date" class="form-control" data-provide="datepicker" name="date_l" id="date_l" value="<?php echo $date_l; ?>">
                                    <input type="text" class="form-control" name="w_lamaran" id="w_lamaran" value="<?php if ($ap['w_lamaran'] == '00:00:00') {
                                                                                                                        echo '-';
                                                                                                                    } else {
                                                                                                                        echo ($ap['w_lamaran']);
                                                                                                                    }
                                                                                                                    ?>" placeholder="Jam ">
                                    <textarea class="form-control" name="place_l" id="place_l" rows="2" placeholder="Tempat"><?php echo $place_l; ?></textarea>
                                    <textarea class="form-control" name="more" id="more" rows="2" placeholder="Note"><?php echo $more; ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label class="form-group">Prewedding</label>
                                    <input type="date" class="form-control" data-provide="datepicker" name="date_p" id="date_p" value="<?php echo $date_p; ?>">
                                    <input type="text" class="form-control" name="w_prewed" id="w_prewed" value="<?php if ($ap['w_prewed'] == '00:00:00') {
                                                                                                                        echo '-';
                                                                                                                    } else {
                                                                                                                        echo ($ap['w_prewed']);
                                                                                                                    }
                                                                                                                    ?>" placeholder="Jam ">
                                    <textarea class="form-control" name="place_p" id="place_p" rows="2" placeholder="Tempat"><?php echo $place_p; ?></textarea>
                                    <textarea class="form-control" name="more_p" id="more_p" rows="2" placeholder="Note"><?php echo $more_p; ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label class="form-group">Pegajian & Siraman</label>
                                    <input type="date" class="form-control" data-provide="datepicker" name="date_m" id="date_m" value="<?php echo $date_m; ?>">
                                    <input type="text" class="form-control" name="w_siram" id="w_siram" value="<?php if ($ap['w_siram'] == '00:00:00') {
                                                                                                                    echo '-';
                                                                                                                } else {
                                                                                                                    echo ($ap['w_siram']);
                                                                                                                }
                                                                                                                ?>">
                                    <textarea class="form-control" name="place_m" id="place_m" rows="1" placeholder="Tempat"><?php echo $place_m; ?></textarea>
                                    <textarea class="form-control" name="more_m" id="more_m" rows="2" placeholder="Note"><?php echo $more_m; ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label class="form-group">Akad & Resepsi</label>
                                    <input type="date" class="form-control" data-provide="datepicker" name="date_w" id="date_w" value="<?php echo $date_w; ?>">
                                    <input type="text" class="form-control" name="w_akad" id="w_akad" value="<?php if ($ap['w_akad'] == '00:00:00') {
                                                                                                                    echo '-';
                                                                                                                } else {
                                                                                                                    echo ($ap['w_akad']);
                                                                                                                }
                                                                                                                ?>">
                                    <input type="text" class="form-control" name="w_resepsi" id="w_resepsi" value="<?php if ($ap['w_resepsi'] == '00:00:00') {
                                                                                                                        echo '-';
                                                                                                                    } else {
                                                                                                                        echo ($ap['w_resepsi']);
                                                                                                                    }
                                                                                                                    ?>">
                                    <textarea class="form-control" name="place_w" id="place_w" rows="2" placeholder="Tempat"><?php echo $place_w; ?></textarea>
                                    <textarea class="form-control" name="more_w" id="more_w" rows="2" placeholder="Note"><?php echo $more_w; ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label class="form-group">live Stream</label>
                                    <input type="date" class="form-control" data-provide="datepicker" name="date_s" id="date_s" value="<?php echo $date_s; ?>">
                                    <input type="text" class="form-control" name="w_live" id="w_live" value="<?php if ($ap['w_live'] == '00:00:00') {
                                                                                                                    echo '-';
                                                                                                                } else {
                                                                                                                    echo ($ap['w_live']);
                                                                                                                }
                                                                                                                ?>">
                                    <textarea class="form-control" name="place_l" id="place_l" rows="1" placeholder="Tempat"><?php echo $place_l; ?></textarea>
                                    <textarea class="form-control" name="more_s" id="more_s" rows="2" placeholder="Note"><?php echo $more_s; ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label class="form-group">Acara Lain</label>
                                    <input type="text" class="form-control" name="n_acara" id="n_acara" value="<?php echo $n_acara; ?>">
                                    <input type="date" class="form-control" data-provide="datepicker" name="date_a" id="date_a" value="<?php echo $date_a; ?>">
                                    <input type="text" class="form-control" name="w_lain" id="w_lain" value="<?php if ($ap['w_lain'] == '00:00:00') {
                                                                                                                    echo '-';
                                                                                                                } else {
                                                                                                                    echo ($ap['w_lain']);
                                                                                                                }
                                                                                                                ?> ">
                                    <textarea class="form-control" name="place_a" id="place_a" rows="1" placeholder="Tempat"><?php echo $place_a; ?></textarea>
                                    <textarea class="form-control" name="more_a" id="more_a" rows="2" placeholder="Note"><?php echo $more_a; ?></textarea>
                                </div>
                                <hr class="sidebar-divider d-none d-md-block">
                            </div>
                            <div class="col-md-6">
                                <label for="price" class="form-label">Total Order</label>
                                <input type="text" class="form-control" name="price" id="price" value="<?php echo $price; ?>">
                            </div>
                            <div class="col-md-6">
                                <label for="price" class="form-label">DP/Bookingday (20% Dari Total)</label>
                                <input type="text" class="form-control" name="dp" id="dp" value="<?php echo $dp; ?>">
                                <input type="date" class="form-control" data-provide="datepicker" name="date_dp" id="date_dp" value="<?php echo $date_dp; ?>">
                            </div>
                            <div class="col-md-6">
                                <label for="price" class="form-label">Pembayaran II (H-5 Prewedding 50%)</label>
                                <input type="text" class="form-control" name="nilai" id="nilai" value="<?php echo $nilai; ?>">
                                <input type="date" class="form-control" data-provide="datepicker" name="date_n" id="date_n" value="<?php echo $date_n; ?>">
                            </div>
                            <div class="col-md-6">
                                <label for="price" class="form-label">Pelunasan (H-5 Wedding 30%)</label>
                                <input type="text" class="form-control" name="uang" id="uang" value="<?php echo $uang; ?>">
                                <input type="date" class="form-control" data-provide="datepicker" name="date_u" id="date_u" value="<?php echo $date_u; ?>">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-primary" type="submit"> Edit&nbsp;</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
    <?php endforeach; ?>
    <!-- END Modal Ubah -->




    <!-- Modal Ubah -->
    <?php
    foreach ($appointment as $ap) :
        $id = $ap['id'];
        $name = $ap['name'];
        $phone = $ap['phone'];
        $date_l = $ap['date_l'];
        $w_lamaran = $ap['w_lamaran'];
        $place_l = $ap['place_l'];
        $more = $ap['more'];
    ?>
        <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="lamaran<?= $id; ?>" class="modal fade">
            <div class="modal-dialog " style="max-width: 40%;" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">SPK Lamaran</h4>
                    </div>
                    <form class="form-horizontal" action="<?= base_url('spk/spk_lamar') ?>" method="post" enctype="multipart/form-data" role="form">
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
                                    <label class="form-group">Tanggal Lamaran</label>
                                    <div class="mb-3">
                                        <input type="date" class="form-control mb-1" data-provide="datepicker" name="date_l" id="date_l" value="<?php echo $date_l; ?>">
                                        <input type="text" class="form-control" name="w_lamaran" id="w_lamaran" value="<?php if ($ap['w_lamaran'] == '00:00:00') {
                                                                                                                            echo '-';
                                                                                                                        } else {
                                                                                                                            echo ($ap['w_lamaran']);
                                                                                                                        }
                                                                                                                        ?>">
                                        <hr class="sidebar-divider d-none d-md-block">
                                    </div>
                                </div>
                            </div>
                            <div class="col-6" id="frm-field">
                                <div class="form-group  ">
                                    <label class="form-group">Tempat Lamaran</label>
                                    <div class="mb-3">
                                        <textarea class="form-control" name="place_l" id="place_l" rows="3" placeholder="Tempat Lamaran"><?php echo $place_l; ?></textarea>
                                        <hr class="sidebar-divider d-none d-md-block">
                                    </div>
                                </div>
                                <div class="col-md-6 ">
                                    <label for="more" class="form-label">Detail Crew</label>
                                </div>
                                <div class="dropdown col-md-6 mb-2">
                                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Photograper
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <?php foreach ($gaji as $ft) :
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
                                        Videograper
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <?php foreach ($gaji_v as $vd) :
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
                                        <?php foreach ($gaji_c as $cr) :
                                            $id = $cr['id'];
                                            $name = $cr['nama'];
                                        ?>
                                            <a class="dropdown-item" href="#"><input type="checkbox" name="crew[]" alt="Checkbox" value="<?= $name ?>"> <?= $name ?></a>
                                        <?php endforeach; ?>
                                        <a class="dropdown-item" href="#"><input type="checkbox" name="crew[]" alt="Checkbox" value="" checked> Tidak Ada</a>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label class="form-group">Catatan</label>
                                    <div class="mb-3">
                                        <textarea class="form-control" name="note" id="note" rows="3" placeholder="note"><?php echo $more; ?></textarea>
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
    <!-- Modal Ubah -->
    <?php
    foreach ($appointment as $ap) :
        $id = $ap['id'];
        $name = $ap['name'];
        $phone = $ap['phone'];
        $date_p = $ap['date_p'];
        $w_prewed = $ap['w_prewed'];
        $place_p = $ap['place_p'];
        $more_p = $ap['more_p'];
    ?>
        <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="prewed<?= $id; ?>" class="modal fade">
            <div class="modal-dialog " style="max-width: 40%;" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">SPK Prewedding</h4>
                    </div>
                    <form class="form-horizontal" action="<?= base_url('spk/spk_prewed') ?>" method="post" enctype="multipart/form-data" role="form">
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
                                        <input type="date" class="form-control mb-1" data-provide="datepicker" name="date" id="date" value="<?php echo $date_p; ?>">
                                        <input type="text" class="form-control" name="w_prewed" id="w_prewed" value="<?php if ($ap['w_prewed'] == '00:00:00') {
                                                                                                                            echo '-';
                                                                                                                        } else {
                                                                                                                            echo ($ap['w_prewed']);
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
                                <div class="col-md-6 ">
                                    <label for="more" class="form-label">Detail Crew</label>
                                </div>
                                <div class="dropdown col-md-6 mb-2">
                                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Photograper
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <?php foreach ($gaji as $ft) :
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
                                        Videograper
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <?php foreach ($gaji_v as $vd) :
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
                                        <?php foreach ($gaji_c as $cr) :
                                            $id = $cr['id'];
                                            $name = $cr['nama'];
                                        ?>
                                            <a class="dropdown-item" href="#"><input type="checkbox" name="crew[]" alt="Checkbox" value="<?= $name ?>"> <?= $name ?></a>
                                        <?php endforeach; ?>
                                        <a class="dropdown-item" href="#"><input type="checkbox" name="crew[]" alt="Checkbox" value="" checked> Tidak Ada</a>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label class="form-group">Catatan</label>
                                    <div class="mb-3">
                                        <textarea class="form-control" name="note" id="note" rows="3" placeholder="note"><?php echo $more_p; ?></textarea>
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
    <!-- Modal Ubah -->
    <?php
    foreach ($appointment as $ap) :
        $id = $ap['id'];
        $name = $ap['name'];
        $phone = $ap['phone'];
        $date_w = $ap['date_w'];
        $w_akad = $ap['w_akad'];
        $w_resepsi = $ap['w_resepsi'];
        $place_w = $ap['place_w'];
        $more_w = $ap['more_w'];
    ?>
        <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="wedding<?= $id; ?>" class="modal fade">
            <div class="modal-dialog " style="max-width: 40%;" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">SPK Wedding</h4>
                    </div>
                    <form class="form-horizontal" action="<?= base_url('spk/spk_wed') ?>" method="post" enctype="multipart/form-data" role="form">
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
                                    <label class="form-group">Tanggal Wedding</label>
                                    <div class="mb-3">
                                        <input type="date" class="form-control" data-provide="datepicker" name="date_w" id="date_w" value="<?php echo $date_w; ?>">
                                        Mulai:
                                        <input type="text" class="form-control" name="w_akad" id="w_akad" value="<?php if ($ap['w_akad'] == '00:00:00') {
                                                                                                                        echo '-';
                                                                                                                    } else {
                                                                                                                        echo ($ap['w_akad']);
                                                                                                                    }
                                                                                                                    ?>">
                                        Selesai:
                                        <input type="text" class="form-control" name="w_resepsi" id="w_resepsi" value="<?php if ($ap['w_resepsi'] == '00:00:00') {
                                                                                                                            echo '-';
                                                                                                                        } else {
                                                                                                                            echo ($ap['w_resepsi']);
                                                                                                                        }
                                                                                                                        ?>">
                                        <hr class="sidebar-divider d-none d-md-block">
                                    </div>
                                </div>
                            </div>
                            <div class="col-6" id="frm-field">
                                <div class="form-group  ">
                                    <label class="form-group">Tempat Wedding</label>
                                    <div class="mb-3">
                                        <textarea class="form-control" name="place_w" id="place_w" rows="3" placeholder="Tempat Wedding"><?php echo $place_w; ?></textarea>
                                        <hr class="sidebar-divider d-none d-md-block">
                                    </div>
                                </div>
                                <div class="col-md-6 ">
                                    <label for="more" class="form-label">Detail Crew</label>
                                </div>
                                <div class="dropdown col-md-6 mb-2">
                                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Photograper
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <?php foreach ($gaji as $ft) :
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
                                        Videograper
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <?php foreach ($gaji_v as $vd) :
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
                                        <?php foreach ($gaji_c as $cr) :
                                            $id = $cr['id'];
                                            $name = $cr['nama'];
                                        ?>
                                            <a class="dropdown-item" href="#"><input type="checkbox" name="crew[]" alt="Checkbox" value="<?= $name ?>"> <?= $name ?></a>
                                        <?php endforeach; ?>
                                        <a class="dropdown-item" href="#"><input type="checkbox" name="crew[]" alt="Checkbox" value="" checked> Tidak Ada</a>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label class="form-group">Catatan</label>
                                    <div class="mb-3">
                                        <textarea class="form-control" name="note" id="note" rows="2" placeholder="note"><?php echo $more_w; ?></textarea>
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
    <!-- Modal Ubah -->
    <?php
    foreach ($appointment as $ap) :
        $id = $ap['id'];
        $name = $ap['name'];
        $phone = $ap['phone'];
        $date_m = $ap['date_m'];
        $w_siram = $ap['w_siram'];
        $place_m = $ap['place_m'];
        $more_m = $ap['more_m'];
    ?>
        <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="pengajian<?= $id; ?>" class="modal fade">
            <div class="modal-dialog " style="max-width: 40%;" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">SPK Pengajian & Siraman</h4>
                    </div>
                    <form class="form-horizontal" action="<?= base_url('spk/spk_pengaji') ?>" method="post" enctype="multipart/form-data" role="form">
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
                                        <input type="date" class="form-control mb-1" data-provide="datepicker" name="date_m" id="date_m" value="<?php echo $date_m; ?>">
                                        <input type="text" class="form-control" name="w_siram" id="w_siram" value="<?php if ($ap['w_siram'] == '00:00:00') {
                                                                                                                        echo '-';
                                                                                                                    } else {
                                                                                                                        echo ($ap['w_siram']);
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
                                        <textarea class="form-control" name="place_m" id="place_m" rows="3" placeholder="Tempat Acara"></textarea>
                                        <hr class="sidebar-divider d-none d-md-block">
                                    </div>
                                </div>
                                <div class="col-md-6 ">
                                    <label for="more" class="form-label">Detail Crew</label>
                                </div>
                                <div class="dropdown col-md-6 mb-2">
                                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Photograper
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <?php foreach ($gaji as $ft) :
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
                                        Videograper
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <?php foreach ($gaji_v as $vd) :
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
                                        <?php foreach ($gaji_c as $cr) :
                                            $id = $cr['id'];
                                            $name = $cr['nama'];
                                        ?>
                                            <a class="dropdown-item" href="#"><input type="checkbox" name="crew[]" alt="Checkbox" value="<?= $name ?>"> <?= $name ?></a>
                                        <?php endforeach; ?>
                                        <a class="dropdown-item" href="#"><input type="checkbox" name="crew[]" alt="Checkbox" value="" checked> Tidak Ada</a>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label class="form-group">Catatan</label>
                                    <div class="mb-3">
                                        <textarea class="form-control" name="note" id="note" rows="3" placeholder="note"><?php echo $more_m; ?></textarea>
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
    <!-- Modal Ubah -->
    <?php
    foreach ($appointment as $ap) :
        $id = $ap['id'];
        $name = $ap['name'];
        $phone = $ap['phone'];
        $date_s = $ap['date_s'];
        $w_live = $ap['w_live'];
        $place_s = $ap['place_s'];
        $more_s = $ap['more_s'];
    ?>
        <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="live<?= $id; ?>" class="modal fade">
            <div class="modal-dialog " style="max-width: 40%;" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">SPK Live</h4>
                    </div>
                    <form class="form-horizontal" action="<?= base_url('spk/spk_live') ?>" method="post" enctype="multipart/form-data" role="form">
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
                                        <input type="date" class="form-control mb-1" data-provide="datepicker" name="date_s" id="date_s" value="<?php echo $date_s; ?>">
                                        <input type="text" class="form-control" name="w_live" id="w_live" value="<?php if ($ap['w_live'] == '00:00:00') {
                                                                                                                        echo '-';
                                                                                                                    } else {
                                                                                                                        echo ($ap['w_live']);
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
                                        <textarea class="form-control" name="place_s" id="place_s" rows="3"><?php echo $place_s; ?></textarea>
                                        <hr class="sidebar-divider d-none d-md-block">
                                    </div>
                                </div>
                                <div class="col-md-6 ">
                                    <label for="more" class="form-label">Detail Crew</label>
                                </div>
                                <div class="dropdown col-md-6 mb-2">
                                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Photograper
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <?php foreach ($gaji as $ft) :
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
                                        Videograper
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <?php foreach ($gaji_v as $vd) :
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
                                        <?php foreach ($gaji_c as $cr) :
                                            $id = $cr['id'];
                                            $name = $cr['nama'];
                                        ?>
                                            <a class="dropdown-item" href="#"><input type="checkbox" name="crew[]" alt="Checkbox" value="<?= $name ?>"> <?= $name ?></a>
                                        <?php endforeach; ?>
                                        <a class="dropdown-item" href="#"><input type="checkbox" name="crew[]" alt="Checkbox" value="" checked> Tidak Ada</a>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label class="form-group">Catatan</label>
                                    <div class="mb-3">
                                        <textarea class="form-control" name="note" id="note" rows="3" placeholder="note"><?php echo $more_s; ?></textarea>
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
    <!-- Modal Ubah -->
    <?php
    foreach ($appointment as $ap) :
        $id = $ap['id'];
        $n_acara = $ap['n_acara'];
        $name = $ap['name'];
        $phone = $ap['phone'];
        $date_a = $ap['date_a'];
        $w_lain = $ap['w_lain'];
        $place_a = $ap['place_a'];
        $more_a = $ap['more_a'];
    ?>
        <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="lainnya<?= $id; ?>" class="modal fade">
            <div class="modal-dialog " style="max-width: 40%;" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">SPK Acara</h4>
                    </div>
                    <form class="form-horizontal" action="<?= base_url('spk/spk_lain') ?>" method="post" enctype="multipart/form-data" role="form">
                        <div class="modal-body row">
                            <div class="col-6" id="frm-field">
                                <div class="form-group">
                                    <label class="form-group">Nama Acara</label>
                                    <div class="mb-3">
                                        <input type="text" class="form-control" id="name_a" name="name_a" value="<?php echo $n_acara; ?>">
                                        <hr class="sidebar-divider d-none d-md-block">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-group">Nama CWP & CPP</label>
                                    <div class="mb-3">
                                        <input type="hidden" id="id" name="id" value="<?= $id; ?>">
                                        <textarea class="form-control" name="name" id="name" rows="3"><?php echo $name; ?></textarea>
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
                                        <input type="date" class="form-control mb-1" data-provide="datepicker" name="date_a" id="date_a" value="<?php echo $date_a; ?>">
                                        <input type="text" class="form-control" name="w_lain" id="w_lain" value="<?php if ($ap['w_lain'] == '00:00:00') {
                                                                                                                        echo '-';
                                                                                                                    } else {
                                                                                                                        echo ($ap['w_lain']);
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
                                        <textarea class="form-control" name="place_a" id="place_a" rows="3"><?php echo $place_a; ?></textarea>
                                        <hr class="sidebar-divider d-none d-md-block">
                                    </div>
                                </div>
                                <div class="col-md-6 ">
                                    <label for="more" class="form-label">Detail Crew</label>
                                </div>
                                <div class="dropdown col-md-6 mb-2">
                                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Photograper
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <?php foreach ($gaji as $ft) :
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
                                        Videograper
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <?php foreach ($gaji_v as $vd) :
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
                                        <?php foreach ($gaji_c as $cr) :
                                            $id = $cr['id'];
                                            $name = $cr['nama'];
                                        ?>
                                            <a class="dropdown-item" href="#"><input type="checkbox" name="crew[]" alt="Checkbox" value="<?= $name ?>"> <?= $name ?></a>
                                        <?php endforeach; ?>
                                        <a class="dropdown-item" href="#"><input type="checkbox" name="crew[]" alt="Checkbox" value="" checked> Tidak Ada</a>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label class="form-group">Catatan</label>
                                    <div class="mb-3">
                                        <textarea class="form-control" name="note" id="note" rows="3" placeholder="note"><?php echo $more_a; ?></textarea>
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
    <!-- Modal Ubah -->
    <?php
    foreach ($appointment as $ap) :
        $id = $ap['id'];
        $name = $ap['name'];
        $date_w = $ap['date_w'];
    ?>
        <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="editor<?= $id; ?>" class="modal fade">
            <div class="modal-dialog " style="max-width: 40%;" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">SPK Editor</h4>
                    </div>
                    <form class="form-horizontal" action="<?= base_url('spk/spk_edit') ?>" method="post" enctype="multipart/form-data" role="form">
                        <div class="modal-body row">
                            <div class="col-6" id="frm-field">
                                <div class="form-group">
                                    <label class="form-group">Nama CWP & CPP</label>
                                    <div class="mb-3">
                                        <input type="hidden" id="id" name="id" value="<?= $id; ?>">
                                        <input type="text" class="form-control" id="name" name="name" value="<?php echo $name; ?>">
                                        <hr class="sidebar-divider d-none d-md-block">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-group">Tanggal Akad</label>
                                    <div class="mb-3">
                                        <input type="date" class="form-control" data-provide="datepicker" name="date_w" id="date_w" value="<?php echo $date_w; ?>">
                                        <hr class="sidebar-divider d-none d-md-block">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-group">Tanggal Resepsi (Bila Ada)</label>
                                    <div class="mb-3">
                                        <input type="date" class="form-control" data-provide="datepicker" name="date_r" id="date_r">
                                        <hr class="sidebar-divider d-none d-md-block">
                                    </div>
                                </div>
                                <div class="col-md-6 ">
                                    <label for="more" class="form-label">Detail</label>
                                    <div class="mb-3">
                                        <input type="radio" name="category" value="PHOTO"> PHOTO<br>
                                        <input type="radio" name="category" value="VIDEO"> VIDEO<br>
                                        <hr class="sidebar-divider d-none d-md-block">
                                    </div>
                                </div>
                                <div class="dropdown col-md-6 row  ">
                                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Editor
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <?php foreach ($gaji_e as $edr) :
                                            $id = $edr['id'];
                                            $name = $edr['nama'];
                                        ?>
                                            <a class="dropdown-item" href="#"><input type="checkbox" name="editor[]" alt="Checkbox" value="<?= $name ?>"> <?= $name ?></a>
                                        <?php endforeach; ?>
                                        <a class="dropdown-item" href="#"><input type="checkbox" name="editor[]" alt="Checkbox" value=""> Kosong</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6" id="frm-field">
                                <div class="form-group">
                                    <label class="form-group">Tanggal Mulai</label>
                                    <div class="mb-3">
                                        <input type="date" class="form-control" data-provide="datepicker" name="date_m" id="date_m">
                                        <hr class="sidebar-divider d-none d-md-block">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-group">Tanggal Selesai</label>
                                    <div class="mb-3">
                                        <input type="date" class="form-control" data-provide="datepicker" name="date_s" id="date_s">
                                        <hr class="sidebar-divider d-none d-md-block">
                                    </div>
                                </div>

                                <div class="form-group ">
                                    <label class="form-group">Detail Order</label>
                                    <div class="mb-3">
                                        <textarea class="form-control" name="note" id="note" rows="3" placeholder="note"></textarea>
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
    <!-- Modal Ubah -->








    <!-- END Modal Ubah -->

    <!-- Button trigger modal -->

    <!-- Modal -->
    <?php
    foreach ($appointment as $ap) :
        $id = $ap['id'];

    ?>
        <div class="modal fade" id="delete<?= $id; ?>" tabindex="-1" aria-labelledby="delete" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="  text-red-800">Delete Data</h5>
                    </div>
                    <form action="<?= base_url() ?>data/hapus_data/<?= $ap['id'] ?>" method="post">
                        <div class="modal-body">
                            Apakah anda yakin menghapus data ini ?<?= $ap['name'] ?>
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

    </div>
    <!-- End of Main Content -->
    </div>
    <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    <script type="text/javascript">
        var price = document.getElementById('price');
        price.addEventListener('keyup', function(e) {
            // tambahkan 'Rp.' pada saat form di ketik
            // gunakan fungsi formatprice() untuk mengubah angka yang di ketik menjadi format angka
            price.value = formatPrice(this.value, 'Rp. ');
        });

        /* Fungsi formatprice */
        function formatPrice(angka, prefix) {
            var number_string = angka.replace(/[^,\d]/g, '').toString(),
                split = number_string.split(','),
                sisa = split[0].length % 3,
                price = split[0].substr(0, sisa),
                ribuan = split[0].substr(sisa).match(/\d{3}/gi);

            // tambahkan titik jika yang di input sudah menjadi angka ribuan
            if (ribuan) {
                separator = sisa ? '.' : '';
                price += separator + ribuan.join('.');
            }

            price = split[1] != undefined ? price + ',' + split[1] : price;
            return prefix == undefined ? price : (price ? 'Rp. ' + price : '');
        }
    </script>
    <script type="text/javascript">
        var dp = document.getElementById('dp');
        dp.addEventListener('keyup', function(e) {
            // tambahkan 'Rp.' pada saat form di ketik
            // gunakan fungsi formatdp() untuk mengubah dp yang di ketik menjadi format dp
            dp.value = formatDp(this.value, 'Rp. ');
        });

        /* Fungsi formatangka */
        function formatDp(angka, prefix) {
            var number_string = angka.replace(/[^,\d]/g, '').toString(),
                split = number_string.split(','),
                sisa = split[0].length % 3,
                dp = split[0].substr(0, sisa),
                ribuan = split[0].substr(sisa).match(/\d{3}/gi);

            // tambahkan titik jika yang di input sudah menjadi dp ribuan
            if (ribuan) {
                separator = sisa ? '.' : '';
                dp += separator + ribuan.join('.');
            }

            dp = split[1] != undefined ? dp + ',' + split[1] : dp;
            return prefix == undefined ? dp : (dp ? 'Rp. ' + dp : '');
        }
    </script>
    <script type="text/javascript">
        var nilai = document.getElementById('nilai');
        nilai.addEventListener('keyup', function(e) {
            // tambahkan 'Rp.' pada saat form di ketik
            // gunakan fungsi formatnilai() untuk mengubah nilai yang di ketik menjadi format nilai
            nilai.value = formatNilai(this.value, 'Rp. ');
        });

        /* Fungsi formatNilai */
        function formatNilai(angka, prefix) {
            var number_string = angka.replace(/[^,\d]/g, '').toString(),
                split = number_string.split(','),
                sisa = split[0].length % 3,
                nilai = split[0].substr(0, sisa),
                ribuan = split[0].substr(sisa).match(/\d{3}/gi);

            // tambahkan titik jika yang di input sudah menjadi nilai ribuan
            if (ribuan) {
                separator = sisa ? '.' : '';
                nilai += separator + ribuan.join('.');
            }

            nilai = split[1] != undefined ? nilai + ',' + split[1] : nilai;
            return prefix == undefined ? nilai : (nilai ? 'Rp. ' + nilai : '');
        }
    </script>
    <script type="text/javascript">
        var uang = document.getElementById('uang');
        uang.addEventListener('keyup', function(e) {
            // tambahkan 'Rp.' pada saat form di ketik
            // gunakan fungsi formatuang() untuk mengubah uang yang di ketik menjadi format uang
            uang.value = formatUang(this.value, 'Rp. ');
        });

        /* Fungsi formatUang */
        function formatUang(angka, prefix) {
            var number_string = angka.replace(/[^,\d]/g, '').toString(),
                split = number_string.split(','),
                sisa = split[0].length % 3,
                uang = split[0].substr(0, sisa),
                ribuan = split[0].substr(sisa).match(/\d{3}/gi);

            // tambahkan titik jika yang di input sudah menjadi uang ribuan
            if (ribuan) {
                separator = sisa ? '.' : '';
                uang += separator + ribuan.join('.');
            }

            uang = split[1] != undefined ? uang + ',' + split[1] : uang;
            return prefix == undefined ? uang : (uang ? 'Rp. ' + uang : '');
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>