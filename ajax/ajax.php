<?php
$data = array();
$data['success'] = 1;
$data['html'] = '<div class="col-lg-4">
                <img class="rounded-circle" src="images/flower.jpg" alt="Generic placeholder image" width="140" height="140">
                <h2>Heading</h2>
                <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
                <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
            </div>';
echo json_encode($data);
exit();