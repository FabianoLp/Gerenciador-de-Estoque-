<?php 
ob_start();
session_start();
include('inc/header.php');
include 'Inventory.php';

$inventory = new Inventory();
$inventory->checkLogin();
?>
<script src="js/jquery.dataTables.min.js"></script>
<script src="js/dataTables.bootstrap.min.js"></script>
<link rel="stylesheet" href="css/dataTables.bootstrap.min.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<script src="js/common.js"></script>
<?php include('inc/container.php');?>
<div class="container">		
	<?php include("menus.php"); ?>   
	<div class="row">
		<div class="col-lg-12">
			<div class="card card-default rounded-0 shadow">
				<div class="card-header">
					<div class="row">
						<div class="col-lg-10 col-md-10 col-sm-8 col-xs-6">
							<h3 class="card-title">Inventário</h3>
						</div>						
					</div>
				</div>
				<div class="card-body">
					<div class="row"><div class="col-sm-12 table-responsive">
						<table id="inventoryDetails" class="table table-bordered table-striped">
							<thead><tr>
								<th>#</th>      
								<th>Produto/Código</th>      
								<th>Inventário Inicial</th> 
								<th>Inventário Recebido</th> 									
								<th>Inventário Enviado</th>
								<th>Estoque Disponível</th>								
							</tr>  </thead>
						</table>
					</div></div>
				</div>
			</div>
		</div>
	</div>
		
</div>	
<?php include('inc/footer.php');?>






