<?php
$response = CRest::call("crm.deal.list", [])['total'];

echo 'Общее количество сделок: ' . $response . '<br>';