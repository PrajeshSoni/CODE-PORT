import java.sql.*;
import javax.sql.*;
import javax.servlet.*;
import java.io.*;


public class homepage extends GenericServlet
{
			int r;
			Connection conn;
			Statement stmt;
			ResultSet rs;
			PrintWriter out;
			public void service(ServletRequest req,ServletResponse res)
			{
			try
			{
			out=res.getWriter();
			
			Class.forName("sun.jdbc.odbc.JdbcOdbcDriver");
			conn=DriverManager.getConnection("jdbc:odbc:studdsn");
			stmt=conn.createStatement();
			rs=stmt.executeQuery("select * from studinfo");
			out.println("<table border=1>");
			out.println("<tr><th>RollNo</th><th>Name</th><th>City</th><th><a href='/examples/insertdata'>Insert Data</a></th></tr>");
			
			while(rs.next())
			{
				r=rs.getInt(1);
				out.println("<tr>");
				out.println("<td>");
				out.println(""+r);
				out.println("</td>");
				
				out.println("<td>");
				out.println(rs.getString(2));
				out.println("</td>");
				
				out.println("<td>");
				out.println(rs.getString(3));
				out.println("</td>");
				
				out.println("<td>");
				out.println("<a href='/examples/updatedata?rno="+r+"'>Update</a>");
				out.println("</td>");
				
				out.println("<td>");
				out.println("<a href='/examples/deletedata?rno="+r+"'>Delete</a>");
				out.println("</td>");
				out.println("</tr>");
			}
			out.println("</table>");
			stmt.close();
			conn.close();
		}catch(Exception e){}
	}
	
}