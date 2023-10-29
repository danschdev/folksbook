<?php

namespace App\Models;

use DateTime;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    public function __construct(string $content) {
        $this->content = $content;
        $this->created = new DateTime();
    }

    public function getContent(): string {
        return $this->content;
    }

    public function getCreated(): DateTime {
        return $this->created;
    }

    private string $content;
    private DateTime $created;
}
