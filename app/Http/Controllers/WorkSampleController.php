<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Skill;
use App\WorkSample;
use App\Http\Requests;

class WorkSampleController extends Controller
{
  public function index()
  {
    $samples = WorkSample::with(['skill' => function ($query) {
    $query->orderBy('start_date', 'desc');
  }])->get();
    return view('work.index', compact('samples'));
  }

  public function show($id)
  {
    $sample = WorkSample::find($id);
    return view('work.show', compact('sample'));
  }
}
