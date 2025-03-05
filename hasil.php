<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hasil dari form input nilai sederhana">
    <link rel="icon" type="image/x-icon" href="./img/icon.ico">

    <title>Hasil Penilaian | Form Input Nilai Siswa</title>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="w-full h-screen flex items-center justify-center bg-[#6F7777] font-[Quicksand]">
        <div class="w-full max-w-[500px] rounded-lg shadow-lg overflow-hidden bg-[#F7DEAD] border-2 border-[#F7DEAD]">
            <div class="w-full p-2 bg-[#6F7777] text-[#F7DEAD] text-center text-[2em] font-bold">
                <h1>Hasil Penilaian</h1>
            </div>
            <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $nama = htmlspecialchars($_POST["nama"]);
                    $nilai = intval($_POST["nilai"]);
                    $status = ($nilai >= 70) ? "Lulus" : "Tidak Lulus";
                    $color = ($nilai >= 70) ? "72B896" : "CD4439";

                    echo"<div class='w-full p-4 flex flex-col items-center justify-center text-white text-[1.2em] gap-4 bg-[#$color]'>";
                        echo "<table class='w-full'>";
                            echo "<tbody>";
                                echo "<tr>";
                                    echo "<td class='font-bold'>Nama</td>";
                                    echo "<td class='px-2 text-center'>:</td>";
                                    echo "<td class='w-full line-clamp-1'>$nama</td>";
                                echo "</tr>";
                                echo "<tr>";
                                    echo "<td class='font-bold'>Nilai</td>";
                                    echo "<td class='px-2 text-center'>:</td>";
                                    echo "<td class='w-full'>$nilai</td>";
                                echo "</tr>";
                                echo "<tr>";
                                    echo "<td class='font-bold'>Status</td>";
                                    echo "<td class='px-2 text-center'>:</td>";
                                    echo "<td class='w-full'>$status</td>";
                                echo "</tr>";
                            echo "</tbody>";
                        echo "</table>";
                    echo "</div>";
                } else {
                    echo "<div class='alert alert-danger'>Akses tidak diizinkan!</div>";
                }
            ?>
            <a class="block w-full p-2 rounded-b-md bg-[#6F7777] text-[#F7DEAD] text-center font-semibold cursor-pointer outline-none
                hover:brightness-110 focus:brightness-110 active:brightness-90 transition-all"
                href="form.php">Kembali</a>
        </div>
    </div>
</body>
</html>
