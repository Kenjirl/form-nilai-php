<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Form input nilai sederhana">
    <link rel="icon" type="image/x-icon" href="./img/icon.ico">

    <title>Form Input Nilai Siswa</title>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="w-full h-screen flex items-center justify-center bg-[#6F7777] font-[Quicksand]">
        <div class="w-full max-w-[500px] rounded-lg shadow-lg overflow-hidden bg-[#F7DEAD] border-2 border-[#F7DEAD]">
            <div class="w-full p-2 bg-[#6F7777] text-[#F7DEAD] text-center text-[2em] font-bold">
                <h1>Input Nilai Siswa</h1>
            </div>
            <form class="w-full" action="hasil.php" method="POST">
                <div class="w-full p-4 flex flex-col items-center justify-center gap-4">
                    <div class="w-full flex flex-col items-start justify-start gap-2">
                        <label class="w-full font-semibold text-[#6F7777]"
                            for="nama" class="form-label">Nama Siswa</label>
                        <input class="w-full p-2 outline-[#6F7777] border border-[#6F7777] rounded-md"
                            type="text" class="form-control" id="nama" name="nama" placeholder="nama siswa" required autofocus>
                    </div>
                    <div class="w-full flex flex-col items-start justify-start gap-2">
                        <label class="w-full font-semibold text-[#6F7777]"
                            for="nilai" class="form-label">Nilai Siswa (0-100)</label>
                        <input class="w-full p-2 outline-[#6F7777] border border-[#6F7777] rounded-md"
                            type="number" class="form-control" id="nilai" name="nilai" placeholder="80" min="0" max="100" required>
                    </div>
                    <button class="w-full p-2 rounded-md bg-[#6F7777] text-[#F7DEAD] font-semibold cursor-pointer outline-none
                        hover:brightness-110 focus:brightness-110 active:brightness-90 transition-all"
                        type="submit">Kirim</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
