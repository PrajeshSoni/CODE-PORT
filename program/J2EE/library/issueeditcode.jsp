<%@ page contentType="text/html; charset=iso-8859-1" language="java" import="java.sql.*" errorPage="" %>
<%@ page contentType="text/html; charset=iso-8859-1" language="java" import="javax.sql.*" errorPage="" %>
<%
try
{
Class.forName("sun.jdbc.odbc.JdbcOdbcDriver");
Connection conn;
conn=DriverManager.getConnection("jdbc:odbc:student1DSN");

int iid=Integer.parseInt(request.getParameter("t1"));
int sid=Integer.parseInt(request.getParameter("t2"));
int bid=Integer.parseInt(request.getParameter("t3"));
String dt=request.getParameter("t4");

PreparedStatement pstmt=conn.prepareStatement("update issueregister set stud_id=?,book_id=?,date1=? where issue_id=?");
pstmt.setInt(1,sid);
pstmt.setInt(2,bid);
pstmt.setString(3,dt);
pstmt.setInt(4,iid);



int i=pstmt.executeUpdate();
if(i==1)
{
response.sendRedirect("issueview.jsp");
}
else
{
out.println("Record Not Updated...");
}
pstmt.close();
conn.commit();
conn.close();
}
catch(Exception e){
	out.println(""+e);
}
%>