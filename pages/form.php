<?php session_start(); ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Оплата</title>
</head>
<body>
 <p>Через несколько секунд вы будете перенаправлены на страницу оплаты. Нажмите. кнопку если не хотите ждать...</p>

<?php if(!empty($_SESSION['payment'])): ?>


 <form id="payment" name="payment" method="post" action="https://sci.interkassa.com/" enctype="utf-8">
     <input type="hidden" name="ik_co_id" value="5e1339ca1ae1bd0e008b4585" />
     <input type="hidden" name="ik_pm_no" value="<?=$_SESSION['payment']['id'];?>" />
     <input type="hidden" name="ik_am" value="<?=$_SESSION['payment']['price'];?>" />
     <input type="hidden" name="ik_cur" value="RUB" />
     <input type="hidden" name="ik_desc" value="Оплата за товар" />
     <input type="submit" value="Оплатить">
 </form>
<?php endif;?>
 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>
        setTimeout(function () {
            $('form').submit();
        },5000);
    </script>
</body>
</html>
