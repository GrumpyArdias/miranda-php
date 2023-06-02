@extends('layout')
<div class="pop__up__menu">
    <ul>
        <li><a href="./about.html">About Us</a></li>
        <li>Rooms</li>
        <li>Offers</li>
        <li>Contact</li>
    </ul>
</div>
<div class="base__for__you">
    <div class="base__for__you__first__text">
        <h4>THE ULTIMATE LUXURY EXPERIENCE</h4>
    </div>
    <div class="base__for__you__second__text">
        <h2>The Perfect Base For You</h2>
    </div>
    <div class="base__for__you__buttons">
        <div class="base__for__you__take__a__tour">
            <p>TAKE A TOUR</p>
        </div>
        <div class="base__for__you__learn__more">
            <p>LEARN MORE</p>
        </div>
    </div>
</div>
<div class="dates">
    <div class="dates__arrival">
        <form action="">
            <label for="arrival__date">Arrival Date</label>
            <br />
            <input type="date" name="arrival__date" id="arrival__date" />
        </form>
    </div>
    <div class="dates__departure">
        <form action="">
            <label for="departure__date">Departure Date</label>
            <br />
            <input type="date" name="departure__date" id="departure__date" />
        </form>
    </div>
    <div class="dates__button">
        <p>CHECK AVAILABILITY</p>
    </div>
</div>
<div class="about__us">
    <div class="about__us__h5">
        <h5>ABOUT US</h5>
    </div>
    <div class="about__us__discover">
        <h3>Discover Our Underground.</h3>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
            eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
            minim veniam, quis nostrud exercitation ullamco laboris nisi ut
            aliquip ex ea commodo consequat.
        </p>
    </div>
    <div class="about__us__button">
        <p>BOOK NOW</p>
    </div>
    <div class="about__us__first__img"></div>
    <div class="about__us__strong__team">
        <div class="about__us__people__img">
            <div class="about__us__front__image">
                <img src="./src/img/people.png" alt="A siloute of multiple people" />
            </div>
            <div class="about__us__back__image">
                <img src="./src/img/people.png" alt="A siloute of multiple people" />
            </div>
        </div>
        <div class="about__us__strong__team__text">
            <h4>Strong Team</h4>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                eiusmod tempor.
            </p>
        </div>
        <div class="about__us__rooms">
            <div class="about__us__rooms__photo"></div>
            <div class="about__us__rooms__text">
                <div class="about__us__rooms__calendar">
                    <img src="./src/img/arrowcalendar.png" alt="a vector of a calendar with and arrow" />
                </div>
                <div class="about__us__rooms__info">
                    <h4>Luxury Room</h4>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                        eiusmod tempor.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="rooms">
    <div class="rooms__first__block">
        <div class="rooms__first__block__text">
            <h5>Rooms</h5>
            <h3>Hand Picked Rooms</h3>
            <div id="multibar">
                <img src="./src/img/multibar.png" alt="" />
            </div>
            <div class="swiper">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide">
                        <img src="./src/img/cat1.jpg" alt="" />
                    </div>
                    <div class="swiper-slide">
                        <img src="./src/img/cat2.jpg" alt="" />
                    </div>
                    <div class="swiper-slide">
                        <img src="./src/img/cat3.jpg" alt="" />
                    </div>
                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>

                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>

                <!-- If we need scrollbar -->
                <div class="swiper-scrollbar"></div>
            </div>
        </div>
    </div>
    <div class="rooms__second__block">
        <div class="rooms__second__block__text">
            <h3>Minimal Duplex Room</h3>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                eiusmod tempor incididunt ut labore et dolore.
            </p>
            <h4>$345<span>/Night</span></h4>
        </div>
        <div class="rooms__video__block">
            <div class="rooms__video__block__text">
                <h5>INTRO VIDEO</h5>
                <h3>Meet With Our Luxury Place.</h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                    enim ad minim veniam, quis nostrud exercitation ullamco laboris
                    nisi ut aliquip ex ea commodo consequat you have to understand
                    this.
                </p>
            </div>
            <div class="rooms__video__block__video">
                <video id="itro-video" width="80%" height="auto" loop controls>
                    <source src="./src/video/hotel.mp4" type="video/mp4" />
                    Your browser does not support the video tag.
                </video>
            </div>
            <div class="rooms__video__block__button">
                <h3>BOOK NOW</h3>
            </div>
        </div>
    </div>
</div>
<div class="facilities">
    <div class="facilities__first__block">
        <h5>FACILITIES</h5>
        <h3>Core Features</h3>
    </div>
    <div class="swiper-features">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide">
                <div class="facilities__images">
                    <img id="finger-stars" src="./src/img/touchstar.png" alt="a finger touching a menu with stars" />
                    <img id="numer-one" src="./src/img/01.png" alt="the numer 01" />
                </div>
                <div class="facilities__second__bock">
                    <h4>Have High Rating</h4>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna..
                    </p>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="facilities__images">
                    <img id="finger-stars" src="./src/img/touchstar.png" alt="a finger touching a menu with stars" />
                    <img id="numer-one" src="./src/img/01.png" alt="the numer 01" />
                </div>
                <div class="facilities__second__bock">
                    <h4>Lorem ipsum</h4>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna..
                    </p>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="facilities__images">
                    <img id="finger-stars" src="./src/img/touchstar.png" alt="a finger touching a menu with stars" />
                    <img id="numer-one" src="./src/img/01.png" alt="the numer 01" />
                </div>
                <div class="facilities__second__bock">
                    <h4>dolor sit amet</h4>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                        eiusmod tempor incididunt ut labore et dolore magna..
                    </p>
                </div>
            </div>
        </div>
        <div class="swiper-pagination"></div>

        <!-- If we need scrollbar -->
        <div class="swiper-scrollbar"></div>
    </div>
    <div class="facilities__third__bock">
        <img src="./src/img/donut.png" alt="a image vector of a donut" />
    </div>
</div>
<div class="menu">
    <div class="menu__first__block">
        <h5>MENU</h5>
        <h3>Our Foods Menu</h3>
    </div>
    <div class="menu__second__block">
        <div class="swiper-menu">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide">
                    <div class="menu__second__block__wrap">
                        <div class="menu__second__block__img">
                            <img src="./src/img/cat1.jpg" alt="A cat" />
                        </div>
                        <div class="menu__second__block__text">
                            <h4>Eggs & Bacon</h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adip isicing elit,
                                sed do eiusmod tempor.
                            </p>
                        </div>
                    </div>
                    <div class="menu__second__block__wrap">
                        <div class="menu__second__block__img">
                            <img src="./src/img/cat1.jpg" alt="A cat" />
                        </div>
                        <div class="menu__second__block__text">
                            <h4>Eggs & Bacon</h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adip isicing elit,
                                sed do eiusmod tempor.
                            </p>
                        </div>
                    </div>
                    <div class="menu__second__block__wrap">
                        <div class="menu__second__block__img">
                            <img src="./src/img/cat1.jpg" alt="A cat" />
                        </div>
                        <div class="menu__second__block__text">
                            <h4>Eggs & Bacon</h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adip isicing elit,
                                sed do eiusmod tempor.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="menu__second__block__wrap">
                        <div class="menu__second__block__img">
                            <img src="./src/img/cat1.jpg" alt="A cat" />
                        </div>
                        <div class="menu__second__block__text">
                            <h4>Eggs & Bacon</h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adip isicing elit,
                                sed do eiusmod tempor.
                            </p>
                        </div>
                    </div>
                    <div class="menu__second__block__wrap">
                        <div class="menu__second__block__img">
                            <img src="./src/img/cat1.jpg" alt="A cat" />
                        </div>
                        <div class="menu__second__block__text">
                            <h4>Eggs & Bacon</h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adip isicing elit,
                                sed do eiusmod tempor.
                            </p>
                        </div>
                    </div>
                    <div class="menu__second__block__wrap">
                        <div class="menu__second__block__img">
                            <img src="./src/img/cat1.jpg" alt="A cat" />
                        </div>
                        <div class="menu__second__block__text">
                            <h4>Eggs & Bacon</h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adip isicing elit,
                                sed do eiusmod tempor.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="menu__second__block__wrap">
                        <div class="menu__second__block__img">
                            <img src="./src/img/cat1.jpg" alt="A cat" />
                        </div>
                        <div class="menu__second__block__text">
                            <h4>Eggs & Bacon</h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adip isicing elit,
                                sed do eiusmod tempor.
                            </p>
                        </div>
                    </div>
                    <div class="menu__second__block__wrap">
                        <div class="menu__second__block__img">
                            <img src="./src/img/cat1.jpg" alt="A cat" />
                        </div>
                        <div class="menu__second__block__text">
                            <h4>Eggs & Bacon</h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adip isicing elit,
                                sed do eiusmod tempor.
                            </p>
                        </div>
                    </div>
                    <div class="menu__second__block__wrap">
                        <div class="menu__second__block__img">
                            <img src="./src/img/cat1.jpg" alt="A cat" />
                        </div>
                        <div class="menu__second__block__text">
                            <h4>Eggs & Bacon</h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adip isicing elit,
                                sed do eiusmod tempor.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>

            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>

            <div class="swiper-scrollbar"></div>
        </div>
    </div>
    <div class="menu__third__block">
        <div class="swiper-menu-two">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide">
                    <div class="menu__third__block__img">
                        <img src="./src/img/cat1.jpg" alt="A cat" />
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="menu__third__block__img">
                        <img src="./src/img/cat1.jpg" alt="A cat" />
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="menu__third__block__img">
                        <img src="./src/img/cat1.jpg" alt="A cat" />
                    </div>
                </div>
                ...
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>

            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>

            <!-- If we need scrollbar -->
            <div class="swiper-scrollbar"></div>
        </div>
    </div>
    <div class="menu__fourth__block">
        <div class="menu__fourth__block__stats">
            <div class="menu__fourth__block__img">
                <img src="./src/img/rocket.png" alt="a rocket frame design" />
            </div>
            <div class="menu__fourth__block__text">
                <h4>84K<span>+ projects are Completed</span></h4>
            </div>
        </div>
        <div class="menu__fourth__block__stats">
            <div class="menu__fourth__block__img">
                <img src="./src/img/people.png" alt="a group of people siloute" />
            </div>
            <div class="menu__fourth__block__text">
                <h4>10M<span>+ Active Backers Around world</span></h4>
            </div>
        </div>
        <div class="menu__fourth__block__stats">
            <div class="menu__fourth__block__img">
                <img src="./src/img/people.png" alt="a group of people siloute" />
            </div>
            <div class="menu__fourth__block__text">
                <h4>02K<span>+ Categories Served</span></h4>
            </div>
        </div>
        <div class="menu__fourth__block__stats">
            <div class="menu__fourth__block__img">
                <img src="./src/img/book.png" alt="a book" />
            </div>
            <div class="menu__fourth__block__text">
                <h4>100M<span>+ Idea Raised Funds</span></h4>
            </div>
        </div>
    </div>
</div>