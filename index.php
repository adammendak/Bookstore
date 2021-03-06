<DOCTYPE !html>
<html lang="pl">
    <head>
        <meta charset="UTF-8">
        <title>Library</title>
        <link rel="stylesheet" href="css/style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
        <script src="js/script.js"></script>
    </head>
    <body>
        <nav>
        </nav>
        <main>
            <section class="bookForm">
            <form>
                <h3>Dodaj książkę:</h3>
                <label>
                    Tytuł:<br>
                    <input id="titleInput" type="text" placeholder="title" name="title"><br>
                </label>
                <label>
                    Autor:<br>
                    <input id="authorInput" type="text" placeholder="author" name="author"><br>
                </label>
                <label>
                    Opis:<br>
                    <input id="descriptionInput" type="text" placeholder="description" name="description"><br>
                </label>
                <input id="addBook" type="submit" value="addBook" placeholder="dodaj książkę">
            </form>
            </section>
            <section class="showBooks">
            <form method="GET">
                <input id="showBooks" type="submit" value="Pokaż książki">
            </form>
            <h1>Lista Książek: </h1>
            <div id="bookList">
            </div>
            </section>
        </main>
        <footer>
        </footer>
    </body>
</html>
