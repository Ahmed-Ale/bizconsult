<?php

namespace App\Http\Controllers;

use App\Models\Subscriber;
use App\Http\Requests\StoreSubscriberRequest;
use App\Http\Requests\UpdateSubscriberRequest;

class SubscriberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subscribers = Subscriber::paginate(config('pagination.per_page'));
        return view('admin.subscribers.index', compact('subscribers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSubscriberRequest $request)
    {
        Subscriber::create($request->validated());
        return to_route('front.index')->with('success', __('keywords.subscriber_created'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Subscriber $subscriber)
    {
        $subscriber->delete();
        return to_route('admin.subscribers.index')->with('success', __('keywords.subscriber_deleted'));
    }
}
