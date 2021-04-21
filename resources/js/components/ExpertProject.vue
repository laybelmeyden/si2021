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
              поиск проектов <input type="text" v-model="searchProjectInput" />
              <div v-for="(project, i) in projectSearch" :key="i">
                {{ project.project_name }}
                <input type="text" hidden id="user_id" name="user_id" :data-value="expert.id" :value="expert.id">
                <input type="text" hidden id="project_id" name="project_id"  :data-value="project.id" :value="project.id">
                <button @click="projectLink(expert.id,project.id)">dss</button>
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
      expertProjects: {
        project_id: '',
        user_id: ''
      },
    };
  },
  methods: {
    projectLink(user_id, project_id) {
      console.log(user_id, project_id)
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
    }
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

