<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Calculator</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f5f5f5;
                margin: 0;
                padding: 20px;
            }

            form {
                background-color: #ffffff;
                padding: 20px;
                border-radius: 5px;
            }

            label {
                display: block;
                margin-bottom: 10px;
                font-weight: bold;
            }

            input[type="number"],
            select {
                padding: 8px;
                border-radius: 4px;
                border: 1px solid #cccccc;
                width: 100%;
                box-sizing: border-box;
                margin-bottom: 10px;
            }

            button {
                padding: 10px 20px;
                background-color: #4CAF50;
                color: #ffffff;
                border: none;
                border-radius: 4px;
                cursor: pointer;
            }

            button:hover {
                background-color: #45a049;
            }
    

            .result {
                font-weight: bold;
                margin-top: 10px;
            }
        </style>
    </head>
    <body>
        <form method="POST" action="">
            <div class="num1">
                <label for="num1">Enter First Number</label>
                <input name="num1" type="number" id="num1">
            </div>
            <div class="num2">
                <label for="num2">Enter Second Number</label>
                <input name="num2" type="number" id="num2">
            </div>
            <div class="operator">
                <label for="operator">Choose an operator</label>
                <select name="operator" id="operator">
                    <option value="+">+</option>
                    <option value="-">-</option>
                    <option value="*">*</option>
                    <option value="/">/</option>
                    <option value="**">**</option>
                    <option value="++">++</option>
                    <option value="%">%</option>
                    <option value="<"><</option>
                    <option value=">">></option>
                    <option value="==">==</option>
                    <option value="!=">!=</option>
                    
                    
                    
                </select>
            </div>
            <div class="submit">
                <button type="submit">Submit</button>
            </div>
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == 'POST') {
            if (empty($_POST['num1'])) {
                echo "<p class='result'>First number is required</p>";
            
            } else {
                $varnum1 = $_POST['num1'];
                echo "<p class='result'>" . $_POST['num1'] . " ";
                
                
            }
            if (empty($_POST['operator'])) {
                echo "<p class='result'>Operator is required</p>";
                
            } else {
                $varms = $_POST['operator'];
                echo $_POST['operator'] . " ";
            }
            if (empty($_POST['num2'])) {
                echo "<p class='result'>Second number is required</p>";
                
            } else {
                $varnum2 = $_POST['num2'];
                echo $varnum2 . " ";
            }
        if (empty($_POST['num1']) || empty($_POST['num2']) || empty($_POST['operator'])) {
            end($_SERVER);
        } 
        else{
            if ($_POST['operator'] == "+") {
                echo "=" . " ";
                echo $varnum1 + $varnum2;
            } elseif ($_POST['operator'] == "-") {
                echo "=" . " ";
                echo $varnum1 - $varnum2;
            } elseif ($_POST['operator'] == "*") {
                echo "=" . " ";
                echo $varnum1 * $varnum2;
            } elseif ($_POST['operator'] == "/") {
                echo "=" . " ";
                echo $varnum1 / $varnum2;
            } elseif ($_POST['operator'] == "**") {
                echo "=" . " ";
                echo $varnum1 ** $varnum2;
            }
            elseif ($_POST['operator'] == "++") {
                echo "=" . " ";
                echo $varnum1 + $varnum2 + $varnum1 + $varnum2;
            }
            elseif ($_POST['operator'] == "%") {
                echo "=" . " ";
                echo $varnum1 % $varnum2 . "%";
            }
            
            elseif ($_POST['operator'] == "<") {
               if ($varnum1 < $varnum2){ echo "=" . " " . "true";}
                else{
                    echo "=" . " " . "false";
                }
            }
            elseif ($_POST['operator'] == ">") {
               if ($varnum1 > $varnum2){ echo "=" . " " . "true";}
                else{
                    echo "=" . " " . "false";
                }
            }
            elseif ($_POST['operator'] == "==") {
               if ($varnum1 == $varnum2){ echo "=" . " " . "true";}
                else{
                    echo "=" . " " . "false";
                }
            }
            elseif ($_POST['operator'] == "!=") {
               if ($varnum1 != $varnum2){ echo "=" . " " . "true";}
                else{
                    echo "=" . " " . "false";
                }
            }

            
     
            echo "</p>";
        } }
        ?>
    </body>
</html>