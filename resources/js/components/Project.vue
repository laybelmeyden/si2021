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
  <div v-else>HI</div>
</template>

<script>
export default {
  data() {
    return {
      loading: false,
    };
  },
  methods: {
  },
  mounted() {
      
      },
};
</script>

