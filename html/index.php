<?php
require '../templates/header.php';
?>

<!-- Banner -->
<section id="banner">
    <div class="inner">
        <h1 style="font-family: 'Bai Jamjuree';">We
            <span
                    class="typewrite"
                    data-period="2000"
                    style="font-family: 'Bai Jamjuree';"
                    data-type='[ "are Blizzard Robotics.", "are innovators.", "like to create.", "strive to improve our community."]'></span>
        </h1>
        <p style="font-family: 'Bai Jamjuree';" class="animate__fadeInDown">A team of innovators who are passionate
            about improving our society<br/>
            using computer science and robotics.</p>
        <a style="font-family: 'Bai Jamjuree';" href="#one" class="button special scrolly">Get To Know More About Us</a>
    </div>
    </div>
</section>


<div class="splash">
    <h1><img id="sples"><img alt="Blizzard Robotics" src="logoanimation.webp" class="center"></h1>
</div>

<!-- One -->
<section id="one" class="wrapper style2">
    <div class="inner">
        <div>
            <div class="box">
                <div class="image fit">
                    <img draggable="false" src="images/pic06.png" alt=""/>
                </div>
                <div class="content">
                    <header class="align-center">
                        <h2 style="font-family: 'Bai Jamjuree';">More than just a robotics team.</h2>
                    </header>
                    <hr/>
                    <p style="font-family: 'Bai Jamjuree';"> Founded by two high schoolers in March 2020, FIRST
							Tech Challenge team Blizzard Robotics has become greater than imagined. During this
							unprecedented time, we hope to spread our love for robotics to the community by helping
							local hospitals treat their patients safely and provide aid to other FIRST teams. We have
						surpassed our goal of donating 200+ door handle attachments and ear savers to those in need and are working towards
						innovating novel devices that can help such centers further. As a rookie team, we were also able to qualify for the NorCal
						states championship in May 2021! </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Two -->
<section id="three" class="wrapper style2">
    <div class="inner">
        <div class="grid-style">

            <div>
                <div class="box">
                    <div class="image fit">
                        <img draggable="false" src="images/first01.png" alt=""/>
                    </div>
                    <div class="content">
                        <header class="align-center">
                            <h2 style="font-family: 'Bai Jamjuree';">ABOUT FIRST</h2>
                        </header>
                        <hr/>SS
                        <p style="font-family: 'Bai Jamjuree';"> FIRST is a nonprofit that aspires to promote leaders in
                            STEM, and hopes to inspire students to become more interested in the fields of robotics and
                            innovation. </p>
                        <center>
                            <button style="font-family: 'Bai Jamjuree';"
                                    onclick="window.location.href='https://www.firstinspires.org/';">
                                Explore FIRST
                            </button>
                        </center>
                    </div>
                </div>
            </div>

            <div>
                <div class="box">
                    <div class="image fit">
                        <img draggable="false" src="images/gamechangers.png" alt=""/>
                    </div>
                    <div class="content">
                        <header class="align-center">
                            <h2 style="font-family: 'Bai Jamjuree';">ABOUT THE FIRST TECH CHALLENGE</h2>
                        </header>
                        <hr/>
                        <p style="font-family: 'Bai Jamjuree';"> The FIRST Tech Challenge is a competition for grades
                            7-12. The competition allows students to build, code, and operate robots in an intense seven
                            month period. </p>
                        <center>
                            <button style="font-family: 'Bai Jamjuree';"
                                    onclick="window.location.href='https://www.firstinspires.org/robotics/ftc';">
                                Explore FTC
                            </button>
                        </center>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Three -->
<section id="four" class="wrapper style3">
    <div class="inner">


        <header class="align-center">
            <h2 style="font-family: 'Bai Jamjuree';">Let's Change the World Together</h2>
            <p style="font-family: 'Bai Jamjuree';">During this difficult time, we know that being together can help us
                reach even greater heights. If you would like to partner with us or help us to expand our initiative,
                please contact blizzard.robotics@gmail.com. </p>
        </header>

    </div>
</section>

<!-- Footer -->
<footer id="footer" class="wrapper">
    <div class="inner">
        <section>
            <div class="box">
                <div class="content">
                    <h2 style="font-family: 'Bai Jamjuree';" class="align-center">Get in Touch</h2>
                    <hr/>
                    <form action="#" method="post">
                        <div class="field half first">
                            <label for="name">Name</label>
                            <input name="name" id="name" type="text" placeholder="Name">
                        </div>
                        <div class="field half">
                            <label for="email">Email</label>
                            <input name="email" id="email" type="email" placeholder="Email">
                        </div>
                        <div class="field">
                        </div>
                        <div class="field">
                            <label for="message">Message</label>
                            <textarea name="message" id="message" rows="6" placeholder="Message"></textarea>
                        </div>
                        <ul class="actions align-center">
                            <li><input value="Send Message" class="button special" type="submit"></li>
                        </ul>
                    </form>
                </div>
            </div>
        </section>

        <div style="font-family: 'Bai Jamjuree';" class="copyright">
            &copy; Blizzard Robotics 2020
        </div>

    </div>
</footer>

<?php
require '../templates/footer.php';
