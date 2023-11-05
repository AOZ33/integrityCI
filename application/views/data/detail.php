<div class="modal-dialog" style="max-width: 95%;" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h4>ORDER FORM</h4>
            <button onclick="window.print()" class="btn btn-primary"><i class="fa fa-print"></i> Print </button>
            </div>
        <table class="table">
        <thead>
    <tr>
    <td scope="col"><b>Nama CPP & CPW</b></td>
      <td><?= $appointment['name'] ?></td>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td scope="col"><b>Nama Album</b></td>
      <td><?= $appointment['name_a']?></td>
    </tr>
    <tr>
        <td scope="col"><b>Alamat</b></td>
        <td><?= $appointment['address'] ?></td>
    </tr>
    <tr>
        <td scope="col"><b>No. Tlp</b></td>
        <td><?= $appointment['phone'] ?></td>
    </tr>
    <tr>
        <td scope="col"><b>Email</b></td>
        <td><?= $appointment['email'] ?></td>
    </tr>
    <tr>
        <td scope="col"><b>Instagram</b></td>
        <td><?= $appointment['instagram'] ?></td>
    </tr>
    <tr>
        <td scope="col"><b>Paket</b></td>
        <td><?= $appointment['package'] ?></td>
    </tr>
    <tr>
        <td scope="col"><b>Lamaran</b></td>
        <td>Tanggal&emsp;:&emsp;
                                        <?php if($appointment['date_l'] == '0000-00-00'){
                                            echo '-';
                                        }else {
                                            echo date("d/m/Y", strtotime($appointment['date_l'])); 
                                        } 
                                         ?>  &emsp;|&emsp; Jam&emsp;&emsp;:&emsp;<?= $appointment['w_lamaran'] ?> &emsp;|&emsp; Tempat&emsp;:&emsp;<?= $appointment['place_l'] ?> &emsp;|&emsp; Note&emsp;:&emsp;<?= $appointment['more'] ?>

                                       </td>
                                        
    </tr>
    <tr>
        <td scope="col"><b>Prewedding</b></td>
        <td>Tanggal&emsp;:&emsp;
                                        <?php if($appointment['date_p'] == '0000-00-00'){
                                            echo '-';
                                        }else {
                                            echo date("d/m/Y", strtotime($appointment['date_p']));
                                        } 
                                         ?>  &emsp;|&emsp; Jam&emsp;&emsp;:&emsp;<?= $appointment['w_prewed'] ?> &emsp;|&emsp; Tempat&emsp;:&emsp;<?= $appointment['place_p'] ?> &emsp;|&emsp; Note&emsp;:&emsp;<?= $appointment['more_p'] ?>
                                        </td>
    </tr>
    <tr>
        <td scope="col"><b>Pengajian & Siraman</b></td>
        <td>Tanggal&emsp;:&emsp;
                                        <?php if($appointment['date_m'] == '0000-00-00'){
                                            echo '-';
                                        }else {
                                            echo date("d/m/Y", strtotime($appointment['date_m']));
                                        } 
                                         ?>  &emsp;|&emsp;  Jam&emsp;&emsp;:&emsp;<?= $appointment['w_siram'] ?> &emsp;|&emsp; Tempat&emsp;:&emsp;<?= $appointment['place_m'] ?> &emsp;|&emsp; Note&emsp;:&emsp;<?= $appointment['more_m'] ?>
                                        </td>
    </tr>
    <tr>
        <td scope="col"><b>Akad & Resepsi</b></td>
        <td>Tanggal&emsp;:&emsp;
                                        <?php if($appointment['date_w'] == '0000-00-00'){
                                            echo '-';
                                        }else {
                                            echo date("d/m/Y", strtotime($appointment['date_w']));
                                        } 
                                         ?>    &emsp;|&emsp; Akad&emsp;&emsp;:&emsp;<?= $appointment['w_akad'] ?> &emsp;|&emsp; Resepsi&emsp;&emsp;:&emsp;<?= $appointment['w_resepsi'] ?> &emsp;|&emsp; Tempat&emsp;:&emsp;<?= $appointment['place_w'] ?> &emsp;|&emsp; Note&emsp;:&emsp;<?= $appointment['more_w'] ?>
                                       </td>
    </tr>
    <tr>
        <td scope="col"><b>Live Streaming</b></td>
        <<td>Tanggal&emsp;:&emsp;
                                        <?php if($appointment['date_s'] == '0000-00-00'){
                                            echo '-';
                                        }else {
                                            echo date("d/m/Y", strtotime($appointment['date_s']));
                                        } 
                                         ?>    &emsp;|&emsp; Jam&emsp;&emsp;:&emsp;<?= $appointment['w_live'] ?> &emsp;|&emsp; Tempat&emsp;:&emsp;<?= $appointment['place_s'] ?> &emsp;|&emsp; Note&emsp;:&emsp;<?= $appointment['more_s'] ?>
                                       </td>
    </tr>
 <tr>
        <td scope="col"><b>Acara Lain</b></td>
        <<td>Nama Acara&emsp;:&emsp;<?= $appointment['n_acara'] ?> &emsp;|&emsp; Tanggal&emsp;:&emsp;
                                        <?php if($appointment['date_a'] == '0000-00-00'){
                                            echo '-';
                                        }else {
                                            echo date("d/m/Y", strtotime($appointment['date_a']));
                                        } 
                                         ?>    &emsp;|&emsp; Jam&emsp;&emsp;:&emsp;<?= $appointment['w_lain'] ?> &emsp;|&emsp; Tempat&emsp;:&emsp;<?= $appointment['place_a'] ?> &emsp;|&emsp; Note&emsp;:&emsp;<?= $appointment['more_a'] ?>
                                       </td>
    </tr>

    <tr>
        <td scope="col"><b>DETAIL ORDER</b></td>
    </tr>
    <tr>
        <td scope="col"><b>Photo Mini Gallery Prewed</b></td>
        <td><?= $appointment['photo_g'] ?></td>
    </tr>
    <tr>
        <td scope="col"><b>Photo Pembesaran</b></td>
        <td>Prewedd&emsp;:&emsp; <?= $appointment['ukuran_p'] ?>&emsp;&emsp;|&emsp;&emsp;Wedding&emsp;:&emsp; <?= $appointment['ukuran_w'] ?></td>
    </tr>
    <tr>
        <td scope="col"><b>Lainnya</b></td>
        <td><?= $appointment['tambahan'] ?></td>
    </tr>
    <tr>
        <td scope="col"><b>Box</b></td>
        <td><?= $appointment['box'] ?></td>
    </tr>
    <tr>
        <td scope="col"><b>Album Ukuran</b></td>
        <td>20x30&emsp;:&emsp; <?= $appointment['u20x30'] ?> &emsp;|&emsp;25x30&emsp;:&emsp; <?= $appointment['u25x30'] ?>&emsp;|&emsp;30x30&emsp;:&emsp; <?= $appointment['u30x30'] ?></td>
    </tr>
    <tr>
        <td scope="col"><b>Wedding Box</b></td>
        <td><?= $appointment['wedding_book'] ?></td>
    </tr>
    <tr>
        <td scope="col"><b>Video</b></td>
        <td><?= $appointment['video'] ?></td>
    </tr>
    <tr>
        <td scope="col"><b>Lainnya</b></td>
    <td><?= $appointment['lainnya'] ?></td>
    </tr>
    <tr>
        <td scope="col"><b>Total Order</b></td>
        <td><?= $appointment['price'] ?></td>
    </tr>
    <tr>
        <td scope="col"><b>DP/Bookingday</b></td>
        <td><?= $appointment['dp'] ?>&emsp; <?php if($appointment['date_dp'] == '0000-00-00'){
                                            echo "" ;
                                        }else {
                                            echo date("d/m/Y", strtotime($appointment['date_dp']));
                                        } 
                                         ?>(20% dari Total)</td>
    </tr>
    <tr>
        <td scope="col"><b>Pembayaran II</b></td>
        <td><?= $appointment['nilai'] ?>&emsp; <?php if($appointment['date_n'] == '0000-00-00'){
                                            echo "" ;
                                        }else {
                                            echo date("d/m/Y", strtotime($appointment['date_n']));
                                        } 
                                         ?>(H-5 Prewedding 50%)</td>
    </tr>
    <tr>
        <td scope="col"><b>Pelunasan</b></td>
        <td><?= $appointment['uang'] ?>&emsp; <?php if($appointment['date_u'] == '0000-00-00'){
                                            echo "" ;
                                        }else {
                                            echo date("d/m/Y", strtotime($appointment['date_u']));
                                        } 
                                         ?>(H-5 Wedding 30%)</td>
    </tr>

  </tbody>
</table>
</div>
</div>

<div class="container mt-4">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; <?= date('Y'); ?> Nesnumoto Integrity System 1.2 (Diprint otomatis Tanggal: <?= date("Y/m/d"); ?> Jam: <?= date('h:i:sa'); ?>)  </span>
        </div>