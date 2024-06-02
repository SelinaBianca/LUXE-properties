<x-app-layout>
    <!-- image ans search -->
    <div class="hero">
        <div class="hero-slide">
          <div
            class="img overlay"
            style="background-image: url('asset/images/hero_bg_3.jpg')"
          ></div>
          <div
            class="img overlay"
            style="background-image: url('asset/images/hero_bg_2.jpg')"
          ></div>
          <div
            class="img overlay"
            style="background-image: url('asset/images/hero_bg_1.jpg')"
          ></div>
        </div>


        <div class="container">

          <div class="row justify-content-center align-items-center">
            <div class="col-lg-9 text-center">


            </div>
          </div>
        </div>
      </div>







    <!-- component -->
    <!-- component -->
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;600;700&display=swap"
          rel="stylesheet" />

    <!-- navbar -->



    <!-- hero section -->
    <section class="relative py-32 lg:py-36 bg-white">
        <div
            class="mx-auto lg:max-w-7xl w-full px-5 sm:px-10 md:px-12 lg:px-5 flex flex-col lg:flex-row gap-10 lg:gap-12">


            <div class="relative flex flex-col items-center text-center lg:text-left lg:py-7 xl:py-8
            lg:items-start lg:max-w-none max-w-3xl mx-auto lg:mx-0 lg:flex-1 lg:w-1/2">

                <h1 class="text-3xl leading-tight text-teal-900  xl:text-6xl
            font-bold ">
                    LUXE Properties
                </h1>
               <p class="mr-20 text-justify text-gray-500">
                LUXE Properties is dedicated to providing exceptional real estate services, helping clients find their dream property with ease and confidence. With a focus on luxury and comfort, we aim to exceed your expectations and deliver unparalleled satisfaction.
                   Our team of experienced professionals is committed to guiding you through every step of the real estate process, ensuring a seamless and stress-free experience. Whether you're buying, selling, or renting, LUXE Properties offers personalized solutions tailored to your unique needs and preferences.
                </p>



            </div>
            <div class="flex flex-1 lg:w-1/2 h-96 relative lg:max-w-none lg:mx-0 mx-auto max-w-3xl">
                <img src="https://agencex-astro.vercel.app/images/image1.webp" alt="Hero image" width="2350" height="2359"
                     class="lg:absolute lg:w-full lg:h-full rounded-3xl object-cover lg:max-h-none max-h-96">
            </div>
        </div>
    </section>




      <section class="features-1">
        <div class="container">
          <div class="row">
            <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
              <div class="box-feature">
                <span class="flaticon-house"></span>
                <h3 class="mb-3">Our Properties</h3>
                <p>
                  From cozy homes to luxurious estates, our real estate app has a diverse collection of properties waiting for you.
                </p>
                <p><a href="{{ route('properties') }}" class="learn-more">Learn More</a></p>
              </div>
            </div>
            <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="500">
              <div class="box-feature">
                <span class="flaticon-building"></span>
                <h3 class="mb-3">Insights</h3>
                <p>
                  Empower your property journey with our real estate application,
                    featuring cutting-edge insights on market trends for your ideal investment.
                </p>
                <p><a href="/about" class="learn-more">Learn More</a></p>
              </div>
            </div>
            <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
              <div class="box-feature">
                <span class="flaticon-house-3"></span>
                <h3 class="mb-3">Real Estate Agent</h3>
                <p>
                 our agents
                    offer seamless service to customers who are ready to guide you through every step of your journey
                </p>
                <p><a href="/services" class="learn-more">Learn More</a></p>
              </div>
            </div>
            <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="600">
              <div class="box-feature">
                <span class="flaticon-house-1"></span>
                <h3 class="mb-3">Mortgage Calulator</h3>
                <p>
                  complete with a sophisticated mortgage calculator that empowers you to make informed financial decisions
                </p>
                <p><a href="#" class="learn-more">Learn More</a></p>
              </div>
            </div>
          </div>
        </div>
      </section>


    <div class="section">
        <div class="row justify-content-center footer-cta" data-aos="fade-up">
            <div class="col-lg-7 mx-auto text-center">
                <h2 class="mb-4">Be a part of our growing real state agents</h2>
                <p>
                    <a
                        href="#"
                        target="_blank"
                        class="btn btn-primary text-white py-3 px-4 mb-14"
                    >Apply for Real Estate agent</a>
                </p>
            </div>






      <div class="section section-4 bg-light">
        <div class="container">
          <div class="row justify-content-center text-center mb-5">
            <div class="col-lg-5">
              <h2 class="font-weight-bold heading text-primary mb-4">
                Let's find a property that's perfect for you
              </h2>

            </div>
          </div>
          <div class="row justify-content-between mb-5">
            <div class="col-lg-7 mb-5 mb-lg-0 order-lg-2">
              <div class="img-about dots">
                <img src="asset/images/hero_bg_3.jpg" alt="Image" class="img-fluid" />
              </div>
            </div>
            <div class="col-lg-4 ">
              <div class="d-flex feature-h">
                <span class="wrap-icon me-3 mb-20 mt-20">
                  <span class="icon-home2"></span>
                </span>
                <div class="feature-text ">
                  <h3 class="heading mt-24">Legit Properties</h3>

                </div>
              </div>

              <div class="d-flex feature-h">
                <span class="wrap-icon me-3 mb-20">
                  <span class="icon-person"></span>
                </span>
                <div class="feature-text">
                  <h3 class="heading mt-3"> Agents</h3>

                </div>
              </div>

              <div class="d-flex feature-h">
                <span class="wrap-icon me-3 mb-20">
                  <span class="icon-security"></span>
                </span>
                <div class="feature-text">
                  <h3 class="heading mt-3">Customer Satisfaction</h3>

                </div>
              </div>
            </div>
          </div>

          </div>
        </div>
      </div>
        <div class="section w-full bg-teal-900 h-5"></div>



            <!-- /.col-lg-7 -->
        </div>
        <!-- /.row -->
      </div>


</x-app-layout>
