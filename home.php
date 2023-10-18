<html>
<head>
       <link rel="stylesheet" type="text/css" href="mystyle.css">
       <style>
        a {
             color: white;
          }
        .info
        {
          font-family: 'Poppins';
          font-size: 20px;
          margin:auto;
          align:center;
          width: 700px;
          height: 150px;
          align-content: center;
        }
      .slider {
        width: 600px;
        height: 400px;
        background-color: yellow;
        margin-left: auto;
        margin-right: auto;
        margin-top: 0px;
        text-align: center;
        overflow: hidden;
      }
      .image-container {
        width: 2000px;
        background-color: pink;
        height: 400px;
        clear: both;
        position: relative;
        -webkit-transition: left 2s;
        -moz-transition: left 2s;
        -o-transition: left 2s;
        transition: left 2s;
      }
      .slide {
        float: left;
        margin: 0px;
        padding: 0px;
        position: relative;
      }
      #slide-1:target ~ .image-container {
        left: 0px;
      }
      #slide-2:target ~ .image-container {
        left: -600px;
      }
      #slide-3:target ~ .image-container {
        left: -1200px;
      }
      .buttons {
        position: relative;
        top: -20px;
      }
      .buttons a {
        display: inline-block;
        height: 15px;
        width: 15px;
        border-radius: 50px;
        background-color: lightgreen;
      }
      .hod
      {
        padding-top:420px;
        padding-left:360px;
      }
      .text
      {
        color:grey;

      }
      .b1
      {
         
      }
      
    </style>
       
</head>
<body><div class="b1">

<img src="biet.JPG" alt="Girl in a jacket" width="800" height="150">
<br>
<br>

  <div class="topnav">
    <a class="active" href="home.php">Home</a>
    <a href="adminLogin.php">Admin</a>
    <a href="studentlogin.php">Student</a>
   
    <a href="about.php">About</a>
  </div><br>

  <div class="slider">
      <span id="slide-1"></span>
      <span id="slide-2"></span>
      <span id="slide-3"></span>
      <div class="image-container">
        <img src="img3.jpg" class="slide" width="600" height="400" />
        <img src="img1.jpg" class="slide" width="600" height="400" />
        <img src="img2.jpg" class="slide" width="600" height="400" />
      </div>
      <div class="buttons">
        <a href="#slide-1"></a>
        <a href="#slide-2"></a>
        <a href="#slide-3"></a>
      </div>
    </div><br>

    <div class="info">

   <p> <b>Training and Placement Cell</b> is a backbone of any institute which is committed 
    to develop dynamism, strong human values technocratic and good leadership 
    qualities as per the need of rapidly changing technology working with a 
    strategy oriented planning. The Placement Cell plays a crucial role in 
    locating job opportunities for Under Graduates and Post Graduates passing
    out from the college by keeping in touch with reputed firms and industrial 
    establishments.<br><br>

    <b>The Placement Cell</b> operates round the year to facilitate contacts between
    companies and graduates. The number of students placed through the campus 
    interviews is continuously rising.<br><br>

    The Placement Cell organizes career guidance programs for all the students
    starting from first year. The cell arranges training programs like Mock 
    Interviews, Group Discussions, Communication Skills Workshop etc and it
    also organizes Public Sector Exam Training for students who are interested
    to join Government Sectors. It also invites HR Managers from different industries
    to conduct training programmes for final year students.<br><br></p>
    <br>
    
    </div>
    
     <br>
    <div class="hod">
    <img src="img4.jpg" width="400" height="450" />
    <h2> <b> Dr.Nirmala C R</b></h2>
    <b><h4>   Dean - Placement</h4></b>
    <div class="text">
    <b>Professor and Head<br>
    Department of Computer Science and Engineering</b>
    </div></div>
    <br>

    
    <div class="info">
    <h3> <b>Vision</b> </h3>
      To increase the employability skills of our students at institutional level; 
      to furnish our students with conceptualized professional skills and guiding them towards the bright
      future and career all around the globe with hard work and justice.
    <br><br>
    
    
    <h3><b>Mission</b></h3>
    <ol type="1">   
    <li>To create maximum opportunities for the placements by establishing a rapport with the employers
    multinational companies.</li>
    <li>To impart personality development training to the students to face the competitive era.</li>
    <li>To motivate and guide students to make smart career choices.</li>
    <li>To enable them to become ethical professionals with diverse skills.</li>
    </ol>



    </div>

   <?php  
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
 
    include "footer.php"; ?> 
</div>
</body>
</html>