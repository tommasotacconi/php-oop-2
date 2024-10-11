const { createApp } = Vue

createApp({
  data() {
    return {
      productsList: data,
    }
  },
  created () {
    console.log(data);
  }
}).mount('#app')