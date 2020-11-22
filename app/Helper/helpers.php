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

if (!function_exists('increaseHKCondition')) {
    function increaseHKCondition($nomor, $condition = null)
    {
        if ($nomor >= 0 && $condition == "first") {
            return $nomor;
        } else if ($nomor == 9 && $condition === null) {
            return 0;
        } else if ($nomor == 0 && $condition === null) {
            return $nomor + 1;
        } else if ($nomor > 0 && $condition === null) {
            return $nomor + 1;
        } else if ($nomor > 0 && $condition == "first") {
            return $nomor;
        } else {
            logger("Kemungkinan Fail" . $nomor . " | " . $condition);
            return $nomor;
        }
    }
}

if (!function_exists('ganjilGenap')) {
    function ganjilGenap($bilangan)
    {
        if (($bilangan % 2) == 0) {
            return "genap";
        } else {
            return "ganjil";
        }
    }
}

if (!function_exists('bbfsHongkong')) {
    function bbfsHongkong($second, $third)
    {
        $f1 = $second + $third;
        $convert = twoDigitConvert($f1);

        $arr = [];

        for ($i = 0; $i <= 9; $i++) {
            if (empty($arr)) {
                array_push($arr, increaseHKCondition($convert, "first"));
            } else {
                array_push($arr, increaseHKCondition($arr[$i - 1]));
            }
        }

        if (ganjilGenap($convert) == "ganjil") {
            unset($arr[0]);
            unset($arr[1]);
            unset($arr[5]);
        } else {
            unset($arr[1]);
            unset($arr[2]);
            unset($arr[5]);
        }

        $output = implode("", $arr);

        return $output;
    }
}
