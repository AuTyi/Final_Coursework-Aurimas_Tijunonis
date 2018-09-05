<?php require_once('includes/head_section.php') ?>

<title>Pizzeria Vilnius Best of</title>
	</head>
<body>
	<!-- navbar -->
  <?php include('includes/navbar.php') ?>

<!-- Header -->
<header id="home">
  <div class="open">
    <span class="s-open font-xl">Open from 10 to 24</span>
  </div>
  <div class="h-mobile">
    <span class="mobile" ><b>thin<br>CRUST PIZZA</b></span>
    <p><a href="#menu" class="n-button b-black f-xxl">Let me see the menu</a></p>
  </div>
</header>

<!-- The Menu block -->
<div class="s-menu" id="menu">
  <div class="m-content">
  
    <h1 class="m-center">THE MENU</h1>
    <div class="m-row">
      <a href="javascript:void(0)" onclick="openMenu(event, 'Pizza');" id="myLink">
        <div class="m-col tablink">Pizza</div>
      </a>
      <a href="javascript:void(0)" onclick="openMenu(event, 'Pasta');">
        <div class="m-col tablink">Pasta</div>
      </a>
      <a href="javascript:void(0)" onclick="openMenu(event, 'Starter');">
        <div class="m-col tablink">Starter</div>
      </a>
    </div>

    <div id="Pizza" class="menu m-list">
      <h1><b>Margherita</b> <span class="m-price s-open">$12.50</span></h1>
      <p class="m-text-grey">Fresh tomatoes, fresh mozzarella, fresh basil</p>
      <hr>
   
      <h1><b>Formaggio</b> <span class="m-price s-open">$15.50</span></h1>
      <p class="m-text-grey">Four cheeses (mozzarella, parmesan, pecorino, jarlsberg)</p>
      <hr>
      
      <h1><b>Chicken</b> <span class="m-price s-open">$17.00</span></h1>
      <p class="m-text-grey">Fresh tomatoes, mozzarella, chicken, onions</p>
      <hr>

      <h1><b>Pineapple'o'clock</b> <span class="m-price s-open">$16.50</span></h1>
      <p class="m-text-grey">Fresh tomatoes, mozzarella, fresh pineapple, bacon, fresh basil</p>
      <hr>

      <h1><b>Meat Town</b> <span class="m-new s-open">Hot!</span><span class="m-price s-open">$20.00</span></h1>
      <p class="m-text-grey">Fresh tomatoes, mozzarella, hot pepporoni, hot sausage, beef, chicken</p>
      <hr>

      <h1><b>Parma</b> <span class="m-new s-open">New!</span><span class="m-price s-open">$21.50</span></h1>
      <p class="m-text-grey">Fresh tomatoes, mozzarella, parma, bacon, fresh arugula</p>
    </div>

    <div id="Pasta" class="menu m-list">
      <h1><b>Lasagna</b> <span class="m-new s-open">Popular!</span> <span class="m-price s-open">$13.50</span></h1>
      <p class="m-text-grey">Special sauce, mozzarella, parmesan, ground beef</p>
      <hr>
   
      <h1><b>Ravioli</b> <span class="m-price s-open">$14.50</span></h1>
      <p class="m-text-grey">Ravioli filled with cheese</p>
      <hr>
      
      <h1><b>Spaghetti Classica</b> <span class="m-price s-open">$11.00</span></h1>
      <p class="m-text-grey">Fresh tomatoes, onions, ground beef</p>
      <hr>

      <h1><b>Seafood pasta</b> <span class="m-price s-open">$25.50</span></h1>
      <p class="m-text-grey">Salmon, shrimp, lobster, garlic</p>
    </div>


    <div id="Starter" class="menu m-list">
      <h1><b>Today's Soup</b> <span class="m-new s-open">New!</span><span class="m-price s-open">$5.50</span></h1>
      <p class="m-text-grey">Ask the waiter</p>
      <hr>
   
      <h1><b>Bruschetta</b> <span class="m-price s-open">$8.50</span></h1>
      <p class="m-text-grey">Bread with pesto, tomatoes, onion, garlic</p>
      <hr>
      
      <h1><b>Garlic bread</b> <span class="m-price s-open">$9.50</span></h1>
      <p class="m-text-grey">Grilled ciabatta, garlic butter, onions</p>
      <hr>
      
      <h1><b>Tomozzarella</b> <span class="m-price s-open">$10.50</span></h1>
      <p class="m-text-grey">Tomatoes and mozzarella</p>
    </div><br>

  </div>
</div>
<script>
// Tabbed Menu
function openMenu(evt, menuName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("menu");
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
     tablinks[i].className = tablinks[i].className.replace(" red-col", "");
  }
  document.getElementById(menuName).style.display = "block";
  evt.currentTarget.firstElementChild.className += " red-col ";
}
document.getElementById("myLink").click();
</script>
<!-- about-->
<section class="s-menu" id="about">
  <div class="m-content">
    <h1 class="m-center">About</h1>
    <p class="background-dark" >The Pizza Restaurant was founded in blabla by Mr. Italiano in lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    <p><strong>The Chef?</strong> Mr. Italiano himself<img src="../../_WebProjectPizza/img/chef.jpg" class="a-chef" alt="Chef-Italiano"></p>
    <p>We are proud of our interiors.</p>
    
    <h1><b>Opening Hours</b></h1>
    
    <div class="a-row background-dark">
      <div class="a-col">
        <p>Mon & Tue CLOSED</p>
        <p>Wednesday 10.00 - 24.00</p>
        <p>Thursday 10:00 - 24:00</p>
      </div>
      <div class="a-col">
        <p>Friday 10:00 - 24:00</p>
        <p>Saturday 10:00 - 24:00</p>
        <p>Sunday 10:00 - 24:00</p>
      </div>
    </div>
    
  </div>
</section>
<!-- google maps) -->
<div class="mapouter">
	<div class="gmap_canvas">
		<iframe width="500" height="400" id="gmap_canvas" src="https://maps.google.com/maps?q=gedimino%20bok%C5%A1tas&t=&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
		<a href="https://www.pureblack.de">webagentur</a>
	</div>
		
</div>
<!--form-->
<div class="s-contact s-menu">
  <div class="m-content">
    <h1 class="m-center">Contact</h1>
    <p>Find us at Gedimino bokštas at or call us at +37068505907</p>
    <p><span class="s-open">HEY!</span> We offer full-service catering for any event, large or small. We understand your needs and we will cater the food to satisfy the biggerst criteria of them all, both look and taste.</p>
    <p class="f-xxl"><strong>Reserve</strong> a table, ask for today's special or just send us a message:</p>
    <form action="/action_page.php" target="_blank">
      <input type="text" placeholder="Name" required name="Name">
      <input type="number" placeholder="How many people" required name="People">
      <input type="datetime-local" placeholder="Date and time" required name="date" value="2018-10-15T20:00">
      <input type="text" placeholder="Message" required name="Message">
      <button type="submit">SEND MESSAGE</button>
    </form>
  </div>
</div>

<!-- footer -->
<?php include('includes/footer.php') ?>