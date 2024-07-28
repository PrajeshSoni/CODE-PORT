import java.sql.*;
import javax.sql.*;
import javax.servlet.*;
import javax.servlet.http.*;
import java.io.*;


public class insertdata extends HttpServlet
{
			int rno;
			String nm,ct;
			Connection conn;
			Statement stmt;
			ResultSet rs;
			PrintWriter out;
			public void doGet(HttpServletRequest req,HttpServletResponse res)
			{
			try
			{
			PrintWriter out=res.getWriter();
			res.setContentType("text/html");
			out.println("<form action=insertdata method=post>");
			out.println("Enter RollNo<input type=text name=t1><br>");
			out.println("Enter Name<input type=text name=t2><br>");
			out.println("Enter City<input type=text name=t3><br>");
			out.println("<input type=submit value=Save><br>");
			out.println("<input type=reset value=Clear><br>");
			out.println("</form>"); 
			}catch(Exception e){}
		}
		
	
		public void doPost(HttpServletRequest req,HttpServletResponse res)
		{
			try
			{
			PrintWriter out=res.getWriter();
			rno=Integer.parseInt(req.getParameter("t1"));
			nm=req.getParameter("t2");
			ct=req.getParameter("t3");
			
			Class.forName("sun.jdbc.odbc.JdbcOdbcDriver");
			conn=DriverManager.getConnection("jdbc:odbc:studdsn");
			stmt=conn.createStatement();
			int i=stmt.executeUpdate("insert into studinfo(rollno,sname,city)values("+rno+",'"+nm+"','"+ct+"')");
			if(i==1)
			{
				out.println("Record Inserted..");
			}
			
			}catch(Exception e){}
		}
	}
	