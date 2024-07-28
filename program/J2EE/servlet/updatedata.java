import java.sql.*;
import javax.sql.*;
import javax.servlet.*;
import javax.servlet.http.*;
import java.io.*;

public class updatedata extends HttpServlet
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
			rno=Integer.parseInt(req.getParameter("rno"));
			Class.forName("sun.jdbc.odbc.JdbcOdbcDriver");
			conn=DriverManager.getConnection("jdbc:idbc:studdsn");
			stmt=conn.createStatement();
			String str="select * from studinfo where rollno="+rno;
			rs=stmt.executeQuery(str);
			while(rs.next())
			{
				out.println("<form action='updatedata' method='post'>");
				out.println("Enter Roll no:<input type=text name=t1 value="+rs.getInt(1)+"><br>");
				out.println("Enter Name:<input type=text name=t2 value="+rs.getString(2)+"><br>");
				out.println("Enter Roll no:<input type=text name=t1 value="+rs.getString(3)+"><br>");
				out.println("<input type=submit value=Save>");
				out.println("<input type=reset value=Clear>");
				out.println("</form>");
				
			}
		}
		catch(Exception e){}
	}
	public void doPost(HttpServletRequest req,HttpServletResponse res)
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
			int i=stmt.executeUpdate("update studinfo set sname='"+nm+"',city='"+ct+"' where rollno="+rno+"");
			if(i==1)
			{
				out.println("Record Inserted");
				out.println("<a href='/examples/homepage'>Back to home</a>");
			}
			
		}
		catch(Exception e){}
	}
}