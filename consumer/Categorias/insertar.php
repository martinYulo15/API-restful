<?php


if ($_SERVER["REQUEST_METHOD"]=="POST")
	 {
    $cat_nom=$_POST['cat_nom'];
    $cat_obs=$_POST['cat_obs'];

    $in = json_encode(array("cat_nom"=>$cat_nom, "cat_obs"=>$cat_obs));


$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'http://127.0.0.1/parcial2/api_restful/controllers/categoria.php?op=insert',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => $in,
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/json'
  ),
));

$response = curl_exec($curl);

curl_close($curl);

   
?>

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
    
    if ($response) {
        echo "<script>
                    alert('Registro agregado');
                    location.href='administrarCategoria.php';
                </script>";
     } else {
        echo "<script>
                    alert('Error, Intente de Nuevo');
                    location.href='nuevoCategoria.php';
            </script>";
     }
  
    }
    ?>
</body>
</html>