<template>
  <nav class="flex justify-center items-center gap-4 my-5">
    <RouterLink to="/" class="p-2 bg-gray-500/20 rounded-md">Home</RouterLink>
    <RouterLink to="user" class="p-2 bg-gray-500/20 rounded-md"
      >User Dashboard</RouterLink
    >
    <RouterLink to="admin" class="p-2 bg-gray-500/20 rounded-md"
      >Admin Dashboard</RouterLink
    >
    <RouterLink to="login" class="p-2 bg-gray-500/20 rounded-md"
      >Login</RouterLink
    >
    <RouterLink to="register" class="p-2 bg-gray-500/20 rounded-md"
      >Register</RouterLink
    >
  </nav>
</template>
<script setup></script>
