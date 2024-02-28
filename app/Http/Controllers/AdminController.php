<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    function index()
    {
        $name = "MT400 KPI monitoring";
        $date = "27 FEB 2024";
        return view('welcome', compact('name', 'date'));
    }

    function overview()
    {
        $index = [
            [
                'id' => "Defective ratio",
                'data' => 0.00,
                'last' => 0.24
            ],
            [
                'id' => "Output Qty",
                'data' => 65005210,
                'last' => 6005210
            ],
            [
                'id' => "NC ratio",
                'data' => 0.54,
                'last' => 0.12
            ],
            [
                'id' => "Reject ratio",
                'data' => 0.04,
                'last' => 0.00
            ],
        ];
        return view('overview', compact('index'));
    }

    function chart()
    {
        $indexVal = "Plastic Injection";
        $data = [
            [
                'index' => "Sale amount",
                'total' => 123456789,
                'week1' => 56258,
                'week2' => 56258,
                'week3' => 56258,
                'week4' => 56258,
            ],
            [
                'index' => "Output",
                'total' => 5678900,
                'week1' => 51312,
                'week2' => 23541,
                'week3' => 158008,
                'week4' => 980000,
            ],
            [
                'index' => "Defective ratio",
                'total' => 1.23,
                'week1' => 1.23,
                'week2' => 1.23,
                'week3' => 1.23,
                'week4' => 1.23,
            ],
            [
                'index' => "NC",
                'total' => 0.00,
                'week1' => 0.00,
                'week2' => 0.00,
                'week3' => 0.00,
                'week4' => 0.00,
            ],
            [
                'index' => "Reject",
                'total' => 1.23,
                'week1' => 0.24,
                'week2' => 0.00,
                'week3' => 0.98,
                'week4' => 0.00,
            ],
            [
                'index' => "Complaint",
                'total' => 0,
                'week1' => 0,
                'week2' => 0,
                'week3' => 0,
                'week4' => 0,
            ],
            
        ];
        return view('chart', compact('indexVal', 'data'));
    }
}
