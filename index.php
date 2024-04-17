<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Reserva</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Lato:wght@700&family=Open+Sans&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Open Sans', sans-serif;
        }

        body {
            background-color: #EEE;
        }

        header {
            padding: 10px 0;
            background-color: #333;
            color: #FFF;
        }

        nav.menu ul {
            list-style-type: none;
        }

        nav.menu a {
            color: #FFF;
            text-decoration: none;
        }

        nav.menu li {
            display: inline-block;
            padding: 0 8px;
        }

        .logo {
            float: left;
        }

        nav.menu {
            position: relative;
            top: 4px;
            float: right;
        }

        .clear {
            clear: both;
        }

        .center {
            max-width: 1100px;
            margin: 0 auto;
            padding: 0 2%;
        }

        section.reserva {

            padding: 40px 0;
        }

        section.reserva select {
            width: 100%;
            height: 30px;
            border: 1px solid #CCC;
        }

        section.reserva input[type="submit"] {
            background-color: #4286F4;
            width: 200px;
            /* height: 30px; */
            cursor: pointer;
            color: #FFF;
            outline: none;
            border: none;
            padding: 10px;
            margin-top: 15px;
            border-radius: 5px;
            font-size: 19px;
        }

        section.reserva input[type="submit"]:active {
            transform: scale(1.05);
        }
    </style>
</head>

<body>
    <header>
        <div class="center">
            <div class="logo">
                <h2>Test Code</h2>
            </div>
            <nav class="menu">
                <ul>
                    <li><a href="" id="">Reservas</a></li>
                    <li><a href="" id="">Sobre</a></li>
                    <li><a href="" id="">Contato</a></li>
                </ul>
            </nav>
            <div class="clear"></div>
        </div>
    </header>
    <section class="reserva">
        <div class="center">
            <form action="#" method="post">
                <select name="" id="">
                    <option>Selecione o horário</option>
                    <?php for ($i = 0; $i < 24; $i++) {
                        $hora = $i;
                        if ($i < 10) {
                            $hora = "0" . $i;
                        } else {
                            $hora = $i;
                        }

                        $hora .= ":00:00";
                        $dataHora = date("d-m-Y", strtotime('now')) . " " . $hora;
                        ?>
                        <option value="<?= $dataHora ?>"><?= $dataHora ?></option>
                    <?php } ?>
                </select>
                <input type="submit" name="acao" value="Enviar">
            </form>
        </div>
    </section>
</body>

</html>