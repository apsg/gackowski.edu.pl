<?php
namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id'      => $this->id(),
            'title'   => $this->title(),
            'excerpt' => $this->excerpt(),
            'content' => $this->content(),
            'thumb'   => $this->image()->medium(),
            'full'    => $this->image()->full(),
            'date'    => $this->date()->format('Y-m-d H:i'),
            'slug'    => $this->slug(),
        ];
    }
}
