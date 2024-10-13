const { createApp } = Vue

createApp({
  data() {
    return {
      productsList: data,
    }
  },
  methods: {
    goToLogin() {
      console.log('ciao');
      window.location.href = "http://localhost/es-php/es_45-php-oop-2/pages/login.php";
    },
  },
  created () {
    console.log(data);
  }
}).mount('#app')