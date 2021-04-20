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
      <li class="list-group-item" v-for="(expert, i) in experts" :key="i">
        <span class="badge badge-primary">#{{ expert.id }}</span>
        {{ expert.email }}
      </li>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      loading: true,
      experts: [],
    };
  },
  // props: ["experts"],
  created() {
    axios
      .get("/expertsProjectView", this.experts)
      .then((response) => {
        this.experts = response.data;
        // console.log(this.experts.length)
      })
      .finally(() => (this.loading = false));
  },
};
</script>

