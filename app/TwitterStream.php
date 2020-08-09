<?php

namespace App;

use OauthPhirehose;
use App\Jobs\ProcessTweet;
use Illuminate\Foundation\Bus\DispatchesJobs;

use Illuminate\Database\Eloquent\Model;

class TwitterStream extends Model
{
    use DispatchesJobs;

    public function enqueueStatus($status)
    {
        $this->dispatch(new ProcessTweet($status));
    }
}
