<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\Config;
use Phpml\Math\Distance\Euclidean; 
use App\Photo;
use App\Distance;
use \ArrayIterator;
use App\Http\Helper;


class CalculateDistances implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $photo;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($photo)
    {
        $this->photo = $photo;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {

        $epsilon = Config::get('constants.embedding.epsilon');

        $responseJSON = Helper::getPhotoEmbedding($this->photo);

        // $it = new ArrayIterator($responseJSON);
        // iterator_apply($it, 'floatval', array($it));

        $embedding = implode(",",$responseJSON);

        $this->photo->embedding = $embedding;
        $this->photo->save();

        $allPhotos = Photo::all();

        $euclidean = new Euclidean();

        foreach ($allPhotos as $onePhoto)
        {   
            if ($onePhoto->id == $this->photo->id) 
            {
                continue;
            } 

            $otherPhotoEmbedding = explode(',', $onePhoto->embedding);
            
            $dist = $euclidean->distance($responseJSON, $otherPhotoEmbedding);

            if ($dist <= $epsilon) {
                $this->saveDistance($this->photo, $onePhoto, $dist);
            }
        }

    }



    public function saveDistance($photo1, $photo2, $dist) 
    {
        $distance = new Distance();
        $distance->photo1_id = $photo1->id;
        $distance->photo2_id = $photo2->id;
        $distance->distance = $dist;
        $distance->save();
    }


}
