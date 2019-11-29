<?php

spl_autoload_register(function ($class) {
    include 'classes/' . $class . '.php';
});

$lucie = new Warrior('Lucie');
$anto = new Mage('Anto');
$pikoui = new Archer('Pikoui');
$punching = new Punchingball('Punching');

// Characters attacking while both alive
while ($lucie->isAlive() && $anto->isAlive()) {
    // First Character attacking the 2nd
    echo $lucie->action($anto);
    // Check if target is alive
    if (!$anto->isAlive()) {
        echo '<br>';
        echo "$anto->pseudo est KO!";
        echo '<br>';
    };
    echo '<br>';
    if ($anto->isAlive()) {
    // Second Character attaking the first
    echo $anto->action($lucie);
    }
    // Check if target is alive
    if (!$lucie->isAlive()) {
        echo '<br>';
        echo "$lucie->pseudo est KO!";
        echo '<br>';
    };
    echo '<br>';
    echo '<br>';
}

while ($pikoui->isAlive() && $punching->isAlive()) {
  
    echo $pikoui->weakPoint($punching);

    if (!$punching->isAlive()) {
        echo '<br>';
        echo "$punching->pseudo est KO!";
        echo '<br>';
    };
    echo '<br>';
    if ($punching->isAlive()) {
 
    echo $punching->action($pikoui);
    }
  
    if (!$pikoui->isAlive()) {
        echo '<br>';
        echo "$pikoui->pseudo est KO!";
        echo '<br>';
    };
    echo '<br>';
    echo '<br>';
}