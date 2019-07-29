<?php

namespace App\Http\Controllers\Tutorial;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Tutorial\Tutorial;
use App\Models\Tutorial\TutorialSection;
use App\Traits\ApiResponses;
use App\Http\Resources\Tutorial\LessonsResource;
use App\Http\Resources\Tutorial\LessonsListCollection;
use Illuminate\Support\Facades\Log;
use App\Models\Tutorial\Lesson;


class LessonController extends Controller
{
    use ApiResponses;

    protected $resourceClassName           = LessonsResource::class;
    protected $resourceCollectionClassName = LessonsListCollection::class;

    public function store()
    {

    }

    public function update()
    {

    }

    public function index(Tutorial $tutorial, TutorialSection $section)
    {
        try {
            $lessons = $tutorial->lessons()->orderBy("id", "DESC")->get();
            return $this->indexResponse($lessons);
        } catch (\Throwable $e) {
            Log::error($e->getMessage() . "|" . $e->getFile());
            return $this->errorResponse();
        }
    }

    public function show(Tutorial $tutorial, TutorialSection $section, Lesson $lesson)
    {
        try {
            return $this->showResponse($lesson);
        } catch(\Throwable $e){
            Log::error($e->getMessage() . "|" . $e->getFile());
            return $this->errorResponse();
        }
    }

    public function destroy()
    {

    }
}
