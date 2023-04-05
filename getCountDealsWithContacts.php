<?php
$response = CRest::call("crm.deal.list", [
    'filter' => [
        '!CONTACT_ID' => false
    ]
])['total'];

echo 'Количество сделок с контактами: ' . $response . '<br>';