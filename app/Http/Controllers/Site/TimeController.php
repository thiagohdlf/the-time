<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\Site\TimeRequest;
use App\Repository\TimeRepository;

class TimeController extends Controller
{
    private $data;

    public function __construct(TimeRepository $data)
    {
        $this->data = $data;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $time = $this->data->getAll();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $now = $this->data->datetime();
        return view('site.index', compact('now'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TimeRequest $request)
    {
        //
        $time = $this->data->storeAll($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
