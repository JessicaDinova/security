<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscriber extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'surname',
        'moneySpent',
    ];

    public function premiumSubscriber() {
        if($this->moneySpent < 50) {
            return false;
        }
        return true;
    }
}
