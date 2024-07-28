<%@ page contentType="text/html; charset=iso-8859-1" language="java" import="java.sql.*" errorPage="" %>
<%@ page contentType="text/html; charset=iso-8859-1" language="java" import="javax.sql.*" errorPage="" %>
<%
try
{
Class.forName("sun.jdbc.odbc.JdbcOdbcDriver");
Connection conn;
conn=DriverManager.getConnection("jdbc:odbc:student1DSN");


int iid=Integer.parseInt(request.getParameter("t1"));

String dt=request.getParameter("t4");


PreparedStatement pstmt=conn.prepareStatement("select * from  issueregister where stud_id=? and book_id=?");

pstmt.setInt(1,sid);
pstmt.setInt(2,bid);



int i=pstmt.executeUpdate();
if(i==1)
{
response.sendRedirect("issue1.jsp");

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
	out.println(e);
}
%>