<!DOCTYPE html>
<html lang="en">



<head>
    <!--======  Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--====== Title ======-->
    <title>Events | heaven vision church international</title>


    <!--====== Google Fonts ======-->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Mulish:wght@200;300;400;500;600;700;800;900;1000&amp;display=swap"
        rel="stylesheet">



    <!--====== Fontawesome CDN ======-->
    <link rel="stylesheet" href="../cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/brands.min.css"
        integrity="sha512-9YHSK59/rjvhtDcY/b+4rdnl0V4LPDWdkKceBl8ZLF5TB6745ml1AfluEU6dFWqwDw9lPvnauxFgpKvJqp7jiQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/fontawesome.min.css"
        integrity="sha512-SgaqKKxJDQ/tAUAAXzvxZz33rmn7leYDYfBP+YoMRSENhf3zJyx3SBASt/OfeQwBHA1nxMis7mM3EV/oYT6Fdw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/solid.min.css"
        integrity="sha512-yDUXOUWwbHH4ggxueDnC5vJv4tmfySpVdIcN1LksGZi8W8EVZv4uKGrQc0pVf66zS7LDhFJM7Zdeow1sw1/8Jw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/svg-with-js.min.css"
        integrity="sha512-FTnGkh+EGoZdexd/sIZYeqkXFlcV3VSscCTBwzwXv1IEN5W7/zRLf6aUBVf2Ahdgx3h/h22HNzaoeBnYT6vDlA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- favicon -->
    <link rel="apple-touch-icon" href="images/favicon.png">
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">

    <!--====== Main Css ======-->
    <link rel="stylesheet" href="assets/css/style.css" />

    <!--====== Other Css ======-->
    <link rel="stylesheet" href="assets/css/custom.css" />
    <link rel="stylesheet" href="assets/css/responsive.css" />

</head>

<body>



    @include('header')




    <!--====== Page Title start ======-->
    <section class="page-title-area">
        <div class="container">
            <h2 class="title">Latest events</h2>
            <ul class="breadcrumb-nav">
                <li><a href="index.html">Home</a></li>
                <li class="active">Events</li>
            </ul>
        </div>
    </section>
    <!--====== Page Title End ======-->

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap');

        /* General Styles */
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f7f7f7;
            color: #333;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 40px;
        }

        h1 {
            text-align: center;
            font-size: 36px;
            margin-bottom: 60px;
            color: #2c3e50;
        }

        /* Calendar Section */
        .calendar {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            padding: 40px;
        }

        .month {
            margin-bottom: 30px;
            color: #2c3e50;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-size: 20px;
            border-bottom: 2px solid #e67e22;
            padding-bottom: 10px;
        }

        .event {
            margin-bottom: 20px;
            padding: 20px;
            border-radius: 8px;
            background-color: #f9f9f9;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .event:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
        }

        .event-date {
            font-weight: 600;
            color: #e67e22;
            margin-bottom: 10px;
            font-size: 16px;
        }

        .event-title {
            margin: 0;
            color: #2c3e50;
            font-size: 20px;
        }

        .event-description {
            color: #666;
            font-size: 16px;
            margin-top: 10px;
            line-height: 1.5;
        }

        /* Responsive Styles */
        @media (max-width: 768px) {
            .container {
                padding: 20px;
            }

            h1 {
                font-size: 28px;
                margin-bottom: 40px;
            }

            .month {
                font-size: 18px;
            }

            .event-title {
                font-size: 18px;
            }

            .event-description {
                font-size: 14px;
            }
        }
    </style>

    <div class="container">
        <h1>Young Holistic Church Calendar</h1>
        <div class="calendar">
            <div class="month">July 2024</div>
            <div class="event">
                <div class="event-date">July 6</div>
                <h3 class="event-title">Inaugural Church Meeting</h3>
                <p class="event-description">Welcome session for new members and vision casting.</p>
            </div>
            <div class="event">
                <div class="event-date">July 13-14</div>
                <h3 class="event-title">Leadership Training Workshop</h3>
                <p class="event-description">Training for potential leaders from all 7 partner churches.
                </p>
            </div>
            <div class="event">
                <div class="event-date">July 20</div>
                <h3 class="event-title">Community Outreach Day</h3>
                <p class="event-description">Serving the local community with food distribution and
                    basic health services.</p>
            </div>
            <div class="event">
                <div class="event-date">July 27</div>
                <h3 class="event-title">Worship Night</h3>
                <p class="event-description">An evening of heartfelt and Spirit-led worship.</p>
            </div>

            <div class="month">August 2024</div>
            <div class="event">
                <div class="event-date">August 3</div>
                <h3 class="event-title">Youth Empowerment Seminar</h3>
                <p class="event-description">Vocational training and entrepreneurship workshop.</p>
            </div>
            <div class="event">
                <div class="event-date">August 10-11</div>
                <h3 class="event-title">Church Plant Visit</h3>
                <p class="event-description">Visit and support to one of the new church plants.</p>
            </div>
            <div class="event">
                <div class="event-date">August 17</div>
                <h3 class="event-title">Discipleship Class Kickoff</h3>
                <p class="event-description">Starting a series of classes for new believers.</p>
            </div>
            <div class="event">
                <div class="event-date">August 24-25</div>
                <h3 class="event-title">Healthcare Outreach</h3>
                <p class="event-description">Health clinic in a rural area in collaboration with
                    healthcare partners.</p>
            </div>

            <div class="month">September 2024</div>
            <div class="event">
                <div class="event-date">September 7</div>
                <h3 class="event-title">Educational Support Drive</h3>
                <p class="event-description">Collecting supplies and funds for scholarships.</p>
            </div>
            <div class="event">
                <div class="event-date">September 14-15</div>
                <h3 class="event-title">Church Anniversary Celebration</h3>
                <p class="event-description">Celebrating the church's achievements and community
                    impact.</p>
            </div>
            <div class="event">
                <div class="event-date">September 21</div>
                <h3 class="event-title">Agricultural Training Workshop</h3>
                <p class="event-description">Training on sustainable farming practices.</p>
            </div>
            <div class="event">
                <div class="event-date">September 28-29</div>
                <h3 class="event-title">Worship and Prayer Retreat</h3>
                <p class="event-description">A weekend retreat focused on spiritual renewal and
                    worship.</p>
            </div>

            <div class="month">October 2024</div>
            <div class="event">
                <div class="event-date">October 5</div>
                <h3 class="event-title">Community Clean-Up Day</h3>
                <p class="event-description">Environmental conservation project.</p>
            </div>
            <div class="event">
                <div class="event-date">October 12-13</div>
                <h3 class="event-title">Church Plant Visit</h3>
                <p class="event-description">Encouragement and support visit to the second church
                    plant.</p>
            </div>
            <div class="event">
                <div class="event-date">October 19</div>
                <h3 class="event-title">Mental Health Awareness Campaign</h3>
                <p class="event-description">Workshop and counseling services in partnership with
                    mental health professionals.</p>
            </div>
            <div class="event">
                <div class="event-date">October 26</div>
                <h3 class="event-title">Leadership Development Seminar</h3>
                <p class="event-description">Continued training and empowerment for church leaders.</p>
            </div>

            <div class="month">November 2024</div>
            <div class="event">
                <div class="event-date">November 2</div>
                <h3 class="event-title">Inter-Church Fellowship Day</h3>
                <p class="event-description">Gathering of all 7 churches for worship and fellowship.
                </p>
            </div>
            <div class="event">
                <div class="event-date">November 9-10</div>
                <h3 class="event-title">Youth Camp</h3>
                <p class="event-description">A weekend camp focused on spiritual growth and fellowship.
                </p>
            </div>
            <div class="event">
                <div class="event-date">November 16</div>
                <h3 class="event-title">Economic Empowerment Workshop</h3>
                <p class="event-description">Training on microfinance and entrepreneurship.</p>
            </div>
            <div class="event">
                <div class="event-date">November 23</div>
                <h3 class="event-title">Thanksgiving Service</h3>
                <p class="event-description">A special service to give thanks and celebrate God's
                    blessings.</p>
            </div>
            <div class="event">
                <div class="event-date">November 30</div>
                <h3 class="event-title">Outreach Planning Meeting</h3>
                <p class="event-description">Planning session for the upcoming Christmas outreach
                    program.</p>
            </div>

            <div class="month">December 2024</div>
            <div class="event">
                <div class="event-date">December 7</div>
                <h3 class="event-title">Christmas Carol Service</h3>
                <p class="event-description">A joyful evening of caroling and community celebration.
                </p>
            </div>
            <div class="event">
                <div class="event-date">December 14-15</div>
                <h3 class="event-title">Church Plant Visit</h3>
                <p class="event-description">Support visit to the third church plant.</p>
            </div>
            <div class="event">
                <div class="event-date">December 21</div>
                <h3 class="event-title">Christmas Outreach</h3>
                <p class="event-description">Distribution of food and gifts to needy families.</p>
            </div>
            <div class="event">
                <div class="event-date">December 25</div>
                <h3 class="event-title">Christmas Day Service</h3>
                <p class="event-description">Special worship service to celebrate the birth of Jesus.
                </p>
            </div>

            <div class="month">January 2025</div>
            <div class="event">
                <div class="event-date">January 4</div>
                <h3 class="event-title">New Year Vision Casting Service</h3>
                <p class="event-description">Setting goals and vision for the new year.</p>
            </div>
            <div class="event">
                <div class="event-date">January 11-12</div>
                <h3 class="event-title">Leadership Retreat</h3>
                <p class="event-description">Strategic planning and team-building for church leaders.
                </p>
            </div>
            <div class="event">
                <div class="event-date">January 18</div>
                <h3 class="event-title">Healthcare Expansion Planning</h3>
                <p class="event-description">Meeting with healthcare partners to plan new initiatives.
                </p>
            </div>
            <div class="event">
                <div class="event-date">January 25</div>
                <h3 class="event-title">Youth Worship Night</h3>
                <p class="event-description">A vibrant worship night led by the youth.</p>
            </div>

            <div class="month">February 2025</div>
            <div class="event">
                <div class="event-date">February 1-2</div>
                <h3 class="event-title">Mission Outreach Training</h3>
                <p class="event-description">Training for members interested in mission work.</p>
            </div>
            <div class="event">
                <div class="event-date">February 8</div>
                <h3 class="event-title">Community Development Forum</h3>
                <p class="event-description">Discussing and planning new community projects.</p>
            </div>
            <div class="event">
                <div class="event-date">February 15</div>
                <h3 class="event-title">Worship and Healing Service</h3>
                <p class="event-description">Special service focused on worship and prayer for healing.
                </p>
            </div>
            <div class="event">
                <div class="event-date">February 22-23</div>
                <h3 class="event-title">Church Plant Support Visit</h3>
                <p class="event-description">Visiting and supporting one of the newer church plants.
                </p>
            </div>
            <div class="event">
                <div class="event-date">February 29</div>
                <h3 class="event-title">Women's Empowerment Seminar</h3>
                <p class="event-description">Focused on empowering women through skills training and
                    support.</p>
            </div>

            <div class="month">March 2025</div>
            <div class="event">
                <div class="event-date">March 1</div>
                <h3 class="event-title">Lenten Bible Study Series</h3>
                <p class="event-description">Kickoff of weekly Bible studies leading up to Easter.</p>
            </div>
            <div class="event">
                <div class="event-date">March 8-9</div>
                <h3 class="event-title">Agriculture Project Review</h3>
                <p class="event-description">Reviewing progress and planning next steps for
                    agricultural initiatives.</p>
            </div>
            <div class="event">
                <div class="event-date">March 15</div>
                <h3 class="event-title">Inter-Church Youth Rally</h3>
                <p class="event-description">Gathering of youth from all partner churches for worship
                    and activities.</p>
            </div>
            <div class="event">
                <div class="event-date">March 22</div>
                <h3 class="event-title">Health Awareness Campaign</h3>
                <p class="event-description">Focus on preventive health measures and screenings.</p>
            </div>
            <div class="event">
                <div class="event-date">March 29-30</div>
                <h3 class="event-title">Worship and Revival Weekend</h3>
                <p class="event-description">Intensive worship and revival services.</p>
            </div>

            <div class="month">April 2025</div>
            <div class="event">
                <div class="event-date">April 5</div>
                <h3 class="event-title">Palm Sunday Service</h3>
                <p class="event-description">Special service leading into Holy Week.</p>
            </div>
            <div class="event">
                <div class="event-date">April 11-12</div>
                <h3 class="event-title">Good Friday and Easter Vigil</h3>
                <p class="event-description">Reflective services commemorating Jesus' sacrifice.</p>
            </div>
            <div class="event">
                <div class="event-date">April 13</div>
                <h3 class="event-title">Easter Sunday Celebration</h3>
                <p class="event-description">Celebrating the resurrection of Jesus with joy and
                    thanksgiving.</p>
            </div>
            <div class="event">
                <div class="event-date">April 19</div>
                <h3 class="event-title">Education Fundraising Gala</h3>
                <p class="event-description">Event to raise funds for scholarships and school
                    improvements.</p>
            </div>
            <div class="event">
                <div class="event-date">April 26-27</div>
                <h3 class="event-title">Church Plant Outreach</h3>
                <p class="event-description">Support and outreach at one of the new church plants.</p>
            </div>

            <div class="month">May 2025</div>
            <div class="event">
                <div class="event-date">May 3</div>
                <h3 class="event-title">Community Service Day</h3>
                <p class="event-description">Volunteering to improve local infrastructure and services.
                </p>
            </div>

            <div class="event">
                <div class="event-date">May 10-11</div>
                <h3 class="event-title">Discipleship Conference</h3>
                <p class="event-description">Conference focused on deepeningfaith and discipleship.</p>
            </div>
            <div class="event">
                <div class="event-date">May 17</div>
                <h3 class="event-title">Economic Empowerment Fair</h3>
                <p class="event-description">Showcase of local businesses and microfinance
                    opportunities.</p>
            </div>
            <div class="event">
                <div class="event-date">May 24</div>
                <h3 class="event-title">Family Fun Day</h3>
                <p class="event-description">Church-wide event to build community through fun
                    activities.</p>
            </div>
            <div class="event">
                <div class="event-date">May 31</div>
                <h3 class="event-title">Worship Night</h3>
                <p class="event-description">An evening dedicated to worship and prayer.</p>
            </div>

            <div class="month">June 2025</div>
            <div class="event">
                <div class="event-date">June 7</div>
                <h3 class="event-title">Annual General Meeting</h3>
                <p class="event-description">Reviewing the past year and planning for the next.</p>
            </div>
            <div class="event">
                <div class="event-date">June 14-15</div>
                <h3 class="event-title">Leadership Summit</h3>
                <p class="event-description">Intensive training and development for church leaders.</p>
            </div>
            <div class="event">
                <div class="event-date">June 21</div>
                <h3 class="event-title">Healthcare Expansion Launch</h3>
                <p class="event-description">Official launch of new healthcare initiatives.</p>
            </div>
            <div class="event">
                <div class="event-date">June 28-29</div>
                <h3 class="event-title">Youth Revival Weekend</h3>
                <p class="event-description">Revival services focused on empowering the youth.</p>
            </div>
        </div>
    </div>



    <!--====== Back to top start ======-->
    <div class="back-to-top">
        <a href="#"> <i class="fas fa-arrow-up"></i> </a>
    </div>
    <!--====== Back to top start ======-->

    @include('footer')

    <script>
        document.addEventListener("contextmenu", (event) => {
            event.preventDefault();
        });
    </script>













    <script src="assets/js/jquery-1.12.4.min.js"></script>
    <!--====== Bootstrap ======-->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <!--====== Slick slider ======-->
    <script src="assets/js/slick.min.js"></script>
    <!--====== Magnific ======-->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <!--====== Isotope ======-->
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <!--====== Imagesloaded ======-->
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <!--====== Inview ======-->
    <script src="assets/js/jquery.inview.min.js"></script>
    <!--====== Easy Pie Chart ======-->
    <script src="assets/js/jquery.easypiechart.min.js"></script>
    <!--====== Syotimer ======-->
    <script src="assets/js/jquery.syotimer.min.js"></script>
    <!--====== Wow ======-->
    <script src="assets/js/wow.min.js"></script>
    <!--====== Main JS ======-->
    <script src="assets/js/main.js"></script>
</body>



</html>
