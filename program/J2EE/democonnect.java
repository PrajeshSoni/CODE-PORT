import javax.servlet.*;
import java.io.*;
import java.sql.*;
import javax.sql.*;

public class democonnect implements Servlet
{
		ServletConfig cg;
		public void init(ServletConfig config)
		{
			config=cg;
		}
		public void service(ServletRequest req,ServletResponse res)
	{
		try
		{
			PrintWriter pw=res.getWriter();
			Class.forName("sun.jdbc.odbc.JdbcOdbcDriver");
			Connection conn=DriverManager.getConnection("jdbc:odbc:studDSN");
			Statement stmt=conn.createStatement();
			int i=stmt.executeUpdate("insert into student values(52,'himani','than')");
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
		catch(Exception e){
			System.out.println("" +e);
		}
	}
		public void destroy(){}
		public ServletConfig getServletConfig()
		{
			return cg;
		}
		public String getServletInfo()
		{
			String str="This is my first servlet";
			return str;
		}
}