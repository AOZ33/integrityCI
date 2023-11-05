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
            <div class="col-md-6">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Data</strong> <?= $this->session->flashdata('flash'); ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>  
            </div>
        </div>
        <?php endif;?>
        <h1 class="h3 mb-2 text-gray-800 text-center">Form Order</h1>
        <div class="card shadow mb-4">
            <div class="card-body">
                <form class="row" action="<?= base_url('appointment/add') ?>" method="post">
                    <div class="col-6">
                        <div class="col-md-6 ">
                            <h5>Data Diri Client</h5>
                            <hr class="sidebar-divider d-none d-md-block">
                        </div>
                        <div class="col-md-6">
                            <label for="name" class="form-label">Nama CPW & CPP</label>
                            <input type="text" name="name" class="form-control" id="name" Required autofocus>
                        </div>
                        <div class="col-md-6">
                            <label for="name_a" class="form-label">Nama Album & Video</label>
                            <input type="text" name="name_a" class="form-control" id="name_a">
                        </div>
                        <div class="col-md-6 ">
                            <label for="address" class="form-label">Alamat</label>
                            <textarea class="form-control" name="address" id="address" rows="2"></textarea>
                        </div>
                        <div class="col-md-6">
                            <label for="phone" class="form-label">No. Tlp</label>
                            <input type="text" class="form-control" name="phone" id="phone">
                        </div>
                        <div class="col-md-6">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" class="form-control" name="email" id="email">
                        </div>
                        <div class="col-md-6">
                            <label for="instagram" class="form-label">Instagram</label>
                            <input type="text" name="instagram" class="form-control" id="instagram">
                        </div>
                        <div class="col-md-6">
                            <label for="package" class="form-label">Paket</label>
                            <input type="text" name="package" class="form-control" id="package">
                        </div>
                        <hr class="sidebar-divider d-none d-md-block">
                        <div class="col-md-6 ">
                            <h5>Detail Order</h5>
                            <hr class="sidebar-divider d-none d-md-block">
                        </div>
                        <div class="col-md-6 ">
                            <label for="photo_g" class="form-label">Photo Mini Gallery Prewed</label>
                            <input type="text" name="photo_g" class="form-control" id="photo_g" placeholder="Ukuran & Jumlah">
                        </div>
                        <div class="col-md-6 ">
                            <label for="name" class="form-label">Photo Pembesaran</label>
                            <input type="text" name="ukuran_p" class="form-control" id="ukuran_p" placeholder="Ukuran & Jumlah Prewedding">
                            <input type="text" name="ukuran_w" class="form-control" id="ukuran_w" placeholder="Ukuran & Jumlah Wedding">
                        </div>
                        <div class="col-md-6 ">
                            <label for="name" class="form-label">Lainya</label>
                            <input type="text" name="tambahan" class="form-control" id="tambahan" placeholder="Tambahan">
                        </div>
                        <div class="col-md-6 ">
                            <label for="name" class="form-label">Box</label>
                            <input type="text" name="box" class="form-control" id="box" placeholder="box">
                        </div>
                        <div class="col-md-6 ">
                            <label for="name" class="form-label">Album</label>
                            <input type="text" name="u20x30" class="form-control" id="u20x30" placeholder="20x30cm">
                            <input type="text" name="u25x30" class="form-control" id="u25x30" placeholder="25x30cm">
                            <input type="text" name="u30x30" class="form-control" id="u30x30" placeholder="30x30cm">
                        </div>
                        <div class="col-md-6 ">
                            <label for="name" class="form-label">Wedding Book</label>
                            <input type="text" name="wedding_book" class="form-control" id="wedding_book" placeholder="Note">
                        </div>
                        <div class="col-md-6 ">
                            <label for="name" class="form-label">Video</label>
                            <input type="text" name="video" class="form-control" id="video" placeholder="Note">
                        </div>
                        <div class="col-md-6 ">
                            <label for="name" class="form-label">Lainya</label>
                            <input type="text" name="lainnya" class="form-control" id="lainnya" placeholder="Tambahan">
                        </div>
                        <hr class="sidebar-divider d-none d-md-block">
                    </div>
                    <div class="col-6 ">
                        <div class="col-md-6  ">
                            <h5>Detail Acara </h5>
                            <hr class="sidebar-divider d-none d-md-block">
                        </div>
                        <div class="dropdown col-md-6 ">
                            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Daftar Acara
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <input type="hidden" name="description[]" alt="Checkbox" value="" >  
                                <a class="dropdown-item" href="#"><input type="checkbox" name="description[]" alt="Checkbox" value=" Lmn"> Lamaran</a>
                                <a class="dropdown-item" href="#"><input type="checkbox" name="description[]" alt="Checkbox" value=" Pwd"> Prewedding</a>
                                <a class="dropdown-item" href="#"><input type="checkbox" name="description[]" alt="Checkbox" value=" P & S"> Pegajian & Siraman</a>
                                <a class="dropdown-item" href="#"><input type="checkbox" name="description[]" alt="Checkbox" value=" A & R"> Akad & Resepsi</a>
                                <a class="dropdown-item" href="#"><input type="checkbox" name="description[]" alt="Checkbox" value=" Live"> Live Streaming</a>
                            </div>
                        </div>
                        <div class="col-md-6 form-group ">
                            <label for="date" class="form-label">Lamaran</label>
                            <input type="date" class="form-control" data-provide="datepicker" name="date_l" id="date_l">
                            <input type="text" class="form-control" name="w_lamaran" id="w_lamaran" placeholder="Jam">
                            <textarea class="form-control" name="place_l" id="place_l" rows="1" placeholder="Tempat"></textarea>
                            <textarea class="form-control" name="more" id="more" rows="2" placeholder="Note"></textarea>
                        </div>
                        <div class="col-md-6 form-group ">
                            <label for="date" class="form-label">Prewedding</label>
                            <input type="date" class="form-control" data-provide="datepicker" name="date_p" id="date_p">
                            <input type="text" class="form-control" name="w_prewed" id="w_prewed" placeholder="Jam ">
                            <textarea class="form-control" name="place_p" id="place_p" rows="1" placeholder="Tempat"></textarea>
                            <textarea class="form-control" name="more_p" id="more_p" rows="2" placeholder="Note"></textarea>
                        </div>
                        <div class="col-md-6 form-group ">
                            <label for="date_w" class="form-label">Pengajian & Siraman </label>
                            <input type="date" class="form-control" data-provide="datepicker" name="date_m" id="date_m">
                            <input type="text" class="form-control" name="w_siram" id="w_siram" placeholder="Jam ">
                            <textarea class="form-control" name="place_m" id="place_m" rows="1" placeholder="Tempat"></textarea>
                            <textarea class="form-control" name="more_m" id="more_m" rows="2" placeholder="Note"></textarea>
                        </div>
                        <div class="col-md-6 form-group ">
                            <label for="date_w" class="form-label">Akad & Resepsi </label>
                            <input type="date" class="form-control" data-provide="datepicker" name="date_w" id="date_w">
                            <input type="text" class="form-control" name="w_akad" id="w_akad" placeholder="Jam Mulai">
                            <input type="text" class="form-control" name="w_resepsi" id="w_resepsi" placeholder="Jam Selesai">
                            <textarea class="form-control" name="place_w" id="place_w" rows="1" placeholder="Tempat"></textarea>
                            <textarea class="form-control" name="more_w" id="more_w" rows="2" placeholder="Note"></textarea>
                        </div>
                        <div class="col-md-6 form-group ">
                            <label for="date_w" class="form-label">Live Stream </label>
                            <input type="date" class="form-control" data-provide="datepicker" name="date_s" id="date_s">
                            <input type="text" class="form-control" name="w_live" id="w_live" placeholder="Jam ">
                            <textarea class="form-control" name="place_s" id="place_s" rows="1" placeholder="Tempat"></textarea>
                            <textarea class="form-control" name="more_s" id="more_s" rows="2" placeholder="Note"></textarea>
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="place_w" class="form-label">Acara Lain</label>
                            <textarea class="form-control" name="n_acara" id="n_acara" rows="1" placeholder="Nama Acara"></textarea>
                            <input type="date" class="form-control" data-provide="datepicker" name="date_a" id="date_a">
                            <input type="text" class="form-control" name="w_lain" id="w_lain" placeholder="Jam Acara">
                            <textarea class="form-control" name="place_a" id="place_a" rows="1" placeholder="Tempat"></textarea>
                            <textarea class="form-control" name="more_a" id="more_a" rows="2" placeholder="Note"></textarea>
                        </div>
                        <hr class="sidebar-divider d-none d-md-block">
                    </div>
                    <div class="col-md-6">
                        <label for="price" class="form-label">Total Order</label>
                        <input type="text" class="form-control" name="price" id="price">
                    </div>
                    <div class="col-md-6">
                        <label for="price" class="form-label">DP/Bookingday (20% Dari Total)</label>
                        <input type="text" class="form-control" name="dp" id="dp">
                        <input type="date" class="form-control" data-provide="datepicker" name="date_dp" id="date_dp">
                    </div>
                    <div class="col-md-6">
                        <label for="price" class="form-label">Pembayaran II (H-5 Prewedding 50%)</label>
                        <input type="text" class="form-control" name="nilai" id="nilai">
                        <input type="date" class="form-control" data-provide="datepicker" name="date_n" id="date_n">
                    </div>
                    <div class="col-md-6">
                        <label for="price" class="form-label">Pelunasan (H-5 Wedding 30%)</label>
                        <input type="text" class="form-control" name="uang" id="uang">
                        <input type="date" class="form-control" data-provide="datepicker" name="date_u" id="date_u">
                    </div>
                    <div class="mt-4">
                        <button type="submit" class="btn btn-primary">Tambah Data </button>
 			<?php 
                            $url = isset($_SERVER['HTTP_REFERER']) ? htmlspecialchars($_SERVER['HTTP_REFERER']) : ''; 
                                    ?>
                        <a class="btn btn-primary" href="<?=$url?>"> Back </a>
                    </div>
                </form>
            </div>
        </div>

    </div>
    </div>


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