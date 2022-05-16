<?php

namespace App\Elibs;

class Debug
{
    const DEBUG_ON = 1;

    public static function pushNotification($msg = '', $option = [])
    {
        $msg .= "\n";
        @$_SERVER['REQUEST_URI'] && $msg .= "\nREQUEST_URI: " . !isset($option['REQUEST_URI']) ? @$_SERVER['REQUEST_URI'] : '';
        @$_SERVER['REMOTE_ADDR'] && $msg .= "\nREMOTE_ADDR: " . @$_SERVER['REMOTE_ADDR'];
        @$_SERVER['HTTP_X_ORIGINAL_FORWARDED_FOR'] && $msg .= "\nHTTP_X_ORIGINAL_FORWARDED_FOR: " . @$_SERVER['HTTP_X_ORIGINAL_FORWARDED_FOR'];
        @$_SERVER['HTTP_X_FORWARDED_FOR'] && $msg .= "\nHTTP_X_FORWARDED_FOR: " . @$_SERVER['HTTP_X_FORWARDED_FOR'];
        @$_SERVER['HTTP_X_REAL_IP'] && $msg .= "\nHTTP_X_REAL_IP: " . @$_SERVER['HTTP_X_REAL_IP'];
        @$_SERVER['HTTP_USER_AGENT'] && $msg .= "\n\nHTTP_USER_AGENT: " . @$_SERVER['HTTP_USER_AGENT'];
        @$_SERVER['HTTP_REFERER'] && $msg .= "\nHTTP_REFERER: " . @$_SERVER['HTTP_REFERER'];
        @$_SERVER['SERVER_NAME'] && $msg .= "\nSERVER_NAME: " . @$_SERVER['SERVER_NAME'];
        @$_SERVER['HTTP_HOST'] && $msg .= "\nHTTP_HOST: " . @$_SERVER['HTTP_HOST'];

        $ch  = curl_init();
        $url = "https://api.telegram.org/bot5348481033:AAFliFL4GRLvgED-WnGmh27iwT4k-9hm5OM/sendMessage?chat_id=@handleerrr&text=";
        if (@$option['link_tele']) {
            $url = $option['link_tele'];
        }

        // Set the URL
        curl_setopt($ch, CURLOPT_URL, $url . urlencode($msg));
        // Removes the headers from the output
        curl_setopt($ch, CURLOPT_HEADER, 0);
        // Return the output instead of displaying it directly
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        // Execute the curl session
        curl_exec($ch);
        // Close the curl session
        try {
            curl_close($ch);

        } catch (\Exception $e) {

        }
        // Return the output as a variable
        return true;
    }

}
