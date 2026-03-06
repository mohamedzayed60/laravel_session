<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
class SendNotification extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'notification:send';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'notification send to users';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        // $this->info('Sending notification to mohamed , ahmed , amr ');
        // echo"-----------Here-------------\n";
        // print_r("Notification sent to mohamed , ahmed , amr ");
        // Log::info('Sending notification...');
        // DB::table(table: 'users')->update(['name' => 'updated name']);
    }
}
