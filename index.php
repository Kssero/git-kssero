<?php
require_once ('inc/functions.php');
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gamepay</title>
    <link rel="shortcut icon" href="icon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css">

</head>
<body>
  <!-- Header -->

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">Gamepay интернет магазин видеоигр</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
              <a class="nav-item nav-link active" href="#">Главная <span class="sr-only">(current)</span></a>
              <a class="nav-item nav-link" href="#">Контакты</a>
              <a class="nav-item nav-link" href="#">О нас</a>

          </div>
      </div>
  </nav>

  <!-- Products -->
  <section class="products">
      <div class="container">
          <div class="row">
              <div class="col-md-4 col-sm-6">
                  <div class="card">
                      <img class="card-img-top" src="https://i.ytimg.com/vi/3cQxYp9GOWE/maxresdefault.jpg" alt="Card image cap">
                      <div class="card-body">
                          <h4 class="card-title">
                              Minecraft
                          </h4>
                          <p class="card-text">Lalalala</p>
                          <p class="price text-danger">1000 RUB</p>
                          <a href="#" class="btn btn-primary buy" data-price="1000" data-product="Minecraft">Купить</a>
                      </div>
                  </div>
              </div>
              <div class="col-md-4 col-sm-6">
                  <div class="card">
                      <img class="card-img-top" src="https://i.ytimg.com/vi/qsxEnWBfPdc/maxresdefault_live.jpg" alt="Card image cap">
                      <div class="card-body">
                          <h4 class="card-title">
                              Red dead redemtion 2
                          </h4>
                          <p class="card-text">Lalalala</p>
                          <p class="price text-danger">1200 RUB</p>
                          <a href="#" class="btn btn-primary buy" data-price="1200" data-product="Red dead redemption 2">Купить</a>
                      </div>
                  </div>
              </div>
              <div class="col-md-4 col-sm-6">
                  <div class="card">
                      <img class="card-img-top" src="https://i.ytimg.com/vi/59slzZqGncg/maxresdefault.jpg" alt="Card image cap">
                      <div class="card-body">
                          <h4 class="card-title">
                              Dark souls 3
                          </h4>
                          <p class="card-text">Lalalala</p>
                          <p class="price text-danger">500 RUB</p>
                          <a href="#" class="btn btn-primary buy" data-price="500" data-product="Dark Souls 3">Купить</a>
                      </div>
                  </div>
              </div>
              <div class="col-md-4 col-sm-6">
                  <div class="card">
                      <img class="card-img-top" src="https://i.ytimg.com/vi/urqOSJdrDm4/maxresdefault.jpg" alt="Card image cap">
                      <div class="card-body">
                          <h4 class="card-title">
                              GTA 5
                          </h4>
                          <p class="card-text">Lalalala</p>
                          <p class="price text-danger">699 RUB</p>
                          <a href="#" class="btn btn-primary buy" data-price="699" data-product="GTA 5">Купить</a>
                      </div>
                  </div>
              </div>
              <div class="col-md-4 col-sm-6">
                  <div class="card">
                      <img class="card-img-top" src="https://i.ytimg.com/vi/EyAIkI8NxlY/maxresdefault.jpg" alt="Card image cap">
                      <div class="card-body">
                          <h4 class="card-title">
                              CS:GO
                          </h4>
                          <p class="card-text">Lalalala</p>
                          <p class="price text-danger">400 RUB</p>
                          <a href="#" class="btn btn-primary buy" data-price="400" data-product="CS:GO">Купить</a>
                      </div>
                  </div>
              </div>
              <div class="col-md-4 col-sm-6">
                  <div class="card">
                      <img class="card-img-top" src="https://i.ytimg.com/vi/U28yQq82AQo/maxresdefault.jpg" alt="Card image cap">
                      <div class="card-body">
                          <h4 class="card-title">
                              Rust
                          </h4>
                          <p class="card-text">Lalalala</p>
                          <p class="price text-danger">399 RUB</p>
                          <a href="#" class="btn btn-primary buy" data-price="399" data-product="Rust">Купить</a>
                      </div>
                  </div>
              </div>
              <div class="col-md-4 col-sm-6">
                  <div class="card">
                      <img class="card-img-top" src="https://i.ytimg.com/vi/CWW_Jw_0zMk/maxresdefault.jpg" alt="Card image cap">
                      <div class="card-body">
                          <h4 class="card-title">
                              Rainbow six siege
                          </h4>
                          <p class="card-text">Lalalala</p>
                          <p class="price text-danger">799 RUB</p>
                          <a href="#" class="btn btn-primary buy" data-price="799" data-product="Rainbow six siege">Купить</a>
                      </div>
                  </div>
              </div>
              <div class="col-md-4 col-sm-6">
                  <div class="card">
                      <img class="card-img-top" src="https://i.ytimg.com/vi/LlZ_zW66bG8/maxresdefault.jpg" alt="Card image cap">
                      <div class="card-body">
                          <h4 class="card-title">
                              Dead by daylight
                          </h4>
                          <p class="card-text">Lalalala</p>
                          <p class="price text-danger">499 RUB</p>
                          <a href="#" class="btn btn-primary buy" data-price="499" data-product="Dead by daylight">Купить</a>
                      </div>
                  </div>
              </div>
              <div class="col-md-4 col-sm-6">
                  <div class="card">
                      <img class="card-img-top" src="https://i.ytimg.com/vi/DOHJb1XEZ1Y/maxresdefault.jpg" alt="Card image cap">
                      <div class="card-body">
                          <h4 class="card-title">
                              Terraria
                          </h4>
                          <p class="card-text">Lalalala</p>
                          <p class="price text-danger">149 RUB</p>
                          <a href="#" class="btn btn-primary buy" data-price="149" data-product="Terraria">Купить</a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>


  <!-- forms -->

  <div class="modal fade" id="cart">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title">Оформление заказа</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
              <form id="buy" method="post">
                  <div class="form-group">
                      <label for="name">Введите ваше Имя:</label>
                      <input type="name" name="name" class="form-control" id="name" placeholder="Введите ваше Имя:" required>
                  </div>
                  <div class="form-group">
                      <label for="email">Введите вашу Почту:</label>
                      <input type="email" name="email" class="form-control" id="email" placeholder="Введите вашу Почту:" required>
                  </div>
                  <div class="form-group">
                      <label for="product">Выбраный товар:</label>
                      <input type="text" name="product" class="form-control" id="product" readonly>
                  </div>
                  <div class="form-group">
                      <label for="price">Цена:</label>
                      <input type="text" name="price" class="form-control" id="price" readonly>
                  </div>

                  <button type="submit" class="btn btn-primary">Купить</button>
              </form>
          </div>

      </div>
  </div>
  </div>

  <!-- Footer -->
  <footer>
      <div class="containter">
          <div class="d-flex justify-content-beetwen">
              <div class = "footer-left">
                  <p class = "lead">© 2019-2020</p>
                  <a href="https://www.gamepay.space">Gamepay</a>
              </div>
              <div class="footer-right">
                  <span>Следи за нами</span>
                  <a href="#"><i class="fab fa-facebook-square"></i></a>
                  <a href="#"><i class="fab fa-instagram"></i></a>
              </div>
          </div>

      </div>
  </footer>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="script/main.js"></script>
  <script src="https://kit.fontawesome.com/7a0408e621.js" crossorigin="anonymous"></script>
</body>
</html>