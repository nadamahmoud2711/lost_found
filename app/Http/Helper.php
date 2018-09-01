<?php

namespace App\Http;

use Illuminate\Support\Facades\Config;
use App\Photo;


class Helper {

	public static function getPhotoEmbedding($photo)
	{
		$url = Config::get('constants.embedding.url_get_embedding_for_photo');
        $image_path = $photo->path;

        $client = new \GuzzleHttp\Client();

        $response = $client->post(
            $url,
            [
                \GuzzleHttp\RequestOptions::JSON => 
                ['image_path' => $image_path]
            ],
            ['Content-Type' => 'application/json']
        );

        $responseJSON = json_decode($response->getBody(), true);

        return $responseJSON;
	}

}