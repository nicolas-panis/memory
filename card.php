<?php

    Class Card {

        public $state = "";
        public $valeur = 0;
        
        public function __construct($state, $val){
            $this->state = $state;
            $this->valeur = $val;
        }

        public function getState(){
            return $this->state;
        }

        public function getValeur(){
            return $this->valeur;
        }

        public function setState($val){
            $this->state = $val;
        }

        public function setValeur($val){
            $this->valeur = $val;
        }
    }


    $carte1 = new Card("caché", 1);
    $carte2 = new Card("caché", 2);
    $carte3 = new Card("caché", 3);
    $carte4 = new Card("caché", 1);
    $carte5 = new Card("caché", 2);
    $carte6 = new Card("caché", 3);

    $tabCarte = array($carte1, $carte2, $carte3, $carte4, $carte5, $carte6);


    ?>

    <?php 


    if (!isset($_COOKIE['nbCard'])){
        setcookie('nbCard', 0, time() + 3600);
        setcookie('cartereveal', 'debut', time() + 3600);
        header('Location: Card.php');
    }

    $i = $_COOKIE['nbCard'];

    if (isset($_GET['carte1']) && $carte1->getState() == 'caché'){
        //$RevealCard++;
        setcookie('nbCard', $i++, time()+3600);
        setcookie('cartereveal', 'carte1', time() + 3600);
        $carte1->setState('reveal');
    }
    else if (isset($_GET['carte2']) && $carte2->getState() == 'caché'){
        //$RevealCard++;
        setcookie('nbCard', $i++, time()+3600);
        setcookie('cartereveal', 'carte2', time() + 3600);
        $carte2->setState('reveal');
    }
    else if (isset($_GET['carte3']) && $carte3->getState() == 'caché'){
        //$RevealCard++;
        setcookie('nbCard', $i++, time()+3600);
        setcookie('cartereveal', 'carte3', time() + 3600);
        $carte3->setState('reveal');
    }
    else if (isset($_GET['carte4']) && $carte4->getState() == 'caché'){
        //$RevealCard++;
        setcookie('nbCard', $i++, time()+3600);
        setcookie('cartereveal', 'carte4', time() + 3600);
        $carte4->setState('reveal');
    }
    else if (isset($_GET['carte5']) && $carte5->getState() == 'caché'){
        //$RevealCard++;
        setcookie('nbCard', $i++, time()+3600);
        setcookie('cartereveal', 'carte5', time() + 3600);
        $carte5->setState('reveal');
    }
    else if (isset($_GET['carte6']) && $carte6->getState() == 'caché'){
        setcookie('nbCard', $i++, time()+3600);
        setcookie('cartereveal', 'carte6', time() + 3600);
        $carte6->setState('reveal');
    }

    
        
    ?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Index PHP</title>
    </head>



    <form action="card.php" method="get">

        <?php

            if (isset($_COOKIE['nbCard'])){
                $i = $_COOKIE['nbCard'];

               
                
                
                if(!isset($_GET['carte1']) && $carte1->getState() == 'caché' && $_COOKIE['cartereveal'] != 'carte1'){
                    ?><input type = "submit" value = <?php echo $carte1->getState() ?>  name = "carte1"><?php
                }
                else{
                    echo $carte1->getValeur();
                    $i++;
                    setcookie('nbCard', $i, time()+3600);
                    if (isset($_COOKIE['currentCard1'])){
                        setcookie('currentCard2', $carte1->getValeur(),time()+3600);
                    }
                    else{
                        setcookie('currentCard1', $carte1->getValeur(),time()+3600);
                    }
                }

                if(!isset($_GET['carte2']) && $carte2->getState() == 'caché' && $_COOKIE['cartereveal'] != 'carte2'){
                    ?><input type = "submit" value = <?php echo $carte2->getState() ?>  name = "carte2"><?php
                }
                else{
                    echo $carte2->getValeur();
                    $i++;
                    setcookie('nbCard', $i, time()+3600);
                    if (isset($_COOKIE['currentCard1'])){
                        setcookie('currentCard2', $carte2->getValeur(),time()+3600);
                    }
                    else{
                        setcookie('currentCard1', $carte2->getValeur(),time()+3600);
                    }
                }

                if(!isset($_GET['carte3']) && $carte3->getState() == 'caché' && $_COOKIE['cartereveal'] != 'carte3'){
                    ?><input type = "submit" value = <?php echo $carte3->getState() ?>  name = "carte3"><br /><br /><?php
                }
                else{
                    echo $carte3->getValeur();
                    $i++;
                    setcookie('nbCard', $i, time()+3600);
                    if (isset($_COOKIE['currentCard1'])){
                        setcookie('currentCard2', $carte3->getValeur(),time()+3600);
                    }
                    else{
                        setcookie('currentCard1', $carte3->getValeur(),time()+3600);
                    }
                    ?> <br /><br /><?php
                }

                if(!isset($_GET['carte4']) && $carte4->getState() == 'caché' && $_COOKIE['cartereveal'] != 'carte4'){
                    ?><input type = "submit" value = <?php echo $carte4->getState() ?>  name = "carte4"><?php
                }
                else{
                    echo $carte4->getValeur();
                    $i++;
                    setcookie('nbCard', $i, time()+3600);
                    if (isset($_COOKIE['currentCard1'])){
                        setcookie('currentCard2', $carte4->getValeur(),time()+3600);
                    }
                    else{
                        setcookie('currentCard1', $carte4->getValeur(),time()+3600);
                    }
                }

                if(!isset($_GET['carte5']) && $carte5->getState() == 'caché' && $_COOKIE['cartereveal'] != 'carte5'){
                    ?><input type = "submit" value = <?php echo $carte5->getState() ?>  name = "carte5"><?php
                }
                else{
                    echo $carte5->getValeur();
                    $i++;
                    setcookie('nbCard', $i, time()+3600);
                    if (isset($_COOKIE['currentCard1'])){
                        setcookie('currentCard2', $carte5->getValeur(),time()+3600);
                    }
                    else{
                        setcookie('currentCard1', $carte5->getValeur(),time()+3600);
                    }
                }

                if(!isset($_GET['carte6']) && $carte6->getState() == 'caché' && $_COOKIE['cartereveal'] != 'carte6'){
                    ?><input type = "submit" value = <?php echo $carte6->getState() ?>  name = "carte6"><?php
                }
                else{
                    echo $carte6->getValeur();
                    $i++;
                    setcookie('nbCard', $i, time()+3600);
                    if (isset($_COOKIE['currentCard1'])){
                        setcookie('currentCard2', $carte6->getValeur(),time()+3600);
                    }
                    else{
                        setcookie('currentCard1', $carte6->getValeur(),time()+3600);
                    }
                }
                
                if (isset($_COOKIE['currentCard1']) && isset($_COOKIE['currentCard2'])){
                    echo "okkkkkkkkkkkkkk";
                    if ($_COOKIE['currentCard1'] == $_COOKIE['currentCard2']){
                        echo "combi ok";
                    }
                }
                

                if ($_COOKIE['nbCard'] > 2){
                    setcookie('nbCard', 0, time()+3600);
                    setcookie('currentCard1', '',time() - 3600);
                    setcookie('currentCard2', '',time() - 3600);
                    header('Location: Card.php');
                }
            }

            
        ?>    

    </form>

</html>