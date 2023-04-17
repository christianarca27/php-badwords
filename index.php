<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Bad Words</title>
    
    <style lang="scss">
        h1 {
            text-align: center;
        }

        form {
            max-width: 900px;
            margin-left: auto;
            margin-right: auto;

            display: flex;
            flex-flow: column nowrap;
            align-items: center;
            gap: 1rem;

            #input-paragraph {
                font-size: 1.2rem;
            }

            #input-badword {
                width: 50%;
                font-size: 1.2rem;
            }

            #input-submit {
                padding: 1rem;
                cursor: pointer;
                font-size: 1.2rem;
            }
        }
    </style>
</head>
<body>
    <h1>PHP Bad Words</h1>

    <form action="badwords.php" method="get">
        <textarea name="paragraph" placeholder="Inserisci paragrafo da controllare" cols="40" rows="10" id="input-paragraph" required></textarea>
        <input type="text" name="badword" placeholder="Inserisci parola da censurare" id="input-badword" required>
        
        <input type="submit" value="Censura" id="input-submit">
    </form>
</body>
</html>