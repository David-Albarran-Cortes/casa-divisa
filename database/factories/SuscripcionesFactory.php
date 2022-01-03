<?php

namespace Database\Factories;

use App\Models\Suscripciones;
use Illuminate\Database\Eloquent\Factories\Factory;
 
use App\Models\User;

class SuscripcionesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Suscripciones::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        
        return [
            
            'suscripcion' => $this->faker->unique()->safeEmail(),
             
        ];
    }
}
