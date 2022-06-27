<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $title; ?></title>
</head>
<body>
    <?= $this->include('template/header'); ?>

    <section id="about">
        <div class="bio">
            <img src="rangga.jpeg" alt="" >
            <h2>Rangga Saputra</h2>
            <p class="p-bio">Perkenalkan saya Rangga Saputra, saya sedang belajar memahami HTML, CSS, dan JS</p>
        </div>
    </section>

    <?= $this->include('template/footer'); ?>
</body>
</html>