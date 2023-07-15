<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Employee;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     *
     */
    public function index()
    {
        $events = Event::get();
        return view('layouts.events.index', [
            'events' => $events
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     *
     */
    public function create()
    {
        $employees = Employee::get();
        $customers = Customer::get();

        return view('layouts.events.new-event', [
            'employees' => $employees,
            'customers' => $customers
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     *
     */
    public function store(Request $request)
    {
        $event = Event::create(
            $request->except(['_token', 'employees'])
        );

        $event->employees()->attach($request->employees);

        return redirect()->route('events.index');
    }

    /**
     * Display the specified resource.
     *
     *
     */
    public function show(Event $event)
    {

        return view('layouts.events.show', \compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     *
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     *
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     *
     */
    public function destroy($id)
    {
        //
    }
}
