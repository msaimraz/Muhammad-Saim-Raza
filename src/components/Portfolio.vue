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
              <a v-on:click="activetab = 2" :class="[activetab === 2 ? 'active' : '']">HTML-CSS-JS</a>
            </li>
            <!-- End Vimeo tabcontent 2 -->
            <li>
              <a v-on:click="activetab = 3" :class="[activetab === 3 ? 'active' : '']">React JS-Next JS-Vue Js</a>
            </li>
            <!-- End .Youtube tabcontent 3 -->
            <!-- <li>
              <a v-on:click="activetab = 4" :class="[activetab === 4 ? 'active' : '']">Wordpress</a>
            </li> -->
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
          <div class="inner tokyo_tm_button">
            <div class="entry tokyo_tm_portfolio_animation_wrap">
              <img class="image" :src="image.src" alt="Portfolio" />
            </div>
            <a class="ib-button" :href="image.link" target="_blank">Link</a>
          </div>
        </li>
        <!-- End li -->
      </ul>
      <!-- End .portfolio_list -->
    </div>
    <!-- End .tabcontent 1 -->

    <div v-if="activetab === 2" class="tabcontent">
      <ul class="portfolio_list">
        <CoolLightBox :items="htmlcssjs" :index="index" @close="index = null">
        </CoolLightBox>
        <li v-for="(image, imageIndex) in htmlcssjs" :key="imageIndex" @click="index = imageIndex">
          <div class="inner tokyo_tm_button">
            <div class="entry tokyo_tm_portfolio_animation_wrap">
              <img class="image" :src="image.src" alt="Portfolio" />
            </div>
            <a class="ib-button" :href="image.link" target="_blank">Link</a>
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
          <div class="inner tokyo_tm_button">
            <div class="entry tokyo_tm_portfolio_animation_wrap">
              <img class="image" :src="image.src" alt="Portfolio" />
            </div>
            <a class="ib-button" :href="image.link" target="_blank">Link</a>
          </div>
        </li>
        <!-- End li -->
      </ul>
      <!-- End .portfolio_list -->
    </div>
    <!-- End .tabcontent 3 -->

    <!-- <div v-if="activetab === 4" class="tabcontent">
      <ul class="portfolio_list">
        <CoolLightBox :items="wordpress" :index="index" @close="index = null">
        </CoolLightBox>
        <li v-for="(image, imageIndex) in wordpress" :key="imageIndex" @click="index = imageIndex">
          <div class="inner tokyo_tm_button">
            <div class="entry tokyo_tm_portfolio_animation_wrap">
              <img class="image" :src="image.src" alt="Portfolio" />
            </div>
            <a class="ib-button" :href="image.link" target="_blank">Link</a>
          </div>
        </li>
        End li
      </ul>
      End .portfolio_list
    </div> -->
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
          src: require("../assets/img/portfolio/2.2.png"),
          title: 'The DigiBase',
          description: "The DigiBase is a Digital Marketing Agency",
          link: "https://thedigibase.vercel.app/",
        },
        {
          src: require("../assets/img/portfolio/1.6.png"),
          title: 'Royenix',
          description: "Royenix is a Qatar-based scaffolding & delivery service company",
          link: "https://royenix.vercel.app/",
        },
        // {
        //   src: require("../assets/img/portfolio/1-5.png"),
        //   title: 'exe',
        //   description: "",
        //   link: "http://cnet-web.consulnet.net/webservices",
        // },
        // {
        //   src: require("../assets/img/portfolio/3.1.png"),
        //   title: 'Dhamaka Store',
        //   description: "Dhamaka Store is an affiliated eCommerce Store  ",
        //   link: "https://dhamaka.store/",
        // },
        {
          src: require("../assets/img/portfolio/1-2.png"),
          title: 'The Moving Room',
          description: "",
          link: "https://tempkate.netlify.app",
        },
        {
          src: require("../assets/img/portfolio/1-1.png"),
          title: 'Team Reporter App',
          description: "",
          link: "https://teamreporterapp.netlify.app",
        },
        {
          src: require("../assets/img/portfolio/1-3.png"),
          title: 'WorkChest',
          description: "",
          link: "https://workchest.netlify.app",
        },
        // {
        //   src: require("../assets/img/portfolio/1-4.png"),
        //   title: 'Books',
        //   description: "",
        //   link: "https://teamreporterapp.netlify.app",
        // },
        // {
        //   src: require("../assets/img/portfolio/2-1.png"),
        //   title: 'SocialBump',
        //   description: "",
        //   link: "https://socialbump.herokuapp.com",
        // },
      ],
      htmlcssjs: [
        {
          src: require("../assets/img/portfolio/1.6.png"),
          title: 'Royenix',
          description: "Royenix is a Qatar-based scaffolding & delivery service company",
          link: "https://royenix.vercel.app/",
        },
        // {
        //   src: require("../assets/img/portfolio/1-5.png"),
        //   title: 'exe',
        //   description: "",
        //   link: "http://cnet-web.consulnet.net/webservices",
        // },
        {
          src: require("../assets/img/portfolio/1-1.png"),
          title: 'Team Reporter App',
          description: "",
          link: "https://teamreporterapp.netlify.app",
        },
        {
          src: require("../assets/img/portfolio/1-2.png"),
          title: 'The Moving Room',
          description: "",
          link: "https://tempkate.netlify.app",
        },
        {
          src: require("../assets/img/portfolio/1-3.png"),
          title: 'WorkChest',
          description: "",
          link: "https://workchest.netlify.app",
        },
        // {
        //   src: require("../assets/img/portfolio/1-4.png"),
        //   title: 'Books',
        //   description: "",
        //   link: "https://teamreporterapp.netlify.app",
        // },
      ],
      reactjs: [
        {
          src: require("../assets/img/portfolio/2-1.png"),
          title: 'SocialBump',
          description: "",
          link: "https://socialbump.herokuapp.com",
        },
        {
          src: require("../assets/img/portfolio/2.2.png"),
          title: 'The DigiBase',
          description: "The DigiBase is a Digital Marketing Agency",
          link: "https://www.thedigibase.com/",
        },
      ],
      // wordpress: [
      //   {
      //     src: require("../assets/img/portfolio/3.1.png"),
      //     title: 'Dhamaka Store',
      //     description: "Dhamaka Store is an affiliated eCommerce Store  ",
      //     link: "https://dhamaka.store/",
      //   },
      // ],
      index: null,
    };
  },
};
</script>

<style lang="scss" scoped></style>
