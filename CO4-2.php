<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Electricity bill</title>
</head>
<body>
    <center>
        <form method="POST">
            <div>
                <table style="border: 2px solid black; padding: 15px">
                    <tr>
                        <td>
                            Enter the meter number:
                            <input type="number" name="meter">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Enter the no.of.units:
                            <input type="number" name="unit">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Enter the category:
                            <select name="tariff">
                                <option>Rural</option>
                                <option>Residential</option>
                                <option>Commercial</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <button name="fn">Submit</button>
                        </td>
                    </tr>
                </table>
            </div>
        </form>
    </center>
</body>
</html>

<?php
if(isset($_POST["fn"]))
{
    $n1=$_POST['meter'];
    $n2=$_POST['unit'];
    $n3=$_POST['tariff'];
    if($n3=="Rural")
    {
        if($n2>0&&$n2<=50)
        {
            $ap=5;
            $pay=(($n2*.25)+$ap);
            echo "$pay";
            echo "<br>";
        }
        elseif($n2>50&&$n2<=100)
        {
            $ap=5;
            $pay=(($n2*.50)+$ap);
            echo "$pay";
            echo "<br>";
        }
        elseif($n2>100&&$n2<=150)
        {
            $ap=5;
            $pay=(($n2*.75)+$ap);
            echo "$pay";
            echo "<br>";
        }
        elseif($n2>150&&$n2<=200)
        {
            $ap=5;
            $pay=(($n2*1)+$ap);
            echo "$pay";
            echo "<br>";
        }
        elseif($n2>200&&$n2<=300)
        {
            $ap=5;
            $pay=(($n2*2)+$ap);
            echo "$pay";
            echo "<br>";
        }
        elseif($n2>300&&$n2<=500)
        {
            $ap=5;
            $pay=(($n2*3)+$ap);
            echo "$pay";
            echo "<br>";
        }
        echo "Your meter number is: ".$n1;
        echo "<br>";
        echo "Your unit is: ".$n2;
        echo "<br>";
        echo "Your additional pay is: ".$ap;
        echo "<br>";
        echo "Your pay is: ".$pay;
    }
    if($n3=="Residential")
    {
        if($n2>0&&$n2<=50)
        {
            $ap=20;
            $pay=(($n2*.50)+$ap);
            echo "$pay";
            echo "<br>";
        }
        elseif($n2>50&&$n2<=100)
        {
            $ap=20;
            $pay=(($n2*1)+$ap);
            echo "$pay";
            echo "<br>";
        }
        elseif($n2>100&&$n2<=150)
        {
            $ap=20;
            $pay=(($n2*1.75)+$ap);
            echo "$pay";
            echo "<br>";
        }
        elseif($n2>150&&$n2<=200)
        {
            $ap=20;
            $pay=(($n2*2.50)+$ap);
            echo "$pay";
            echo "<br>";
        }
        elseif($n2>200&&$n2<=300)
        {
            $ap=20;
            $pay=(($n2*3)+$ap);
            echo "$pay";
            echo "<br>";
        }
        elseif($n2>300&&$n2<=500)
        {
            $ap=20;
            $pay=(($n2*5)+$ap);
            echo "$pay";
            echo "<br>";
        }
        echo "Your meter number is: ".$n1;
        echo "<br>";
        echo "Your unit is: ".$n2;
        echo "<br>";
        echo "Your additional pay is: ".$ap;
        echo "<br>";
        echo "Your pay is: ".$pay;
    }
    if($n3=="Commercial")
    {
        if($n2>0&&$n2<=50)
        {
            $ap=30;
            $pay=(($n2*1)+$ap);
            echo "$pay";
            echo "<br>";
        }
        elseif($n2>50&&$n2<=100)
        {
            $ap=30;
            $pay=(($n2*2)+$ap);
            echo "$pay";
            echo "<br>";
        }
        elseif($n2>100&&$n2<=150)
        {
            $ap=30;
            $pay=(($n2*3)+$ap);
            echo "$pay";
            echo "<br>";
        }
        elseif($n2>150&&$n2<=200)
        {
            $ap=30;
            $pay=(($n2*4)+$ap);
            echo "$pay";
            echo "<br>";
        }
        elseif($n2>200&&$n2<=300)
        {
            $ap=30;
            $pay=(($n2*5)+$ap);
            echo "$pay";
            echo "<br>";
        }
        elseif($n2>300&&$n2<=500)
        {
            $ap=30;
            $pay=(($n2*7)+$ap);
            echo "$pay";
            echo "<br>";
        }
        echo "Your meter number is: ".$n1;
        echo "<br>";
        echo "Your unit is: ".$n2;
        echo "<br>";
        echo "Your additional pay is: ".$ap;
        echo "<br>";
        echo "Your pay is: ".$pay;
    }
}