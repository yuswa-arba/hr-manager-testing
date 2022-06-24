<?php

namespace GlobalXtreme\HRManager\Models;

use GlobalXtreme\HRManager\Models\Base\HRBaseModel;

class HREmployee extends HRBaseModel
{
    protected $table = 'employees';
    protected $guarded = ['id'];

}
