<?php
namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    public function toArray($request)
    {
        $data = [
            'id'      => $this->id(),
            'title'   => $this->title(),
            'excerpt' => $this->excerpt(),
            'content' => $this->content(),
            'date'    => $this->date()->format('Y-m-d H:i'),
            'slug'    => $this->slug(),
        ];

        if ($this->image() !== null) {
            $data += [
                'thumb'    => $this->image()->medium(),
                'full'     => $this->image()->full(),
                'featured' => $this->image()->getSize('featured-blog-large'),
            ];
        }

        return $data;
    }
}
