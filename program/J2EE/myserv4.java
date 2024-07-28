import javax.servlet.*;
import java.io.*;
import java.sql.*;
import javax.sql.*;
public class myserv4 implements Servlet
{
	ServletConfig cg;
	PrintWriter pw;
	public void init(ServletConfig config)
	{
		config=cg;
	}
	public void service(ServletRequest req,ServletResponse res)
	{
		try
		{
			pw=res.getWriter();
			Class.forName("sun.jdbc.odbc.JdbcOdbcDriver");
			Connection conn= DriverManager.getConnection("jdbc:odbc:studDSN");
			Statement stmt=conn.createStatement();
			
			int i=stmt.executeUpdate("insert into student values(9,'zzxx','rajkot')");
			if(i==1)
			{
				pw.println("Record Inserted");
			}
			else
			{
				pw.println("Record not Inserted");
			}
			stmt.close();
			conn.close();
		}
		catch(Exception e)
		{
			pw.println(""+e);
		}
	}
	public void destroy(){}
	public ServletConfig getServletConfig()
	{
		return cg;
	}
	public String getServletInfo()
	{
		String str = "This is my servlet";
		return str;
	}
}