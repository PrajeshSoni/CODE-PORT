import javax.servlet.*;
import javax.servlet.http.*;
import java.io.*;

public class home extends HttpServlet
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
			pw.println("<p align=center class=style3><a href=home1>ADD</a></p>");
			pw.println("<p align=center><span class=style3><a href=viewdata>VIEW</a></span></p>");
			pw.println("<p align=center>&nbsp;</p></td>");
			pw.println("<td width=633><img src=i1.jpg width=300 height=480 longdesc=i1.jpg/></td>");
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
			
			String result=req.getParameter("MENU");
			String result1=req.getParameter("home");
			String result2=req.getParameter("ADD");
			String result3=req.getParameter("VIEW");
			pw.println(""+result);
			pw.println(""+result1);
			pw.println(""+result2);
			pw.println(""+result3);
			
		}
		catch(Exception e){}
	}
}


			