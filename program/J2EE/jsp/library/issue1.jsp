<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<title>Basic 89</title>
<meta charset="UTF-8">
<link rel="stylesheet" href="styles/layout.css" type="text/css">
<!--[if lt IE 9]><script src="scripts/html5shiv.js"></script><![endif]-->
</head>
<body>
<div class="wrapper row1">
  <header id="header" class="clear">
    <div id="hgroup">
      <h1><a href="#">Basic 89</a></h1>
      <h2>Free HTML5 Website Template</h2>
    </div>
   <nav>
      <ul>
        <li><a href="index.jsp">Home</a></li>
        <li><a href="#">student</a>
		<ul>
			<li><a href="addstudent.jsp">Add Student</li>
			<li><a href="viewdata.jsp">View Student</li>
		</ul>	
		
        <li><a href="#">Book</a></li>
		<ul>
			<li><a href="addbook.jsp">Add Book</li>
			<li><a href="bookview.jsp">View Book</li>
		</ul>	
		
		<li><a href="#">Issue Register</a></li>
		<ul>
			<li><a href="addissue.jsp">Add IssueBook</li>
			<li><a href="issueview.jsp">View IssueBook</li>
		</ul>	
        <li class="last"><a href="logout.jsp">Logout</a></li>
      </ul>
    </nav>
  </header>
</div>
<!-- content -->
<div class="wrapper row2">
  <div id="container" class="clear">
    <!-- Slider -->
	<form action="issue2.jsp" method="post">
    <table width="960" height="360"border="1">
  <tr>
    <td colspan="2"><div align="center">ISSUE BOOK </div></td>
    </tr>
  <tr>
    <td width="139">issue_id </td>
    <td width="805"><label>
      <input type="text" name="t1">
    </label></td>
  </tr>
    <td>date </td>
    <td><input type="text" name="t4"></td>
  </tr>
     <td><label>
      <div align="right">
        <input type="submit" name="Submit" value="Submit">
        </div>
    </label></td>
    <td><label>
      <input type="reset" name="Submit2" value="Reset">
    </label></td>
  </tr>
</table>
</form>

    <!-- main content -->
    <div id="homepage">
      <!-- services area -->
    
      <!-- / services area -->
      <!-- ########################################################################################## -->
      <!-- ########################################################################################## -->
      <!-- ########################################################################################## -->
      <!-- ########################################################################################## -->
      <!-- / latest work -->
      <section id="latest">
        <article>
          <figure>
            <ul class="clear">
              <li class="one_third"><img src="images/demo/290x180.gif" width="290" height="180" alt=""></li>
              <li class="one_third"><img src="images/demo/290x180.gif" width="290" height="180" alt=""></li>
              <li class="one_third lastbox"><img src="images/demo/290x180.gif" width="290" height="180" alt=""></li>
            </ul>
           
        </article>
      </section>
      <!-- / latest work -->
    </div>
    <!-- main content -->
    <div id="content">
      <section id="posts" class="last clear">
        <ul>
          <li>
            <article class="clear">
            <!--  <figure><img src="images/demo/180x150.gif" alt="">
                <figcaption>
                  <h2>Indonectetus facilis leo nibh</h2>
                  <p>This is a W3C compliant free website template from <a href="https://www.os-templates.com/" title="Free Website Templates">OS Templates</a>. For full terms of use of this template please read our <a href="https://www.os-templates.com/template-terms">website template licence</a>.</p>
                  <footer class="more"><a href="#">Read More &raquo;</a></footer>
                </figcaption>
              </figure>
            </article>
          </li>
          <li class="last">
            <article class="clear">
              <figure><img src="images/demo/180x150.gif" alt="">
                <figcaption>
                  <h2>Indonectetus facilis leo nibh</h2>
                  <p>You can use and modify the template for both personal and commercial use. You must keep all copyright information and credit links in the template and associated files. For more HTML5 templates visit <a href="https://www.os-templates.com/">free website templates</a>.</p>
                  <footer class="more"><a href="#">Read More &raquo;</a></footer>
                </figcaption>
              </figure>
            </article>
          </li>
        </ul>
      </section>
    </div>-->
    <!-- right column 
    <aside id="right_column">
      <h2 class="title">Categories</h2>
      <nav>
        <ul>
          <li><a href="#">Free Website Templates</a></li>
          <li><a href="#">Free CSS Templates</a></li>
          <li><a href="#">Free XHTML Templates</a></li>
          <li><a href="#">Free Web Templates</a></li>
          <li><a href="#">Free Website Layouts</a></li>
          <li><a href="#">Free HTML 5 Templates</a></li>
          <li><a href="#">Free Webdesign Templates</a></li>
          <li><a href="#">Free FireWorks Templates</a></li>
          <li><a href="#">Free PNG Templates</a></li>
          <li class="last"><a href="#">Free Website Themes</a></li>
        </ul>
      </nav> -->
      <!-- /nav -->
   <!-- </aside> -->
    <!-- / content body -->
 </div>
</div>
<!-- Footer -->
<div class="wrapper row3">
  <footer id="footer" class="clear">
    <p class="fl_left">Copyright &copy; 2018 - All Rights Reserved - <a href="#">Domain Name</a></p>
    <p class="fl_right">Template by <a target="_blank" href="https://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
  </footer>
</div>
</body>
</html>
