<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSkillRequest;
use App\Http\Resources\V1\SkillCollection;
use App\Http\Resources\V1\SkillResource;
use App\Models\Skill;

class SkillController extends Controller
{
    public function index()
    {
        return new SkillCollection(Skill::paginate(1));
    }

    public function store(StoreSkillRequest $request)
    {
        Skill::create($request->validated());
        return response()->json([
            'message' => 'Skill created successfully!',
        ]);
    }

    public function show(Skill $skill)
    {
        return new SkillResource($skill);
    }

    public function update(StoreSkillRequest $request, Skill $skill)
    {
        $skill->update($request->all());
        return response()->json([
            'message' => 'Skill updated successfully!',
        ]);
    }

    public function destroy(Skill $skill)
    {
        $skill->delete();
        return response()->json([
            'message' => 'Skill deleted successfully!',
        ]);
    }
}
