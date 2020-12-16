jQuery(function($){
    $('#loadmore').click(function(){ // клик на кнопку
        $(this).text('Загрузка...'); // меняем текст на кнопке
        // получаем нужные переменные
        var data = {
            'action': 'loadmore'
        };
        // отправляем Ajax запрос 
        $.ajax({
            url:ajaxurl,
            data:data,
            type:'POST',
            success:function(data){
                if(data) { 
                    $('.bottom_info').before(data); // добавляем новые посты
                    $('#loadmore').text('Показать весь рейтинг');
                    $('.bottom_info').css('display', 'none'); // если последняя страница, удаляем кнопку

                }
            }
        });
    });
});


