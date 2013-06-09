<html>
<head>
  <meta charset="utf-8" />
  <title></title>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta name="description" content="" />      
  <meta name="keywords" content="" />

  <meta name="HandheldFriendly" content="True">
  <meta name="MobileOptimized" content="320">
  <meta name="viewport" content="width=device-width, maximum-scale=1.0" />
  <meta name="format-detection" content="telephone=no">

  <link rel="shortcut icon" href="/favicon.ico" /> 
  <link rel="apple-touch-icon" href="/apple-touch-icon-57x57.png" />
  <link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon.png" />
  <link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon114x114.png" />
  
  <link rel="stylesheet" href="/stylesheets/base.css" />
  <!--[if lte IE 9]><link rel="stylesheet" href="css/ie.css" type="text/css" media="screen" /><![endif]-->
  
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.0/jquery.min.js"></script>
  <script src="/javascripts/vendor/modernizr.min.js"></script>
  <script src="/javascripts/vendor/packery.pkgd.min.js"></script>
  <script src="/javascripts/base.js"></script>
</head>
<body>
  <header class='pattern-bg'>
    <section>
      <h1 class="logo">Damion</h1>
      <nav>
        <ul>
          <li><a class='home' href="#">home</a></li>
          <li><a class='about' href="#">about</a></li>
          <li><a class='cartoons' href="#">tv/cartoons</a></li>
          <li><a class='games' href="#">video games</a></li>
        </ul>
      </nav>
    </section>
  </header>
  <div id="content">
    <div class="about item">
      <img src="/images/about/damion-drum.jpg" alt="Damion" />
      <div class="white pad-10">
        <h3>Hello There</h3>
        <p>Welcome to my webpage! I am glad you're here and taking the time to get to know me.</p>
        <p>Here you can learn about me and my family. Also you can read about my favorite video and board games and television shows.</p>
      </div>
    </div>
    
    <div class="about item">
      <img src="/images/about/issac.jpg" alt="Issac" />
      <div class="white pad-10">
        <h3>Issac</h3>
        <p>My younger brother is 6 years old and I play many games with him. He likes Lego Star Wars as well and we play nerf guns together in our backyard.</p>
      </div>
    </div>

    <div class="about item">
      <img src="/images/about/katie.jpg" alt="Katie" />
      <div class="white pad-10">
        <h3>Katie</h3>
        <p>My younger sister is 5 years old and we watch cartoons together. She likes to play with dolls and color.</p>
      </div>
    </div>
    
    <?php foreach(glob($_SERVER['DOCUMENT_ROOT']."/images/about/gallery/*.jpg") as $value) { ?>
      <div class="about item img-only">
        <div class="mask">
          <img src="/images/about/gallery/<?php echo basename($value); ?>" alt="damion" />
        </div>
      </div>
    <?php } ?>

    <div class="cartoons item">
      <img src="/images/cartoons/steelers-logo.png" alt="Steelers" />
      <div class="white pad-10">
        <h3>The Steelers</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga, ex, assumenda sit suscipit commodi quas beatae recusandae accusantium placeat esse dignissimos porro harum nostrum nobis repellat obcaecati expedita et necessitatibus?</p>
      </div>
    </div>
    
    <div class="cartoons item">
      <img src="/images/cartoons/adventure_time.jpg" alt="Adventure Time">
      <div class="white pad-10">
        <h3>Adventure Time</h3>
        <p>Adventure Time is an American animated television series created by Pendleton Ward for Cartoon Network. The series follows the adventures of Finn (voiced by Jeremy Shada), a human boy, and his best friend and adoptive brother Jake (voiced by John DiMaggio), a dog with magical powers to change shape and grow and shrink at will. Finn and Jake live in the post-apocalyptic Land of Ooo.</p>
      </div>
    </div>
    
    <div class="cartoons item">
      <img src="/images/cartoons/starwars_clone_wars.jpg" alt="clone wars" />
      <div class="white pad-10">
        <h3>Star Wars Clone Wars</h3>
        <p>Star Wars: The Clone Wars is an American 3D CGI animated television series created by Lucasfilm Animation, Lucasfilm Animation Singapore and CGCG Inc. The series debuted on the US-version of Cartoon Network on October 3, 2008. It was also seen for only about 2 months on TNT, but was quickly taken off the channel due to low viewership. It is set in the fictional Star Wars galaxy, during the same time period as the previous 2003 Star Wars: Clone Wars series.</p>
      </div>
    </div>

    <div class="games item">
      <img src="/images/games/minecraft1.jpg" alt="Minecraft" />
      <div class="white pad-10">
        <h3>Minecraft</h3>
        <p>Minecraft is a sandbox indie game originally created by Swedish programmer Markus "Notch" Persson and later developed and published by Mojang. It was publicly released for the PC on May 17, 2009, as a developmental alpha version and, after gradual updates, was published as a full release version on November 18, 2011. A version for Android was released a month earlier on October 7, and an iOS version was released on November 17, 2011. On May 9, 2012, the game was released on Xbox 360 as an Xbox Live Arcade game, co-developed by 4J Studios. All versions of Minecraft receive periodic updates.</p>
      </div>
    </div>
    
    <div class="games item">
      <img src="/images/games/little-big-planet.jpg" alt="Little Big Planet" />
      <div class="white pad-10">
        <h3>LittleBigPlanet 2</h3>
        <p>LittleBigPlanet 2 is a puzzle-platformer video game, centred around user-generated content. The game is developed by Media Molecule, published by Sony Computer Entertainment Europe for PlayStation 3. It was originally scheduled for release in November 2010 but was delayed until January 2011. The game was released in North America on 18 January 2011, in mainland Europe on 19 January 2011, in Australia and New Zealand on 20 January 2011 and the UK and Ireland on 21 January 2011.</p>
      </div>
    </div>

    <div class="games item">
      <img src="/images/games/pokemon.jpg" alt="Pokemon" />
      <div class="white pad-10">
        <h3>Pokémon</h3>
        <p>Pokémon is a media franchise published and owned by Japanese video game company Nintendo and created by Satoshi Tajiri in 1996. Originally released as a pair of interlinkable Game Boy role-playing video games developed by Game Freak, Pokémon has since become the second-most successful and lucrative video game-based media franchise in the world, behind only Nintendo's own Mario franchise. Pokémon properties have since been merchandised into anime, manga, trading cards, toys, books, and other media. The franchise celebrated its tenth anniversary in 2006, and as of 28 May 2010, cumulative sales of the video games have reached more than 200 million copies. In November 2005, 4Kids Entertainment, which had managed the non-game related licensing of Pokémon, announced that it had agreed not to renew the Pokémon representation agreement. Pokémon USA Inc., a subsidiary of Japan's Pokémon Co., now oversees all Pokémon licensing outside of Asia.</p>
      </div>
    </div>

    <div class="games item">
      <img src="/images/games/infamous3.jpg" alt="Infamous 3" />
      <div class="white pad-10">
        <h3>Infamous 3</h3>
        <p>Infamous is a series of action-adventure platformer open world video games developed by Sucker Punch Productions and published by Sony Computer Entertainment exclusively for the PlayStation 3 video game console. The series follows the adventures of Cole MacGrath, a young man with electrical superpowers, who must decide his own destiny of becoming either good or evil. The series includes Infamous, its sequel Infamous 2, the non-canon downloadable game Infamous: Festival of Blood the DC Comics comic book series of the same name, and the third main entry for the Playstation 4, Infamous: Second Son. It is the first series created by Sucker Punch Productions for the PlayStation 3 and Playstation 4, and the second after the Sly Cooper series of games for the PlayStation 2.</p>
      </div>
    </div>

    <div class="games item">
      <img src="/images/games/ps4.jpg" alt="Playstation 4" />
      <div class="white pad-10">
        <h3>Playstation 4</h3>
        <p>Sony finally revealed its plans for the PlayStation 4 next-generation console at New York’s Manhattan Centre in February. While we’ve yet to see the actually console itself, we are now privy to a host of spec details, launch titles, and some info on the new controller.</p>
      </div>
    </div>
  </div> <!-- /#content -->
  <footer class="pattern-bg clearfix">
    <p class="half left">&copy; <?php echo date('Y'); ?> Damion Raymond</p>
    <p class="half right">designed and developed by <a href="http://ifkeithraymond.com" rel="external">ifkeithraymond.com</a></p>
  </footer>
</body>
</html>