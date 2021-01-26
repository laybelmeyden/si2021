<template>
  <div id="news__components">
    <div class="news__components">
      <div
        class="navigation__news"
        :class="{ disabled: !pagination.prev_page_url }"
        @click.prevent="getNews(pagination.prev_page_url), getNewsPage()"
      >
        <div class="navigation__news_btn_prev"></div>
      </div>
      <div v-if="loading">
        <div class="heart__container">
          <div class="circle circle-1"></div>
          <div class="circle circle-2"></div>
          <div class="circle circle-3"></div>
          <div class="circle circle-4"></div>
          <div class="circle circle-5"></div>
        </div>
      </div>
      <div v-else class="news__components__items_clone">
        <div class="news__components_items" v-for="item in news" :key="item.id">
          <a :href="`/news${item.id}`" v-if="item.values_op === 'option2'">
            <div class="news__swiper_item">
              <div class="news__swiper_img">
                <img :src="`/storage/${item.img}`" alt="" />
              </div>
              <div class="news__card_title">
                <p class="news__swiper_title" v-if="getUrl() === 'ru'">
                  <!-- {{`${item.title_ru.split('').filter((el, i) => i <= 55).join('')}...` || items.title_ru}} -->
                {{ getSlice(item.title_ru) }}
                </p>
                <p class="news__swiper_title" v-else>
                  {{ item.title_en }}
                </p>
                <div class="btn__modal_news">
                  <a :href="`/news${item.id}`" class="btn btn__modal_news_item"
                    ><span v-if="getUrl() === 'ru'">
                      Побробнее
                    </span>
                    <span v-else>
                      READ MORE
                    </span>
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      width="16"
                      height="16"
                      fill="currentColor"
                      class="bi bi-arrow-right"
                      viewBox="0 0 16 16"
                    >
                      <path
                        fill-rule="evenodd"
                        d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"
                      ></path></svg
                  ></a>
                </div>
              </div>
            </div>
          </a>
        </div>
      </div>

      <div
        class="navigation__news"
        :class="{ disabled: !pagination.next_page_url }"
        @click.prevent="getNews(pagination.next_page_url), getNewsPage()"
      >
        <div class="navigation__news_btn_next"></div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      news: [],
      loading: true,
      pagination: {},
    };
  },
  methods: {
    getNews(page_url) {
      page_url = page_url || "api/news";
      axios
        .get(page_url)
        .then((response) => {
          this.news = response.data.data;
          this.makePagination(response.data);
        })
        .finally(() => (this.loading = false));
    },
    makePagination(response) {
      let pagination = {
        current_page: response.current_page,
        last_page: response.last_page,
        prev_page_url: response.prev_page_url,
        next_page_url: response.next_page_url,
      };
      this.pagination = pagination;
    },
    getNewsPage() {
      this.loading = true;
    },
    getUrl(){
      return document.querySelector('html').lang;
    },
    getSlice(e){
      return e.length <= 55 ? e : e.split('').filter((_, i) => i <= 55).join('') + '...'
    }
  },
  created() {
    this.getNews();
    this.getNewsPage();
    this.getUrl()
  },
};
</script>

<style>
</style>