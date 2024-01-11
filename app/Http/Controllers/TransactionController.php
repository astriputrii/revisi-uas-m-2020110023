<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index()
    {
        $transaction = Transaction::all();
        return view('transaction.index', compact('transaction'));
    }
    public function create()
    {
        $accounts = Account::all();
        return view('transaction.create', compact('accounts'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'kategori' => 'required|max:50',
            'nominal' => 'required|numeric',
            'tujuan' => 'required|exists:accounts,id',
            'account_id' => 'required|exists:accounts,id',
        ]);

        Transaction::create($request->all());

        return redirect()->route('transaction.index')->with('success!');
    }

    public function show($id)
    {
    }

    public function edit($id)
    {
    }

    public function update($id)
    {
    }
}
