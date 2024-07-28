<%@ page contentType="text/html; charset=iso-8859-1" language="java" import="java.sql.*" errorPage="" %>
<%@ page contentType="text/html; charset=iso-8859-1" language="java" import="javax.sql.*" errorPage="" %>
<%
try
{
	Class.forName("sun.jdbc.odbc.JdbcOdbcDriver");
	Connection conn;
	
	conn=DriverManager.getConnection("jdbc:odbc:student1DSN");
	
	String snm=request.getParameter("stu");
	String bnm=request.getParameter("boo");
	String dt=request.getParameter("t4");
	out.println(snm+" "+bnm+" ");
	
	
	
	
	
	PreparedStatement pstmt=conn.prepareStatement("insert into issueregister(stud_id,book_id,date1) values(?,?,?)");

pstmt.setString(1,snm);
pstmt.setString(2,bnm);
pstmt.setString(3,dt);
int i=pstmt.executeUpdate();
if(i==1)
{
		response.sendRedirect("issueview.jsp");
}
else
{
		out.println("error");
}
	conn.commit();
	conn.close();
}
catch(Exception e)
{
	out.println(e);
}
%>