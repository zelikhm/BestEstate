<?php


namespace App\Http\Traits;

use App\Models\JkFlatModel;

trait Flat
{
    protected function getFlat($type, $limit) {

        $flats = JkFlatModel::where('type_flat', $type)
            ->with(['images', 'jk', 'price_object', 'support', 'builder'])
            ->limit($limit)
            ->get();

        foreach ($flats as $flat) {
            $flat->images = count($flat->images) !== 0 ? json_decode($flat->images[0]->image) : null;

            $flat->image = $flat->images !== null ? $flat->images[0] : null;
        }

        return $flats;

    }

    protected function getFlatOnCatalog($type, $limit) {

        $flats = JkFlatModel::where('type_flat', $type)
            ->with(['images', 'jk', 'price_object', 'support', 'builder'])
            ->limit($limit)
            ->get();

        return $flats;

    }

    protected function setImages($flats) {

        foreach ($flats as $flat) {
            if(count($flat->images) > 0) {
                $flat->images_array = json_decode($flat->images[0]->image);
            } else {
                $flat->images_array = [];
            }
        }

        return $flats;
    }

}
