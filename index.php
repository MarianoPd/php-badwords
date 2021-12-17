 

<?php 
    // usare la forma http://localhost/php-badwords/?reduct= 
    $paragraph = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam quas voluptatem fugit repellendus iste, excepturi quae dolor fugiat similique repudiandae assumenda neque maiores facere illo temporibus dignissimos, odio saepe laudantium.";

    $toReduct = $_GET['reduct'];
    
    $reductedParagraph = str_replace($toReduct, '***', $paragraph);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-badwords</title>
</head>
<body>
    <h2>Paragrafo: <i><?php echo  $paragraph ?></i> </h2>
    <h2>Lunghezza in caratteri: <i><?php echo strlen($paragraph)?></i></h2>
    <h2>Numero di parole: <i><?php echo str_word_count($paragraph)?></i></h2>
    <h2>Paragrafo censurato: <i><?php echo  $reductedParagraph ?></i> </h2>
    <h2>Lunghezza in caratteri: <i><?php echo strlen($reductedParagraph)?></i></h2>
    <h2>Numero di parole: <i><?php echo str_word_count($reductedParagraph)?></i></h2>

</body>
</html>