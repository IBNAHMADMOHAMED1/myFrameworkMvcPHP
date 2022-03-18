<?php

class Articles extends Controller{
    /**
     * Cette méthode affiche la liste des articles
     *
     * @return void
     */
    public function index(){
        // On instancie le modèle "Article"
        $this->loadModel('Article');

        // On stocke la liste des articles dans $articles
        $articles = $this->Article->getAll();
 
        // die (var_dump($articles));

        // On envoie les données à la vue index
        // die(var_dump(compact('articles')));
        $this->render('index', compact('articles'));
    }

    /**
     * Méthode permettant d'afficher un article à partir de son slug
     *
     * @param string $slug
     * @return void
     */
    public function lire(string $slug){
        // On instancie le modèle "Article"
        // die(var_dump($slug));
        $this->loadModel('Article');

        // On stocke l'article dans $article
        $article = $this->Article->findId($slug);

        // On envoie les données à la vue lire
        $this->render('lire', compact('article'));
    }
}