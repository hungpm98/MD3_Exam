<?php
namespace App\Repositories;

use App\Models\Dealer;
use Illuminate\Support\Facades\DB;
use App\Repositories\BaseRepository;

class DealerRepository extends BaseRepository{

    public function getTable()
    {
        return 'dealers';
    }

    public function getAll()
    {
        return DB::table($this->table)
        ->join('status','dealers.status_id','=','status.id')
        ->select('dealers.*','status.name as statusName')
        ->get();
    }

    public function create($request){
        $data = $request->only('code','name','phone','email','address','managerName','status_id');
        DB::table($this->table)->insert($data);
    }
    public function update($request,$id){
        $data = $request->only('code','name','phone','email','address','managerName','status_id');
        DB::table($this->table)->where('id',$id)->update($data);
    }

    public function search($request){
        $search  = $request->input('search');
        return Dealer::query()->join('status','dealers.status_id','=','status.id')
        ->where('dealers.name','LIKE',"%{$search}%")
        ->select('dealers.*','status.name as statusName')
        ->get();
    }

}



