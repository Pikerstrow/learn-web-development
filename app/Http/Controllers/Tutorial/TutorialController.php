<?php

namespace App\Http\Controllers\Tutorial;

use App\Http\Resources\Tutorial\TutorialResource;
use App\Models\Tutorial\Tutorial;
use App\Traits\ApiResponses;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;

class TutorialController extends Controller
{
    use ApiResponses;

    protected $resourceClassName           = TutorialResource::class;
    protected $resourceCollectionClassName = TutorialResource::class;


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

    public function show()
    {

    }

    public function destroy()
    {

    }
}
