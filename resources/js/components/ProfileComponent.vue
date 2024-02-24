<template>
  <div id="global">
    <br />
    <br />
    <stockshow-component :name="name"></stockshow-component>
    <br />
    <br />
    <button v-on:click="stockAdd">add stock</button>
    <div v-if="toggle">
      <stockget-component
        @stock-submitted="reloadPage"
        :stockholdername="name"
      ></stockget-component>
    </div>
  </div>
</template>
<script>
import StockgetComponentVue from "./StockgetComponent.vue";
import StockshowComponentVue from "./StockshowComponent.vue";
export default {
  data: function () {
    return {
      toggle: false,
    };
  },
  props: {
    name: String,
  },
  components: {
    StockgetComponentVue,
    StockshowComponentVue,
  },
  methods: {
    stockAdd() {
      this.toggle = !this.toggle;
    },
    reloadPage() {
      location.reload(); // Reload the page
    },
  },
};
</script>
<style scoped>
button {
  width: 200px;
  background-color: darkgreen;
  color: white;
  height: 50px;
  margin-left: 300px;
  margin-bottom: 20px;
}
button:hover {
  height: 110px;
  font-size: 20px;
  width: 210px;
  background-color: #07f244;

  margin-bottom: 20px;
}
</style>
