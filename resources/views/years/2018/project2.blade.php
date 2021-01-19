@extends('layouts.master')
@section('title', 'MTS STARTUP HUB')
@section('content')
</section>
<section id="years__sections">
    <div class="container">
        <div class="years__project_grid">
            <div class="years__project_sticky">
                @if(App::isLocale('ru'))
                <div class="years__project_date">
                    <div class="years__project_date_items">
                        <p>1 ЭТАП</p>
                        <p>Акселерация</p>
                        <p></p>
                    </div>
                    <div class="years__project_date_items">
                        <p>2 ЭТАП</p>
                        <p>Пилотный проект</p>
                        <p></p>
                    </div>
                    <div class="years__project_date_items">
                        <p>3 ЭТАП</p>
                        <p></p>
                        <p>Масштабирование</p>
                    </div>
                </div>
                @else
                <div class="years__project_date">
                    <div class="years__project_date_items">
                        <p> STAGE 1 </p>
                        <p> Acceleration </p>
                        <p> </p>
                    </div>
                    <div class="years__project_date_items">
                        <p> STAGE 2 </p>
                        <p> Pilot project </p>
                        <p> </p>
                    </div>
                    <div class="years__project_date_items">
                        <p> STAGE 3 </p>
                        <p> </p>
                        <p> Scaling </p>
                    </div>
                </div>
                @endif
            </div>
            @if(App::isLocale('ru'))
            <div>
                <p class="title__years_solo">MTS STARTUP HUB</p>
                <p class="undotitle__years_solo"></p>
                <p class="podundotitle__years_solo">
                    Корпоративный акселератор MTS StartUp Hub предназначен для команд, которые разрабатывают перспективные IT-решения. Первый набор открыт по шести бизнес-направлениям: облачные технологии, искусственный интеллект, финансовые сервисы, цифровая медицина, автоматизация закупок и логистики, а также онлайн-обучение. Программа состоит из трех этапов.
                </p>
                <p>
                    Первый этап – акселерация. Участники заочно проходят бесплатный онлайн-курс, в ходе которого получают возможность доработать свой продукт под руководством менторов – отраслевых экспертов. Лучшие проекты получают грант в размере 200 тысяч рублей и доступ к очной программе – практическим мастер-классам и воркшопам, общению с экспертами МТС, которые развивают инновационные решения в компании.
                    <br><br>
                    Второй этап – пилотный проект. На этом этапе участники смогут проверить жизнеспособность продукта в рамках IT решений выбранных бизнес-направлений. Открывается доступ к более чем 100-миллионной клиентской базе оператора, каналам продаж и инфраструктуре. В частности, стартапы смогут воспользоваться вычислительными возможностям «облачной» инфраструктуры #CloudМТС. МТС готова компенсировать расходы команд на реализацию пилота до 500 тысяч рублей.
                    <br><br>Третий этап – масштабирование. Участники, чей пилот пройдет успешно, смогут стать долгосрочными партнерами компании и масштабировать свой бизнес. МТС готова рассматривать разные виды сотрудничества, от клиентского контракта до покупки решения. Кроме того, МТС планирует предлагать решения российских команд своим зарубежным партнерам. В частности, уже ведутся переговоры с крупнейшими европейскими операторами связи, с инновационными экосистемами Европы, Израиля и США.
                    <br><br>Возможность пользоваться инфраструктурой одной из ведущих российских технологических компаний и продвигать свой продукт под брендом МТС – главное преимущество MTS StartUp Hub. Кроме того, в отличие от большинства существующих акселераторов МТС в обмен на прохождение акселерационной программы не претендует на долю в компании.
                    <br><br>MTS StartUp Hub ориентирован на компании, которые уже имеют свой продукт и первых клиентов. Наиболее зрелые проекты, которые в заочном туре докажут востребованность своих продуктов, получат возможность сразу перейти к разработке пилотного проекта в партнерстве с МТС, пропустив очную часть программы. Рассматриваются только юридические лица. Все подробности о правилах участия и требованиях к участникам читайте на startup.mts.ru.
                    <br><br>Акселератор MTS StartUp Hub станет ключевым элементом системы взаимодействия МТС с молодыми технологическими компаниями. Упрощается процедура закупок и юридические аспекты сотрудничества, в результате, например, время оформления документации, связанной с внедрением партнерских инноваций, сокращается в разы. Кроме того, МТС открывает для разработчиков доступ к API продуктов.

                </p>
            </div>
            @else
            <div>
                <p class="title__years_solo"> MTS STARTUP HUB </p>
                <p class="undotitle__years_solo"> </p>
                <p class="podundotitle__years_solo">
                    The corporate accelerator MTS StartUp Hub is designed for teams that develop promising IT solutions. The first set is open in six business areas: cloud technology, artificial intelligence, financial services, digital medicine, procurement and logistics automation, and online training. The program consists of three stages.
                </p>
                <p>
                    The first stage is acceleration. Participants take a free online course in absentia, during which they get the opportunity to refine their product under the guidance of mentors - industry experts. The best projects receive a grant of 200 thousand rubles and access to the full-time program - practical master classes and workshops, communication with MTS experts who develop innovative solutions in the company.
                    <br> <br>
                    The second stage is a pilot project. At this stage, participants will be able to test the viability of the product within the IT solutions of the selected business areas. Access to more than 100 million operator's client base, sales channels and infrastructure is opened. In particular, startups will be able to take advantage of the computing capabilities of the # CloudMTS cloud infrastructure. MTS is ready to compensate the teams' expenses for pilot realization up to 500 thousand rubles.
                    <br> <br> The third stage is scaling. Participants, whose pilot is successful, will be able to become long-term partners of the company and scale their business. MTS is ready to consider various types of cooperation, from a client contract to purchasing a solution. In addition, MTS plans to offer solutions of Russian teams to its foreign partners. In particular, negotiations are already underway with major European telecom operators, with innovative ecosystems in Europe, Israel and the United States.
                    <br> <br> The ability to use the infrastructure of one of the leading Russian technology companies and promote your product under the MTS brand is the main advantage of MTS StartUp Hub. In addition, unlike most of the existing accelerators, MTS does not claim a stake in the company in exchange for passing the acceleration program.
                    <br> <br> MTS StartUp Hub is aimed at companies that already have their product and first customers. The most mature projects that prove the demand for their products in the correspondence round will have the opportunity to go straight to the development of a pilot project in partnership with MTS, skipping the full-time part of the program. Only legal entities are considered. Read all the details about the rules of participation and requirements for participants at startup.mts.ru.
                    <br> <br> The MTS StartUp Hub accelerator will become a key element of the system of interaction between MTS and young technology companies. The procurement procedure and the legal aspects of cooperation are simplified, as a result, for example, the time required to process the documentation related to the implementation of partner innovations is significantly reduced. In addition, MTS provides developers with access to API products.

                </p>
            </div>
            @endif
        </div>
    </div>
</section>



@endsection