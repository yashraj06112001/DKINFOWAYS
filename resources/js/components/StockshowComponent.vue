<template>
  <br />

  <h2
    style="
      margin-left: 500px;
      border-style: groove;
      border-color: black;
      border-radius: 20px;
      width: 500px;
      padding: 10px;
    "
  >
    So {{ name }} have stocks in this list
  </h2>
  <div class="dark-theme">
    <table v-if="items.length > 0" class="table">
      <thead>
        <tr>
          <th>Stock Name</th>
          <th>Stock Price</th>
        </tr>
      </thead>
      <tbody>
        <tr
          v-for="item in items"
          :key="item.id"
          :class="{ 'odd-row': index % 2 === 0 }"
        >
          <td>{{ item.stock_name }}</td>
          <td>{{ item.stock_price }}</td>
        </tr>
      </tbody>
    </table>
    <p v-else class="no-items">No items found</p>
  </div>
</template>
<script>
export default {
  props: {
    name: String,
  },
  data: function () {
    return {
      items: [],
    };
  },
  mounted() {
    this.fetchData();
  },
  methods: {
    fetchData() {
      axios
        .get("http://127.0.0.1:8000/api/stockshow", {
          params: {
            holder: this.name,
          },
        })
        .then((response) => {
          this.items = response.data.items;
        })
        .catch((error) => {
          console.error("Error fetching data:", error);
        });
    },
  },
};
</script>
<style scoped>
.dark-theme {
  background-color: #202124; /* Dark background color */
  color: #ffffff; /* Text color */
  font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif; /* Font family */
}

.table {
  width: 100%;
  border-collapse: collapse;
}

.table th,
.table td {
  padding: 12px;
  text-align: left;
}

.table th {
  background-color: #282a2e; /* Table header background color */
}

.table td {
  background-color: #353739; /* Table cell background color */
}

.odd-row {
  background-color: #2c2e30; /* Alternate row background color */
}
</style>