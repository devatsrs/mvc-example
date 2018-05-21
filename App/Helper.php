<?php
/**
 * Created by PhpStorm.
 * User: deven
 * Date: 16/02/2018
 * Time: 11:49 AM
 */

namespace App;


class Helper
{
    const ResponseSuccess = 1;
    const ResponseError = 2;

    public static function validateDate($date, $format = 'Y-m-d H:i:s')
    {
        $d = \DateTime::createFromFormat($format, $date);
        return $d && $d->format($format) == $date;
    }

    public static function dateDiffInDays($date1,$date2, $format = 'Y-m-d H:i:s')
    {
      /*  echo $date1;
        echo '<br>'. $date2;
        exit;
    */
        $d1 = new \DateTime($date1);
        $d2 = new \DateTime($date2);

        return $d1->diff($d2)->days;

    }

    public static function response($result ,$type){

        if ($type == self::ResponseError){

            $response["status"] = "failed";
            $response["message"] = $result;

        } else {

            $response["status"] = "success";
            $response["data"] = $result;

        }

        echo json_encode($response);

        return;

    }
}