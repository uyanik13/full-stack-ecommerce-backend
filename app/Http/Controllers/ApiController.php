<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;

abstract class ApiController extends Controller
{
    protected function jsonResponse(int $status, string $message = '', array $errors = []): JsonResponse
    {
        $response = [
            'status' => $status,
        ];

        if ($message) {
            $response['message'] = $message;
        }

        if ($errors) {
            $response['errors'] = $errors;
        }

        return response()->json($response, $status);
    }

    public function responseSuccess(string $message = 'Success'): JsonResponse
    {
        return $this->jsonResponse(200, $message);
    }

    public function responseResourceUpdated(string $message = 'Resource updated'): JsonResponse
    {
        return $this->jsonResponse(200, $message);
    }

    public function responseResourceCreated(string $message = 'Resource created'): JsonResponse
    {
        return $this->jsonResponse(201, $message);
    }

    public function responseResourceDeleted(string $message = 'Resource deleted'): JsonResponse
    {
        return $this->jsonResponse(204, $message);
    }

    public function responseUnauthorized(array $errors = ['UnAuthorized']): JsonResponse
    {
        return $this->jsonResponse(401, '', $errors);
    }

    public function responseUnprocessable(array $errors): JsonResponse
    {
        return $this->jsonResponse(422, '', $errors);
    }

    public function responseServerError(array $errors = ['Server error']): JsonResponse
    {
        return $this->jsonResponse(500, '', $errors);
    }
}
