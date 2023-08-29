<?php

namespace App\Http\Controllers;

use App\Models\Phone;
use Illuminate\Http\Request;

class PhoneController extends Controller
{
    public function index()
    {

        $phones = Phone::get();


        return view('phones.index', [
            'phones' => $phones
        ]);
    }

    public function create()
    {
        return view('phones.create');
    }

    public function show(Phone $phone)
    {

        return view('phones.show', [
            'phone' => $phone
        ]);
    }

    public function store(Request $request)
    {

        // Validate

        $request->validate([
            'name' => ['required', 'min:2'],
            'model' => ['required', 'min:2'],
            'year' => ['required', 'min:2'],
        ]);

        $phone = new Phone();
        $phone->name = $request->name;
        $phone->model = $request->model;
        $phone->year = $request->year;
        $phone->url = $request->url;

        session()->flash('message', 'Phone created successfully!');

        $phone->save();
        return to_route('phones.index');
    }
}
