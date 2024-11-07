import { createRouter, createWebHistory } from "vue-router";

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: "/",
      name: "home",
      component: () => import("../views/home.vue"),
      children: [
        {
          path: "login",
          name: "login",
          component: () => import("../views/auth/login.vue"),
        },
        {
          path: "register",
          name: "register",
          component: () => import("../views/auth/register.vue"),
        },
        {
          path: "user",
          name: "user",
          component: () => import("../views/user/dashboard.vue"),
        },
        {
          path: "admin",
          name: "admin",
          component: () => import("../views/admin/dashboard.vue"),
        },
      ],
    },
  ],
});

export default router;
