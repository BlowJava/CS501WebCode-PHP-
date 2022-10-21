<?php

    $total=0;
//value for operators
    if(isset($_POST['submit'])){

        $first = $_POST['first'];

        $second = $_POST['second'];

        $selectedOperation = $_POST['opt'];

        switch($selectedOperation) {

            case "add":

                $total = $first + $second;

                $_POST['total'] = $total;

                break;

            case "sub":

             
                $total = $first - $second;

                $_POST['total'] = $total;

                break;

            case "mul":

         

                $total = $first * $second;

                $_POST['total'] = $total;

                break;

            case "div":

       

                $total = $first / $second;

                $_POST['total'] = $total;

                break;

            default:

                break;

        }

    }

    

?>



<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Calculator</title>

</head>

<body>
    <form action="index.php" method="POST">
    <h1> Basic Calculator </h1>
        <label>First</label></br>

        <input type="number" name="first" id="first" value=""></br>

        <label>Second number</label></br>

        <input type="text" name="second" id="second" value=""></br>



        <input type="radio" name="opt" id="add" value="add">

        <label for="add">Add</label></br>



        <input type="radio" name="opt" id="sub" value="sub">

        <label for="sub">Subtract</label></br>



        <input type="radio" name="opt" id="mul" value="mul">

        <label for="mul">Multiply</label></br>



        <input type="radio" name="opt" id="div" value="div">

        <label for="div">Divide</label></br>





        <label>Total</label></br>

        <input type="text" name="total" id="" value='<?php echo $_POST['total']?>' ></br>



        <button type="submit" name="submit">Calculate</button>

    </form>

</body>

</html>

