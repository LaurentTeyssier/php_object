<?php

class Combat{
    //? public ?int $tour;
    // ?public ?object $combattant1;
    // ?public ?object $combattant2;
   

    // ?public function __construct(?int $newTour, ?object $newCombattant1, ?object $newCombattant2){
    //     ?$this->tour = $newTour;
    //     ?$this->combattant1 = $newCombattant1;
    //     ?$this->combattant2 = $newCombattant2;
       

    // ?}
//     !public function combattre($combattant1, $combattant2){
//      !   while($this->tour >0){
//       ! echo "<br> Tours restant ".$this->tour. "<br>";
//        !$combattant1->attaquer($combattant2)."<br>";
//        !$combattant2->attaquer($combattant1)."<br>";
//        !$this->tour--;
//        !echo "<br>";
//        !if($combattant1->vie <=0){
//         !return $combattant2->nom. " a remporté le combat.";
//        !} else if($combattant2->vie <=0) {
//         !return $combattant1->nom. " a remporté le combat.";
//        !} 

        
//     !}
//     !return "<br>Egalité";
// !}


public $tour;
public $combattant1;
public $combattant2;

public function __construct( $newTour, $newCombattant1, $newCombattant2){
        $this->tour = $newTour;
       $this->combattant1 = $newCombattant1;
       $this->combattant2 = $newCombattant2;
        

}
public function combattre(){
    for($i=1; $i<= $this->tour; $i++){
    echo "<br> Tour ".$i. "<br>";
    if($this->combattant1->vie >0 &&$this->combattant2->vie >0 ){
    $this->combattant1->attaquer($this->combattant2);
    echo "<br>" .$this->combattant1->nom. " a infligé ".$this->combattant1->force-$this->combattant2->defense. " points de dégats à ".$this->combattant2->nom. ".";
       echo "<br>" .$this->combattant2->nom. " a ".($this->combattant2->vie -=$this->combattant1->force-$this->combattant2->defense). " points de vie restant.";
    if($this->combattant1->vie ==0){
        $this->combattant1->vie ==0;
        break;
    } else if ($this->combattant2->vie ==0){
        $this->combattant2->vie ==0;
        break;
    }
    $this->combattant2->attaquer($this->combattant1);
    echo "<br>" .$this->combattant2->nom. " a infligé ".$this->combattant2->force-$this->combattant1->defense. " points de dégats à ".$this->combattant1->nom. ".";
       echo "<br>" .$this->combattant1->nom. " a ".($this->combattant1->vie -=$this->combattant2->force-$this->combattant1->defense). " points de vie restant.";
}    
}
}
}