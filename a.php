 <!-- Start header -->
 <?php include('mainheader.php');
 require_once 'server.php';  
   if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);

  }?>
      <!-- End header -->
 
        <div id="slideshow-example" data-component="slideshow">
            <div role="list">
              <div class="slide">
                <div class="content">
                    <h2>
                        هل تبحث عن 
                        مقاولات عامة متكاملة؟</h2>
                        <p>مع الاشموني للمقاولات , نفذ مشروعك مع افضل خبرة لاكثر من 20 عام</p>
                        <a href="https://api.whatsapp.com/send?phone=https://api.whatsapp.com/send?phone=962775631267&text=%F0%9F%A4%9D" class="btn">تواصل الان</a>
                    </div>
                <img src="img/slide.jpg" alt="">
            </div>
            <div class="slide">
                <div class="content" style="  font-size: 20px;  ">
                    <h2>الاشموني للمقاولات</h2>
                    <p style="  direction: rtl;  "> لسنا الوحيدون لكننا المميزون ,20 عاما نساهم في بناء مستقبل البناء والتشطيب </p>
                   
                    <a href="https://api.whatsapp.com/send?phone=https://api.whatsapp.com/send?phone=962775631267&text=%F0%9F%A4%9D" class="btn">تواصل الان</a>
                    </div>
                <img src="img/slide2.png" alt="">
            </div>
           
            </div>
           
          </div>
       <!-- End Landing --> 
       <!-- Start about -->
    <div class="about" id="about">
      <a href="#project-con" class="go-down">
          <i class="fas fa-angle-double-down fa-2x"></i>
        </a>
      <div class="container">
      <div class="content">
        <h1> هل تريد إستثمار ناجح لمشروعك؟ </h1>
      <h3>نفذ مشروعك مع الشموني للمقولات  </h3>
      <P>  نحن نملك خبرة 20 عام فى تنفيذ مشروعات على نطاق واسع وبأعلى جودة كما أن فريقنا يضم استشاريين ومهندسين يعملون على إيجاد حلول مبتكرة لأكثر مشاريع المقاولات تعقيداً. ومن خلال مسيرتنا حققنا بصمتنا الخاصة   فى مجال المقاولات والسوق الاردني بإكتساب ثقة عملائنا وهكذا نسعى إلى تحقيق مستقبل افضل فى مجال المقاولات والتصميمات الهندسية. </P>
      </div>
    </div>
    </div>
    <!-- End Gallery -->
 
      <!--  خدماتنا -->
    <div class="gallery" id="gallery" >
      <h2 class="main-title">مايميزنا</h2>
        <div class="container">
          <div class="box">
            <div class="image">
              <i class="fas fa-paste"></i>
            </div>
            <h2>تنفيذ حسب المخطط </h2>
          </div>
          <div class="box">
            <div class="image">
              <i class="fas fa-history"></i>
            </div>
            <h2>سرعة غي الانجاز</h2>
          </div>
          <div class="box">
            <div class="image">
              <i aria-hidden="true" class="fas fa-drafting-compass"></i>
            </div>
            <h2>دقة في العمل</h2>
          </div>
      
        </div>
      </div>
      
      <!-- End Gallery -->

      <div class="about" id="about2"style="background-color: white;">
      
        <div class="container">
        <div class="content-2">
          <h2 class="main-title">خدماتنا</h2>
       
         <p>نقوم بتصميم وتنفيذ المبانى السكنية والإدارية والثقافيه والتعليميه وبالفعل نفذنا مئات المباني في عمان واربد والمناطق المحيطه بها 
         بفضل ثقت عملائنا ومن خدماتنا يمكنك الاستعانه بفريقنا لتنفيذ اي اعمال خرسانات مسلحة او مباني وتشطيبات
        
          كما يمكنك الاستعانة بخبراتنا في الاشراف علي سير العمل بمشروعك حيث يمكنك الاتصال بنا للحصول علي دعم فني من مهندس نقابي خبره لزيارة موقعك واستلام البنود المختلفه مقابل اجر رمزي للزياره.امثله لذلك.. يمكننا استلام تسليح السقف قبل الصب ..يمكننا ارسال مهندس لمتابعة سير العمل يوم صب الخرسانة..يمكننا ارسال مهندس لمراجعة الموقف عندكم في التشطيبات وتقرير اذا كان العمل جيد ام يحتاج لتعديلات.
        </p></div>
      </div>
      </div>
      <div class="spikes"></div>
       <!-- Start project -->
       <div class="project-con" id="project-con">  
       <h2 style="text-align: center; margin-top: 70px;" class="main-title">مشاريعنا</h2>
       <h2 style="text-align: center;">صب اعمدة مشروع اسكان</h2>
 
 <div class="slideshow-container">

  <div class="mySlides3 fade">
    <div class="numbertext">1 / 4</div>
    <img src="img/d1.jfif" style="width:100%">
    
  </div>
  
  <div class="mySlides3 fade">
    <div class="numbertext">2 / 4</div>
    <img src="img/d2.jfif" style="width:100%">
    
  </div>
  
  <div class="mySlides3 fade">
    <div class="numbertext">3 / 4</div>
    <img src="img/d3.jfif" style="width:100%">
   
  </div>
      
  
   

  <a class="prev" onclick="plusSlides3(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides3(1)">&#10095;</a>
  
  </div>
  <br>
  
  <div style="text-align:center">
    <span class="dot3" onclick="currentSlide3(1)"></span> 
    <span class="dot3" onclick="currentSlide3(2)"></span> 
    <span class="dot3" onclick="currentSlide3(3)"></span>  
  
  </div>

    
      
 <!-- jjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj -->
        <h2 style="text-align: center;margin-top:111px ;"> منطقة البينات مشروع اسكان</h2>
       <div class="slideshow-container">

        <div class="mySlides2 fade">
          <div class="numbertext">1 / 4</div>
          <img src="img/b1.jfif" style="width:100%">
          
        </div>
        
        <div class="mySlides2 fade">
          <div class="numbertext">2 / 4</div>
          <img src="img/b2.jfif" style="width:100%">
          
        </div>
        
        <div class="mySlides2 fade">
          <div class="numbertext">3 / 4</div>
          <img src="img/b3.jfif" style="width:100%">
         
        </div>
            
        <div class="mySlides2 fade">
          <div class="numbertext">4 / 4</div>
          <img src="img/b4.jfif" style="width:100%">
         
        </div>
        <a class="prev" onclick="plusSlides2(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides2(1)">&#10095;</a>
        
        </div>
        <br>
        
        <div style="text-align:center">
          <span class="dot2" onclick="currentSlide2(1)"></span> 
          <span class="dot2" onclick="currentSlide2(2)"></span> 
          <span class="dot2" onclick="currentSlide2(3)"></span> 
          <span class="dot2" onclick="currentSlide2(4)"></span> 
        </div>

 <!-- 3333333333333333333333333333333333333333333333333333333333333333333333333333 -->
 <h2 style="text-align: center; margin-top:111px ;"> solide slab اسكان منطقة البينات عقدة</h2>
 <div class="slideshow-container">

  <div class="mySlides fade">
    <div class="numbertext">1 / 4</div>
    <img src="img/a1.jfif" style="width:100%">
    <div class="text">Caption Text</div>
  </div>
  
  <div class="mySlides fade">
    <div class="numbertext">2 / 4</div>
    <img src="img/a2.jfif" style="width:100%">
    <div class="text">Caption Two</div>
  </div>
  
  <div class="mySlides fade">
    <div class="numbertext">3 / 4</div>
    <img src="img/a3.jfif" style="width:100%">
    <div class="text">Caption Three</div>
  </div>
      
  <div class="mySlides fade">
    <div class="numbertext">4 / 4</div>
    <img src="img/a4.jfif" style="width:100%">
    <div class="text">Caption Three</div>
  </div>
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
  
  </div>
  <br>
  
  <div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span> 
    <span class="dot" onclick="currentSlide(2)"></span> 
    <span class="dot" onclick="currentSlide(3)"></span> 
    <span class="dot" onclick="currentSlide(4)"></span> 
  </div>

   
    <!-- 4444444444444444444444444444444444444444444444444444444444444444444444444444 -->
    
  <h2 style="text-align: center;margin-top:111px ;">  عقدة الطابق الثاني</h2>
 <div class="slideshow-container">

  <div class="mySlides4 fade">
    <div class="numbertext">1 / 6</div>
    <img src="img/c1.jfif" style="width:100%">
    
  </div>
  
  <div class="mySlides4 fade">
    <div class="numbertext">2 / 6</div>
    <img src="img/c2.jfif" style="width:100%">
    
  </div>
  
  <div class="mySlides4 fade">
    <div class="numbertext">3 / 6</div>
    <img src="img/c3.jfif" style="width:100%">
    
  </div>
      
  <div class="mySlides4 fade">
    <div class="numbertext">4 / 6</div>
    <img src="img/c4.jfif" style="width:100%">
    
  </div>
  <div class="mySlides4 fade">
    <div class="numbertext">5 / 6</div>
    <img src="img/c5.jfif" style="width:100%">
    
  </div>
  <div class="mySlides4 fade">
    <div class="numbertext">6 / 6</div>
    <img src="img/c6.jfif" style="width:100%">
    
  </div>
  <a class="prev" onclick="plusSlides4(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides4(1)">&#10095;</a>
  
  </div>
  <br>
  
  <div style="text-align:center">
    <span class="dot4" onclick="currentSlide4(1)"></span> 
    <span class="dot4" onclick="currentSlide4(2)"></span> 
    <span class="dot4" onclick="currentSlide4(3)"></span>  
    <span class="dot4" onclick="currentSlide4(4)"></span> 
    <span class="dot4" onclick="currentSlide4(5)"></span> 
    <span class="dot4" onclick="currentSlide4(6)"></span> 
  </div> 
  <a href="مشاريعنا.php" class="btn" style=" text-align: center;  margin-top: 70px;
   width: 300px;">المزيد من المشروعات</a>     
</div> 

    <!-- End project -->
    
       <!-- Start Footer -->
       <?php include('footer.php'); ?>
      <!-- End Footer -->
 
    

    <script>
      var slideshows = document.querySelectorAll('[data-component="slideshow"]');
    slideshows.forEach(initSlideShow);
    
    function initSlideShow(slideshow) {
    
        var slides = document.querySelectorAll(`#${slideshow.id} [role="list"] .slide`);
    
        var index = 0, time = 4000;
        slides[index].classList.add('active');
    
        setInterval( () => {
            slides[index].classList.remove('active');
            
            index++;
            if (index === slides.length) index = 0;
    
            slides[index].classList.add('active');
    
        }, time);
    }
    
    
    
    var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}


var slideIndex2 = 1;
showSlides2(slideIndex2);

function plusSlides2(n) {
  showSlides2(slideIndex2 += n);
}

function currentSlide2(n) {
  showSlides2(slideIndex2 = n);
}

function showSlides2(n) {
  var i;
  var slides2 = document.getElementsByClassName("mySlides2");
  var dots2 = document.getElementsByClassName("dot2");
  if (n > slides2.length) {slideIndex2 = 1}    
  if (n < 1) {slideIndex2 = slides2.length}
  for (i = 0; i < slides2.length; i++) {
      slides2[i].style.display = "none";  
  }
  for (i = 0; i < dots2.length; i++) {
      dots2[i].className = dots2[i].className.replace(" active", "");
  }
  slides2[slideIndex2-1].style.display = "block";  
  dots2[slideIndex2-1].className += " active";
}



var slideIndex3 = 1;
showSlides3(slideIndex3);

function plusSlides3(n) {
  showSlides3(slideIndex3 += n);
}

function currentSlide3(n) {
  showSlides3(slideIndex3 = n);
}

function showSlides3(n) {
  var i;
  var slides3 = document.getElementsByClassName("mySlides3");
  var dots3 = document.getElementsByClassName("dot3");
  if (n > slides3.length) {slideIndex3 = 1}    
  if (n < 1) {slideIndex3 = slides3.length}
  for (i = 0; i < slides3.length; i++) {
      slides3[i].style.display = "none";  
  }
  for (i = 0; i < dots3.length; i++) {
      dots3[i].className = dots3[i].className.replace(" active", "");
  }
  slides3[slideIndex3-1].style.display = "block";  
  dots3[slideIndex3-1].className += " active";
}




var slideIndex4 = 1;
showSlides4(slideIndex4);

function plusSlides4(n) {
  showSlides4(slideIndex4 += n);
}

function currentSlide4(n) {
  showSlides4(slideIndex4 = n);
}
function showSlides4(n) {
  var i;
  var slides4 = document.getElementsByClassName("mySlides4");
  var dots4 = document.getElementsByClassName("dot4");
  if (n > slides4.length) {slideIndex4 = 1}    
  if (n < 1) {slideIndex4 = slides4.length}
  for (i = 0; i < slides4.length; i++) {
      slides4[i].style.display = "none";  
  }
  for (i = 0; i < dots4.length; i++) {
      dots4[i].className = dots4[i].className.replace(" active", "");
  }
  slides4[slideIndex4-1].style.display = "block";  
  dots4[slideIndex4-1].className += " active";
}


</script>
</body>
</html>