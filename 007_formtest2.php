<?php
    if(!empty($_POST["principal"])) 
    {
        $principal = $_POST["principal"];
        $years = $_POST["year"];
        $interest = $_POST["interest"];
    }
    else
    {
        $principal = "(Not Entered!)";
        $years = "(Not Entered!)";
        $interest = "(Not Entered!)";
    }
    echo <<< _END
        "
        <html>
            <head>
            <body>
                Your Loan Amount is: $principal <br>
                Number of Years: $years <br>
                Interest Rate: $interest <br> <br>
                <form method="post" action="formtest2.php">
                    Load Amount     <input type="text" name="principal"> <br>
                    Number of Years <input type="text" name="year" value="15"> <br>
                    Interest Rate   <input type="text" name="interest" value="3"> <br>
                    Submit          <input type="submit">
                </form>
            </body>
            </head>
        </html>
    _END;
?>