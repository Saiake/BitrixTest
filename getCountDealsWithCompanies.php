<?php
$response = CRest::call("crm.deal.list", [
    'filter' => [
        '!COMPANY_ID' => false
    ]
])['total'];

echo 'Количество сделок с компаниями: ' . $response . '<br>';