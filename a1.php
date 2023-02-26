<?php
require 'a3.php';
?>
<html>
    <head></head>
    <body>
        <h2 align="center">BILL</h2>
        <form method="post" action="a2.php" onsubmit="return(validate())">
            <table border="1" align="center">
                <tr><td>Item code</td>
                    <td><input type ="text" name="itemcode" id="tc"></td></tr>
                <tr><td>Item name</td>
                    <td><input type="text" name="name" id="nm"></td></tr>
                <tr><td colspan="2" align ="center"> <input type="submit" value="check" ></td></tr>
            </table>
            
            </form>

            <br>
            <br>
            <table border=1>
                <tr>
                    <th>Sl.No.</th>
                    <th>Item Code</th>
                    <th>Item Name</th>
                </tr>
                <?php
                    $sql="SELECT * FROM stud1";
                    if($res = mysqli_query($link,$sql)){
                        $n = 1;
                        while($row = mysqli_fetch_assoc($res)) {
                            ?>
                            <tr>
                                <td><?php echo $n?></td>
                                <td><?php echo $row['Item_code'];?></td>
                                <td><?php echo $row['Item_name'];?></td>
                            </tr>
                            <?php
                            
                            $n++;
                        }
                    }
                ?>
            </table>
        </body>

<script>
    function validate(){
        var n=document.getElementById("tc").value;
        if(n=="")
        {
            alert ("itemcode empty");
        }
        var m=document.getElementById("nm").value;
        if(m=="")
        {
            alert ("itemname empty");
        }
    }
</script>
    
    </html>
