<%@ page contentType="text/html; charset=iso-8859-1" language="java" import="java.sql.*" errorPage="" %>
<%@ page contentType="text/html; charset=iso-8859-1" language="java" import="javax.sql.*" errorPage="" %>
<%
try
{
Class.forName("sun.jdbc.odbc.JdbcOdbcDriver");
Connection conn;
conn=DriverManager.getConnection("jdbc:odbc:student1DSN");
int id=Integer.parseInt(request.getParameter("t1"));
String bnm=request.getParameter("t2");
String ou=request.getParameter("t3");
int isbn=Integer.parseInt(request.getParameter("t4"));

PreparedStatement pstmt=conn.prepareStatement("insert into book values(?,?,?,?)");
pstmt.setInt(1,id);
pstmt.setString(2,bnm);
pstmt.setString(3,ou);
pstmt.setInt(4,isbn);

int i=pstmt.executeUpdate();
if(i==1)
{
	response.sendRedirect("bookview.jsp");
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