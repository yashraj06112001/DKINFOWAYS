<template>
  <div id="global">
    <form id="local" @submit.prevent>
      <label for="name">Stock Name</label>
      <br />
      <input type="text" id="name" v-model="name" required />
      <br />
      <br />
      <label for="value">Value</label>
      <br />
      <input id="value" type="number" v-model="value" required />
      <br />
      <br />
      <button @click="handlebutton">Submit your stock</button>
    </form>
  </div>
</template>

<script>
import axios from "axios";
export default {
  data: function () {
    return {
      name: "",
      value: 0,
    };
  },
  props: {
    stockholdername: String,
  },
  methods: {
    handlebutton: async function () {
      try {
        let response = await axios.post(
          "http://127.0.0.1:8000/api/handlestock",
          {
            name: this.name,
            value: this.value,
            stockholdername: this.stockholdername,
          }
        );
        this.$emit("stock-submitted");
      } catch (error) {
        console.log(error);
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
