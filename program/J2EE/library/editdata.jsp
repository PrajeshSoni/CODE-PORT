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
<td width="633">
<%
try
{
int id=Integer.parseInt(request.getParameter("id"));
Class.forName("sun.jdbc.odbc.JdbcOdbcDriver");
Connection conn;
conn=DriverManager.getConnection("jdbc:odbc:student1DSN");
Statement stmt=conn.createStatement();
ResultSet rs=stmt.executeQuery("select * from student where id="+id+"");
%>
<form action="editdata_code.jsp" method="post">
<table width="522" height="165" border="1">
<%
if(rs.next())
{
%>
<tr>
<td colspan="2"><div align="center"><strong>Student Information</strong> </div></td>
</tr>
<tr>
<td width="241">Enter Id </td>
<td width="265"><label>
<input type="text" name="t1" value="<%=rs.getInt(1) %>"/>
</label></td>
</tr>
<tr>
<td>Enter Name </td>
<td><input type="text" name="t2" value="<%=rs.getString(2) %>"/></td>
</tr>
<tr>
<td>Enter Course</td>
<td><input type="text" name="t3" value="<%=rs.getString(3) %>"/></td>
</tr>
<tr>
  <td>Mobile Number </td>
  <td><input type="text" name="t4" value="<%=rs.getInt(4) %>"/></td>
</tr>
<tr>
  <td>City</td>
  <td><input type="text" name="t5" value="<%=rs.getString(5) %>"/></td>
</tr>
<tr>
<td><div align="right">
<input type="submit" name="Submit" value="Save" />
</div></td>
<td><input type="reset" name="reset" value="Cancel" /></td>
</tr>
</table>
<%
}
}
catch(Exception e){}
%>
</form>
</td>
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
              <li class="one_third lastbox"><img src="images/demo/p4.jpg"width="290" height="180" alt=""></li>      </ul>
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