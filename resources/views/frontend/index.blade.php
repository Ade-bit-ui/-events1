<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EVENT WEBSITE</title>
   <link rel="stylesheet" href="backend/style.css">
   <!-- <script defer src="main.js"></script> -->
</head>
<body>
    <header>
        <div class="top-header-content">
            <div class="header-left">
                <img src="backend/img/1-removebg-preview.png" alt="ticket" width="100px" height="100px">
            </div>
            <div class="header-center">
                <nav>
                    <a href="#accueil">Accueil</a>
                    <a href="#events">Evenements</a>
                    <a href={{url('/contact')}}>Contacts</a>
                </nav>
            </div>
            <div class="header-right">
                <div class="inscrire">
                    <button><a href="{{route('frontend.signin')}}">S'inscrire</button></a>
                </div>
                <div class="connecter">
                    <button><a href="{{route('frontend.signup')}}">Se connecter</button></a>
                </div>
            </div>
        </div>
    </header>

    <section id="#accueil">
        <div class="content">
            <h1>
                Buy ton ticket un tour!!!!!!!
            </h1>
            <p>
                Yo mola j'ai mon ticket et toi?<br>
                Mais qu'est ce que tu attend!?
            </p>
            <button onclick="location.href='events'">Acheter</button>
        </div>
        <div class="main-content">
            <div class="left">
                <h1 class="left_h1">Tu as un evenement ?</h1>
                <p class="left_p">Ne stresses pas!!!<br>Envoie nous ton ticket!!!</p>
                <a href={{url("/tickets")}}>
                    <button>vend ton ticket</button>
                </a>
                
            </div>
            <div class="right">
                <!-- <img src="img/.jpeg" alt="qr-code" width="600px" height="410px"> -->
            </div>
        </div>
    </section>


    <section id="#events" class="body1">
        <header class="first">
            <h1> Ne rate pas ceci Mola!!! </h1>
        </header>

        <main>
                <div class="event1">
                <div class="section1">
                    <div class="card">
                        <div class="img_container">
                            <div><img src="backend/img/rose.png" alt="super star"></div>
                        </div>
                            <h3>Concert Cysoul</h3> 
                            <div class="align">
                            <div class="second">
                                <ol>
                                <li><img src="backend/img/calendar.png" alt="icon">&nbsp;&nbsp;&nbsp;16/08/2024</li>
                                <li><img src="backend/img/clock.png" alt="icon"> &nbsp;&nbsp;&nbsp;A partir de 20h</li>
                                <li><img src="backend/img/pin.jpeg" alt="icon2">Stade Japoma</li>
                                </ol>
                                </div>
                            <div class="rectangle">
                                <p class="third"> 10 ticket restant</p>
                            </div>
                                <div class="square">
                                    <section class="more">
                                        <h3> Pass</h3>
                                        <!-- <p> premium: &nbsp; &nbsp;&nbsp; 15000fcfa</p>
                                        <p> couple: &nbsp; &nbsp;&nbsp; 10000fcfa</p>
                                        <p> single: &nbsp; &nbsp;&nbsp; 5000fcfa</p> --> 
                                    </section>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
                
            <div class="event2">
                <div class="section2">
                    <div class="card2">
                        <div class="img_container2">
                            <div> <img src="backend/img/football.jpeg" alt="super star"></div>
                        </div>
                            <h3>Concert Cysoul</h3> 
                            <div class="align">
                            <div class="second">
                                <ol>
                                <li> <img src="backend/img/calendar.png" alt="icon">&nbsp;&nbsp;&nbsp;16/08/2024</li>
                                <li> <img src="backend/img/clock.png" alt="icon">&nbsp;&nbsp;&nbsp;A partir de 20h</li>
                                <li> <img src="backend/img/pin.jpeg" alt="icon2">Stade Japoma</li>
                                
                                </ol>
                                </div>
                            <div class="rectangle2">
                                <p class="third2"> 10 ticket restant</p>
                            </div>
                                <div class="square2">
                                    <section class="more2">
                                        <h3> Pass</h3>
                                        <!-- <p> premium: &nbsp; &nbsp;&nbsp; 15000fcfa</p>
                                        <p> couple: &nbsp; &nbsp;&nbsp; 10000fcfa</p>
                                        <p> single: &nbsp; &nbsp;&nbsp; 5000fcfa</p> --> 
                                    </section>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
            
            
            <div class="event3">
                <div class="section2">
                    <div class="card3">
                        <div class="img_container3">
                            <div> <img src="backend/img/OIP.jpeg" alt="super star"></div>
                        </div>
                            <h3>Concert Cysoul</h3> 
                            <div class="align">
                            <div class="second">
                                <ol>
                                <li> <img src="backend/img/calendar.png" alt="icon">&nbsp;&nbsp;&nbsp;16/08/2024</li>
                                <li><img src="backend/img/clock.png" alt="icon">&nbsp;&nbsp;&nbsp;A partir de 20h</li>
                                <li> <img src="backend/img/pin.jpeg" alt="icon2">Stade Japoma</li>
                                
                                </ol>
                                </div>
                            <div class="rectangle3">
                                <p class="third3"> 10 ticket restant</p>
                            </div>
                                <div class="square3">
                                    <section class="more3">
                                        <h3> Pass</h3>
                                        <!-- <p> premium: &nbsp; &nbsp;&nbsp; 15000fcfa</p>
                                        <p> couple: &nbsp; &nbsp;&nbsp; 10000fcfa</p>
                                        <p> single: &nbsp; &nbsp;&nbsp; 5000fcfa</p> --> 
                                    </section>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </main>
    
        <div class="deux">
            <div class="event4">
                <div class="section2">
                    <div class="card">
                        <div class="img_container">
                            <div> <img src="backend/img/R.gif" alt="super star"></div>
                        </div>
                            <h3>Concert Cysoul</h3> 
                            <div class="align">
                            <div class="second">
                                <ol>
                                <li><img src="backend/img/calendar.png" alt="icon">&nbsp;&nbsp;&nbsp;16/08/2024</li>
                                <li><img src="backend/img/clock.png" alt="icon">&nbsp;&nbsp;&nbsp;A partir de 20h</li>
                                <li><img src="backend/img/pin.jpeg" alt="icon2">Stade Japoma</li>
                                
                                </ol>
                                </div>
                            <div class="rectangle">
                                <p class="third"> 10 ticket restant</p>
                            </div>
                                <div class="square">
                                <section class="more">
                                    <h3> Pass</h3>
                                    <!-- <p> premium: &nbsp; &nbsp;&nbsp; 15000fcfa</p>
                                    <p> couple: &nbsp; &nbsp;&nbsp; 10000fcfa</p>
                                    <p> single: &nbsp; &nbsp;&nbsp; 5000fcfa</p> --> 
                                </section>
                                </div>
                            </div>
                        
                    </div>
                </div>
            </div>
        
            <div class="event5">
                <div class="section2">
                    <div class="card">
                        <div class="img_container">
                            <div> <img src="backend/img/basketball.gif" alt="super star"></div>
                        </div>
                            <h3>Concert Cysoul</h3> 
                            <div class="align">
                            <div class="second">
                                <ol>
                                <li><img src="backend/img/calendar.png" alt="icon">&nbsp;&nbsp;&nbsp;16/08/2024</li>
                                <li><img src="backend/img/clock.png" alt="icon">&nbsp;&nbsp;&nbsp;A partir de 20h</li>
                                <li><img src="backend/img/pin.jpeg" alt="icon2">Stade Japoma</li>
                                
                                </ol>
                                </div>
                            <div class="rectangle">
                                <p class="third"> 10 ticket restant</p>
                            </div>
                                <div class="square">
                                    <div class="more">
                                        <h3> Pass</h3>
                                        <!-- <p> premium: &nbsp; &nbsp;&nbsp; 15000fcfa</p>
                                        <p> couple: &nbsp; &nbsp;&nbsp; 10000fcfa</p>
                                        <p> single: &nbsp; &nbsp;&nbsp; 5000fcfa</p> --> 
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
            
        
            <div class="event6">
                <div class="section2">
                    <div class="card">
                        <div class="img_container">
                            <div> <img src="backend/img/party.gif" alt="super star"></div>
                        </div>
                            <h3>Concert Cysoul</h3> 
                            <div class="align">
                            <div class="second">
                                <ol>
                                <li><img src="backend/img/calendar.png" alt="icon">&nbsp;&nbsp;&nbsp;16/08/2024</li>
                                <li><img src="backend/img/clock.png" alt="icon">&nbsp;&nbsp;&nbsp;A partir de 20h</li>
                                <li><img src="backend/img/pin.jpeg" alt="icon2">Stade Japoma</li>
                                
                                </ol>
                                </div>
                            <div class="rectangle">
                                <p class="third"> 10 ticket restant</p>
                            </div>
                                <div class="square">
                                    <div class="more">
                                        <h3> Pass</h3>
                                        <!-- <p> premium: &nbsp; &nbsp;&nbsp; 15000fcfa</p>
                                        <p> couple: &nbsp; &nbsp;&nbsp; 10000fcfa</p>
                                        <p> single: &nbsp; &nbsp;&nbsp; 5000fcfa</p> --> 
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="advantage_site">
        <h1 class="h1">
            <b>Pourquoi nous choisir?</b>
        </h1>
        <div class="advantages">
            <div class="advantage_1">
               <b>Intéraction et engagement</b>
            </div>
            <div class="advantage_2">
                <b>Inscriptions 24/7</b>
            </div>
            <div class="advantage_3">
               <b>Inscriptions Éfficaces</b>
            </div>
            <div class="advantage_4">
                <b>Données Sécurisées</b>
            </div>
            <div class="advantage_5">
                <b>Gestion simplifiée</b>
            </div>
            <div class="advantage_6">
               <b>Visibilité accrue</b>
            </div>
            <div class="advantage_7">
                <b>Processus Écologique</b>
            </div>
        </div>
    </section>

    <section id="body" class="contact">
        <section class="side1">
            <div class="about">
                <h4>ABOUT US</h4>
            </div>
            <div class="wel">
                <p>Welcome to <span>EventFlow</span>, your go-to platform for booking tickets to the most exciting events around!
                    Whether you're looking for concerts, sport games, shows, or any other live experience, we got you
                    covered. Our misssion is to make it convenient for you to find and book your favourite events, all
                    in one place.</p>
                <p>Join us in creating unforgettable memories!</p>
            </div>
        </section>
        <section class="side11">
            <div class="add">
                <h4>ADDRESS</h4>
            </div>
            <P> CAMEROON DOUALA</P>
            <h4>CONTACT</h4>
            <p>TEL: (+237) 621065130/ 679073856</p>
            <p>EMAIL:adolinendemba7@gmail.com</p>
        </section>
        <section class="side2">
            <form>
                <div class="will">
                    <h3>WE'RE OPEN FOR ANY COMMENT</h3>
                </div>
                <label for="email">EMAIL :</label>
                <input type="email" id="email" placeholder="Enter your email..."><br/>
                <label for="comment">COMMENT :</label>
                <textarea id="comment" placeholder="Write your comment..."></textarea>
                <button class="button1" type="submit">summit</button>
            </form>
        </section>
    </section>
    <footer>
        <p>2024 &copy; <span>EventFlow</span>, ALL RIGHTS RESERVED.</p>
    </footer>
    
</body>

</html>

