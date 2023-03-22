<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Http\Traits\Flat;
use App\Http\Traits\MainInfo;
use App\Models\Info\BalconyModel;
use App\Models\Info\BathroomModel;
use App\Models\Info\InfrastructureModel;
use App\Models\Info\PlotModel;
use App\Models\Info\RepairModel;
use App\Models\Info\TypeComModel;
use App\Models\Info\TypeHouseModel;
use App\Models\Jk\JkModel;
use App\Models\JkFlatModel;
use Illuminate\Http\Request;
use Inertia\Inertia;

//Resource
use App\Http\Resources\BalconyResource;

class CatalogController extends Controller
{
    use MainInfo, Flat;

    protected function main($flats, $type)
    {

        return Inertia::render('AppCatalog', [
            'page' => 2,
            'jk' => $flats,
            'type' => $type,
            'options' => $this->getOptions($type),
            'user' => $this->getUser(),
        ]);
    }

    /**
     * render page with not options
     * @param Request $request
     * @return \Inertia\Response
     */

    public function render(Request $request) {
        $type = (int)$request->type_jk;

        if(count($request->query) !== 0){
            if($type) {
                $flats = $this->getFlat($type, 20);
            } else {
                $flats = $this->getFlat(1, 20);
            }
        } else {
            $flats = $this->getFlat(1, 20);
        }

        return $this->main($flats, $type);
    }

    /**
     * get count flats with help options
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */

    public function getCount(Request $request) {

        $type = (int)$request->type_jk;

        $filters = $this->getFiltersFlat($request, $type);

        if($type === 1) {
            $flats = $this->filteredFirstType($filters, $request);
        } else if ($type === 2 || $type === 3) {
            $flats = $this->filteredSecondType($filters, $request, $type);
        } else if ($type === 4) {
            $flats = $this->filteredThreeType($filters, $request);
        }

        return response()->json(count($flats), 200);

    }

    /**
     * render page with options
     * @param Request $request
     */

    public function filtered(Request $request) {

        $type = (int)$request->type_jk;

        $filters = $this->getFiltersFlat($request, $type);

        if($type === 1) {
            $flats = $this->filteredFirstType($filters, $request);
        } else if ($type === 2 || $type === 3) {
            $flats = $this->filteredSecondType($filters, $request, $type);
        } else if ($type === 4) {
            $flats = $this->filteredThreeType($filters, $request);
        }

        return Inertia::render('AppCatalog', [
            'page' => 2,
            'jk' => $flats,
            'type' => $type,
            'options' => $request->options,
            'user' => $this->getUser(),
        ]);

    }

    /**
     * filtered first type flat
     * @param $filters
     * @param $request
     * @return \Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection
     */

    private function filteredFirstType($filters, $request) {
        if(count($filters[0]) !== 0 || count($filters[1]) !== 0 || count($filters[2]) !== 0) {
            if($request->plan != 0) {
                $flats = JkFlatModel::where('type_flat', 1)
                    ->where('rooms', $request->plan)
                    ->whereIn('balcon', $filters[1])
                    ->whereIn('repair', $filters[0])
                    ->whereIn('bathroom', $filters[2])
                    ->with(['images', 'jk', 'price_object', 'support', 'builder'])
                    ->get();
            } else {
                $flats = JkFlatModel::whereIn('balcon', $filters[1])
                    ->orWhereIn('repair', $filters[0])
                    ->orWhereIn('bathroom', $filters[2])
                    ->where('type_flat', 1)
                    ->with(['images', 'jk', 'price_object', 'support', 'builder'])
                    ->get();
            }
        } else {
            if($request->plan != 0) {
                $flats = JkFlatModel::where('rooms', $request->plan)
                    ->where('type_flat', 1)
                    ->with(['images', 'jk', 'price_object', 'support', 'builder'])
                    ->get();
            } else {
                $flats = JkFlatModel::with(['images', 'jk', 'price_object', 'support', 'builder'])
                    ->where('type_flat', 1)
                    ->get();
            }
        }

        foreach ($flats as $key => $flat) {

            if(!$this->getStatusCost($request, $flat)) {
                $flats->splice($key, 1);
                continue;
            }

            $flat->images = count($flat->images) !== 0 ? json_decode($flat->images[0]->image) : null;

            $flat->image = $flat->images !== null ? $flat->images[0] : null;
        }

        return $flats;
    }

    /**
     * get second type
     * @param $filters
     * @param $request
     * @param $type
     * @return mixed
     */

    private function filteredSecondType($filters, $request, $type) {
        if(count($filters[0]) !== 0 || count($filters[2]) !== 0 || count($filters[3]) !== 0) {
            $flats = JkFlatModel::whereIn('type_house', $filters[3])
                ->orWhereIn('repair', $filters[0])
                ->orWhereIn('plot_type', $filters[2])
                ->where('type_flat', $type)
                ->with(['images', 'jk', 'price_object', 'support', 'builder'])
                ->get();
        } else {
            $flats = JkFlatModel::where('type_flat', $type)
                ->with(['images', 'jk', 'price_object', 'support', 'builder'])
                ->get();

        }

        foreach ($flats as $key => $flat) {
            if(count($filters[1]) !== 0) {
                if($flat->infrastructure !== null) {
                    if(count(array_diff(json_decode($flat->infrastructure), $filters[1])) !== 0) {
                        $flats->splice($key, 1);
                        continue;
                    }
                }
            }

            if(!$this->getStatusCost($request, $flat)) {
                $flats->splice($key, 1);
                continue;
            }

            $flat->images = count($flat->images) !== 0 ? json_decode($flat->images[0]->image) : null;

            $flat->image = $flat->images !== null ? $flat->images[0] : null;
        }

        return $flats;
    }

    private function filteredThreeType($filters, $request) {

        if(count($filters[0]) !== 0 || count($filters[1]) !== 0) {
            $flats = JkFlatModel::whereIn('type_house', $filters[1])
                ->orWhereIn('plot_type', $filters[0])
                ->where('type_flat', 4)
                ->with(['images', 'jk', 'price_object', 'support', 'builder'])
                ->get();
        } else {
            $flats = JkFlatModel::where('type_flat', 4)
                ->with(['images', 'jk', 'price_object', 'support', 'builder'])
                ->get();

        }

        foreach ($flats as $key => $flat) {
            if(count($filters[1]) !== 0) {
                if($flat->infrastructure !== null) {
                    if(count(array_diff(json_decode($flat->infrastructure), $filters[1])) !== 0) {
                        $flats->splice($key, 1);
                        continue;
                    }
                }
            }

            if(!$this->getStatusCost($request, $flat)) {
                $flats->splice($key, 1);
                continue;
            }

            $flat->images = count($flat->images) !== 0 ? json_decode($flat->images[0]->image) : null;

            $flat->image = $flat->images !== null ? $flat->images[0] : null;
        }

        return $flats;

    }

    /**
     * get status
     * @param $request
     * @param $flat
     * @return bool
     */

    private function getStatusCost($request, $flat) {

        if($request->cost === 1) {
            if($flat->price_object->sale === 0) {
                return false;
            }
        } else if ($request->cost === 2) {
            if($flat->price_object->rent === 0) {
                return false;
            }
        } else if ($request->cost === 3) {
            if($flat->price_object->days === 0) {
                return false;
            }
        }

        return true;

    }

    /**
     * get filtered
     * @param Request $request
     * @param $type
     * @return array[]
     */

    private function getFiltersFlat(Request $request, $type) {

        if($type === 0) {
            $type = 1;
        }

        if($type == 1) {
            $filters = array([], [], []);
        } else if ($type == 2 || $type == 3) {
            $filters = array([], [], [], []);
        } else if ($type == 4) {
            $filters = array([], []);
        }

        foreach ($request->options as $item) {

            foreach ($item['opt'] as $value) {
                if($value['active']) {
                    if($item['name'] === 'Ремонт') {
                        array_push($filters[0], $value['id']);
                    } else if ($item['name'] === 'Балкон') {
                        array_push($filters[1], $value['id']);
                    } else if ($item['name'] === 'Санузел') {
                        array_push($filters[2], $value['id']);
                    } else if ($item['name'] === 'Инфраструктура') {
                        array_push($filters[1], $value['id']);
                    } else if ($item['name'] === 'Тип участка') {
                        array_push($filters[2], $value['id']);
                    } else if ($item['name'] === 'Тип здания') {
                        array_push($filters[3], $value['id']);
                    } else if ($item['name'] === 'Тип здания (ком)') {
                        array_push($filters[0], $value['id']);
                    } else if ($item['name'] === 'Тип Недвижимости') {
                        array_push($filters[1], $value['id']);
                    }
                }
            }

        }

        return $filters;

    }
}
