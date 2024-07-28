<%@ page contentType="text/html; charset=iso-8859-1" language="java" import="java.sql.*" errorPage="" %>
<%@ page contentType="text/html; charset=iso-8859-1" language="java" import="javax.sql.*" errorPage="" %>
<%
try
{
Class.forName("sun.jdbc.odbc.JdbcOdbcDriver");
Connection conn;
conn=DriverManager.getConnection("jdbc:odbc:student1DSN");
int id=Integer.parseInt(request.getParameter("id"));
PreparedStatement pstmt=conn.prepareStatement("delete from student where id=?");
pstmt.setInt(1,id);
int i=pstmt.executeUpdate();
if(i==1)
{
response.sendRedirect("viewdata.jsp");
}
else
{
out.println("Record Not Deleted...");
}
pstmt.close();
conn.commit();
conn.close();
}
catch(Exception e){}
%>