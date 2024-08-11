<?php

namespace App\Models;

use CodeIgniter\Model;

class PaymentModel extends Model
{
    protected $table = 'payments';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'email', 'contact', 'order_id', 'amount', 'payment_status'];
    protected $useTimestamps = true;
}
