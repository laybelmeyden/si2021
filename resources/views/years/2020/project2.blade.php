@extends('layouts.master')
@if(App::isLocale('ru'))
@section('title', 'ОТКРЫТА РЕГИСТРАЦИЯ НА SOCIAL REGIONAL IT HACK!')
@else
@section('title', 'REGISTRATION FOR SOCIAL REGIONAL IT HACK IS OPEN!')
@endif
@section('content')
</section>
<section id="years__sections">
    <div class="container">
        <div class="">
            @if(App::isLocale('ru'))
            <div>
                <p class="title__years_solo">ОТКРЫТА РЕГИСТРАЦИЯ НА SOCIAL REGIONAL IT HACK!</p>
                <p class="undotitle__years_solo">Ты программист ? Интересуешься такими направлениями, как Smart City и «интернет вещей» Тогда тебе на Social Regional IT Hack!</p>
                <p class="podundotitle__years_solo">
                    Social Regional IT Hack – это online-хакатон в новом формате:
                </p>
                <p class="main_text_item">
                    • не нужно тратить время на поездку на мероприятие – участвуй, прямо не выходя из дома!
                    <br><br>• возможность повысить свой профессиональный уровень за счет увлекательной образовательной программы от ведущих спикеров отрасли
                    <br><br>• деловой нетворкинг. Именно на таком мероприятии Вы сможете найти партнеров и единомышленников
                    <br><br>• возможность выиграть по-настоящему полезные призы, в том числе «пакет разработчика» от компании МТС и деловой тур по ведущим компаниям IT-сектора!
                    <br><br>Для участия в хакатоне необходимо пройти регистрацию до 13 ноября 2020 года на сайте www.it-hackathon.ru
                    <br><br>Генеральным партнером Social Regional IT Hack выступает компания ПАО «МТС»
                    <br><br>Следите за новостями на наших ресурсах:
                    <br><br>Сайт Online-хакатона: www.it-hackathon.ru
                    <br><br>• Сайт АНО АИР: www.rusinnovations.com
                    <br><br>• VK: https://vk.com/aidrussia
                    <br><br>• Facebook: https://www.facebook.com/groups/2621611817948990/
                    <br><br>По всем вопросам: info@rusinnovations.com, 8(499)753 01 25
                </p>
            </div>
            @else
            <div>
                <p class="title__years_solo"> SOCIAL REGIONAL IT HACK REGISTRATION OPEN! </p>
                <p class="undotitle__years_solo"> Are you a programmer? Are you interested in such areas as Smart City and "Internet of Things" Then you are on Social Regional IT Hack! </p>
                <p class="podundotitle__years_solo">
                    Social Regional IT Hack is an online hackathon in a new format:
                </p>
                <p class="main_text_item">
                    • no need to waste time on a trip to the event - take part without leaving your home!
                    <br> <br> • the opportunity to improve your professional level through an exciting educational program from leading industry speakers
                    <br> Exhibition • business networking. It is at such an event that you can find partners and like-minded people
                    <br> <br> • an opportunity to win really useful prizes, including a "developer package" from MTS and a business tour of the leading companies in the IT sector!
                    <br> <br> To participate in the hackathon, you must register before November 13, 2020 on the website www.it-hackathon.ru
                    <br> <br> The general partner of Social Regional IT Hack is MTS PJSC
                    <br> <br> Follow the news on our resources:
                    <br> <br> Online-hackathon website: www.it-hackathon.ru
                    <br> <br> • Site of ANO AIR: www.rusinnovations.com
                    <br> <br> • VK: https://vk.com/aidrussia
                    <br> <br> • Facebook: https://www.facebook.com/groups/2621611817948990/
                    <br> <br> For all questions: info@rusinnovations.com, 8 (499) 753 01 25
                </p>
            </div>
            @endif
        </div>
    </div>
</section>



@endsection