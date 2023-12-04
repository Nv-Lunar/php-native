<?php ?>
<html>
	<head>
		<title>PHP Mysql REST API CRUD</title>
		
		<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
    	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    	<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.bootstrap5.min.css">
    	<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    	<link rel="stylesheet" href="https://cdn.datatables.net/datetime/1.1.2/css/dataTables.dateTime.min.css">
	</head>
	<body>
	<div class="container">
	<div class="list-group">
  <a href="#" class="list-group-item list-group-item-action active">
    API SERVER
  </a>
  <a href="#" class="list-group-item list-group-item-action">server 1</a>
  <a href="#" class="list-group-item list-group-item-action">server 2</a>
  <a href="#" class="list-group-item list-group-item-action">server 3</a>
  <a href="#" class="list-group-item list-group-item-action disabled">server 4</a>
	</div>
	
				<div class="table-responsive">
			<table id="myTable" class="table table-striped nowrap" style="width:100%" >
					<thead>
						<tr>
							<th>ID</th>
							<th>NAMA</th>
							<th>JENIS KELAMIN</th>
							<th>ALAMAT</th>
							<th>AKSI</th>
							
						</tr>
					</thead>
					<tbody>
					<?php
					//foreach ($user_data as $user) {
					?>
					<tr>
                      <!-- <td><?php //echo $no++ ?></td> -->
                      <td><?php //echo $user->id ?></td>
                      <td><?php //echo $user->nama ?></td>
                      <td><?php //echo $user->jenis_kelamin ?></td>
                      <td><?php //echo $user->alamat ?></td>
                      <td>
                        <a href="" class="btn btn-sm btn-primary">AKSI</a>
                      </td>
                  </tr>
					<?php
					//}
					?>
					</tbody>
				</table>
			</div>
			
	</div>
	</body>
</html>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.3.0/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.3.0/js/responsive.bootstrap5.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.2/moment.min.js"></script>
<script src="https://cdn.datatables.net/datetime/1.1.2/js/dataTables.dateTime.min.js"></script>

