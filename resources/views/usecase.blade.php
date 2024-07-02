@extends('front.layouts.default')

@section('title',"Home")

@section('content')
<style>
    /* Add custom styles here */

    /* test.css */
    @media (max-width: 767.98px) {
        .dropdown-menu-end {
            left: 0 !important;
            right: auto !important;
        }
    }

    @media (max-width: 575.98px) {
        footer {
            padding-top: 1rem;
            padding-bottom: 1rem;
        }
    }



    .logo {
        display: flex;
        align-items: center;
        margin-right: 2;
        padding-left: 8%;
    }

    .logo img {
        width: 45px;
        height: 45px;
        border-radius: 50%;
        object-fit: cover;
        margin-right: 87px;
    }

    .usecase {
        background-color: rgb(74, 11, 133);

    }

    .overflow-y {
        max-height: 200px;
        /* Fixed height for the box */
        overflow-y: auto;
        /* Enable vertical scroll bar when content overflows */
        padding: 10px;
        border: 1px solid rgb(0, 0, 0, 0.175);
    }

    .card-img-top {
        height: 300px;
    }
</style>



<div class="container mt-5">

    <div class="row ">
        <div class="col-md-4 " id="marching-band">
            <div class="card mb-4">
                <img src="{{asset('images/marching band.jpg')}}" class="card-img-top" alt="Marching Band">
                <div class="card-body  overflow-y">
                    <h5 class="card-title">Marching Band</h5>
                    <p class="card-text">A community web app for marching bands facilitates seamless communication and coordination among members. Band members can share rehearsal schedules, coordinate performances, and discuss musical arrangements. The app serves as a central hub for band-related information, allowing members to stay updated on upcoming events, share practice recordings for feedback, and collaborate on performance logistics. Additionally, features such as group messaging, event calendars, and file sharing streamline communication and enhance collaboration within the.</p>

                </div>
            </div>
        </div>
        <div class="col-md-4" id="cheer-team">
            <div class="card mb-4">
                <img src="{{asset('images/Cheer Team.webp')}}" class="card-img-top" alt="Cheer Team">
                <div class="card-body overflow-y">
                    <h5 class="card-title">Cheer Team</h5>
                    <p class="card-text">For cheer teams, a community web app provides a platform for organizing routines, sharing motivational messages, and coordinating fundraising efforts. Team members can use the app to discuss choreography, plan practice sessions, and coordinate uniform orders. The app also enables coaches to communicate with team members, share performance videos for feedback, and track progress throughout the season. Additionally, features like event scheduling, photo galleries, and social media integration allow cheer teams to showcase their performances and engage with fans and supporters.</p>
                </div>

            </div>
        </div>
        <div class="col-md-4" id="football-team">
            <div class="card mb-4">
                <img src="{{asset('images/Football Team.jpg')}}" class="card-img-top" alt="Football Team">
                <div class="card-body overflow-y">
                    <h5 class="card-title">Football Team</h5>
                    <p class="card-text">A community web app tailored for football teams streamlines team management and communication. Coaches can use the app to plan practices, discuss game strategies, and track player performance. Players can access the app to view practice schedules, communicate with teammates, and receive updates from coaches. Features such as game scheduling, opponent analysis, and performance tracking enable teams to prepare effectively for upcoming matches and track their progress throughout the season. Additionally, the app can serve as a platform for sharing game highlights, celebrating victories, and fostering team unity.</p>

                </div>
            </div>
        </div>
        <div class="col-md-4" id="dance-team">
            <div class="card mb-4">
                <img src="{{asset('images/Dance Team.jpg')}}" class="card-img-top" alt="Dance Team">
                <div class="card-body overflow-y">
                    <h5 class="card-title">Dance Team</h5>
                    <p class="card-text">Dance teams benefit from a community web app that facilitates collaboration, communication, and creativity. Team members can use the app to coordinate choreography, share costume designs, and schedule rehearsals. The app provides a platform for dancers to share performance videos, receive feedback from coaches and teammates, and showcase their talent to the community. Features such as event calendars, group messaging, and photo galleries enhance communication and engagement within the dance team. Additionally, the app can be used to organize fundraising events, promote performances, and connect with fans and supporters.</p>

                </div>
            </div>
        </div>
        <div class="col-md-4" id="youth-sports-team">
            <div class="card mb-4">
                <img src="{{asset('images/Youth Sports Team.jpg')}}" class="card-img-top" alt="Youth Sports Team">
                <div class="card-body overflow-y">
                    <h5 class="card-title">Youth Sports Team</h5>
                    <p class="card-text">A community web app designed for youth sports teams simplifies team management and communication for coaches, players, and parents. Coaches can use the app to organize matches, communicate with parents, and track player development. Players can access the app to view schedules, communicate with teammates, and access training resources. Parents can use the app to stay informed about upcoming events, volunteer opportunities, and team updates. Features such as roster management, attendance tracking, and messaging streamline communication and coordination within the team. Additionally, the app can serve as a platform for sharing game highlights, celebrating achievements, and fostering a sense of community among players, parents, and coaches.</p>
                </div>

            </div>
        </div>
        <div class="col-md-4" id="sports-team">
            <div class="card mb-4">
                <img src="{{asset('images/Sports Team.jpg')}}" class="card-img-top" alt="Sports Team">
                <div class="card-body overflow-y">
                    <h5 class="card-title">Sports Team</h5>
                    <p class="card-text">For sports teams at all levels, a community web app serves as a valuable tool for team management, communication, and collaboration. Coaches can use the app to plan practices, discuss game strategies, and track player performance. Players can access the app to view schedules, communicate with teammates, and access training resources. Features such as game scheduling, opponent analysis, and performance tracking enable teams to prepare effectively for matches and track their progress throughout the season. Additionally, the app can be used to share game highlights, celebrate victories, and engage with fans and supporters.</p>

                </div>
            </div>
        </div>
        <div class="col-md-4" id="non-profit-organization">
            <div class="card mb-4">
                <img src="{{asset('images/Non-Profit Organization.jpg')}}" class="card-img-top" alt="Non-Profit Organization">
                <div class="card-body overflow-y">
                    <h5 class="card-title">Non-Profit Organization</h5>
                    <p class="card-text">Non-profit organizations can benefit from a community web app that facilitates communication, collaboration, and engagement with donors, volunteers, and supporters. The app serves as a platform for sharing updates, promoting events, and rallying support for the organization's mission. Features such as fundraising tools, volunteer management, and donor tracking streamline operations and help organizations maximize their impact. Additionally, the app can be used to showcase success stories, recognize donors and volunteers, and foster a sense of community among supporters.</p>

                </div>
            </div>
        </div>
        <div class="col-md-4" id="elementary-school">
            <div class="card mb-4">
                <img src="{{asset('images/Elementary School.jpg')}}" class="card-img-top" alt="Elementary School">
                <div class="card-body overflow-y">
                    <h5 class="card-title">Elementary School</h5>
                    <p class="card-text">A community web app tailored for elementary schools enhances communication and collaboration among teachers, parents, and students. Teachers can use the app to share announcements, assignments, and educational resources with students and parents. Parents can access the app to stay informed about school events, communicate with teachers, and track their child's progress. Features such as class calendars, messaging, and homework reminders facilitate communication and engagement between teachers, parents, and students. Additionally, the app can serve as a platform for organizing parent-teacher conferences, volunteering opportunities, and school-wide events.</p>
                </div>

            </div>
        </div>
        <div class="col-md-4" id="high-school">
            <div class="card mb-4">
                <img src="{{asset('images/High School
.jpg')}}" class="card-img-top" alt="High School">
                <div class="card-body overflow-y">
                    <h5 class="card-title">High School</h5>
                    <p class="card-text">High schools benefit from a community web app that connects students, teachers, parents, and administrators, facilitating communication, collaboration, and engagement. Students can use the app to access class schedules, assignments, and resources, communicate with classmates, and participate in extracurricular activities. Teachers can use the app to share course materials, communicate with students and parents, and track student progress. Parents can access the app to stay informed about school events, communicate with teachers, and track their child's academic and extracurricular activities. Features such as grade tracking, event calendars, and messaging streamline communication and coordination within the school community. Additionally, the app can be used to promote school spirit, organize school-wide events, and celebrate achievements.</p>

                </div>
            </div>
        </div>

    </div>
</div>


<!-- Footer -->
<div class="container-fluid mt-0">

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
        </section>
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
                            <a href="#marching-band" class="text-secondary text-decoration-none">Marching Band</a>
                        </p>
                        <p>
                            <a href="#cheer-team" class="text-secondary text-decoration-none">Cheer Team</a>
                        </p>
                        <p>
                            <a href="#football-team" class="text-secondary text-decoration-none">Football Team</a>
                        </p>
                        <p>
                            <a href="#dance-team" class="text-secondary text-decoration-none">Dance Team</a>
                        </p>
                        <p>
                            <a href="#youth-sports-team" class="text-secondary text-decoration-none">Youth Sports Team</a>
                        </p>
                        <p>
                            <a href="#sports-team" class="text-secondary text-decoration-none">Sports Team</a>
                        </p>
                        <p>
                            <a href="#non-profit-organization" class="text-secondary text-decoration-none">Non-Profit</a>
                        </p>
                        <p>
                            <a href="#elementary-school" class="text-secondary text-decoration-none">Elementary School</a>
                        </p>
                        <p>
                            <a href="#high-school" class="text-secondary text-decoration-none">High School</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold">Contact</h6>
                        <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #7c4dff; height: 2px" />
                        <p><i class="fas fa-home mr-3"></i> Ganesh Glory 11 ,
                            Jagatpur Rd, off Sarkhej - Gandhinagar Highway, Jagatpur,
                            Ahmedabad, Gujarat 382470.
                        </p>
                        <p><i class="fas fa-envelope mr-3"></i> info@pinnacle.com</p>
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


@endsection