import java.sql.*;
import javax.sql.*;
import javax.servlet.*;
import javax.servlet.http.*;
import java.io.*;
public class deletedata extends HttpServlet
{
	int rno;
	String nm,ct;
	Connection conn;
	Statement stmt;
	ResultSet rs;
	
	public void doGet(HttpServletRequest req,HttpServletResponse res)
	{
		try
		{
			PrintWriter out=res.getWriter();
			res.setContentType("text/html");
			rno=Integer.parseInt(req.getParameter("t1"));
			nm=req.getParameter("t2");
			ct=req.getParameter("t3");
			Class.forName("sun.jdbc.odbc.JdbcOdbcDriver");
			conn=DriverManager.getConnection("jdbc:idbc:studdsn");
			stmt=conn.createStatement();
			int i=stmt.executeUpdate("delete studinfo where rollno="+rno);
			if(i==1)
			{
				out.println("Record Deleted");
				out.println("<a href='/examples/homepage'>Back to home</a>");
			}
			
		}
		catch(Exception e){}
	}
}