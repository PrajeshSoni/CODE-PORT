import javax.servlet.*;
import javax.servlet.http.*;
import java.io.*;
public class hsdemo1 extends HttpServlet
{
	public void doGet(HttpServletRequest req,HttpServletResponse res)
	{
		try
		{
			PrintWriter pw = res.getWriter();
			pw.println("<center><h1>HttpServlet Demo Program</h1></center>");
			pw.println("<hr>");
			pw.println("<form action=hsdemo1 method=Post>");
			pw.println("<center>Enter Value<input type=text name=t1>");
			pw.println("<input type=submit value=Next></center>");
			pw.println("</form>");
		}
		catch(Exception e){}
	}
	public void doPost(HttpServletRequest req,HttpServletResponse res)
	{
		try
		{
			PrintWriter pw = res.getWriter();
			String result = req.getParameter("t1");
			pw.println("" + result);
		}
		catch(Exception e){}
	}
}