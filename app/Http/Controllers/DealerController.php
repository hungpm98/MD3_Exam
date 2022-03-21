<?php

namespace App\Http\Controllers;

use App\Http\Requests\DealerRequest;
use App\Repositories\DealerRepository;
use App\Repositories\StatusRepository;
use Illuminate\Http\Request;

class DealerController extends Controller
{
    public $dealerRepository;
    public $statusRepository;

    public function __construct(DealerRepository $dealerRepository,
                                StatusRepository $statusRepository

    )
    {
        $this->dealerRepository = $dealerRepository;
        $this->statusRepository = $statusRepository;
    }

    public function index()
    {
        $dealers = $this->dealerRepository->getAll();
        // dd($dealers);
        return view('dealers.index',compact('dealers'));
    }


    public function create()
    {
        $status = $this->statusRepository->getAll();
        return view('dealers.create',compact('status'));
    }


    public function store(DealerRequest $request)
    {

        $this->dealerRepository->create($request);
        return redirect()->route('dealers.index');

    }


    public function show($id)
    {
        $delaers = $this->dealerRepository->getById($id);

    }


    public function edit($id)
    {
        $dealers = $this->dealerRepository->getById($id);
        $status = $this->statusRepository->getAll();
        return view('dealers.update',compact('dealers','status'));
    }

    public function update(Request $request,$id){
        $this->dealerRepository->update($request,$id);
        return redirect()->route('dealers.index');
    }


    public function destroy($id)
    {
        $this->dealerRepository->deleteById($id);
        return redirect()->route('dealers.index');
    }
    public function search(Request $request){
      $dealers =  $this->dealerRepository->search($request);
        return view('dealers.index',compact('dealers'));

    }
}
