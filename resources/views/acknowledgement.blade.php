<DOCTYPE html>
<html>
    <header>
        <title>Income Certificate Portal</title>
        <link rel="stylesheet" type="text/css" id="applicationStylesheet" href="css/acknowledgement.css"/>

    </header>
<body>
    <div id="ack">
    <h1 id="a">Acknowledgement<h1>
    <p>&nbsp;&nbsp;&nbsp;This is to acknowledge the receipt Income Certificate</p><br>
    <p>with Application No. {{$acknowledgement->Application_Number}}</p><br>
    <p>dated on {{$acknowledgement->updated_at}}to the SDO </p><br>
    <p>has been SUBMITTED</p><br><br>

    <p>Place:   Aizawl</p><br>
    <p>Date:    {{$acknowledgement->updated_at}} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Authority Signature</p><br><br><br>
    <p id="last">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_________________________</p>




    </div>