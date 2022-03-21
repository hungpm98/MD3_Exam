<?php

namespace App\Http\Controllers;

use App\Repositories\DealerRepository;
use Illuminate\Http\Request;

class DealerController extends Controller
{
    public $dealerRepository;

    public function __construct(DealerRepository $dealerRepository)
    {
        $this->dealerRepository = $dealerRepository;
    }

    public function index()
    {
        $dealers = $this->dealerRepository->getAll();
        // dd($dealers);
        return view('dealers.index',compact('dealers'));
    }


    public function create()
    {
        return view('dealers.create');
    }


    public function store(Request $request)
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
        $delaers = $this->dealerRepository->getById($id);
        return view('dealers.update',compact('dealers'));
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
}
