<?php


namespace App\Http\Traits;

use App\Models\JkFlatModel;

trait Flat
{

    /**
     * get flat with help type and use limit
     * @param $type
     * @param $limit
     * @return mixed
     */

    protected function getFlat($type, $limit)
    {

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

    /**
     * get flat with help id
     * @param $id
     * @return mixed
     */

    protected function getFlatOnId($id)
    {

        $flat = JkFlatModel::where('id', $id)
            ->with(['images', 'jk', 'price_object', 'support', 'builder'])
            ->first();

        $flat->images_array = count($flat->images) !== 0 ? json_decode($flat->images[0]->image) : [];

//        $flat->image = $flat->images !== null ? $flat->images[0] : null;

        return $flat;

    }

    /**
     * get flat for catalog
     * @param $type
     * @param $limit
     * @return mixed
     */

    protected function getFlatOnCatalog($type, $limit)
    {

        $flats = JkFlatModel::where('type_flat', $type)
            ->with(['images', 'jk', 'price_object', 'support', 'builder'])
            ->limit($limit)
            ->get();

        return $flats;

    }

    /**
     * set images for flat
     * @param $flats
     * @return mixed
     */

    protected function setImages($flats)
    {

        foreach ($flats as $flat) {
            if (count($flat->images) > 0) {
                $flat->images_array = json_decode($flat->images[0]->image);
            } else {
                $flat->images_array = [];
            }
        }

        return $flats;
    }

}
