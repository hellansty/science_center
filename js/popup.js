$(document).ready(function() { // Ждём загрузки страницы
    $(".popup_bg").click(function() { // Событие клика на затемненный фон      
        $(".popup").fadeOut(100); // Медленно убираем всплывающее окно
    });
});

function showPopup() {
    $(".popup").fadeIn(200); // Медленно выводим изображение
}

function closePopup() {
        $(".popup").fadeOut(100); // Медленно убираем всплывающее окно
}