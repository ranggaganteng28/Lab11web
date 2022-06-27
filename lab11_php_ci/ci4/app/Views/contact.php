<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $title; ?></title>
</head>
<body>
    <?= $this->include('template/header'); ?>
    
    <div id="c-kontak">
        <div id="h-kontak">
            <h2>Kontak saya</h2>
        </div>
        <section id="form-kontak">
            <form action="#">
                <input type="text" id="form-isi" placeholder="Nama">
                <input type="email" id="form-isi" placeholder="Email">
                <textarea name="" id="form-isi" cols="30" rows="10" placeholder="Pesan"></textarea>
                <button>Kirim</button>
            </form>
        </section>
    </div>

    <?= $this->include('template/footer'); ?>
</body>
</html>