<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="stilius/style.css">
    <title>Duok pavairuot</title>
</head>
<body>
    <header>
        <section id="header">
            <div class="header container">
                <div class="nav-bar">
                    
                <p><?php echo "Sveikas, " . $_SESSION['u_first']; ?></p>
                <?php
            if(isset($_SESSION['u_id'])) {
                echo '<form action="includes/logout.inc.php" method="post">
                <button  type="submit" name="submit">Atsijungti</button></form>';
            } else {
                echo '<form action="includes/login.inc.php" method="post">
                <p>Prisijungimo vardas</p>
                    <input type="text" name="uid" placeholder="Iveskite varda">
                <p>Slaptazodis</p>
                    <input type="password" name="pwd" placeholder="Iveskite slaptazodis">
                    <br><input type="submit" name="submit" value="Login">
                <p><a href="registracija.php">Neturi paskyros?</a></p>
            </form>';
            }
        ?>
                    <div class="brand">
                        <a href="#hero"><img src="image/logo.png" alt="dp"></a>
                    </div>
                    
                    <div class="nav-list">
                    <div class="hamburger"><div class="bar"></div></div>
                        <ul>
                        <!--<li><a href="index.php"><h2>Atsijungti</h2></a></li>-->
                        <li><a href="#hero" data-after="Pradzia">Pradzia </a></li>
                        <li><a href="#services"data-after="Renginiai">Renginiai</a></li>
                        <li><a href="#projects"data-after="Automobiliai">Automobiliai</a><li>
                        <li><a href="#about"data-after="Apie mus">Apie mus</a></li>
                        <li><a href="#contact"data-after="Pradzia">Kontaktai</a></li>
                        
                    </ul>
                        
                    </div>
                </div>
            </div>
        </section>
    </header>
    <!--virsus-->
    <section id="hero">
        <div class="hero container">
            <div>
                <h1>Sveiki atvykę į "Duok pavairuot" puslapį</h1>
                <a href="#" type="button" class="mygfonas">Duok pavairuot</a>
            </div>
        </div>
    </section>

    <section id="services">
        <div class="services container">
            <div class="service-top">
                <h1 class="section-title">Ren<span>gin</span>iai</h1>
                <p>Įvairios automobilių parodos/varžybos, kuriuose dalyvaujame ir semiamės vis naujos patirties </p>
            </div>
            <div class="service-bottom">
                <div class="service-iteam">
                    <div class="icon"><img src="image/mm.png" alt="memelfest"></div>
                    <h2>Memel Fest</h2>
                    <p>Kauno senamiestis vasaros sezoną uždarys su išskirtinių automobilių paroda “Memel Motor Fest”!!!
                    … Viskas prasidėjo 2015m. Klaipėdos Vasaros Koncertų Estradoje, ramioje, aplink žaliuojančioje aplinkoje, kur “SELas” rengia savo atsisveikinimo koncertus, gimė išskirtinių automobilių paroda - Memel Motor Fest…</p>
                </div>
                <div class="service-iteam">
                    <div class="icon"><img src="image/chill.png"></div>
                    <h2>CHILL'N'GRILL</h2>
                    <p>„Chill’n’Grill X“ - 10-asis JDM.lt komandos organizuojamas didžiausias Baltijos šalyse automobilių kultūros festivalis. Kasmet negailinčių dėmesio, rūpesčio ir pinigų savo puoselėjamoms markėms. Tūkstančiai šios kultūros gerbėjų seka festivalio paskyrą socialiniuose tinkluose, dešimtys tūkstančių pamato festivalio komunikacijos projektus </p>
                </div>
                <div class="service-iteam">
                    <div class="icon"><img src="image/tunning.jpg"></div>
                    <h2>Tuning TEAM</h2>
                    <p> Klubas neoficialiai susikūrė 2009-07-10 siekiant suvienyti automobilių mylėtojus. Klube yra laukiami tie asmenys kurie prijaučia ne tik išorės, bet ir vidaus bei variklio tuningams, aparatūrai ne išimtis. Šis klubas skirtas tuningo megėjams, bet ne profesionalams nors niekada nesakyk niekada!!!</p>
                </div>
                <div class="service-iteam">
                    <div class="icon"><img src="image/wv.png"></div>
                    <h2>VW Klubas LT</h2>
                    <p>Vasara, gerėjantis oras ir laisvėjantis karantinas suteikia kasmetinę progą apsilankyti pamėgtoje vietoje ir susiburti draugų rate - VW Klubo LT Piknike!
                    Daugų salos poilsiavietės žolė dar prisimena visų geležinių žirgų ratus, smagiausias rungtis, laužo dūmus, šašlyko aromatą.</p>
                </div>
            </div>
        </div>
        </div>
    </section>

    <section id="projects">
        <div class="projects container">
            <div class="projects-header">
                <h1 class="section-title"><span>Autom</span>obiliai</h1>
            </div>
            <div class="all-projects">
                <div class="project-iteam">
                    <div class="project-info">
                        <h1>Projektas</h1>
                        <h2>Volkswagen Jetta '87</h2>
                        <p>Keletas modifikaciju: Salonas iš 3golfo gauge iš audi 80 gte,Variklis iš audi a3(1.8t)Kuro siurblys iš 3 golfo gti.</p>
                    </div>
                    <div class="project-img">
                        <img src="image/darius.jpg" alt="Darius">
                    </div>
                </div>
                <div class="project-iteam">
                    <div class="project-info">
                        <h1>Projektas</h1>
                        <h2>Volkswagen Jetta '88</h2>
                        <p>Dar viena išlaikyta Jetta: Kaip ir matosi nuotraukoje, yra įdėtas "custom face" is b2passato. Sumontuotos sportines sedynes, zeminacios spiruokles "coilai"</p>
                    </div>
                    <div class="project-img">
                        <img src="image/marius.jpg" alt="Marius">
                    </div>
                </div><div class="project-iteam">
                    <div class="project-info">
                        <h1>Projektas</h1>
                        <h2>Mazda '86</h2>
                        <p>Mazda kuri yra tikrai retokai sutinkama gatvėse. Bet pridėjus ranką galima ir gauti gražų modelį.Kaip ir šį: sudėta  žeminančios spyruokles, "palupis"</p>
                    </div>
                    <div class="project-img">
                        <img src="image/rolas.jpg" alt="Rolas">
                    </div>
                </div><div class="project-iteam">
                    <div class="project-info">
                        <h1>Daily</h1>
                        <h2>BMW 3 Series (E36)</h2>
                        <p>Kasdieniniams važinėjimui naudojamas BMW, bet tai pat ir renginiuose. Integruota keletas modifikacijų, bet didžioji dalis viskas originaliai</p>
                    </div>
                    <div class="project-img">
                        <img src="image/paulina.jpg" alt="Paulina">
                    </div>
                </div>
            </div>
        </div>
    </section>
<section id="about">
    <div>
        <h1 class="section-title">Apie <span>mus</span></h1>
            <img src="image/logo.jpeg">
            
            <p>Trumpai apie mus. Esam automobilių entuziastų klubo nariai,  kurie užsiima automobilių modifikacijomis,  dalyvauja automobilių sporte, bei kituose įvairiuose renginiuose, tokiuose kaip „Chill’n’Grill ar netgi slalomo varžybose.</p>
            </div>
            
    
</section>

<section id="contact">
    <div class="contact container">
       <div><h1 class="section-title">Kontaktai</h1></div> 
       <div class="contact-iteams">
           <div class="contact-iteam">
               <div class="icon"><img src="image/numeris.png"></div>
               <div class="contact-info">
                   <h1>Kontaktinis numeris</h1>
                   <h2><a href="tel:+37060227811">+37060227811</a></h2>
               </div>
           </div>
           <div class="contact-iteam">
               <div class="icon"><img src="image/pastas.png"></div>
               <div class="contact-info">
                   <h1>Elektronis paštas</h1>
                   <h2><a href="mailto:mindaugasssambroza@gmail.com">Duokpavairuot@gmail.com</a></h2>
               </div>
           </div>
           <div class="contact-iteam">
               <div class="icon"><img src="image/vieta.png"></div>
               <div class="contact-info">
                   <h1>Mus rasite</h1>
                   <h2><a href="https://www.google.lt/maps/place/McDonald's/@54.9201091,23.9491073,17z/data=!4m13!1m7!3m6!1s0x46e718f2f4f8dd59:0x2f00d49d33881f3e!2sSavanori%C5%B3+pr.+321,+Kaunas+50120!3b1!8m2!3d54.920106!4d23.9512959!3m4!1s0x46e7220e526e5937:0x143a553adbeff453!8m2!3d54.9204099!4d23.953577">Kaunas, Savanorių pr. 321</a></h2>
               </div>
           </div>
       </div>
    </div>
</section>
<section id="footer">
    <div class="footer container">
        <div class="brand">
            <h2><span>D</span>uok <span>p</span>avairuot</h2></div>
            <h2>Automobilių entuziastų klubas</h2>
            <div class="social-icon">
                 <div class="social-iteam">
                     <a href="https://www.facebook.com/duokpavairuot"><img src="image/fb.png"></a>
                 </div>
                 <div class="social-iteam">
                     <a href="https://www.instagram.com/"><img src="image/instagram.png"></a>
                 </div>
                 <div class="social-iteam">
                     <a href="https://twitter.com/"><img src="image/twitter.png"></a>
                 </div>
            </div>
            <p><?php echo "Copyright " ." &copy " .date("Y") ." | Duok Pavairuot";?></p>
    </div>
</section>
<script src="app.js"></script>
</body>

</html>