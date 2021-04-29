<template>
  <div>
    <div v-if="loading">
      <div class="preloader">
        <div>
          <div class="circle circle-1"></div>
          <div class="circle circle-2"></div>
          <div class="circle circle-3"></div>
          <div class="circle circle-4"></div>
          <div class="circle circle-5"></div>
        </div>
        <div>Загрузка...</div>
      </div>
    </div>
    <div v-else class="expert__project_container">
      <h1>Привязать проекты</h1>
      <div class="accordion accordion-flush" id="accordionFlushExample">
        <label for="exp1">Поиск экспертов</label>
        <input
          type="text"
          id="exp1"
          v-model="searchExpertInput"
          placeholder="Для поиска введите почту эксперта"
        />
        <div class="expert__email" v-for="(expert, i) in searchExpert" :key="i">
            <a :href="`/expertpageviews/${expert.id}`" target="_blank">
          <h2>
              {{ expert.user_name || "Эксперт" }} - {{ expert.email }}
          </h2>
            </a>
        </div>
      </div>
    </div>
  </div>
</template>
<style scoped>
.li__group {
  display: flex;
}
input {
  border: 2px solid black;
}
</style>
<script>
export default {
  data() {
    return {
      searchProjectInput: "",
      loading: true,
      experts: [],
      searchExpertInput: "",
      projects: [],
      expertlink: [],
    };
  },
  methods: {
    projectLink(user_id, project_id) {
      const formData = new FormData();
      formData.append("project_id", project_id);
      formData.append("user_id", user_id);
      formData.append("_method", "post");
      axios
        .post("/projectLink", formData)
        .then((response) => {
          alert("oks");
        })
        .catch((error) => {
          alert("errors");
        })
        .finally(() => (this.loading = false));
    },
  },
  computed: {
    projectSearch() {
      return this.projects.filter((item) => {
        if (item.project_name !== null) {
          return item.project_name
            .toLowerCase()
            .includes(this.searchProjectInput.toLowerCase());
        }
        return false;
      });
    },
    searchExpert() {
      return this.experts.filter((item) =>
        item.email.toLowerCase().includes(this.searchExpertInput)
      );
    },
  },
  created() {
    axios
      .get("/expertsProjectView", this.experts)
      .then((response) => {
        this.experts = response.data;
      })
      .finally(() => (this.loading = false));
    axios
      .get("/expertsProjectViewProject", this.projects)
      .then((response) => {
        this.projects = response.data;
      })
      .finally(() => (this.loading = false));
    axios
      .get("/projectLinkView", this.expertlink)
      .then((response) => {
        this.expertlink = response.data;
      })
      .finally(() => (this.loading = false));
  },
};
</script>

