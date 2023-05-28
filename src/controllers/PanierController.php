<?php

class Panier
{
    private $panier, $product_number;

    public function __construct()
    {
        $this->product_number = 0;

        $this->panier = array();
    }

    public function add_article($article_panier)
    {
        $ifexists = 0;
        //On vérifie que ça existe
        foreach ($this->panier as $key => $value) {
            if ($value['id'] == $article_panier['id']) {
                $ifexists = $article_panier['id'];
            }
        }

        if ($ifexists == 0) {
            $this->panier[$article_panier['id']] = $article_panier;
        } else {
            $this->panier[$article_panier['id']]['quantity'] = $this->panier[$article_panier['id']]['quantity'] + 1;
        }

        $this->product_number = $this->product_number + 1;
    }

    public function getProduct_number()
    {
        return $this->product_number;
    }

    public function getPanier()
    {
        return $this->panier;
    }
}
