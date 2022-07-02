<template>
  <div class="tokyo_tm_home">
    <div class="home_content">
      <div class="avatar">
        <div class="image avatar_img" :style="{ backgroundImage: 'url(' + src1 + ')' }"></div>
      </div>
      <!-- End .avatar -->
      <div class="details">
        <h3 class="name">M Saim Raza</h3>
        <p class="job">
          A self-motivated programming student who loves coding.
        </p>

        <Social />
      </div>
      <!-- End .details -->
    </div>
  </div>
</template>

<script>
import Social from "./Social";
export default {
  components: {
    Social,
  },
  data() {
    return {
      src1: require("../assets/img/slider/1.jpg"),
    };
  },
};
</script>

<style lang="scss">
</style>
