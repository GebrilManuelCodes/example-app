<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <!-- Styles -->
        <style>
            .container{
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
            }
            .title{
                background-color: blue;
                color: white;
                padding: 8px;
            }
            .itens{
                display: flex;
                flex-direction: row;
                align-items: center;
                justify-content: center;
                /* width: 50%; */
            }
            .titulos{
                display: flex;
                flex-direction: column;
                text-align: justify;
            }
            .dados{
                display: flex;
                flex-direction: column;
                text-align: justify;
                margin-left: 40px;
            }
           input{
            background-color: blue;
            color: white;
            padding: 10px;
            margin-top: 10px;
           }
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="container">
            <div class="title">
            <h1>Perfil do Estudante</h1>
            </div>
            <div>
                <h3>Gebril Manuel</h3>
            </div>
            <div>
                <div class="itens">
                    <div class="titulos">
                        <strong>Curso:</strong>
                        <strong>Instituição:</strong>
                        <strong>Email:</strong>
                        <strong>Telefone:</strong>
                    </div>
                    <div class="dados">
                        <span class="space">Ciências da Computação</span>
                        <span class="space">Instituto Superior Privado Kiaxi</span>
                        <span class="space">gebr@gmail.com</span>
                        <span class="space">967 983 339</span>
                    </div>
                </div>
                
            </div>
            <input type="button" value="Editar Perfil">
        </div>
    </body>
</html>