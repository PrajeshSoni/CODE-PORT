import java.io.*;
import java.sql.*;
import javax.sql.*;
import javax.servlet.*;
import javax.servlet.http.*;

public class hsform extends HttpServlet
{
	public void doPost(HttpServletRequest req,HttpServletResponse res)
	{
		try
		{
			PrintWriter pw=res.getWriter();
			pw.println("<center><h1>Http Servlet home page</h1>");
			pw.println("<br>");
			
			pw.println("<table width=782 height=498 border=1>");
			pw.println("<tr>");
			pw.println("<td colspan=2><div align=center><span class=style1>SMT S.J.VARMORA MAHILA COLLEGE </span></div></td>");
			pw.println("</tr>");
	
			pw.println("<tr>");
			pw.println("<td width=100 height=100<p align=center class=style2>MENU</p>");
			pw.println("<p align=center><span class=style3><a href=home>HOME</a></span></p>");
			pw.println("<p align=center class=style3><a href=adddata>ADD</a></p>");
			pw.println("<p align=center><span class=style3><a href=viewdata>VIEW</a></span></p>");
			pw.println("<p align=center>&nbsp;</p></td>");
			
			pw.println("<td>");
						
			Class.forName("sun.jdbc.odbc.JdbcOdbcDriver");
			Connection conn=DriverManager.getConnection("jdbc:odbc:studDSN");
			Statement stmt=conn.createStatement();
			ResultSet rs;
			rs=stmt.executeQuery("Select *from student");
			while(rs.next())
			{
				System.out.println(" "+rs.getInt("rollno"));
				System.out.println(rs.getString("name"));
				System.out.println(rs.getString("city"));
			}
			rs.close();
			stmt.close();
			conn.close();
			
			
			pw.println("<table width=150 height=100 border=1>");
			pw.println("<tr>");
			
			String result=req.getParameter("t1");
			String result1=req.getParameter("t2");
			String result2=req.getParameter("t3");
			String result3=req.getParameter("t4");
			String result4=req.getParameter("t5");
			String result5=req.getParameter("t6");
			String result6=req.getParameter("t7");
			pw.println("<td>"+result);
			pw.println("<td>"+result1);
			pw.println("<td>"+result2);
			pw.println("<td>"+result3);
			pw.println("<td>"+result4);
			pw.println("<td>"+result5);
			pw.println("<td>"+result6);
			pw.println("</table>");
			
			pw.println("</tr>");
	
			pw.println("<tr>");
			pw.println("<td colspan=2><p align=center class=style4><strong>Behind Gandhi Hospital, K p Boarding Campus,Wadhwan City</strong></p>");
			pw.println("<p align=center class=style4><strong>Phone No : 02752 225313 </strong></p></td>");
			pw.println("</tr>");
	
			pw.println("</table>");
			
			//pw.println("<form action=hsform method=Post>");
			//pw.println("");
			
				//pw.println("</form>");

			}
		catch (Exception e){}
	}
	
}


			