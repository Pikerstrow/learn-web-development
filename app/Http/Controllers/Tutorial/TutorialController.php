<?php

namespace App\Http\Controllers\Tutorial;

use App\Http\Resources\Tutorial\TutorialInfoResource;
use App\Models\Tutorial\Tutorial;
use App\Traits\ApiResponses;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;

class TutorialController extends Controller
{
    use ApiResponses;

    protected $resourceClassName           = TutorialInfoResource::class;
    protected $resourceCollectionClassName = TutorialInfoResource::class;


    public function __construct()
    {
        TutorialInfoResource::withoutWrapping();
    }


    public function store()
    {

    }

    public function update()
    {

    }

    public function index(Request $request)
    {
        $limit = $request->has("limit") ? $request->get("limit") : 6;

        try {
            $tutorials = Tutorial::orderBy("id", "DESC")->paginate($limit);
            return $this->indexResponse($tutorials);
        } catch (\Throwable $e) {
            Log::error($e->getMessage() . "|" . $e->getFile());
            return $this->errorResponse();
        }
    }

    public function show(string $slug)
    {
        if(!$slug) {
            return $this->notFoundResponse();
        } else {
            $tutorial = Tutorial::with(['sections' => function($query){
                $query->with('lessons');
            }])->where('slug', '=', $slug)->firstOrFail();
            return new TutorialInfoResource($tutorial);
        }
    }


    public function destroy()
    {

    }
}
