<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TimeTable extends Model
{
    public function group(): BelongsTo
    {
        return $this->belongsTo(Group::class, 'group_id', 'id');
    }
    

    public function room(): BelongsTo
    {
        return $this->belongsTo(Room::class, 'room_id', 'id');
    }


    public function science(): BelongsTo
    {
        return $this->belongsTo(Science::class, 'science_id', 'id');
    }


    public function teacher(): BelongsTo
    {
        return $this->belongsTo(Teacher::class, 'teacher_id', 'id');
    }


    public function time(): BelongsTo
    {
        return $this->belongsTo(Time::class, 'time_id', 'id');
    }

    public function day(): BelongsTo
    {
        return $this->belongsTo(DayTable::class, 'day_id', 'id');
    }

}
