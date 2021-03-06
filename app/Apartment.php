<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Apartment extends Model
{
    protected $table = 'apartments';

    public function user() {
      return $this -> belongsTo(User::class);
    }

    public function messages() {
      return $this -> hasMany(Message::class);
    }

    public function partnerships() {
      return $this -> hasMany(Partnership::class);
    }

    public function sessions() {
      return $this->hasMany(Views::class);
    }

    public function services() {
      return $this -> belongsToMany(Service::class);
    }



}
