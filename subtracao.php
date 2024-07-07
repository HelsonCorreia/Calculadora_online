<?php 
$n1=$_GET['n1']??0;
$n2=$_GET['n2']??0;
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subtraindo Números</title>
    <link rel="stylesheet" href="style.css">
    <style>
          main{
            margin-top: 40px;
            margin-bottom: 30px;
           
        }
        main h1{
            margin-top: 25px;
            margin-bottom: 30px;}
            input{
            display: flex;
            flex-direction: column;
            margin-bottom: 15px;
            width: 50%;
            height: 25px;
            margin-left: 125px;
        }
        label{
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            font-size: 1.1em;
            text-align: center;
            display: block;
            margin: auto;
            margin-bottom: 15px;}
            section{
            border: 1px rgba(0, 0, 0, 0.397) solid;
            border-radius: 20px;
            display: block;
            margin: auto;
            background-color: white;
            width: 500px;
            height: 100px;
        }
        p{
          margin-top: 40px;
        }
    </style>
</head>
<body>
    <main>
    <h1>Subtraindo</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="n1">Digite número 1:</label>
            <input type="number" name="n1" id="" placeholder="<?=$n1?>">
            <label for="n2">Digite número 2:</label>
            <input type="number" name="n2" id="" placeholder="<?=$n2?>">
            <input type="submit" value="Calcular" class="calcular">
        </form>
            <button onclick="javascript:document.location='index.html'" class="voltar">Voltar</button>
</main>
</body>
</html>

<?php 
if(empty($n1)|| empty($n2)){
    die('<p style="text-align: center; font: size 1em;">Preencha os Campos!</p>');
}
else{ 
$resposta=$n1-$n2;
}

?>

<section>
        <p><?="A subtração de $n1 e $n2 é: ".$resposta?></p>
    </section>
    <footer>&copy; Criado pelo Helson Correia</footer>