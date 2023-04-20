<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Account;
use App\Models\Transaction;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Generate one user from config file
        $user = new User();
        $user->name = Config::get('app.default_user.name');
        $user->email = Config::get('app.default_user.email');
        $user->password = Config::get('app.default_user.password');
        $user->save();

        //generate random users
        User::factory()->count(5)->create();

        // generate random account data
        $users = User::all();
        foreach ($users as $user) {
            $accountCount = rand(2, 5);
            Account::factory()->count($accountCount)->create(['user_id' => $user->id]);
        }

        //generate random transaction data
        // generate random account data
        $accounts = Account::all();
        foreach ($accounts as $account) {
            $transactionCount = rand(20, 50);
            $date = fake()->dateTimeBetween('-6 months', 'now')->format('Y-m-d');

            for($x = 0; $x <= $transactionCount; $x+=1) {
                $type = fake()->randomElement(['debit', 'debit', 'debit', 'credit']);
                $amount = fake()->numberBetween(0, 10000);
                if($type == 'credit'){
                    $amount = round($account->balance * 0.8);
                }
                
                $daysToAdd = fake()->randomElement([0, 0, 2, 5]);
                $date = date('Y-m-d', strtotime($date . " +{$daysToAdd} days"));

                Transaction::factory()->create([
                    'account_id' => $account->id,
                    'type' => $type,
                    'amount' => $amount,
                    'date' => $date
                ]);

                if($type == 'credit'){
                    $account->balance -= $amount;
                } else {
                    $account->balance += $amount;
                }
                $account->save();

            }
        }
    }
}
