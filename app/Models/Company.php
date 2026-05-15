<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Company extends Model
{
    public function users()
    {
        return $this->hasMany(User::class, 'id_company'); // um pra muitos
    }

    public function queues()
    {
        return $this->hasMany(Queue::class, 'id_company'); // um pra muitos
    }
}
