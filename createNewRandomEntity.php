<?php
require_once 'crest.php';

$randomTypeId = rand(2, 4);

switch ($randomTypeId) {
    case 2:
        CRest::call('crm.deal.add', []);
        break;
    case 3:
        CRest::call('crm.contact.add', []);
        break;
    case 4:
        CRest::call('crm.company.add', []);
        break;
}