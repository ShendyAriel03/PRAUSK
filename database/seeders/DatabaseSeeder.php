<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Wallet;
use App\Models\Product;
use Illuminate\Support\Facades\Hash;
use App\Models\Student;
use App\Models\Transaction;
use App\Models\Categorie;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'role_id' =>"bank",
            'name' => "bank",
            'username' => "bank",
            'password' => Hash::make('bank')
        ]);
        User::create([
            'role_id' =>"kantin",
            'name' => "kantin",
            'username' => "kantin",
            'password' => Hash::make('kantin')
        ]);
        User::create([
            'role_id' =>"siswa",
            'name' => "user",
            'username' => "siswa",
            'password' => Hash::make('siswa')
        ]);

        Student::create([
            'user_id' => "4",
            'nis' => 12345,
            'classroom' => "XII RPL"
        ]);

        Categorie::create([
            'name' => "Makanan"
        ]);

        Categorie::create([
            'name' => "Minumam"
        ]);

        Product::create([
            'name' => "Bakso",
            'price' => "10000",
            'stock' => 5,
            'photo' => "data:image/jpeg;base64,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",
            "desc" => "Bakso Enak",
            'category_id' => 1,
            'stand' => '1'
        ]);

        Product::create([
            'name' => "Es Teh",
            'price' => "3000",
            'stock' => 15,
            'photo' => "data:image/jpeg;base64,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",
            "desc" => "Es Teh Manis",
            'category_id' => 2,
            'stand' => '1'
        ]);

        Wallet::create([
            'user_id' => 4,
            'credit' => 1000000,
            'debit' => null,
            'description' => "Pembukaan tabungan"
        ]);

        Wallet::create([
            'user_id' => 4,
            'credit' => 15000,
            'debit' => null,
            'description' => "Pembelian"
        ]);

        Wallet::create([
            'user_id' => 4,
            'credit' => null,
            'debit' => 21000,
            'description' => "Pembelian"
        ]);


        Transaction::create([
            'user_id' =>  4,
            'product_id' => 1,
            'status' => 'di keranjang',
            'order_id' => 'INV_12345',
            'price' => 5000,
            'quantity' => 1
        ]);

        Transaction::create([
            'user_id' =>  4,
            'product_id' => 2,
            'status' => 'di keranjang',
            'order_id' => 'INV_12345',
            'price' => 10000,
            'quantity' => 1
        ]);

        Transaction::create([
            'user_id' =>  4,
            'product_id' => 2,
            'status' => 'di keranjang',
            'order_id' => 'INV_12345',
            'price' => 3000,
            'quantity' => 2
        ]);


        $total_debit = 0;

        $transaktions = Transaction::where('order_id' ==
        'INV_12345');
        
        foreach($transaktions as $transaction)
        {
            $total_price = $transaction->price * $transaction->quantity;

            $total_debit += $total_price;
        }

        Wallet::create([
            'user_id' => 4,
            'debit' => $total_debit,
            'description' => "Pembelian Product"
        ]);

        foreach($transaktions as $transaction)
        {
            Transaction::find($transaction->id)->update([
                'status' => 'dibayar'
            ]);
        }
        foreach($transaktions as $transaction)
        {
            Transaction::find($transaction->id)->update([
                'status' => 'diambil'
            ]);
        }
        foreach($transaktions as $transaction)
        {
            Transaction::find($transaction->id)->update([
                'status' => 'di keranjang'
            ]);
        }
    }
}
