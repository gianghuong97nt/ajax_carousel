<?php
$data = array();
$data['success'] = 1;
$data['html'] = '<div class="col-lg-4">
                <img class="rounded-circle" src="images/flower.jpg" alt="Generic placeholder image" width="140" height="140">
                <h2>Heading</h2>
                <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
                <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
            </div>';
echo json_encode($data);
exit();