<template>
  <div id="global">
    <button v-on:click="handlebutton1" id="button1">Login</button>
    <button id="button2" v-on:click="handlebutton2">signup</button>
  </div>
</template>
<script>
import axios from "axios";
export default {
  methods: {
    handlebutton1: async function () {
      try {
        const response = await axios.post(
          "http://127.0.0.1:8000/api/handlebutton1"
        );
        if (response.data.redirect_url) {
          window.location.href = response.data.redirect_url;
        }
      } catch (error) {
        console.error(error);
      }
    },
    handlebutton2: async function () {
      try {
        const response = await axios.post(
          "http://127.0.0.1:8000/api/handlebutton2"
        );
        if (response.data.redirect_url) {
          window.location.href = response.data.redirect_url;
        }
      } catch (error) {
        console.error(error);
      }
    },
  },
};
</script>
<style scoped>
#global {
  background-color: black;
  padding: 10px;
}
button {
  width: 200px;
  background-color: #4d4949;
  color: white;
  height: 100px;
}
#button1 {
  margin-left: 300px;
}
#button2 {
  margin-left: 500px;
}
#button1:hover {
  height: 110px;
  font-size: 20px;
  width: 210px;
  background-color: #07f244;
  margin-bottom: 10px;
}
#button2:hover {
  height: 110px;
  font-size: 20px;
  width: 210px;
  background-color: #07f244;
  margin-bottom: 10px;
}
</style>