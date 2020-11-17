<?php namespace App\Controllers;

class NINEPERCENT extends BaseController
{
    public function index()
    {
        // connect to the model
    $member = new \App\Models\Member();
        // retrieve all the records
    $records = $member->findAll();

    $table = new \CodeIgniter\View\Table();
    
    $headings = $member->fields;
    $table->setHeading($headings[1],$headings[7],"details");
    foreach ($records as $record) {
             $nameLink = anchor("ninepercent/showme/$record->id",$record->name);
            
            $table->addRow(
                    $record->name,"<img src=\"/image/".$record->image."\"/>",
                    anchor("NINEPERCENT/showme/$record->id", $record->company)
            );
    }$template = [
        'table_open' => '<table cellpadding="5px">',
        'cell_start' => '<td style="border: 1px solid #dddddd;">',
        'row_alt_start' => '<tr style="background-color:#dddddd">',
     ];
    $table->setTemplate($template);
    $fields = [
         'title' => 'Member',
         'heading' => 'Member',
         'footer' => 'Langzhe Zhang'
         ];


        // get a template parser
    $parser = \Config\Services::parser();
        // tell it about the substitions
   /* return $parser->setData(['records' => $records])
        // and have it render the template with those
    ->render('placeslist');*/
return $parser->setData($fields)
               ->render('templates\top') .
       $table->generate() .
        $parser->setData($fields)
               ->render('templates\bottom');
    }
    public function showme($id)
    {
        // connect to the model
      $member = new \App\Models\Member();
        // retrieve all the records
      $record = $member->find($id);
      // get a template parser
      $parser = \Config\Services::parser();
      // tell it about the substitions
      return $parser->setData($record)
      // and have it render the template with those
      ->render('onemember');
    }
}
