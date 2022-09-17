<?php














// function bigNum($x,$y,$z)
// {
//     if($x > $z and $x> $y)
//     {
//         echo($x);
//     }elseif ($z > $x and $z> $y)
//     {
//         echo( $z);
//     }elseif ($y > $x and $y> $z)
//     {
//         echo( $y);
//     }else
//     {
//         echo("nop");
//     }
// }

// bigNum(1,5,9);





/////////////////////////////////////////////////////////////////////////////////



// function truple($b,$z)
// {
    
//     if($b == $z)
//     {
//         $q = $b + $z;
//         $q=$q*3;
//         echo($q);
//     }else
//     {
//         echo("nop");
//     }

   
// }

// truple(6,6)



//////////////////////////////////////////////////////////////////////////////////


// function equl($b,$g)
// {
//     $z=$b+$g;
//     if($z==30)
//     {
//         echo("sum is :". $z);
//     }else
//     {
//         echo("nop");
//     }
// }

// equl(10,20);


/////////////////////////////////////////////////////////////////////////////////




// function multaple($number)
// {
//     if($number > 0)
//     {
//         if ($number % 3 == 0)
//     {
//         echo ($number );
//     }
//     else
//     {
//         echo("nop");
//     }
//     }else
//     {
//         echo("nop -");
//     }
// }

// multaple(9)



////////////////////////////////////////////////////////////////////////////////////




// function numbersbut($d)
// {
    

//     if($d > 20  and $d < 50)
//     {
//         echo($d);
//     }
// }
// numbersbut(21)



///////////////////////////////////////////////////////////////////////////////////




// function calc($b , $c , $op)
// {
//     if ($op == "-")
//     {
//         $d=$b-$c;
//         echo($d);
//     }else if($op == "+")
//     {
//         $d=$b+$c;
//         echo($d);
//     }else if($op == "/")
//     {
//         $d=$b/$c;
//         echo($d);
//     }else if($op == "*")
//     {
//         $d=$b*$c;
//         echo($d);
//     }
// }

// calc(10,5,"-");
// echo("<br>");
// calc(10,5,"*");



/////////////////////////////////////////////////////////////////////////////////



// function age($d)
// {
//     if($d >=18)
//     {
//         echo("is legale");
//     }else
//     {
//         echo("no legale");
//     }
// }

// age(18)




/////////////////////////////////////////////////////////////////////////////////


// function positiv($d)
// {
//     if($d >0)
//     {
//         echo(" positv");
//     }else
//     {
//         echo(" negatev");
//     }
// }

// positiv(8)




/////////////////////////////////////////////////////////////////////////////////


// function oo($f)
// {
//     $sum=0;
// for($i=0;$i<count($f);$i++)
// {
//     // echo($f[$i]."<br>");

//     $sum=$f[$i]+$sum;

// }
// echo( $sum ."<br>");


// if($sum < 50)
// {
//     echo("F");
// }elseif($sum <= 70)
// {
//     echo("C");
// }
// elseif($sum <= 80)
// {
//     echo("D");
// }elseif($sum <= 90)
// {
//     echo("A");
// }

// }
// $r=[50,10,30];
// oo($r)




// function primeCheck($number){
//     if ($number == 1)
//     return 0;
     
//     for ($i = 2; $i <= sqrt($number); $i++){
//         if ($number % $i == 0)
//             return 0;
//     }
//     return 1;
// }
 

// $number = 31;
// $flag = primeCheck($number);
// if ($flag == 1)
//     echo "Prime";
// else
//     echo "Not Prime"




// function strin($q)
// {
//    echo( strrev($q));

// }

// $d="mohammed";
// strin($d);

// function chec($s)
// {
//    if(!strtolower($s))
//    {
//     echo("yes");
//    }else
//    {
//     echo("no");
//    }
// }

//     $p="a";
//     chec($p)



// function swip($d,$r)
// {
//     $f=$d;
//     $d=$r;
//     $r=$f;
//     echo($d);
//     echo"<br>";
//     echo($r);
// }

// swip(5,6)

 



// function ooop($num )
// {
// $p=$num;
// $revnum = 0;
// while ($num != 0)
// {
// $revnum = $revnum * 10 + $num % 10;
// //below cast is essential to round remainder towards zero
// $num = (int)($num / 10); 
// }
 
// if($revnum==$p)
// {
// echo $p," is Palindrome number";
// }
// else
// {
// echo $p." is not Palindrome number";
// // }
// }
// }

// ooop(121)


// function dub($a)
// {
//     $d=array_unique($a);
//     print_r($d);
// }
// $s=[1,2,5,6,5,5,5];
// dub($s)


// print $_POST["name"]; 
//  print $_POST["email"];






// q2

// echo"<h1> calc</h1>";
// $number1= $_GET["number1"];
// $number2= $_GET["number2"];
// $op= $_GET["op"];

// if($op=="-")
// {
//     $sum = $number1 - $number2;
//     echo $sum;
// }else if($op=="+")
// {
//     $sum = $number1 + $number2;
//     echo $sum;
// }else if($op=="*")
// {
//     $sum = $number1 * $number2;
//     echo $sum;
// }else if($op=="/")
// {
//     $sum = $number1 / $number2;
//     echo $sum;
// }

// end q2

echo"<br>";
 echo"<br>";
 echo"<br>";

// q1

// echo"<h1>Your information </h1>";
// $passowrd= $_GET["password"];
// $email= $_GET["email"];

// echo $email; 
//  echo"<br>";
//  echo"<br>";
// echo $passowrd;
//  echo"<br>";
//  echo"<br>";
//  echo"<br>";
// end q1


echo"<br>";
 echo"<br>";
 echo"<br>";



$todolist= $_GET["todolist"];
$arr=[];
$new=$todolist;
$new = array_push($arr,$new);
print_r($arr);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form
        {
            width: 20%;
        }
    </style>
</head>
<body>

 <!-- q1 -->
<!-- <form action="index.php" method="get">
    <fieldset>
        <caption>Set Your Information</caption>
        <p>E-mail:</p>
    <input type="email" name="email" ><br>
    <br>

    <p>password: </p>
    <input type="password" name="password"><br>
        <br>
    <input type="submit">
    </fieldset> -->

    <!-- end q1 -->

<br><br><br><br>

<!-- q2 -->
<!-- 
<form action="index.php" method="get">
    <fieldset>
        <caption>calc</caption>
        <p>number 1 :</p>
    <input type="text" name="number1" ><br>
    <br>

    <p>number  2 : </p>
    <input type="text" name="number2"><br>
        <br>

        <p>op </p>
    <input type="text" name="op"><br>
        <br>
    <input type="submit">
    </fieldset> -->
<!-- end q2 -->



<form action="index.php" method="get">
    <fieldset>
        <caption>todo list</caption>
        <p>todolist :</p>
    <input type="text" name="todolist" ><br>
    <br>

   
        <br>
    <input type="submit">
    </fieldset> 


</body>
</html>

    