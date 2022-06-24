<?php


namespace YuswaArba\HRManager\Models\Base;


use Illuminate\Database\Eloquent\Model;

class HRBaseModel extends Model
{
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->setConnection(config('hr-manager.db_connection_name'));
    }

    public function isGuarded($key)
    {
        $this->setConnection(config('hr-manager.db_connection_name'));
        parent::isGuarded($key);
    }
}
