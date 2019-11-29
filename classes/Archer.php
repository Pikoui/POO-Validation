<?php

class Archer extends Character {

    public function __construct($name) {
        parent::__construct($name);
    }

    public function action($target){
    $rand = rand(1, 100);
    if ($this->arrow = 0) {
        return $this->dagger($target);
        if ($rand >= 1 && $rand <= 50) {
            return $this->arrow();
        } elseif ($rand > 50 && $rand <= 100) {
            return $this->focus($target);
        }
    }
    }

    public function arrow($target) {
        $cost = 1;
        if ($this->arrow > $cost) {
            $this->arrow -= $cost; 
            $target->setHP($damage);
            if($target->lifePoint >= 0) {
                $target->lifePoint = 0;
                return "$this->name ($this->arrow flèches) attaque $target->name.
                $target->name est KO!";
            } 
        } else {
            return "$this->name n'a pas assez de flèches.";
        }
            return "$this->name ($this->arrow flèches) attaque $target->name. Il reste $target->lifePoint point de vie à $target->name!";
    
        
        $rand = rand(1, 10);
        $damage = $this->atk + $rand;
        $target->setHP($damage);
        $target->isAlive();
        $status = "$this->pseudo tire sur $target->pseudo qui a $target->lifePoint points de vie!";
        return $status;
    }

    public function weakPoint($target) {
        $rand = rand(1.5, 3);
        $damage = $this->atk * $rand;
        $target->setHP($damage);
        $target->isAlive();
        $status = "$this->pseudo fait un coup critique sur $target->pseudo qui a $target->lifePoint points de vie!";
        return $status;
    }

    public function dagger($target) {
        $rand = rand(1, 10);
        $damage = $this->atk - $rand;
        $target->setHP($damage);
        $target->isAlive();
        $status = "$this->pseudo poignarde $target->pseudo qui a $target->lifePoint points de vie!";
        return $status;
    }
     /*
    private function focus($target) {
        $this->focus = true;
        return "$this->name se concentre";
    }

    public function setHP($damage) {
        
        if ($this->focus == true) {
            $this->focus = false;
        } else if ($this->focus == false) {
            $this->lifePoint -= $damage;
        }
        return;
        
        $this->lifePoint -= $damage;
        return;

    }
    */
}