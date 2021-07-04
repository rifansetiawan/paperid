<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Transaction;
use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use DataTables;
use Yajra\DataTables\Html\Builder;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index(Request $request)
    {
        $transactions = Transaction::all();
        $accounts= [''=>'Choose Account Options...'] + DB::table('accounts')->pluck('name', 'id')->toArray();
        
        if($request->ajax()){
            // return datatables()->of($transactions)->make(true); 
            // return new EloquentDataTable($transactions);
            return Datatables::of($transactions)
        ->addColumn('account_name',function(Transaction $transaction){
            if ($transaction->account()->exists()) {
                return $transaction->account()->pluck('name')->first();
                // return implode(" ",$trans);
            }
            // return 'non';
        })
        ->addColumn('user_name',function(Transaction $transaction){
            if ($transaction->user()->exists()) {
                return  $transaction->user()->pluck('name')->first();
                // return implode(" ",$users);
            }
            // return 'non';
        })
        ->make(true);
        }
        // return Inertia::render('transactions.index', compact('transactions'));
        return view('transactions.index', compact('transactions','accounts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

    {
        // $accounts = Account::all();
        $accounts= [''=>'Choose Account Options...'] + DB::table('accounts')->pluck('name', 'id')->toArray();
        // return $accounts;
        return view('transactions.create', compact('accounts'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $user = Auth::user();

        // if($file = $request->file('photo_id')){
        //     $name = time(). $file-> getClientOriginalName();
        //     $file->move('images', $name);
        //     // $photo = Photo::create(['file'=>$name]);
        //     $input['photo_id'] = $photo_id;
        // }
        // return $request->all();

        // return $user->name;
        $input['photo_id'] = 1;
        $input['photo_id'] = 1; 
        $user->transactions()->create($input);

        return redirect('/transaction');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $transactions = Transaction::all();
        $transaction = Transaction::findOrFail($id);
        $accounts= [''=>'Choose Account Options...'] + DB::table('accounts')->pluck('name', 'id')->toArray();
        return view('transactions.edit', compact('transaction', 'accounts'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = $request -> all();
        // return $input;
         Auth::user()->transactions()->whereId($id)->first()->update($input);      
         
         return redirect('/transaction');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $transaction_to_delete = Transaction::findOrFail($id)->delete();
    //    $transaction_to_delete -> delete();
       return redirect('/transaction');
    }
}
