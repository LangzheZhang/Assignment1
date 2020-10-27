<?php namespace App\Controllers;
class Member extends \CodeIgniter\Controller
{
    public function index()
    {
       // connect to the model
       $member = new \App\Models\Member();
       // retrieve all the records
       $records = $member->findAll();
       // JSON encode and return the result
       return json_encode($records);
    }
}