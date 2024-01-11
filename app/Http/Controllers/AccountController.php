<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AccountController extends Controller
{
    public function index()
    {
        $accounts = Account::all();
        return view('accounts.index', compact('accounts'));
    }
    public function create()
    {
        return view('accounts.create', compact('accounts'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'id' => 'required|max:16',
            'nama' => 'required',
            'jenis' => 'required|in:BISNIS,PERSONAL',
        ]);

        Account::create($request->all());

        return redirect()->route('accounts.index')->with('Success!');
    }
       public function edit($id)
    {
        $account = Account::find($id);
        return view('accounts.edit', compact('account'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'id' => 'required|max:16',
            'nama' => 'required',
            'jenis' => 'required|in:BISNIS,PERSONAL',
        ]);

        $account = Account::find($id);
        $account->update($request->all());

        return redirect()->route('accounts.index')->with('Success!');
    }
    public function destroy($id)
    {
        $isUsedInTransactions = DB::table('transactions')->where('account_id', $id)->exists();

    if ($isUsedInTransactions) {
        return redirect()->route('accounts.index')->with('error', 'Akun tidak dapat dihapus karena sudah digunakan dalam transaksi.');
    }

    $account = Account::find($id);
    $account->delete();

    return redirect()->route('accounts.index')->with('success', 'Akun berhasil dihapus!');
    }

    public function show($id)
    {
    }
}

