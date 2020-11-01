<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
 namespace App\Controllers; 
 
    class Paris extends BaseController   
    {       
        public function index()    
        {       
            // connect to the model
             $character = new \App\Models\character(); 
             // retrieve all the records 
             $records = $character->findAll(); 
             // get a template parser
              $parser = \Config\Services::parser(); 
               // tell it about the substitions 
              return $parser->setData(['records' => $records]) 
                      // and have it render the template with those
                      ->render('CharacterList'); 
            }
             public function showme($id)     
             {
                  // connect to the model 
                 $character = new \App\Models\character();
                  // retrieve all the records 
                  $record = $character->find($id); 
                   // get a template parser 
                   $parser = \Config\Services::parser(); 
                    // tell it about the substitions 
                    return $parser->setData($record) 
                             // and have it render the template with those 
                             ->render('onecharacter'); 
             } 
 
         } 