<?php
$wordToEliminate = $_POST["wordToEliminate"];
$textToCensure = $_POST["textToCensure"];



function filterText ($txt,$word){
    $explodeTextList = explode(" ",$txt);
    for($i=0;$i<count($explodeTextList);$i++){
        if($explodeTextList[$i]==$word){
            $explodeTextList[$i] = "***";
        }
    
    }
    $filteredTest=implode(" ",$explodeTextList);
    return $filteredTest;
    
    


}

$filteredTest=filterText($textToCensure,$wordToEliminate)




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
    <div class="container">
        <div class="row align-items-center flex-column">
            <div class="col-6">
                <div><span class="fw-bold">Testo inserito:</span> <?php echo $textToCensure ?></div>
                <div><span class="fw-bold">lunghezza:</span> <?php echo strlen($textToCensure) ?></div>     
            </div>
            <div class="col-6">
                <div><span class="fw-bold">Testo censurato:</span> <?php echo $filteredTest  ?></div>
                <div><span class="fw-bold">lunghezza:</span> <?php echo strlen($filteredTest) ?></div>     
            </div>
        </div>
    </div>
    
</body>
</html>