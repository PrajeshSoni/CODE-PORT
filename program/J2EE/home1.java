import javax.servlet.*;
import javax.servlet.http.*;
import java.io.*;

public class home1 extends HttpServlet
{
	public void doGet(HttpServletRequest req,HttpServletResponse res)
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
			pw.println("<td width=633><form action=hsform method=Post><br>");
			pw.println("<center>Enter Rollno<input type=text name=t1>");
			pw.println("<center>Enter Name<input type=text name=t2>");
			pw.println("<center>course<input type=text name=t3>");
			pw.println("<center>Birthdate<input type=text name=t4>");
			pw.println("<center>Address<input type=text name=t5>");
			pw.println("<center>city<input type=text name=t6>");
			pw.println("<center>contactno<input type=text name=t7>");
			pw.println("<input type=submit value=Next></center>");
		
			
			pw.println("</tr>");
	
			pw.println("<tr>");
			pw.println("<td colspan=2><p align=center class=style4><strong>Behind Gandhi Hospital, K p Boarding Campus,Wadhwan City</strong></p>");
			pw.println("<p align=center class=style4><strong>Phone No : 02752 225313 </strong></p></td>");
			pw.println("</tr>");
	
			pw.println("</table>");
			
			
			}
		catch (Exception e){}
	}
	public void doPost(HttpServletRequest req, HttpServletResponse res)
	{
		try
		{
			PrintWriter pw=res.getWriter();		
			
			String result=req.getParameter("t1");
			String result1=req.getParameter("t2");
			String result2=req.getParameter("t3");
			String result3=req.getParameter("t4");
			String result4=req.getParameter("t5");
			String result5=req.getParameter("t6");
			String result6=req.getParameter("t7");
			/*pw.println(""+result);
			pw.println(""+result1);
			pw.println(""+result2);
			pw.println(""+result3);
			pw.println(""+result4);
			pw.println(""+result5);
			pw.println(""+result6);
			*/
			/*connect
			insertquery*/
			//rs.close();
			res.sendRedirect("hsform");
		}
		catch(Exception e){}
	}
}


			