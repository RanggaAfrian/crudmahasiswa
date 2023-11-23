<?php
class lib_tugas {
    public function totalPayment($jenis, $total, $member = false) {
        $harga = 0;
        if ($jenis == "anak") {
            $harga = 75000; 
            if ($total >= 2) {
                $harga = $harga * $total * 0.8; 
            }
        }
        elseif ($jenis == "pria") {
            $harga = 350000;  
            if ($member) {
                $harga = $harga * $total * 0.65;  
            }
        }
        elseif ($jenis == "wanita") {
            $harga = 140000; 
            if ($total >= 2) {
                $harga1 = 140000; 
                $harga2 = 270000;  
                $harga = max($harga1,$harga2);
            }
        }
        return $harga;
    }
}
