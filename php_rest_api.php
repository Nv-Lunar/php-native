<?php


require_once "koneksi.php";

if(function_exists($_GET['function'])){
    $_GET['function']();
}

function get_karyawan()
{
    global $koneksi;
    $query = $koneksi->query("SELECT * FROM karyawan");
    while($row = mysqli_fetch_object($query))
    {
        $data[] = $row;
    }
    $response=array(
        "status" => 1,
        "messege" => "success",
        "data" => $data
    );
    header('Content-Type: application/json');
    echo json_encode($response);
}
function get_karyawan_id()
{
    global $koneksi;
    if(!empty($_GET['id'])){
        $id = $_GET['id'];
    }
    $query = $koneksi->query("SELECT * FROM karyawan WHERE id=$id");
    while($row = mysqli_fetch_object($query))
    {
        $data[] = $row;
    }
    $response=array(
        'status' => 1,
        'messege' => 'success',
        'data' => $data
    );
    header('Content-Type: application/json');
    echo json_encode($response);
}

function post_karyawan(){
    global $koneksi;
    $check = array('nama'=>'','jenis_kelamin'=>'','alamat'=>'');
    $check_match = count(array_intersect_key($_POST,$check));
    if($check_match == count($check)){
        // $id = $_POST['id'];
        $nama = $_POST['nama'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $alamat = $_POST['alamat'];
        // $result = mysqli_query($koneksi, "INSERT INTO karyawan SET
        // id = '$_POST[id]',
        // nama = '$_POST[nama]',
        // jenis_kelamin = '$_POST[jenis_kelamin]',
        // alamat = '$_POST[alamat]'
        // ");

        // $result = mysqli_query($koneksi, "INSERT INTO karyawan (id, nama, jenis_kelamin, alamat) VALUES (
        //     '$_POST[id]',
        //     '$_POST[nama]',
        //     '$_POST[jenis_kelamin]',
        //     '$_POST[alamat]'
        // )");
        
        $result = mysqli_query($koneksi, "INSERT INTO karyawan ( nama, jenis_kelamin, alamat) VALUES (
            
            '$nama',
            '$jenis_kelamin',
            '$alamat'
        )");

        $data[] = $result; 

        if($result){
            $response = array(
                'status' => 1,
                'messege' => 'sukses',
                'data' => $data
            );
        }else{
            $response = array(
                'status' => 0,
                'messege' => 'eror'
            );
        }
        header('Content-Type: application/json');
        echo json_encode($response);
    }
}

function update_karyawan()
{
    global $koneksi;
    if(!empty($_GET['id'])){
        $id = $_GET['id'];
    }

    $check = array('nama'=>'','jenis_kelamin'=>'','alamat'=>'');
    $check_match = count(array_intersect_key($_POST,$check));
    if($check_match == count($check)){
        // $id = $_POST['id'];
        $nama = $_POST['nama'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $alamat = $_POST['alamat'];

        $result = mysqli_query($koneksi, "UPDATE  karyawan SET           
            nama ='$nama',
            jenis_kelamin = '$jenis_kelamin',
            alamat = '$alamat'
            WHERE id = $id
        ");
    }

    if($result){
        $response = array(
            'status' => 1,
            'messege' => 'sukses',
            'data' => [
                'id' => $id,
                'nama' => $nama,
                'jenis_kelamin' => $jenis_kelamin,
                'alamat' => $alamat
            ]
        );
    }else{
        $response = array(
            'status' => 0,
            'messege' => 'eror',
            'data' => $id
        );
    }
    header('Content-Type: application/json');
        echo json_encode($response);

}

function delete_karyawan()
{
    global $koneksi;
    $id = $_POST['id'];
    $query = "DELETE FROM karyawan WHERE id = $id";
    if(mysqli_query($koneksi,$query)){
        $response=array(
            'status' => 1,
            'messege' => 'Delete Success'
        );
    }else{
        $response=array(
            'status' => 1,
            'messege' => 'Delete Faill'
        );
    }

    header('Content-Type: application/json');
    echo json_encode($response);
}

?>