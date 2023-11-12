<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;

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
        $this->reportable(function (Throwable $e) {
            //
        });
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $e
     * @return \Illuminate\Http\Response
     */
    public function render($request, $e)
    {
        if (! $e instanceof \Illuminate\Validation\ValidationException) {
            if (method_exists($e, 'getStatusCode')) {
                $status = $e->getStatusCode();
                $message = $e->getMessage();
                return response()->json([
                    'status' => $status,
                    'message' => $message,
                ], $status);
            }
            if ($e instanceof \Illuminate\Database\QueryException) {
                if (\Helper::strContains($e->getMessage(), 'SQLSTATE[HY000] [2002]')) {
                    return response()->json([
                        'status' => 500,
                        'message' => 'データベース接続エラー',
                    ], 500);
                }
            }
        }
        return parent::render($request, $e);
    }
}
