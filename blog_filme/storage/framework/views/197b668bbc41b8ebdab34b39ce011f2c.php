<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title><?php echo $__env->yieldContent('title'); ?></title>

        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="/css/style.css">

    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="collapse navbar-collapse" id="navbar">
                    <a href="/" class="navbar-brand">
                        <img src="/images/logo.png" alt="Logo" width="50px">
                    </a>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="/" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="/" class="nav-link">Avaliar</a>
                        </li>
                        <li class="nav-item">
                            <a href="/" class="nav-link">Login</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <?php echo $__env->yieldContent('content'); ?>
        <footer>
           <p>Blog Filmes &copy; 2024</p>
        </footer>
    </body>
</html>
<?php /**PATH C:\Users\vinic\Documents\blog_filme\resources\views/layouts/main.blade.php ENDPATH**/ ?>