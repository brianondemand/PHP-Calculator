<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
       
        <!-- I am learning PHP using this template -->


<!-- Creating a calculator --> 
<form>
    <input type="text" name="num1" placeholder="number 1">
    <input type="text" name="num2" placeholder="number 2">
    <select name="operator">
        <option>None</option>
        <option>Add</option>
        <option>Subtract</option>
        <option>Multiply</option>
        <option>Divide</option>
    </select>
    <br>
    <button type="submit" name="submit" value="submit">Calculate</button>
</form>
<p>The answer is:</p>

<?php
    //GET is used to request data from a specified resource.

    //POST is used to send data to a server to create/update a resource.

    if (isset($_GET['submit'])) {
        $result1 = $_GET['num1'];
        $result2 = $_GET['num2'];
        $operator = $_GET['operator'];
        switch ($operator) {
            case "None":
                echo "ERROR: You need to select a method";
                break;
                case "Add":
                    echo $result1 + $result2;
                    break;
                    case "Subtract":
                        echo $result1 - $result2;
                        break;
                        case "Multiply":
                            echo $result1 * $result2;
                            break;
                            case "Divide":
                                echo $result1 / $result2;
                                break;

        }
        
    }

?>




    </body>
</html>