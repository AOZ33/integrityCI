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
    <style>

        

    @media print {

    @page {

        margin-top: 5px;
        margin-bottom: 5px;

    }

    hr {
border: 1px solid red;
}

    .navbar-nav,
    .navbar,
    .btn,
    .text,
    footer  {

        display: none;

    }

}

</style>

<div class="container-fluid">
    <div class="mb-3">
    <button onclick="window.print()" class="btn btn-primary"><i class="fa fa-print"></i> Print </button>
    </div>
        <div class="card shadow">
            <h1 class="h3 mt-3 text-gray-800 text-center">Form Technical Meeting</h1>
            <hr class="sidebar-divider d-none d-md-block">
            <div class="card-body">
                <form class="row" action="" method="post">
                    <div class="container">
                        <div class="row">
                            <div class="col-6">
                                <h6 >Nama CPW & CPP:</h6>
                                <p><?= $techmeet['name'] ?></p>
                                <h6>Tanggal Wedding: </h6>
                                <p>  <?php if($techmeet['date_w'] == '0000-00-00'){
                                            echo '-';
                                        }else {
                                            echo date("d/m/Y", strtotime($techmeet['date_w'])); 
                                        } 
                                         ?>
                                </p>
                                <h6>Jam Akad: </h6>
                                <p><?= $techmeet['w_akad'] ?></p>
                                <h6>Jam Resepsi:</h6>  
                                <p><?= $techmeet['w_resepsi'] ?></p>
                                <h6>Tempat Wedding:</h6>
                                <p><?= $techmeet['place_w'] ?></p>
                                <h6>Paket:</h6>
                                <p><?= $techmeet['package'] ?></p>
                            </div>
                            <div class="col-6">
                                <h5>Liputan Pengajian & Siraman</h5>
                                <hr class="sidebar-divider d-none d-md-block">
                                <h6 >Tanggal:</h6>
                                <p> <?php if($techmeet['date_s'] == '0000-00-00'){
                                            echo '-';
                                        }else {
                                            echo date("d/m/Y", strtotime($techmeet['date_s'])); 
                                        } 
                                         ?>
                                </p>
                                <h6>Tempat: </h6>
                                <p><?= $techmeet['place_m'] ?></p>
                                <h6>Jam : </h6>
                                <p><?= $techmeet['w_pengsir'] ?></p>
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
                                        <h6>Tim: <?= $techmeet['tim'] ?></h6> 
                                        <h6>Fotograper: <?= $techmeet['fotograper'] ?></h6> 
                                        <h6>Videograper: <?= $techmeet['videograper'] ?></h6>  
                                        <h6>Crew: <?= $techmeet['crew'] ?></h6> 
                                    </li>
                                    <li class="mb-2">
                                        Kebutuhan Listrik di Akad & Resepsi, NESNUMOTO membawa lampu Photo & Video yang berkapasitas 5000 watt
                                        </li>
                                    <li class="mb-2">
                                        Untuk Output Cetak Foto Pre Wedding, dibawakan oleh tim NESNUMOTO pada hari H, yakni:
                                        </li>
                                    <li class=" mb-2">
                                    <h6>Foto Pre Wedding Ukuran : <?= $techmeet['u_prewedd'] ?> Buah (Frame Blok) </h6>
                                    </li>
                                    <li class=" mb-2">
                                    <h6>Foto Pre Wedding Ukuran 4R Glossy : <?= $techmeet['u_prewedd4r'] ?> Buah (Frame) </h6>
                                    </li>
                                    <li class=" mb-2">
                                    <h6>Tv Plasma / Screen & Infocus : <?= $techmeet['item'] ?> </h6>
                                    </li>
                                    <li class="mb-2">
                                    <h6>Video Pre Wedding : <?= $techmeet['video'] ?> </h6>
                                    </li>
                                    <li class="mb-2">
                                        Untuk Preparation pada hari H, NESNUMOTO mengutamakan Preparation CPW, dan peliputan Preparation mulai di dokumentasikan oleh crew NESNUMOTO saat mencapai 70% make up berjalan (Tidak dari nol proses make up). Dan Preparation CPP, kita mulai di dokumentasikan perpin dahan baju Akad ke baju Resepsi (apabila CPP Preparation dalam satu lokasi/satu gedung dengan CPW maka kita akan meliput keduanya)
                                    </li>
                                    <li class="mb-2">
                                        Crew NESNUMOTO tidak meliput Preparation keberangkatan CPP menuju venue, kecuali CPP berangkat dalam satu lokasi (Crew NESNUMOTO meliput kedatangan CPP saat masuk area acara)
                                    </li>
                                    <li class="mb-2">
                                    <h6>Tempat Make Up:</h6>  
                                    <p><?= $techmeet['place_m'] ?></p>
                                    </li>
                                    <li >
                                    <h6>Jam Make Up:</h6>
                                    <p><?= $techmeet['w_makeup'] ?></p>                                                                          
                                    </li>
                                </ul>
                            </div>
                            <div class="col-6 ">
                                <h5>Detail Order</h5>
                                <hr class="sidebar-divider d-none d-md-block">
                                <h6>Box: </h6>
                                <p><?= $techmeet['Box'] ?></p>
                                <h6>Album Wedding Ukuran:</h6>  
                                <p><?= $techmeet['ukuran_a'] ?></p>
                                <h6>Foto Wedding Ukuran:</h6>
                                <p><?= $techmeet['ukuran_w'] ?></p>
                                <h6>Video Highlight:</h6>
                                <p><?= $techmeet['vid_h'] ?></p>
                                <h6>Video Wedding:</h6>
                                <p><?= $techmeet['vid_wedding'] ?></p>
                                <h6>Note:</h6>
                                <p><?= $techmeet['note'] ?></p>
                            </div>
                        </div>
                        <hr class="sidebar-divider d-none d-md-block">
                    </div>
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; <?= date('Y'); ?> Nesnumoto Integrity System 1.2 (Diprint otomatis Tanggal: <?= date("Y/m/d"); ?>)  </span>
                     </div>
                </form>
            </div>
        </div>

    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>