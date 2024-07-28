import java.io.*;
import javax.servlet.*;
import javax.sql.*;
import java.sql.*;
public class myserv7 extends GenericServlet
{

	int rno;
	String nm,ct;
	public void service(ServletRequest req,ServletResponse res)
	{
		try
		{
			rno=Integer.parseInt(req.getParameter("rollno"));
			PrintWriter pw=res.getWriter();
			Class.forName("sun.jdbc.odbc.JdbcOdbcDriver");
			Connection conn=DriverManager.getConnection("jdbc:odbc:studDSN");
			Statement stmt=conn.createStatement();
			ResultSet rs=stmt.executeQuery("select * from student where rollno="+rno+"");
	
		if(rs.next())
		{
			nm=rs.getString(2);
			ct=rs.getString(3);
		}
		
		pw.println("<form action='myserv8' method='POST'>");
		pw.println("<center><h1> student regstration form</h1><hr>");
		pw.println("enter rollno<input type=text name=t1 value="+rno+"><br>");
		
		pw.println("enter Name<input type=text name=t2 value='"+nm+"'><br>");
		pw.println("enter city<input type=text name=t3 value='"+ct+"'><br>");

		pw.println("<input type=submit value=Update>");
		pw.println("<input type=reset value=cancel></center>");
		pw.println("</form>");
		
		rs.close();
		stmt.close();
		conn.close();
		
		
		}
		catch(Exception e)
		{
			System.out.println(""+e);
		}
	}
}