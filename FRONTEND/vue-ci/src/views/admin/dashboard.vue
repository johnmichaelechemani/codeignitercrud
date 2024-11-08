<template>
  <div class="flex justify-center items-center">
    <table class="border-collapse border border-slate-500">
      <thead>
        <tr>
          <th class="border border-slate-600/50 px-4 py-2">Id</th>
          <th class="border border-slate-600/50 px-4 py-2">Name</th>
          <th rowspan="2" class="border border-slate-600/50 px-4 py-2">
            Action
          </th>
        </tr>
      </thead>
      <tbody v-for="item in data" :key="item.id">
        <tr>
          <td class="border border-slate-700/20">{{ item.id }}</td>
          <td class="border border-slate-700/20">{{ item.name }}</td>
          <td class="flex justify-center items-center gap-2">
            <button
              class="px-4 py-2 my-2 w-full bg-green-500 text-white rounded-md font-semibold text-sm"
            >
              Edit
            </button>
            <button
              class="px-4 py-2 my-2 w-full bg-red-500 text-white rounded-md font-semibold text-sm"
            >
              Delete
            </button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</template>
<script setup>
import { onMounted, ref } from "vue";
import axios from "axios";

const URL = "http://localhost:8080/api/";
const data = ref({});
const getData = async () => {
  try {
    const response = await axios.get(`${URL}dashboard`);

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
