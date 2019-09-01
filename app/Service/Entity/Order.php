<?php

namespace App\Service\Entity;

class Order {

    const STATUS_DIAGNOSTICS       = 'status_diagnostics';
    const STATUS_IN_WORK           = 'in_work';
    const STATUS_FIXED             = 'fixed';
    const STATUS_READY             = 'ready';
    const STATUS_REFUSED           = 'refused';
    const STATUS_IMPOSSIBLE        = 'impossible';
    const STATUS_WARRANTY_REJECTED = 'warranty_rejected';
    const STATUS_DEFECT_NOT_FOUND  = 'defect_not_found';
    const STATUS_COMPENSATION_NOTE = 'compensation_note';
    const STATUS_GIVEN             = 'given';

    public $id;
    public $status;
    public $type;
    public $sum;
    public $isPaid;
    public $dateStart;
    public $dateEnd;
    public $model;
    public $deviceType;
    public $defect;
    public $serialNumber;
    public $conclusion;
    public $clientName;
    public $isCourier;
    public $clientEmail;
    public $clientId;
    public $clientPhone;
}