<?php

namespace App\Http\Controllers;

use App\Models\Bank;
use Illuminate\Http\Request;


class BankController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $banks = match ($request->sort) {
        //     'asc' => bank::orderBy('title', 'asc')->get(),
        //     'desc' => bank::orderBy('title', 'desc')->get(),
        //     default => bank::all()
        // };
        // $banks = bank::where('id', '<', 100)->orderBy('title')->get();

        // $banks = bank::all()->sortBy('title');

        $banks = Bank::all();
        return view('bank.index', ['banks' => $banks]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bank.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $bank = new Bank;

        $bank->name = $request->name_input;
        $bank->surname = $request->surname_input;
        $bank->personal_nb = $request->personal_nb_input;
        $bank->account_nb = $request->account_nb_input;
        $bank->amount = $request->amount_input;

        $bank->save();

        return redirect()->route('banks-index')->with('success', 'Great job!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bank  $bank
     * @return \Illuminate\Http\Response
     */
    public function show(int $bankId)
    {
        $bank = Bank::where('id', $bankId)->first();

        return view('bank.show', ['bank' => $bank]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bank  $bank
     * @return \Illuminate\Http\Response
     */
    public function edit(Bank $bank)
    {
        return view('bank.edit', ['bank' => $bank]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bank  $bank
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bank $bank)
    {
        $bank->name = $request->name_input;
        $bank->surname = $request->surname_input;
        $bank->personal_nb = $request->personal_nb_input;
        $bank->account_nb = $request->account_nb_input;
        $bank->amount = $request->amount_input;

        $bank->save();

        return redirect()->route('banks-index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bank  $bank
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bank $bank)
    {
        $bank->delete();

        return redirect()->route('banks-index')->with('deleted', 'Account gone!');
    }
}
