<?php


namespace App\Traits;


use Symfony\Component\HttpFoundation\Response;

trait ApiResponses
{
    protected $errorMessage          = "An error occurred! Please try again later!";
    protected $successCreatedMessage = "Data was created successfully!";
    protected $successUpdateMessage  = "Data was updated successfully!";
    protected $successDestroyMessage = "Data was updated successfully!";
    protected $notFoundMessage       = "Page or requested data not found!";


    public function errorResponse()
    {
        return response()->json([
            "error" => $this->errorMessage
        ], Response::HTTP_INTERNAL_SERVER_ERROR);
    }

    public function notFoundResponse()
    {
        return response()->json([
            "error" => $this->notFoundMessage
        ], Response::HTTP_NOT_FOUND);
    }

    public function destroyedResponse()
    {
        return response()->json([
            "success" => $this->successDestroyMessage
        ], Response::HTTP_OK);
    }

    public function createdResponse($model)
    {
        return response()->json([
            "success" => $this->successCreatedMessage,
            "item"    => new $this->resourceClassName($model)
        ], Response::HTTP_CREATED);
    }

    public function updatedResponse($model)
    {
        return response()->json([
            "success" => $this->successUpdateMessage,
            "item"    => new $this->resourceClassName($model)
        ], Response::HTTP_OK);
    }

    public function indexResponse($models)
    {
        return $this->resourceCollectionClassName::collection($models);
    }

    public function showResponse($model)
    {
        return response()->json([
            new $this->resourceClassName($model)
        ], Response::HTTP_OK);
    }
}
