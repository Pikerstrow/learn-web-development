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
        $limit = $request->has("limit") ? $request->get("limit") : 2;

        try {
            $tutorials = Tutorial::orderBy("id", "DESC")->paginate($limit);
            return $this->indexResponse($tutorials);
        } catch (\Throwable $e) {
            Log::error($e->getMessage() . "|" . $e->getFile());
            return $this->errorResponse();
        }
    }

    public function show(Tutorial $tutorial)
    {
        if(!$tutorial)
            return $this->notFoundResponse();
        else
            return new TutorialInfoResource($tutorial);
    }


    public function destroy()
    {

    }
}
