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

}
