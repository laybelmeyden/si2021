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
      <h1>Привязать проект для эксперта: {{ currentuserdata.user_name }}</h1>
      <div class="project__linkeds">
        <div>
          <h3>Проекты для привязки</h3>
          <label for="exp1">Поиск проектов</label>
          <input
            type="text"
            id="exp1"
            v-model="searchProjectInput"
            placeholder="Для поиска введите название проекта"
          />
          <div
            v-for="(project, i) in projectSearch"
            :key="i"
            class="project__name"
          >
            <input
              type="text"
              hidden
              id="user_id"
              name="user_id"
              :data-value="currentuserdata.id"
              :value="currentuserdata.id"
            />
            <input
              type="text"
              hidden
              id="project_id"
              name="project_id"
              :data-value="project.id"
              :value="project.id"
            />
            <div class="add__links">
              <p>{{ project.project_name }}</p>
            <button
              @click.prevent="projectLink(currentuserdata.id, project.id)"
              id="btn__link_exp"
            >
              Привязать проект
            </button>
            </div>
          </div>
        </div>
        <div>
          <h3>Привязанные проекты</h3>
          <div
            v-for="(currentuserdatalinks, i) in currentuserdatalinks"
            :key="i"
          >
            <div class="remove__links">
              <a :href="`/projects/${projectUrl(currentuserdatalinks)}`">{{
              projectName(currentuserdatalinks)
            }}</a>
            <button
              @click.prevent="deletedLinks(currentuserdatalinks.id)"
              id="btn__link_deleted"
            >
              Удалить
            </button>
            </div>
          </div>
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
      projects: [],
      expertlink: [],
    };
  },
  props: [
    "currentuserdata",
    "currentprojectsdata",
    "currentuserdatalinks",
    "currentviewprojectslinks",
  ],
  methods: {
  projectLink(user_id, project_id) {
      const formData = new FormData();
      formData.append("project_id", project_id);
      formData.append("user_id", user_id);
      formData.append("_method", "post");
    axios
        .post("/projectLink", formData)
        .then((response) => {
          // alert("Проект привязан");
          window.location.reload()
        })
        .catch((error) => {
          alert("Не получилось привязать проект, перезагурзите страницу");
        })
        .finally(() => (this.loading = false));
    },
    deletedLinks(e) {
      const url = "/expertpageviewsDeleted/" + e;
      axios
        .post(url)
        .then((response) => {
          // alert("Проект удален");
          window.location.reload()
        })
        .catch((error) => {
          alert("Не получилось удалить проект, перезагурзите страницу");
        })
        .finally(() => (this.loading = false));
    },
    projectName(a) {
      let aa = this.projects.filter((e) => e.id == a.project_id);
      return aa[0].project_name;
    },
    projectUrl(a) {
      let aa = this.projects.filter((e) => e.id == a.project_id);
      return aa[0].id;
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
  },
  mounted() {
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