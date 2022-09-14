<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <div style="background:#E0AC69;padding-top:5%;padding-bottom:5%;padding-left:5%;padding-right:5%;border-radius:2%;"> -->
            <form action="" method="post" style="background:#E0AC69;padding-top:5%;padding-bottom:5%;padding-left:5%;padding-right:5%;border-radius:2%;">
                    <center>
                        <hr>
                        <h3>Computing Midterm Grades with PHP Application</h3>
                        <hr>
                        <table border=0>
                            <tr>
                                <td style="border: 2px solid #C68642;border-radius: 7px;outline: none;border-color: #C68642;box-shadow: 0 0 10px #C68642;">
                                    STUDENT
                                </td>
                                <td style="border: 2px solid #C68642;border-radius: 7px;outline: none;border-color: #C68642;box-shadow: 0 0 10px #C68642;">
                                    <input type=text name="t1">
                                </td>
                            </tr>
                            <tr>
                                <td style="border: 2px solid #C68642;border-radius: 7px;outline: none;border-color: #C68642;box-shadow: 0 0 10px #C68642;">
                                    QUIZZES
                                </td>
                                <td style="border: 2px solid #C68642;border-radius: 7px;outline: none;border-color: #C68642;box-shadow: 0 0 10px #C68642;">
                                    <input type=text name="t2">
                                </td>
                            </tr>
                            <tr>
                                <td style="border: 2px solid #C68642;border-radius: 7px;outline: none;border-color: #C68642;box-shadow: 0 0 10px #C68642;">
                                    PROJECT
                                </td>
                                <td style="border: 2px solid #C68642;border-radius: 7px;outline: none;border-color: #C68642;box-shadow: 0 0 10px #C68642;">
                                    <input type=text name="t3">
                                </td>
                            </tr>
                            <tr>
                                <td style="border: 2px solid #C68642;border-radius: 7px;outline: none;border-color: #C68642;box-shadow: 0 0 10px #C68642;">
                                    MIDTERM EXAM
                                </td>
                                <td style="border: 2px solid #C68642;border-radius: 7px;outline: none;border-color: #C68642;box-shadow: 0 0 10px #C68642;">
                                    <input type=text name="t4">
                                </td>
                            </tr>
                            <tr>
                                <td style="border: 2px solid #C68642;border-radius: 7px;outline: none;border-color: #C68642;box-shadow: 0 0 10px #C68642;">
                                    EXERCISES
                                </td>
                                <td style="border: 2px solid #C68642;border-radius: 7px;outline: none;border-color: #C68642;box-shadow: 0 0 10px #C68642;">
                                    <input type=text name="t5">
                                </td>
                            </tr>
                        </table>
                        <br>
                        <br>
                        <input type=submit name="s" value="COMPUTE">
                    </center>
                    <?php
        if(isset($_POST['s']))////checking whether the input element is set or not
        {
            $studentid=$_POST['t1']; //accessing value from 1st text box
            $quiz=$_POST['t2']; //accessing value from 2nd text field
            $project=$_POST['t3']; //accessing value from 3rd text field
            $mid_exam=$_POST['t4']; //accessing value from 4th text field
            $exercise=$_POST['t5'];

            $midterm_grade=[($quiz * .2) + ($project + .3) + ($mid_exam * .2) + ($exercise * .3)]; //total marks
            if($midterm_grade>="1.0" &&$midterm_grade <="1.5"){
                $remarks="Perfect";
            } if($midterm_grade>"1.6" &&$midterm_grade <= "2.0") {
                $remarks="Great";
            } if($midterm_grade>="2.1" &&$midterm_grade <="2.5"){
                $remarks="Good";
            } if($midterm_grade>="2.6" &&$midterm_grade<="3.0"){
                $remarks="Try Harder!";
            } if($midterm_grade>="3.1"){
                $remarks="Better luck next time!";
            }
                
        echo "<br>";
        echo "<font size=4><center>STUDENT ID: ".$studentid."</center><br>"; 
        echo "<font size=4><center>Midterm Grade: ". intval($midterm_grade)."</center><br>"; 
        echo "<font size=4><center>Remarks: ".$remarks."</center>"; 
        }
                    ?>
                </form>
    <!-- </div> -->

</body>
</html>