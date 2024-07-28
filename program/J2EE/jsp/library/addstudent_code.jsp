<%@ page contentType="text/html; charset=iso-8859-1" language="java" import="java.sql.*" errorPage="" %>
<%@ page contentType="text/html; charset=iso-8859-1" language="java" import="javax.sql.*" errorPage="" %>
<%
try
{
Class.forName("sun.jdbc.odbc.JdbcOdbcDriver");
Connection conn;
conn=DriverManager.getConnection("jdbc:odbc:student1DSN");
int id=Integer.parseInt(request.getParameter("t1"));
String nm=request.getParameter("t2");
String co=request.getParameter("t3");
int mo=Integer.parseInt(request.getParameter("t4"));
String ct=request.getParameter("t5");

PreparedStatement pstmt=conn.prepareStatement("insert into student values(?,?,?,?,?)");
pstmt.setInt(1,id);
pstmt.setString(2,nm);
pstmt.setString(3,co);
pstmt.setInt(4,mo);
pstmt.setString(5,ct);

int i=pstmt.executeUpdate();
if(i==1)
{
response.sendRedirect("viewdata.jsp");
}
else
{
out.println("Record Not Inserted");
}
pstmt.close();
conn.commit();
conn.close();
}
catch(Exception e)
{
	
}
%>