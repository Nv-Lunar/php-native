<?php 

$id = $_GET['id'];
$api_url = 'http://localhost:8080/api_server/php_rest_api.php?function=get_karyawan_id&id='.$id;
$json_data = file_get_contents($api_url);
$response_data = json_decode($json_data);
$user_data = $response_data->data;
$user_data = array_slice($user_data, 0, 9);

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.bootstrap5.min.css">
    <title>EDIT JURNAL</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              EDIT
            </div>
            <div class="card-body">
              <form action="update.php" method="POST">
              <?php
              foreach ($user_data as $user) {
              ?>
              <div class="form-group">
			        	<label>ID</label>
			        	<input type="text" name="id" id="nama" class="form-control" value="<?php echo $user->id; ?>" />
			        </div>
              <div class="form-group">
			        	<label>NAMA</label>
			        	<input type="text" name="nama" id="nama" class="form-control" value="<?php echo $user->nama; ?>" />
			        </div>
					    <div class="form-group">
			        	<label>JENIS KELAMIN</label>
			        	<input type="text" name="jenis_kelamin" id="jenis_kelamin" class="form-control" value="<?php  echo $user->jenis_kelamin; ?>" />
			        </div>
			        <div class="form-group">
			        	<label>ALAMAT</label>
			        	<input type="text" name="alamat" id="alamat" class="form-control" value="<?php echo $user->alamat; ?>" />
			        </div>
                
                <button type="submit" class="btn btn-success">UPDATE</button>
                <button type="reset" class="btn btn-warning">RESET</button>
              <?php } ?>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.3.0/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.3.0/js/responsive.bootstrap5.min.js"></script>
  </body>
</html>