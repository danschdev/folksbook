<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    public function __construct(string $content) {
        $this->content = $content;
    }

    public function getContent(): string {
        return $this->content;
    }

    private string $content;
}
