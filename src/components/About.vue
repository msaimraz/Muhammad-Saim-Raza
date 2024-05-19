<template>
  <div class="tokyo_tm_about">
    <div class="about_image">
      <img src="../assets/img/slider/1.png" alt="about" />
    </div>
    <!-- End .about_image -->

    <div class="description">
      <h3 class="name">Muhammad Saim Raza</h3>
      <div class="description_inner">
        <div class="left">
          <p>
            Hello, world! 👋 <br/>

            I'm Muhammad Saim Raza, and I'm not just your average Front-End Developer – I'm your digital wizard, code maestro, and UX visionary all rolled into one. With an enthusiasm for creating captivating web experiences, I've had the privilege of contributing to a remarkable array of local and international projects. Each journey unfolds a unique story; each project is a canvas for boundless innovation. <br/>

            💡 Key Achievements:<br/>

            🚀 Fashioned websites that elicit "wows" with every user click.<br/>

            🔥 Conducted symphonic teamwork, orchestrating seamless collaborations for project triumphs.<br/>

            📈 Supercharged user engagement through meticulous site optimization techniques.<br/>

            🛠️ Forged code structures with longevity in mind, ready to withstand the test of time.<br/>

            💬 Kept my finger on the pulse of industry trends and emerging technologies, pioneering innovation to keep our projects at the forefront of web development.<br/>

            Ready to supercharge your digital presence? Let's connect, converse, and create something extraordinary. Together, we'll make the digital world stand up and take notice. 🚀<br/>

            #FrontEndDeveloper #WebDevelopment #UIUX #InnovationMatters
          </p>
          
          <div class="tokyo_tm_button">
            <button class="ib-button" @click="showModal">Read More</button> <br><br>
            <a class="ib-button" href="/Muhammad Saim Raza-Frontend Developer-Resume.pdf" target="_blank">Download
              CV</a>

          </div>

        </div>

        <!-- End .left -->

        <div class="right">
          <ul>
            <li>
              <p><span>Birthday:</span>16.06.2002</p>
            </li>
            <!-- <li>
              <p><span>Age:</span>20</p>
            </li> -->
            <li>
              <p><span>Address:</span>Soldier Bazar, Karachi</p>
            </li>
            <!-- <li>
              <p>
                <span>Email:</span><a href="mailto:mail@gmail.com">msraza.02@gmail.com</a>
              </p>
            </li> -->
            <!-- <li>
              <p>
                <span>Phone:</span><a href="tel:+923228604563">+92 322 8604563</a>
              </p>
            </li> -->
            <li>
              <p><span>Study:</span>Virtual University of Pakistan</p>
            </li>
            <li>
              <p><span>Freelance:</span><a href="https://www.upwork.com/freelancers/~01e6fcc04c252730b4?mp_source=share" target="_blank">Upwork</a></p>
            </li>
          </ul>
          <!-- End ul -->
        </div>
        <!-- End .right -->
      </div>
    </div>

    <!-- Start Modalbox -->
    <transition name="fade">
      <!-- Modal -->
      <div :class="{ 'modal-mask': isActive }" id="modal" @click="closeModal" v-if="isVisible">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-user" @click.stop>
          <div class="modal-content">
            <div class="tokyo_tm_modalbox_about">
              <div class="close" @click="closeModal">
                <img class="svg" src="../assets/img/svg/cancel.svg" alt="cancel-img" />
              </div>
              <!-- End .close -->
              <div class="my_box">
                <div class="left">
                  <div class="about_title">
                    <h3>Programming Skills:</h3>
                  </div>
                  <!-- End .abut_title -->
                  <div class="tokyo_progress">
                    <div class="progress_inner">
                      <span><span class="label">HTML5-CSS3</span><span class="number">80%</span></span>
                      <div class="background">
                        <div class="bar">
                          <div class="bar_in" style="width:80%"></div>
                        </div>
                      </div>
                    </div>
                    <!-- End progress_inner -->
                    <div class="progress_inner">
                      <span><span class="label">JavaScript-ES6</span><span class="number">60%</span></span>
                      <div class="background">
                        <div class="bar">
                          <div class="bar_in" style="width:60%"></div>
                        </div>
                      </div>
                    </div>
                    <!-- End progress_inner -->
                    <div class="progress_inner">
                      <span><span class="label">React JS-Next JS-Vue JS</span><span class="number">60%</span></span>
                      <div class="background">
                        <div class="bar">
                          <div class="bar_in" style="width:60%"></div>
                        </div>
                      </div>
                    </div>
                    <!-- End progress_inner -->
                    <div class="progress_inner">
                      <span><span class="label">Node JS-Express JS</span><span class="number">50%</span></span>
                      <div class="background">
                        <div class="bar">
                          <div class="bar_in" style="width:50%"></div>
                        </div>
                      </div>
                    </div>
                    <!-- End progress_inner -->
                    <div class="progress_inner">
                      <span><span class="label">Wordpress</span><span class="number">50%</span></span>
                      <div class="background">
                        <div class="bar">
                          <div class="bar_in" style="width:50%"></div>
                        </div>
                      </div>
                    </div>
                    <!-- End progress_inner -->
                  </div>
                  <!-- End .tokyo_progress -->
                </div>
                <!-- End .left -->
                <div class="right">
                  <div class="about_title">
                    <h3>Language Skills:</h3>
                  </div>
                  <div class="tokyo_progress">
                    <div class="progress_inner">
                      <span><span class="label">English</span><span class="number">65%</span></span>
                      <div class="background">
                        <div class="bar">
                          <div class="bar_in" style="width:65%"></div>
                        </div>
                      </div>
                    </div>
                    <div class="progress_inner">
                      <span><span class="label">Urdu</span><span class="number">80%</span></span>
                      <div class="background">
                        <div class="bar">
                          <div class="bar_in" style="width:80%"></div>
                        </div>
                      </div>
                    </div>
                    <!-- <div class="progress_inner">
                      <span><span class="label">Arabian</span><span class="number">85%</span></span>
                      <div class="background">
                        <div class="bar">
                          <div class="bar_in" style="width:85%"></div>
                        </div>
                      </div>
                    </div> -->
                  </div>
                </div>
                <!-- End .right -->
              </div>
              <div class="counter">
                <div class="about_title">
                  <h3>Fun Facts:</h3>
                </div>
                <ul>
                  <li>
                    <div class="list_inner">
                      <h3>20</h3>
                      <span>Projects Completed</span>
                    </div>
                  </li>
                  <li>
                    <div class="list_inner">
                      <h3>14</h3>
                      <span>Happy Clients</span>
                    </div>
                  </li>
                  <li>
                    <div class="list_inner">
                      <h3>1</h3>
                      <span>Years Of Experience</span>
                    </div>
                  </li>
                </ul>
                <!-- End ul -->
              </div>
              <!-- End .counter -->
              <!-- <div class="partners">
                <div class="about_title">
                  <h3>Our Partners</h3>
                </div>
                <Brand />
              </div> -->
              <!-- End .partner -->
            </div>
            <!-- End .tokyo_tm_modalbox_about -->
          </div>
        </div>
      </div>
    </transition>
    <!-- End Modalbox -->
  </div>
</template>

<script>
// import Brand from "./Brand";
export default {
  components: {
    // Brand,
  },
  data() {
    return {
      isActive: false,
      isVisible: false,
    };
  },
  methods: {
    showModal: function () {
      this.isActive = true;
      this.isVisible = true;
    },
    closeModal: function () {
      this.isActive = false;
      this.isVisible = false;
    },
  },
};
</script>

<style lang="scss">
</style>
