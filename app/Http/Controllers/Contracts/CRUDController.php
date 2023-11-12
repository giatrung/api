<?php

namespace App\Http\Controllers\Contracts;

use App\Http\Controllers\Contracts\BaseController;
use Illuminate\Http\Request;
use App\Models\Contracts\BaseRepository;
class CRUDController extends BaseController
{
    private BaseRepository $baseRepository;

    protected $name = 'base';

    public function __construct() 
    {
        $this->baseRepository = repo($this->name);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return $this->baseRepository->index();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
