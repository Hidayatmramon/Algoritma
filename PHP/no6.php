<!DOCTYPE html>
<html>

<body>
    <h1>Pencarian Juara Kelas</h1>
    <form method="post" action="">
        <?php
        $ts = 15;
        $sj = 0;

        for ($i = 1; $i <= $ts; $i++) {
            echo "<h2>Siswa $i</h2>";
            echo "<label>Nama Siswa:</label>";
            echo "<input type='text' name='nama[]'>";
            "<br>";
            echo "<label>Nilai MTK:</label>";
            echo "<input type='number' name='MTK[]'>";
            "<br>";
            echo "<label>Nilai ING:</label>";
            echo "<input type='number' name='ING[]'>";
            "<br>";
            echo "<label>Nilai IND:</label>";
            echo "<input type='number' name='IND[]'>";
            "<br>";
            echo "<label>Nilai DPK:</label>";
            echo "<input type='number' name='DPK[]'>";
            "<br>";
            echo "<label>Nilai AGM:</label>";
            echo "<input type='number' name='AGAMA[]'>";
            "<br>";
            echo "<label>Kehadiran:</label>";
            echo "<input type='number' name='kehadiran[]'>";
            "<br>";
        }
        ?>
        <input type="submit" name="submit">
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $sj = 0;

        for ($i = 0; $i < $ts; $i++) {
            $t = $_POST['MTK'][$i] + $_POST['ING'][$i] + $_POST['IND'][$i] + $_POST['DPK'][$i] + $_POST['AGAMA'][$i];
            $k = $_POST['kehadiran'][$i];

            if ($t >= 475 && $k == 100) {
                $sj++;
            }
        }

        echo "<h2>Jumlah Siswa Juara: $sj</h2>";
    }
    ?>
</body>

</html>