<template>
  <div id="global">
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
      <label for="rewritepassword">Rewrite password</label>
      <br />
      <br />
      <input
        type="password"
        id="rewritepassword"
        v-model="rewritepassword"
        required
      />
      <br />
      <br />
      <button v-on:click.prevent="handlesubmit">entry</button>
      <br />
      <div id="if" v-if="incorrect">
        <b style="color: red">
          the password and rewrite passwords are not same please write same in
          both the boxes
        </b>
      </div>
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
      rewritepassword: "",
      incorrect: false,
    };
  },

  methods: {
    handlesubmit: async function () {
      if (this.password != this.rewritepassword) {
        this.password = "";
        this.rewritepassword = "";
        this.incorrect = true;
      } else {
        let response = await axios.post(
          "http://127.0.0.1:8000/api/handlesignup",
          {
            name: this.name,
            password: this.password,
          }
        );
        if (response.data.redirect_url) {
          window.location.href = response.data.redirect_url;
        }
      }
    },
  },
};
</script>
<style scoped>
#global {
  background-color: #4d4949;
  color: white;
  height: 450px;
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
