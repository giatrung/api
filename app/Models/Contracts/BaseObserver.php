<?php

namespace App\Models\Contracts;

class BaseObserver
{
    /**
     * Handle the model "created" event.
     */
    public function created($model)
    {
        dd(1);
        if (auth()->check()) {
            $columns = $model->getColumns();
            if(count($columns) === 1) {
                $first = array_values($columns)[0];
                if(is_array($first)){
                    $columns = $first;
                }
            }

            if (\Helper::arrIn($columns, 'created_by')) {
                $model->created_by = auth()->id();
            }
        }
        return $model;
    }

    /**
     * Handle the model "updated" event.
     */
    public function updated($model): void
    {
        //
    }

    /**
     * Handle the model "deleted" event.
     */
    public function deleted($model): void
    {
        //
    }

    /**
     * Handle the model "restored" event.
     */
    public function restored($model): void
    {
        //
    }

    /**
     * Handle the model "force deleted" event.
     */
    public function forceDeleted($model): void
    {
        //
    }
}
