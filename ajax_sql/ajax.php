<?php
require_once 'database.php';
$db = new Database();
$offset = isset($_POST['offset']) ? $_POST['offset'] :0;
$limit = isset($_POST['limit']) ? $_POST['limit'] :0;

$conn = Database::$connection;
$sql = "SELECT * FROM posts LIMIT $offset, $limit";
$result = $conn->query($sql);

if($result -> num_rows >0){
    while($row = $result->fetch_assoc){
        $data[] = $row;
    }
}
$html = '';
if(!empty($data)){
    foreach ($data as $post){
        $html .='<div class="col-lg-4">
                <img class="rounded-circle" src="images/flower.jpg" alt="Generic placeholder image" width="140" height="140">
                <h2>Heading</h2>
                <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
                <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
            </div>';
    }
}

$repond = array();
$repond['success'] = 1;
$repond['html'] = $html;
echo json_encode($repond);
exit();