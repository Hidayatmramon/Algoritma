<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 12</title>
    <style>
        body {
            background-color: #fafafa;
            font-family: sans-serif;
        }

        h1 {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .container {
            max-width: 500px;
            margin: 0 auto;
        }

        .card {
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
            padding: 20px;
        }

        .card-body {
            text-align: center;
        }

        .input-group {
            margin-bottom: 10px;
        }

        .form-control {
            border-radius: 5px;
            padding: 10px 15px;
            font-size: 14px;
        }

        .btn {
            border-radius: 5px;
            padding: 10px 15px;
            font-size: 14px;
            color: #fff;
            background-color: #337ab7;
            border: none;
        }

        .btn:hover {
            background-color: #285e8e;
        }

        .text-elegant {
            font-family: sans-serif;
            font-weight: bold;
            color: #337ab7;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h1 class="text-elegant">Data Waktu Setelah Ditambahkan 1 Detik</h1>
                <form action="" method="post">
                    <div class="input-group">
                        <label for="h">Input Hours : </label>
                        <input type="number" name="h" id="h" class="form-control">
                    </div>
                    <div class="input-group">
                        <label for="m">Input Minute : </label>
                        <input type="number" name="m" id="m" class="form-control">
                    </div>
                    <div class="input-group">
                        <label for="s">Input Second : </label>
                        <input type="number" name="s" id="s" class="form-control">
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Kirim!</button>
                </form>
                <p class="text-elegant">
                    <?php

                        if (isset($_POST['submit'])) {
                            $hh = $_POST['h'];
                            $mm = $_POST['m'];
                            $ss = $_POST['s'];

                            $ss += 1;

                            if($ss >= 60){
                                $mm += 1;
                                $ss = 00;
                            }

                            if($mm >= 60){
                                $hh += 1;
                                $mm = 00;
                                $ss = 00;
                            }

                            if($hh >= 24){
                                $hh = 00;
                                $mm = 00;
                                $ss = 00;
                            }

                            echo $hh.":".$mm.":".$ss;


                        }

                    ?>
                </p>
            </div>
        </div>
    </div>
</body>
</html>
