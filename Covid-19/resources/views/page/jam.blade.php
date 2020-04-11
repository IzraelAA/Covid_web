<html>

<head>
    
    <style>
        #jamupdate{
            color:red;
        }
    </style>
    <script>
        var refreshId = setInterval(function() {
            $('#jamupdate').load('');
        }, 500);
    </script>
</head>

<body>
    <div id="jamupdate">
        <?php
        header('Access-Control-Allow-Origin: *');
        date_default_timezone_set("Asia/Jakarta");  // untuk mengubah zona waktu
        $arrDay = array("Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu");
        $day = date("w"); //0-6 of day

        echo date("H:i:s") . "&nbsp"; // untuk menampilkan jam
        echo   $arrDay[$day] . "&nbsp";
        echo  date("d-F-Y");
        ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
</body>

</html>