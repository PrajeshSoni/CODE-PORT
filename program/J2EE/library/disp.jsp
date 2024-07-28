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

Statement stmt=conn.createStatement();




ResultSet rs=stmt.executeQuery("select * from issueregister where stud_id=(select id from student where sname='"+snm+"') and book_id=(select id from book where book_name='"+bnm+"')");
while(rs.next())
{

out.println("<tr>");
out.println("<td>");
out.println(""+rs.getInt(1));
out.println("</td><td>"); 
out.println(rs.getInt(2));
out.println("</td><td>");
out.println(rs.getInt(3));
out.println("</td><td>");
out.println(rs.getString(4));
out.println("</td><td>");

}
rs.close();

conn.commit();
conn.close();
}
catch(Exception e)
{
	out.println(e);
}
%>