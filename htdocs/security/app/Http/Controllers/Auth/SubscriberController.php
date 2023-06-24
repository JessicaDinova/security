<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Subscriber;
use Illuminate\Http\Request;

class SubscriberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subscribers = Subscriber::all();
        return view('auth.subscribers.index', compact('subscribers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('auth.subscribers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Subscriber::create($this->validateSubscriber($request));
        return redirect(route('subscribers.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Subscriber $subscriber)
    {
        return view('auth.subscribers.show', ['subscriber' => $subscriber]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Subscriber $subscriber)
    {
        return view('auth.subscribers.edit', ['subscriber' => $subscriber]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Subscriber $subscriber)
    {
        $subscriber->update($this->validateSubscriber($request));
        return redirect(route('subscribers.show', ['subscriber' => $subscriber]));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Subscriber $subscriber)
    {
        $subscriber->delete();
        return redirect(route('subscribers.index'));
    }

    public function validateSubscriber(Request $request) :array
    {
        return $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'moneySpent' => 'required|min:1'
        ]);
    }
}
