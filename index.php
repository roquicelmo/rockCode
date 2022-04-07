<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Rock Code | Web Solutions</title>
</head>

<body>
    <div class="main">
        <div class="bgHome">
            <div class="container">
                <div class="contentWelcome">
                    <div class="logoArea">
                        <img src="assets/img/white_h_slogan.png" alt="">
                    </div>
                    <div class="loaderHome">
                        <img src="assets/img/loader.gif" alt="loader">
                    </div>
                    <div class="titleWelcome">
                        <h2>Bem vindo</h2>
                    </div>
                    <div class="textWelcome">
                        <p>Este website se encontra atualmente em construção, em breve você terá acesso aos projetos e soluções da Rock Code. Para entrar em contato, clique no botão abaixo.</p>
                    </div>
                    <div class="buttonArea">
                        <a href="https://wa.me/556296589752" class="contact">Fale conosco</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</html>

<script>
    $(document).ready(function() {
        setTimeout(function() {
            $('.loaderHome').fadeOut(400, function() {
                $(this).remove()
                $('.titleWelcome').fadeIn()
                $('.textWelcome').fadeIn()
                $('.buttonArea').fadeIn()
            });
        }, 2000);
    })
</script>