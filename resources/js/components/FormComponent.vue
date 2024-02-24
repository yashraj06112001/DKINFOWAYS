<template>
  <div id="global">
    <p>HI I am here............</p>
    <form id="local">
      <label for="name">Name</label>
      <br />
      <br />
      <input type="text" id="name" v-model="name" required />
      <br />
      <br />
      <label for="password">Password </label>
      <br />
      <br />
      <input type="password" id="password" v-model="password" required />
      <br />
      <br />
      <button v-on:click.prevent="enter">entry</button>
    </form>
  </div>
</template>
<script>
import axios from "axios";
export default {
  data: function () {
    return {
      name: "",
      password: "",
    };
  },
  methods: {
    enter: async function () {
      // let name = this.name;
      // let password = this.name;
      let response = await axios.post("http://127.0.0.1:8000/api/handleLogin", {
        name: this.name,
        password: this.password,
      });
      if (response.data.redirect_url) {
        window.location.href = response.data.redirect_url;
      }
    },
  },
};
</script>
<style scoped>
#global {
  background-color: #4d4949;
  color: white;
  height: 400px;
  padding: 10px;
}
#local {
  color: white;
  margin-left: 100px;
  margin-right: 100px;
  margin-top: 100px;
}
label {
  font-size: larger;
  margin: 500px;
}
input {
  margin-left: 450px;
  border-radius: 20px;
  height: 20px;
  width: 200px;
}
button {
  margin-left: 450px;
  width: 200px;
  height: 50px;
  background-color: #1d6b31;
  color: white;
  border-radius: 20px;
}
button:hover {
  height: 60px;
  font-size: 20px;
  width: 210px;
  background-color: #07f244;
  margin-bottom: 10px;
}
</style>