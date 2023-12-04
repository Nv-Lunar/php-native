<!-- ini scripnya api -->
<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'http://localhost:8080/api_server/php_rest_api.php?function=get_karyawan',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
));

$response = curl_exec($curl);
$response_data = json_decode($response); //$response_data = json_decode($json_data);

$user_data = $response_data->data;

curl_close($curl);
//echo $response;
?>
<HTML>
<head>
<!-- ini scripnya bootstrap css -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
    	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    	<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.bootstrap5.min.css">
    	<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    	<link rel="stylesheet" href="https://cdn.datatables.net/datetime/1.1.2/css/dataTables.dateTime.min.css">
</head>
<body>
<div class="container">
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
					foreach ($user_data as $user) {
					?>
					<tr>
                      <!-- <td><?php //echo $no++ ?></td> -->
                      <td><?php echo $user->id ?></td>
                      <td><?php echo $user->nama ?></td>
                      <td><?php echo $user->jenis_kelamin ?></td>
                      <td><?php echo $user->alamat ?></td>
                      <td>
                        <a href="edit.php?id=<?php echo $user->id ?>" class="btn btn-sm btn-primary">EDIT</a>
                        <a href="hapus.php?id=<?php echo $user->id ?>" class="btn btn-sm btn-danger">HAPUS</a>
                      </td>
                  </tr>
					<?php
					}
					?>
					</tbody>
				</table>
			</div>
</div>
</body>
</HTML>
<!-- ini scripnya bootstrap javascript -->
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.3.0/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.3.0/js/responsive.bootstrap5.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.2/moment.min.js"></script>
<script src="https://cdn.datatables.net/datetime/1.1.2/js/dataTables.dateTime.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$('#add_button').click(function(){
		$('#action').val('insert');
		$('#button_action').val('Insert');
		$('.modal-title').text('Add Data');
		$('#apicrudModal').modal('show');
	});
});

$(document).ready(function() {
      $('#myTable').DataTable( {
        responsive: {
            details: {
                display: $.fn.dataTable.Responsive.display.modal( {
                    header: function ( row ) {
                        var data = row.data();
                        return 'Details for '+data[0]+' '+data[1];
                    }
                } ),
                renderer: $.fn.dataTable.Responsive.renderer.tableAll( {
                    tableClass: 'table'
                } )
            }
        }
    } );
} );
</script>