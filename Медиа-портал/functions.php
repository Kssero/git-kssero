<?php


function get_posts($limit,$offset) {

    global $link;
    $sql = "SELECT * FROM posts ";
    $result = mysqli_query($link,$sql);
    $posts = mysqli_fetch_all($result,MYSQLI_ASSOC);
    return $posts;

}

function get_post_by_id($post_id){
    global $link;

    $sql = "SELECT * FROM posts  id =".$post_id;

    $result = mysqli_query($link,$sql);

    $post = mysqli_fetch_assoc($result);

    return $post;
}