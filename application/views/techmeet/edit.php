<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->

    <!-- Optional JavaScript; choose one of the two! -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="<?= base_url('libs/'); ?>/jquery.js" charset="utf-8"></script>


    <div class="container-fluid">
        <?php if($this->session->flashdata('flash') ): ?>
        <div class="row mt-3">
            <div class="col">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Data</strong> <?= $this->session->flashdata('flash'); ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>  
            </div>
        </div>
        <?php endif;?>
        <h1 class="h3 mb-2 text-gray-800 text-center">Form Technical Meeting</h1>
        <div class="card shadow mb-4">
            <div class="card-body">
                <form class="row" action="<?= base_url('techmeet/edit') ?>" method="post">
                    <div class="container">
                        <div class="row">
                            <div class="col-6">
                                <label for="name" class="form-label">Nama CPW & CPP</label>
                                <input type="hidden" id="id" name="id" value="<?= $techmeet['id'] ?>">
                                <input type="text" name="name" class="form-control" id="name" value="<?= $techmeet['name'] ?>" Required>
                                <label for="date_w" class="form-label">Tanggal Wedding </label>
                                <input type="date" class="form-control" data-provide="datepicker" name="date_w" id="date_w" value="<?= $techmeet['date_w'] ?>">   
                                <label for="date_w" class="form-label">Jam Akad </label>
                                <input type="text" class="form-control" name="w_akad" id="w_akad" value="<?= $techmeet['w_akad'] ?>">   
                                <label for="date_w" class="form-label">Jam Resepsi</label>
                                <input type="text" class="form-control" name="w_resepsi" id="w_resepsi" value="<?= $techmeet['w_resepsi'] ?>">   
                                <label for="date_w" class="form-label">Tempat Wedding </label>
                                <textarea class="form-control" name="place_w" id="place_w" rows="1" ><?= $techmeet['place_w'] ?></textarea>
                                <label for="package" class="form-label">Paket</label>
                                <input type="text" name="package" class="form-control" id="package" value="<?= $techmeet['package'] ?>">
                            </div>
                            <div class="col-6">
                                <h5>Liputan Pengajian & Siraman</h5>
                                <hr class="sidebar-divider d-none d-md-block">
                                <label for="date_s" class="form-label">Tanggal</label>
                                <input type="date" class="form-control" data-provide="datepicker" name="date_s" id="date_s" value="<?= $techmeet['date_s'] ?>"> 
                                <label for="place_s" class="form-label">Tempat</label>
                                <textarea class="form-control" name="place_s" id="place_s" rows="1" ><?= $techmeet['place_s'] ?></textarea> 
                                <label for="w_pengsir" class="form-label">Jam</label>
                                <input type="text" class="form-control" name="w_pengsir" id="w_pengsir" value="<?= $techmeet['w_pengsir'] ?>" >
                                <ul >
                                    <li class="mb-2 mt-4">
                                        Crew NESNUMOTO yang meliput di Pengajian & Siraman, 2 Orang (1 Photographer & 1 Videographer)
                                    </li>
                                    <li class="mb-2">
                                        Kebutuhan Listrik di Pengajian & Siraman, NE SNUMOTO membawa lampu Video yang berkapasitas 2500 watt (Listrik rurah di Lost)
                                    </li>
                                    <li>
                                        Crew NESNUMOTO sudah ada di lokasi setengah jam sebelum acara
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <hr class="sidebar-divider d-none d-md-block">
                        <div class="row">
                            <div class="col-6 ">
                                <h5>Liputan Wedding</h5>
                                <hr class="sidebar-divider d-none d-md-block">
                                <ul>
                                    <li class="mb-2">
                                        Crew NESNUMOTO yang meliput di Akad & Resepsi berjumlah :
                                        <input type="text" class="form-control" name="tim" id="tim" placeholder="Jumlah Tim" value="<?= $techmeet['tim'] ?>">
                                        <input type="text" class="form-control" name="fotograper" id="fotograper" placeholder="Fotograper" value="<?= $techmeet['fotograper'] ?>">
                                        <input type="text" class="form-control" name="videograper" id="videograper" placeholder="Videograper" value="<?= $techmeet['videograper'] ?>">
                                        <input type="text" class="form-control" name="crew" id="crew" placeholder="Crew" value="<?= $techmeet['crew'] ?>">
                                    </li>
                                    <li class="mb-2">
                                        Kebutuhan Listrik di Akad & Resepsi, NESNUMOTO membawa lampu Photo & Video yang berkapasitas 5000 watt
                                        </li>
                                    <li class="mb-2">
                                        Untuk Output Cetak Foto Pre Wedding, dibawakan oleh tim NESNUMOTO pada hari H, yakni:
                                        </li>
                                    <li class=" mb-2">
                                        Foto Pre Wedding Ukuran :
                                        <div  class="input-group">
                                            <input type="text" name="u_prewedd" class="form-control" id="u_prewedd"  value="<?= $techmeet['u_prewedd'] ?>">
                                            <span class="input-group-text" id="basic-addon2">Buah (Frame Blok)</span>
                                        </div>
                                    </li>
                                    <li class=" mb-2">
                                        Foto Pre Wedding Ukuran 4R Glossy :
                                        <div  class="input-group">
                                            <input type="text" name="u_prewedd4r" class="form-control" id="u_prewedd4r" value="<?= $techmeet['u_prewedd4r'] ?>">
                                            <span class="input-group-text" id="basic-addon2">Buah (Frame)</span>
                                        </div>
                                    </li>
                                    <li class=" mb-2">
                                    Tv Plasma / Screen & Infocus :
                                    <input type="text" name="item" class="form-control" id="item" value="<?= $techmeet['item'] ?>">
                                    </li>
                                    <li class="mb-2">
                                    Video Pre Wedding :
                                    <input type="text" name="video" class="form-control" id="video" value="<?= $techmeet['video'] ?>">
                                    </li>
                                    <li class="mb-2">
                                        Untuk Preparation pada hari H, NESNUMOTO mengutamakan Preparation CPW, dan peliputan Preparation mulai di dokumentasikan oleh crew NESNUMOTO saat mencapai 70% make up berjalan (Tidak dari nol proses make up). Dan Preparation CPP, kita mulai di dokumentasikan perpin dahan baju Akad ke baju Resepsi (apabila CPP Preparation dalam satu lokasi/satu gedung dengan CPW maka kita akan meliput keduanya)
                                    </li>
                                    <li class="mb-2">
                                        Crew NESNUMOTO tidak meliput Preparation keberangkatan CPP menuju venue, kecuali CPP berangkat dalam satu lokasi (Crew NESNUMOTO meliput kedatangan CPP saat masuk area acara)
                                    </li>
                                    <li class="mb-2">
                                        Tempat Make Up
                                    <input type="text" name="place_m" class="form-control" id="place_m" value="<?= $techmeet['place_m'] ?>">
                                    </li>
                                    <li >
                                        Jam Make Up
                                    <input type="text" name="w_makeup" class="form-control" id="w_makeup" value="<?= $techmeet['w_makeup'] ?>">
                                    </li>
                                </ul>
                            </div>
                            <div class="col-6 ">
                                <h5>Detail Order</h5>
                                <hr class="sidebar-divider d-none d-md-block">
                                <label for="box" class="form-label">Box</label>
                                <input type="text" name="box" class="form-control" id="box" value="<?= $techmeet['box'] ?>">
                                <label for="name" class="form-label">Album Wedding Ukuran</label>
                                <input type="text" name="ukuran_a" class="form-control" id="ukuran_a" value="<?= $techmeet['ukuran_a'] ?>" >
                                <label for="name" class="form-label">Foto Wedding Ukuran</label>
                                <input type="text" name="ukuran_w" class="form-control" id="ukuran_w" value="<?= $techmeet['ukuran_w'] ?>" >
                                <label for="name" class="form-label">Video Highlight</label>
                                <input type="text" name="vid_h" class="form-control" id="vid_h" value="<?= $techmeet['vid_h'] ?>">                           
                                <label for="name" class="form-label">Video Wedding</label>
                                <input type="text" name="vid_wedding" class="form-control" id="vid_wedding" value="<?= $techmeet['vid_wedding'] ?>">                          
                                <label for="name" class="form-label">Note</label>
                                <textarea class="form-control" name="note" id="note" rows="5" ><?= $techmeet['note'] ?></textarea> 
                            </div>
                        </div>
                        <hr class="sidebar-divider d-none d-md-block">
                    </div>
                    <div class="mt-4">
                        <button type="submit" class="btn btn-primary">Ubah</button>
                        <?php 
                            $url = isset($_SERVER['HTTP_REFERER']) ? htmlspecialchars($_SERVER['HTTP_REFERER']) : ''; 
                                    ?>
                        <a class="btn btn-primary" href="<?=$url?>">Kembali</a>
                    </div>
                </form>
            </div>
        </div>

    </div>
    </div>


   
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>  