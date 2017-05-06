<?php
include_once 'Article.php';

$result = false;
if (isset($_POST['article'])) {
    $article = $_POST['article'];
    if (!empty($article)) {
        $title = isset($article['title']) ? strip_tags(trim($article['title'])) : '';
        $content = isset($article['content']) ? htmlspecialchars(trim($article['content'])) : '';
        
        if (!empty($title) && !empty($content)) {
            $articleObj = new Article();
            $articleObj
                ->setTitle($title)
                ->setContent($content)
                ->save();
            
            $result = true;
        }
    }
}

echo json_encode(
    [
        'result' => $result
    ]
);

