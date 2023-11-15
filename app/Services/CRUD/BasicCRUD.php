<?php

namespace App\Services\CRUD;

use App\Models\Contracts\BaseRepository;
use App\Models\Contracts\BaseResource;
use App\Models\Contracts\BaseCollection;
use App\Models\Contracts\BaseRequest;

class BasicCRUD
{
    /**
     * リポジトリ
     *
     * @var BaseRepository
     */
    protected BaseRepository $repository;

    /**
     * リポジトリセット
     *
     * @param BaseRepository
     * @return self
     */
    public function setRepository(BaseRepository $repository): self
    {
        $this->repository = $repository;
        return $this;
    }

    /**
     * dummy
     *
     * @return BaseResource
     */
    public function dummy()
    {
        return $this->repository->dummy();
    }

    /**
     * index
     *
     * @param BaseRequest $request
     * @return BaseCollection
     */
    public function index(BaseRequest $request)
    {
        return $this->repository->index($request);
    }

    /**
     * store
     *
     * @param BaseRequest $request
     * @return BaseResource
     */
    public function store(BaseRequest $request)
    {
        return $this->repository->store($request);
    }

    /**
     * copy
     *
     * @param int $id
     * @return BaseResource
     */
    public function copy(int $id)
    {
        return $this->repository->copy($id);
    }

    /**
     * show
     *
     * @param string $id
     * @return BaseResource
     */
    public function show($id)
    {
        return $this->repository->show($id);
    }

    /**
     * update
     *
     * @param BaseRequest $request
     * @param string $id
     * @return BaseResource
     */
    public function update(BaseRequest $request, string $id)
    {
        return $this->repository->update($request, $id);
    }

    /**
     * destory
     *
     * @param string $id
     * @return BaseResource
     */
    public function destroy(string $id)
    {
        return $this->repository->destroy($id);
    }

    /**
     * restore
     *
     * @param string $id
     * @return BaseResource
     */
    public function restore(string $id)
    {
        return $this->repository->restore($id);
    }

    /**
     * force delete
     *
     * @param string $id
     * @return BaseResource
     */
    public function forceDelete(string $id)
    {
        return $this->repository->forceDelete($id);
    }

    /**
     * update sort
     *
     * @param BaseRequest $request
     * @param string $id
     * @return BaseResource
     */
    public function updateSort(BaseRequest $request, string $id)
    {
        return $this->repository->updateSort($request, $id);
    }

    /**
     * Destroy selected items
     * 
     * @param BaseRequest $request
     * @return array
     */
    public function destroySelectedItems(BaseRequest $request): array
    {
        return $this->repository->destroySelectedItems($request);
    }
}
