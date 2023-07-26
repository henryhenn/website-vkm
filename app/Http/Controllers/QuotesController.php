<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class QuotesController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request,
            ['quotes' => 'required|string'],
            ['quotes.required' => 'Quotes wajib diisi!']
        );

        DB::table('quotes')
            ->insert([
                'user_id' => auth()->id(),
                'quotes' => $request->string('quotes'),
                'created_at' => now(),
                'updated_at' => now(),
            ]);

        return back()->with('message', 'Quotes berhasil ditambahkan!');
    }

    public function update(Request $request, string $id)
    {
        $this->validate($request,
            ['quotes' => 'required|string'],
            ['quotes.required' => 'Quotes wajib diisi!']
        );

        DB::table('quotes')
            ->where('id', $id)
            ->update([
                'quotes' => $request->str('quotes'),
                'updated_at' => now()
            ]);

        return back()->with('message', 'Quotes berhasil diupdate!');
    }

    public function getQuote()
    {
        $quote = DB::table('quotes')
            ->select('id', 'user_id', 'quotes')
            ->where('user_id', auth()->id())
            ->first();

        return response()->json([
            'data' => $quote,
            'status' => Response::HTTP_ACCEPTED
        ]);
    }
}
