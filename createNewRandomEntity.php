<?php
require_once 'crest.php';

$randomTypeId = rand(2, 4);

switch ($randomTypeId) {
    case 2:
        CRest::call('crm.deal.add', [
            'TITLE' => 'buttonMake'
        ]);
        break;
    case 3:
        CRest::call('crm.contact.add', [
            'NAME' => 'buttonMake'
        ]);
        break;
    case 4:
        CRest::call('crm.company.add', [
            'TITLE' => 'buttonMake'
        ]);
        break;
}
