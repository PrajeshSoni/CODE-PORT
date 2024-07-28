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
    </nav>  </header>
</div>
<!-- content -->
<div class="wrapper row2">
  <div id="container" class="clear">
    <!-- Slider -->
<%@ page contentType="text/html; charset=iso-8859-1" language="java" import="java.sql.*" errorPage="" %>
<%@ page contentType="text/html; charset=iso-8859-1" language="java" import="javax.sql.*" errorPage="" %>
<!--<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {
font-size: 36px;
font-weight: bold;
font-style: italic;
}
-->
<!--</style>
</head>
<body>-->
<table width="960" height="360" border="1">
<!--<tr>
<td colspan="2"><span class="style1">SMT S.J.VARMORA MAHILA COLLEGE </span></td>
</tr>-->
<tr>
<!--<td width="133" height="259"><p align="center"><strong>MENU</strong></p>
<p align="center"><a href="index.jsp">HOME</a></p>
<p align="center"><a href="adddata.jsp">ADD</a></p>
<p align="center"><a href="viewdata.jsp">VIEW</a></p>
<p align="center">&nbsp;</p></td>-->
<td width="633">
<center>
<h1>Book Information</h1>
<table border="2">
<tr>
<th>Book ID</th>
<th>Book Name</th>
<th>outhet</th>
<th>ISBN Number</th>

<th>Edit</th>
<th>Delete</th>
</tr>
<%
try
{

Class.forName("sun.jdbc.odbc.JdbcOdbcDriver");
Connection conn;
conn=DriverManager.getConnection("jdbc:odbc:student1DSN");
Statement stmt=conn.createStatement();
ResultSet rs=stmt.executeQuery("select * from book");
while(rs.next())
{
int id=rs.getInt(1);
out.println("<tr>");
out.println("<td>");
out.println(""+id);
out.println("</td><td>");
out.println(rs.getString(2));
out.println("</td><td>");
out.println(rs.getString(3));
out.println("</td><td>");
out.println(rs.getString(4));
out.println("</td><td>");
out.println("<a href='bookeditdata.jsp?id="+id+"'>Edit</a>");
out.println("</td><td>");
out.println("<a href='bookdelete.jsp?id="+id+"'>Delete</a>");
out.println("</td></tr>");
}
rs.close();
stmt.close();
conn.close();
}
catch(Exception e){}
%>
</table>
</center>
</td>
</tr>
<!--<tr>-->
<!--<td colspan="2"><p align="center"><strong>Behind Gandhi Hospital, K p Boarding Campus,Wadhwan City</strong></p>
<p align="center"><strong>Phone No : 02752 225313 </strong></p></td>-->
</tr>
</table>
</body>
</html>

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
