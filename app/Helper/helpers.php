<?php
if (!function_exists('setActive')) {
    function setActive($name)
    {
        $url = explode("/", url()->current());
        if (empty($url[3]) && $name == "index") {
            return "active";
        } elseif (!empty($url[3]) && $url[3] == $name) {
            return "active";
        } else {
            return "";
        }
    }
}

if (!function_exists('increaseHK')) {
    function increaseHK($angka)
    {
        if ($angka >= 9) {
            return 0;
        } else {
            return $angka + 1;
        }
    }
}

if (!function_exists('twoDigitConvert')) {
    function twoDigitConvert($angka)
    {
        $sumDigitToArray  = array_map('intval', str_split($angka)); //String dipecah jadi array
        $finalTotal = array_sum($sumDigitToArray); //Totalkan isi array
        return $finalTotal;
    }
}

if (!function_exists('hkCalculateTwoDigits')) {
    function hkCalculateTwoDigits($last, $beforeLast)
    {
        $f1 = $last + $beforeLast;
        $convert = twoDigitConvert($f1);
        $plusMinusDigit = twoDigitConvert($convert + 4);

        // Kalukasi Pengurangan
        if ($plusMinusDigit == 0) {
            $pengurangan = 9;
        } else {
            $pengurangan = $plusMinusDigit - 1;
        }

        // Kalukasi Penambahan
        $penambahan = twoDigitConvert($plusMinusDigit + 3);

        //Combine result
        $result = $pengurangan . $penambahan;

        return $result;
    }
}
