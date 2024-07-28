<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<title>Basic 89</title>
<meta charset="UTF-8">
<link rel="stylesheet" href="styles/layout.css" type="text/css">
</head>
<body>
<div class="wrapper row1">
  <header id="header" class="clear">
    <div id="hgroup">
      <h1><a href="#"> J.S Library</a></h1>
      <h2>surendranagar</h2>
	
    </div>
   <ul id="nav">
	<li><a href="home.jsp">Home</a></li>
	<li><a href="#">Student</a>
		<ul>
				<li><a href="addstudent.jsp">Add</a></li>
				<li><a href="viewdata.jsp">View</a></li>
		</ul>
	</li>
<li><a href="#">Book</a>
		<ul>
				<li><a href="addbook.jsp">Add</a></li>
				<li><a href="bookview.jsp">View</a>
				</li>
		</ul>
	</li>

	<li><a href="#">Issue Register</a>
		<ul>
				<li><a href="addissue.jsp">Add</a></li>
				<li><a href="issueview.jsp">View</a></li>
		</ul>
	</li>
	<!--<li><a href="#">Logout</a>-->
</ul>
  </header>
</div>
<!-- content -->
<div class="wrapper row2">
  <div id="container" class="clear">
    <!-- Slider -->
<%@ page contentType="text/html; charset=iso-8859-1" language="java" import="java.sql.*" errorPage="" %>
<%@ page contentType="text/html; charset=iso-8859-1" language="java" import="javax.sql.*" errorPage="" %>
<table width="960" height="360" border="1">
<tr>
<td width="633">
<center>
<h1>Student Information</h1>
<table border="2">
<tr>
<th>Student ID</th>
<th>Student Name</th>
<th>Course</th>
<th>Mobile Number</th>
<th>City</th>
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
ResultSet rs=stmt.executeQuery("select * from student");
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
out.println(rs.getString(5));
out.println("</td><td>");
out.println("<a href='editdata.jsp?id="+id+"'>Edit</a>");
out.println("</td><td>");
out.println("<a href='deletedata_code.jsp?id="+id+"'>Delete</a>");
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

</tr>
</table>
</body>
</html>

    <!-- main content -->
    <div id="homepage">
      <section id="latest">
        <article>
          <figure>
            <ul class="clear">
      <li class="one_third"><img src="images/l3.jfif" width="290" height="180" alt=""></li>
              <li class="one_third"><img src="images/l2.jfif" width="290" height="180" alt=""></li>
              <li class="one_third lastbox"><img src="images/demo/p4.jpg"width="290" height="180" alt=""></li>      
			  </ul>           
        </article>
      </section>
    </div>
    <!-- main content -->
    <div id="content">
      <section id="posts" class="last clear">
        <ul>
          <li>
            <article class="clear">
 </div>
</div>
<!-- Footer -->
<div class="wrapper row3">
  <footer id="footer" class="clear">
    <p class="fl_left">Copyright &copy; 2019 - All Rights Reserved</a></p>
    <p class="fl_right">Template by bhalodiya kinjal</a></p>
  </footer>
</div>
</body>
</html>
