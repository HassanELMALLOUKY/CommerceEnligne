<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AdressesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {   $professinal=$this->faker->boolean();
        if($professinal){
            $name=$this->faker->name();
            $firstname=$this->faker->firstname();
        }
        else{
            $name=null; $firstname=null;
        }
        return [
            'name'=>$name,
            'firstname'=>$firstname,
            'professional'=>$professinal,
            'civility' =>$this->faker->boolean()?'Mme':'M',
            'company' => $professinal?$this->faker->company():null,
            'adresse' => $this->faker->streetAddress,
            'adressbis'=> $this->faker->boolean()?$this->faker->secondaryAdress:null,
             'bp'=>$this->faker->boolean()?$this->faker->numberBetween(100,90000):null,
             'postal' => $this->faker->numberBetween(10000,100000),
             'city'=>$this->faker->city(),
             'country_id' => mt_rand(1,4),
             'phone' =>$this->faker->numberBetween(1111111,9999999),


        ];
    }
}
