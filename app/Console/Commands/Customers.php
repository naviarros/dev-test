<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\CustomersModel as Customer;

class Customers extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:customers';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $path = storage_path('app/public/customers.csv');

        $file = fopen($path, 'r');
        if (!$file) {
            $this->error('Cannot open file.');
            return;
        }

        fgets($file);

        while (($line = fgets($file)) !== false) {

            $row = explode(',', trim($line));

            Customer::create([
                'id' => $row[0],
                'first_name' => $row[1],
                'last_name' => $row[2],
                'email' => $row[3],
                'gender' => $row[4],
                'ip_address' => $row[5],
                'company' => $row[6],
                'city' => $row[7],
                'title' => $row[8],
                'website' => $row[9],
            ]);
        }

        // ✅ Close file
        fclose($file);

        $this->info('Import completed successfully.');
    }
}
