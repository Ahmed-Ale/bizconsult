<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Http\Requests\StoreMessageRequest;
use App\Http\Requests\UpdateMessageRequest;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $messages = Message::paginate(config('pagination.per_page'));
        return view('admin.messages.index', compact('messages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    // public function create()
    // {
    //     return view('admin.messages.create');
    // }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMessageRequest $request)
    {
        Message::create($request->validated());
        return to_route('front.contact')->with('success', __('keywords.message_created'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Message $message)
    {
        return view('admin.messages.show', compact('message'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    // public function edit(Message $message)
    // {
    //     return view('admin.messages.edit', compact('message'));
    // }

    /**
     * Update the specified resource in storage.
     */
    // public function update(UpdateMessageRequest $request, Message $message)
    // {
    //     $validated = $request->validated();
    //     $message->update($validated);
    //     return to_route('admin.messages.index')->with('success', __('keywords.message_updated'));
    // }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Message $message)
    {
        $message->delete();
        return to_route('admin.messages.index')->with('success', __('keywords.message_deleted'));
    }
}
