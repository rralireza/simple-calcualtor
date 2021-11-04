<?php

    if(isset($_POST['btn']))
    {
        $x=$_POST['num1'];
        $y=$_POST['num2'];
        $radio=$_POST['op'];

        if($radio=='sum')
        {
            $msg=$x+$y;
        }

        else if($radio=='min')
        {
            $msg=$x-$y;
        }

        else if($radio=='mul')
        {
            $msg=$x*$y;
        }

        else if($radio=='div')
        {
            $msg=$x/$y;
        }

    }

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body style="text-align: center; align-items: center; margin: 250px; background-color: yellow;">
        <form method="POST">
            <input type="text" name="num1" placeholder="First Number">
            <br>
            <br>
            <input type="text" name="num2" placeholder="Second Number">
            <br>
            <br>
            <input type="radio" name="op" value="sum">
            <label for="+">+</label><br>
            <input type="radio" name="op" value="min">
            <label for="-">-</label><br>
            <input type="radio" name="op" value="mul">
            <label for="*">*</label><br>
            <input type="radio" name="op" value="div">
            <label for="/">/</label><br><br>
            <button type="submit" name="btn">Calculate</button><br><br>
            <?php
            if(isset($msg))
            {
                echo $msg;
            }
            ?>
        </form>
    </body>
</html>