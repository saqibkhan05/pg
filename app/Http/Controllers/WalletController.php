<?php

namespace App\Http\Controllers;

use App\Models\Wallet;
use App\Models\WalletTransaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class WalletController extends Controller
{

    public function balance()
    {
        // Get the user from the token
        $token = Cookie::get('customer_jwt_token');
        $customer = auth()->guard('customer')->setToken($token)->user();

        // 
        $wallet = Wallet::where('customer_id', $customer->id)->first();
        // dd($wallet);

        return view("client.wallet.home")->with("wallet", $wallet);
    }

    public function my_statement()
    {
        // Get the user from the token
        $token = Cookie::get('customer_jwt_token');
        $customer = auth()->guard('customer')->setToken($token)->user();

        // 
        $wallet_transactions = Wallet::where('customer_id', $customer->id)->with('wallet_transactions')->get();
        // dd($wallet_transactions[0]->wallet_transactions->toArray());

        return view("client.wallet.statement")->with("wallet_transactions", $wallet_transactions[0]->wallet_transactions);
    }

    public function recharge($userId, $amount)
    {
        try {


            // dd('inside recharge function');

            $wallet = Wallet::where('customer_id', $userId)->first();
            $wallet->balance += $amount;
            $wallet->save();

            // Log transaction
            WalletTransaction::create([
                'wallet_id' => $wallet->id,
                'type' => 'credit',
                'amount' => $amount,
                'description' => 'Wallet Recharge'
            ]);

            return true;

        } catch (\Throwable $th) {
            return false;
        }

    }

    public function addReward($userId, $rewardAmount)
    {
        $wallet = Wallet::where('customer_id', $userId)->first();
        $wallet->balance += $rewardAmount;
        $wallet->save();

        // Log reward transaction
        WalletTransaction::create([
            'wallet_id' => $wallet->id,
            'type' => 'credit',
            'amount' => $rewardAmount,
            'description' => 'Reward Points'
        ]);
    }

    public function purchase($userId, $amount, $description = '-')
    {
        $wallet = Wallet::where('customer_id', $userId)->first();

        // Ensure wallet has sufficient funds
        if ($wallet->balance >= $amount) {
            $wallet->balance -= $amount;
            $wallet->save();

            // Log the purchase transaction
            WalletTransaction::create([
                'wallet_id' => $wallet->id,
                'type' => 'debit',
                'amount' => $amount,
                'description' => $description
            ]);
            return true;
        } else {
            // Handle insufficient balance
            throw new \Exception('Insufficient wallet balance');
        }
    }

    public function deductRent($userId, $dueAmount)
    {
        $wallet = Wallet::where('customer_id', $userId)->first();

        // Deduct the rent due amount
        if ($wallet->balance >= $dueAmount) {
            $wallet->balance -= $dueAmount;
            $wallet->save();

            // Log the deduction
            WalletTransaction::create([
                'wallet_id' => $wallet->id,
                'type' => 'debit',
                'amount' => $dueAmount,
                'description' => 'Rent Due Deduction'
            ]);
        } else {
            // Handle insufficient funds
            throw new \Exception('Insufficient funds for rent');
        }
    }

    public function add_balance_page(Request $request, $id)
    {
        return view("admin.wallet.add_balance_page")->with("id", $id);
    }
    public function set_security_deposit_page(Request $request, $id)
    {
        return view("admin.wallet.set_security_deposit_page")->with("id", $id);
    }
    public function add_balance(Request $request, $id)
    {
        try {
            // Validate the request
            $request->validate([
                'amount' => ['required', 'numeric', 'gt:0'],
            ]);
            $amount = $request->amount;

            $recharge = $this->recharge($id, $amount);

            if ($recharge) {
                session()->flash('recharge_success', 'true');
                return redirect()->route('admin.customer.show', ['id' => $id]);
            } else {
                session()->flash('recharge_fail', 'false');
                return redirect()->route('admin.customer.show', ['id' => $id]);
            }

        } catch (\Throwable $th) {
            throw $th;
        }

    }
    public function set_security_deposit(Request $request, $id)
    {
        try {
            // Validate the request
            $request->validate([
                'amount' => ['required', 'numeric', 'gt:0'],
            ]);
            $amount = $request->amount;
            $wallet = Wallet::where('customer_id', $id)->first();
            $wallet->min_balance = $amount;
            $wallet->save();

            session()->flash('recharge_success', 'true');
            return redirect()->route('admin.customer.show', ['id' => $id]);

        } catch (\Throwable $th) {
            //throw $th;
            session()->flash('recharge_fail', 'false');
            return redirect()->route('admin.customer.show', ['id' => $id]);
        }
    }
    public function statement($id)
    {
        $wallet_transactions = Wallet::where('customer_id', $id)->with('wallet_transactions')->get();
        // dd($wallet_transactions[0]->wallet_transactions->toArray());

        return view("admin.wallet.statement")->with("wallet_transactions", $wallet_transactions[0]->wallet_transactions);
    }
    public function clear_wallet_page($id)
    {
        $wallet = Wallet::where('customer_id', $id)->first();
        return view('admin.wallet.clear_wallet')->with('wallet', $wallet)->with('id', $id);
    }
    public function clear_wallet(Request $request, $id)
    {
        // Validate the request
        $request->validate([
            'b_amount' => ['required', 'numeric', 'gt:-1'],
            's_amount' => ['required', 'numeric', 'gt:-1'],
        ]);

        $b_amount = $request->b_amount;
        $s_amount = $request->s_amount;

        $wallet = Wallet::where('customer_id', $id)->first();
        // $wallet->balance = $b_amount;
        $this->purchase($id, $b_amount, 'withdrawal');
        $wallet->min_balance = $s_amount;
        $wallet->save();

        return redirect()->route('admin.customer.show', ['id' => $id]);
    }
}