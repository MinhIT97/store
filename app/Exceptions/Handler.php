<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Session\TokenMismatchException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Telegram\Bot\Laravel\Facades\Telegram;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     *
     * @param  \Exception  $exception
     * @return void
     */

    static $__countEx = false;
    public function report(Exception $exception)
    {
        if ($exception instanceof TokenMismatchException) {
            self::$__countEx = true;

        }

        $statusCode = 0;
        if ($exception instanceof NotFoundHttpException) {
            $statusCode = $exception->getStatusCode();
        }
        $link = '';
        try {
            $link = (url()->full());
        } catch (\Exception $e) {

        }

        if (!self::$__countEx && !in_array($statusCode, [404, 303])) { //mã 300 là mã custom mà crm sinh ra ví dụ trong case get curent project
            self::$__countEx = true;
            $msg             = "Link issues: " . $link;
            $msg .= "\nMessage: " . $exception->getMessage();
            $msg .= "\nStatusCode: " . $statusCode;
            $msg .= "\nFile: " . $exception->getFile() . ':' . $exception->getLine();
            $traces = $exception->getTrace();

            $msg .= collect($traces)->filter(function ($item) {
                return strpos(@$item['file'], '\app\Http\\') !== false || strpos(@$item['file'], '/app/Http') !== false;
            })->map(function ($item) {
                return "\nFile: " . @$item['file'] . ':' . @$item['line'];

            })->implode('');

            Telegram::sendMessage([
                'chat_id'    => env('TELEGRAM_CHANNEL_ID', '-1001500154812'),
                'parse_mode' => 'HTML',
                'text'       => $msg,
            ]);

        }
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $exception
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $exception)
    {
        return parent::render($request, $exception);
    }
}
