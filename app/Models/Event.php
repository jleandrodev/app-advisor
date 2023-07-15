<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'notes', 'customer_id', 'start_date', 'end_date', 'start_hour', 'end_hour', 'employees', 'file', 'guests'];

    public function employees()
    {
        return $this->belongsToMany(Employee::class, 'employee_event', 'employee_id', 'event_id');
    }
}
