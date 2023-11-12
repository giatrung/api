<?php
namespace App\Models\Contracts;

// use App\Models\Contracts\BaseResource;

class BaseRepository
{
    protected string $name = 'base';

    protected string $resource;
    protected string $request;
    protected string $collection;

    public function __construct() {
        $this->setProperty('resource');
        $this->setProperty('request');
        $this->setProperty('collection');
    }

    protected function setProperty(string $property)
    {
        $this->{$property} = \Helper::makeModelClassName($this->name, \Str::ucfirst($property));
        return $this;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return new $this->collection(model($this->name)::all());
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

