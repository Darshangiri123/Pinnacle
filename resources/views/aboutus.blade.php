@extends('front.layouts.default')

@section('title',"Home")

@section('content')


<body>




  <!-- About 1  -->
  <section class="py-3 py-md-5">
    <div class="container">
      <div class="row gy-3 gy-md-4 gy-lg-0 align-items-lg-center">
        <div class="col-12 col-lg-6 col-xl-5">
          <img class="img-fluid rounded" loading="lazy" src="{{asset('images/About-1.jpg')}}" alt="About 1">
        </div>
        <div class="col-12 col-lg-6 col-xl-7">
          <div class="row justify-content-xl-center">
            <div class="col-12 col-xl-11">
              <h2 class="mb-3">Who Are We?</h2>
              <p class="lead fs-4 text-secondary mb-3">Pinnacle is a revolutionary web app dedicated to fostering secure and effective collaboration within teams, organizations, clubs, and more.</p>
              <p class="mb-5">We provide dedicated spaces for group discussions, enabling real-time communication among members within their respective community spaces. Our platform includes tools for organizing and planning events, and offers customizable themes to enhance user experience. At Pinnacle, we are committed to enhancing communication, collaboration, and organization through innovative technology.</p>
              <div class="row gy-4 gy-md-0 gx-xxl-5X">
                <div class="col-12 col-md-6">
                  <div class="d-flex">
                    <div class="me-4 text-primary">
                      <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-gear-fill" viewBox="0 0 16 16">
                        <path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z" />
                      </svg>
                    </div>
                    <div>
                      <h2 class="h4 mb-3">Versatile Brand</h2>
                      <p class="text-secondary mb-0">We offer a dynamic digital experience that seamlessly integrates across all platforms.</p>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-md-6">
                  <div class="d-flex">
                    <div class="me-4 text-primary">
                      <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-fire" viewBox="0 0 16 16">
                        <path d="M8 16c3.314 0 6-2 6-5.5 0-1.5-.5-4-2.5-6 .25 1.5-1.25 2-1.25 2C11 4 9 .5 6 0c.357 2 .5 4-2 6-1.25 1-2 2.729-2 4.5C2 14 4.686 16 8 16Zm0-1c-1.657 0-3-1-3-2.75 0-.75.25-2 1.25-3C6.125 10 7 10.5 7 10.5c-.375-1.25.5-3.25 2-3.5-.179 1-.25 2 1 3 .625.5 1 1.364 1 2.25C11 14 9.657 15 8 15Z" />
                      </svg>
                    </div>
                    <div>
                      <h2 class="h4 mb-3">Digital Agency</h2>
                      <p class="text-secondary mb-0">We innovate by combining fundamental concepts with intricate ideas to deliver unparalleled results.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <hr>
  <br>

  <!-- About 2  -->
  <section class="py-3 py-md-5">
    <div class="container">
      <div class="row gy-3 gy-md-4 gy-lg-0 align-items-lg-center">
        <div class="col-12 col-lg-6">
          <img class="img-fluid rounded" loading="lazy" src="{{asset('images/About-2.webp')}}" alt="About 2">
        </div>
        <div class="col-12 col-lg-6">
          <div class="row justify-content-xl-center">
            <div class="col-12 col-xl-10">
              <h2 class="mb-3">Why Choose Us?</h2>
              <p class="lead fs-4 mb-3 mb-xl-5">With years of experience and deep industry knowledge, Pinnacle is your reliable partner in streamlining communication and collaboration.</p>
              <div class="d-flex align-items-center mb-3">
                <div class="me-3 text-primary">
                  <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                  </svg>
                </div>
                <div>
                  <p class="fs-5 m-0">Our evolution process is highly intelligent and adaptive.</p>
                </div>
              </div>
              <div class="d-flex align-items-center mb-3">
                <div class="me-3 text-primary">
                  <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                  </svg>
                </div>
                <div>
                  <p class="fs-5 m-0">We deliver services that are both efficient and cost-effective.</p>
                </div>
              </div>
              <div class="d-flex align-items-center mb-4 mb-xl-5">
                <div class="me-3 text-primary">
                  <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                  </svg>
                </div>
                <div>
                  <p class="fs-5 m-0">Our team is dedicated to providing the best user experience.</p>
                </div>
              </div>
              <div class="d-flex align-items-center">
                <div class="me-3 text-primary">
                  <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                  </svg>
                </div>
                <div>
                  <p class="fs-5 m-0">We adapt to your needs with flexibility and responsiveness.</p>
                </div>
              </div><br>
              <a href="#footer">
              <button type="button" class="btn bsb-btn-xl btn-outline-primary rounded-pill" id="contactButton">Connect Now</button>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <hr>
  <br>

  <!-- About 3  -->
  <!-- <section class="py-3 py-md-5">
    <div class="container mb-4 mb-md-5">
      <div class="row justify-content-md-center">
        <div class="col-12 col-md-10 col-xxl-8">
          <img class="img-fluid rounded shadow" loading="lazy" src="{{asset('images/About-3.jpg')}}" alt="About 3">
        </div>
      </div>
    </div>

    <div class="container overflow-hidden">
      <div class="row gy-2 gy-md-0 justify-content-xxl-center">
        <div class="col-12 order-md-1 col-md-8 col-xxl-6">
          <div class="text-center text-md-start">
            <h2 class="display-3 fw-bold lh-1 ">Lucas Henry</h2>
            <p class="text-secondary fs-4 mb-2 ">UX/UI Designer</p>
            <hr class="w-25 mx-auto ms-md-0 mb-4 text-secondary ">
            <p>I am a UX/UI designer with a passion for creating user-centric digital experiences that are both beautiful and functional. I have over 12 years of experience in the industry, and I have worked on a wide range of projects, from small startups to large enterprises.</p>
            <p>I believe that the best designs are those that are based on a deep understanding of the user's needs and goals. I start every project by conducting thorough user research to learn about the user's pain points, motivations, and expectations. I then use this information to create designs that are both easy to use and enjoyable.</p>
          </div>
        </div>
        <div class="text-center text-md-start me-md-3 me-xl-5">
        </div>
      </div>
    </div>
    </div>
  </section>
  <hr>
  <br> -->

  <!-- About 4 -->
  <section class="py-3 py-md-0 py-xl-8">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-10 col-lg-8">
          <h3 class="fs-5 mb-2 text-secondary text-uppercase">About</h3>
          <h2 class="display-5 mb-4">At our core, we prioritize pushing boundaries, embracing the unknown, and fostering a culture of continuous learning.</h2>
          <a href="#footer">
          <button type="button" class="btn btn-lg btn-primary mb-3 mb-md-4 mb-xl-5 " id="contactbutton">Connect Now</button>
          </a>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row gy-3 gy-md-4 gy-lg-0">
        <div class="col-12 col-lg-6">
          <div class="card bg-light p-3 m-0">
            <div class="row gy-3 gy-md-0 align-items-md-center">
              <div class="col-md-5">
                <img src="{{asset('images/About-4.1.jpg')}}" class="img-fluid rounded-start" alt="Why Choose Us?">
              </div>
              <div class="col-md-7">
                <div class="card-body p-0">
                  <h2 class="card-title h4 mb-3">Why Choose Us?</h2>
                  <p class="card-text lead">With years of experience and deep industry knowledge, we have a proven track record of success and are pushing ourselves to stay ahead of the curve.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-6">
          <div class="card bg-light p-3 m-0">
            <div class="row gy-3 gy-md-0 align-items-md-center">
              <div class="col-md-5">
                <img src="{{asset('images/About-4.2.jpg')}}" class="img-fluid rounded-start" alt="Visionary Team">
              </div>
              <div class="col-md-7">
                <div class="card-body p-0">
                  <h2 class="card-title h4 mb-3">Visionary Team</h2>
                  <p class="card-text lead">With a team of visionary engineers, developers, and creative minds, we embark on a journey to transform complex challenges into ingenious technological solutions.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <div class="container-fluid mt-0" id="footer">

    <!-- Footer -->
    <footer id="footer" class="text-center text-lg-start text-white" style="background-color: #1c2331">
      <!-- Section: Social media -->
      <!-- <section class="d-flex justify-content-between p-4" style="background-color: #6351ce"> -->
      <!-- Left -->
      <!-- <div class="me-5">
          <span>Get connected with us on social networks:</span>
        </div> -->
      <!-- Left -->

      <!-- Right -->
      <!-- <div>
          <a href="" class="text-white me-4">
            <i class="fab fa-facebook-f"></i>
          </a>
          <a href="" class="text-white me-4">
            <i class="fab fa-twitter"></i>
          </a>
          <a href="" class="text-white me-4">
            <i class="fab fa-google"></i>
          </a>
          <a href="" class="text-white me-4">
            <i class="fab fa-instagram"></i>
          </a>
          <a href="" class="text-white me-4">
            <i class="fab fa-linkedin"></i>
          </a>
          <a href="" class="text-white me-4">
            <i class="fab fa-github"></i>
          </a>
        </div> -->
      <!-- Right -->
      <!-- </section> -->
      <!-- Section: Social media -->

      <!-- Section: Links  -->
      <section class="d-flex justify-content-between p-4">
        <div class="container text-center text-md-start mt-5">
          <!-- Grid row -->
          <div class="row mt-3">
            <!-- Grid column -->
            <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
              <!-- Content -->
              <h6 class="text-uppercase fw-bold">Pinnacle</h6>
              <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #7c4dff; height: 2px" />
              <p>
              Pinnacle is a leading provider of innovative web solutions. We specialize in creating powerful web applications that streamline communication, enhance collaboration, and drive success for organizations across various industries.
              </p>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
              <!-- Links -->
              <h6 class="text-uppercase fw-bold">Features</h6>
              <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #7c4dff; height: 2px" />
              <p>
                <a href="#!" class="text-secondary text-decoration-none">Announcement</a>
              </p>
              <p>
                <a href="#!" class="text-secondary text-decoration-none">Shared Calender</a>
              </p>
              <p>
                <a href="#!" class="text-secondary text-decoration-none">Instant Messaging</a>
              </p>
              <p>
                <a href="#!" class="text-secondary text-decoration-none">Getting Feedback</a>
              </p>
              <p>
                <a href="#!" class="text-secondary text-decoration-none">Easy Sharing</a>
              </p>
              <p>
                <a href="#!" class="text-secondary text-decoration-none">Advanced Management</a>
              </p>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
              <!-- Links -->
              <h6 class="text-uppercase fw-bold">Use case</h6>
              <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #7c4dff; height: 2px" />
              <p>
                <a href="{{route('usecase.route')}}#marching-band" class="text-secondary text-decoration-none">Marching Band</a>
              </p>
              <p>
                <a href="{{route('usecase.route')}}#cheer-team" class="text-secondary text-decoration-none">Cheer Team</a>
              </p>
              <p>
                <a href="{{route('usecase.route')}}#football-team" class="text-secondary text-decoration-none">Football Team</a>
              </p>
              <p>
                <a href="{{route('usecase.route')}}#dance-team" class="text-secondary text-decoration-none">Dance Team</a>
              </p>
              <p>
                <a href="{{route('usecase.route')}}#youth-sports-team" class="text-secondary text-decoration-none">Youth Sports Team</a>
              </p>
              <p>
                <a href="{{route('usecase.route')}}#sports-team" class="text-secondary text-decoration-none">Sports Team</a>
              </p>
              <p>
                <a href="{{route('usecase.route')}}#non-profit-organization" class="text-secondary text-decoration-none">Non-Profit</a>
              </p>
              <p>
                <a href="{{route('usecase.route')}}#elementary-school" class="text-secondary text-decoration-none">Elementary School</a>
              </p>
              <p>
                <a href="{{route('usecase.route')}}#high-school" class="text-secondary text-decoration-none">High School</a>
              </p>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
              <!-- Links -->
              <h6 class="text-uppercase fw-bold">Contact</h6>
              <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #7c4dff; height: 2px" />
              <p><i class="fas fa-home mr-3"></i>Ganesh Glory 11 ,
                            Jagatpur Rd, off Sarkhej - Gandhinagar Highway, Jagatpur,
                            Ahmedabad, Gujarat 382470.</p>
              <p><i class="fas fa-envelope mr-3"></i>info@pinnacle.com</p>
              <p><i class="fas fa-phone mr-3"></i> +91 98765 43211</p>
              <p><i class="fas fa-print mr-3"></i> +91 98765 43210</p>
            </div>
            <!-- Grid column -->
          </div>
          <!-- Grid row -->
        </div>
      </section>
      <!-- Section: Links  -->

      <!-- Copyright -->
      <!-- <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
        © 2020 Copyright:
        <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
      </div> -->
      <!-- Copyright -->
    </footer>
    <!-- Footer -->

  </div>
  <!-- End of .container -->


  </script>
  @endsection