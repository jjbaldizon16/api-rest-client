<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>

  

<?php



$curl = curl_init();

curl_setopt_array($curl, [
	CURLOPT_URL => "https://website-contacts-scraper.p.rapidapi.com/scrape-contacts?query=https://www.kolbi1155.com/puntarenas/abogados/",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => [
		"X-RapidAPI-Host: website-contacts-scraper.p.rapidapi.com",
		"X-RapidAPI-Key: f88cd05e66msh21ce3c671fbe52fp12b3efjsnfbc48abaae7b"
	],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
	echo $response;
}

/*$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://website-contacts-scraper.p.rapidapi.com/scrape-contacts?query=wsgr.com',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
  CURLOPT_POSTFIELDS => 'titulo=Master%20en%20sexo&descripcion=Especializado%20con%20mujeres%20cuarentonas&instructor=Josue%20Baldizon%20Rivas0101&imagen=futbol.jpg&precio=1500',
  CURLOPT_HTTPHEADER => array(
    'Authorization: Basic YTJhYTA3YWFmYXJ0d2V0c2RBRDUyMzU2RkVER2VRek0xM1FHQU9rQ1lNTXh1dC5FekNBZE82UVZBZjN5Om8yYW8wN29hZmFydHdldHNkQUQ1MjM1NkZFREdlM2gwR1NXWTZQaG1QM1NSekxjdDNja0hiMVFTZ0FUeQ==',
    'Content-Type: application/x-www-form-urlencoded'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
//echo $response;

$json = json_decode($response, true);*/



   ?>

<h1>API Restful Client</h1>

<div class="container-fluid">



<div class="container">

<div class="row">




<!--<?php // foreach($json["detalle"] as $key => $value): ?>


       <div class="col-3">

        <div class="card">

          <div class="card-header">

             <img src="<?php // echo $value["imagen"]?>" alt="" class="img-fluid">

          </div>
          <div class="card-body">

              <h4><?php // echo $value["titulo"]?></h4>
              <p><?php // echo $value["descripcion"] ?></p>
              <span class="badge badge-secondary" style="color: black !important;"> <?php // echo $value["instructor"]?> </span>

          </div>
          <div class="card-footer">

               <span class="badge badge-danger" style="color: black !important;"><?php // echo $value["precio"]?></span>

          </div>

        </div>

        </div>
    



<?php // endforeach ?>-->



</div>

</div>

</div>


    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>


</html>

<!--Front End Aplication to consume the api-rest-masterclass api, the Front End is builded on PHP-->

