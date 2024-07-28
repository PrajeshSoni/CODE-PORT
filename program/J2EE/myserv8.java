import java.io.*;
import javax.servlet.*;
import javax.sql.*;
import java.sql.*;
public class myserv8 extends GenericServlet
{
	public void service(ServletRequest req,ServletResponse res)
	{
		try
		{
			PrintWriter pw=res.getWriter();
			int rno=Integer.parseInt(req.getParameter("t1"));
			String nm=req.getParameter("t2");
			String ct=req.getParameter("t3");
			Class.forName("sun.jdbc.odbc.JdbcOdbcDriver");
			Connection conn=DriverManager.getConnection("jdbc:odbc:studDSN");
			PreparedStatement pstmt=conn.prepareStatement("Update student set name=?,city=? where rollno=?");
				
				pstmt.setString(1,nm);
				pstmt.setString(2,ct);
				pstmt.setInt(3,rno);				
				
				int i=pstmt.executeUpdate();
				conn.commit();
				pstmt.close();
				conn.close();
				if(i==1)
				{
					pw.println("record updated.....");
				}
				else
				{
					pw.println("record not updated....");
				}
		}
		catch(Exception e)
		{
			System.out.println(""+e);
		}
	}
}