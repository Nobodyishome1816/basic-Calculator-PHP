<!DOCTYPE HTML>
<HTML lang="en">
<HEAD>
    <link rel="stylesheet" href="styles.css">
    <title> Basic Calculator</title>
</HEAD>
<BODY>
    <h1>Basic Calculator</h1>
    <form method="post" action="">
        <input type="text" name="Num1" placeholder="Enter first number" required>
        <br>
        <input type="text" name="Num2" placeholder="Enter second number" required>
        <br>
        <br>
        <label> select an option </label>
        <br>
        <select name="operator">
            <option value="+"> + </option>
            <option value="-"> - </option>
            <option value="*"> * </option>
            <option value="/"> / </option>
        </select>
        <br>
        <button type="submit"> Calculate </button>
        <input type="reset">
        <br>
        <br>
        <?PHP
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $num1 = $_POST['Num1'];
            $num2 = $_POST['Num2'];
            $operator = $_POST['operator'];


            if ($operator == "+") {
                $result = $num1 + $num2;

            } elseif ($operator == "-") {
                $result = $num1 - $num2;

            } elseif ($operator == "*") {
                $result = $num1 * $num2;

            } elseif ($operator == "/") {
                if ($num2 == "0") {
                    echo "cannot divide by 0";
                }
                else{
                    $result = $num1 / $num2;
                }
            }
            echo "Result: $result ";
        }
        ?>
</BODY>
</HTML>