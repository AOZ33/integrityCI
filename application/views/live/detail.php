<div class="modal-dialog" style="max-width: 95%;" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h4>ORDER FORM</h4>
            <span> No. Invoice: &emsp;&emsp;&emsp;&emsp;&emsp;</span>
            <button onclick="window.print()" class="btn btn-primary"><i class="fa fa-print"></i> Print </button>
        </div>

        <table class="table">
        <thead>
    <tr>
    <td scope="col"><b>Nama CPP & CPW</b></td>
      <td><?= $live['name'] ?></td>
    </tr>
  </thead>
  <tbody>
    <tr>
        <td scope="col"><b>Lokasi</b></td>
        <td><?= $live['place_s'] ?></td>
    </tr>
    <tr>
        <td scope="col"><b>Tim</b></td>
        <td><?= $live['photograper'] ?>,<?= $live['videograper'] ?>,<?= $live['crew'] ?></td>
    </tr>
    <tr>
        <td>Jam&emsp;:&emsp;
            Mulai:
        <?= $live['w_live'] ?>
        </td>
                                        
    </tr>
  </tbody>
</table>
</div>

<div class="container mt-4">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; <?= date('Y'); ?> Nesnumoto Integrity System 1.2 (Diprint otomatis Tanggal: <?= date("Y/m/d"); ?> Jam: <?= date('h:i:sa'); ?>)  </span>
        </div>