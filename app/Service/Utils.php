<?php

namespace App\Service;

class Utils {

    /**
     * @param object $from
     * @param string $to
     * @return mixed
     */
    public function cast($from, $to) {
        $result = new $to;
        foreach (get_object_vars($from) as $name => $value) {
            $result->$name = $value;
        }
        return $result;
    }

    /**
     * @param string $phone
     * @return string
     */
    public function normalizePhone($phone) {
        $phone = preg_replace('![^\d+]!', '', $phone);
        return str_replace('+', '', $phone);
    }

    /**
     * @param string $sum
     * @return int
     */
    public function normalizeSum($sum) {
        return (int)str_replace(' ', '', $sum);
    }
}