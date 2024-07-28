import java.io.*;
import javax.servlet.*;
import javax.sql.*;
import java.sql.*;
public class myserv9 extends GenericServlet
{
	public void service(ServletRequest req,ServletResponse res)
	{
		try
		{
			PrintWriter pw=res.getWriter();
			int rno=Integer.parseInt(req.getParameter("rollno"));
			Class.forName("sun.jdbc.odbc.JdbcOdbcDriver");
			Connection conn=DriverManager.getConnection("jdbc:odbc:studDSN");
			PreparedStatement pstmt=conn.prepareStatement("delete from student where rollno=?");
			pstmt.setInt(1,rno);
			int i=pstmt.executeUpdate();
			conn.commit();
			pstmt.close();
			conn.close();
			if(i==1)
			{
				pw.println("record deleted");
			}
			else
			{
				pw.println("record not deleted");
			}
		}
		catch(Exception e)
		{
			System.out.println(""+e);
		}
	}		
}