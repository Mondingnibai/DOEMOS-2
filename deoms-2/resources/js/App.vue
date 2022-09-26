<template>
    <div class="app-view">
        <div class="hero-slide owl-carousel site-blocks-cover">
            <div class="intro-section" style="background-image: url('images/deoms_teachers.jpg');">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12 mx-auto text-center" data-aos="fade-up">
                            <h1>Welcome Students</h1>
                        </div>
                    </div>
                </div>
            </div>

            <div class="intro-section" style="background-image: url('images/deoms_teachers2.jpg');">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12 mx-auto text-center" data-aos="fade-up">
                            <h1>Welcome Students</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
        <div class="site-section">
            <div class="container">
              <div class="row mb-5 justify-content-center text-center" v-if="announcements.length > 0">
                <div class="col-lg-4 mb-5">
                  <h2 class="section-title-underline mb-5">
                    <span>Announcements</span>
                  </h2>
                </div>
              </div>
              <div class="row" v-if="announcements.length > 0">

                <div class="col-lg-4 col-md-6" style="margin-bottom: 4.5em !important;" v-for="(announcement, key) in announcements" :key="announcement.id">
                  <div class="feature-1 border">
                    <div class="icon-wrapper bg-primary">
                      <span class="icon-bullhorn text-white"></span>
                    </div>
                    <div class="feature-1-content text-left">
                      <h2>{{ announcement.title }}</h2>
                      <p>{{ announcement.description.substring(0, 120) + '...' }}</p>
                    </div>
                  </div>
                </div>

              </div>

              <div class="row" v-else>

                <div class="row mb-5 justify-content-center text-center">
                  <div class="col-lg-4 mb-5">
                    <h2 class="section-title-underline mb-5">
                      <span>No Announcement</span>
                    </h2>
                  </div>
                </div>

              </div>
            </div>
        </div>
    
        <div class="section-bg style-1" style="background-image: url('images/deoms_teachers.jpg');">
            <div class="container">
              <div class="row">
                <div class="col-lg-4">
                  <h2 class="section-title-underline style-2">
                    <span>About Don Emilio</span>
                  </h2>
                </div>
                <div class="col-lg-8">
                  <p class="lead">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rem nesciunt quaerat ad reiciendis perferendis voluptate fugiat sunt fuga error totam.</p>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus assumenda omnis tempora ullam alias amet eveniet voluptas, incidunt quasi aut officiis porro ad, expedita saepe necessitatibus rem debitis architecto dolore? Nam omnis sapiente placeat blanditiis voluptas dignissimos, itaque fugit a laudantium adipisci dolorem enim ipsum cum molestias? Quod quae molestias modi fugiat quisquam. Eligendi recusandae officiis debitis quas beatae aliquam?</p>
                </div>
              </div>
            </div>
        </div>

    </div>
</template>
<script>
    export default {
      name:"homepageAnnouncement",
      data() {
        return {
            announcements: []
        }
      },

      mounted() {
        // display all announcement
        this.getAnnouncement()
      },
      
      methods: {
        // get all announcement
        async getAnnouncement() {
            await this.axios.get('getAllAnnouncement').then(response => {
                
                this.announcements = response.data
                console.log(this.announcements)

            }).catch( error => {
                console.log(error.response)
            })
        }
      }
    }
</script>