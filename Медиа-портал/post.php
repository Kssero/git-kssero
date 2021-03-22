<?php
require_once ('header.php');
include_once ('functions.php');
$post_id = $_GET['post_id'];
if(!is_numeric($post_id))exit();

$post = get_post_by_id($post_id);

?>
<div class="container">
  <div class="row">
   <div class="col-md-9">
    <div class="page-header">
     <h1>
         <?=$post['title']?>
     </h1>
    </div>
      <ul class="list-inline">
        <li><i class="glyphicon glyphicon-calendar"></i> 10.01.2020 02:47 </li>
      </ul>
       <div class="post-video">
           <?=$post['video']?>
       </div>
        <div class="post-content">
            <?=$post['content']?>
         </div>
   </div>

  </div>
</div>
<?php
require_once 'footer.php';
?>
