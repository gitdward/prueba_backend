<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class Handler extends ExceptionHandler
{
    /**
     * The list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     */
    public function register(): void
    {
        $this->renderable(function (NotFoundHttpException $e, $request) {
            if ($request->is('api/*')) {
                if ($e->getPrevious() instanceof ModelNotFoundException) {
                    return response()->json([
                        'status' => 204,
                        'message' => 'Data not found'
                    ], 200);
                }
                return response()->json([
                    'status' => 404,
                    'message' => 'Invalid url'
                ], 404);
            } else {
                return response()->json([
                    'status' => 404,
                    'message' => 'Invalid url'
                ], 404);
            }
        });
    }
}
