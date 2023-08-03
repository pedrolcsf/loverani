<?php
  $id = $_GET['id'];
  $connect = pg_connect("host=pgsql.loverani.com.br dbname=loverani user=loverani password=cvjunior1207");

  $select = pg_query("SELECT * FROM products WHERE id=$id");
  $row = pg_fetch_row($select);
?>

<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Loverani</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  </head>
  <body>
    <div class="container col-md-6 mt-5">
      <h2><a href="https://loverani.com.br/dashboard">Dashboard - Loverani</a></h2>
      <hr>
      <div class="d-flex justify-content-between align-items-center">
      <h4>Produto: <?php echo $row[1] ?></h4>
      
      <button class="btn btn-danger">Excluir</button>
      </div>
      
      <div class="form-outline mb-4">
        <label class="form-label" for="name">Nome:</label>
        <input type="text" name="name" value="<?php echo $row[1] ?>" id="name" class="form-control" />
      </div>
      <hr>
      <form action="upload.php?id=<?php echo $id; ?>" method="post" enctype="multipart/form-data">
        <div class="d-flex align-items-center mb-2">
          <div>
            <label class="form-label" for="name">Image 1:</label>
            <input class="form-control" type="file" name="fileToUpload" id="fileToUpload" onchange="preview()">
          </div>
          <div class="align-items-center p-2 bg-ligth">
            <img style="width: 100px; ml-4 mt-4" id="frame" src="http://loverani.com.br/dashboard/uploads/<?php echo $row[2] ?>" class="img-fluid" />
          </div>
        </div>
        <input type="submit" value="Upload Image 1" name="submit">
      </form>
      <hr>

      <form action="upload2.php?id=<?php echo $id; ?>" method="post" enctype="multipart/form-data">
        <div class="d-flex align-items-center mb-2">
          <div>
            <label class="form-label" for="name">Image 2:</label>
            <input class="form-control" type="file" name="fileToUpload" id="fileToUpload2" onchange="preview2()">
          </div>
          <div class="align-items-center p-2 bg-ligth">
            <img style="width: 100px; ml-4 mt-4" id="frame2" src="http://loverani.com.br/dashboard/uploads/<?php echo $row[3] ?>" class="img-fluid" />
          </div>
        </div>
        <input type="submit" value="Upload Image 2" name="submit">
      </form>
      <hr>

      <form action="upload3.php?id=<?php echo $id; ?>" method="post" enctype="multipart/form-data">
        <div class="d-flex align-items-center mb-2">
          <div>
            <label class="form-label" for="name">Image 3:</label>
            <input class="form-control" type="file" name="fileToUpload" id="fileToUpload3" onchange="preview3()">
          </div>
          <div class="align-items-center p-2 bg-ligth">
            <img style="width: 100px; ml-4 mt-4" id="frame3" src="http://loverani.com.br/dashboard/uploads/<?php echo $row[4] ?>" class="img-fluid" />
          </div>
        </div>
        <input type="submit" value="Upload Image 3" name="submit">
      </form>
      <hr>

      </div>

      <script>
        function preview() {
          frame.src = URL.createObjectURL(event.target.files[0]);
        }

        function preview2() {
          frame2.src = URL.createObjectURL(event.target.files[0]);
        }

        function preview3() {
          frame3.src = URL.createObjectURL(event.target.files[0]);
        }
       
      </script>
    </body>
</html>
