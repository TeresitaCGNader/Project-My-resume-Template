<!doctype html>
<!--[if lt IE 7 ]> <html class="ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie9" lang="en"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en"> <!--<![endif]-->
<html lang="en">

<head>
      <?php /*Variable*/
          $sitename="R&eacute;sum&eacute;";
          $slogan="Student of Computer Science";
          $sitepath="http://people.oregonstate.edu/~guzmannt/about/";
          $author="Teresita C. G. Nader";
      ?>
  
  <title><?php echo $author.", ".$sitename; ?></title>
    
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta name="viewpoint" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="<?php echo $slogan; ?>" />
        <meta name="author" content="<?php echo $author; ?>" />
        <meta name="keywords" content="Teresita Guzman Nader, Oregon State University, Computer Science, Software Engineer, Web Developer, Web Designer, SQL, C++, Photoshop, PHP, HTML5, CSS, MySQL, Hardworking, Creative, Detail-oriented, Problem-solving, Analytical, Critical-thinking, Teresita C. Guzman Nader, OSU, JavaScript, jQuery"/>
        <meta name="robots" content="noindex, nofollow, noarchive" /> 
        
        <!-- Stylesheets -->
        <link href="https://necolas.github.io/normalize.css/3.0.3/normalize.css" type="text/css" rel="stylesheet" />
        <link href="main.css" rel="stylesheet" />
        <link href="slideshow.css" type="text/css" rel="stylesheet" />
        <!--fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather|Dancing+Script:400,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
        <!--favicon-->
        <link rel="stylesheet" href="https://d1azc1qln24ryf.cloudfront.net/114779/Socicon/style-cf.css?rd5re8" />
        <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
        <link rel="manifest" href="manifest.json">
        <link rel="mask-icon" href="safari-pinned-tab.svg" color="#5bbad5">
        <meta name="theme-color" content="#ffffff">
        <!-- Scripts -->
        <script src="modernizr-dev-min.js"></script>
</head>
  
<body>
  <header>
    <a href="<?php echo $sitepath; ?>">
    <img src="img/symbol.png" 
     alt="<?php echo $sitename." for ".$author; ?>"
      title="<?php echo $slogan; ?>" 
      id="symbol"
      class="drop-shadow move"
      />
<img src="img/firstname.png" 
     alt="<?php echo $sitename." for ".$author; ?>"
      title="<?php echo $slogan; ?>" 
      id="firstname"
      class="drop-shadow move"
      />
<img src="img/lastname.png" 
     alt="<?php echo $sitename." for ".$author; ?>"
      title="<?php echo $slogan; ?>" 
      id="lastname"
      class="drop-shadow move"
      />
<img src="img/first-lastname-symbol.png" 
     alt="<?php echo $sitename." for ".$author; ?>"
      title="<?php echo $slogan; ?>" 
      id="combo"
      /></a> 
    <p class="periwinkle summary tshadow move"><?php echo $slogan; ?></p>
  </header>
    <nav id="articles">
      <!--Unordered list-->
      <ul>
        <!-- <a> = anchor -->
        <li><a href="#education" onmousedown="sound.play()" class="purple-bg scroll radius boxshadow" data-speed="1000"><i class="material-icons md-24 move">school</i>Education</a></li>
        <li><a href="#work" onmousedown="sound.play()" class="green-bg scroll radius boxshadow" data-speed="1000"><i class="material-icons md-24 move">work</i>Work Experience</a></li>
        <li><a href="#service" onmousedown="sound.play()" class="blue-bg scroll radius boxshadow" data-speed="1000"><i class="material-icons md-24 move">favorite</i>Service</a></li>
        <li><a href="#skills" onmousedown="sound.play()" class="red-bg scroll radius boxshadow" data-speed="1000"><i class="material-icons">build</i>Skills</a></li>
        <li><a href="#fun" onmousedown="sound.play()" class="orange-bg scroll radius boxshadow" data-speed="1000"><i class="material-icons md-24 move">tag_faces</i>Fun</a></li>
        <li><i class="material-icons md-24 move" onclick="window.print(); return false" title="Opens the print dialog box.">print</i></li>
      </ul>
    </nav>
  
<main id="top" class="hresume">
   <article id="about" class="boxshadow pink-bg">
     <h2>About Me</h2>
        <aside class="alignright boxshadowmark fifty"> 
    
        <figure class="alignleft thirty" >             
            <img src="img/teresita-guzman-nader-selfie-320px.jpg" class="shape boxshadow" 
               alt="<?php echo $author; ?> self portrait" 
                title="&copy; <?php echo $author; ?> 2017" 
                srcset="img/teresita-guzman-nader-selfie-320px.jpg 320w, img/teresita-guzman-nader-selfie-640px.jpg 640w, img/teresita-guzman-nader-selfie-1080px.jpg 1080w"
                sizes="(max-width: 480px) 100vw, (max-width: 900px) 33vw, 254px"
            />
            <figcaption><?php echo $author; ?> self portrait</figcaption>
        </figure >
          
          <p>I am a full-time Computer Science student at Oregon State University.</p>
          <p>Since I was little I enjoyed drawing in Paint. When my mother noticed this, she bought me CorelDraw X3 Graphic Suits for my birthday. CorelDraw was my first graphics design software. I used to spend hours designing backgrounds for computers and websites, characters and people that I liked, and everything I found in YouTube tutorials. Later I got into a Photoshop class, and since then I love to design.</p>
          <p>Another of my passions is to take care of my pets. My oldest pet is Lucky. Lucky is my 16 year old puppy. He has the loveliest big brown eyes, and I love his cold ears. He hates when I play with his ears, he usually shakes his head in sign of disapproval, but after so many years I think he kind of accepted it. The newest member of my family is Snow my 9 months old kitten. I am not a morning person, but he is a morning cat, and he reminds it to me every morning licking my toes to wake me up. For the love I have for my pets I usually try to volunteer at shelters, because I wish that all animals can have a happy and safe place to live.</p>  
          <p>I also enjoy making games. The last game I made was a RPG game about vampires, which I made with the software RPG maker VX that Steam offers.</p>
      
            <!--audio about author or music selection-->
        </aside>
         <h2 class="tshadowheader"><i class="material-icons md-24 move">contact_mail</i>Contact</h2>
         <address class="vcard">
            <p><a class="p-name u-url" href="<?php echo $sitepath; ?>"><?php echo $author; ?></a></p>
            <p class="p-street-address">1003 Kelley Engineering Center</p>
            <p>Oregon State University</p>
            <p class="p-locality">Corvallis</p>
            <p class="p-region">Oregon</p>
            <p class="p-postal-code">97331</p>
            <p class="p-country-name">United States</p>
            <p class="p-tel">541-737-8627</p>
           <!--daarr = down arrow-->
            <p><a href="#contact" onmousedown="sound.play()" class="scroll" data-speed="2000">Contact me using the form below. &darr;</a></p>
         </address>
     <br class="clear" />
   </article>
    <article id="education" class="purple-bg boxshadow">
      <h2 class="vcalendar"><i class="material-icons md-24 move">school</i>Education</h2>  
      <!--Definition list-->
      <dl class="education vevent alignright fifty">
        <!--Definition title-->
        <dt><a class="url fn org" href="http://oregonstate.edu/" target="_blank">Oregon State University</a></dt>
        <!--Definition description-->
          <dd><time class="duration" datetime="0000-00">(Currently) </time>B.S. in Computer Science</dd>
        <dt><a class="url fn org" href="https://www.umpqua.edu/" target="_blank">Umpqua Community College</a></dt>
          <dd><time class="duration" datetime="0000-00">(June 2016) </time>Associate of Arts Oregon Transfer</dd>
      </dl>
      <figure class="slidebox">
        <img src="photos/teresita-nader-doing-experiment-at-college-200x250px.jpg" alt="Teresita Nader collecting samples for a college investigation" title="&copy; <?php echo $author; ?> 2017" />
        <img src="photos/teresita-nader-and-lab-partner-at-college-lab-200x250px.jpg" alt="Teresita Nader at the college lab doing an experiment" title="&copy; <?php echo $author; ?> 2017" />
        <img src="photos/teresita-nader-at-university's-ceramic-class-at-college-200x250px.jpg" alt="Teresita Nader at ceramic's class at the college" title="&copy; <?php echo $author; ?> 2017" />
        <img src="photos/teresita-nader-final-project-for-ceramic-class-at-college-200x250px.jpg" alt="Teresita Nader with ceramic's final project" title="&copy; <?php echo $author; ?> 2017" />
        <figcaption>Work and play at College</figcaption>
      </figure>
      <br class="clear" />
  </article>
    <article id="work" class="green-bg boxshadow">
       <h2><i class="material-icons md-24 move">work</i>Work Experience</h2>
      <dl class="vcalendar">
        <dt><a class="url fn org" href="https://www.umpqua.edu/" target="_blank">Umpqua Community College (UCC)</a></dt>
          <dd>
            <time class="duration" datetime="0000-00">(April 2012 - May 2013)</time> 
            <span class="jobtitle">Computer Lab Assistant</span>. 
            <p class="summary">Duties: Aid students and staff with computer problems at the computer lab.</p>        
          </dd>
        <dt><a href="https://www.umpqua.edu/" target="_blank">Umpqua Community College (UCC)</a></dt>
          <dd>
            <time class="duration" datetime="0000-00">(Sep. 2014 - Dec. 2014)</time> 
            <span class="jobtitle">UCC Foundation Secretary</span>. 
            <p class="summary">Duties: Manage, organize and check information regarding fundraising for UCC. Organize, check and manage scholarship information. Create profiles on the UCC Foundation database for sponsors of UCC.</p>
          </dd>
        <dt><a href="https://www.umpqua.edu/" target="_blank">Umpqua Community College</a></dt>
          <dd>
            <time class="duration" datetime="0000-00">(Sep. 2014 - Dec. 2014)</time> 
            <span class="jobtitle">Financial Aid Secretary</span> 
            <p class="summary">Duties: Organize student’s data into the school database using spread sheets.
                                  Upload official documents for approval into the school database. 
                                  Introduce student’s data on their personal files for student aid approval. 
                                  Check, correct, and organize physical student’s files for backup. 
            </p>
          </dd>
      </dl>
  </article>
  
    <article id="service" class="blue-bg boxshadow">
      <h2><i class="material-icons md-24 move">favorite</i>Service to the Community</h2>
      <dl>
        <dt><a href="https://www.savinggrace.info/" target="_blank">Saving Grace Pet Adoption Center</a></dt>
          <dd>Volunteer</dd>
      </dl>
  <figure class="blue-bg radius boxshadow">
    <iframe src="https://www.youtube.com/embed/_q8thkMAB5Q"></iframe>
    <figcaption>Teresita clicker training her cat to hi5. &copy; Teresita C. G. Nader 2017*. 0:08; MP4**.</figcaption>
  </figure>
  </article>
    <article id="skills" class="red-bg boxshadow">
        <h2><i class="material-icons md-24 move">build</i>Skills and Proficiencies</h2>
          <table id="sort" class="sort">
            <caption>Programming Skills</caption>
            <thead>
                <tr>
                    <th>Skill</th>
                    <th>Dabbler</th>
                    <th>Journeyman</th>
                    <th>Professional</th>
                </tr>
             </thead>
            
                  <tbody>
                      <tr>
                          <th>Web Development/Design</th>
                          <td colspan="1">1+ year of experience</td>
                          <td></td>
                          <td></td>
                      </tr>
                      <tr>
                          <th>Photoshop and Illustration tools</th>
                          <td colspan="2">3+ years of experience</td>
                          <td></td>
                      </tr>
                      <tr>
                          <th>Microsoft SQL Server</th>
                          <td colspan="3">1+ year of experience</td>
                      </tr>
                  </tbody>
                  
                 <tfoot>
                      <tr> <!--This area is to add numbers or totals to the bottom of the tables.-->
                          <th></th>
                          <th></th>
                          <th></th>
                          <th></th>
                      </tr>
                  </tfoot>            
          </table>
  </article>

    <article id="fun" class="orange-bg masonry boxshadow">
       <h2><i class="material-icons md-24 move">tag_faces</i>Fun</h2>
        <img src="photos/butterflies-with-flowers-400px.jpg" alt="Butterflies on flowers in the monarch butterfly sanctuary" title="&copy; <?php echo $author; ?> 2017" class="caption"/>
        <img src="photos/butterflies-and-oranges-400px.jpg" alt="Butterflies on oranges in the monarch butterfly sanctuary" title="&copy; <?php echo $author; ?> 2017" class="caption"/>
        <img src="photos/flowers-yellow-and-white-400px.jpg" alt="A variety of flowers near my university" title="&copy; <?php echo $author; ?> 2017" class="caption"/>
        <img src="photos/sunflower-big-400px.jpg" alt="Sunflower near cherry picking farm" title="&copy; <?php echo $author; ?> 2017" class="caption"/>
        <img src="photos/clay-dragon-400px.jpg" alt="Teresita's clay dragon before being bake" title="&copy; <?php echo $author; ?> 2017" class="caption"/>
        <img src="photos/clay-dragon-after-400px.jpg" alt="Teresita's clay dragon after being bake" title="&copy; <?php echo $author; ?> 2017" class="caption"/>
        <img src="photos/wire-craft-elf-ear-red-400px.jpg" alt="Teresita's wire crafted red elf ears for halloween costume" title="&copy; <?php echo $author; ?> 2017" class="caption"/>
        <img src="photos/wire-craft-elf-ear-green-400px.jpg" alt="Teresita's wire crafted green elf ears for dnd costume" title="&copy; <?php echo $author; ?> 2017" class="caption"/>
        <img src="photos/snowball-pamper-400px.jpg" alt="First vet appointment of Teresita's cat Snowball" title="&copy; <?php echo $author; ?> 2017" class="caption"/>
        <img src="photos/snowball-sleeping-400px.jpg" alt="Snowball sleeping" title="&copy; <?php echo $author; ?> 2017" class="caption"/>
        <img src="photos/snowball-play-biting-400px.jpg" alt="Snowball playing with Teresita's hand" title="&copy; <?php echo $author; ?> 2017" class="caption"/>
        <img src="photos/snowball-stretching-400px.jpg" alt="Snowball relaxing in bed" title="&copy; <?php echo $author; ?> 2017" class="caption"/>
        <img src="photos/snowball-playing-400px.jpg" alt="Snowball playing" title="&copy; <?php echo $author; ?> 2017" class="caption"/>
        <img src="photos/snowball-and-plushy-400px.jpg" alt="Snowball sleeping with Mr.Bunny" title="&copy; <?php echo $author; ?> 2017" class="caption"/>
        <img src="photos/snowball-loves-shoes-400px.jpg" alt="Snowball sleeping on Teresita's shoes" title="&copy; <?php echo $author; ?> 2017" class="caption"/>
        <img src="photos/mexican-food-tacos-400px.jpg" alt="Taquitos prepared by Teresita" title="&copy; <?php echo $author; ?> 2017" class="caption"/>
        <img src="photos/mexican-food-tacos-al-pastor-400px.jpg" alt="Tacos al pastor made by Teresita" title="&copy; <?php echo $author; ?> 2017" class="caption"/>
    </article>
</main>
  
<footer class="radiussmall boxshadow pink-bg">     
    <ul class="aligncenter">
        <li><a href="#top" onmousedown="sound.play()" class="scroll" data-speed="2000">Top</a></li>
        <li><?php echo 'Updated ' . date('F j, Y',filemtime($_SERVER['SCRIPT_FILENAME'])) ?></li>
        <li>&copy; 2015-<?php echo date('Y').' '.$author; ?></li> 
    </ul>

  <!-- social media icons a img -->
    <nav id="share">
      <i class="material-icons md-24 move">share</i>          
      
      <!-- WordPress -->
      <a href="http://wordpress.com/press-this.php?u=[post-url]&t=[post-title]&s=[post-desc]&i=[post-img]" target="_blank" class="circle boxshadow">
      <i class="socicon-wordpress"></i></a>     
      
      <!-- GOOGLE+ -->
      <a href="https://plus.google.com/share?url=http://oregonstate.edu/~ONIDuserName/about/" target="_blank" class="circle boxshadow"> 
      <i class="socicon-googleplus"></i></a>
      
      <!-- Twitter -->
      <a href="http://twitter.com/share?url=http://oregonstate.edu/~ONIDuserName/about/&text=FIRSTandLASTNAME&hashtags=resume" target="_blank" class="circle boxshadow"> 
      <i class="socicon-twitter"></i></a>
  
      <!-- Facebook -->
      <a href="http://www.facebook.com/sharer.php?u=http://oregonstate.edu/~ONIDuserName/about/" target="_blank" class="circle boxshadow"> 
      <i class="socicon-facebook"></i></a>
      
      <!-- LinkedIn -->
      <a href="http://www.linkedin.com/shareArticle?mini=true&url=http://oregonstate.edu/~ONIDuserName/about/" target="_blank" class="circle boxshadow"> 
      <i class="socicon-linkedin"></i></a>
    </nav>
  <br class="clear" />
</footer>

  <?php
        $name = $_POST['firstlastname'];
        $email = $_POST['emailaddress'];
        $phone = $_POST['phone'];
        $web = $_POST['web'];
        $message = $_POST['message'];
        $from = $_POST['firstlastname']; 
        $to = 'guzmannt@oregonstate.edu'; 
        $subject = '[Resume;] inquiry';
        $human = $_POST['human'];
        /* extra credit */
        $social = isset($_POST['socialmedia']) ? $_POST['socialmedia'] : '';
        $social_msg = is_array($social) ? implode(", ", $social) : '';


        $headers .= "Reply-To: <{$_POST['emailaddress']}>";
        $body = "$name $email from $web would like a call back at $phone. 
        Their favorite marketing outlets include $social_msg.
        They sent this message: $message\n";
            if ($_POST['submit']) {
            if ($name != '' && $email != '') {
                if ($human == '4') {                 
                    if (mail ($to, $subject, $body, $from)) { 
                        echo '<p class="confirmation">Your message has been sent!</p>';
                    } else { 
                        echo '<p class="tryagain">Something went wrong. Please try again.</p>'; 
                    } 
                } else if ($_POST['submit'] && $human != '4') {
                    echo '<p class="tryagain">The form was cleared because you provided an incorrect Anti-Spam answer. Please try again. </p>';
                }
                } else {
                    echo '<p class="tryagain">Please fill in all required fields.</p>';
                }
            }
  ?>

    <!-- contact form -->
<form class="purple-bg boxshadow" id="contact" action="index.php" method="post">
      <h2 class="softpurple tshadow">Contact me via this secure form.</h2>
      <fieldset class="radiusnormal gradient">
      <legend class="softpurple">Contact Information</legend>
        <label for="firstlastname" class="required">First and Last Name</label>
        <input name="firstlastname" id="firstlastname" type="text" required placeholder="Jane Doe"  maxlength="32"  />
        <label for="emailaddress" class="required">Email address</label>
        <input name="emailaddress" id="emailaddress" type="email" required placeholder="Jane@Doe.com"  maxlength="32"  />
      </fieldset>

          
     <fieldset class="radiusnormal gradient">
      <legend class="softpurple">Optional</legend>
        <label for="phone">Phone number</label>
        <input name="phone" id="phone" type="tel" required placeholder="000-000-0000"  maxlength="12"  />
        <label for="web">Web URL</label>
        <input name="web" id="web" type="url" required placeholder="https://www.janedoe.com"  maxlength="40"  />
       
        <label for="facebook">
        <input type="checkbox" name="socialmedia[]" id="facebook" value="Facebook" />Facebook</label>

        <label for="linkedin">
        <input type="checkbox" name="socialmedia[]" id="linkedin" value="LinkedIn" />LinkedIn</label>

        <label for="instagram">
        <input type="checkbox" name="socialmedia[]" id="instagram"  value="Instagram"  />Instagram</label>
      </fieldset> 
      
      <fieldset class="radiusnormal gradient">
        <legend class="softpurple">Message</legend>       
          <label for="subject">Select a
            <select name="subject" id="subject" required="" >
              <option value="">Subject:</option>
              <option value="Employment">Employment</option>
              <option value="Contract">Contract</option>
              <option value="Personal">Personal</option>
            </select>
          </label>
            <textarea id="message" name="message" required placeholder="Text only" maxlength="480" ></textarea>
            <label for="message">Type up to 480 characters.</label>
        
          </fieldset>
         <fieldset class="radiusnormal gradient">
            <legend class="softpurple">Validate and Send Form</legend>
             <p>To help prevent spam, answer this mathematical equation:</p>
           <label for="human">What is 2+2 ?
            <input name="human" id="human" required maxlength="1"/>
           </label>
           
            <label for="submit"></label>
            <input name="submit" id="submit" type="submit" value="Send"/>
                <label for="reset"></label>
            <input name="reset" id="reset" type="reset" value="Reset"/>

          </fieldset>
      
</form>

    <!--scripts-->
    <script src="smoothscroll.js"></script>
    <script src='tablesort.min.js'></script>
    <script>new Tablesort(document.getElementById('sort'));</script>
    <script> var sound = new Audio();sound.src = 'media/PianoSoundEffect.mp3';</script>

    <!--jquery-->
    <!--prefix-free-->
    <!-- google analytics -->
    
    <!-- Randomize background photos -->
    <script>
      var bgArray = ['img/pink-flower-1080px.jpg','img/blur-mariposa-monarca-1080px.jpg','img/colorful-flowers-1080px.jpg'],
              selectBG = bgArray[Math.floor(Math.random() * bgArray.length)];
      if (document.documentElement.clientWidth > 1079) {
          document.body.style.backgroundImage = 'url(' + selectBG + ')';
      }
    </script>
  
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>    
    <script src="jquery.captionate.js"></script>    
    <script>
        // North Krimsly: wait until images have all loaded so we can properly get their width
        $(window).load(function(){  
           $('img.caption').captionate();
        });
    </script>
  
</body>
</html>
