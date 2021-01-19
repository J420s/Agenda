<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">

  </head>
  <body>
    <div class="row" style="height:50px"></div>
    <div class="row justify-content-center">
        <div class="col-md-6 align-self-center">
          <div class="row">
            <?php include_once "table.php"?>
          </div>
          <div class="row justify-content-center">
            <div class="col-md-2 text-center">
              <a href="index.php?page=0&order=<?=isset($_REQUEST['order']) ? $_REQUEST['order'] : 'id'?>">
                <img class="img-fluid" src="./buttons/arrow-start.png">
              </a>
            </div>
            <div class="col-md-2 text-center">
              <a href="index.php?page=<?= isset($_REQUEST['page']) && $_REQUEST['page'] > 0? $_REQUEST['page'] - 1 : 0; ?>&order=<?=isset($_REQUEST['order']) ? $_REQUEST['order'] : 'id'?>">
                <img class="img-fluid" src="./buttons/arrow-left.png">
              </a>
            </div>
            <div class="col-md-2 text-center">
              <a href="index.php?page=<?= isset($_REQUEST['page']) ? $_REQUEST['page'] + 1 : 1; ?>&order=<?=isset($_REQUEST['order']) ? $_REQUEST['order'] : 'id'?>">
                <img class="img-fluid" src="./buttons/arrow-right.png">
              </a>
            </div>
            <div class="col-md-2 text-center">
              <a href="index.php?page=<?=Number_Of_Pages-1?>&order=<?=isset($_REQUEST['order']) ? $_REQUEST['order'] : 'id'?>">
                <img class="img-fluid" src="./buttons/arrow-end.png">
              </a>
            </div>
          </div>
            
        </div>
    </div>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
