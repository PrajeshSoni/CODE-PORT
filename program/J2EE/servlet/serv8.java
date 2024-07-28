import java.sql.*;
import javax.sql.*;
import javax.servlet.*;
import java.io.*;


public class serv8 extends GenericServlet
{
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
			out.println("<tr><th>RollNo</th><th>Name</th><th>City</th></tr>");
			
			while(rs.next())
			{
				out.println("<tr>");
				out.println("<td>");
				out.println(""+rs.getInt(1));
				out.println("</td>");
				
				out.println("<td>");
				out.println(rs.getString(2));
				out.println("</td>");
				
				out.println("<td>");
				out.println(rs.getString(3));
				out.println("</td>");
				out.println("</tr>");
			}
			out.println("</table>");
			stmt.close();
			conn.close();
		}catch(Exception e){}
	}
	
}