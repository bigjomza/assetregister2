<?php
/* Database connection start */
$servername = "nopadol.net:3306";
$username = "root";
$password = "[ibdkifu88";
$dbname = "assets";

$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: ".mysqli_connect_error());
mysqli_set_charset($conn,"utf8"); 
/* Database connection end */
// storing  request (ie, get/post) global array to a variable  
$requestData= $_REQUEST;
$columns = array( 
// datatable column index  => database column name
		0 => 'Asset_id',
		1 => 'Asset_code',
		2 => 'Asset_serial',
		3 => 'Asset_name',
		4 => 'brand',
		5 => 'Asset_date',
		6 => 'Asset_Category',
		7 => 'Asset_status',
);

// getting total number records without any search
$sql = "SELECT Asset_id,Asset_code ,Asset_serial ,Asset_name ,brand,Asset_date ,Asset_Category, Asset_status";
$sql.=" FROM asset";
$query=mysqli_query($conn, $sql) or die("employee-grid-data.php: get employees");
$totalData = mysqli_num_rows($query);
$totalFiltered = $totalData;  // when there is no search parameter then total number rows = total number filtered rows.


$sql = "SELECT Asset_id,Asset_code ,Asset_serial ,Asset_name ,brand,Asset_date ,Asset_Category ,Asset_status";
$sql.=" FROM asset WHERE 1=1";
if( !empty($requestData['search']['value']) ) {   // if there is a search parameter, $requestData['search']['value'] contains search parameter
	$sql.=" AND ( Asset_id LIKE '".$requestData['search']['value']."%' ";    
	$sql.=" OR Asset_code LIKE '".$requestData['search']['value']."%' ";
	$sql.=" OR Asset_serial LIKE '".$requestData['search']['value']."%' ";
	$sql.=" OR Asset_name LIKE '".$requestData['search']['value']."%' ";
	$sql.=" OR brand LIKE '".$requestData['search']['value']."%' ";
	$sql.=" OR Asset_date LIKE '".$requestData['search']['value']."%' ";
	$sql.=" OR Asset_Category LIKE '".$requestData['search']['value']."%' ";
	
	$sql.=" OR Asset_status LIKE '".$requestData['search']['value']."%' )";
}
$query=mysqli_query($conn, $sql) or die("employee-grid-data.php: get employees");
$totalFiltered = mysqli_num_rows($query); // when there is a search parameter then we have to modify total number filtered rows as per search result. 
$sql.=" ORDER BY ". $columns[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir']."  LIMIT ".$requestData['start']." ,".$requestData['length']."   ";
/* $requestData['order'][0]['column'] contains colmun index, $requestData['order'][0]['dir'] contains order such as asc/desc  */	
$query=mysqli_query($conn, $sql) or die("employee-grid-data.php: get employees");

$data = array();
while( $row=mysqli_fetch_array($query) ) {  // preparing an array
	$nestedData=array(); 
	$nestedData[] = $row["Asset_id"];
	$nestedData[] = $row["Asset_code"];
	$nestedData[] = $row["Asset_serial"];
	$nestedData[] = $row["Asset_name"];
	$nestedData[] = $row["brand"];
	$nestedData[] = $row["Asset_date"];
	$nestedData[] = $row["Asset_Category"];
	$nestedData[] = $row["Asset_status"];
	$data[] = $nestedData;
}
$json_data = array(
			"draw"            => intval( $requestData['draw'] ),   // for every request/draw by clientside , they send a number as a parameter, when they recieve a response/data they first check the draw number, so we are sending same number in draw. 
			"recordsTotal"    => intval( $totalData ),  // total number of records
			"recordsFiltered" => intval( $totalFiltered ), // total number of records after searching, if there is no searching then totalFiltered = totalData
			"data"            => $data   // total data array
			);
echo json_encode($json_data);  // send data as json format
?>
