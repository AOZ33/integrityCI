<html>
<head>
  <style>
    body{margin-top:20px;
    color: #2e323c;
    background: #f5f6fa;
    position: relative;
    height: 100%;
}
.invoice-container {
    padding: 1rem;
}
.invoice-container .invoice-header .invoice-logo {
    margin: 0.8rem 0 0 0;
    display: inline-block;
    font-size: 1.6rem;
    font-weight: 700;
    color: #2e323c;
}
.invoice-container .invoice-header .invoice-logo img {
    max-width: 300px;
}
.invoice-container .invoice-header address {
    font-size: 0.8rem;
    color: #9fa8b9;
    margin: 0;
}
.invoice-container .invoice-details {
    margin: 1rem 0 0 0;
    padding: 1rem;
    line-height: 180%;
    background: #f5f6fa;
}
.invoice-container .invoice-details .invoice-num {
    text-align: right;
    font-size: 0.8rem;
}
.invoice-container .invoice-body {
    padding: 1rem 0 0 0;
}
.invoice-container .invoice-footer {
    text-align: center;
    font-size: 0.7rem;
    margin: 5px 0 0 0;
}

.invoice-status {
    text-align: center;
    padding: 1rem;
    background: #ffffff;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius: 4px;
    margin-bottom: 1rem;
}
.invoice-status h2.status {
    margin: 0 0 0.8rem 0;
}
.invoice-status h5.status-title {
    margin: 0 0 0.8rem 0;
    color: #9fa8b9;
}
.invoice-status p.status-type {
    margin: 0.5rem 0 0 0;
    padding: 0;
    line-height: 150%;
}
.invoice-status i {
    font-size: 1.5rem;
    margin: 0 0 1rem 0;
    display: inline-block;
    padding: 1rem;
    background: #f5f6fa;
    -webkit-border-radius: 50px;
    -moz-border-radius: 50px;
    border-radius: 50px;
}
.invoice-status .badge {
    text-transform: uppercase;
}

@media (max-width: 767px) {
    .invoice-container {
        padding: 1rem;
    }
}


.custom-table {
    border: 1px solid #1f160a;
}
.custom-table thead {
    background: #ffffff;
}
.custom-table thead th {
    border: 0;
    color: #000000;
}
.custom-table > tbody tr:hover {
    background: #fafafa;
}
.custom-table > tbody tr:nth-of-type(even) {
    background-color: #ffffff;
}
.custom-table > tbody td {
    border: 1px solid #1f160a;
}


.card {
    background: #ffffff;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
    border: 0;
    margin-bottom: 1rem;
}

.text-success {
    color: #00bb42 !important;
}

.text-muted {
    color: #9fa8b9 !important;
}

.custom-actions-btns {
    margin: auto;
    display: flex;
    justify-content: flex-end;
}

.custom-actions-btns .btn {
    margin: .3rem 0 .3rem .3rem;
}
    </style>
</head>
<body>
<div class="container">
<div class="row gutters">
		<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
			<div class="card">
				<div class="card-body p-0">
					<div class="invoice-container">
						<div class="invoice-header">
							<!-- Row start -->
							<div class="row gutters">
								<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
									<div class="custom-actions-btns mb-5">
									<button onclick="window.print()" class="btn btn-primary"><i class="fa fa-print"></i> Print </button>
									</div>
								</div>
							</div>
							<!-- Row end -->
							<!-- Row start -->
							<div class="row gutters">
								<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
									<a href="index.html" class="invoice-logo">
										<img src="<?= base_url('assets/'); ?>img/spk/spk-lamaran.png"/>
									</a>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6">
								</div>
							</div>
							<!-- Row end -->
						</div>
						<div class="invoice-body">
							<!-- Row start -->
							<div class="row gutters">
								<div class="col-lg-12 col-md-12 col-sm-12">
									<div class="table-responsive">
										<table class="table custom-table m-0">
											<tbody>
												<tr>
													<td>
														Nama CPP & CPW
													</td>
													<td><?= $lamaran['name'] ?></td>
												</tr>
												<tr>
													<td>
														Tanggal
													</td>
													<td><?= $lamaran['date_l'] ?></td>
												</tr>
												<tr>
													<td>
														Team
													</td>
													<td>Photographer: <?= $lamaran['photograper'] ?>,&emsp; Videographer: <?= $lamaran['videograper'] ?>,&emsp; Crew: <?= $lamaran['crew'] ?></td>
												</tr>
                        <tr>
													<td>
														Lokasi Event
													</td>
													<td><?= $lamaran['place_l'] ?></td>
												</tr>
                        <tr>
													<td>
														Jam Event
													</td>
													<td><?= $lamaran['w_lamaran'] ?></td>
												</tr>
                        <tr>
													<td>
														Contact Person
													</td>
													<td><?= $lamaran['phone'] ?></td>
												</tr>
                        <tr>
													<td>
														Catatan
													</td>
													<td><?= $lamaran['note'] ?></td>
												</tr>
											</tbody>
										</table>
</br>
                    <table class="table custom-table m-0">
                      <thead>
                      <tr align="center">
                          <th>Admin Jadwal</th>
													<th>Data Photo</th>
                          <th>Data Video</th>
                          <th>Admin Keuangan</th>
												</tr>
                        </thead>
                        <tbody>
                        <tr>
                          <th></br></br></th>
													<th></br></br></th>
                          <th></br></br></th>
                          <th></br></br></th>
												</tr>
                        </tbody>
                    </table>
									</div>
								</div>
							</div>
							<!-- Row end -->
						</div>
</br>
						<div class="invoice-footer">
            Copyright &copy; <?= date('Y'); ?> Nesnumoto Integrity System 1.2 (Diprint otomatis Tanggal: <?= date("Y/m/d"); ?> Jam: <?= date('h:i:sa'); ?>)
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

</body>

</html>