<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta name="description" content="Calcule a sua média, ou faça simulações de quais podem ser as suas notas.">
    <meta name="author" content="CalCMedia">
    <link rel="alternate" href="" hreflang="pt-br" />
    <meta name="robots" content="index, follow">
    <meta property="og:image" content="assets/imgs/android/android-launchericon-512-512.png" />
    <link rel="canonical" href="calcmediafga.epizy.com" />
    <meta property="og:type" content="website" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <link crossorigin="use-credentials" rel="manifest" href="assets/manifest.json" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/c221e013ed.js" crossorigin="anonymous"></script>
    <meta charset="UTF-8" />
    <link rel="shortcut icon" sizes="512x512" href="assets/imgs/icon-512x512.png">
    <title>Calculadora de Médias</title>
</head>

<body>
    <?php include('menu.html'); ?>
    <header>
        <p class="txt-header">Simule sua média</p>
    </header>
    <div class="txt-body">
        <p>
            Para simular sua média, basta selecionar uma das disciplinas disponíveis no menu ou procurar através da caixa de pesquisa.
        </p>
    </div>
    <div class="painel-container" style="margin-top:5%">
        <div class="painel" style="display: flex;justify-content: center;align-items: center; height: 200px;">
            <div class="leftinfo">
                <div id="bigtext" class="bigtext">
                    Fim do semestre em:
                    <div id="counter"></div>
                    <div class="progress-bar-container">
                        <div class="progress-bar" id="progress-bar"></div>
                    </div>
                    <div id="counter" class="countdown"></div>
                    <div id="bigtext" class="big-text"></div>
                </div>
            </div>
        </div>
        <div class="painel" style="text-align: left; height:200px">
            <div class="painel-header">📅 Confira as datas:</div>
            <div class="painel-body">
                <p class="txt-white" style="font-weight: normal;">2022.2: Até 18/02/2023
                    <br>2023.1: 28/03/2023 a 25/07/2023
                    <br>2023.2: 25/08/2023 a 23/12/2023
                </p>
            </div>
        </div>
    </div>

    <br><br>
    <?php include('footer.html'); ?>
    <script src="assets/js/countdown.js?v=270823"></script>
    <script src="assets/js/pwabuilder-sw.js"></script>
    <script src="assets/js/search.js?v=270823"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
</body>

</html>