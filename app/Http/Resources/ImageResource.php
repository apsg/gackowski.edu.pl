<?php
namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class ImageResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'title' => $this->title(),
            'url'   => $this->url(),
            'thumb' => $this->thumb(),
            'date'  => Carbon::createFromTimestamp($this->timestamp())->format('Y-m-d'),
        ];
    }
}
