<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Juego extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        //return parent::toArray($request);
        return [
            'id'=>$this->id,
            'cetegoria'=>$this->cetegoria,
            'nombre'=>$this->nombre,
            'genero'=>$this->genero,
            'descripcion'=>$this->descripcion
         ];
    }
}
