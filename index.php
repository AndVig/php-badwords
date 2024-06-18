<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
</head>
<body>
    <main>
        <section>
            <h1>
                <?php echo ucwords('paragrafo originale') ?>
            </h1>
            <p><?php echo $_POST['paragraph'] ?></p>
            <small class="length"><?php echo ucfirst('lunghezza testo: ') ?><?php echo strlen($_POST['paragraph']) ?></small>
        </section>
        <section>
            <h1>
                <?php echo ucwords('paragrafo censurato') ?>
            </h1>
            <p><?php echo str_replace($_POST['bad_word'], '***', $_POST['paragraph']) ?></p>
        </section>
    </main>
</body>
</html>