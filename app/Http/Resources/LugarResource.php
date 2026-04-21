<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class LugarResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'nombre' => $this->nombre,
            'descripcion' => $this->descripcion,
            'ubicacion' => $this->ubicacion,
            'imagen_url' => $this->imagen_url,
            'puntuacion' => $this->puntuacion,
            'creado_en' => $this->created_at->format('Y-m-d H:i:s'),
            'actualizado_en' => $this->updated_at->format('Y-m-d H:i:s'),
        ];
    }
}
