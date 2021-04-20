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
        <div></div>
      </div>
    </div>
    <div v-else>
      <h1>Привязать проекты</h1>
      <div class="accordion accordion-flush" id="accordionFlushExample">
        <label for="">Поиск экспертов</label>
        <input type="text" v-model="searchExpertInput" />
        <div
          class="accordion-item"
          v-for="(expert, i) in searchExpert"
          :key="i"
        >
          <h2 class="accordion-header" :id="`flush-headingOne${expert.id}`">
            <button
              class="accordion-button collapsed"
              type="button"
              data-bs-toggle="collapse"
              :data-bs-target="`#flush-collapseOne${expert.id}`"
              aria-expanded="false"
              :aria-controls="`flush-collapseOne${expert.id}`"
            >
              {{ expert.email }}
            </button>
          </h2>
          <div
            :id="`flush-collapseOne${expert.id}`"
            class="accordion-collapse collapse"
            :aria-labelledby="`flush-headingOne${expert.id}`"
            data-bs-parent="#accordionFlushExample"
          >
            <div class="accordion-body">
              <div>
                <label for="">Поиск проектов</label>
                <input type="text" v-model="searchProjectInput" />
                <div v-for="(project, i) in projectSearch" :key="i">
                  <p>{{ project.project_name }}</p>
                  <a @click.prevent="projectLink">Привязать проект</a>
                </div>
              </div>
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
    };
  },
  methods: {
    projectLink() {
      axios
        .post("/projectLink", this.peoject)
        .then((response) => {})
        .catch((error) => {})
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
  },
};
</script>

