<?php
    header("Location: zaloguj.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>

    <link rel="stylesheet" href="style.css">

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            function storeCurrentSection(sectionId) {
                localStorage.setItem('lastVisitedSection', sectionId);
            }
            
            const sections = document.querySelectorAll('section');
            const observerOptions = {
                root: null,
                threshold: 0.5
            };
            
            const observerCallback = (entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        storeCurrentSection(entry.target.id);
                    }
                });
            };
            
            const observer = new IntersectionObserver(observerCallback, observerOptions);
            sections.forEach(section => observer.observe(section));
            
            const lastVisitedSection = localStorage.getItem('lastVisitedSection');
            const logo = document.querySelector('.logo .animate');
            
            if (lastVisitedSection === 'home') {
                logo.style.background = '#000000';
            } else {
                logo.style.background = '#081b29';
            }
        });
    </script>
</head>
<body>
    <header class="header">
        <a href="#about" class="logo">Nurlan.<span class="animate" style="--i:1;"></span></a>

        <div class="bx bx-menu" id="menu-icon"><span class="animate" style="--i:2;"></span></div>

        <nav class="navbar">
            <a href="#home" class="active">Home</a>
            <a href="#about">About</a>
            <a href="#education">Education</a>
            <a href="#skills">Skills</a>
            <a href="zaloguj.php" target="_blank">Login</a>
            <a href="#contact">Contact</a>

            <span class="active-nav"></span>
            <span class="animate" style="--i:2;"></span>
        </nav>
    </header>

    <section class="home show-animate first-section" id="home">
        <div class="home-content">
            <h1>Hi, I'm <span>Nurlan Atamuratov</span><span class="animate" style="--i:2;"></span></h1>
            <div class="text-animate">
                <h3>Frontend Developer</h3>
                <span class="animate" style="--i:3;"></span>
            </div>
            <p>
                Hey, fantastic visitor! 🌟 
                Step into my digital realm, where imagination meets innovation to craft unforgettable online journeys. 
                Together, let's explore the exciting world of creating tailor-made web experiences that stand out from the crowd.
                <span class="animate" style="--i:4;"></span>
            </p>

            <div class="btn-box">
                <a href="#contact" class="btn">Hire me</a>
                <a href="tg://resolve?domain=@NurPacqiao" target="_blank" class="btn">Let's talk</a>
                <span class="animate" style="--i:5;"></span> 
            </div>
        </div>

        <div class="home-sci">
            <a href="tg://resolve?domain=@NurPacqiao" target="_blank"><i class='bx bxl-telegram'></i></a>
            <a href="https://github.com" target="_blank"><i class='bx bxl-github'></i></a>
            <a href="https://www.linkedin.com/feed/" target="_blank"><i class='bx bxl-linkedin' ></i></a>
            <span class="animate" style="--i:6;"></span>
        </div>

        <div class="home-imgHover"></div>
        <span class="animate home-img" style="--i:7;"></span>

    </section>

    <section class="about" id="about">
        <h2 class="heading">About <span>Me</span><span class="animate scroll" style="--i:1;"></span></h2>

        <div class="about-img">
            <img src="about.jpg" alt="Portrait">
            <span class="circle-spin"></span>
            <span class="animate scroll" style="--i:2;"></span>
        </div>

        <div class="about-content">
            <h3>Frontend Developer!<span class="animate scroll" style="--i:3;"></span></h3>
            <p>
                I'm a frontend developer dedicated to crafting captivating online experiences. 
                Proficient in HTML, CSS, and JavaScript, I specialize in transforming ideas into visually stunning websites. 
                Let's collaborate and bring your digital vision to life!
                <span class="animate scroll" style="--i:4;"></span>
            </p>

            <div class="btn-box btns"> 
                <a href="pro.html" target="_blank" class="btn">Read More</a>
                <span class="animate scroll" style="--i:5;"></span>
            </div>
        </div>
    </section>




    <section class="education" id="education">
        <h2 class="heading">My <span>Journey</span><span class="animate scroll" style="--i:1;"></span></h2>

        <div class="education-row">
            <div class="education-column">
                <h3 class="title">Education<span class="animate scroll" style="--i:2;"></span></h3>

                <div class="education-box">
                    <div class="education-content">
                        <div class="content">
                            <div class="year"><i class='bx bxs-calendar'></i> 2015 - 2020</div>
                            <h3>High School Diploma - Bilim-Innovation Lyceum, Shymkent</h3>
                            <p> 
                                During my time at Bilim-Innovation Lyceum in Shymkent, I had the opportunity to delve into a diverse range of subjects while fostering a strong foundation in academics. 
                                From mathematics to literature, the curriculum provided a comprehensive education that not only challenged me intellectually but also encouraged creativity and critical thinking. 
                                Graduating from Bilim-Innovation Lyceum was a milestone in my educational journey, shaping my perspective and preparing me for the exciting opportunities that lay ahead.
                            </p>
                        </div>
                    </div>
                    <div class="education-content">
                        <div class="content">
                            <div class="year"><i class='bx bxs-calendar'></i> April 2023 - July 2023</div>
                            <h3>Additional Courses - CS50 from Harvard University</h3>
                            <p>
                                During my academic journey, I undertook the renowned CS50 course offered by Harvard University. 
                                This immersive program provided a comprehensive introduction to computer science fundamentals, 
                                including programming in languages such as C, Python, and JavaScript, as well as topics like algorithms and data structures. 
                                Through challenging problem sets and engaging lectures, 
                                I gained valuable insights and strengthened my problem-solving skills, setting a solid foundation for my career in frontend development.
                            </p>
                        </div>
                    </div>
                    <div class="education-content">
                        <div class="content">
                            <div class="year"><i class='bx bxs-calendar'></i> 2023 - Present</div>
                            <h3>Bachelor of Computer Science - UKEN</h3>
                            <p>
                                In 2023, I transitioned to university to pursue higher education in computer science. 
                                Since then, I've been actively engaged in coursework and hands-on learning, building a solid foundation in various areas of IT, 
                                including programming, web development, and software engineering.
                            </p>
                        </div>
                    </div>

                    <span class="animate scroll" style="--i:3;"></span>
                </div>
            </div>
            <div class="education-column">
                <h3 class="title">Experience<span class="animate scroll" style="--i:5;"></span></h3>

                <div class="education-box">
                    <div class="education-content">
                        <div class="content">
                            <div class="year"><i class='bx bxs-calendar'></i> 2023 - Present</div>
                            <h3>Aspiring Frontend Developer</h3>
                            <p>
                                Over the past year, I've been immersed in the exciting world of frontend development, fueled by my passion for creating engaging user experiences on the web. 
                                While I may not have professional experience yet, I've dedicated myself to learning and honing my skills through various avenues.
                            </p>
                        </div>
                    </div>
                    <div class="education-content">
                        <div class="content">
                            <div class="year"><i class='bx bxs-calendar'></i> 2023 - Present</div>
                                <h3> Highlights </h3>
                                    <p>
                                        <ul style="font-size: 1.5rem; list-style-type: none;">
                                            <li>Completed the prestigious CS50 course offered by Harvard University, gaining a solid foundation in computer science fundamentals.</li>
                                            <li>Currently pursuing a Bachelor's degree in Computer Science, with a focus on frontend technologies, at UKEN.</li>
                                            <li>Engaged in self-directed learning and hands-on projects to deepen my understanding of HTML, CSS, JavaScript, and frontend frameworks.</li>
                                            <li>Developed several personal projects, experimenting with design and functionality, and continuously seeking feedback to improve my skills.</li>
                                        </ul>
                                    </p>
                        </div>
                    </div>
                    <div class="education-content">
                        <div class="content">
                            <div class="year"><i class='bx bxs-calendar'></i> 2023 - Present</div>
                            <h3>Highlights include</h3>
                            <p>
                                Although my journey is just beginning, 
                                I'm enthusiastic about the opportunities ahead and committed to growing as a frontend developer. 
                                I'm eager to contribute my creativity, enthusiasm,
                                and growing expertise to collaborative projects and make a positive impact in the world of web development.
                            </p>
                        </div>
                    </div>
                    
                    <span class="animate scroll" style="--i:6;"></span>
                </div>
            </div>
        </div>
    </section>


    <section class="skills" id="skills">
        <h2 class="heading">My <span>Skills<span class="animate scroll" style="--i:1 ;"></span></span></h2>

        <div class="skills-row">
            <div class="skills-column">
                <h3 class="title">Coding Skills<span class="animate scroll" style="--i:2 ;"></span></h3>

                <div class="skills-box">
                     <div class="skills-content">
                        <div class="progress">
                            <h3>HTML <span>90%</span></h3> 
                            <div class="bar"><span></span></div>
                        </div>

                        <div class="progress">
                            <h3>CSS <span>80%</span></h3> 
                            <div class="bar"><span></span></div>
                        </div>

                        <div class="progress">
                            <h3>JavaScript <span>65%</span></h3> 
                            <div class="bar"><span></span></div>
                        </div>

                        <div class="progress">
                            <h3>Python <span>75%</span></h3> 
                            <div class="bar"><span></span></div>
                        </div>
                     </div>
                     <span class="animate scroll" style="--i:3 ;"></span>
                </div>
            </div>


            <div class="skills-column">
                <h3 class="title">Professional Skills<span class="animate scroll" style="--i:5 ;"></span></h3>

                <div class="skills-box">
                     <div class="skills-content">
                        <div class="progress">
                            <h3>Web Design <span>95%</span></h3> 
                            <div class="bar"><span></span></div>
                        </div>

                        <div class="progress">
                            <h3>Web Development <span>67%</span></h3> 
                            <div class="bar"><span></span></div>
                        </div>

                        <div class="progress">
                            <h3>Graphic Design <span>85%</span></h3> 
                            <div class="bar"><span></span></div>
                        </div>

                        <div class="progress">
                            <h3>SEO Marketing <span>60%</span></h3> 
                            <div class="bar"><span></span></div>
                        </div>
                     </div>
                     <span class="animate scroll" style="--i:6 ;"></span>
                </div>
            </div>
        </div>
    </section>



    <section class="contact" id="contact">
         <h2 class="heading">Contact <span>Me!</span><span class="animate scroll" style="--i:1 ;"></span></h2>

          <form action="send_email.php" method="post">
            <div class="input-box">
                <div class="input-field">
                     <input type="text" name="name" placeholder="Full Name" required>
                      <span class="focus"></span>
                </div>

                <div class="input-field">
                    <input type="text" name="email" placeholder="Email Address" required>
                     <span class="focus"></span> 
               </div>
               
               <span class="animate scroll" style="--i:3 ;"></span>
            </div>

            <div class="input-box">
                <div class="input-field">
                     <input type="number" name="phone" placeholder="Mobile Number" required>
                      <span class="focus"></span>
                </div>

                <div class="input-field">
                    <input type="text" name="subject" placeholder="Email Subject" required>
                     <span class="focus"></span> 
               </div>

               <span class="animate scroll" style="--i:5 ;"></span>
            </div>

            <div class="textarea-field">
                 <textarea name="message" id="message" cols="30" rows="10" placeholder="Your Message" required></textarea>
                 <span class="focus"></span>

                 <span class="animate scroll" style="--i:7 ;"></span>
            </div>

            <div class="btn-box btns">
                <button type="submit" class="btn">Submit</button>

                <span class="animate scroll" style="--i:9 ;"></span>
            </div>
          </form>
    </section>


    <footer class="footer">
        <div class="footer-text">
            <p>Copyright &copy; 2024 by Nurlan | All Rights Reserved.</p>

            <span class="animate scroll" style="--i:1 ;"></span>
        </div>

        <div class="footer-iconTop">
            <a href="#"><i class='bx bx-up-arrow-alt'></i></a>

            <span class="animate scroll" style="--i:3 ;"></span>
        </div>
    </footer>
    
    <script src="script.js"></script>
</body>
</html>