<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateHotelRequest;
use App\Repositories\HotelRepository;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    //
    public function __construct(HotelRepository $hotelRepository)
    {
        $this->hotelRepository = $hotelRepository;
    }

    public function index()
    {
        $hotels = $this->hotelRepository->getAll();
        return view("backend.hotel.list",compact("hotels"));
    }

    public function create()
    {
        return view("backend.hotel.create");
    }

    public function store(CreateHotelRequest $request)
    {
        $this->hotelRepository->create($request);
        return redirect()->route('hotels.list');
    }

    public function edit($id)
    {
        $hotel = $this->hotelRepository->getById($id);
        return view("backend.hotel.update", compact("hotel"));
    }

    public function update(Request $request, $id)
    {
        $this->hotelRepository->update($request, $id);
        return redirect()->route("hotels.list");
    }

    public function destroy($id)
    {
        $this->hotelRepository->delete($id);
        return redirect()->route('hotels.list');
    }

}
