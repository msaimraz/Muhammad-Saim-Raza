<template>
  <div class="tokyo_tm_portfolio">
    <div class="tokyo_tm_title">
      <div class="title_flex">
        <div class="left">
          <span>Portfolio</span>
          <h3>Creative Portfolio</h3>
        </div>
        <!-- End Left -->
        <div class="portfolio_filter">
          <ul>
            <li>
              <a v-on:click="activetab = 1" :class="[activetab === 1 ? 'active' : '']">All</a>
            </li>
            <!-- End All for tabcontent 1 -->
            <li>
              <a v-on:click="activetab = 2" :class="[activetab === 2 ? 'active' : '']">HTML-CSS</a>
            </li>
            <!-- End Vimeo tabcontent 2 -->
            <li>
              <a v-on:click="activetab = 3" :class="[activetab === 3 ? 'active' : '']">React JS</a>
            </li>
            <!-- End .Youtube tabcontent 3 -->
            <li>
              <a v-on:click="activetab = 4" :class="[activetab === 4 ? 'active' : '']">MERN</a>
            </li>
            <!-- End Mix tabcontent 4 -->
          </ul>
        </div>
        <!-- End .portfolio-filter -->
      </div>
    </div>
    <!-- End tokyo_tm_title -->

    <div v-if="activetab === 1" class="tabcontent">
      <ul class="portfolio_list">
        <CoolLightBox :items="allItems" :index="index" @close="index = null">
        </CoolLightBox>
        <li v-for="(image, imageIndex) in allItems" :key="imageIndex" @click="index = imageIndex">
          <div class="inner">
            <div class="entry tokyo_tm_portfolio_animation_wrap">
              <img class="image" :src="image.thumb" alt="Portfolio" />
            </div>
          </div>
        </li>
        <!-- End li -->
      </ul>
      <!-- End .portfolio_list -->
    </div>
    <!-- End .tabcontent 1 -->

    <div v-if="activetab === 2" class="tabcontent">
      <ul class="portfolio_list">
        <CoolLightBox :items="htmlcss" :index="index" @close="index = null">
        </CoolLightBox>
        <li v-for="(image, imageIndex) in htmlcss" :key="imageIndex" @click="index = imageIndex">
          <div class="inner">
            <div class="entry tokyo_tm_portfolio_animation_wrap">
              <img class="image" :src="image.src" alt="Portfolio" />
            </div>
          </div>
        </li>
        <!-- End li -->
      </ul>
      <!-- End .portfolio_list -->
    </div>
    <!-- End .tabcontent 2 -->

    <div v-if="activetab === 3" class="tabcontent">
      <ul class="portfolio_list">
        <CoolLightBox :items="reactjs" :index="index" @close="index = null">
        </CoolLightBox>
        <li v-for="(image, imageIndex) in reactjs" :key="imageIndex" @click="index = imageIndex">
          <div class="inner">
            <div class="entry tokyo_tm_portfolio_animation_wrap">
              <img class="image" :src="image.thumb" alt="Portfolio" />
            </div>
          </div>
        </li>
        <!-- End li -->
      </ul>
      <!-- End .portfolio_list -->
    </div>
    <!-- End .tabcontent 3 -->

    <div v-if="activetab === 4" class="tabcontent">
      <ul class="portfolio_list">
        <CoolLightBox :items="mern" :index="index" @close="index = null">
        </CoolLightBox>
        <li v-for="(image, imageIndex) in mern" :key="imageIndex" @click="index = imageIndex">
          <div class="inner">
            <div class="entry tokyo_tm_portfolio_animation_wrap">
              <img class="image" :src="image.thumb" alt="Portfolio" />
            </div>
          </div>
        </li>
        <!-- End li -->
      </ul>
      <!-- End .portfolio_list -->
    </div>
    <!-- End .tabcontent 4 -->
  </div>
</template>

<script>
export default {
  data() {
    return {
      activetab: 1,
      allItems: [
        {
          src: require("../assets/img/portfolio/2.jpg"),
          thumb: require("../assets/img/portfolio/5.jpg"),
          title: 'Team Reporter App',
          description: "Source Code",
          // link:"https://github.com/msaimraz/Projects/tree/main/Team%20Reporter"
        },
        {
          src: require("../assets/img/portfolio/2.jpg"),
          thumb: require("../assets/img/portfolio/2.jpg"),
        },
        {
          src: require("../assets/img/portfolio/2.jpg"),
          thumb: require("../assets/img/portfolio/4.jpg"),
        },
        {
          src: require("../assets/img/portfolio/01.png"),
          thumb: require("../assets/img/portfolio/01.png"),
          source: "https://github.com/msaimraz/Projects/tree/main/Team%20Reporter",
        },
      ],
      htmlcss: [
        {
          src: require("../assets/img/portfolio/01.png"),
          title: 'Team Reporter App',
          description: "Source Code",
        },
        {
          src: require("../assets/img/portfolio/02.png"),
          title: 'Team Reporter App',
          description: "Source Code",
        },
        {
          src: require("../assets/img/portfolio/03.png"),
          title: 'Team Reporter App',
          description: "Source Code",
        },
        {
          src: require("../assets/img/portfolio/04.png"),
          title: 'Team Reporter App',
          description: "Source Code",
        },
      ],
      reactjs: [
        {
          src: require("../assets/img/portfolio/2.jpg"),
          thumb: require("../assets/img/portfolio/2.jpg"),
        },
        {
          src: require("../assets/img/portfolio/2.jpg"),
          thumb: require("../assets/img/portfolio/3.jpg"),
        },
      ],
      mern: [
        {
          src: require("../assets/img/portfolio/2.jpg"),
          thumb: require("../assets/img/portfolio/5.jpg"),
        },
        {
          src: require("../assets/img/portfolio/2.jpg"),
          thumb: require("../assets/img/portfolio/4.jpg"),
        },
        {
          src: require("../assets/img/portfolio/3.jpg"),
          thumb: require("../assets/img/portfolio/3.jpg"),
        },
      ],
      index: null,
    };
  },
};
</script>

<style lang="scss" scoped>
</style>
