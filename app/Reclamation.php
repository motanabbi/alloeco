<?php

namespace allov1;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Reclamation extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
}
