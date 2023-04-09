<?php

namespace App\Http\Controllers\Manager;

use App\Http\Controllers\Controller;
use App\Models\Manager\ContactFormModel;
use App\Models\Manager\SendModel;
use Illuminate\Http\Request;

class SendController extends Controller
{
    public function send(Request $request) {

        SendModel::create([
            'manager_id' => $request->manager_id === null ? 0 : $request->manager_id,
            'isTg' => $request->isTg,
            'isWhatsapp' => $request->isWhatsapp,
            'isViber' => $request->isViber,
            'isPhone' => $request->isPhone,
            'name' => $request->name,
            'phone' => $request->phone,
        ]);

        try {
            return response()->json(true, 200);
        } catch (\Exception $exception) {
            return response()->json(false, 403);
        }

    }

    public function order(Request $request) {

        $request->validate([
            'name' => 'max:255|required',
            'email' => 'required',
            'phone' => 'required',
        ]);

        ContactFormModel::create([
           'name' => $request->name,
           'email' => $request->email,
           'phone' => $request->phone,
           'message' => $request->message
        ]);

        try {
            return response()->json(true, 200);
        } catch (\Exception $exception) {
            return response()->json(false, 403);
        }

    }
}
