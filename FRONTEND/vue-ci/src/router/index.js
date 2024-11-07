import { createRouter, createWebHistory } from "vue-router";

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: "/",
      name: "",
      component: () => import("../layouts/MainLayout.vue"),
      children: [
        {
          path: "home",
          name: "home",
          component: () => import("../views/Home.vue"),
        },
        {
          path: "login",
          name: "login",
          component: () => import("../views/auth/Login.vue"),
        },
        {
          path: "register",
          name: "register",
          component: () => import("../views/auth/Register.vue"),
        },
        {
          path: "user",
          name: "user",
          component: () => import("../views/user/Dashboard.vue"),
        },
        {
          path: "admin",
          name: "admin",
          component: () => import("../views/admin/Dashboard.vue"),
        },
      ],
    },
  ],
});

export default router;
