<?php

namespace App\Http\Controllers\test;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Models\WebMessage;

class WebMessageController extends Controller
{
    public function index(Request $request) {
        $web_messages = WebMessage::get();
        return view('test.web_message.index',compact('web_messages'));
    }

    public function create() {

        return view('test.web_message.create');
    }

    public function store(Request $request) {
        $web_message = new WebMessage;
        $web_message->add_user = "aoki";
        $web_message->mod_user = "aoki";
        $web_message->message = "$request->message";
        $web_message->start_day = "$request->start_day";
        $web_message->end_day = "$request->end_day";
        $web_message->save();

        return redirect()->route('web_message.index');
    }

    public function show($id) {
        $web_message = WebMessage::find($id);

        return view('test.web_message.show',compact('web_message'));
    }

    public function edit($id) {
        $web_message = WebMessage::find($id);

        return view('test.web_message.edit',compact('web_message'));
    }

    public function update(Request $request, $id) {
        $web_message = WebMessage::find($id);

        $web_message->message = "$request->message";
        $web_message->start_day = "$request->start_day";
        $web_message->end_day = "$request->end_day";
        $web_message->save();

        return redirect()->route('web_message.index');

    }
}
