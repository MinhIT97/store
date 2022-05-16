<?php

namespace App\Jobs;

use App\Elibs\Debug;
use App\Entities\Category;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Telegram\Bot\Laravel\Facades\Telegram;

class ProcessPodcast implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    protected $data;
    protected $obj;
    public function __construct($data)
    {
        //
        $this->data = $data;

    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {

        Debug::pushNotification('test');

    }

    public static function addJob()
    {

        $id = Category::insertGetId([
            "name"      => 1,
            "type"      => '1',
            "slug"      => '2',
            "parent_id" => '1',
            "status"    => 1,
        ]);
        $delay              = 0;
        $save_obj['log_id'] = $id;

        self::dispatch($save_obj)->onQueue('jobs')->delay($delay);
    }

}
