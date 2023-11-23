<?php
class Persegi {
    public function keliling($sisi) {
        $keliling = $sisi * 4;
        echo "Keliling Persegi dengan sisi" . $sisi . "adalah" . $keliling;
    }

    public function luas($sisi) {
        $luas = $sisi * $sisi;
        echo "Luas Persegi dengan sisi" . $sisi . "adalah" .  $luas;
    }
}
?>