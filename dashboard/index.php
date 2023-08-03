<?php
  $conn = pg_connect("host=pgsql.loverani.com.br dbname=loverani user=loverani password=cvjunior1207");
  $result = pg_query($conn, "select * from products");


  $select = pg_query("SELECT * FROM info WHERE id=1");
  $rowInfo = pg_fetch_row($select);
  $idproduct = 0
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Dashboard Loverani</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<br>

<div class="container">
  <h2>Dashboard - Loverani</h2>
  <br>
  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" data-toggle="tab" href="#home">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#products">Produtos</a>
    </li>
   
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div id="home" class="container tab-pane active"><br>
      <h3>Home</h3>
      <form method="POST" action="home.php">
        <div class="form-group">
          <label for="slogan">Slogan</label>
          <input type="text" class="form-control" id="slogan" value="<?php echo $rowInfo[1] ?>" name="slogan" placeholder="Slogan:">
        </div>
        <div class="form-group">
          <label for="description">Descrição:</label>
          <textarea class="form-control" id="description" name="description" placeholder="Descrição:" rows="3"><?php echo $rowInfo[2] ?></textarea>
        </div>
        <!-- <button type="submit" class="btn btn-success">Salvar</button> -->
        <input value="Salvar" id="salvar" name="salvar" type="submit" class="btn btn-success mb-4" />

      </form>
    </div>
    <div id="products" class="container tab-pane fade"><br>
      <div class="pl-3 pr-3 mb-4 mt-2 d-flex justify-content-between align-items-center">
        <h3>Produtos</h3>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
          Adicionar produto
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <form method="POST" action="create-product.php">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Adicionar produto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                  <div class="form-group">
                    <label for="name">Nome</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Nome:">
                  </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                <input value="Adicionar" id="adicionar" name="adicionar" type="submit" class="btn btn-success" />
              </div>
            </div>
          </form>
          </div>
        </div>

      </div>

      <div class="container">
  <div class="row">
    <div  class="col-12">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">Nome</th>
            <th scope="col">Image 1</th>
            <th scope="col">Image 2</th>
            <th scope="col">Image 3</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
          <?php
            while($row = pg_fetch_array($result)) {
              $init = '<tr>';
              $middle = '<td>'. $row['name'] .'</td><td><img style="width: 50px" src="https://loverani.com.br/dashboard/uploads/'.$row['image1'] .'" /></td><td><img style="width: 50px" src="https://loverani.com.br/dashboard/uploads/'.$row['image2'] .'" /></td><td><img style="width: 50px" src="https://loverani.com.br/dashboard/uploads/'.$row['image3'] .'" /></td><td><a href="https://loverani.com.br/dashboard/products.php?id='. $row['id']. '" class="btn btn-primary">Visualizar</button></td>';
              $end = '</tr>';
              echo $init . $middle . $end;
            }
          ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
    </div>
  </div>
</div>

</body>
</html>
