<?php
    // (C)
    require_once 'filters/login_filter.php';
    require_once 'models/Post.php';
    
    // idというキーワードに紐づいて飛んできた値を取得
    $id = $_GET['id'];
    // GET通信で飛んできたidからPostインスタンスを復元
    $post = Post::find($id);
    
    $flush = $_SESSION['flush'];
    $_SESSION['flush'] = null;
    
    include_once 'views/posts_show_view.php';