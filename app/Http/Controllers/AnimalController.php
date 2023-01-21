<?php

namespace App\Http\Controllers;

# Requests
use App\Http\Requests\StoreAnimalRequest;
use App\Http\Requests\UpdateAnimalRequest;

# Service
use App\Services\AnimalService;

# Resource
use App\Http\Resources\EditAnimalResource;

# Enums
use App\Enums\GenderEnum;
use App\Enums\FriendlinessEnum;

class AnimalController extends Controller
{
    public function __construct(private AnimalService $animalService) {}

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response($this->animalService->list());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return response(
            [
                'genders'      => GenderEnum::toArrayNames(),
                'friendliness' => FriendlinessEnum::toArrayNames(),
            ]    
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreAnimalRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAnimalRequest $request)
    {
        return response($this->animalService->store($request), 201);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function edit($id)
    {
        return response()->json(new EditAnimalResource($this->animalService->edit($id)));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAnimalRequest $request, $id)
    {
        return response($this->animalService->update($request, $id));
    }
}
