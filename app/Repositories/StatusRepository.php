<?php
namespace App\Repositories;

use App\Models\Status;

class StatusRepository extends BaseRepository{

    public function getTable()
    {
        return 'status';
    }

    public function getAll()
    {
        return Status::all();
    }


}



