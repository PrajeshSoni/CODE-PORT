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
PreparedStatement pstmt=conn.prepareStatement("update student set sname=?,course=?,mobileno=?,city=? where id=?");
pstmt.setString(1,nm);
pstmt.setString(2,co);
pstmt.setInt(3,mo);
pstmt.setString(4,ct);
pstmt.setInt(5,id);

int i=pstmt.executeUpdate();
if(i==1)
{
response.sendRedirect("viewdata.jsp");
}
else
{
out.println("Record Not Updated...");
}
pstmt.close();
conn.commit();
conn.close();
}
catch(Exception e){}
%>