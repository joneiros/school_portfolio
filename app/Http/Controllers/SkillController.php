<?php

namespace App\Http\Controllers;

use App\WorkSample;
use Illuminate\Http\Request;
use App\Skill;
use App\Http\Requests;

class SkillController extends Controller
{
  public function index()
  {
    $skills = Skill::orderBy('proficiency', 'desc')->get();
    return view('skill.index', compact('skills'));
  }

  public function show($id)
  {
    $samples = WorkSample::where('skill_id', $id)
      ->orderBy('start_date', 'desc')
      ->get();
    $skill = Skill::find($id);
    return view('work.index', compact('samples', 'skill'));

  }


}
