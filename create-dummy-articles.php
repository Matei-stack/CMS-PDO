<?php 

require 'init.php';

if(isPostRequest()){

    $article = new Article();

    if($article->generateDummyData($_POST['article_count'])){
        redirect('admin.php');
    }else{
        echo "Something happened it failed";
    }
}

?>