<%@ page contentType="text/html; charset=iso-8859-1" language="java" import="java.sql.*" errorPage="" %>
<%@ page contentType="text/html; charset=iso-8859-1" language="java" import="javax.sql.*" errorPage="" %>
<%
try
{
Class.forName("sun.jdbc.odbc.JdbcOdbcDriver");
Connection conn;
conn=DriverManager.getConnection("jdbc:odbc:student1DSN");
int iid=Integer.parseInt(request.getParameter("issue_id"));
PreparedStatement pstmt=conn.prepareStatement("delete from issueregister where issue_id=?");
pstmt.setInt(1,iid);
int i=pstmt.executeUpdate();
if(i==1)
{
response.sendRedirect("issueview.jsp");
}
else
{
out.println("Record Not Deleted...");
}
pstmt.close();
conn.commit();
conn.close();
}
catch(Exception e){
	out.println(""+e);
}
%>