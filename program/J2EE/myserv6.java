import javax.servlet.*;
import java.io.*;
import java.sql.*;
import javax.sql.*;
public class myserv6 extends GenericServlet 
{	
	int rno;
	public void service(ServletRequest req,ServletResponse res)
	{
		
		try
		{
			PrintWriter pw=res.getWriter();
			Class.forName("sun.jdbc.odbc.JdbcOdbcDriver");
			Connection conn=DriverManager.getConnection("jdbc:odbc:studDSN");
			Statement stmt=conn.createStatement();
			ResultSet rs;
			rs=stmt.executeQuery("select * from student");
			
			pw.println("<table border=2 width=50%>");
			
			pw.println("<th>rollno</th>");
			pw.println("<th>name</th>");
			pw.println("<th>city</th>");
			pw.println("<th>Edit</th>");
			pw.println("<th>Delete</th>");
			pw.println("</tr>");
			while(rs.next())
			{
				rno=rs.getInt(1);
				pw.println("<tr>");
				pw.println("<td>");
				pw.println(""+rno);
				pw.println("</td>");
			
				pw.println("<td>");
				pw.println(""+rs.getString(2));
				pw.println("</td>");
				
				pw.println("<td>");
				pw.println(""+rs.getString(3));
				pw.println("</td>");
		
				pw.println("<td>");
				pw.println("<a href=myserv7?rollno="+rno+">Edit</a>");
				pw.println("</td>");
								
				pw.println("<td>");
				pw.println("<a href=myserv9?rollno="+rno+">Delete</a>");
				pw.println("</td>");
				pw.println("</tr>");
	
			}
			
			pw.println("</table>");
			rs.close();
			stmt.close();
			conn.close();	
		}
		catch(Exception e)
		{
			System.out.println("error" +e);
		}
	}
}