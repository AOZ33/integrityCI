
            <div class="modal-dialog " style="max-width: 95%;" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">View Data</h4>
                        <button onclick="window.print()"class=" btn btn-primary" href="<?php echo base_url('appointment/print') ?>"><i class="fa fa-print"></i> Print</button>

                    </div>
                    <form class="form-horizontal" action="" method="post" enctype="multipart/form-data" role="form">
                        <div class="modal-body row">
                            <div class="col-6" id="frm-field">
                                <div class="form-group">
                                    <div class="col-md-6 ">
                                        <h5>Data Diri Client</h5>
                                        <hr class="sidebar-divider d-none d-md-block">
                                    </div>
                                    <label class="form-group">Nama CWP & CPP</label>
                                    <div class="mb-1">
                                        <td><?= $appointment['name'] ?>
                                            <hr class="sidebar-divider d-none d-md-block">
                                        </td>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-group">Nama Album</label>
                                    <div class="mb-1">
                                        <td><?= $appointment['name_a'] ?>
                                            <hr class="sidebar-divider d-none d-md-block">
                                        </td>
                                    </div>
                                </div>
                                <div class="form-group  ">
                                    <label class="form-group">Alamat</label>
                                    <div class="mb-1">
                                        <td><?= $appointment['address'] ?></td>
                                        <hr class="sidebar-divider d-none d-md-block">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-group">No. Tlp</label>
                                    <div class="mb-1">
                                        <td><?= $appointment['phone'] ?></td>
                                        <hr class="sidebar-divider d-none d-md-block">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-group">Email</label>
                                    <div class="mb-1">
                                        <td><?= $appointment['email'] ?></td>
                                        <hr class="sidebar-divider d-none d-md-block">
                                    </div>
                                </div>
                                <div class="form-group  ">
                                    <label class="form-group">Instagram</label>
                                    <div class="mb-1">
                                        <td><?= $appointment['instagram'] ?></td>
                                        <hr class="sidebar-divider d-none d-md-block">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-group">Package</label>
                                    <div class="mb-1">
                                        <td><?= $appointment['package'] ?>
                                            <hr class="sidebar-divider d-none d-md-block">
                                        </td>
                                    </div>
                                </div>
                                <div class="col-md-6 ">
                                    <h5>Detail Order</h5>
                                    <hr class="sidebar-divider d-none d-md-block">
                                </div>
                                <div class="form-group ">
                                    <label for="photo_g" class="form-label">Photo Mini Gallery Prewed</label>
                                    <div class="mb-1">
                                        <td><?= $appointment['photo_g'] ?></td>
                                    </div>
                                    <hr class="sidebar-divider d-none d-md-block">
                                </div>
                                <div class="form-group  ">
                                    <label for="name" class="form-label">Photo Pembesaran</label>
                                    <div class="mb-1">
                                        <td>Prewedd&emsp;:&emsp; <?= $appointment['ukuran_p'] ?></td>
                                    </div>
                                    <div class="mb-1">
                                        <td>Wedding&emsp;:&emsp; <?= $appointment['ukuran_w'] ?></td>
                                    </div>
                                    <hr class="sidebar-divider d-none d-md-block">
                                </div>
                                <div class="form-group ">
                                    <label for="name" class="form-label">Lainnya</label>
                                    <div class="mb-1">
                                        <td><?= $appointment['tambahan'] ?></td>
                                    </div>
                                    <hr class="sidebar-divider d-none d-md-block">
                                </div>
                                <div class="form-group ">
                                    <label for="name" class="form-label">Box</label>
                                    <div class="mb-1">
                                        <td><?= $appointment['box'] ?></td>
                                    </div>
                                    <hr class="sidebar-divider d-none d-md-block">
                                </div>
                                <div class="form-group  ">
                                    <label for="name" class="form-label">Album</label>
                                    <div class="mb-1">
                                        <td>20x30&emsp;:&emsp; <?= $appointment['u20x30'] ?></td>
                                    </div>
                                    <div class="mb-1">
                                        <td>25x30&emsp;:&emsp; <?= $appointment['u25x30'] ?></td>
                                    </div>
                                    <div class="mb-1">
                                        <td>30x30&emsp;:&emsp; <?= $appointment['u30x30'] ?></td>
                                    </div>
                                    <hr class="sidebar-divider d-none d-md-block">
                                </div>
                                <div class="form-group  ">
                                    <label for="name" class="form-label">Wedding Book</label>
                                    <div class="mb-1">
                                        <td><?= $appointment['wedding_book'] ?></td>
                                    </div>
                                    <hr class="sidebar-divider d-none d-md-block">
                                </div>
                                <div class="form-group  ">
                                    <label for="name" class="form-label">Video</label>
                                    <div class="mb-1">
                                        <td><?= $appointment['videok'] ?></td>
                                    </div>
                                    <hr class="sidebar-divider d-none d-md-block">
                                </div>
                                <div class="form-group  ">
                                    <label for="name" class="form-label">Lainnya</label>
                                    <div class="mb-1">
                                        <td><?= $appointment['lainnya'] ?></td>
                                    </div>
                                    <hr class="sidebar-divider d-none d-md-block">
                                </div>
                            </div>
                            <div class="col-6" id="frm-field">
                                <div class="col-md-6 ">
                                    <h5>Detail Acara</h5>
                                    <hr class="sidebar-divider d-none d-md-block">
                                </div>
                                <div class="form-group  ">
                                    <label class="form-group">Daftar Acara:</label>
                                    <div class="mb-1">
                                        <td><?= $appointment['n_acara'] ?><?= $appointment['description'] ?></td>
                                    </div>
                                    <hr class="sidebar-divider d-none d-md-block">
                                </div>
                                <div class="form-group">
                                    <label class="form-group">Lamaran</label>
                                    <div class="mb-1">
                                        <td>Tanggal&emsp;:&emsp;
                                        <?php if($appointment['date_l'] == '0000-00-00'){
                                            echo '-';
                                        }else {
                                            echo date("d/m/Y", strtotime($appointment['date_l'])); 
                                        } 
                                         ?>    
                                       </td>
                                    </div>
                                    <div class="mb-1">
                                        <td>Jam&emsp;&emsp;:&emsp;<?= $appointment['w_lamaran'] ?></td>
                                    </div>
                                    <div class="mb-1">
                                        <td>Tempat&emsp;:&emsp;<?= $appointment['place_l'] ?></td>
                                    </div>
                                    <div class="mb-1">
                                        <td>Note&emsp;:&emsp;<?= $appointment['more'] ?></td>
                                        <hr class="sidebar-divider d-none d-md-block">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-group">Prewedding</label>
                                    <div class="mb-1">
                                        <td>Tanggal&emsp;:&emsp;
                                        <?php if($appointment['date_p'] == '0000-00-00'){
                                            echo '-';
                                        }else {
                                            echo date("d/m/Y", strtotime($appointment['date_p']));
                                        } 
                                         ?> 
                                        </td>
                                    </div>
                                    <div class="mb-1">
                                        <td>Jam&emsp;&emsp;:&emsp;<?= $appointment['w_prewed'] ?></td>
                                    </div>
                                    <div class="mb-1">
                                        <td>Tempat&emsp;:&emsp;<?= $appointment['place_p'] ?></td>
                                    </div>
                                    <div class="mb-1">
                                        <td>Note&emsp;:&emsp;<?= $appointment['more_p'] ?></td>
                                        <hr class="sidebar-divider d-none d-md-block">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-group">Akad & Resepsi</label>
                                    <div class="mb-1">
                                        <td>Tanggal&emsp;:&emsp;
                                        <?php if($appointment['date_w'] == '0000-00-00'){
                                            echo '-';
                                        }else {
                                            echo date("d/m/Y", strtotime($appointment['date_w']));
                                        } 
                                         ?>    
                                       </td>
                                    </div>
                                    <div class="mb-1">
                                        <td>Akad&emsp;&emsp;:&emsp;<?= $appointment['w_akad'] ?></td>
                                    </div>
                                    <div class="mb-1">
                                        <td>Resepsi&emsp;&emsp;:&emsp;<?= $appointment['w_resepsi'] ?></td>
                                    </div>
                                    <div class="mb-1">
                                        <td>Tempat&emsp;:&emsp;<?= $appointment['place_w'] ?></td>
                                    </div>
                                    <div class="mb-1">
                                        <td>Note&emsp;:&emsp;<?= $appointment['more_w'] ?></td>
                                        <hr class="sidebar-divider d-none d-md-block">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-group">Pengajian & Siraman</label>
                                    <div class="mb-1">
                                        <td>Tanggal&emsp;:&emsp;
                                        <?php if($appointment['date_m'] == '0000-00-00'){
                                            echo '-';
                                        }else {
                                            echo date("d/m/Y", strtotime($appointment['date_m']));
                                        } 
                                         ?>    
                                        </td>
                                    </div>
                                    <div class="mb-1">
                                        <td>Jam&emsp;&emsp;:&emsp;<?= $appointment['w_siram'] ?></td>
                                    </div>
                                    <div class="mb-1">
                                        <td>Tempat&emsp;:&emsp;<?= $appointment['place_m'] ?></td>
                                    </div>
                                    <div class="mb-1">
                                        <td>Note&emsp;:&emsp;<?= $appointment['more_m'] ?></td>
                                        <hr class="sidebar-divider d-none d-md-block">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-group">Live Stream</label>
                                    <div class="mb-1">
                                        <td>Tanggal&emsp;:&emsp;
                                        <?php if($appointment['date_s'] == '0000-00-00'){
                                            echo '-';
                                        }else {
                                            echo date("d/m/Y", strtotime($appointment['date_s']));
                                        } 
                                         ?>    
                                       </td>
                                    </div>
                                    <div class="mb-1">
                                        <td>Jam&emsp;&emsp;:&emsp;<?= $appointment['w_live'] ?></td>
                                    </div>
                                    <div class="mb-1">
                                        <td>Tempat&emsp;:&emsp;<?= $appointment['place_s'] ?></td>
                                    </div>
                                    <div class="mb-1">
                                        <td>Note&emsp;:&emsp;<?= $appointment['more_s'] ?></td>
                                        <hr class="sidebar-divider d-none d-md-block">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-group">Acara</label>
                                    <div class="mb-1">
                                        <td>Nama Acara&emsp;:&emsp;<?= $appointment['n_acara'] ?></td>
                                    </div>
                                    <div class="mb-1">
                                        <td>Tanggal&emsp;:&emsp;
                                        <?php if($appointment['date_a'] == '0000-00-00'){
                                            echo '-';
                                        }else {
                                            echo date("d/m/Y", strtotime($appointment['date_a']));
                                        } 
                                         ?>    
                                        </td>
                                    </div>
                                    <div class="mb-1">
                                        <td>Jam&emsp;&emsp;:&emsp;<?= $appointment['w_lain'] ?></td>
                                    </div>
                                    <div class="mb-1">
                                        <td>Tempat&emsp;:&emsp;<?= $appointment['place_a'] ?></td>

                                    </div>
                                    <div class="mb-1">
                                        <td>Note&emsp;:&emsp;<?= $appointment['more_a'] ?></td>
                                        <hr class="sidebar-divider d-none d-md-block">
                                    </div>
                                </div>
                            </div>
                            <div class="col-6" id="frm-field">
                                <div class="form-group">
                                    <label class="form-group">Total Order</label>
                                    <div class="mb-1">
                                        <td><?= $appointment['price'] ?></td>
                                    </div>
                                    <hr class="sidebar-divider d-none d-md-block">
                                </div>
                                <div class="form-group">
                                    <label class="form-group">DP/Bookingday (20% Dari Total)</label>
                                    <div class="mb-1">
                                        <td><?= $appointment['dp'] ?></td>
                                    </div>
                                    <div class="mb-1">
                                        <td></td>
                                    </div>
                                    <hr class="sidebar-divider d-none d-md-block">
                                </div>
                            </div>
                            <div class="col-6" id="frm-field">
                                <div class="form-group">
                                    <label class="form-group">Pembayaran II (H-5 Prewedding 50%)</label>
                                    <div class="mb-1">
                                        <td><?= $appointment['nilai'] ?></td>
                                    </div>
                                    <div class="mb-1">
                                        <td><?= $appointment['date_n'] ?></td>
                                    </div>
                                    <hr class="sidebar-divider d-none d-md-block">
                                </div>
                                <div class="form-group">
                                    <label class="form-group">Pelunasan (H-5 Wedding 30%)</label>
                                    <div class="mb-1">
                                        <td><?= $appointment['uang'] ?></td>
                                    </div>
                                    <div class="mb-1">
                                        <td><?= $appointment['date_u'] ?></td>
                                    </div>
                                    <hr class="sidebar-divider d-none d-md-block">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
        </div>
        </div>