<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Jobs\SendContactEmailJob;
use App\Jobs\SendUserEmailJob;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email',
            'message' => 'required|string|max:2000',
        ]);

        // Dispatch async job
        SendContactEmailJob::dispatch($data);
        SendUserEmailJob::dispatch($data)->delay(now()->addSeconds(15));

        return response()->json([
            'success' => true,
            'message' => 'Your message is being processed'
        ]);
    }
}
