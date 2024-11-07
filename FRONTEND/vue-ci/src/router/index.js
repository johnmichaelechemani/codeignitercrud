import { createRouter, createWebHistory } from "vue-router";

import MainLayout from "../layouts/MainLayout.vue";
import Login from "../views/auth/Login.vue";
import Register from "../views/auth/Register.vue";
import Home from "../views/Home.vue";
import userDashboard from "../views/user/Dashboard.vue";
import adminDashboard from "../views/admin/Dashboard.vue";

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: "/",
      name: "",
      component: MainLayout,
      children: [
        {
          path: "",
          name: "home",
          component: Home,
        },
        {
          path: "login",
          name: "login",
          component: Login,
        },
        {
          path: "register",
          name: "register",
          component: Register,
        },
        {
          path: "user",
          name: "user",
          component: userDashboard,
        },
        {
          path: "admin",
          name: "admin",
          component: adminDashboard,
        },
      ],
    },
  ],
});

export default router;
