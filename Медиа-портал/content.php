<?php
require_once 'connection.php.php';
require_once 'functions.php';
?>
   <div class="container">

    <div class="row">
        <?php
        $posts = get_posts();

        ?>
        <?php foreach ($posts as $post): ?>
        <div class="col-md-3">
            <a href="#" class="thumbnail">
                <img src="<?post['image']?>" alt="">
            </a>
        </div>
        <div class="col-md-9">
            <h4><a href="#"><?post['title']?></a></h4>
            <p>
                <?post['description']?>
            </p>
            <p><a class="btn-info btn-sm" href="#">Read more</a></p>
            <br/>
            <ul class="list-inline">
                <li><i class="glyphicon glyphicon-list"></i> by <a href="#">Жанры</a> | </li>
                <li><i class="glyphicon glyphicon-calendar"></i> Sept 16th. 2012 | </li>
            </ul>
        </div>


    </div>
    <hr>
       <?php endforeach;?>
   </div>



<?php
include_once ('footer.php');
?>











<div class="container">
    <?php
        $page = isset($_GET['page']) ? $_GET['page'] : 1;
        $limit = 3;
        $offset = $limit * ($page - 1);

        $posts = get_posts($limit,$offset);

    ?>
    <?php foreach ($posts as $post): ?>
        <div class="row">

            <div class="col-md-9">
                <a href="#" class="thumbnail">
                    <img src="<?=$post['image']?>" alt="">
                </a>
            </div>
            <div class="col-md-3">
                <h4><a href="post.php?post_id=<?=$post['id']?>"><?=$post['title']?></a></h4>
                <p>
                    <?=$post['content']?>
                </p>
                <p><a class="btn-info btn-sm" href="post.php?post_id=<?=$post['id']?>">Читать полностью</a></p>
                <br/>
                <ul class="list-inline">
                    <li><i class="glyphicon glyphicon-calendar"></i> 10.01.2020 02:47 </li>
                    <?=data('d/m/Y H:i',$post['created_at'])?>
                </ul>
            </div>


        </div>

        <hr>
    <?php endforeach;?>
</div>
