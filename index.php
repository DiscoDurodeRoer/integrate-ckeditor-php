<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ckeditor</title>
    <script src="./includes/ckeditor/ckeditor.js"></script>
   
</head>

<body>


    <form action="info.php" method="POST">

        <textarea name="editor" id="editor">
            
        </textarea>

        <br />

        <input type="submit" value="Enviar" />

    </form>

    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .catch(error => {
                console.error(error);
            });
    </script>

</body>

</html>