<?php
include_once '_classes/Articles.php'; 
include_once '_classes/Categories.php'; 

// Tous les articles 
$allArticles = Articles::getAllArticles(); 

// Toutes les catégories 
$allCategories = Categories::getAllCategories(); 

// Le dernier article enregistré / publié 
$lastArticle = Articles::getLastArticle();

// Le dernier article de la catégorie 1 
$lastArticleLeft = Articles::getLastArticle(1);
// Le dernier article de la catégorie 2
$lastArticleRight = Articles::getLastArticle(2);

?>
