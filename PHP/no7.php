<?php 
$juara = 0;
$js = [];
for ($i = 1; $i <= 2; $i++) {
    echo "Siswa ke-$i\n";

    $nama = readline("Nama: ");
    $mtk = (int)readline("Mtk: ");
    $dpk = (int)readline("DPK: ");
    $ing = (int)readline("Ingg: ");
    $agama = (int)readline("Agama: ");
    $indo = (int)readline("Indo: ");
    $kehadiran = (int)readline("Kehadiran: ");
    
    echo $total = $mtk + $dpk + $ing + $agama + $indo;

    if ($kehadiran != 100) {
        continue;
    }

    if ($total < 475) {
        continue;
    }

    if ($total > $juara) {
        $juara = $total;
        $js = [
            'nama' => $nama,
            'total_nilai' => $total
        ];
    }
}

if ($juara > 0) {
    echo "\nJuara kelas: " . $js['nama'] . " dengan total nilai " . $js['total_nilai'] . "\n";
} else {
    echo "Tidak ada siswa yang memenuhi kriteria\n";
}
?>