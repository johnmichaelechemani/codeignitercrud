<template>
  <div class="flex justify-center items-center">
    <div>
      <div class="flex justify-center items-center gap-2 my-3">
        <input
          type="text"
          required
          placeholder="Task"
          class="input input-bordered w-full max-w-xs"
          v-model="task"
        />
        <button @click="createTask()" class="btn btn-info">Add</button>
      </div>
      <div class="overflow-x-auto">
        <table class="table">
          <thead>
            <tr>
              <th>Id</th>
              <th>Name</th>
              <th rowspan="2">Action</th>
            </tr>
          </thead>
          <tbody v-for="item in data" :key="item.id">
            <tr>
              <td>{{ item.id }}</td>
              <td>{{ item.name }}</td>
              <td class="flex justify-center items-center gap-2">
                <button class="btn btn-sm btn-success">
                  <Icon icon="ic:round-edit" width="20" height="20" />
                </button>
                <button
                  class="btn btn-sm btn-error"
                  @click="deleteTask(task.id)"
                >
                  <Icon
                    icon="material-symbols:delete-sharp"
                    width="20"
                    height="20"
                  />
                </button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</template>
<script setup>
import { Icon } from "@iconify/vue";
import { onMounted, ref } from "vue";
import axios from "axios";

const URL = "http://localhost:8080/api/";
const data = ref({});
const task = ref("");

const createTask = async () => {
  if (task.value.trim() === "") {
    console.warn("Task name is empty.");
    return;
  }
  console.log(task.value);
  try {
    const response = await axios.post(`${URL}dashboard`, {
      name: task.value,
    });
    console.log("Newly created task:", response.data);
    data.value.push(response.data);
    task.value = "";
  } catch (err) {
    console.error("Error creating task:", err);
  }
};

const fetchData = async () => {
  try {
    const response = await axios.get(`${URL}dashboard`);
    data.value = response.data;
    console.log(data.value);
  } catch (error) {
    console.error("Error fetching data:", error);
  }
};

const deleteTask = async (id) => {
  try {
    await axios.delete(`${URL}dashboard/${id}`);
    data.value = data.value.filter((task) => task.id !== id);
  } catch (err) {
    console.error("Error deleting task:", err);
  }
};

onMounted(() => {
  fetchData();
});
</script>
