<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class FieldsController extends Controller
{
    public function indexAction()
    {
        return view('pages.fields');
    }
    
    public function getAction($fieldType)
    {
        $data = [
            'fieldType' => $fieldType   
        ];
        
        return view('fields.' . $fieldType, $data);
    }
}
