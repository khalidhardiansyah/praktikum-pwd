<!-- <?php
// require_once "koneksi.php";
//  // an array to display response
//  $response = array();
//  // on below line we are checking if the parameter send is id or not.
//  if(isset($_POST['nim'])){
//      // if the parameter send from the user id id then
//      // we will search the item for specific id.
//      $nim = $_POST['nim']; 
//         //on below line we are selecting the course detail with below id.
//      $stmt = $con->prepare("SELECT nama,nim,jkel,alamat,tglhr FROM mahasiswa WHERE nim = ?");
//      $stmt->bind_param("s",$nim);
//      $result = $stmt->execute();
//    // on below line we are checking if our
//    // table is having data with specific id.
//    if($result == TRUE){
//          // if we get the response then we are displaying it below.
//          $response['error'] = false;
//          $response['message'] = "Retrieval Successful!";
//          // on below line we are getting our result.
//          $stmt->store_result();
//          // on below line we are passing parameters which we want to get.
//          $stmt->bind_result($nama, $nim,  $jkel, $alamat, $tglhr);
//          // on below line we are fetching the data.
//          $stmt->fetch();
//          // after getting all data we are passing this data in our array.
//          $response['nim'] = $nim;
//          $response['nama'] = $nama;
//          $response['alamat'] = $alamat;
//          $response['jkel'] = $jkel;
//          $response['tglhr'] = $tglhr;
//      } else{
//          // if the id entered by user donot exist then
//          // we are displaying the error message
//          $response['error'] = true;
//          $response['message'] = "nim salah";
//      }
//  } else{
//       // if the user donot adds any paramter while making request
//       // then we are displaying the error as insufficient parameters.
//       $response['error'] = true;
//       $response['message'] = "Insufficient Parameters";
//  }
//  // at last we are printing
//  // all the data on below line.
//  echo json_encode($response);

require_once "koneksi.php";
$cari = $_POST['nim'];
$sql = "select * from mahasiswa where nim = '$cari'";
$query = mysqli_query($con,$sql);
while ($row = mysqli_fetch_assoc($query)) {
 $data[] = $row;
}
header('content-type: application/json');
echo json_encode($data);
 mysqli_close($con);
?>