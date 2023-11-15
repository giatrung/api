<?php

namespace App\Http\Controllers\Contracts;

use App\Http\Controllers\Contracts\BaseController;
use Illuminate\Http\Request;
use App\Models\Contracts\BaseRepository;
use App\Models\Contracts\BaseRequest;

class CRUDController extends BaseController
{
    private BaseRepository $repository;

    protected $name = 'base';

    public function __construct()
    {
        $this->repository = new (repo($this->name));
    }

    /**
     * index
     *
     * @param  BaseRequest $request
     * @return BaseCollection
     */
    public function index(BaseRequest $request)
    {
        return \App::make('crud')
            ->setRepository($this->repository)
            ->index($request);
    }

    /**
     * store
     *
     * @param  BaseRequest $request
     * @return BaseResource
     */
    public function store(BaseRequest $request)
    {
        return \App::make('crud')
            ->setRepository($this->repository)
            ->store($request);
    }

    /**
     * copy
     *
     * @param int $id
     * @return BaseResource
     */
    public function copy(int $id)
    {
        return \App::make('crud')
            ->setRepository($this->repository)
            ->copy($id);
    }

    /**
     * show
     *
     * @param  string $id
     * @return BaseResource
     */
    public function show($id)
    {
        return \App::make('crud')
            ->setRepository($this->repository)
            ->show($id);
    }

    /**
     * update
     *
     * @param  BaseRequest $request
     * @param  string $id
     * @return BaseResource
     */
    public function update(BaseRequest $request, string $id)
    {
        return \App::make('crud')
            ->setRepository($this->repository)
            ->update($request, $id);
    }

    /**
     * destory
     *
     * @param  string $id
     * @return BaseResource
     */
    public function destroy(string $id)
    {
        return \App::make('crud')
            ->setRepository($this->repository)
            ->destroy($id);
    }

    /**
     * createベース
     *
     * @throws 404
     */
    public function create()
    {
        error('crud.create.not_found');
    }

    /**
     * editベース
     *
     * @var string $id
     * @throws 404
     */
    public function edit(string $id)
    {
        error('crud.edit.not_found');
    }

    /**
     * 復元
     *
     * @param  string $id
     * @return BaseResource
     */
    public function restore(string $id)
    {
        return \App::make('crud')
            ->setRepository($this->repository)
            ->restore($id);
    }

    /**
     * 強制削除
     *
     * @param  string $id
     * @return BaseResource
     */
    public function forceDelete(string $id)
    {
        return \App::make('crud')
            ->setRepository($this->repository)
            ->forceDelete($id);
    }

    /**
     * Destroy selected items
     *
     * @param  BaseRequest $request
     * @return BaseResource
     */
    public function destroySelectedItems(BaseRequest $request)
    {
        return \App::make('crud')
            ->setRepository($this->repository)
            ->destroySelectedItems($request);
    }
}
