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
        <p>Создание проекта...</p>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      loading: true,
    };
  },
  created() {
    axios.post('/createProject', this.fields)
      .then(response =>{
        this.fields = {}
        window.location = `/home`
      })
      .catch(error =>{
        alert('errors')
      })
  }
};
</script>

