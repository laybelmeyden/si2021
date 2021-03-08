<template>
  <div v-if="loading">
    <div class="preloader">
      <div>
        <div class="circle circle-1"></div>
        <div class="circle circle-2"></div>
        <div class="circle circle-3"></div>
        <div class="circle circle-4"></div>
        <div class="circle circle-5"></div>
      </div>
      <div>
        <p>Загрузка...</p>
      </div>
    </div>
  </div>
  <div v-else>
    <h1>МОЙ ПРОЕКТ</h1>
    <form @submit.prevent="updateProject" id="project__form">
    <input type="text" v-model.number="project.stages" hidden>
      <section id="stages_1" v-if="project.stages === 1">
        <div class="form__item">
          <label for="about_source"
            >Откуда вы узнали о конкурсе Social Idea?</label
          >
          <select
            name="about_source"
            id="about_source"
            class="form-select form-select-lg"
            aria-label=".form-select-lg example"
            v-model="project.about_source"
          >
            <option value="Социальные сети">Социальные сети</option>
            <option value="Реклама">Реклама</option>
            <option value="Другое">Другое</option>
          </select>
        </div>
        <div class="form__item">
          <p class="warning_item">
            Наши участники хотят изменить мир к лучшему. <br />
            Если это про вас, заполняйте заявку!
          </p>
          <p class="bold_item">
            Заявите о себе и получите шанс реализовать свою идею/продукт.
          </p>
          <ul>
            <li>Все поля обязательны для заполнения.</li>
            <li>
              Указывайте достоверные источники всех данных, представленных в
              проекте.
            </li>
            <li>
              Если у вас нет ответа на вопрос, кратко изложите причину. Не
              оставляйте поле незаполненным.
            </li>
          </ul>
        </div>
        <div class="form__item">
          <label for="nominations"
            >Выберите одну из двух номинаций Конкурса:</label
          >
          <div class="radio__container">
            <div class="form_radio_btn">
              <input
                id="nominations_eco"
                type="radio"
                name="nominations"
                v-model="project.nominations"
                value="Экология"
              />
              <label for="nominations_eco"
                >Экология<svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="30"
                  height="30"
                  viewBox="0 0 30 30"
                  fill="none"
                >
                  <g filter="url(#filter0_d)">
                    <circle cx="15" cy="15" r="11" fill="white" />
                  </g>
                  <path
                    d="M14.4404 17.1973C14.4495 16.6549 14.5111 16.2266 14.625 15.9121C14.7389 15.5977 14.9714 15.249 15.3223 14.8662L16.2178 13.9434C16.6006 13.5104 16.792 13.0456 16.792 12.5488C16.792 12.0703 16.6667 11.6966 16.416 11.4277C16.1654 11.1543 15.8008 11.0176 15.3223 11.0176C14.8574 11.0176 14.4837 11.1406 14.2012 11.3867C13.9186 11.6328 13.7773 11.9632 13.7773 12.3779H12.5127C12.5218 11.6396 12.7839 11.0449 13.2988 10.5938C13.8184 10.138 14.4928 9.91016 15.3223 9.91016C16.1836 9.91016 16.8535 10.1426 17.332 10.6074C17.8151 11.0677 18.0566 11.7012 18.0566 12.5078C18.0566 13.3053 17.6875 14.0915 16.9492 14.8662L16.2041 15.6045C15.8714 15.9736 15.7051 16.5046 15.7051 17.1973H14.4404ZM14.3857 19.3643C14.3857 19.1592 14.4473 18.9883 14.5703 18.8516C14.6979 18.7103 14.8848 18.6396 15.1309 18.6396C15.377 18.6396 15.5638 18.7103 15.6914 18.8516C15.819 18.9883 15.8828 19.1592 15.8828 19.3643C15.8828 19.5693 15.819 19.7402 15.6914 19.877C15.5638 20.0091 15.377 20.0752 15.1309 20.0752C14.8848 20.0752 14.6979 20.0091 14.5703 19.877C14.4473 19.7402 14.3857 19.5693 14.3857 19.3643Z"
                    fill="#AAA9A9"
                  />
                  <defs>
                    <filter
                      id="filter0_d"
                      x="0"
                      y="0"
                      width="30"
                      height="30"
                      filterUnits="userSpaceOnUse"
                      color-interpolation-filters="sRGB"
                    >
                      <feFlood flood-opacity="0" result="BackgroundImageFix" />
                      <feColorMatrix
                        in="SourceAlpha"
                        type="matrix"
                        values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                      />
                      <feOffset />
                      <feGaussianBlur stdDeviation="2" />
                      <feColorMatrix
                        type="matrix"
                        values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"
                      />
                      <feBlend
                        mode="normal"
                        in2="BackgroundImageFix"
                        result="effect1_dropShadow"
                      />
                      <feBlend
                        mode="normal"
                        in="SourceGraphic"
                        in2="effect1_dropShadow"
                        result="shape"
                      />
                    </filter>
                  </defs></svg
              ></label>
            </div>

            <div class="form_radio_btn">
              <input
                id="nominations_incl"
                type="radio"
                name="nominations"
                value="Инклюзия"
                v-model="project.nominations"
              />
              <label for="nominations_incl"
                >Инклюзия<svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="30"
                  height="30"
                  viewBox="0 0 30 30"
                  fill="none"
                >
                  <g filter="url(#filter0_d)">
                    <circle cx="15" cy="15" r="11" fill="white" />
                  </g>
                  <path
                    d="M14.4404 17.1973C14.4495 16.6549 14.5111 16.2266 14.625 15.9121C14.7389 15.5977 14.9714 15.249 15.3223 14.8662L16.2178 13.9434C16.6006 13.5104 16.792 13.0456 16.792 12.5488C16.792 12.0703 16.6667 11.6966 16.416 11.4277C16.1654 11.1543 15.8008 11.0176 15.3223 11.0176C14.8574 11.0176 14.4837 11.1406 14.2012 11.3867C13.9186 11.6328 13.7773 11.9632 13.7773 12.3779H12.5127C12.5218 11.6396 12.7839 11.0449 13.2988 10.5938C13.8184 10.138 14.4928 9.91016 15.3223 9.91016C16.1836 9.91016 16.8535 10.1426 17.332 10.6074C17.8151 11.0677 18.0566 11.7012 18.0566 12.5078C18.0566 13.3053 17.6875 14.0915 16.9492 14.8662L16.2041 15.6045C15.8714 15.9736 15.7051 16.5046 15.7051 17.1973H14.4404ZM14.3857 19.3643C14.3857 19.1592 14.4473 18.9883 14.5703 18.8516C14.6979 18.7103 14.8848 18.6396 15.1309 18.6396C15.377 18.6396 15.5638 18.7103 15.6914 18.8516C15.819 18.9883 15.8828 19.1592 15.8828 19.3643C15.8828 19.5693 15.819 19.7402 15.6914 19.877C15.5638 20.0091 15.377 20.0752 15.1309 20.0752C14.8848 20.0752 14.6979 20.0091 14.5703 19.877C14.4473 19.7402 14.3857 19.5693 14.3857 19.3643Z"
                    fill="#AAA9A9"
                  />
                  <defs>
                    <filter
                      id="filter0_d"
                      x="0"
                      y="0"
                      width="30"
                      height="30"
                      filterUnits="userSpaceOnUse"
                      color-interpolation-filters="sRGB"
                    >
                      <feFlood flood-opacity="0" result="BackgroundImageFix" />
                      <feColorMatrix
                        in="SourceAlpha"
                        type="matrix"
                        values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                      />
                      <feOffset />
                      <feGaussianBlur stdDeviation="2" />
                      <feColorMatrix
                        type="matrix"
                        values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"
                      />
                      <feBlend
                        mode="normal"
                        in2="BackgroundImageFix"
                        result="effect1_dropShadow"
                      />
                      <feBlend
                        mode="normal"
                        in="SourceGraphic"
                        in2="effect1_dropShadow"
                        result="shape"
                      />
                    </filter>
                  </defs></svg
              ></label>
            </div>
          </div>
        </div>
        <div class="form__item">
          <label for="">Выберите одну из двух стадий готовности проекта:</label>
          <p class="item__tile_form">
            Форма заявки проекта на стадии ИДЕИ и стадии ПРОДУКТА, значительно
            отличается.
          </p>
          <p class="item__title__alert">
            ! После заполнения заявки изменить стадию будет невозможно.
          </p>

          <div class="radio__container">
            <div class="form_radio_btn">
              <input
                id="project_ready_idea"
                type="radio"
                name="project_ready"
                value="idea"
                v-model="project.project_ready"
              />
              <label for="project_ready_idea"
                >ИДЕЯ<svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="30"
                  height="30"
                  viewBox="0 0 30 30"
                  fill="none"
                >
                  <g filter="url(#filter0_d)">
                    <circle cx="15" cy="15" r="11" fill="white" />
                  </g>
                  <path
                    d="M14.4404 17.1973C14.4495 16.6549 14.5111 16.2266 14.625 15.9121C14.7389 15.5977 14.9714 15.249 15.3223 14.8662L16.2178 13.9434C16.6006 13.5104 16.792 13.0456 16.792 12.5488C16.792 12.0703 16.6667 11.6966 16.416 11.4277C16.1654 11.1543 15.8008 11.0176 15.3223 11.0176C14.8574 11.0176 14.4837 11.1406 14.2012 11.3867C13.9186 11.6328 13.7773 11.9632 13.7773 12.3779H12.5127C12.5218 11.6396 12.7839 11.0449 13.2988 10.5938C13.8184 10.138 14.4928 9.91016 15.3223 9.91016C16.1836 9.91016 16.8535 10.1426 17.332 10.6074C17.8151 11.0677 18.0566 11.7012 18.0566 12.5078C18.0566 13.3053 17.6875 14.0915 16.9492 14.8662L16.2041 15.6045C15.8714 15.9736 15.7051 16.5046 15.7051 17.1973H14.4404ZM14.3857 19.3643C14.3857 19.1592 14.4473 18.9883 14.5703 18.8516C14.6979 18.7103 14.8848 18.6396 15.1309 18.6396C15.377 18.6396 15.5638 18.7103 15.6914 18.8516C15.819 18.9883 15.8828 19.1592 15.8828 19.3643C15.8828 19.5693 15.819 19.7402 15.6914 19.877C15.5638 20.0091 15.377 20.0752 15.1309 20.0752C14.8848 20.0752 14.6979 20.0091 14.5703 19.877C14.4473 19.7402 14.3857 19.5693 14.3857 19.3643Z"
                    fill="#AAA9A9"
                  />
                  <defs>
                    <filter
                      id="filter0_d"
                      x="0"
                      y="0"
                      width="30"
                      height="30"
                      filterUnits="userSpaceOnUse"
                      color-interpolation-filters="sRGB"
                    >
                      <feFlood flood-opacity="0" result="BackgroundImageFix" />
                      <feColorMatrix
                        in="SourceAlpha"
                        type="matrix"
                        values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                      />
                      <feOffset />
                      <feGaussianBlur stdDeviation="2" />
                      <feColorMatrix
                        type="matrix"
                        values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"
                      />
                      <feBlend
                        mode="normal"
                        in2="BackgroundImageFix"
                        result="effect1_dropShadow"
                      />
                      <feBlend
                        mode="normal"
                        in="SourceGraphic"
                        in2="effect1_dropShadow"
                        result="shape"
                      />
                    </filter>
                  </defs></svg
              ></label>
            </div>

            <div class="form_radio_btn">
              <input
                id="project_ready_product"
                type="radio"
                name="project_ready"
                value="product"
                v-model="project.project_ready"
              />
              <label for="project_ready_product"
                >ПРОДУКТ<svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="30"
                  height="30"
                  viewBox="0 0 30 30"
                  fill="none"
                >
                  <g filter="url(#filter0_d)">
                    <circle cx="15" cy="15" r="11" fill="white" />
                  </g>
                  <path
                    d="M14.4404 17.1973C14.4495 16.6549 14.5111 16.2266 14.625 15.9121C14.7389 15.5977 14.9714 15.249 15.3223 14.8662L16.2178 13.9434C16.6006 13.5104 16.792 13.0456 16.792 12.5488C16.792 12.0703 16.6667 11.6966 16.416 11.4277C16.1654 11.1543 15.8008 11.0176 15.3223 11.0176C14.8574 11.0176 14.4837 11.1406 14.2012 11.3867C13.9186 11.6328 13.7773 11.9632 13.7773 12.3779H12.5127C12.5218 11.6396 12.7839 11.0449 13.2988 10.5938C13.8184 10.138 14.4928 9.91016 15.3223 9.91016C16.1836 9.91016 16.8535 10.1426 17.332 10.6074C17.8151 11.0677 18.0566 11.7012 18.0566 12.5078C18.0566 13.3053 17.6875 14.0915 16.9492 14.8662L16.2041 15.6045C15.8714 15.9736 15.7051 16.5046 15.7051 17.1973H14.4404ZM14.3857 19.3643C14.3857 19.1592 14.4473 18.9883 14.5703 18.8516C14.6979 18.7103 14.8848 18.6396 15.1309 18.6396C15.377 18.6396 15.5638 18.7103 15.6914 18.8516C15.819 18.9883 15.8828 19.1592 15.8828 19.3643C15.8828 19.5693 15.819 19.7402 15.6914 19.877C15.5638 20.0091 15.377 20.0752 15.1309 20.0752C14.8848 20.0752 14.6979 20.0091 14.5703 19.877C14.4473 19.7402 14.3857 19.5693 14.3857 19.3643Z"
                    fill="#AAA9A9"
                  />
                  <defs>
                    <filter
                      id="filter0_d"
                      x="0"
                      y="0"
                      width="30"
                      height="30"
                      filterUnits="userSpaceOnUse"
                      color-interpolation-filters="sRGB"
                    >
                      <feFlood flood-opacity="0" result="BackgroundImageFix" />
                      <feColorMatrix
                        in="SourceAlpha"
                        type="matrix"
                        values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                      />
                      <feOffset />
                      <feGaussianBlur stdDeviation="2" />
                      <feColorMatrix
                        type="matrix"
                        values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"
                      />
                      <feBlend
                        mode="normal"
                        in2="BackgroundImageFix"
                        result="effect1_dropShadow"
                      />
                      <feBlend
                        mode="normal"
                        in="SourceGraphic"
                        in2="effect1_dropShadow"
                        result="shape"
                      />
                    </filter>
                  </defs></svg
              ></label>
            </div>
          </div>
        </div>
      </section>
      <section
        id="stages_idea_2_1"
        v-if="project.stages === 2 && project.project_ready === 'idea'"
      >
        <div class="form__item">
          <label for="project_name">Название проекта</label>
          <p class="item__tile_form">
            Название проекта следует писать без кавычек с заглавной буквы и без
            точки в конце.
          </p>
          <p class="item__title__alert">
            ! После подачи заявки название проекта не подлежит изменению.
          </p>
          <input
            type="text"
            name="project_name"
            v-model="project.project_name"
            id="project_name"
            placeholder="Молоды сердцем"
          />
        </div>
        <div class="form__item">
          <label for="">Краткое описание проекта</label>
          <p class="item__tile_form">
            Описание, отражающее основную идею проекта, целевую аудиторию,
            содержание проекта и наиболее значимые ожидаемые результаты. Для
            экспертов, оценивающих заявку, это поле должно содержать ёмкий и
            исчерпывающий ответ на вопрос: «Что/для кого/как и зачем
            предназначен проект?».
          </p>
          <textarea
            name=""
            id=""
            cols="30"
            rows="10"
            placeholder="Основная идея проекта заключается в "
          ></textarea>
        </div>
        <div class="form__item">
          <label for="">Социальная значимость проекта</label>
          <p class="item__tile_form">
            Расскажите, на решение какой именно проблемы направлен проект, и
            обозначьте ее социальную значимость.
          </p>
          <textarea
            name=""
            id=""
            cols="30"
            rows="10"
            placeholder="Наш проект направлен на решение "
          ></textarea>
        </div>
        <div class="form__item">
          <label for="">Цели проекта</label>
          <p class="item__tile_form">
            Укажите не более трех целей проекта. Каждая цель должна отражать
            назначение проекта и прогнозируемый результат.
          </p>
          <textarea
            name=""
            id=""
            cols="30"
            rows="10"
            placeholder="Осноная цель проекта"
          ></textarea>
        </div>
        <div class="form__item">
          <label for="">Презентация проекта</label>
          <p class="item__tile_form">
            Приложите не более 5 слайдов. Можно прикрепить документы в формате
            PDF. Презентация может содержать описание проекта (технологическую
            составляющую идеи), главные преимущества (уникальность проекта) и
            необходимые визуальные материалы (структура проекта, эскизы
            интерфейса и пр.).
          </p>
        </div>
        <div class="form__item">
          <label for="">Видео о проекте</label>
          <p class="item__tile_form">
            В качестве дополнительной информации можно привести ссылку на снятый
            командой проекта и размещенный в открытом доступе ролик об идеи
            проекта или его актуальности. Это может быть видеообращение
            руководителя и команды, репортаж или исследование о целевой
            аудитории, проблеме и попытках ее решения и пр.
          </p>
          <input type="text" name="" id="" />
        </div>
        <div class="form__item">
          <label for="">Логотип проекта</label>
          <p class="item__tile_form">
            Рекомендуем прикрепить файл с логотипом в формате .png с прозрачным
            фоном
          </p>
        </div>
        <div class="form__item">
          <div class="checkboxes">
            <input id="a" type="checkbox" /><label
              class="green-background"
              for="a"
              >Участник региональной программы
              <a href="">Social Idea 2021 «IT-Start»</a></label
            >
          </div>
          <p class="item__check">
            Выбирая данное поле, вы подтверждаете, что ваш проект соотносится с
            ключевыми направлениями развития экосистемы МТС. Ознакомиться со
            стратегией корпоративной социальной ответственности Компании можно
            <a href="">по ссылке</a>.
          </p>
        </div>
      </section>
      <section
        id="stages_idea_2_2"
        v-if="project.stages === 3 && project.project_ready === 'idea'"
      >
        <p class="item__team_title">Команда проекта и роли</p>
        <p class="item__team_title_2">Руководитель проекта</p>
        <div class="form__item">
          <label for="">ФИО руководителя проекта</label>
          <input type="text" name="" id="" placeholder="Иванов Иван Иванович" />
        </div>
        <div class="form__item">
          <label for="">Информация о руководителе проекта</label>
          <p class="item__tile_form">
            Здесь необходимо указать образовательный и профессиональный опыт и
            квалификацию, организаторские способности, реализованные кейсы, опыт
            работы с социальными и предпринимательскими проектами или проектами
            в сфере IT.
          </p>
          <textarea
            name=""
            id=""
            cols="30"
            rows="10"
            placeholder="Руководитель проекта - Иванов Иван..."
          ></textarea>
        </div>
        <div class="form__item">
          <label for="">Мобильный телефон руководителя проекта</label>
          <input type="text" name="" id="" placeholder="+7 988 888 88 88" />
        </div>
        <div class="form__item">
          <label for="">Возраст руководителя проекта</label>
          <input type="number" name="" id="" placeholder="33" />
        </div>
        <div class="form__item">
          <label for="">Ссылки на социальные сети</label>
          <input type="text" name="" id="" placeholder="ссылка 1" />
          <br />
          <input type="text" name="" id="" placeholder="ссылка 2" />
          <br />
          <input type="text" name="" id="" placeholder="ссылка 3" />
        </div>
        <div class="form__item">
          <label for="">Участники команды</label>
          <textarea
            name=""
            id=""
            cols="30"
            rows="10"
            placeholder="Участник команды - Иванов Иван..."
          ></textarea>
        </div>
        <div class="form__item">
          <div class="checkboxes">
            <input id="bb" type="checkbox" /><label
              class="green-background"
              for="bb"
              >Я даю свое согласие на обработку персональных данных</label
            >
          </div>
          <p class="item__check">
            Выбирая данное поле, Вы соглашаетесь с
            <a href="">политикой конфиденциальности</a> Конкурса
          </p>
        </div>
      </section>
      <section
        id="stages_product_2_1"
        v-if="project.stages === 2 && project.project_ready === 'product'"
      >
        <div class="form__item">
          <label for="">Название проекта</label>
          <p class="item__tile_form">
            Название проекта следует писать без кавычек с заглавной буквы и без
            точки в конце.
          </p>
          <p class="item__title__alert">
            ! После подачи заявки название проекта не подлежит изменению.
          </p>
          <input type="text" name="" id="" placeholder="Молоды сердцем" />
        </div>
        <div class="form__item">
          <label for="">Краткое описание проекта</label>
          <p class="item__tile_form">
            Описание, отражающее основную идею проекта, целевую аудиторию,
            содержание проекта и наиболее значимые ожидаемые результаты. Для
            экспертов, оценивающих заявку, это поле должно содержать ёмкий и
            исчерпывающий ответ на вопрос: «Что/для кого/как и зачем
            предназначен проект?».
          </p>
          <textarea
            name=""
            id=""
            cols="30"
            rows="10"
            placeholder="Основная идея проекта заключается в "
          ></textarea>
        </div>
        <div class="form__item">
          <label for="">Социальная значимость проекта</label>
          <p class="item__tile_form">
            Расскажите, на решение какой именно проблемы направлен проект, и
            обозначьте ее социальную значимость.
          </p>
          <textarea
            name=""
            id=""
            cols="30"
            rows="10"
            placeholder="Наш проект направлен на решение "
          ></textarea>
        </div>
        <div class="form__item">
          <label for="">Цели проекта</label>
          <p class="item__tile_form">
            Укажите не более трех целей проекта. Каждая цель должна отражать
            назначение проекта и прогнозируемый результат.
          </p>
          <textarea
            name=""
            id=""
            cols="30"
            rows="10"
            placeholder="Осноная цель проекта"
          ></textarea>
        </div>
        <div class="form__item">
          <label for="">Презентация проекта</label>
          <p class="item__tile_form">
            Приложите не более 10 слайдов. Можно прикрепить документы в формате
            PDF. Презентация может содержать описание проекта, социальную
            значимость решаемой проблемы, которую решает проект, описание
            целевой аудитории, целей и задач, уникальность проекта, главные
            преимущества, монетизация, масштабирование с МТС, прототип (описание
            продукта/технологии), партнеры и наличие потенциальных
            договоренностей с потребителями продукта, необходимые визуальные
            материалы (структура проекта, эскизы интерфейса и пр.)
          </p>
        </div>
        <div class="form__item">
          <label for="">Дополнительные материалы</label>
          <p class="item__tile_form">
            При желании вы можете приложить до 5 документов, связанных с
            проектом. Это могут быть рекомендации и письма поддержки, грамоты и
            дипломы, исследования целевой аудитории и проблемы, публикации на
            тему проекта и пр.
          </p>
        </div>
        <div class="form__item">
          <label for="">Логотип проекта</label>
          <p class="item__tile_form">
            Рекомендуем прикрепить файл с логотипом в формате .png с прозрачным
            фоном
          </p>
        </div>
        <div class="form__item">
          <div class="checkboxes">
            <input id="h" type="checkbox" /><label
              class="green-background"
              for="h"
              >Проект соответствует бизнес-стратегии и стратегии корпоративной
              социальной ответственности Компании МТС</label
            >
          </div>
          <p class="item__check">
            Выбирая данное поле, вы подтверждаете, что ваш проект соотносится с
            ключевыми направлениями развития экосистемы МТС. Ознакомиться со
            стратегией корпоративной социальной ответственности Компании можно
            по <a href="">ссылке</a>.
          </p>
        </div>
        <div class="form__item">
          <label for="">Видео о проекте</label>
          <p class="item__tile_form">
            В качестве дополнительной информации можно привести ссылку на снятый
            командой проекта и размещенный в открытом доступе ролик о проекте
            или его актуальности. Это может быть видеообращение руководителя и
            команды, репортаж или исследование о целевой аудитории, проблеме и
            попытках ее решения и пр.
          </p>
          <input type="text" name="" id="" placeholder="Ссылка" />
        </div>
      </section>
      <section
        id="stages_product_2_2"
        v-if="project.stages === 3 && project.project_ready === 'product'"
      >
        <p class="item__team_title">Команда проекта и роли</p>
        <p class="item__team_title_2">Руководитель проекта</p>
        <div class="form__item">
          <label for="">ФИО руководителя проекта</label>
          <input type="text" name="" id="" placeholder="Иванов Иван Иванович" />
        </div>
        <div class="form__item">
          <label for="">Информация о руководителе проекта</label>
          <p class="item__tile_form">
            Здесь необходимо указать образовательный и профессиональный опыт и
            квалификацию, организаторские способности, реализованные кейсы, опыт
            работы с социальными и предпринимательскими проектами или проектами
            в сфере IT.
          </p>
          <textarea
            name=""
            id=""
            cols="30"
            rows="10"
            placeholder="Руководитель проекта - Иванов Иван..."
          ></textarea>
        </div>
        <div class="form__item">
          <label for="">Мобильный телефон руководителя проекта</label>
          <input type="text" name="" id="" placeholder="+7 988 888 88 88" />
        </div>
        <div class="form__item">
          <label for="">Возраст руководителя проекта</label>
          <input type="number" name="" id="" placeholder="33" />
        </div>
        <div class="form__item">
          <label for="">Ссылки на социальные сети</label>
          <input type="text" name="" id="" placeholder="ссылка 1" />
          <br />
          <input type="text" name="" id="" placeholder="ссылка 2" />
          <br />
          <input type="text" name="" id="" placeholder="ссылка 3" />
        </div>
        <div class="form__item">
          <label for="">Участники команады</label>
          <textarea
            name=""
            id=""
            cols="30"
            rows="10"
            placeholder="Участник команды - Иванов Иван..."
          ></textarea>
        </div>
        <div class="form__item">
          <div class="checkboxes">
            <input id="j" type="checkbox" /><label
              class="green-background"
              for="j"
              >Я даю свое согласие на обработку персональных данных</label
            >
          </div>
          <p class="item__check">
            Выбирая данное поле, Вы соглашаетесь с
            <a href="">политикой конфиденциальности</a> Конкурса
          </p>
        </div>
      </section>
      <div class="form__item_btns">
        <a
          class="btn btn-primary btn__next btn_prev"
          v-if="project.stages !== 1"
          @click.prevent="multiClickPrev"
        >
          Назад
          <img loading="lazy" class="prev" src="/assets/img/right-arrow_si.svg" alt="" />
        </a>
        <a
          class="btn btn-primary btn__next"
          v-if="project.stages != totalStep"
          @click.prevent="multiClickNext"
        >
          Далее
          <img loading="lazy" src="/assets/img/right-arrow_si.svg" alt="" />
        </a>
      </div>
      <!-- <div>
        <button type="submit">123</button>
      </div> -->
    </form>
  </div>
</template>

<script>
export default {
  data() {
    return {
      step: 1,
      totalStep: 3,
      loading: true,
      project: [],
    };
  },
  methods: {
    multiClickNext() {
      this.nextStep();
      this.updateProject();
    },
    multiClickPrev() {
      this.prevStep();
      this.updateProject();
    },
    nextStep() {
      this.project.stages++;
      this.loading = true;
    },
    prevStep() {
      this.project.stages--;
      this.loading = true;
    },
    updateProject() {
      axios
        .post("/updateProject", this.project)
        .then((response) => {
        })
        .catch((error) => {
         
        })
        .finally(() => (this.loading = false))
        ;
    },
  },
  mounted() {
    axios
      .get("/showProject", this.project)
      .then((response) => {
        this.project = response.data[0];
      })
      .finally(() => (this.loading = false));
  },
};
</script>

