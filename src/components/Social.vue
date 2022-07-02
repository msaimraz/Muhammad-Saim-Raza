<template>
  <ul class="social">
    <li v-for="(social, i) in socialList" :key="i">
      <a :href="social.link" target="_blank" rel="noreferrer"><img class="svg" :src="social.src" alt="social" /></a>
    </li>
  </ul>
  <!-- End. social -->
</template>

<script>
export default {
  data() {
    return {
      socialList: [
        {
          link: "https://github.com/msaimraz",
          src: require("../assets/img/svg/social/new/github.svg"),
        },
        {
          link: "https://www.linkedin.com/in/m-saim-raza",
          src: require("../assets/img/svg/social/new/linkedin.svg"),
        },
        {
          link: "https://www.facebook.com/m.saimraz",
          src: require("../assets/img/svg/social/new/facbook.svg"),
        },
        {
          link: "https://www.instagram.com/m.saimraz",
          src: require("../assets/img/svg/social/new/instagram.svg"),
        }
        // {
        //   link: "https://leetcode.com/msaimraza",
        //   src: require("../assets/img/svg/social/instagram-2.svg"),
        // },
      ],
    };
  },
};
</script>

<style lang="scss" scoped>
</style>
