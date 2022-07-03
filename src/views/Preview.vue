<template>
  <div class="tokyo_tm_intro">

    <div class="short_info">

      <h1>Welcome</h1>
    </div>
    <!-- End .short_info -->

    <span class="intro_line"></span><span class="intro_line_2"></span><span class="intro_line_3"></span>

    <div class="demos demoTab">
      <div class="left">
        <router-link to="/home-light">
          <div class="desc">
            <img src="../assets/img/intro/light2.png" alt="light version demo" />
            <h3 class="title">Light Mode</h3>
          </div>
        </router-link>
      </div>
      <!-- End .left -->
      <div class="right">
        <router-link to="/home-dark">
          <div class="desc">
            <img src="../assets/img/intro/dark2.png" alt="dark version demo" />
            <h3 class="title">Dark Mode</h3>
          </div>
        </router-link>
      </div>
      <!-- End .right -->
    </div>

    <div class="demos demoLap">
      <div class="left">
        <router-link to="/home-light">
          <div class="desc">
            <img src="../assets/img/intro/light.png" alt="light version demo" />
            <h3 class="title">Light Mode</h3>
          </div>
        </router-link>
      </div>
      <!-- End .left -->
      <div class="right">
        <router-link to="/home-dark">
          <div class="desc">
            <img src="../assets/img/intro/dark.png" alt="dark version demo" />
            <h3 class="title">Dark Mode</h3>
          </div>
        </router-link>
      </div>
      <!-- End .right -->
    </div>
    <!-- End .demos -->
  </div>
  <!-- End .tokyo_tm_intro -->
  
</template>

<script>
export default {};
</script>

<style lang="scss" scoped>
</style>
