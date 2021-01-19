@extends('layouts.master')
@if(App::isLocale('ru'))
@section('title', 'ЗА ЛЕГАЛЬНЫЙ КОНТЕНТ')
@else
@section('title', 'FOR LEGAL CONTENT')
@endif
@section('content')
</section>
<section id="years__sections">
    <div class="container">
        <div class="">
            @if(App::isLocale('ru'))
            <div>
                <p class="title__years_solo">ЗА ЛЕГАЛЬНЫЙ КОНТЕНТ</p>
                <p class="undotitle__years_solo">Конкурс видеороликов «За легальный контент»</p>
                <p class="podundotitle__years_solo">
                    Москва, РФ —11 ноября 2015 г. ООО «Стрим» ( входит в группу компаний АФК «Система»), лидер рынка по созданию, разработке и агрегации дополнительных услуг для абонентов сотовой связи, а также в области лицензирования и закупки музыкального и видео контента, объявляет о начале общероссийского конкурса «За легальный контент».
                </p>
                <p>
                    <br><br>Основная задача конкурса – поддержка и продвижение легального контента в Интернете, включая аудио, видео и книжную продукцию, и повышение количества ответственных пользователей контентом.
                    <br><br>К участию в конкурсе «За легальный контент» приглашаются старшеклассники, студенты, молодые специалисты и все желающие, разделяющие точку зрения, что лицензионные фильмы, музыка, книги и другие результаты интеллектуальной творческой деятельности в Интернете должны быть доступны широкому пользователю в хорошем качестве за определенную плату.
                    <br><br>Платить за фильмы, музыку и книги в Сети - так же естественно, как покупать билет в кино, на концерт или книгу в книжном магазине. Скачивать бесплатно, обходя законодательство, должно стать не просто незаконным, а не модным.
                    <br><br>Предлагаем участникам конкурса создать свой собственный видеоролик на эту тему, разместить его в Youtube и отправить ссылку на ролик в заявке на участие в конкурсе на сайте telecomideas.com.
                    <br><br>Требования к ролику: может быть снят на любой смартфон или иное устройство с функцией видеозаписи. Продолжительность – до 1 минуты.
                    <br><br>Важно: поделитесь роликом с друзьями в социальных сетях, разделите с ними свою позицию и получите лайки.
                    <br><br>Критерии отбора: ролик, набравший наибольшее количество просмотров на Youtube по данным на 1 марта 2016 г., получает «Премию – чемпион».
                    <br><br>Приз победителю:
                    <br><br>Камера Go Pro.
                    <br><br>Количество номинаций может быть изменено.
                    <br><br>Сроки проведения конкурса – с 11 ноября 2015 года по 1 марта 2016 года.
                    <br><br>В апрел будут объявлены подведенные итоги.
                    <br><br>В жюри конкурса входят представители компании «Стрим», ПАО «МТС» и компании GetShop.TV – участника конкурса «Телеком Идея 2015».
                    <br><br>Дополнительная информация : chernyakhovskaya@stream.ru

                    <br><br>
                    <iframe width="100%" height="450" src="https://www.youtube.com/embed/NBB8S069O94?list=PLN7dJ6MZYo0LGf5KQ4cNpWOFHyc4PMNIR" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </p>
            </div>
            @else
            <div>
                <p class="title__years_solo"> FOR LEGAL CONTENT </p>
                <p class="undotitle__years_solo"> Video Contest "For Legal Content" </p>
                <p class="podundotitle__years_solo">
                    Moscow, RF — November 11, 2015 Stream LLC (part of the AFK Sistema group of companies), a market leader in the creation, development and aggregation of value-added services for cellular subscribers, as well as in the field of licensing and purchasing music and video content , announces the start of the all-Russian competition "For Legal Content".
                </p>
                <p>
                    <br> <br> The main objective of the competition is to support and promote legal content on the Internet, including audio, video and book products, and to increase the number of responsible content users.
                    <br> <br> High school students, students, young specialists and everyone who wants to share the point of view that licensed films, music, books and other results of intellectual creative activity on the Internet should be available to a wide user are invited to participate in the competition "For Legal Content" in good quality for a fee.
                    <br> <br> Paying for movies, music and books on the Internet is as natural as buying a ticket to a movie, concert or book in a bookstore. Downloading for free, bypassing the law, should become not just illegal, but not fashionable.
                    <br> <br> We invite the contestants to create their own video on this topic, post it on Youtube and send a link to the video in the application for participation in the contest on the telecomideas.com website.
                    <br> <br> Requirements for the video: can be filmed on any smartphone or other device with video recording function. Duration - up to 1 minute.
                    <br> <br> Important: share the video with your friends on social networks, share your position with them and get likes.
                    <br> <br> Selection criteria: the video with the highest number of views on Youtube as of March 1, 2016, receives the “Champion Award”.
                    <br> <br> Prize for the winner:
                    <br> <br> Camera Go Pro.
                    <br> <br> The number of nominations can be changed.
                    <br> <br> Terms of the competition - from November 11, 2015 to March 1, 2016.
                    <br> <br> Summed up results will be announced in April.
                    <br> <br> The jury of the competition includes representatives of the Stream company, MTS PJSC and GetShop.TV company - the participant of the Telecom Idea 2015 competition.
                    <br> <br> Additional information: chernyakhovskaya@stream.ru

                    <br> <br>
                    <iframe width="100%" height="450" src="https://www.youtube.com/embed/NBB8S069O94?list=PLN7dJ6MZYo0LGf5KQ4cNpWOFHyc4PMNIR" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </p>
            </div>
            @endif
        </div>
    </div>
</section>



@endsection