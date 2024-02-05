<DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset ="UTF-8>
        meta http-equiv = "X-UA-Compatible" content = "IE=edge>


        <title>Form</title>
    </head>

<body>
    <form action="form.pfp" method="post">

    <label for="someid">First Name</label>

    <input type = "text" name = "fname" size = "5" maxlength = "10" placeholder = "Enter your first name">
    <input type = "text" name = "lname" size = "5" maxlength = "10" disabled>
    <!-- Disbaled: no editing, no data sent. | Read only: read only, but submits this read only data to server-->

    <!-- optimized for longer responses-->
<label for="address" >Address:</label>
<textarea id="address" name="address" cols="30" rows="4"></textarea>

</form>


</body>
</html>