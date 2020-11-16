<?php
namespace App\Models;
use App\Models\Simple\CSVModel;

class Member extends CSVModel{
    protected $origin = WRITEPATH . 'data/memberData.csv';
    protected $keyField = 'id';
    protected $validationRules = [];
}