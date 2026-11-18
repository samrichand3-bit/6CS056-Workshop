<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
        'date_of_birth',
    ];

    protected function casts(): array
    {
        return [
            'date_of_birth' => 'date',
        ];
    }

    // Virtual attribute, so $student->age works without an age column.
    protected function age(): Attribute
    {
        return Attribute::get(fn () => $this->date_of_birth?->age);
    }
}
