<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repository\TimeRepository;

class TimeController extends Controller
{
    //
    private $data;

    public function __construct(TimeRepository $data)
    {
        $this->data = $data;
    }

    public function index()
    {
        $time = $this->data->getAll();
    }
}
