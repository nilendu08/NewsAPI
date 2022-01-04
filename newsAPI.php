<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<style type="text/css">
  .card{
    box-shadow: 1px 3px 5px 1px;
  }
</style>
</head>
<body>
  
  <div class="collapse" id="navbarToggleExternalContent">
  <div class="bg-dark p-4">
    <h5 class="text-white h4">Categories</h5>
    <span class="text-muted">
      <button type="button" class="btn btn-secondary">Business</button>
      <button type="button" class="btn btn-secondary">Entertainment</button>
      <button type="button" class="btn btn-secondary">General</button>
      <button type="button" class="btn btn-secondary">Health Science</button>
      <button type="button" class="btn btn-secondary">Sports</button>
      <button type="button" class="btn btn-secondary">Technology</button>
    </span>
  </div>
</div>
<nav class="navbar navbar-dark bg-dark">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
      <h5 class="text-white h4">NEWS INDIA</h5>

  </div>
</nav>

<?php 
  
  $api= 'https://newsapi.org/v2/top-headlines?country=in&apiKey=9ce5fc846a2b442dbf32c4045b0b6bc6';
  $response= file_get_contents($api);
  $news= json_decode($response);
  //print_r($news);

?>

<?php 
foreach ($news->articles as $data) {?>

  <div class="card mb-3" style="max-width: 740px; margin-left: 370px; margin-top: 40px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="<?php echo $data->urlToImage;?>" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><?php echo $data->title; ?></h5>
        <p><b>Short</b> by<span><?php echo $data->author; ?></span><span><?php echo $data->publishedAt; ?></span></p>
        <p class="card-text"><?php echo $data->description; ?></p>
        <p class="card-text"><a href="<?php echo $data->url ?>">Read more</a></p>
      </div>
    </div>
  </div>
</div>
<?php
}
?>





















</body>
</html>