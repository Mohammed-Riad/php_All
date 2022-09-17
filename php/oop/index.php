<?php


// class Person
// {
//     public $name;
//     public $age;

//     function __construct($nameConst,$ageConst)
//     {
//         $this->name=$nameConst;
//         $this->age=$ageConst;
//     }

//     function get()
//     {
//         echo $this->name;
//         echo "<br>";
//         echo $this->age;
//     }

//    public function getname()
//     {
//         return $this->name;
//     }

//     public function setname($namecc)
//     {
//         $this->name=$namecc;
//     }

// }

// class Emplowee extends Person
// {
//     public $id;
//     function __construct($nameConst,$ageConst,$idConst)
//     {
//         parent::__construct($nameConst,$ageConst);
//         $this->id=$idConst;

//     }

//     function print()
//     {
//         echo $this->name;
//         echo "<br>";
//         echo $this->age;
//         echo "<br>";
//         echo $this->id;
//         echo "<br>";
//     }
// }



// $person = new Person("hamodeh",15);
// print_r($person);
// $person -> setname("SSSS");
// echo $person -> getname();


// echo "<br>";
// echo "<br>";


// $emplowee = new Emplowee("hamodeh",15,1700902074);
// print_r($emplowee);
// echo "<br>";
// echo "<br>";
// echo $emplowee -> setname("riad");
// echo $emplowee -> getname();



$R= $_POST["counterR"];

// $string = "hamoH";

// if (ctype_lower($string)) {
//     echo $string . ' is all lowercase letters.';
// } else {
//     echo $string . ' is not all lowercase letters.';
// }

// if($R=="")
// {
//    echo"s"
// }






// function counter($numberR)
// {
//     $count=1;


// for ($i = 0 ; $i < strlen($numberR) ; $i++ )
// {
   

//     if($numberR [$i]== "r" or  $numberR [$i] == "R" )
//     {
//       $r= $count++;
 
//     }
   
// }

// echo $r;

// }

// counter($R);






    if (ctype_lower($R)) {
        echo $R . ' is all lowercase letters.';
    } else {
        echo $R . ' is not all lowercase letters.';
    }
   






?>


<form action="index.php" method="post">
    <p>Counter_Of_R</p>
    <input type="text" name="counterR">
    <br><br>
    <input type="submit" n>
</form>