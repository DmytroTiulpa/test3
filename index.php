<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Тестовое задание">
    <meta name="keywords" content="php, js, ajax">
    <meta name="author" content="Dmytro Tiulpa">
    <title></title>
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.6.21/dist/css/uikit.min.css"/>
    <!-- UIkit JS -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.6.21/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.6.21/dist/js/uikit-icons.min.js"></script>
    <!-- JQuery / Ajax -->
    <script src="https://code.jquery.com/jquery-latest.js"></script>
    <!-- for test-->
    <script src="js/script.js"></script>
</head>
<body>

<div class="uk-section uk-section-muted" style="height: 100vh;">
    <div class="uk-container uk-container-large uk-height-1-1 uk-flex uk-flex-center uk-flex-middle">

        <div class="uk-card uk-card-default uk-card-small uk-card-body" style="">
            <form id="registration" method="post" action="">

                <h3 class="uk-text-center">Форма регистрации</h3>

                <div class="uk-margin-small">
                    <div class="uk-inline uk-width-1-1">
                        <span class="uk-form-icon uk-icon" data-uk-icon="icon: user"></span>
                        <label for="name"></label>
                        <input id="name" name="name" class="uk-input" type="text" placeholder="имя" required>
                    </div>
                </div>

                <div class="uk-margin-small">
                    <div class="uk-inline uk-width-1-1">
                        <span class="uk-form-icon uk-icon" data-uk-icon="icon: user"></span>
                        <label for="surname"></label>
                        <input id="surname" name="surname" class="uk-input" type="text" placeholder="фамилия" required>
                    </div>
                </div>

                <div id="userError" class="uk-alert-danger uk-margin-small" data-uk-alert style="display:none;">
                    <a class="uk-alert-close" data-uk-close></a>
                    <p></p>
                </div>

                <div id="emailError" class="uk-alert-danger uk-margin-small" data-uk-alert style="display:none;">
                    <a class="uk-alert-close" data-uk-close></a>
                    <p></p>
                </div>

                <div class="uk-margin-small">
                    <div class="uk-inline uk-width-1-1">
                        <span class="uk-form-icon uk-icon" data-uk-icon="icon: mail"></span>
                        <label for="email"></label>
                        <input id="email" name="email" class="uk-input" type="email" placeholder="email" required>
                    </div>
                </div>

                <div class="uk-margin-small">
                    <div class="uk-inline uk-width-1-1">
                        <span class="uk-form-icon uk-icon" data-uk-icon="icon: lock"></span>
                        <label for="password"></label>
                        <input id="password" name="password" class="uk-input" type="password" placeholder="пароль" required>
                    </div>
                </div>

                <div id="passwordError" class="uk-alert-danger uk-margin-small" data-uk-alert style="display:none;">
                    <a class="uk-alert-close" data-uk-close></a>
                    <p></p>
                </div>

                <div class="uk-margin-small">
                    <div class="uk-inline uk-width-1-1">
                        <span class="uk-form-icon uk-icon" data-uk-icon="icon: lock"></span>
                        <label for="password-confirm"></label>
                        <input id="password-confirm" name="confirm" class="uk-input" type="password" placeholder="повторите пароль" required>
                    </div>
                </div>

                <div class="uk-margin-small">
                    <button type="submit" class="uk-button uk-button-primary uk-button-large uk-width-1-1">Регистрация</button>
                </div>

            </form>
        </div>

    </div>
</div>

</body>
</html>