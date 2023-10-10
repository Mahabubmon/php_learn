<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uploading Image File With PHP</title>
    <style>
        body{font-family:verdana}
        .phpcoding{width:900px;margin: 0 auto;background:#ddd}
        .headeroption, .footeroption{background:#444;color:#fff;text-align:center;
         padding: 20px;}
        .headeroption h2, .footeroption h2{margin:0;}
        .mainoption{min-height: 420px; padding:20px;}
        .myform{width:500px; border:1px solid #999; margin: 0 auto; padding: 10px 20px;}
        input[type="submit"],input[type="file"]{cursor: pointer;}
    </style>
</head>
<body>
    <div class="phpcoding">
        <section class="headeroption">
            <h2>Uploading Image File with PHP</h2>
        </section>
        <section class="mainoption">
           <div class="myform">
           <form action="" method ="post" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>Select Image</td>
                    <td><input type="file" name="image"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="submit" value="Upload"></td>
                </tr>
            </table>
           </form>
           </div> 
        </section>
        <section class="footeroption">
            <h2> </h2>
        </section>
    </div>
    
</body>
</html>