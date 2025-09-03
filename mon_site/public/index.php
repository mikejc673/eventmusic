<?php

use App\Kernel;

require_once dirname(__DIR__).'/vendor/autoload_runtime.php';

return function (array $context) {
    return new Kernel($context['APP_ENV'], (bool) $context['APP_DEBUG']);
};

?>
<!DOCTYPE html>
<html>
<head>
    <title>SUNFEST</title>
    <link rel="stylesheet" href="{{ asset('css/sunfest.css') }}">
</head>
<body>
    <div class="background-container">
        <img src="{{ asset('images/sunfest_bg.jpeg') }}" alt="Foule de festivaliers de nuit avec étoiles">
    </div>
    
    <div class="overlay">
        <header>
            <nav class="main-nav">
                </nav>
        </header>

        <main class="content-container">
            <h1 class="main-heading">Hello world!</h1>
            <p class="event-date">06.28.018</p>
            
            <div class="countdown-timer">
                <div class="timer-box">
                    <span class="timer-value">0</span>
                    <span class="timer-label">Jours</span>
                </div>
                <div class="timer-box">
                    <span class="timer-value">0</span>
                    <span class="timer-label">Heures</span>
                </div>
                <div class="timer-box">
                    <span class="timer-value">0</span>
                    <span class="timer-label">Minutes</span>
                </div>
                <div class="timer-box">
                    <span class="timer-value">0</span>
                    <span class="timer-label">Secondes</span>
                </div>
            </div>
        </main>
    </div>
</body>
</html>

