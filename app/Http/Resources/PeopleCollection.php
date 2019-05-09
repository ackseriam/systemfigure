<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class PeopleCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
        'data' => $this->collection->transform(function($element){
            return [ /*esto es un arreglo asociativo del dato importado del controlador, asi se extra el valor de los campos
                y aqui es donde se puede cambiar el valor del campo*/
               'name'=>$element->name,
                    'surname'=>$element->surname,
                    'imagen'=>$element->img_url,
                    'nacionality'=>$element->nacionality,
                    'ci'=>$element->ci,
                    'address'=>$element->address,
                
            ];
            })
        ];
    }
}
