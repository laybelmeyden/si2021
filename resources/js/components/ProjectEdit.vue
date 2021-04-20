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
    <div id="modalflat__save" class="modal_alert" v-if="isAlertVisible">
      <div class="modal_alert__container">
        <h4 class="alert_title">Сохранено</h4>
        <p class="alert_down">Ваш проект успешно сохранен</p>
        <a
          class="btn btn-primary btn_ok"
          role="button"
          @click="alertsModalClose"
        >
          Хорошо
          <img loading="lazy" src="/assets/img/right-arrow_si.svg" alt="" />
        </a>
      </div>
    </div>
    <div id="modalflat__save" class="modal_alert" v-if="isSendProjectVisible">
      <div class="modal_alert__container">
        <h4 class="alert_title">
          Вы точно хотите отправить проект на конкурс?
        </h4>
        <p class="alert_down">
          Отправка заявки на конкурс возможна до 25.05.21 года и только после
          того, как заполнены все обязательные поля! <br /><br />
          Внимание: после нажатия кнопки "Отправить" отредактировать заявку
          будет невозможно!
        </p>
        <div class="form__item_btns">
          <a
            class="btn btn-primary btn__next btn_prev"
            @click.prevent="modalSendProjectClose"
          >
            Назад
            <img
              loading="lazy"
              class="prev"
              src="/assets/img/right-arrow_si.svg"
              alt=""
            />
          </a>
          <a
            class="btn btn-primary btn__next"
            @click.prevent="multiSendProject"
          >
            Отправить
            <img loading="lazy" src="/assets/img/right-arrow_si.svg" alt="" />
          </a>
        </div>
      </div>
    </div>
    <form
      @submit.prevent="updateProject"
      id="project__form"
      enctype="multipart/form-data"
    >
      <input type="text" v-model.number="project.stages" hidden />
      <section id="stages_1" v-if="project.stages === 1">
        <div class="form__item">
          <label for="about_source"
            >Откуда вы узнали о конкурсе Social Idea?</label
          >
          <input
            type="text"
            name="about_source"
            id="about_source"
            v-model="project.about_source"
            placeholder="Социальные сети"
            maxlength="50"
          />
          <p class="validations__msg">* поле обязательно для заполнения</p>
          <span class="maxlength__inp">{{
            project.about_source &&
            `Осталось символов - ${50 - project.about_source.length}`
          }}</span>
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
                >Экология
                <div class="nominations_eco">
                  <svg
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
                        <feFlood
                          flood-opacity="0"
                          result="BackgroundImageFix"
                        />
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
                    </defs>
                  </svg>
                  <div class="ecol__popup">
                    идеи и решения, в том числе «умные» системы управления,
                    основанные на принципах энерго- и ресурсосбережения,
                    инновационные разработки, нацеленные на сокращение объема
                    отходов и выбросов, повторное использование ресурсов,
                    программные продукты, направленные на формирование
                    ответственного подхода к охране окружающей среды и многое
                    другое
                  </div>
                </div>
              </label>
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
                >Инклюзия
                <div class="nominations_incl">
                  <svg
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
                        <feFlood
                          flood-opacity="0"
                          result="BackgroundImageFix"
                        />
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
                    </defs>
                  </svg>
                  <div class="incl__popup">
                    идеи и решения, которые расширяют границы и разрушают
                    барьеры, делают окружающий мир доступнее и толерантнее,
                    устраняют социальное неравенство и улучшают качество жизни
                    людей и общества
                  </div>
                </div></label
              >
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
                >ИДЕЯ

                <div class="project_ready_idea">
                  <svg
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
                        <feFlood
                          flood-opacity="0"
                          result="BackgroundImageFix"
                        />
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
                    </defs>
                  </svg>
                  <div class="idea__popup">
                    У команды есть отличная идея! Выбрав данную стадию,
                    участники будут заполнять проект, который находится на
                    стартовом этапе, без готового прототипа / продукта. Ваша
                    идея – это способ решить проблему, пока еще без расчетов,
                    прояснений и четких формулировок. В идее заложена энергия
                    проекта. С неё все начинается!
                  </div>
                </div>
              </label>
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
                >ПРОДУКТ
                <div class="project_ready_product">
                  <svg
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
                        <feFlood
                          flood-opacity="0"
                          result="BackgroundImageFix"
                        />
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
                    </defs>
                  </svg>
                  <div class="product__popup">
                    Продукт готов! Выбрав данную стадию, участники будут
                    заполнять проект, который находится на продвинутом уровне:
                    стадия пилота или уже готовый бизнес-продукт / прототип.
                  </div>
                </div>
              </label>
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
            Название проекта следует писать без кавычек с заглавной буквы и без точки в конце.
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
            maxlength="150"
          />
          <p class="validations__msg">* поле обязательно для заполнения</p>
          <span class="maxlength__inp">{{
            project.project_name &&
            `Осталось символов - ${150 - project.project_name.length}`
          }}</span>
        </div>
        <div class="form__item">
          <label for="project_body">Краткое описание проекта</label>
          <p class="item__tile_form">
            Описание, отражающее основную идею проекта, целевую аудиторию, содержание проекта и наиболее значимые ожидаемые результаты. Для экспертов, оценивающих заявку, это поле должно содержать ёмкий и исчерпывающий ответ на вопрос: «Что/для кого/как и зачем предназначен проект?».
          </p>
          <textarea
            name="project_body"
            id="project_body"
            v-model="project.project_body"
            cols="30"
            rows="10"
            placeholder="Основная идея проекта заключается в "
            maxlength="1000"
          ></textarea>
          <p class="validations__msg">* поле обязательно для заполнения</p>
          <span class="maxlength__inp">{{
            project.project_body &&
            `Осталось символов - ${1000 - project.project_body.length}`
          }}</span>
        </div>
        <div class="form__item">
          <label for="project_social">Социальная значимость проекта</label>
          <p class="item__tile_form">
           Расскажите, на решение какой именно проблемы направлен проект, и обозначьте ее социальную значимость.
          </p>
          <textarea
            name="project_social"
            id="project_social"
            v-model="project.project_social"
            cols="30"
            rows="10"
            placeholder="Наш проект направлен на решение "
            maxlength="1000"
          ></textarea>
          <p class="validations__msg">* поле обязательно для заполнения</p>
          <span class="maxlength__inp">{{
            project.project_social &&
            `Осталось символов - ${1000 - project.project_social.length}`
          }}</span>
        </div>
        <div class="form__item">
          <label for="project_target">Цели проекта</label>
          <p class="item__tile_form">
            Укажите не более трех целей проекта. Каждая цель должна отражать назначение проекта и прогнозируемый результат.
          </p>
          <textarea
            name="project_target"
            id="project_target"
            v-model="project.project_target"
            cols="30"
            rows="10"
            placeholder="Осноная цель проекта"
            maxlength="1000"
          ></textarea>
          <p class="validations__msg">* поле обязательно для заполнения</p>
          <span class="maxlength__inp">{{
            project.project_target &&
            `Осталось символов - ${1000 - project.project_target.length}`
          }}</span>
        </div>
        <div class="form__item">
          <label for="project_presentations">Презентация проекта</label>
          <p class="item__tile_form">
            Приложите не более 5 слайдов. Можно прикрепить документы в формате PDF. Презентация может содержать описание проекта (технологическую составляющую идеи), главные преимущества (уникальность проекта) и необходимые визуальные материалы (структура проекта, эскизы интерфейса и пр.).
          </p>
          <div class="btn__file">
            <div class="fileUploadInput">
              <input
                type="file"
                name="project_presentations"
                id="project_presentations"
                @change="setProjectFilePresent"
              />
              <button>ВЫБРАТЬ</button>
            </div>
            <div class="file__sizes">Максимальный размер файла 10 Мб</div>
            <div class="progress prg1" :val="fileProgress" v-if="fileProgress">
              <div
                class="progress-bar"
                role="progressbar"
                :style="{ width: fileProgress + '%' }"
              >
                <p>{{ fileProgress + "%" }}</p>
              </div>
            </div>
            <div
              class="maxlength__inp"
              :class="{danger:errors}"
              v-if="
                project.project_presentations || fileProgress || fileCurrent
              "
            >
              {{
                fileCurrent ||
                "Загруженный файл - " + project.project_presentations.slice(22)
              }}
            </div>
          </div>
        </div>
        <div class="form__item">
          <label for="project_video">Видео о проекте</label>
          <p class="item__tile_form">
            В качестве дополнительной информации можно привести ссылку на снятый командой проекта и размещенный в открытом доступе ролик об идеи проекта или его актуальности. Это может быть видеообращение руководителя и команды, репортаж или исследование о целевой аудитории, проблеме и попытках ее решения и пр.
          </p>
          <input
            type="text"
            name="project_video"
            id="project_video"
            v-model="project.project_video"
          />
        </div>
        <div class="form__item">
          <label for="project_logo">Логотип проекта</label>
          <p class="item__tile_form">
            Рекомендуем прикрепить файл с логотипом в формате .png с прозрачным
            фоном
          </p>
          <div class="btn__file">
            <div class="fileUploadInput">
              <input
                type="file"
                name="project_logo"
                id="project_logo"
                @change="setProjectFileLogo"
              />
              <button>ВЫБРАТЬ</button>
            </div>
            <div class="file__sizes">Максимальный размер файла 10 Мб</div>
            <div
              class="progress prg1"
              :val="fileProgressLogo"
              v-if="fileProgressLogo"
            >
              <div
                class="progress-bar"
                role="progressbar"
                :style="{ width: fileProgressLogo + '%' }"
              >
                <p>{{ fileProgressLogo + "%" }}</p>
              </div>
            </div>
            <div
              class="maxlength__inp"
              :class="{danger:errorsLogo}"
              v-if="project.project_logo || fileProgressLogo || fileCurrentLogo"
            >
              {{
                fileCurrentLogo || "Загруженный файл - " + project.project_logo.slice(22)
              }}
            </div>
          </div>
        </div>
        <div class="form__item">
          <div class="checkboxes">
            <input
              id="	project_mts"
              type="checkbox"
              name="project_mts"
              v-model="project.project_mts"
            /><label class="green-background" for="	project_mts"
              >Проект соответствует бизнес-стратегии и стратегии корпоративной социальной ответственности Компании МТС</label
            >
          </div>
          <p class="item__check">
            Выбирая данное поле, вы подтверждаете, что ваш проект соотносится с
            ключевыми направлениями развития экосистемы МТС. Ознакомиться со
            стратегией корпоративной социальной ответственности Компании можно
            <a href="https://static.ssl.mts.ru/mts_rf/images/3_(MTS_Annual_Report_2019)-rus.pdf?_ga=2.240648195.182068082.1591014596-951553748.1575816179">по ссылке</a>.
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
          <label for="project_main_fio">ФИО руководителя проекта</label>
          <input
            type="text"
            name="project_main_fio"
            id="project_main_fio"
            v-model="project.project_main_fio"
            placeholder="Иванов Иван Иванович"
            maxlength="150"
          />
          <p class="validations__msg">* поле обязательно для заполнения</p>
          <span class="maxlength__inp">{{
            project.project_main_fio &&
            `Осталось символов - ${150 - project.project_main_fio.length}`
          }}</span>
        </div>
        <div class="form__item">
          <label for="project_main_info"
            >Информация о руководителе проекта</label
          >
          <p class="item__tile_form">
            Здесь необходимо указать образовательный и профессиональный опыт и квалификацию, организаторские способности, реализованные кейсы, опыт работы с социальными и предпринимательскими проектами или проектами в сфере IT.
          </p>
          <textarea
            name="project_main_info"
            id="project_main_info"
            v-model="project.project_main_info"
            cols="30"
            rows="10"
            placeholder="Руководитель проекта - Иванов Иван..."
            maxlength="1000"
          ></textarea>
          <p class="validations__msg">* поле обязательно для заполнения</p>
          <span class="maxlength__inp">{{
            project.project_main_info &&
            `Осталось символов - ${1000 - project.project_main_info.length}`
          }}</span>
        </div>
        <div class="form__item">
          <label for="project_main_phone"
            >Мобильный телефон руководителя проекта</label
          >
          <input
            type="text"
            name="project_main_phone"
            id="project_main_phone"
            v-model="project.project_main_phone"
            placeholder="+7 988 888 88 88"
            maxlength="100"
          />
          <p class="validations__msg">* поле обязательно для заполнения</p>
          <span class="maxlength__inp">{{
            project.project_main_phone &&
            `Осталось символов - ${100 - project.project_main_phone.length}`
          }}</span>
        </div>
        <div class="form__item">
          <label for="project_main_years">Возраст руководителя проекта</label>
          <input
            type="number"
            name="project_main_years"
            v-model="project.project_main_years"
            id="project_main_years"
            placeholder="33"
          />
          <p class="validations__msg">* поле обязательно для заполнения</p>
        </div>
        <div class="form__item">
          <label for="">Ссылки на социальные сети</label>
          <input
            type="text"
            name="project_main_social_links_1"
            id="project_main_social_links_1"
            v-model="project.project_main_social_links_1"
            placeholder="ссылка 1"
          />
          <p class="validations__msg">* поле обязательно для заполнения</p>
          <br />
          <input
            type="text"
            name="project_main_social_links_2"
            id="project_main_social_links_2"
            v-model="project.project_main_social_links_2"
            placeholder="ссылка 2"
          />
          <br />
          <input
            type="text"
            name="project_main_social_links_3"
            id="project_main_social_links_3"
            v-model="project.project_main_social_links_3"
            placeholder="ссылка 3"
          />
        </div>
        <div class="form__item">
          <label for="project_main_teams">Участники команды</label>
          <textarea
            name="project_main_teams"
            id="project_main_teams"
            v-model="project.project_main_teams"
            cols="30"
            rows="10"
            placeholder="Участник команды - Иванов Иван..."
            maxlength="2000"
          ></textarea>
          <p class="validations__msg">* поле обязательно для заполнения</p>
          <span class="maxlength__inp">{{
            project.project_main_teams &&
            `Осталось символов - ${2000 - project.project_main_teams.length}`
          }}</span>
        </div>
        <div class="form__item">
          <div class="checkboxes">
            <input
              id="project_main_security1"
              type="checkbox"
              name="project_main_security"
              v-model="project.project_main_security"
            /><label class="green-background" for="project_main_security1"
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
            id="project_name"
            v-model="project.project_name"
            placeholder="Молоды сердцем"
            maxlength="150"
          />
          <p class="validations__msg">* поле обязательно для заполнения</p>
          <span class="maxlength__inp">{{
            project.project_name &&
            `Осталось символов - ${150 - project.project_name.length}`
          }}</span>
        </div>
        <div class="form__item">
          <label for="project_body">Краткое описание проекта</label>
          <p class="item__tile_form">
            По сути, это текстовая презентация проекта, отражающая основную технологию/продукт, целевую аудиторию. Для экспертов, оценивающих заявку, это поле должно содержать ёмкий и исчерпывающий ответ на вопрос: «Что/для кого/как и зачем предназначен продукт проекта?»
          </p>
          <textarea
            name="project_body"
            id="project_body"
            v-model="project.project_body"
            cols="30"
            rows="10"
            placeholder="Основная идея проекта заключается в "
            maxlength="1000"
          ></textarea>
          <p class="validations__msg">* поле обязательно для заполнения</p>
          <span class="maxlength__inp">{{
            project.project_body &&
            `Осталось символов - ${1000 - project.project_body.length}`
          }}</span>
        </div>
        <div class="form__item">
          <label for="project_social">Социальная значимость проекта</label>
          <p class="item__tile_form">
            Расскажите, на решение какой именно проблемы направлен проект, и обозначьте ее социальную значимость.
          </p>
          <textarea
            name="project_social"
            id="project_social"
            v-model="project.project_social"
            cols="30"
            rows="10"
            placeholder="Наш проект направлен на решение "
            maxlength="1000"
          ></textarea>
          <p class="validations__msg">* поле обязательно для заполнения</p>
          <span class="maxlength__inp">{{
            project.project_social &&
            `Осталось символов - ${1000 - project.project_social.length}`
          }}</span>
        </div>
        <div class="form__item">
          <label for="project_target">Цели проекта</label>
          <p class="item__tile_form">
            Укажите не более трех целей проекта. Каждая цель должна отражать назначение проекта и прогнозируемый результат.
          </p>
          <textarea
            name="project_target"
            id="project_target"
            v-model="project.project_target"
            cols="30"
            rows="10"
            placeholder="Осноная цель проекта"
            maxlength="1000"
          ></textarea>
          <p class="validations__msg">* поле обязательно для заполнения</p>
          <span class="maxlength__inp">{{
            project.project_target &&
            `Осталось символов - ${1000 - project.project_target.length}`
          }}</span>
        </div>
        <div class="form__item">
          <label for="project_presentations">Презентация проекта</label>
          <p class="item__tile_form">
            Приложите не более 10 слайдов. Можно прикрепить документы в формате PDF. Презентация может содержать описание проекта, социальную значимость решаемой проблемы, которую решает проект, описание целевой аудитории, целей и задач, уникальность проекта, главные преимущества, монетизация,

масштабирование с МТС, прототип (описание продукта/технологии), партнеры и наличие потенциальных договоренностей с потребителями продукта, необходимые визуальные материалы (структура проекта, эскизы интерфейса и пр.).
          </p>
          <div class="btn__file">
            <div class="fileUploadInput">
              <input
                type="file"
                name="project_presentations"
                id="project_presentations"
                @change="setProjectFilePresent"
              />
              <button>ВЫБРАТЬ</button>
            </div>
            <div class="file__sizes">Максимальный размер файла 10 Мб</div>
            <div class="progress prg1" :val="fileProgress" v-if="fileProgress">
              <div
                class="progress-bar"
                role="progressbar"
                :style="{ width: fileProgress + '%' }"
              >
                <p>{{ fileProgress + "%" }}</p>
              </div>
            </div>
            <div
              class="maxlength__inp"
              :class="{danger:errors}"
              v-if="
                project.project_presentations || fileProgress || fileCurrent
              "
            >
              {{
                fileCurrent ||
                "Загруженный файл - " + project.project_presentations.slice(22)
              }}
            </div>
          </div>
        </div>
        <div class="form__item">
          <label for="project_files_1">Дополнительные материалы</label>
          <p class="item__tile_form">
            При желании вы можете приложить документ, связанный с проектом. Это могут быть рекомендации и письма поддержки, грамоты и дипломы, исследования целевой аудитории и проблемы, публикации на тему проекта и пр
          </p>
          <div class="btn__file">
            <div class="fileUploadInput">
              <input
                type="file"
                name="project_files_1"
                id="project_files_1"
                @change="setProjectFileFile"
              />
              <button>ВЫБРАТЬ</button>
            </div>
            <div class="file__sizes">Максимальный размер файла 10 Мб</div>
            <div
              class="progress prg1"
              :val="fileProgressFile"
              v-if="fileProgressFile"
            >
              <div
                class="progress-bar"
                role="progressbar"
                :style="{ width: fileProgressFile + '%' }"
              >
                <p>{{ fileProgressFile + "%" }}</p>
              </div>
            </div>
            <div
              class="maxlength__inp"
              :class="{danger:errorsDop}"
              v-if="
                project.project_files_1 || fileProgressFile || fileCurrentFile
              "
            >
              {{
                fileCurrentFile ||
                "Загруженный файл - " + project.project_files_1.slice(22)
              }}
            </div>
          </div>
        </div>
        <div class="form__item">
          <label for="project_logo">Логотип проекта</label>
          <p class="item__tile_form">
            Рекомендуем прикрепить файл с логотипом в формате .png с прозрачным
            фоном
          </p>
          <div class="btn__file">
            <div class="fileUploadInput">
              <input
                type="file"
                name="project_logo"
                id="project_logo"
                @change="setProjectFileLogo"
              />
              <button>ВЫБРАТЬ</button>
            </div>
            <div class="file__sizes">Максимальный размер файла 10 Мб</div>
            <div
              class="progress prg1"
              :val="fileProgressLogo"
              v-if="fileProgressLogo"
            >
              <div
                class="progress-bar"
                role="progressbar"
                :style="{ width: fileProgressLogo + '%' }"
              >
                <p>{{ fileProgressLogo + "%" }}</p>
              </div>
            </div>
            <div
              class="maxlength__inp"
              :class="{danger:errorsLogo}"
              v-if="project.project_logo || fileProgressLogo || fileCurrentLogo"
            >
              {{
                fileCurrentLogo || "Загруженный файл - " + project.project_logo.slice(22)
              }}
            </div>
          </div>
        </div>
        <div class="form__item">
          <div class="checkboxes">
            <input
              id="project_mts2"
              type="checkbox"
              name="project_mts"
              v-model="project.project_mts"
            /><label class="green-background" for="project_mts2"
              >Проект соответствует бизнес-стратегии и стратегии корпоративной
              социальной ответственности Компании МТС</label
            >
          </div>
          <p class="item__check">
            Выбирая данное поле, вы подтверждаете, что ваш проект соотносится с
            ключевыми направлениями развития экосистемы МТС. Ознакомиться со
            стратегией корпоративной социальной ответственности Компании можно
            по <a href="https://static.ssl.mts.ru/mts_rf/images/3_(MTS_Annual_Report_2019)-rus.pdf?_ga=2.240648195.182068082.1591014596-951553748.1575816179">ссылке</a>.
          </p>
        </div>
        <div class="form__item">
          <label for="project_video">Видео о проекте</label>
          <p class="item__tile_form">
            В качестве дополнительной информации можно привести ссылку на снятый командой проекта и размещенный в открытом доступе ролик о проекте или его актуальности. Это может быть видеообращение руководителя и команды, репортаж или исследование о целевой аудитории, проблеме и попытках ее решения и пр.
          </p>
          <input
            type="text"
            name="project_video"
            id="project_video"
            v-model="project.project_video"
            placeholder="Ссылка"
          />
        </div>
      </section>
      <section
        id="stages_product_2_2"
        v-if="project.stages === 3 && project.project_ready === 'product'"
      >
        <p class="item__team_title">Команда проекта и роли</p>
        <p class="item__team_title_2">Руководитель проекта</p>
        <div class="form__item">
          <label for="project_main_fio">ФИО руководителя проекта</label>
          <input
            type="text"
            name="project_main_fio"
            v-model="project.project_main_fio"
            id="project_main_fio"
            placeholder="Иванов Иван Иванович"
            maxlength="150"
          />
          <p class="validations__msg">* поле обязательно для заполнения</p>
          <span class="maxlength__inp">{{
            project.project_main_fio &&
            `Осталось символов - ${150 - project.project_main_fio.length}`
          }}</span>
        </div>
        <div class="form__item">
          <label for="project_main_info"
            >Информация о руководителе проекта</label
          >
          <p class="item__tile_form">
            Здесь необходимо указать образовательный и профессиональный опыт и
            квалификацию, организаторские способности, реализованные кейсы, опыт
            работы с социальными и предпринимательскими проектами или проектами
            в сфере IT.
          </p>
          <textarea
            name="project_main_info"
            id="project_main_info"
            v-model="project.project_main_info"
            cols="30"
            rows="10"
            placeholder="Руководитель проекта - Иванов Иван..."
            maxlength="1000"
          ></textarea>
          <p class="validations__msg">* поле обязательно для заполнения</p>
          <span class="maxlength__inp">{{
            project.project_main_info &&
            `Осталось символов - ${1000 - project.project_main_info.length}`
          }}</span>
        </div>
        <div class="form__item">
          <label for="project_main_phone"
            >Мобильный телефон руководителя проекта</label
          >
          <input
            type="text"
            name="project_main_phone"
            id="project_main_phone"
            v-model="project.project_main_phone"
            placeholder="+7 988 888 88 88"
            maxlength="100"
          />
          <p class="validations__msg">* поле обязательно для заполнения</p>
          <span class="maxlength__inp">{{
            project.project_main_phone &&
            `Осталось символов - ${100 - project.project_main_phone.length}`
          }}</span>
        </div>
        <div class="form__item">
          <label for="project_main_years">Возраст руководителя проекта</label>
          <input
            type="number"
            name="project_main_years"
            v-model="project.project_main_years"
            id="project_main_years"
            placeholder="33"
          />
          <p class="validations__msg">* поле обязательно для заполнения</p>
        </div>
        <div class="form__item">
          <label for="">Ссылки на социальные сети</label>
          <input
            type="text"
            name="project_main_social_links_1"
            v-model="project.project_main_social_links_1"
            id="project_main_social_links_1"
            placeholder="ссылка 1"
          />
          <p class="validations__msg">* поле обязательно для заполнения</p>
          <br />
          <input
            type="text"
            name="project_main_social_links_2"
            v-model="project.project_main_social_links_2"
            id="project_main_social_links_2"
            placeholder="ссылка 2"
          />
          <br />
          <input
            type="text"
            name="project_main_social_links_3"
            v-model="project.project_main_social_links_3"
            id="project_main_social_links_3"
            placeholder="ссылка 3"
          />
        </div>
        <div class="form__item">
          <label for="project_main_teams">Участники команады</label>
          <textarea
            name="project_main_teams"
            id="project_main_teams"
            v-model="project.project_main_teams"
            cols="30"
            rows="10"
            placeholder="Участник команды - Иванов Иван..."
            maxlength="2000"
          ></textarea>
          <p class="validations__msg">* поле обязательно для заполнения</p>
          <span class="maxlength__inp">{{
            project.project_main_teams &&
            `Осталось символов - ${2000 - project.project_main_teams.length}`
          }}</span>
        </div>
        <div class="form__item">
          <div class="checkboxes">
            <input
              id="project_main_security2"
              type="checkbox"
              name="project_main_security"
              v-model="project.project_main_security"
            /><label class="green-background" for="project_main_security2"
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
          <img
            loading="lazy"
            class="prev"
            src="/assets/img/right-arrow_si.svg"
            alt=""
          />
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
      <div class="main__btns">
        <a @click.prevent="multiSend">Сохранить</a>
        <a @click.prevent="modalSendProject" v-if="project.stages === 3"
          >Отправить проект</a
        >
      </div>
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
      fileProgress: 0,
      fileCurrent: "",
      fileProgressFile: 0,
      fileCurrentFile: "",
      fileProgressLogo: 0,
      fileCurrentLogo: "",
      isAlertVisible: false,
      isSendProjectVisible: false,
      errors: false,
      errorsLogo: false,
      errorsDop:false,
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
    multiSend() {
      this.updateProject();
      this.alertsModal();
    },
    nextStep() {
      this.project.stages++;
      this.loading = true;
    },
    prevStep() {
      this.project.stages--;
      this.loading = true;
    },
    alertsModal() {
      this.isAlertVisible = true;
      setTimeout(() => {
        this.isAlertVisible = false;
      }, 5500);
    },
    alertsModalClose() {
      this.isAlertVisible = false;
    },
    modalSendProject() {
      this.isSendProjectVisible = true;
    },
    modalSendProjectClose() {
      this.isSendProjectVisible = false;
    },
    multiSendProject() {
      this.sendProject();
      window.location.href = "/home";
    },
    updateProject() {
      axios
        .post("/updateProject", this.project)
        .then((response) => {})
        .catch((error) => {
          alert("Возникла ошибка. Перезагрузите страницу и попробуйте снова!");
        })
        .finally(() => (this.loading = false));
    },
    sendProject() {
      axios
        .post("/sendProject", this.peoject)
        .then((response) => {})
        .catch((error) => {})
        .finally(() => (this.loading = false));
    },
    setProjectFilePresent() {
      const file = document.querySelector("#project_presentations").files[0];
      const formData = new FormData();
      formData.append("file1", file);
      formData.append("_method", "post");
      const fileType = file.name.split('.')[file.name.split('.').length-1];
      console.log(file.name.split('.')[file.name.split('.').length-1]);
      if (file != undefined) {
        if(file.size > 10000001){
          this.errors = true,
          this.fileCurrent = "Размер файла слишком большой";
        }else 
        if(fileType != 'ppt' && fileType != 'pptx' && fileType != 'odp' && fileType != 'pdf') {
          this.errors = true,
          this.fileCurrent = "Неверное расширение файла. Разрешенные форматы файлов - (ppt,pptx,odp,pdf)";
        }else{
          axios
          .post("/updateProject", formData, {
            onUploadProgress: (itemUpload) => {
              this.fileProgress = Math.round(
                (itemUpload.loaded / itemUpload.total) * 100
              );
              this.errors = false,
              this.fileCurrent = "Загрузка файла";
            },
          })
          .then((response) => {
            this.fileProgress = 0;
            this.fileCurrent = "Загруженный файл - " + file.name;
          })
          .catch((error) => {
            alert(
              "Возникла ошибка. Перезагрузите страницу и попробуйте снова!"
            );
          });
        }
        
      }
    },
    setProjectFileFile() {
      const file = document.querySelector("#project_files_1").files[0];
      const formData = new FormData();
      formData.append("file2", file);
      if (file != undefined) {
        if(file.size > 10000001){
          this.errorsDop = true,
          this.fileCurrentFile = "Размер файла слишком большой";
        }else{
          axios
            .post("/updateProject", formData, {
              onUploadProgress: (itemUpload) => {
                this.fileProgressFile = Math.round(
                  (itemUpload.loaded / itemUpload.total) * 100
                );
                this.errorsDop = false,
                this.fileCurrentFile = "Загрузка файла";
              },
            })
            .then((response) => {
              this.fileProgressFile = 0;
              this.fileCurrentFile = "Загруженный файл - " + file.name;
            })
            .catch((error) => {
              alert(
                "Возникла ошибка. Перезагрузите страницу и попробуйте снова!"
              );
            });
        }
      }
    },
    setProjectFileLogo() {
      const file = document.querySelector("#project_logo").files[0];
      const formData = new FormData();
      formData.append("file3", file);
      if (file != undefined) {
        if(file.size > 10000001){
          this.errorsLogo = true,
          this.fileCurrentLogo = "Размер файла слишком большой";
        }else{
        axios
          .post("/updateProject", formData, {
            onUploadProgress: (itemUpload) => {
              this.fileProgressLogo = Math.round(
                (itemUpload.loaded / itemUpload.total) * 100
              );
              this.errorsLogo = false,
              this.fileCurrentLogo = "Загрузка файла";
            },
          })
          .then((response) => {
            this.fileProgressLogo = 0;
            this.fileCurrentLogo = "Загруженный файл - " + file.name;
          })
          .catch((error) => {
            alert(
              "Возникла ошибка. Перезагрузите страницу и попробуйте снова!"
            );
          });
        }
      }
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

