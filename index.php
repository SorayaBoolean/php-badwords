<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

        $nome=$_POST ('name');
        $nome=$_POST ('lastname');

    ?>

    <h1>Ecco qui il testo</h1>
    <h3>(con la parola da censurare)</h3>

    <p>Lorem ipsum dolor sit amet <? echo str_replace('lastname','*****',$cognome) ?>, adipisicing elit. Praesentium velit modi earum, libero ex voluptates similique harum temporibus unde nemo illum cupiditate, beatae doloremque officia? Repellendus est blanditiis magni voluptatibus necessitatibus consectetur ipsa consequatur beatae placeat! Voluptas asperiores necessitatibus totam neque eum dolore omnis iusto ratione ipsam at eveniet soluta, consectetur, delectus ipsa dignissimos culpa possimus sit quaerat. Repellat ut consequatur corporis repellendus praesentium exercitationem aut dolorem tenetur iste vitae! Beatae ex qui nam magni. Animi voluptates debitis accusamus dolorem qui, possimus beatae vero ipsam exercitationem nesciunt nemo quidem? Amet quia neque perferendis veritatis architecto itaque! Pariatur est qui necessitatibus?</p>
    
</body>
</html>