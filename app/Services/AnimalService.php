<?php

namespace App\Services;

use App\Models\Animal;

use App\Enums\AnimalTypeEnum;
use App\Enums\GenderEnum;
use App\Enums\FriendlinessEnum;

class AnimalService
{
    /**
     * $search = string
     * $sort = field is 0, direction is 1
     * $filter = field is 0, value is 1
     * @return mixed
     */
    public function list()
    {
        $search = request()->query('search');
        $sort = request()->query('sort');
        $filter = request()->query('filter');

        return Animal::when($sort, function ($query, $sort)
        {
            $sort = explode(',', $sort);

            if ((isset($sort[0]) && isset($sort[1])) && in_array($sort[0], Animal::$sortables)) {
                return $query->orderBy($sort[0], $sort[1]);
            }
        })
            ->when($search, function ($query, $search) {

                foreach (Animal::$searchables as $searchable) {
                    $query = $query->orWhere($searchable, 'LIKE', "%{$search}%");
                }

                return $query;
            })

            ->when($filter, function ($query, $filter) {

                $filter = explode(',', $filter);

                if ((isset($filter[0]) && isset($filter[1])) && in_array($filter[0], Animal::$filterables)) {
                    return $query->where($filter[0], $filter[1]);
                }
            })

        ->orderBy('created_at', 'DESC')
        ->paginate(request()->query('per_page'));
    }

    public function store($request)
    {
        return Animal::create([
            ...$request->toArray(),
            'gender' => GenderEnum::fromName($request->gender)->value,
            'friendliness' => FriendlinessEnum::fromName($request->friendliness)->value,
            'type' => AnimalTypeEnum::KANGAROO, # Default
        ]);
    }

    public function update($request, $id)
    {
        $animal = Animal::findOrFail($id);

        $animal->update([
            ...$request->toArray(),
            'gender' => GenderEnum::fromName($request->gender)->value,
            'friendliness' => FriendlinessEnum::fromName($request->friendliness)->value,
            'type' => AnimalTypeEnum::KANGAROO, # Default
        ]);

        return $animal;
    }

    public function edit($id)
    {
        return Animal::findOrFail($id);
    }
}
