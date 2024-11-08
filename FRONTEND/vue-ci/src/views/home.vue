<template>
  <div>
    <div v-for="item in data" :key="item.id">
      {{ item }}
    </div>
  </div>
</template>
<script setup>
import { onMounted, ref } from "vue";
import axios from "axios";

const URL = "http://localhost:8080/index.php/";
const data = ref({});
const getData = async () => {
  try {
    const response = await axios.get(`${URL}admin/dashboard`);

    data.value = response.data;
    console.log(data.value);
  } catch (error) {
    console.error("Error fetching data:", error);
  }
};
onMounted(() => {
  getData();
});
</script>
