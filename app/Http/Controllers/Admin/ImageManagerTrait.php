<?php

namespace App\Http\Controllers\Admin;

trait ImageManagerTrait
{
    public function checkAndUploadImage($request, $fileName, $collection, $model): void
    {
        if ($file = $request->file($fileName)) {
            if ($model->getMedia($collection)->first()) {
                $model->getMedia($collection)->first()->delete();
            }
            $model->addMedia($file)->toMediaCollection($collection);
        }
    }

    public function checkAndUploadGalleryImages($request, $galleryName, $collection, $model): void
    {
        if ($request->has($galleryName)) {
            foreach ($request->$galleryName as $fileName) {
                $model->addMedia($fileName)->toMediaCollection($collection);
            }
        }
    }

    public function checkAndUpdateGalleryImages($request, $galleryName, $collection, $model): void
    {
        if ($request->input($galleryName) !== null) {
            $ids = [];
            foreach ($request->input($galleryName) as $i) {
                $ids[] = $i;
            }
            $images = $model->getMedia($collection)->whereIn('id', $ids);
            $model->clearMediaCollectionExcept($collection, $images);
        } else {
            $model->clearMediaCollection($collection);
        }
    }
}