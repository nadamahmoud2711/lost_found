<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Phpml\Math\Distance\Euclidean;
use App\Photo;
use App\Http\Helper;


class SearchController extends Controller
{
    

	public function search(Request $request)
	{
		$lost = $request->input('lost');

		$name = $request->input('name');


		if ($request->hasFile('photo') and $request->file('photo')->isValid()) {

			$image_path = $request->photo->path();
			$photo = new Photo();
	        $photo->path = $image_path;
	        if (is_null($lost) or empty($lost)) 
	        {
	        	$photo->lost = 1;
	        } else 
	        {
	        	$photo->lost = $lost;
	        }
	        $embedding = Helper::getPhotoEmbedding($photo);



		} else {
			$image_path = null;
			$photo = null;
		}

		if (is_null($name) or empty($name)) 
		{
			
		}


	}


	public function get_sorted_photos($photo, $embedding)
	{

		$distances = array();

		$allPhotos = Photo::all();

		foreach ($allPhotos as $onePhoto)
        {   
            $otherPhotoEmbedding = explode(',', $onePhoto->embedding);
            
            $dist = $euclidean->distance($embedding, $otherPhotoEmbedding);

            $distances += [$onePhoto->id => $dist];
        }
	}


}

