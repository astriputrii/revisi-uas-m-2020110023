<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Transaction;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function index()
    {
        $jumlahAccount = Account::count();
        $jumlahTransaction = Transaction::count();

        $accounts = Account::all();
        $transaction = Transaction::all();

        return view('index', compact('jumlahAccount', 'jumlahTransaction', 'accounts', 'transaction'));
    }

}
