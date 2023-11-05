<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Welcome to Calendar</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>
	<script>
		$(document).ready(function(){
			var calendar = $('#calendar').fullCalendar({
				editable:true,
				header:{
					left:'prev,next day',
					center:'title',
					right:'month,agendaWeek,agendaDay'
				},
				events:"<?php echo base_url();?>calendar/load_prewedding",
				selectable:true,
				selectHelper:true,
			});
		});
		console.log("<?php echo base_url();?>calendar/load")
	</script>
</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-dark bg-secondary  mb-3">
	  <div class="container-fluid mx-5">
		<h4 class="navbar-brand" href="#">Jadwal Prewedding</h4>
		<div class="collapse navbar-collapse justify-content-end" id="navbarNav">
		  <ul class="navbar-nav">
			<li class="nav-item">
			<?php 
				$url = isset($_SERVER['HTTP_REFERER']) ? htmlspecialchars($_SERVER['HTTP_REFERER']) : ''; 
			?>
				<a class="nav-link" href="<?=$url?>"> Back </a>
			</li>
		  </ul>
		</div>
	  </div>
	</nav>
<div class="container">
    <div class="row justify-content-center">
		<div class="col-8">
	<div class="body">
		<div id="calendar"></div>
	</div>
    </div>	
	</div>
</div>

<!-- Footer -->
<footer class="sticky-footer bg-white mt-3">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; NESNUMOTO <?= date('Y'); ?> </span>
        </div>
    </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>


</body>

</html>

