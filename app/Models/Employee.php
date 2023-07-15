<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    /**
     * Defino o que vai ser permitido
     */
    protected $fillable = ['name', 'cel', 'email'];

    /**
     * Define a relação com eventos
     *
     *
     */
    public function events()
    {
        return $this->belongsToMany(Event::class, 'employee_event', 'employee_id', 'event_id');
    }
}
